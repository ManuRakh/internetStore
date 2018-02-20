<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Good;

class StoresController extends Controller
{
  
public function showCategory ($category)
{  
     $data =   Good::select('name','id','imgurl','description','price','price_course','deliveryprice','exist.isexist')->join('exist', 'goods.exist', '=', 'exist.idz')->where('category',$category)->get();
    
     $categoryes=Good::select('categories.name')->join('categories', 'goods.id', '=', 'categories.id')->first()->name;
     return view('GoodInList')->with(
         
        [
            'data'=>$data,
            'category'=>$categoryes,
        ]);

}
    
public function showGood($category,$good)
    {
        $data =   Good::select('id','name')->where('id',$good)->get();
        foreach($data as $date)
        {
            echo $date->name."<br/>";
        }
}

}
