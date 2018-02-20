<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
class DetailsController extends Controller
{
    
    public function show($goodid)
    {
echo $goodid;
        $detail =   Good::select('name','id','imgurl','description','price','price_course','deliveryprice','exist.isexist')->join('exist', 'goods.exist', '=', 'exist.idz')->where('id',$goodid)->first();
return view('details');

    }
}
