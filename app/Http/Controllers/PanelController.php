<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\PriceCource;
use App\Undercategory;

class PanelController extends Controller
{
public function enter()
{ 
    
  $price = PriceCource::select('id','name')->get();
  $category = Undercategory::select('names','id')->get();

    return view('adminPanel')->with([
        'prices'=>$price,
        'categories'=>$category,
    ]);
}
public function enterGood(Request $request)
{
echo $request->get('name');
echo $request->get('brand').'<br/>';
echo $request->get('description').'<br/>';
echo $request->get('deliveryprice').'<br/>';
echo $request->get('imgurl').'<br/>';
echo $request->get('price').'<br/>';
echo $request->get('tax').'<br/>';
echo $request->get('pricecource').'<br/>';
echo $request->get('special').'<br/>';
echo $request->get('category').'<br/>';
echo $request->get('exist').'<br/>';
 return 'huy';
}
public function login(Request $request)
{      
      $admin = new Admin;
      $this->validate($request,
      [
          'login'=>'required|max:50',
          'password'=>'required|min:6',
      ]
      );
      $admin = Admin::select('login', 'password')->where('login',$request->input('login'))->first();
      if($admin==null)
      {
         // session(['validited' => 'Wrong']);

          return redirect()->back();
      }
       $user1=(object)$admin;
       $hisPass = md5($request->input('password'));
         $password = ($user1->password);
         
       if($hisPass==$password)
       {
           session(['autorized' => 'yes']);
           session(['UserName' => $user1->name]);
           session(['privilegion' => 'admin']);
           return redirect()->back();
           //dump(session());

       }
       else
       {
        session(['autorized' => 'not']);
        return redirect()->back();
   }
}
public function logout()
{
    session()->forget('autorized');
    return redirect()->back();
}
}
