<?php 
	include "config.php";
?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <link href="Bags-womens-style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
	  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <link rel="shortcut icon" type="image/jpg" href="../../../img/correctedlogo.png">
	<title>BAGS & SHOES | Fashion Walk</title>
	</head>
<body>
	
	<!-- Navigation Bar -->
	<nav>
		<div><a href="../../../index.html"><img class="logo" src="../../../img/correctedlogo.png" alt="Logo"></a></div>
		<label for="btn" class="icon">
		<span class="fa fa-bars"></span>
		</label>
		<input type="checkbox" id="btn">
		<ul>
			<li>
				<label for="btn-1" class="show">Mens</label>
				<a href="../../Men.html" class="menu-item">Mens</a>
				<input type="checkbox" id="btn-1">
			  <ul>
				<li>
					<label for="btn-2" class="show">Casual Wear</label>
					<a href="../Mens - causal/Mens-casual wear all.php">Casual Wear</a>
					<input type="checkbox" id="btn-2">
					<ul>
						<li><a href="../Mens - causal/Mens-casual wear-T-shirts.php">T-Shirts</a></li>
						<li><a href="../Mens - causal/Mens-casual wear-jeans.php">Jeans</a></li>
						<li><a href="../Mens - causal/Mens-casual wear-polos.php">Polos</a></li>
						<li><a href="../Mens - causal/Mens-casual wear-shirts.php">Shirts</a></li>
						<li><a href="../Mens - causal/Mens-casual wear-shorts.php">Shorts</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-3" class="show">Formal Wear</label>
					<a href="../Mens - formal/Mens-formal wear all.php">Formal Wear</a>
					<input type="checkbox" id="btn-3">
					<ul>
						<li><a href="../Mens - formal/Mens-formal wear-shirts.php">Shirts</a></li>
						<li><a href="../Mens - formal/Mens-formal wear-trousers.php">Trousers</a></li>
					</ul>
				</li>
					<li>
						<label for="btn-4" class="show">Accessories</label>
						<a href="../Mens - accessories/Mens-accessories all.php">Accessories</a>
						<input type="checkbox" id="btn-4">
					<ul>
						<li><a href="../Mens - accessories/Mens-accessories-belts.php">Belts</a></li>
						<li><a href="../Mens - accessories/Mens-accessories-bows&ties.php">Bows & Ties</a></li>
					</ul>
					</li>
					<li>
						<label for="btn-5" class="show">Underwear & Socks</label>
						<a href="../Mens - underwear/Mens-underwear&socks all.php">Underwear & Socks</a>
						<input type="checkbox" id="btn-5">
					<ul>
						<li><a href="../Mens - underwear/Mens-underwear&socks-briefs.php">Briefs</a></li>
					</ul>
					</li>
				</ul>
			</li>
			<li>
				<label for="btn-7" class="show">Women</label>
				<a href="../../Women.html" class="menu-item">Women</a>
				<input type="checkbox" id="btn-7">
			<ul>
				<li>
					<label for="btn-8" class="show">Casual Wear</label>
					<a href="../Womens - casual/Womens-casual all.php">Casual Wear</a>
					<input type="checkbox" id="btn-8">
					<ul>
						<li><a href="../Womens - casual/Womens-casual-leggings.php">Leggings & Tights</a></li>
						<li><a href="../Womens - casual/Womens-casual-tanktops.php">Tank Tops</a></li>
						<li><a href="../Womens - casual/Womens-casual-skirts & shorts.php">Skirts & Shorts</a></li>
						<li><a href="../Womens - casual/Womens-casual-polos.php">Polos</a></li>
						<li><a href="../Womens - casual/Womens-casual-shirts.php">Shirts</a></li>
						<li><a href="../Womens - casual/Womens-casual-bodysuits.php">Bodysuits</a></li>
					</ul>
				</li>
				<li><label for="btn-9" class="show">Formal Wear</label>
					<a href="../Womens - formal/Womens-formal all.php">Formal Wear</a>
					<input type="checkbox" id="btn-9">
					<ul>
						<li><a href="../Womens - formal/Womens-formal-shirts & tops.php">Shirts & Tops</a></li>
						<li><a href="../Womens - formal/Womens-formal-trousers & pants.php">Trousers & Pants</a></li>
						<li><a href="../Womens - formal/Womens-formal-skirts.php">Skirts</a></li>
					</ul>
				</li>
					<li>
						<label for="btn-10" class="show">Accessories</label>
						<a href="../Womens - accessories/Womens-accessories all.php">Accessories</a>
						<input type="checkbox" id="btn-10">
					<ul>
						<li><a href="../Womens - accessories/Womens-accessories-Hair accessories.php">Hair Accessories</a></li>
						<li><a href="../Womens - accessories/Womens-accessories-makeup pouch.php">Makeup Pouch</a></li>
						<li><a href="../Womens - accessories/Womens-accessories-caps & hats.php">Caps & Hats</a></li>
						<li><a href="../Womens - accessories/Womens-accessories-sunglasses.php">Sunglasses</a></li>
					</ul>
					</li>
					<li>
						<label for="btn-11" class="show">Nightwear</label>
						<a href="../Womens - nightwear/Womens-nightwear all.php">Nightwear</a>
						<input type="checkbox" id="btn-11">
					<ul>
						<li><a href="../Womens - nightwear/Womens-nightwear-pijama.php">Pijama</a></li>
					</ul>
					</li>
					<li>
						<label for="btn-12" class="show">Sports</label>
						<a href="../Womens - sports/Womens-sports all.php">Sports</a>
						<input type="checkbox" id="btn-12">
					<ul>
						<li><a href="../Womens - sports/Womens-sports-tops.php">Tops</a></li>
						<li><a href="../Womens - sports/Womens-sports-t-shirts.php">T-Shirts</a></li>
						<li><a href="../Womens - sports/Womens-sports-tights.php">Tights</a></li>
						<li><a href="../Womens - sports/Womens-sports-pants.php">Pants</a></li>
					</ul>
					</li>
				</ul>
			</li>
			<li>
				<label for="btn-13" class="show">Kids</label>
				<a href="../../Kids.html" class="menu-item">Kids</a>
				<input type="checkbox" id="btn-13">
			<ul>
				<li>
					<label for="btn-14" class="show">Boys</label>
					<a href="../Kids - boys/Kids-boys all.php">Boys</a>
					<input type="checkbox" id="btn-14">
					<ul>
						<li><a href="../Kids - boys/Kids-boys-shirts.php">Shirts</a></li>
						<li><a href="../Kids - boys/Kids-boys-pants.php">Pants</a></li>
						<li><a href="../Kids - boys/Kids-boys-jeans.php">Jeans</a></li>
						<li><a href="../Kids - boys/Kids-boys-tshirts.php">T-Shirts</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-15" class="show">Girls</label>
					<a href="../Kids - girls/Kids-girls all.php">Girls</a>
					<input type="checkbox" id="btn-15">
						<ul>
							<li><a href="../Kids - girls/Kids-girls-tshirts.php">T-Shirts</a></li>
							<li><a href="../Kids - girls/Kids-girls-jeans.php">Jeans</a></li>
						</ul>
				</li>
					<li>
						<label for="btn-17" class="show">Soprts</label>
						<a href="../Kids - sports/Kids-sports all.php">Sports </a>
						<input type="checkbox" id="btn-17">
						<ul>
							<li><a href="../Kids - sports/Kids-sports-accessories.php">Accessories</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<label for="btn-18" class="show">Bags & Shoes</label>
				<a href="../../Bags&shoes.html" class="menu-item">Bags & Shoes</a>
				<input type="checkbox" id="btn-18">
			<ul>
				<li>
					<label for="btn-19" class="show">Travel Bags</label>
					<a href="../Bags - travelbags/Bags-travelbags all.php">Travel Bags</a>
					<input type="checkbox" id="btn-19">
					<ul>
						<li><a href="../Bags - travelbags/Bags-travelbags-backpack.php">Backpack</a></li>
						<li><a href="../Bags - travelbags/Bags-travelbags-shoulderbags.php">Shoulder Bags</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-20" class="show">Women's Footwear</label>
					<a href="../Bags - womens/Bags-womens all.php">Women's Footwear</a>
					<input type="checkbox" id="btn-20">
					<ul>
						<li><a href="../Bags - womens/Bags-womens-sandals.php">Sandals</a></li>
						<li><a href="../Bags - womens/Bags-womens-flats.php">Flats</a></li>
						<li><a href="../Bags - womens/Bags-womens-sneakers.php">Sneakers</a></li>
					</ul>
				</li>
					<li>
						<label for="btn-21" class="show">Men's Footwear</label>
						<a href="../Bags- mens/Bags-mens all.php">Men's Footwear</a>
						<input type="checkbox" id="btn-21">
					<ul>
						<li><a href="../Bags- mens/Bags-mens-flipflop.php">Flip Flops</a></li>
						<li><a href="../Bags- mens/Bags-mens-sandals.php">Sandals</a></li>
						<li><a href="../Bags- mens/Bags-mens-boots.php">Boots</a></li>
					</ul>
					</li>
					<li>
						<label for="btn-22" class="show">Kid's Footwear</label>
						<a href="../Bags- kids/Bags-kids all.php">Kid's Footwear</a>
						<input type="checkbox" id="btn-22">
					<ul>
						<li><a href="../Bags- kids/Bags-kids-sandals.php">Sandals</a></li>
						<li><a href="../Bags- kids/Bags-kids-girls.php">Girls</a></li>
					</ul>
					</li>
					<li>
						<label for="btn-23" class="show">Sports Footwear</label>
						<a href="../Bags - sports/Bags-sports all.php">Sports Footwear</a>
						<input type="checkbox" id="btn-23">
					<ul>
						<li><a href="../Bags - sports/Bags-sports-unisex.php">Unisex</a></li>
					</ul>
					</li>
				</ul>
			</li>
			<li>
				<label for="btn-24" class="show">Gifts & Vouchers</label>
				<a href="../../Gifts.html" class="menu-item">Gifts & Vouchers</a>
				<input type="checkbox" id="btn-24">
			<ul>
				<li>
					<label for="btn-25" class="show">Cards</label>
					<a href="../Gifts - card/Gifts-cards all.php">Cards</a>
					<input type="checkbox" id="btn-25">
					<ul>
						<li><a href="../Gifts - card/Gifts-cards-cardboxes.php">Card Boxes</a></li>
						<li><a href="../Gifts - card/Gifts-cards-birthday.php">Birthday</a></li>
						<li><a href="../Gifts - card/Gifts-cards-wedding.php">Wedding</a></li>
						<li><a href="../Gifts - card/Gifts-cards-love.php">Love</a></li>
						<li><a href="../Gifts - card/Gifts-cards-christmas.php">Christmas</a></li>
						<li><a href="../Gifts - card/Gifts-cards-newyear.php">New Year</a></li>
					</ul>
				</li>
				<li>
					<label for="btn-26" class="show">Gift Vouchers</label>
					<a href="../Gifts - vouchers/Gifts-vouchers all.php">Gift Vouchers</a>
					<input type="checkbox" id="btn-26">
					<ul>
						<li><a href="../Gifts - vouchers/Gifts-vouchers-allstores.php">All stores</a></li>
					</ul>
				</li>
				</ul>
			</li>
			<li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
			<li><a href="viewCart.php"><i class="fa fa-shopping-basket"></i></a></li>
			<li><a href="../../../login.html">Account</a></li>
		</ul>
		</nav>
		<div class="search-form">
			<form>
				<input type="text" name="" placeholder="Search">
			</form>
		</div>
		<a class="close"><i class="fa fa-times"></i></a>
	
	<!-- Product Categories -->
	<div class="small-container">
	<h2 class="title"><a href="Bags-womens all.php">Bags & Shoes</a><span class="sub-head"> Women's Footwear</span></h2>
		<div class="filter">
			<ul>
				<li class="list active" data-filter="All"><a href="Bags-womens all.php">All</a></li>
				<li class="list" data-filter="Casual"><a href="Bags-womens-sandals.php">Sandals</a></li>
				<li class="list" data-filter="All"><a href="Bags-womens-flats.php">Flats</a></li>
				<li class="list" data-filter="All"><a href="Bags-womens-sneakers.php">Sneakers</a></li>
			</ul>
		</div>
		<div class="row">
			<?php 
			$sql="select * from bwsandals";
			$res=$con->query($sql);
			if($res->num_rows>0)
			{
				while($row=$res->fetch_assoc())
				{
			echo  '
   <div class="col-1">
    
     <img src="Sandles/'. $row['PIC'] .'" alt="" class="img-responsive" >
     <p><strong><a href="view sandals.php?id='. $row['PID'] .'" class="btn btn-success">'. $row['PNAME'] .'</a></strong></p>
     <h4 class="text-danger"> Rs.'. $row['PRICE'] .'</h4>
   </div>
   ';
				}
			}
			?>
		</div>
	</div>
	
	<!-- Footer -->
	<div class="footer">
		<div class="inner-footer">
			
			<div class="footer-items">
				<h2>Customer care</h2>
					<div class="border"></div>
				<ul>
					<a href="../../../Footer/return.html"><li>Return & Refund</li></a>
					<a href="../../../Footer/ContactUs.html"><li>Contact Us</li></a>
					<a href="../../../Footer/Size Guide.pdf"><li>Size Guide</li></a>
					<a href="../../../Footer/locater.html"><li>Store Locator</li></a>
				</ul>
			</div>
			
			<div class="footer-items">
				<h2>Let us help you</h2>
					<div class="border"></div>
				<ul>
					<a href="../../../login.html"><li>My Account</li></a>
					<a href="../../../Footer/Terms & Conditions.html"><li>Terms of use</li></a>
					<a href="../../../Footer/privacypolicy.html"><li>Privacy Policy</li></a>
					<a href="../../../Footer/careers.html"><li>Careers</li></a>
				</ul>
			</div>
			
			<div class="footer-items">
				<h2>Get to know us</h2>
					<div class="border"></div>
				<ul>
					<li><a href="../../../Footer/aboutus.html">About us</a></li>
					<li><a href="#">Magazine</a></li>
				</ul>
				<div class="social-media">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
				</div>
			</div>
			
			<div class="footer-items">
				<h2>Visit our store</h2>
					<div class="border"></div>
				<address>
					Old Road,<br>
					Nawinna,<br>
					Maharagama,<br>
					Sri Lanka
				</address>
			</div>
		</div>
		<div class="footer-bottom">
			Copyright &copy; Fashion Walk 2020. All rights reserved.
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
	<script src="Bags-womens-javascript.js" type="text/javascript"></script>
</body>
</html>
