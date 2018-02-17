<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {      
          $user = new User;
         
          $user = User::select('email', 'password')->first();
           dump($user);

    }
    
}