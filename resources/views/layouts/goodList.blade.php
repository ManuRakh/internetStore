<div class="container">
	<div class="check">	 
 
<div class="col-md-9 cart-items">
             <h1>Все товары категории {{$category}}</h1>
             
@foreach($data as $date)

<div class="cart-item cyc">
							 <img src="{{$date->imgurl}}" class="img-responsive" alt=""/>
                        </div>
                        <div class="cart-item-info">
						<h3><a href="#">{{$date->name}}</a></h3>
						<ul class="qty">
							<li><p>{{$date->price}} {{$date->price_course}}</p></li>
							<li><p>{{$date->isexist}} в наличии</p></li>
						</ul>
						
							 <div class="delivery">
							 <p>Стоимость доставки без учета главной цены : {{$date->deliveryprice}}</p>
				        </div>	
					   </div>
                       <div class="cart-header">
				 <div class="cart-sec simpleCart_shelfItem">
						
					  
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
@endforeach
			
			
			 	
		 </div>
		 
		
	 </div>
	 </div>
