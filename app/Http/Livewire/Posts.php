<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Post;

class Posts extends Component
{
    public $title,$type_add,$description;

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
        $this->type_add = '';
        $this->description = '';
    }
    public function postStore()
    {
        $validatedDate = $this->validate([
            'title' => 'required|max:255',
            'type_add' => 'required|unique:users|max:255',
            'description' => 'required',

        ]);
        $imageName = '';
        if ($this->photo) {
          $imageName = $this->photo->storePublicly('avatars');
        }
        User::create([
            'name' => $this->name, 'username' => $this->username,'profile_photo'=>$imageName,'email' => $this->email, 'password' => $this->password,
            'phone_number' => $this->phone_number, 'city_id' => $this->city, 'twitter_link' => $this->twitter_link,
            'goread_link' => $this->goread_link
        ]);
        session()->flash('message', 'Your register successfully Go to the login page.');
        $this->resetInputFields();
        return redirect()->to('user/login');
       // $this->resetInputFields();
    }

}
