<div class="container">
	<div class="check">	 
 
<div class="col-md-9 cart-items">
             <h1>All goods of category {{$category}}</h1>
             		<ul class="grid_2">

@foreach($data as $date)


		<li>
		
				<a href="#"><img src="{{asset('public/images/'.$date->imgurl.'.jpg')}}" class="img-responsive"  alt="{{$date->name}}" style = "width:300px;height:200px;" /></a>
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h5 id = "nameOfGood">{{$date->name}}</h5>
					<div class="item_add"><span class="item_price"><h6>Just for {{$date->price}} {{$date->price_course}}</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="{{route('viewDetails',['goodid'=>$date->id])}}">More Details</a></span></div>
					<div class="item_add"><span class="item_price"><a href="{{route('AddToBasket')}}?id={{$date->id}}&name={{$date->name}}&price={{$date->price}}{{$date->price_course}}&imgurl={{$date->imgurl}}&brand={{$date->brand}}&tax={{$date->tax}}">add to cart</a></span></div>
				</div>
	
			
		</li>
	

		
@endforeach
 </ul>

</div>
{{ $data->links() }}
 </div>
	 </div>
<?php 
// if(isset($_GET['id'])) {
// 	$id =  ($_GET['id']);
// 	$name =  ($_GET['name']);
// 	$price = ($_GET['price']);
// 	session(['id'.$id => $id]);
// 	session(['name'.$id => $name,
// 	'price'.$id =>$price,
// 	]);

// }
?>
<div class="special"><h3>My shopping bag</h3></div>
<div class="container">
	<div class="check">	 
 
<div class="col-md-9 cart-items">

			<ul class="grid_2">
	<?php 
									
		for($i = 0 ; $i<500;$i++)
		{
			if(session()->has('id'.$i)) 
			{
	?>
				<li>

					<a href="#"><img src="{{asset('public/images/'.session('imgurl'.$i).'.jpg')}}" class="img-responsive" alt="" style = "width:300px;height:200px;"></a>
					<div class="special-info grid_1 simpleCart_shelfItem">
					<h5 id = "nameOfGood">{{session('name'.$i)}}</h5>
					<div class="item_add"><span class="item_price"><h6>Just for {{session('price'.$i)}} </h6></span></div>
					<div class="item_add"><span class="item_price"><a href="{{route('viewDetails',['goodid'=>session('id'.$i)])}}">More Details</a></span></div>
				    </div>
	
				</li>
<?php
			}
		}
?>
		</div>
	</div>
</div>
