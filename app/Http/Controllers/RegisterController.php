<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Session;

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
         
        session(['data' => 'Successfull registered. Congratulations!']);

return redirect('/register');

    
    }
}