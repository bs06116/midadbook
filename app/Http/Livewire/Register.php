<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\City;
use App\User;
use Hash;
use GetStream\StreamChat\Client as StreamClient;

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
            'username' => 'required|unique:users|max:255|string|alpha_dash',
            'email' => 'required|unique:users|email|max:255',
            'password' => 'required|max:255',
            'phone_number' => 'required|regex:/(05)[0-9]/|size:10',
            'city' => 'required|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $client = new StreamClient(
            getenv("STREAM_API_KEY"),
            getenv("STREAM_API_SECRET"),
            null,
            null,
            9 // timeout
        );

        $user = [
            'id' => preg_replace('/[@\.]/', '_', $this->email),
            'name' => $this->name,
            'role' => 'user'
        ];
        $client->updateUser($user);

        $imageName = '';
        if ($this->photo) {
          $imageName = $this->photo->storePublicly('avatars');
        }
        $this->password = Hash::make($this->password);
        User::create([
            'name' => $this->name, 'username' => $this->username,'profile_photo'=>$imageName,'email' => $this->email, 'password' => $this->password,
            'phone_number' => $this->phone_number, 'city_id' => $this->city, 'twitter_link' => $this->twitter_link,
            'goread_link' => $this->goread_link
        ]);
        session()->flash('message', 'Your register successfully. Please login to add book.');
        $this->resetInputFields();
        return redirect()->to('user/login');
       // $this->resetInputFields();
    }
}
