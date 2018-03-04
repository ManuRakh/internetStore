<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Order;
use Mailgun\Mailgun;

class OrderController extends Controller
{
    //
    public function finishOrder(Request $request)
    {
        $order = new Order;
        $this->validate($request,
          [
              'name'=>'required|max:50',
              'surname'=>'required|max:50',
              'email'=>'required|max:50',
              'address'=>'required|max:200',
              'address'=>'required|min:6',
              'phone' => 'required|max:50',
              
            
          ]); 
          $input = (object) $request->all();
          $data =(array) $input;
          $order->fill($data);
          $order->save();
          //$html = file_get_contents('..\resources\views\email\contact-mail.blade.php');
    $mgClient = new Mailgun('key-5362a59587a47047c93e3ed27ae3d9b1');
    $domain = "sandbox87ef4f3b6db04199aaa48a6f1b2e06c7.mailgun.org";
    $result = $mgClient->sendMessage("$domain", array(
        'from'    => ' <postmaster@store.mg.org>',
        'to'      => $input->email,
     'subject' => "Order delivery information    ".date('Y:m:d h:i:s A'),
     'html' => "Order delivery information <br/>
     Name :".$input->name."<br/>Surname :".$input->surname."<br/>Email :".$input->email."<br/>For more information please contant us
     to number below <br/>Our telephone number +905488675590 (Turkey,Mersin 10)", 
     )); 
    //  return redirect()->back();
    }

    public function placeOrder()
    {
        return view('placeOrder');
    }


}
