<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class StoresController extends Controller
{
  
public function show ()
{  
     $data =   Category::select('name')->first();
     echo $data->name;
    }

}
