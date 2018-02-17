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
          $user = User::select('email', 'password')->where('email',$request->input('email'))->first();
           $user1=(object)$user;
           $hisPass = md5($request->input('password'));
             $password = ($user1->password);
           if($hisPass==$password)
           {
               echo "HUY";
               session(['login' => $user1->email]);
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
        session(['logout' => 'Успешно вышли']);
        

    }
    
}