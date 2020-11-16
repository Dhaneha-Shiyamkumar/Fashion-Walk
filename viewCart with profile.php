<?php 
	include "config.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <link rel="shortcut icon" type="image/jpg" href="../img/fashionwalktrans white 2.png">
  <link rel="stylesheet" type="text/css" href="Cart-style.css?v=<?php echo time(); ?>">
</head>
<body>
<!--Navigation-->
	<nav>
		<div><a href="Index.html"><img class="logo" src="img/fashionwalktrans white 2.png" alt="Logo"></a></div>
		<label for="btn" class="icon">
		<span class="fa fa-bars"></span>
		</label>
		<input type="checkbox" id="btn">
		<ul>
			<li>
				<label for="btn-1" class="show">Mens</label>
				<a href="Categories/Page 2.html" class="menu-item">Mens</a>
				<input type="checkbox" id="btn-1">
			  <ul>
				<li>
					<label for="btn-2" class="show">Casual Wear</label>
					<a href="Categories/sub categories/Mens - causal/Mens-casual wear all.php">Casual Wear</a>
					<input type="checkbox" id="btn-2">
					<ul>
						<li><a href="Categories/sub categories/Mens - causal/Mens-casual wear-T-shirts.php">T-Shirts</a></li>
						<li><a href="Categories/sub categories/Mens - causal/Mens-casual wear-jeans.php">Jeans</a></li>
						<li><a href="Categories/sub categories/Mens - causal/Mens-casual wear-polos.php">Polos</a></li>
						<li><a href="Categories/sub categories/Mens - causal/Mens-casual wear-shirts.php">Shirts</a></li>
						<li><a href="Categories/sub categories/Mens - causal/Mens-casual wear-shorts.php">Shorts</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-3" class="show">Formal Wear</label>
					<a href="Categories/sub categories/Mens - formal/Mens-formal wear all.php">Formal Wear</a>
					<input type="checkbox" id="btn-3">
					<ul>
						<li><a href="Categories/sub categories/Mens - formal/Mens-formal wear-shirts.php">Shirts</a></li>
						<li><a href="Categories/sub categories/Mens - formal/Mens-formal wear-trousers.php">Trousers</a></li>
					</ul>
				</li>
					<li>
						<label for="btn-4" class="show">Accessories</label>
						<a href="Categories/sub categories/Mens - accessories/Mens-accessories all.php">Accessories</a>
						<input type="checkbox" id="btn-4">
					<ul>
						<li><a href="Categories/sub categories/Mens - accessories/Mens-accessories-belts.php">Belts</a></li>
						<li><a href="Categories/sub categories/Mens - accessories/Mens-accessories-bows&ties.php">Bows & Ties</a></li>
					</ul>
					</li>
					<li>
						<label for="btn-5" class="show">Underwear & Socks</label>
						<a href="Categories/sub categories/Mens - underwear/Mens-underwear&socks all.php">Underwear & Socks</a>
						<input type="checkbox" id="btn-5">
					<ul>
						<li><a href="Categories/sub categories/Mens - underwear/Mens-underwear&socks-briefs.php">Briefs</a></li>
					</ul>
					</li>
				</ul>
			</li>
			<li>
				<label for="btn-7" class="show">Women</label>
				<a href="Categories/Women.html" class="menu-item">Women</a>
				<input type="checkbox" id="btn-7">
			<ul>
				<li>
					<label for="btn-8" class="show">Casual Wear</label>
					<a href="Categories/sub categories/Womens - casual/Womens-casual all.php">Casual Wear</a>
					<input type="checkbox" id="btn-8">
					<ul>
						<li><a href="Categories/sub categories/Womens - casual/Womens-casual-leggings.php">Leggings & Tights</a></li>
						<li><a href="Categories/sub categories/Womens - casual/Womens-casual-tanktops.php">Tank Tops</a></li>
						<li><a href="Categories/sub categories/Womens - casual/Womens-casual-skirts & shorts.php">Skirts & Shorts</a></li>
						<li><a href="Categories/sub categories/Womens - casual/Womens-casual-polos.php">Polos</a></li>
						<li><a href="Categories/sub categories/Womens - casual/Womens-casual-shirts.php">Shirts</a></li>
						<li><a href="Categories/sub categories/Womens - casual/Womens-casual-bodysuits.php">Bodysuits</a></li>
					</ul>
				</li>
				<li><label for="btn-9" class="show">Formal Wear</label>
					<a href="Categories/sub categories/Womens - formal/Womens-formal all.php">Formal Wear</a>
					<input type="checkbox" id="btn-9">
					<ul>
						<li><a href="Categories/sub categories/Womens - formal/Womens-formal-shirts & tops.php">Shirts & Tops</a></li>
						<li><a href="Categories/sub categories/Womens - formal/Womens-formal-trousers & pants.php">Trousers & Pants</a></li>
						<li><a href="Categories/sub categories/Womens - formal/Womens-formal-skirts.php">Skirts</a></li>
					</ul>
				</li>
					<li>
						<label for="btn-10" class="show">Accessories</label>
						<a href="Categories/sub categories/Womens - accessories/Womens-accessories all.php">Accessories</a>
						<input type="checkbox" id="btn-10">
					<ul>
						<li><a href="Categories/sub categories/Womens - accessories/Womens-accessories-Hair accessories.php">Hair Accessories</a></li>
						<li><a href="Categories/sub categories/Womens - accessories/Womens-accessories-makeup pouch.php">Makeup Pouch</a></li>
						<li><a href="Categories/sub categories/Womens - accessories/Womens-accessories-caps & hats.php">Caps & Hats</a></li>
						<li><a href="Categories/sub categories/Womens - accessories/Womens-accessories-sunglasses.php">Sunglasses</a></li>
					</ul>
					</li>
					<li>
						<label for="btn-11" class="show">Nightwear</label>
						<a href="Categories/sub categories/Womens - nightwear/Womens-nightwear all.php">Nightwear</a>
						<input type="checkbox" id="btn-11">
					<ul>
						<li><a href="Categories/sub categories/Womens - nightwear/Womens-nightwear-pijama.php">Pijama</a></li>
					</ul>
					</li>
					<li>
						<label for="btn-12" class="show">Sports</label>
						<a href="Categories/sub categories/Womens - sports/Womens-sports all.php">Sports</a>
						<input type="checkbox" id="btn-12">
					<ul>
						<li><a href="Categories/sub categories/Womens - sports/Womens-sports-tops.php">Tops</a></li>
						<li><a href="Categories/sub categories/Womens - sports/Womens-sports-t-shirts.php">T-Shirts</a></li>
						<li><a href="Categories/sub categories/Womens - sports/Womens-sports-tights.php">Tights</a></li>
						<li><a href="Categories/sub categories/Womens - sports/Womens-sports-pants.php">Pants</a></li>
					</ul>
					</li>
				</ul>
			</li>
			<li>
				<label for="btn-13" class="show">Kids</label>
				<a href="Categories/Kids.html" class="menu-item">Kids</a>
				<input type="checkbox" id="btn-13">
			<ul>
				<li>
					<label for="btn-14" class="show">Boys</label>
					<a href="Categories/sub categories/Kids - boys/Kids-boys all.php">Boys</a>
					<input type="checkbox" id="btn-14">
					<ul>
						<li><a href="Categories/sub categories/Kids - boys/Kids-boys-shirts.php">Shirts</a></li>
						<li><a href="Categories/sub categories/Kids - boys/Kids-boys-pants.php">Pants</a></li>
						<li><a href="Categories/sub categories/Kids - boys/Kids-boys-jeans.php">Jeans</a></li>
						<li><a href="Categories/sub categories/Kids - boys/Kids-boys-tshirts.php">T-Shirts</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-15" class="show">Girls</label>
					<a href="Categories/sub categories/Kids - girls/Kids-girls all.php">Girls</a>
					<input type="checkbox" id="btn-15">
						<ul>
							<li><a href="Categories/sub categories/Kids - girls/Kids-girls-tshirts.php">T-Shirts</a></li>
							<li><a href="Categories/sub categories/Kids - girls/Kids-girls-jeans.php">Jeans</a></li>
						</ul>
				</li>
					<li>
						<label for="btn-17" class="show">Soprts</label>
						<a href="Categories/sub categories/Kids - sports/Kids-sports all.php">Sports </a>
						<input type="checkbox" id="btn-17">
						<ul>
							<li><a href="Categories/sub categories/Kids - sports/Kids-sports-accessories.php">Accessories</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<label for="btn-18" class="show">Bags & Shoes</label>
				<a href="Categories/Bags&shoes.html" class="menu-item">Bags & Shoes</a>
				<input type="checkbox" id="btn-18">
			<ul>
				<li>
					<label for="btn-19" class="show">Travel Bags</label>
					<a href="Categories/sub categories/Bags - travelbags/Bags-travelbags all.php">Travel Bags</a>
					<input type="checkbox" id="btn-19">
					<ul>
						<li><a href="Categories/sub categories/Bags - travelbags/Bags-travelbags-backpack.php">Backpack</a></li>
						<li><a href="Categories/sub categories/Bags - travelbags/Bags-travelbags-shoulderbags.php">Shoulder Bags</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-20" class="show">Women's Footwear</label>
					<a href="Categories/sub categories/Bags - womens/Bags-womens all.php">Women's Footwear</a>
					<input type="checkbox" id="btn-20">
					<ul>
						<li><a href="Categories/sub categories/Bags - womens/Bags-womens-sandals.php">Sandals</a></li>
						<li><a href="Categories/sub categories/Bags - womens/Bags-womens-flats.php">Flats</a></li>
						<li><a href="Categories/sub categories/Bags - womens/Bags-womens-sneakers.php">Sneakers</a></li>
					</ul>
				</li>
					<li>
						<label for="btn-21" class="show">Men's Footwear</label>
						<a href="Categories/sub categories/Bags- mens/Bags-mens all.php">Men's Footwear</a>
						<input type="checkbox" id="btn-21">
					<ul>
						<li><a href="Categories/sub categories/Bags- mens/Bags-mens-flipflop.php">Flip Flops</a></li>
						<li><a href="Categories/sub categories/Bags- mens/Bags-mens-sandals.php">Sandals</a></li>
						<li><a href="Categories/sub categories/Bags- mens/Bags-mens-boots.php">Boots</a></li>
					</ul>
					</li>
					<li>
						<label for="btn-22" class="show">Kid's Footwear</label>
						<a href="Categories/sub categories/Bags- kids/Bags-kids all.php">Kid's Footwear</a>
						<input type="checkbox" id="btn-22">
					<ul>
						<li><a href="Categories/sub categories/Bags- kids/Bags-kids-sandals.php">Sandals</a></li>
						<li><a href="Categories/sub categories/Bags- kids/Bags-kids-girls.php">Girls</a></li>
					</ul>
					</li>
					<li>
						<label for="btn-23" class="show">Sports Footwear</label>
						<a href="Categories/sub categories/Bags - sports/Bags-sports all.php">Sports Footwear</a>
						<input type="checkbox" id="btn-23">
					<ul>
						<li><a href="Categories/sub categories/Bags - sports/Bags-sports-unisex.php">Unisex</a></li>
					</ul>
					</li>
				</ul>
			</li>
			<li>
				<label for="btn-24" class="show">Gifts & Vouchers</label>
				<a href="Categories/Gifts.html" class="menu-item">Gifts & Vouchers</a>
				<input type="checkbox" id="btn-24">
			<ul>
				<li>
					<label for="btn-25" class="show">Cards</label>
					<a href="Categories/sub categories/Gifts - card/Gifts-cards all.php">Cards</a>
					<input type="checkbox" id="btn-25">
					<ul>
						<li><a href="Categories/sub categories/Gifts - card/Gifts-cards-cardboxes.php">Card Boxes</a></li>
						<li><a href="Categories/sub categories/Gifts - card/Gifts-cards-birthday.php">Birthday</a></li>
						<li><a href="Categories/sub categories/Gifts - card/Gifts-cards-wedding.php">Wedding</a></li>
						<li><a href="Categories/sub categories/Gifts - card/Gifts-cards-love.php">Love</a></li>
						<li><a href="Categories/sub categories/Gifts - card/Gifts-cards-christmas.php">Christmas</a></li>
						<li><a href="Categories/sub categories/Gifts - card/Gifts-cards-newyear.php">New Year</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-26" class="show">Gift Vouchers</label>
					<a href="Categories/sub categories/Gifts - vouchers/Gifts-vouchers all.php">Gift Vouchers</a>
					<input type="checkbox" id="btn-26">
					<ul>
						<li><a href="Categories/sub categories/Gifts - vouchers/Gifts-vouchers-allstores.php">All stores</a></li>
					</ul>
				</li>
				</ul>
			</li>
			<li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
			<li><a href="viewCart with profile.php"><i class="fa fa-shopping-basket"></i></a></li>
			<li><a href="profile.html">Account</a></li>
		</ul>
		</nav>
		<div class="search-form">
			<form>
				<input type="text" name="" placeholder="Search">
			</form>
		</div>
		<a class="close"><i class="fa fa-times"></i></a>
	
  <!-- Cart -->
<div class="small-container cart page">
			<table>	
				<h1>Cart Items</h1>
				<tr>
					<th>Item Name</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Total</th>
					<th>Remove</th>
				</tr>
				<?php 
				if(isset($_GET["del"]))
				{
					foreach($_SESSION["cart"] as $keys=>$values)
					{
							if($values["pid"]==$_GET["del"])
							{
								unset($_SESSION["cart"][$keys]);
							}
					}
				}
					if(!empty($_SESSION["cart"]))
					{
							$total=0;
							foreach($_SESSION["cart"] as $keys=>$values)
							{
								$amt=$values["qty"]*$values["price"];
									$total+=$amt;
									echo "
											<tr>
												<td>{$values["pname"]}</td>
												<td>{$values["qty"]}</td>
												<td>{$values["price"]}</td>
												<td>{$amt}</td>
												<td><a href='viewCart.php?del={$values["pid"]}'>Remove</a></td>
											</tr>
									";
									
							}	
								echo "<table>
											<tr>
												<td><span>Total</span></td>
												<td></td>
												<td></td>
												<td></td>
												<td><span>{$total}</span></td>
											</tr>
											</table>";	
						
							
					}
				?>
			</table>
			
  </div>
</div>
	
	<!-- Footer -->
	<footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
                       <h4>CUSTOMER CARE</h4>
                       <div class="gap">
						<a href="../../../Footer/return.html"><p>Return & Refund</p></a>
                        <a href="#"><p>Feedback</p></a>
                        <a href="../../../Footer/Size Guide.pdf"><p>Size guides</p></a>
                        <a href="../../../Footer/locater.html"><p>Store Locator</p></a>
						<a href="#"><p>Service Payment</p></a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30 ">
                        <h2>LET US HELP YOU</h2>
                        <ul>
							<li><a href="#">My Account</a></li>
                            <li><a href="#">My orders</a></li>
							<li><a href="../../../Footer/careers.html">Careers</a></li>
                            <li><a href="../../../Footer/Terms & Conditions.html">Terms of Use</a></li>
                            <li><a href="../../../Footer/privacypolicy.html">Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 segment-three md-mb-30 sm-mb-30 ">
                        <h2>GET TO KNOW US</h2>
                        <div class="gap1">
                        <a href="../../../Footer/aboutus.html"><p>About us</p></a>
                        <a href="../../../Footer/ContactUs.html"><p>Contact Us</p></a>
                        </div>
                        <br>    
                        <a href="#" class="n"><i class="fa fa-facebook"></i></a>&nbsp;
                        <a href="#" class="n"><i class="fa fa-twitter"></i></a>&nbsp;
                        <a href="#" class="n"><i class="fa fa-instagram"></i></a>&nbsp;
                        <a href="#" class="n"><i class="fa fa-pinterest"></i></a>
                    </div>
					<div class="col-md-3 col-sm-6 col-xs-12 segment-four sm-mb-30 ">
                        <h2>VISIT OUR STORE</h2>
                      	<address>
						Old Road,<br>
						Nawinna,<br>
						Maharagama,<br>
						Sri Lanka
						</address>
                    </div>
                </div>
            </div>
        </div>
        <p class="footer-bottom-text">All Rights Reserved by &copy FashionWalk.2020</p>
    </footer>
	
	<script src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
	<script src="Cart-javascript.js" type="text/javascript"></script>

</body>
</html>
