<?php

namespace App\Http\Controllers;

use Mailgun\Mailgun;
require '..\vendor\autoload.php';
class MailSetting extends Controller

{

public function sendMail()
{
$html = file_get_contents('..\resources\views\email\contact-mail.blade.php');
$mgClient = new Mailgun('key-5362a59587a47047c93e3ed27ae3d9b1');
$domain = "sandbox87ef4f3b6db04199aaa48a6f1b2e06c7.mailgun.org";
$result = $mgClient->sendMessage("$domain", array(
    'from'    => ' <postmaster@store.mg.org>',
    'to'      => 'Manuchekhr <manucher5160@gmail.com>',
 'subject' => "Активация аккаунта   ".date('Y:m:d h:i:s A'),
 'html' => $html, 
 )); 

}

}
