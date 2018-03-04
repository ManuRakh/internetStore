<?php


$summ = 0 ;
$del = 0 ;  
for($i = 0 ; $i<500;$i++)
{
	if(session()->has('id'.$i)) 
	{
		$pri=(int)session('price'.$i);$tax=(int)session('tax'.$i);$pri+=$pri*$tax/100;$summ+=$pri;
		$del+=(int)session('delivery'.$i);
	}
}
?>

<div class="container">
	<div class="check">	 
			 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total1">{{$summ}}.00$</span>
				 <span>Discount</span>
				 <span class="total1">0%</span>
				 <span>Delivery Charges</span>
				 <span class="total1">{{$del}}$</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span>{{$summ+$del}}$</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" href="{{route('placeOrder')}}">Place Order</a>
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="{{route('logining')}}">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
		 <div class="col-md-9 cart-items">
			 <h1>My Shopping Bag </h1>
				
<?php 
                    for($i = 0 ; $i<500;$i++)
                    {
                        if(session()->has('id'.$i)) 
                        {
                ?>
			 <div class="cart-header2">
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
                        <img src="{{asset('public/images/'.session('imgurl'.$i).'.jpg')}}" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">{{session('name'.$i)}} - {{session('price'.$i)}}</a><span> Tax {{session('tax'.$i)}}% </span></h3>
						<ul class="qty">
							<li><p>Brand : {{session('brand'.$i)}}</p></li>
							<li><p>Qty : 1</p></li>
						</ul>
							 <div class="delivery">
                             <p>Price(including tax) :<?php $pr=(int)session('price'.$i);$tx=(int)session('tax'.$i);$pr+=$pr*$tx/100; echo $pr;?>$ </p></div>
                             <div class="delivery">

							 <span>Delivered price {{session('delivery'.$i)}}$</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
              </div>	
<?php
  }
}
?>
		 </div>
		 
		
			<div class="clearfix"> </div>
	 </div>
	 </div>
