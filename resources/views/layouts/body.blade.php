<body>
<!-- header_top -->

<!-- header -->

<div class="arriv">
	<div class="container">
		<div class="arriv-top">
			
		
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-bottm">
			<div class="col-md-8 arriv-left1">
				<img src="{{asset('public/images/3.jpg')}}" class="img-responsive" alt="">
				<div class="arriv-info1">
					<h3>SWEATERS</h3>
					<p>REVIVE YOUR WARDROBE WITH CHIC KNITS

</p>
					<div class="crt-btn">
						<a href="http://store/viewGoods/4/undercategories/20/Sweaters">BUY NOW</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 arriv-right1">
				<img src="{{asset('public/images/4.jpg')}}" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="http://store/viewGoods/2/undercategories/12/Sport%20Shoes"><h3>SPORT SHOES<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-las">
			<div class="col-md-4 arriv-left2">
				<img src="{{asset('public/images/5.jpg')}}" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="http://store/viewGoods/Casual%20Glasses/undercategories/25/Casual%20Glasses"><h3>CASUAL GLASSES<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="col-md-4 arriv-middle">
				<img src="{{asset('public/images/6.jpg')}}" class="img-responsive" alt="">
				<div class="arriv-info3">
					<h3>T-SHIRTS</h3>
					<div class="crt-btn">
						<a href="http://store/viewGoods/5/undercategories/26/T-SHIRTS">BUY NOW</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 arriv-right2">
				<img src="{{asset('public/images/7.jpg')}}" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="http://store/viewGoods/WATCHES/undercategories/27/WATCHES"><h3>Elegant WATCHES<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="special"><h3>My shopping bag</h3></div>
<div class="container">
	<div class="specia-top">	 
 
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