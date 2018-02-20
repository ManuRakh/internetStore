<!DOCTYPE HTML>

<html>
<head>
<title>Gretong a Ecommerce Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<link href="{{asset('/public/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="{{asset('/public/js/jquery-1.11.1.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('/public/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="{{asset('/public/css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('/public/js/megamenu.js')}}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="{{asset('/public/js/menu_jquery.js')}}"></script>
<script src="{{asset('/public/js/simpleCart.min.js')}}"> </script>
<link rel="stylesheet" href="{{asset('/public/css/etalage.css')}}">
<script src="{{asset('/public/js/jquery.etalage.min.js')}}"></script>
<script src="{{asset('/public/js/menu_jquery.js')}}"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>


<?php 
use App\Undercategory;

								     function giveGoods($category_id)//Giving undercategory of goods according of his ID
								 {
								 $goods = Undercategory::select('id','name','category_id')->where('category_id',$category_id)->orderBy('id','desk')->limit(5)->get();								
								 foreach($goods as $good)
									 {
										 ?>
									 <li><a href="{{route('viewUnderCategory',[
										
										'category'=>$good->category_id,
										'good'=>$good->id,
										'name'=>$good->name,
										
										])}}">{{$good->name}}</a></li>
									 <?php
									 }
									 ?>
								<li><a href="{{route('viewCategory',[
									'category'=>$category_id
									])}}">Смотреть все</a></li>
<?php }  ?>

</head>
<body>
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="#">Delivery information</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> Call us : 032 2352 782</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
