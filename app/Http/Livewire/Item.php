<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Post as MidadPost;
use App\Like;
use Auth;
use DB;
use App\Comment;
use App\PostReport;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostReportMail;

class Item extends Component
{
    public $post,$postId,  $comment_count;

    protected function getListeners()
    {
        $deletePostCommentskey = "deletePostComment".$this->post->id;
        return [$deletePostCommentskey => 'deleteComment'];
    }

    public function mount(MidadPost $post)
    {
        $this->post = $post;
    }

    public function render()
    {
       $getUserLike = DB::table('posts_like')->where('post_id', $this->post->id)->where('user_id', Auth::id())->first();
        if ($getUserLike) {
            $this->postId = $this->post->id;
        } else{
            $this->postId = null;
        }
        $this->comment_count = Comment::where('post_id', $this->post->id)->count();
        return view('livewire.item');
    }
    public function like($post_id)
    {
        if (!auth()->check()) {
            return abort('403'); // or you can return the user to the login page
        }
        $like = new Like();
        $like->post_id = $post_id;
        $like->user_id = Auth::id();
        $like->save();
        $this->postId = $post_id;
        //$this->postTotalLike($post_id);
    }

    public function dislike($post_id)
    {
        DB::table('posts_like')->where('post_id', $post_id)->where('user_id', Auth::id())->delete();
        $this->postId = null;
        //$this->postTotalLike($post_id);
    }


    public function report($post_id){
        if(is_null(PostReport::where('user_id', Auth::user()->id)->where('post_id', $post_id)->first())){
            $report = PostReport::create(['user_id' => Auth::user()->id, 'post_id' => $post_id]);
            Mail::to(env('ADMIN_MAIL'))->send(new PostReportMail($report));

            $this->emit('triggerPostReport', "Post reported successfully to the admin.");
        }else{
            $this->emit('triggerPostReport', 'You have already reported for this post');
        }

    }
    public function deleteComment($comment_id, $post_id){
        $comment = Comment::find($comment_id);
        if($comment->user_id == Auth::user()->id){
            $comment->delete();
            session()->flash('message', 'Your comment was deleted successfully.');
            $this->emitTo('comment-list','rerenderComments'.$post_id);
        }
    }


}
