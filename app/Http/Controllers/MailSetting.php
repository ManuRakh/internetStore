<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailClass;
use Mailgun\Mailgun;
require 'D:\OpenServer\OpenServer\domains\Store\vendor\autoload.php';

use Illuminate\Support\Facades\Mail;
class MailSetting extends Controller

{

public function sendMail()

{
   // Mail::to('manucher5160@gmail.com')->send(new MailClass('manuchekhr','manucher5160@gmail.com','some message'));
  /*Mail::send('email.contact-mail',function($message)
   {
      $message->to('manucher5160@gmail.com','Manuchekhr')->subject('Welcome to store');
   });*/
/*   Mail::raw('Messsage text', function(\Illuminate\Mail\Message $mail) {
    $mail->subject('Тема сообщения');
    $mail->from('manucher5160@gmail.com', 'Your Name');
    $mail->to('manucher5160@gmail.com');
});*/

# Instantiate the client.
$html = file_get_contents('..\resources\views\email\contact-mail.blade.php');
$mgClient = new Mailgun('key-5362a59587a47047c93e3ed27ae3d9b1');
$domain = "sandbox87ef4f3b6db04199aaa48a6f1b2e06c7.mailgun.org";
$result = $mgClient->sendMessage("$domain", array(
    'from'    => ' <postmaster@sandbox87ef4f3b6db04199aaa48a6f1b2e06c7.mailgun.org>',
    'to'      => 'Manuchekhr <manucher5160@gmail.com>',
 'subject' => 'Issue Feb 2014', 'text' => 
 'Your mail do not support HTML', 
 'html' => $html, 
 'recipient-variables' => '{"name-1@gmail.com": {"first":"Name-1", "id":1}, "name-2@gmail.com": {"first":"Name-2", "id": 2}}')
 ); 

# Make the call to the client.
/*$result = $mgClient->sendMessage("$domain",
          array(
              'from'    => ' <postmaster@sandbox87ef4f3b6db04199aaa48a6f1b2e06c7.mailgun.org>',
                'to'      => 'Manuchekhr <manucher5160@gmail.com>',
                'subject' => 'Hello Manuchekhr',
                'text'    => '<html>
                <head>
            </head>
            <body>
                Hello World
            </body>
                </html> '));*/

# You can see a record of this email in your logs: https://app.mailgun.com/app/logs .

# You can send up to 300 emails/day from this sandbox server.
# Next, you should add your own domain so you can send 10,000 emails/month for free.
}

}
