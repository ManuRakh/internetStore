<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {              
          $user = new User;

        $data = $request->all();

               $user->fill($data);
       $user->save();
dump($user);
     //  return redirect('/register');
    }
}