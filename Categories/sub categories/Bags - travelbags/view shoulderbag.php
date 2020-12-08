<?php 
	include "config.php";
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shoulder Bags</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
	<link rel="shortcut icon" type="image/jpg" href="../../../img/correctedlogo.png">
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
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
				<a href="../../Men.html" class="menu-item">Mens</a>
			  <ul>
				<li>
					<a href="../Mens - causal/Mens-casual wear all.php">Casual Wear</a>
					<ul>
						<li><a href="../Mens - causal/Mens-casual wear-T-shirts.php">T-Shirts</a></li>
						<li><a href="../Mens - causal/Mens-casual wear-jeans.php">Jeans</a></li>
						<li><a href="../Mens - causal/Mens-casual wear-polos.php">Polos</a></li>
						<li><a href="../Mens - causal/Mens-casual wear-shirts.php">Shirts</a></li>
						<li><a href="../Mens - causal/Mens-casual wear-shorts.php">Shorts</a></li>
					</ul>
				</li>
				<li>
					<a href="../Mens - formal/Mens-formal wear all.php">Formal Wear</a>
					<ul>
						<li><a href="../Mens - formal/Mens-formal wear-shirts.php">Shirts</a></li>
						<li><a href="../Mens - formal/Mens-formal wear-trousers.php">Trousers</a></li>
					</ul>
				</li>
					<li>
						<a href="../Mens - accessories/Mens-accessories all.php">Accessories</a>
					<ul>
						<li><a href="../Mens - accessories/Mens-accessories-belts.php">Belts</a></li>
						<li><a href="../Mens - accessories/Mens-accessories-bows&ties.php">Bows & Ties</a></li>
					</ul>
					</li>
					<li>
						<a href="../Mens - underwear/Mens-underwear&socks all.php">Underwear & Socks</a>
					<ul>
						<li><a href="../Mens - underwear/Mens-underwear&socks-briefs.php">Briefs</a></li>
					</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="../../Women.html" class="menu-item">Women</a>
			<ul>
				<li>
					<a href="../Womens - casual/Womens-casual all.php">Casual Wear</a>
					<ul>
						<li><a href="../Womens - casual/Womens-casual-leggings.php">Leggings & Tights</a></li>
						<li><a href="../Womens - casual/Womens-casual-tanktops.php">Tank Tops</a></li>
						<li><a href="../Womens - casual/Womens-casual-skirts & shorts.php">Skirts & Shorts</a></li>
						<li><a href="../Womens - casual/Womens-casual-polos.php">Polos</a></li>
						<li><a href="../Womens - casual/Womens-casual-shirts.php">Shirts</a></li>
						<li><a href="../Womens - casual/Womens-casual-bodysuits.php">Bodysuits</a></li>
					</ul>
				</li>
				<li>
					<a href="../Womens - formal/Womens-formal all.php">Formal Wear</a>
					<ul>
						<li><a href="../Womens - formal/Womens-formal-shirts & tops.php">Shirts & Tops</a></li>
						<li><a href="../Womens - formal/Womens-formal-trousers & pants.php">Trousers & Pants</a></li>
						<li><a href="../Womens - formal/Womens-formal-skirts.php">Skirts</a></li>
					</ul>
				</li>
					<li>
						<a href="../Womens - accessories/Womens-accessories all.php">Accessories</a>
					<ul>
						<li><a href="../Womens - accessories/Womens-accessories-Hair accessories.php">Hair Accessories</a></li>
						<li><a href="../Womens - accessories/Womens-accessories-makeup pouch.php">Makeup Pouch</a></li>
						<li><a href="../Womens - accessories/Womens-accessories-caps & hats.php">Caps & Hats</a></li>
						<li><a href="../Womens - accessories/Womens-accessories-sunglasses.php">Sunglasses</a></li>
					</ul>
					</li>
					<li>
						<a href="../Womens - nightwear/Womens-nightwear all.php">Nightwear</a>
					<ul>
						<li><a href="../Womens - nightwear/Womens-nightwear-pijama.php">Pijama</a></li>
					</ul>
					</li>
					<li>
						<a href="../Womens - sports/Womens-sports all.php">Sports</a>
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
				<a href="../../Kids.html" class="menu-item">Kids</a>
			<ul>
				<li>
					<a href="../Kids - boys/Kids-boys all.php">Boys</a>
					<ul>
						<li><a href="../Kids - boys/Kids-boys-shirts.php">Shirts</a></li>
						<li><a href="../Kids - boys/Kids-boys-pants.php">Pants</a></li>
						<li><a href="../Kids - boys/Kids-boys-jeans.php">Jeans</a></li>
						<li><a href="../Kids - boys/Kids-boys-tshirts.php">T-Shirts</a></li>
					</ul>
				</li>
				<li>
					<a href="../Kids - girls/Kids-girls all.php">Girls</a>
						<ul>
							<li><a href="../Kids - girls/Kids-girls-tshirts.php">T-Shirts</a></li>
							<li><a href="../Kids - girls/Kids-girls-jeans.php">Jeans</a></li>
						</ul>
				</li>
					<li>
						<a href="../Kids - sports/Kids-sports all.php">Sports </a>
						<ul>
							<li><a href="../Kids - sports/Kids-sports-accessories.php">Accessories</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="../../Bags&shoes.html" class="menu-item">Bags & Shoes</a>
			<ul>
				<li>
					<a href="../Bags - travelbags/Bags-travelbags all.php">Travel Bags</a>
					<ul>
						<li><a href="../Bags - travelbags/Bags-travelbags-backpack.php">Backpack</a></li>
						<li><a href="../Bags - travelbags/Bags-travelbags-shoulderbags.php">Shoulder Bags</a></li>
					</ul>
				</li>
				<li>
					<a href="../Bags - womens/Bags-womens all.php">Women's Footwear</a>
					<ul>
						<li><a href="../Bags - womens/Bags-womens-sandals.php">Sandals</a></li>
						<li><a href="../Bags - womens/Bags-womens-flats.php">Flats</a></li>
						<li><a href="../Bags - womens/Bags-womens-sneakers.php">Sneakers</a></li>
					</ul>
				</li>
					<li>
						<a href="../Bags- mens/Bags-mens all.php">Men's Footwear</a>
					<ul>
						<li><a href="../Bags- mens/Bags-mens-flipflop.php">Flip Flops</a></li>
						<li><a href="../Bags- mens/Bags-mens-sandals.php">Sandals</a></li>
						<li><a href="../Bags- mens/Bags-mens-boots.php">Boots</a></li>
					</ul>
					</li>
					<li>
						<a href="../Bags- kids/Bags-kids all.php">Kid's Footwear</a>
					<ul>
						<li><a href="../Bags- kids/Bags-kids-sandals.php">Sandals</a></li>
						<li><a href="../Bags- kids/Bags-kids-girls.php">Girls</a></li>
					</ul>
					</li>
					<li>
						<a href="../Bags - sports/Bags-sports all.php">Sports Footwear</a>
					<ul>
						<li><a href="../Bags - sports/Bags-sports-unisex.php">Unisex</a></li>
					</ul>
					</li>
				</ul>
			</li>
			<li>
				<a href="../../Gifts.html" class="menu-item">Gifts & Vouchers</a>
			<ul>
				<li>
					<a href="../Gifts - card/Gifts-cards all.php">Cards</a>
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
					<a href="../Gifts - vouchers/Gifts-vouchers all.php">Gift Vouchers</a>
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
	
	<!-- Product details-->
  
<div class="small-container">
  <div class="row">
			<?php 
			if(isset($_POST["addCart"])){
				if(isset($_SESSION["cart"]))
				{
					$pid_array=array_column($_SESSION["cart"],"pid");
					if(!in_array($_GET["id"],$pid_array))
					{
						$index=count($_SESSION["cart"]);
						$item=array(
							'pid' => $_GET["id"],
							'pname' => $_POST["pname"],
							'price' => $_POST["price"],
							'qty' => $_POST["qty"]
						);
						$_SESSION["cart"][$index]=$item;
							echo "<script>alert('Product Added..');</script>";
						header("location:viewCart.php");
					}
					else
					{
						echo "<script>alert('Already Added..');</script>";
					}
				}
				else
				{
						$item=array(
							'pid' => $_GET["id"],
							'pname' => $_POST["pname"],
							'price' => $_POST["price"],
							'qty' => $_POST["qty"]
						);
						$_SESSION["cart"][0]=$item;
						echo "<script>alert('Product Added..');</script>";
						header("location:viewCart.php");
				}
			}
			
			$sql="select * from btshoulder where PID='{$_GET["id"]}'";
			$res=$con->query($sql);
			if($res->num_rows>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=$res->fetch_assoc())
				{
			echo  '
   <div >
   <table class="table">
     <tr>
	 <td><img src="Shoulder bags/'. $row['PIC'] .'" alt="" class="large" ></td>
	 <td>
	 <h1 class="detail"><strong><a href="#">'. $row['PNAME'] .'</a></strong></h1>
	 <h3>Product Details</h3>
     <h4 class="detail"><a href="#">'. $row['PDETAILS'] .'</a></h4>
     <h4 class="price"> Rs.'. $row['PRICE'] .'</h4>
	<p class="qty"><input type="text"  placeholder="Enter Qty" name="qty"  class="form-control"></p>
	<p><input type="hidden"  name="pname" value="'. $row['PNAME'] .'" class="form-control"></p>
	<p><input type="hidden"  name="pdetails" value="'. $row['PDETAILS'] .'" class="form-control"></p>
	<p><input type="hidden"  name="price" value="'. $row['PRICE'] .'" class="form-control"></p>
	<p><input type="submit" name="addCart" class="btn btn-success" value="Add to Cart"></p>
	
	</td>
	</tr>
	</table>
   </div>
   ';
				}
				echo '</form>';
			}
			?>
        
        </div>
    </div>
	
	<!-- Similar products -->
	<div class="similar">
	<h2>Similar Products</h2>
	<div class="row">
			<?php 
			$sql="select * from btshoulder";
			$res=$con->query($sql);
			if($res->num_rows>0)
			{
				while($row=$res->fetch_assoc())
				{
			echo  '
   <div class="col-1">
     <img src="Shoulder bags/'. $row['PIC'] .'" alt="" class="img-responsive" >
     <p><strong><a href="view shoulderbag.php?id='. $row['PID'] .'">'. $row['PNAME'] .'</a></strong></p>
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
<script src="Bags-travelbags-javascript.js" type="text/javascript"></script>

</body>
</html>
