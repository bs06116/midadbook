<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;

class Showposts extends Component
{
    public $readyToLoad = false;
    public $perPage = 15;
    protected $listeners = [
        'load-more' => 'loadPosts'
    ];


    public function loadPosts()
    {
       // $this->readyToLoad = true;
        $this->perPage = $this->perPage + 15;

    }
    public function render()
    {
        $posts = Post::with(['user','category'])->paginate($this->perPage);
        return view('livewire.showposts',['posts' => $posts]);
    }
}
