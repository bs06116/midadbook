<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\City;
use App\User;
use Hash;
use App\Country;

use Illuminate\Support\Facades\Auth;

class MyprofileEdit extends Component
{
    use WithFileUploads;
    public $users, $photo, $name, $username, $email, $password, $phone_number,$cities_options, $countries_options,
    $country,  $city, $twitter_link, $goread_link, $photo_url, $user_id, $show_phone_number;
    public $registerForm = false;
    public $cities;

    public function render()
    {
        return view('livewire.myprofile-edit');
    }

    public function mount()
    {
        $this->countries_options = Country::all();
        $this->cities_options = City::all();
        $this->user_id = Auth::user()->id;
        $this->name = Auth::user()->name;
        $this->username = Auth::user()->username;
        $this->email = Auth::user()->email;
        $this->phone_number = Auth::user()->phone_number;
        $this->city = Auth::user()->city_id;
        $this->country = Auth::user()->country_id;
        $this->twitter_link = Auth::user()->twitter_link;
        $this->goread_link = Auth::user()->goread_link;
        $this->photo_url = Auth::user()->profile_photo;
        $this->show_phone_number = Auth::user()->show_phone_number;
    }

    public function update()
    {
        $user_id = $this->user_id;
        $photo_validation = '';
        if($this->photo_url == null){
            $photo_validation = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }
        $validatedDate = $this->validate([
            'name' => 'required|max:255',
            'username' => "required|unique:users,username,$user_id|max:255|string|alpha_dash",
            'email' => "required|unique:users,email,$user_id|email|max:255",
            'password' => 'required|max:255',
            'phone_number' => 'required|max:9|min:9',
            'city' => 'required|max:255',
            'photo' => $photo_validation,
        ]);

        $input = [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'phone_number' => $this->phone_number,
            'city_id' => $this->city,
            'twitter_link' => $this->twitter_link,
            'goread_link' => $this->goread_link,
            'show_phone_number' => $this->show_phone_number
        ];

        if ($this->photo) {
          $input['profile_photo'] = $this->photo->storePublicly('avatars');
        }

        $this->password = Hash::make($this->password);
        User::find(Auth::user()->id)->update($input);
        $user = User::find(Auth::user()->id);
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
        $this->city = $user->city_id;
        $this->twitter_link = $user->twitter_link;
        $this->goread_link = $user->goread_link;
        $this->photo_url = $user->profile_photo;
        $this->photo = '';
        $this->password = '';
        session()->flash('message', 'Your profile updated successfully.');
    }
}
