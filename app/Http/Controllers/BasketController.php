<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class BasketController extends Controller
{
    //
    public function addIt()
    {
        if(isset($_GET['id'])) {
            $id =  ($_GET['id']);
            $name =  ($_GET['name']);
            $price = ($_GET['price']);
            session(['id'.$id => $id]);
            session(['name'.$id => $name,
            'price'.$id =>$price,
            ]);
       //dump(session());
        }
     return  redirect()->back();
    }
    public function forget()
    {
        for($i = 0 ; $i<500;$i++)
        {
           
            session()->forget('id'.$i);
            session()->forget('name'.$i);
            session()->forget('price'.$i);
       
       
        }	
        return redirect()->back();
    }
}
