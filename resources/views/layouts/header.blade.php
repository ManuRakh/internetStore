
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="{{route('home')}}"><img src="{{asset('public/images/logo.png')}}" class="img-responsive" alt=""/> </a>
		</div>
		@if(count($errors)>0)
@foreach($errors->all() as $error)

<h6 class = "error">{{$error}}</h2>
@endforeach
@endif
<?php

if(session()->has('successActivation'))
{
	$value = session('successActivation');
echo "<h4 class = 'error' id = 'succession'>".($value)."</h4>";
session()->forget('successActivation');
}
if(session()->has('validited'))
{
	if(session('validited')=='Not'){
echo "<h4 class = 'error' id = 'succession'>Sorry, your account isn't activated.<br/> Please check your email for activation"."</h4>";
session()->forget('validited');}
}
if(session()->has('validited'))
{
		if(session('validited')=='Wrong'){
echo "<h4 class = 'error' id = 'succession'>Ssory, login or password is wrong.<br/>"."</h4>";
session()->forget('validited');}
}
?>               
<style>
	.error
	{display:block;
	margin-left:70%;
	}
	</style>


<style>
#succession
{
	color:green;
}
</style>


<!-- start header_right -->
		<div class="header_right">					

			<div class="rgt-bottom">
			@if(session()->has('login'))

						    
					
				<div class="reg">							
					<?php echo session('UserName')?>
<br/>
					<a href="{{ route('logout')}}">Logout</a>
					<style>
						.reg
						{
							margin-right:12%;
						}
						</style>
				</div>
					@else
				<!-- <div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="{{route('register')}}" id="">Login</a>
						    <div id="loginBox"> 
				
						        <form id="loginForm" method = "POST" action = "{{route('login')}}">
								{{csrf_field()}}
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Имейл аддрес</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Пароль</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Запомнить меня</i></label>
						            	</fieldset>
						            <span><a href="#">Забыли пароль?</a></span>
								</form>
							</div>
						</div>
					</div>
				</div> -->
				<div class="reg">
					<a href="{{ route('logining')}}">Login</a>
				</div>
				<div class="reg">
					<a href="{{ route('register')}}">Registration</a>
				</div>
				<style>
				.reg , .log
				{
					margin-right:13%;

				}
				
				</style>
				@endif


			<!--<div class="cart box_1">
				<a href="checkout.html">
					<h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
				</a>	
				<p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
				<div class="clearfix"> </div>
			</div>
			!-->
			
			
			<div class="clearfix"> </div>
		</div>
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="{{route('home')}}">Home</a></li>
			<li class="grid"><a class="color2" href="#">New coming</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Closes</h4>
								<ul>
								<?php  giveGoods(5); ?>
								
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Kids</h4>
								<ul>
								<?php  giveGoods(4); ?>
							
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
								<?php  giveGoods(3); ?>
								
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Account(Not fully work now)</h4>
								<ul>
									<li><a href="{{ route('logining')}}">Login</a></li>
									<li><a href="{{ route('register')}}">Create An Account</a></li>
									<li><a href="#">My Shopping Bag</a></li>
									<li><a href="#">Brands</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>ACCESSORIES</h4>
								<ul>

								
								 <?php giveGoods(1);
								//Good::giveGoods();
								?>


								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>FOOTWEAR</h4>
								<ul>
								<?php giveGoods(2);
								//Good::giveGoods();
								?>							
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				
				<li><a class="color5" href="#">SWEATER</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>New Sweaters</h4>
								<ul>
									<li><a href="#">New Arrivals</a></li>
								
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Kids Sweaters</h4>
								<ul>
								<?php  giveGoods(4); ?>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Winter Sweaters</h4>
								<ul>

<?php  giveGoods(3); ?>
</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Spring Sweaters</h4>
								<ul>
									<li><a href="{{route('logining')}}">Login</a></li>
								
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Osenniye Sweaters</h4>
								<ul>
									<li><a href="#">Belts</a></li>
								
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>My Shopping Bag</h4>
								<ul>
									<li><a href="#">New Arrivals</a></li>
								
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">FOOTWEAR</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Summer FOOTWEAR</h4>
								<ul>
									<li><a href="#">New Arrivals</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>WINTER FOOTWEAR</h4>
								<ul>
									<li><a href="#">See</a></li>
					
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Sport FOOTWEAR</h4>
								<ul>
									<li><a href="#">See</a></li>
								
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Offitial FOOTWEAR</h4>
								<ul>
									<li><a href="{{route('logining')}}">Login</a></li>
									
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>ACCESSORIES</h4>
								<ul>
									<li><a href="#">See</a></li>
									
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>FOOTWEAR</h4>
								<ul>
									<li><a href="#">New Arrivals</a></li>
								
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color7" href="#">Glasses</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Some Glasses</h4>
								<ul>
									<li><a href="#">New Arrivals</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Kids</h4>
								<ul>
									<li><a href="#">Pools&Tees</a></li>
								
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>See</h4>
								<ul>
									<li><a href="#">See</a></li>
									
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>аккаунт</h4>
								<ul>
									<li><a href="{{route('logining')}}">Login</a></li>
								
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>See</h4>
								<ul>
									<li><a href="#">See</a></li>
								
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>See</h4>
								<ul>
									<li><a href="#">See</a></li>
						
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color8" href="#">T-SHIRTS</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Closes</h4>
								<ul>
									<li><a href="#">New Arrivals</a></li>
								
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Детям</h4>
								<ul>
									<li><a href="#">TRENDS</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>See</h4>
								<ul>
									<li><a href="#">See</a></li>
									
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Account</h4>
								<ul>
									<li><a href="{{route('logining')}}">Login</a></li>
								
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>See</h4>
								<ul>
									<li><a href="#">See</a></li>
									
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>FOOTWEAR</h4>
								<ul>
									<li><a href="#">New Arrivals</a></li>
									
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color9" href="#">WATCHES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>WATCHES</h4>
								<ul>
									<li><a href="#">New Arrivals</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Kids</h4>
								<ul>
									<li><a href="#">TRENDS</a></li>
							
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>See</h4>
								<ul>
									<li><a href="#">See</a></li>
								
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Account</h4>
								<ul>
									<li><a href="{{route('logining')}}">Login</a></li>
							
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>See</h4>
								<ul>
									<li><a href="#">See</a></li>
									
								</ul>	
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color9" href="#">My Shopping Bag</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>My Shopping Bag</h4>
								<ul>
								<?php 
									
										for($i = 0 ; $i<500;$i++)
										{
											if(session()->has('id'.$i)) 
											
											echo '<li><a href="#">'.session('name'.$i).session('id'.$i).'</a></li>';
										}
								?>

									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Price</h4>
								<ul>
								<?php	for($i = 0 ; $i<500;$i++)
										{
											if(session()->has('id'.$i)) 
											
											echo '<li><a href="#">'.session('price'.$i).'</a></li>';
										}?>

								</ul>	

							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Go to Basket</h4>
								<ul>
									<li><a href="#">Go to Basket</a></li>
									<li><a href="#">Checkout</a></li>
									 <li>
									<a href ="{{route('forget')}}" onClick="">Clean Shopping Bag</a>
									</li>

								</ul>	
							</div>												
						</div>
						
						
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
		 </ul> 
	</div>
</div>
</div>