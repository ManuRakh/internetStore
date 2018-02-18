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
use App\Good;

if(session()->has('successActivation'))
{
	$value = session('successActivation');
echo "<h4 class = 'error' id = 'succession'>".($value)."</h4>";
session()->forget('successActivation');
}
if(session()->has('validited'))
{
	if(session('validited')=='Not'){
echo "<h4 class = 'error' id = 'succession'>Извините, аккаунт не активирован.<br/> Пожалуйста проверьте почту для активации аккаунта"."</h4>";
session()->forget('validited');}
}
if(session()->has('validited'))
{
		if(session('validited')=='Wrong'){
echo "<h4 class = 'error' id = 'succession'>Извините, логин или пароль не верны.<br/>"."</h4>";
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
					<a href="{{ route('logout')}}">Выйти</a>
					<style>
						.reg
						{
							margin-right:12%;
						}
						</style>
				</div>
					@else
				<div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>Войти</span></a>
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
				</div>
				<div class="reg">
					<a href="{{ route('register')}}">Зарегистрироваться</a>
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
			<li class="active grid"><a class="color1" href="{{route('home')}}">Домой</a></li>
			<li class="grid"><a class="color2" href="#">Новые товары</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Одежда</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
								
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Детям</h4>
								<ul>
									<li><a href="women.html">Майки</a></li>
							
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Сумки</h4>
								<ul>
									<li><a href="women.html">Сумки. Багажи</a></li>
								
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аккаунт</h4>
								<ul>
									<li><a href="#">Войти</a></li>
									<li><a href="register.html">Создать аккаунт</a></li>
									<li><a href="women.html">Создать список пожеланий</a></li>
									<li><a href="women.html">Корзина</a></li>
									<li><a href="women.html">Бренды</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аксессуары</h4>
								<ul>
								<li><a href="{{route('viewCategory',['category'=>'category'])}}">Смотреть все</a></li>

								<?php
								function giveGoods()
								{
								$goods = Good::select('name','category')->orderBy('id','desk')->limit(5)->get();								
								foreach($goods as $good)
									{
									echo "<li><a href="."{{route('viewCategory')}}>".$good->name."</a></li>";
									}
								}
								giveGoods();
								?>

								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Обувь</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
							
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
				
				<li><a class="color5" href="#">Свитеры</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Одежда</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
								
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Детям</h4>
								<ul>
									<li><a href="women.html">Майки</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Сумки</h4>
								<ul>
									<li><a href="women.html">Сумки и багажи</a></li>
								
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аккаунт</h4>
								<ul>
									<li><a href="#">Войти</a></li>
								
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аксессуары</h4>
								<ul>
									<li><a href="women.html">Ремни</a></li>
								
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Обувь</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
								
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">Обувь</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Одежда</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Детям</h4>
								<ul>
									<li><a href="women.html">Майки</a></li>
					
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Сумки</h4>
								<ul>
									<li><a href="women.html">Сумки и багажи</a></li>
								
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>аккаунт</h4>
								<ul>
									<li><a href="#">Войти</a></li>
									
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аксессуары</h4>
								<ul>
									<li><a href="women.html">ремни</a></li>
									
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Обувь</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
								
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
			
				<li><a class="color7" href="#">Очки</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Одежда</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Детям</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
								
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Сумки</h4>
								<ul>
									<li><a href="women.html">Сумки и багажи</a></li>
									
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>аккаунт</h4>
								<ul>
									<li><a href="#">Войти</a></li>
								
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аксессуары</h4>
								<ul>
									<li><a href="women.html">ремни</a></li>
								
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Обувь</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
						
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
			
				<li><a class="color8" href="#">Футболки</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Одежда</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
								
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Детям</h4>
								<ul>
									<li><a href="women.html">Тренды</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Сумки</h4>
								<ul>
									<li><a href="women.html">Тренды</a></li>
									
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аккаунт</h4>
								<ul>
									<li><a href="#">Войти</a></li>
								
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аксессуары</h4>
								<ul>
									<li><a href="women.html">Тренды</a></li>
									
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Обувь</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
									
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
				<li><a class="color9" href="#">Часы</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Одежда</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Детям</h4>
								<ul>
									<li><a href="women.html">Тренды</a></li>
							
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Сумки</h4>
								<ul>
									<li><a href="women.html">Тренды</a></li>
								
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аккаунт</h4>
								<ul>
									<li><a href="#">Войти</a></li>
							
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аксессуары</h4>
								<ul>
									<li><a href="women.html">Тренды</a></li>
									
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
				<li><a class="color9" href="#">Корзина</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Товары в корзине</h4>
								<ul>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>
									<li><a href="women.html">Новые товары</a></li>

									
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Цены</h4>
								<ul>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>
									<li><a href="women.html">2000</a></li>

								</ul>	

							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Сумки</h4>
								<ul>
									<li><a href="women.html">Тренды</a></li>
								
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аккаунт</h4>
								<ul>
									<li><a href="#">Войти</a></li>
							
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Аксессуары</h4>
								<ul>
									<li><a href="women.html">Тренды</a></li>
									
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