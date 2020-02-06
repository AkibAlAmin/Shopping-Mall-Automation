<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bariwalaLogin extends Controller
{
    public function login($name, $id = null)
    {
        // $name = 'Akib';
       // $id = '2120';
        $email = 'akib.swe@gmail.com';
        $pass = '';

        return view('login',compact('name','id','email','pass'));

    }

    
    public function about()
    {
        return('');
    }

}
