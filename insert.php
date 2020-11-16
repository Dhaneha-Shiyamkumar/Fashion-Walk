<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
	
	//create connection
	$conn = mysqli_connect('localhost','root','','fashionwalk');
	if($conn->connect_error)
	{
		die("Connection Failed : ". $conn->connect_error);
	}
	
	$sql = "INSERT INTO register(username,email,password)
		values
		('".$username."','".$email."','".$password."')";

	if ($conn->query($sql) === TRUE) {
    header("location: login.html");
	} else {
    echo "Error inserting record: " . $conn->error;
	}

$conn->close();

	/*else 
	{
		$stmt = $conn->prepare("insert into fashionwalk(username, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $username, $email, $password);
		$stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}*/
?>