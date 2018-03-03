<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Session;

use Mailgun\Mailgun;
require '..\vendor\autoload.php';
class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {      
          $user = new User;
          $this->validate($request,
          [
              'name'=>'required|max:50',
              'surname'=>'required|max:50',
              'email'=>'required|max:50',
              'password'=>'required|max:50',
              'password'=>'required|min:6',
              'confirmPassword' => 'required|same:password',

              'email'=>'required|unique:users',
          ]);        

          $input = (object) $request->all();

          $input->password = md5($input->password);
          $input->confirmPassword = md5($input->confirmPassword);

          $data =(array) $input;
        $user->fill($data);
    $user->save();
   
      session([
          'data' => 'Successfull registered. Please activate your email , please check your mail,thanks!',
          'activationInformation'=> $input->password,
          'activationId'=>md5( $input->email),
          ]);

 //$html = file_get_contents('..\resources\views\email\contact-mail.blade.php');
    $mgClient = new Mailgun('key-5362a59587a47047c93e3ed27ae3d9b1');
    $domain = "sandbox87ef4f3b6db04199aaa48a6f1b2e06c7.mailgun.org";
    $result = $mgClient->sendMessage("$domain", array(
        'from'    => ' <postmaster@store.mg.org>',
        'to'      => $input->email,
     'subject' => "Activate your account   ".date('Y:m:d h:i:s A'),
     'html' => "<a href = 'store/activation/".$input->password.md5( $input->email)."/".$input->email."'>".$input->password.md5( $input->email)."</a>", 
     )); 
return redirect()->back();
    
    }
}