<?php

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

$sql = "DELETE FROM user WHERE id=".$_REQUEST['user_id'];
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>

<?php
session_start();
require_once('db_connection.php');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Successfully Deleted</title>

    <link href="css/style.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="gridContainer clearfix"></div>
<div class="header">
    <div class="logo">
        <img src="images/library_logo1.png" heigth="300px" width="350px">
    </div>


</div>
<div>

</div>


<div class="regsuccess">
    <br>
    <a href="delete_user.php"><img src="images/confirm.png" heigth="150px" width="150px"></a><br>


    <span><a href="list_user.php">Back To Previous</a> </span>


</div>
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