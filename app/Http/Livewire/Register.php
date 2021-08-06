<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\City;
use App\User;
use Hash;

class Register extends Component
{
    use WithFileUploads;
    public $users, $photo, $name, $username, $email, $password, $phone_number, $city, $twitter_link, $goread_link;
    public $registerForm = false;
    public $cities;

    public function render()
    {
        return view('livewire.register');
    }

    public function mount()
    {
        $this->cities = City::all();
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->username = '';
        $this->email = '';
        $this->password = '';
        $this->phone_number = '';
        $this->city = '';
        $this->twitter_link = '';
        $this->goread_link = '';
    }
    public function registerStore()
    {
        $validatedDate = $this->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|max:255',
            'phone_number' => 'required|max:9|min:9',
            'city' => 'required|max:255',
        ]);
        $imageName = '';
        if ($this->photo) {
          $imageName = $this->photo->store("avatars",'public');
        }
        $this->password = Hash::make($this->password);
        User::create([
            'name' => $this->name, 'username' => $this->username,'profile_photo'=>$imageName,'email' => $this->email, 'password' => $this->password,
            'phone_number' => $this->phone_number, 'city_id' => $this->city, 'twitter_link' => $this->twitter_link,
            'goread_link' => $this->goread_link
        ]);
        session()->flash('message', 'Your register successfully Go to the login page.');
        return redirect()->to('user/login');
       // $this->resetInputFields();
    }
}
