<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Post;
use Auth;
use App\City;
use App\Country;

class Posts extends Component
{
    use WithFileUploads;
    public $title, $book_type, $description, $book_photo, $book_photo_two, $cities_options, $countries_options, $country, $city;

    public function render()
    {
        return view('livewire.posts');
    }

    public function mount()
    {
        $this->countries_options = Country::all();
        $this->cities_options = [];
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->book_type = '';
        $this->description = '';
        $this->book_photo = '';
        $this->book_photo_two = '';
        $this->country = '';
        $this->city = '';
        $this->cities_options = [];
    }
    public function postStore()
    {
        $this->validate([
            'title' => 'required|max:255',
            'book_type' => 'required|max:255',
            'description' => 'required|max:255',
            'city' => 'required',
            'country' => 'required',
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
            'image_second' => $imageNameTwo, 'user_id' => Auth::user()->id, 'country_id' => $this->country, 'city_id' => $this->city

        ]);
        session()->flash('message', 'Your book add successfully.');
        $this->resetInputFields();
    }

    public function updatedCountry(){
        if($this->country != null){
            $this->cities_options = City::where('country_id',$this->country)->get();
        }else{
            $this->cities_options = [];
        }
    }
}
