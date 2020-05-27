
<?php 
require_once('inc/top1.php');
 ?>
 <?php 
require_once('inc/header.php');
 ?>
 <style>
	#location_weather label {
		text-transform: capitalize;
	}
</style>
</head><!--/head-->

<body>
	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement3.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
	
				<div class="col-sm-9 padding-right">
				
						<div class="  button-group" id="location_weather">					    
						<button class="btn btn-success" type="btn" name="darwin" >Darwin</button>						
						<div class="weather-content"></div>
					</div>
						<h2 class="title text-center">Temperature of darwin is Above 20°C <span style='color: grey;'>So you may ware below Items</span></h2>
			
						
					</div>
					<!--features_items-->
					<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/darwin/1.jpg" alt="" />
												<h2>$50</h2>
												<p>T-shirt & Printed Half Pant</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>$ 50</h2>
													<p>T-shirt & Printed Half Pant</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
											</div>
											<img src="images/home/new.png" class="new" alt="" />
										</div>
										
									</div>
								</div>
									<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/darwin/2.jpg" alt="" />
												<h2>$60</h2>
												<p>T-shirt &  Half Pant</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											<div class="product-overlay">
												<div class="overlay-content">
													<h2>$ 60</h2>
													<p>T-shirt &  Half Pant</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
											</div>
											<img src="images/home/new.png" class="new" alt="" />
										</div>
										
									</div>
								</div>
							
					<hr>
					<center>
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">4</a></li>
							<li><a href="">5</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</center>
				</div>
			</div>
		</div>
	</section>
	
	
	<?php 
	require_once('inc/footer.php');
	 ?>