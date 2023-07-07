<!DOCTYPE HTML>
<html>
	<head>
		<title>The Spice of Cooking</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="logo"><img src="images/logo.png" height="90" width="150"></a>
					<nav id="nav">
						<a href="1_home.html">Home</a>
						<a href="2_items.html">Items</a>
						<a href="3_About.html">About us</a>
						<a href="4_Contact.html">Contact us</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
<!-- banner -->
		<section id="banner">
				<div class="inner">
<?php
$phoneno=$_POST["mhtxt1"];
$password=$_POST["ptxt1"];

$cn=mysqli_connect ("localhost","root");
mysqli_select_db ($cn,"reg");

$result=mysqli_query($cn,"select * from customer where phoneno = '".$phoneno."' and password = '".$password."'"); 

if(mysqli_num_rows($result)>0)
{	
while($row=mysqli_fetch_array($result))
	{
		echo "&nbsp;";
		echo "<h1>Welcome</h1>";
		//echo "<a href="2_items.html" class="button">Back to Home</a>";
	}
}
	else
	{  
		   echo "&nbsp;";
           echo "<h1>Invalid phone no or password</h1>"; 
		//echo "<a href="2_items.html" class="button">Back to Home</a>";
	}
	
?>
			</div>
			</section>
			
			<footer id="footer">
					<div class="copyright">
					<a href="#" class="logo"><img src="images/logo.png" height="90" width="150"></a><br>
					&copy; The Spiece for <a href="#">Cooking</a>.
					</div>
</footer>
</body>
</html>