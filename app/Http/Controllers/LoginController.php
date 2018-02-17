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
          $this->validate($request,
          [
              'email'=>'required|max:50',
              'password'=>'required|min:6',
          ]
          );
          $user = User::select('email','name', 'password')->where('email',$request->input('email'))->first();
           $user1=(object)$user;
           $hisPass = md5($request->input('password'));
             $password = ($user1->password);
           if($hisPass==$password)
           {
               session(['login' => $user1->email]);
               session(['UserName' => $user1->name]);

               session(['validited' => 'Yes']);
               session(['privilegion' => 'user']);
               return redirect()->back();
               //dump(session());

           }
           else
           {
               echo "NE HUYEY";
           }
    }
    public function logout()
    {
        session()->forget('login');
        session()->forget('UserName');
        session()->forget('validited');
        session()->forget('privilegion');
        return redirect()->back();



        

    }
    
}