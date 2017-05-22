<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Contact Us</title>

    <link href="css/style.css" rel="stylesheet" type="text/css">

	
</head>
<body>
	<div class="gridContainer clearfix"></div>
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/library_logo1.png" heigth="300px" width="350px"></a>
		</div>
			
		<div class="login">
			<form action="login.php" method="POST">
				
				<label for="username"><b>Username:</b> </label><input type="text" name="username" id="username" required 
			    autofocus placeholder="Username">
			    <br><br>
			    <label for="password"><b>Password:</b> &nbsp;</label><input type="password" name="password" id="password" required
			    autofocus placeholder="Password">
			    <br><br>
			    <input class="lbutton" type="submit" name="submit" alt="Submit" value="Login">
			   <p>Don't have an account?<br><a href="sign_up.php">Sign up</a></p>
			   
			</form>
			
		</div>
	</div>
	<div class="menu">
		<ul class="main-menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="location.php">Location</a></li>
			<li><a href="about_us.php">About Us</a></li>
			<li><a href="contact_us.php">Contact Us</a></li>
		</ul>
	</div>

	<div class="contactus">
		<div class="contac">Office Address</div><br>
		<div class="excer2">
			<div><span><b>Address:</b></span>
				 Rajuk Trade Center,Nikunja-2,3rd floor
			</div><br>
			<div>
				<span><b>Phone:</b></span>88-02-9888766(Hunting)
			</div><br>
			<div><span><b>Fax:</b></span>
				88-02-9887615
			</div><br>
			<div><span><b>SWIFT Address:</b></span>
			</div><br>		</div>
	</div>

	

	<div class="footer">
		<hr>
		<h3><a href="contact_us.php"><b>Contact Us</b></a></h3>
		<p>Rajuk Trade Centre (3rd Floor ), Nikunja-2, Dhaka-1229</p>
		<p style="font-size:14px">Copyright ©2016 Niloy, Inc. All Rights Reserved.</p>
	</div>

</body>
</html>