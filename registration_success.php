<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Successfully Register</title>

    <link href="css/style.css" rel="stylesheet" type="text/css">

	
</head>
<body>
	<div class="gridContainer clearfix"></div>
	<div class="header">
		<div class="logo">
			<img src="images/library_logo1.png" heigth="300px" width="350px">
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

	<div class="regsuccess">
        <br>
		<img src="images/confirm.png" heigth="150px" width="150px"><br>
		<span class="success">Successfully Registered,log in now</span>
        <span><a href="list_user.php">Back To Userlist</a> </span>
	</div>
    <?php

    if(isset($_POST['edit_submit']))
    {
        require_once('db_connection.php');
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $utype = $_POST['user_type'];
        $profession = $_POST['profession'];
        $gender = $_POST['gender'];
        $contact= $_POST['contact'];
        if($username !='' && $email!='' && $password!='' && $utype!='' && $profession!='' && $gender!=''and $contact!='')


        {

            if(isset($_REQUEST['user_id'])){
                //$sql = "INSERT INTO book (bookname,author,book_type,publish_year,price,amount) VALUES ('$bookname','$author','$btype','$pyear','$price','$amount')";
                $sql = "UPDATE user SET username='$username',email='$email',password='$password',user_type='$utype',profession='$profession',gender='$gender',contact='$contact' WHERE id=".$_REQUEST['user_id'];
                //echo $sql;
                //die;
                mysql_query($sql);
                //header('location: index.html');
            }

        }


    }
    else{
        require_once('db_connection.php');
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $utype = $_POST['user_type'];
        $profession = $_POST['profession'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact_no'];
        if($username !='' && $email!='' && $password!='' && $utype!='' && $profession!='' && $gender!=''and $contact!='')
        {
            $sql = "INSERT INTO user (username,email,password,user_type,profession,gender,contact) VALUES ('$username','$email','$password','$utype','$profession','$gender','$contact')";
            mysql_query($sql);
            //header('location: index.html');
        }

    }
    ?>
    <div>
        <br>

        <li><a href="logout.php">Log out</a></li>
        </br>
    </div>

	<div class="footer">
		<hr>
		<h3><a href="contact_us.php"><b>Contact Us</b></a></h3>
		<p>Rajuk Trade Centre (3rd Floor ), Nikunja-2, Dhaka-1229</p>
		<p style="font-size:14px">Copyright ©2016 Niloy, Inc. All Rights Reserved.</p>
	</div>

</body>
</html>