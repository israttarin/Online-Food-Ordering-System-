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
					width: 66%;
					height:500px;
					float: left;
			}
			.pics h2{
				text-align:center;
				font-size:20px;
				font-weight:bold;
			}
			.add{
				background-color: gray;
				color: black;
				width: 31%;
				height:500px;
				float: left;
			}
			.add h2{
				text-align:center;
				font-size:20px;
				font-weight:bold;
			}
			.m{
				height: 200px;
				width: 350px;
				display: none;
				border: 2px solid blue;
			}
		</style>
	</head>
	<body>
			<div class="head">
				<h2>Foodie</h2>
			</div>
			<div class="navi">
				<a href="index.php"><h2>Home</h2>
				<a href="Foods.php"><h2>Foods</h2></a>
				<a href="Resources.php"><h2>Resources</h2></a>
				<a href="Ordering.php"><h2>Ordering</h2></a>
				<a href="Admin Dashboard.php"><h2>Admin Dashboard</h2></a>
				<a href="Pricing.php"><h2>Pricing</h2></a>
				<a href="Contact Us.php"><h2>Contact Us</h2></a>
			
			
			</div>
			<div class="pics">
				<img src="Image/1.jpg" height="500" width="900" id="x">
			</div>
			<div class="add">
			
				<img src="Image/download (1).jpg" class="m" id="1">
				<img src="Bengali/fish curry.jpg" class="m" id="2">

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