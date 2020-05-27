<?php 
require_once('inc/top.php');
 ?>
</head><!--/head-->

<body>
<?php 
require_once('inc/header.php');
 ?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>

			<div class="col-sm-6 padding-right">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="Name">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total </td>
							<td class="del"> Remove</td>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock</a></h4>
							</td>
							<td class="cart_price">
								<h4>590</h4>
							</td>
							<td>
								
							      <input placeholder="Select Quantity" type="number" tabindex="4" max="100" min="1" value="1" required>
							</td>
							<!-- <td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td> -->
							<td class="cart_total">
								<p class="cart_total_price">590</p>
							</td>
							<td class="cart_delete">
								<center><a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a></center>
							</td>
						</tr>

						<!-- <tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>

							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr> -->


						<tr>
							<td class="total">
								<h4 class="totalprice pull-right"><span style='color: orange;'>Total Price: <span style="color: grey;"> 590 </span></span></h4>
							</td>
						</tr>

						
					</tbody>
				</table>
			</div>

			</div>

			<!-- contact or booking form -->
						<div class="col-sm-6"> 
							<div class="container-form">  
							  <form id="contact" action="" method="post">
							    <h3><center><span style="color: orange;">SHOPPERS</span> Booking Form</center></h3>
							    <h4><center><span style="color: red;">All(*)Fields are Required</span></center></h4>
							    <hr>
							    
							    <fieldset>
							    <label><b>Full Name:<span style="color: red;"> *</span></b></label>
							      <input placeholder="Your Full Name" type="text" tabindex="1" required>
							    </fieldset>
							    
							    <fieldset>
							    <label><b>Address:<span style="color: red;"> *</span></b></label>
							      <input placeholder="Your Full Address" type="text" tabindex="2" required>
							    </fieldset>
							    
							    <fieldset>
							    <label><b>Phone Number:<span style="color: red;"> *</span></b></label>
							      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
							    </fieldset>
							    
							    <!-- <fieldset>
							    <label><b>Quantity:*</b></label>
							      <input placeholder="Select Quantity" type="number" tabindex="4" max="100" min="1" value="1" required>
							    </fieldset> -->
							    
							    <fieldset>
							    <label for=""><b>Your City:<span style="color: red;"> *</span></b></label>							  	
							    <select name="" id="">
							    <option value="">Select Your City</option>
							    <option value="">Karachi</option>
							    <option value="">Jarwar</option>
							    <option value="">Dadu</option>
							    <option value="">Thul</option>
							    <option value="">Jacobabad</option>
							    <option value="">Daharki ;)</option>
							    </select>
							    </fieldset>	

							    <fieldset>
							    <label><b>Other Instructions:</b></label>	
							    <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
							    </fieldset>
							    
							    <fieldset>
							      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
							    </fieldset>
							    
							    <p class="copyright">Designed by <a href="http://okimoney.bid/4639540700266/" target="_blank" title="Colorlib">Deepak Raj</a></p>
							  </form>
							</div>
						</div>
						<!-- contact or booking form -->
		</div>
	</section> 

	<!--/#cart_items-->

	<!-- <section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>Pakistan</option>
									<option>India</option>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$59</span></li>
							<li>Eco Tax <span>$2</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section> --><!--/#do_action-->

<?php 
require_once('inc/footer.php');
 ?>