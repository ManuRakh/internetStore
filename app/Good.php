<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    //
    public static   function giveGoods()
	{
	$goods = Good::select('name','category')->orderBy('id','desk')->limit(5)->get();								
	foreach($goods as $good)
		{?>
		<li><a href="{{route('viewCategory',['category'=>'1'])}}">Смотреть все</a></li>
		<?php
		}
	} 
}
