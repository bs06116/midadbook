<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Post;
use Auth;

class Posts extends Component
{
    use WithFileUploads;
    public $title, $book_type, $description, $book_photo, $book_photo_two;

    public function render()
    {
        return view('livewire.posts');
    }

    public function mount()
    {
        //$this->cities = City::all();
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->book_type = '';
        $this->description = '';
        $this->book_photo = '';
        $this->book_photo_two = '';
    }
    public function postStore()
    {
        $this->validate([
            'title' => 'required|max:255',
            'book_type' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        if (!$this->book_photo || !$this->book_photo_two) {
            $this->validate([
                'book_photo' => 'required|image',
            ]);
        }

        $imageNameOne = '';
        if ($this->book_photo) {
            $imageNameOne = $this->book_photo->storePublicly('books');
        }
        $imageNameTwo = '';
        if ($this->book_photo_two) {
            $imageNameTwo = $this->book_photo_two->storePublicly('books');
        }

        Post::create([
            'post_title' => $this->title, 'post_body' => $this->description, 'book_type' => $this->book_type, 'featured_image' => $imageNameOne,
            'image_second' => $imageNameTwo, 'user_id' => Auth::user()->id,

        ]);
        session()->flash('message', 'Your book add successfully.');
        return redirect()->to('/');    }
}
