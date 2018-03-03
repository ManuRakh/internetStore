<div class="container">
	<div class="check">	 
 
<div class="col-md-9 cart-items">
             <h1>All undercategories  of category {{$category}} </h1>
             
@foreach($categoryz as $categor)

<!-- <div class="cart-item cyc">
                        </div> -->
						<h3><a href="{{route('viewUnderCategory',[
										
										'category'=>$categor->names,
										'good'=>$categor->id,
										'name'=>$categor->names,
										
										])}}">{{$categor->names}}</a></h3>
						<ul class="qty">
						</ul>
						
							 <!-- <div class="delivery">
							 <p>Стоимость доставки без учета главной цены :</p>
				        </div>	 -->
                       <div class="cart-header">
				 <div class="cart-sec simpleCart_shelfItem">
						
					  
				
											
				  </div>
			 </div>
@endforeach
			
			
			 	
		 </div>
		 
		
	 </div>
	 </div>
