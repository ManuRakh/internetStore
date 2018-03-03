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
            $imgurl = ($_GET['imgurl']);
            $brand = ($_GET['brand']);
            $tax = ($_GET['tax']);

            session(['id'.$id => $id]);
            session(['name'.$id => $name,
            'price'.$id =>$price,
            'imgurl'.$id =>$imgurl,
            'brand'.$id=>$brand,
            'tax'.$id=>$tax,

            ]);
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
            session()->forget('imgurl'.$i);
            session()->forget('brand'.$i);
            session()->forget('tax'.$i);

       
        }	
        return redirect()->back();
    }
    public function checkout()
    {
        return view('checkout');
    }
}
