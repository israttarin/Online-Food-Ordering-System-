<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="footer.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Online food ordering system</title>
		<style>
			.head{
				background-color:gray;
				color:white;
				margin-left:20px;
				margin-right:20px;
				padding:40px;
			}
			.head h2{
				font-size:30px;
				font-weight:bold;
				padding-left: 400px;
				padding-top: 0px
			}
			.navi{
				background-color: green;
				color: white;
				margin-left:20px;
				width: 97%;
				height: 65px;
			}
			.navi a{
				color:#FFFFFF;
			}
			.navi h2{
				padding: 5px 30px;
				font-size:20px;
				font-weight:bold;
				float: left;
			}
			.pics{
					background-color: blue;
					color: black;
					margin-left: 20px;
					width: 97%;
					height:500px;
					float: left;
			}
			.pics h2{
				text-align:center;
				font-size:20px;
				font-weight:bold;
			}
			.login{
				background-color:white;
				color:black;
				border: 2px solid tomato;
				margin:auto;
				width:25%;
				height:200px;
				padding:40px;
			}
			.login input[type=text]{
				width:80%;
				padding:12px 20px;
				margin:8px 0;
			}
			.login input[type=password]{
				width:80%;
				padding:12px 20px;
				margin:8px 0;
			}
			.login input[type=submit]{
				background-color:tomato;
				color:white;
				width:93%;
				padding:12px 20px;
				margin-top:8px 0px;
			}
		</style>
	</head>
	<?php 
	
	$error = "";
	 
	include 'connection.php';
	
	session_start();
   
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	  
		$myusername = mysqli_real_escape_string($conn,$_POST['email']);
		$mypassword = mysqli_real_escape_string($conn,$_POST['password']); 

		$sql = "SELECT * FROM admin WHERE email = '$myusername' and password = '$mypassword'";
		
		$result = mysqli_query($conn,$sql);
		
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		$count = mysqli_num_rows($result);

		if($count == 1) {
			//session_register("myusername");
			$_SESSION['login_user'] = $myusername;
			header("location: index.php");
			//$error = "Login successfully " . $_SESSION['login_user'];
		}else {
			$error = "Your Login Name or Password is invalid";
		}
	}
	
?>
	<body>
			<div class="head">
				<h2>Foodie</h2>
			</div>
			<div class="navi">
				<a href="index.php"><h2>Home</h2></a>
				<a href="Foods.php"><h2>Foods</h2></a>
				<a href="Resources.php"><h2>Resources</h2></a>
				<a href="Ordering.php"><h2>Ordering</h2></a>
				<a href="Admin Dashboard.php"><h2>Admin Dashboard</h2></a>
				<a href="Pricing.php"><h2>Pricing</h2></a>
				<a href="Contact Us.php"><h2>Contact Us</h2></a>
			
			
			</div>
			<div class="pics">
			<div class="login">
					<form action="Admin.html" target="_blank" method="get">
					<div class="user">
						<label for="fname">Username:</label>
					</div>
					<input type="text" id="fname" name="username" value="Admin">
					<br>
					Password:<br>
					<input type="password" name="password" value="12345">
					<br>
					<br>
					<input type="submit" value="Sign in">
					</form>	
				</div>
			</div>
			
			<div class="footer">	
				<div class="resources">
					<h2>Resources</h2>
					<a href="About Us.php"><h2>About us</h2></a>
					<a href="Terms of Use.php"><h2>Terms of Use</h2></a>
					<a href="Privacy Policy.php"><h2>Privacy Policy</h2></a>
					<a href="Refund policy.php"><h2>Refund Policy</h2></a>
					<a href="Blog.php"><h2>Blog</h2></a>
				</div>
				<div class="product">
					<h2> Products </h2>
					<a href="Ordering.php"><h2>Ordering</h2></a>
					<a href="Admin Dashboard.php"><h2>Admin Dashboard</h2></a>
				</div>
				<div class="contact">
					<h2>CONTACT US</h2>
					<i class="fa fa-mobile   " aria-hidden="true" style='font-size:36px'> 01975250577</i>
					<i class="fa fa-envelope-open " aria-hidden="true" style='font-size:20px'> isratbhuiyantarin@gmail.com</i>
				</div>
				<h2> Copyright-2019 &copy</h2>
			</div>
	</body>
</html>