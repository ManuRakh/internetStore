<div class="container">
	<div class="check">	 
 
<div class="col-md-9 cart-items">
             <h1>Все товары категории {{$category}}</h1>
             		<ul class="grid_2">

@foreach($data as $date)

		<li>
		<form method = "POST" action = "{{route('AddToBasket',[
		'id'=>$date->id
		])}}" id = "addtobasket">
			{{csrf_field()}}
				<a href="#"><img src="{{$date->imgurl}}" class="img-responsive"  alt="{{$date->name}}" style = "width:300px;height:200px;" /></a>
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h5>{{$date->name}} {{$date->id}}</h5>
					<div class="item_add"><span class="item_price"><h6>Just for {{$date->price}} {{$date->price_course}}</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#" onclick="document.getElementById('addtobasket').submit(); return false;">add to cart</a></span></div>
				</div>
				</form>
		</li>
		
		
@endforeach

			 		</ul>

		 </div>
		 {{ $data->links() }}

		
	 </div>
	 </div>
