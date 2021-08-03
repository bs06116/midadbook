<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.login');

    }
    public function signup()
    {
        return view('frontend.signup');

    }
    public function profile($id)
    {
        return view('frontend.profile');

    }
}
