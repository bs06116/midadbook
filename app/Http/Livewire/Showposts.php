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
        $this->perPage = $this->perPage + 5;

    }
    public function render()
    {

        $posts = Post::orderBy('id','asc')->paginate($this->perPage);
        //$this->emit('showpostStore');
        return view('livewire.showposts',['posts' => $posts]);
        // return view('livewire.showposts', [
        //     'posts' => Post::all()
        // ]);
    }
}
