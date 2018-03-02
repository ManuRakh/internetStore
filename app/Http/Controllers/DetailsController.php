<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
class DetailsController extends Controller
{
    
    public function show($goodid)
    {
        $details =   Good::select('name','id','imgurl','description','price','price_course','deliveryprice','imgs.url','exist','brand','tax')->join('imgs', 'goods.id', '=', 'imgs.goodid')->where('id',$goodid)->orderBy('id','desk')->get();
        $detail =   Good::select('name','id','imgurl','description','price','price_course','deliveryprice','imgs.url')->join('imgs', 'goods.id', '=', 'imgs.goodid')->where('id',$goodid)->first();


if($details)
 {
     if($detail)
        return view('details')->with([
            'details'=>$details,
            'firstdetail'=>$detail,
        ]);
        
    }else return view('details');
       // 

    }
}
