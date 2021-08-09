<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class Showposts extends Component
{
    public $readyToLoad = false;
    public $perPage = 15;
    public $allike = true;
    public $totalLike = 0;
     public $alldislike = false;

    protected $listeners = [
        'load-more' => 'loadPosts',
        'postLikeCount' => 'postTotalLike',

    ];
    public function mount(){

        // if(Auth::check())
        //    DB::table('posts_like')->where('post_id', $post_id)->where('user_id', Auth::id())->delete();

        // else
        // endif;
    }
    public function loadPosts()
    {
       // $this->readyToLoad = true;
        $this->perPage = $this->perPage + 15;
    }
    public function render()
    {
        $posts = Post::with(['user'])->orderBy('id', 'DESC')->paginate($this->perPage);
        return view('livewire.showposts',['posts' => $posts]);
    }

    public function like($post_id)
    {
        DB::table('posts_like')->insert([
            'post_id' => $post_id,
            'user_id' => Auth::id()
        ]);
        $this->allike = false;
        $this->postTotalLike($post_id);
        redirect('/');
    }

    public function dislike($post_id)
    {
        DB::table('posts_like')->where('post_id', $post_id)->where('user_id', Auth::id())->delete();
        $this->allike = false;
        $this->postTotalLike($post_id);
    }

    public function postTotalLike($post_id)
    {
        $this->totalLike = DB::table('posts_like')->where('post_id', $post_id)->count();
    }

}
