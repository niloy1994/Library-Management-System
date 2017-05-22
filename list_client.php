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

$sql = "SELECT * FROM user Where user_type='Client'";
$result = mysqli_query($conn, $sql);



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>List of book</title>

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
    <style>
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
    </head>
    <body>

    <table style="width:100%">
        <tr>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>User Type</th>
            <th>Profession</th>
            <th>Gender</th>
            <th>Contact</th>
            <th>Action</th>

        </tr>
        <?php

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['user_type'] . "</td>";
            echo "<td>" . $row['profession'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['contact'] . "</td>";
            echo "<td><a href=\"edit_user.php?user_id=" . $row["id"] . "\">Edit</a> | <a href=\"delete_user.php?user_id=" . $row["id"] . "\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }






        ?>


    </table>


</div>
<div>
    <br>
    <li><a href="librarian.php">Home</a></li>

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