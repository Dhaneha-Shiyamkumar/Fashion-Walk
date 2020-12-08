<?php
	include "config.php";
	include "Navbar.html";
?>

<h1>Search page</h1>

<div class="row">
	<?php
		if(isset($_POST['submit-search'])){
			$search = mysqli_real_escape_string($conn, $POST['search']);
			$sql = "select * from bs WHERE PNAME like '%search%'";
			$result = mysqli_query($conn, $sql);
			$queryResult = mysqli_num_rows($result);
			
			echo "There are ".$queryResult." results! ";
			if($queryResult > 0){
				while($row = mysqli_fetch_assoc($result)){
					echo '<div class="col-1">
     				<img src="all/'. $row['PIC'] .'" alt="" class="img-responsive" >
     				<p><a href="view all.php?id='. $row['PID'] .'" class="btn btn-success"><strong><span>'. $row['PNAME'] .'</span></strong></a></p>
     				<h4 class="text-danger"> Rs.'. $row['PRICE'] .'</h4>
   					</div>';
				}
			}else{
				echo "There are no results matching your search!";
			}
		}
	?>
</div>