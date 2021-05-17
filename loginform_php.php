<?php 

	include '../include/connection.php';
	

	$user_name = ($_POST["email"]) ;
	$user_password = ($_POST["password"]) ;
	
	$sql = "SELECT * FROM admin WHERE email = " . $user_name . "' AND password = " . " '" . $user_password . "'";
	
	if ($conn->query($sql) === TRUE) {
		echo "User Found";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	header("Location: ../Loginform.php");
	
	$conn->close();
?>