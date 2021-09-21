<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentList extends Component
{
    public $loadCommentCount;
    public $perPage;
    public $post_id, $edit_comment_id, $edit_comment_value;

    protected function getListeners()
    {
        $rerenderCommentskey = "rerenderComments".$this->post_id;
        $addNewCommentToListkey = "addNewCommentToList".$this->post_id;
        return [$rerenderCommentskey => 'rerenderComments', $addNewCommentToListkey =>  'addNewCommentToList'];
    }
  
    public function mount($post_id) 
    {
        $this->perPage = 10;
        $this->loadCommentCount = 10;
        $this->post_id = $post_id;
    }

    public function render()
    {
        $comments = Comment::where('post_id',$this->post_id)->latest()->paginate($this->loadCommentCount, ['*'], null, 1);
        return view('livewire.comment-list',['comments' => $comments]);
    }

    public function editComment($comment_id){
        $this->edit_comment_id = $comment_id;
        $this->edit_comment_value = Comment::find($comment_id)->comment;
    }

    public function cancelCommentEdit(){
        $this->edit_comment_id = null;
        $this->edit_comment_value = null;
    }

    public function updateComment($comment_id){
        $comment = Comment::find($comment_id);
        if($comment->user_id == Auth::user()->id){
            $comment->update(['comment' => $this->edit_comment_value]);
            $this->edit_comment_id = null;
            $this->edit_comment_value = null;
            session()->flash('message', 'Your comment was updated successfully.');
            $this->render();
        }
    }

    public function rerenderComments(){
        $this->render();
    }

    public function addNewCommentToList(){
        $this->loadCommentCount = 1 + $this->loadCommentCount;
    }

    public function loadMoreItems() 
    {
        $this->loadCommentCount = $this->perPage + $this->loadCommentCount;
    }
}
