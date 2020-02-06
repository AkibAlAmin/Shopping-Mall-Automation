<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bariwalaRegister extends Controller
{
    public function Register()
    {
        return view('Registration');
    }

    public function signUp()
    {
        return view('about');
        
    }
}
