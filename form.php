<?php
session_start();
require_once ('db_connection.php');
$term = mysql_real_escape_string($_REQUEST['term']);

$sql = "SELECT * FROM book WHERE book_type LIKE '%".$term."%'";
$r_query = mysql_query($sql);
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
            <th>Book Name</th>
            <th>Author</th>
            <th>Book Type</th>
            <th>Publish Year</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Action</th>

        </tr>
        <?php

        while ($row = mysql_fetch_array($r_query)) {
                echo "<tr>";
                echo "<td>" . $row['bookname'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['book_type'] . "</td>";
                echo "<td>" . $row['publish_year'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td><a href=\"edit_book.php?book_id=" . $row["id"] . "\">Edit</a> | <a href=\"delete_book.php?book_id=" . $row["id"] . "\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";


        }

        ?>


    </table>


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



