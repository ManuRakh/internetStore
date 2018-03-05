<?php
function success()
{
if(session()->has('data'))
{
	$value = session('data');
echo "<h4 id = 'succession'>".($value)."</h4>";
session()->forget('data');

}
if(session()->has('errorfailed'))
{
	$value = session('errorfailed');
echo "<h4 id = 'error'>".($value)."</h4>";
session()->forget('errorfailed');

}
}
?>
<style>
#succession
{
	color:green;
}
#error
{
	color:red;
}

</style>

<div class="container">
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2> Please feel the form below for finish your order<span>  </span></h2>
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
	
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" action="{{route('finishOrder')}}" method="post">
            <?php success(); ?>
				<div>
					<label>
						<input placeholder="first name:" name = "name" type="text" tabindex="1" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="last name:" name = "surname"type="text" tabindex="2" required autofocus>
					</label>
				</div>
                <div>
					<label>
						<input placeholder="address:" name = "address" type="text" tabindex="3" required>
					</label>
				</div>
                <div>
					<label>
						<input placeholder="Any relevant information :" name = "address2" type="text" tabindex="3" >
					</label>
				</div>
				<div>
					<label>
						<input placeholder="email address:" name = "email" type="email" tabindex="3" required>
					</label>
				</div>
                <div>
					<label>
						<input placeholder="Phone number:" name = "phone" type="text" tabindex="3" required>
					</label>
				</div>
                {{ csrf_field() }}
                <input  name = "privilegion" type="hidden"  value = "">

				<div>
					<input type="submit" value="Finish Order" id="register-submit">
				</div>
				<div class="sky-form">
					<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to shoppe.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
                </div>
                
			</form>
			<!-- /Form -->
		</div>
    </div>


    @if(count($errors)>0)
@foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif
	<!-- <div class="registration_left">
		<h2>existing user</h2>
		 <div class="registration_form">
		 <!-- Form -->
			<!-- <form id="registration_form" action="{{route('userAdd')}}" method="post">
				{{csrf_field()}}
				
				<div>
					<label>
						<input placeholder="email:" type="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<input type="submit" value="sign in" id="register-submit">
				</div>
				<div class="forget">
					<a href="#">forgot your password</a>
				</div>
			</form> -->
			<!-- /Form -->
			<!-- </div>
	</div> --> 
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>
<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>follow us on</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Enter your email to join our newsletter" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="join">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
