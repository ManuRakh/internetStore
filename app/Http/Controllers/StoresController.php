<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Good;
use App\Undercategory;

class StoresController extends Controller
{
  
public function showCategory ($category)
{  
     $data =   Good::select('name','id','imgurl','description','price','price_course','deliveryprice','exist.isexist')->join('exist', 'goods.exist', '=', 'exist.idz')->where('category',$category)->get();
     $categoryes=Good::select('categories.name')->join('categories', 'goods.id', '=', 'categories.id')->where('categories.id',$category)->first()->name;
     $categoryz=Undercategory::select('id','names')->where('category_id',$category)->get();

     return view('GoodInList2')->with(
         
        [
            'date'=>$data,
            'category'=>$categoryes,
            'categoryz'=>$categoryz,
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

public function showUnderCategory($category,$good,$name)
{
$data =   Good::select('name','id','imgurl','description','price','price_course','deliveryprice','exist')->where('category',$good)->paginate(8);
    
$categoryes=Undercategory::select('id','names')->where('id',$good)->first()->names;
return view('GoodInList')->with(
    
   [
       'data'=>$data,
       'category'=>$categoryes,
   ]);
}

}
