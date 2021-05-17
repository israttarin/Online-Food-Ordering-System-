<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="footer.css" rel="stylesheet">
		<link href="foods.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Foodie</title>
	</head>
	<style>
		.m{
				height: 200px;
				width: 350px;
				display: none;
				border: 2px solid blue;
	    }
	</style>
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
			    <h2>Cart is empty<h2>
			</div>
				<div class="add">
					<img src="Italian/Lasagna.jpg" class="m" id="1">
					<img src="Chinese/Dumplings.jpg" class="m" id="2">

					<script>
						var j=0;
						function x()
						{
							if(j==0)
							{
								document.getElementById('1').style.display='block';
								document.getElementById('2').style.display='none';
								j=1;
							}
							else
							{
								document.getElementById('1').style.display='none';
								document.getElementById('2').style.display='block';
								j=0;
							}
							setTimeout(function(){x();},2000);
							
						}
						x();
					</script>
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