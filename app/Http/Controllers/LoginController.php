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
          $user = User::select('email','name', 'password','Activated')->where('email',$request->input('email'))->first();
          if($user==null)
          {
              session(['validited' => 'Wrong']);

              return redirect()->back();
          }
           $user1=(object)$user;
           $hisPass = md5($request->input('password'));
             $password = ($user1->password);
             echo $user1->Activated;
             if($user1->Activated=='not')
             {
                session(['validited' => 'Not']);
                return redirect()->back();
             }
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
            session(['validited' => 'Wrong']);
            return redirect('/');
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
    public function activation($hash,$email)
    {   $user= new User;

        $user = User::select('email', 'password')->where('email',$email)->first();
        $user1=(object)$user;
      //echo ($user1->password)."".md5($user1->email);
      $UserActivation = $user1->password."".md5($user1->email);
      if ($UserActivation==$hash)
      {  session(['successActivation' => 'Аккаунт успешно активирован, можете пользоваться']);
           User::where('email', $email)
           ->update(['Activated' => "Yes"]);
    return    redirect('/');
    }
    
      else 
      {
          
      }
    }
    public function logining()
    {
        return  view('logining');
    }
    
}