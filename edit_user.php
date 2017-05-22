<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user where id=". $_REQUEST['user_id'];
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

}
else {
    echo "0 results";
}

//echo "<pre>";
//print_r($row);
//die("<pre>");





?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Edit book</title>

    <link href="css/style.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="gridContainer clearfix"></div>
<div class="header">
    <div class="logo">
        <img src="images/library_logo1.png" heigth="300px" width="350px">
    </div>
</div>
</div>

<div class="regform">
    <form action="registration_success.php" method="POST">
        <fieldset class="field">
            <ul>
                <label style="color: dimgray" for="username"><b>User Name</label><br><input type="text" value="<?php echo $row['username'] ?>" name="username" id="username"
                                                                                            required autofocus placeholder="User Name"><br><br>


                <label style="color: dimgray" for="email"><b>Email</b></label><br><input type="email" value="<?php echo $row['email'] ?>" name="email" id="email" required autofocus placeholder="Email"><br/><br/>
                <label style="color: dimgray" for="password"><b>Password</b></label><br><input type="text" name="password" value="<?php echo $row['password'] ?>"  id="password" required autofocus placeholder="Password">
                <br><br>


                <label style="color: dimgray" for="user_type"><b>User Type: </b></label>
                <select name="user_type">
                    <option <?php if($row['user_type']=="Librarian"){  ?> selected="selected" <?php };?> value="Librarian">Librarian</option>
                    <option <?php if( $row['user_type']=="Client"){ ?> selected="selected" <?php }?> value="Client">Client</option>
                </select>
                <br><br>

                <label style="color: dimgray" for="profession"><b>Profession: </b></label>
                <select name="profession">
                    <option <?php if($row['profession']=="Student"){  ?> selected="selected" <?php };?> value="Student">Student</option>
                    <option <?php if( $row['profession']=="Teacher"){ ?> selected="selected" <?php }?> value="Teacher">Teacher</option>
                    <option <?php if( $row['profession']=="Doctor"){ ?> selected="selected" <?php }?> value="Doctor">Doctor</option>
                    <option <?php if($row['profession']=="Engineer"){  ?> selected="selected" <?php }?> value="Engineer">Engineer</option>
                    <option <?php if($row['profession']=="Businessman"){  ?> selected="selected" <?php }?> value="Businessman">Business Man</option>
                </select>
                <br><br>
                <label style="color: dimgray" for="contact"><b>Contact</b></label><br>
                <input type="text" name="contact" value="<?php echo $row['contact'] ?>"  id="contact" required autofocus placeholder="Contact">
                <br><br>
                <label style="color: dimgray" for="gender"><b>Gender</b></label><br>
                <input type="radio" name="gender" <?php if($row['gender']=="Male"){  ?> checked="checked" <?php };?> value="Male">Male
                <input type="radio" name="gender" <?php if($row['gender']=="Female"){  ?> checked="checked" <?php };?> value="Female">Female
                <br><br>



                <input type="hidden" value="<?php echo $row['id'];?>" name="user_id">
                <input type="submit" name="edit_submit" value="Edit">
            </ul>
        </fieldset>
    </form>
</div>
<div>
    <br>
    <li><a href="admin.php">Home</a></li>

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