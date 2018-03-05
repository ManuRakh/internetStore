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
          $goodids = "";
          $goodnames="";
          $goodref = "";
          for($i = 0 ; $i<500;$i++)
		{
			if(session()->has('id'.$i)) 
			{
                $goodids.=session('id'.$i).'<br/>';
                $goodnames.=session('name'.$i).'<br/>';
                $goodref.="<a href = http://alishverish.h1n.ru/details/$i>".session('name'.$i).'</a><br/>';
            }
        }
          $input = (object) $request->all();
          $input->goodids =$goodids;
          $input->goodnames =$goodnames;

          $data =(array) $input;
          $order->fill($data);
          $order->save();
         return redirect('home');
        //  require_once "SendMailSmtpClass.php"; // подключаем класс
 
       /*   $mailSMTP = new SendMailSmtpClass('manucher5160o@yandex.ru', 'otdyhaem123', 'ssl://smtp.yandex.ru', 'Evgeniy', 465);
          // $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя');
           
          // заголовок письма
          $headers= "MIME-Version: 1.0\r\n";
          $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
          $headers .= "From: Evgeniy <manucher5160o@yandex.ru>\r\n"; // от кого письмо
          $result =  $mailSMTP->send('manucher5160o@yandex.ru', 'Something', 'Something', $headers); // отправляем письмо
          // $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');
          if($result === true){
              echo "Success";
          }else{
              echo "!Success. Error: " . $result;
          }*/
          
          
        
        //   953892af2c30a072430a4e2d60dd9e7c-us17
          //$html = file_get_contents('..\resources\views\email\contact-mail.blade.php');
  /* $mgClient = new Mailgun('key-5362a59587a47047c93e3ed27ae3d9b1');
    $domain = "store.mg.org";
    $result = $mgClient->sendMessage("$domain", array(
        'from'    => ' <postmaster@store.mg.org>',
        'to'      => $input->email,
     'subject' => "Order delivery information    ".date('Y:m:d h:i:s A'),
     'html' => "Order delivery information <br/>
     Name :".$input->name."
     <br/>Surname :".$input->surname."
     <br/>Email :".$input->email."
     <br/>Phone Number : ".$input->phone."
   <br/> Your order's goods : <br/>".$goodref."
     
     <br/>
     For more information please contant us
     to number below <br/>Our telephone number +905488675590 (Turkey,Mersin 10)
     <br/>You may also contact us in live chat located on http://alishverish.h1n.ru/. 
     <br/>Our operators will contact with you as soon as it possible.
     <br/>Thanks for using our service.We glad to see you.
     ", 
     )); */
    //  return redirect()->back();
    }

    public function placeOrder()
    {
        return view('placeOrder');
    }


}
