<?php
session_start();
require_once('db_connection.php');
if($_SESSION['utype']!='Librarian')
{
    header('location: index.php');
    return;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Librarian</title>

    <link href="css/user_style.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="gridContainer clearfix"></div>
<div class="header">
    <div class="logo">
        <img src="images/library_logo1.png" heigth="300px" width="350px">
    </div>
    <div class="login">
        <form action="form.php" method="post">
            Search here: <input type="text" name="term" /><br />

        </form>
    </div>

    <div class="welcome_admin">
        <h1>Welcome Librarian</h1>
    </div>
</div>
<hr>


<div class="listitem">
    <fieldset>
        <ul>
            <div class="list">Books</div>
            <br>
            <div class="list_item_text_style">
                <li><a href="list_book_librarian.php">List of Book</a></li>
                
            </div>
        </ul><hr>
        <ul></ul><hr>

        <ul>
                <div class="list">Clients</div>
                <br>
                <div class="list_item_text_style">
                    <li><a href="list_client.php">List of Clients</a></li>

                </div>
        </ul><hr>
        <ul></ul><hr>
        <ul>
            <div class="logout">Logout</div>
            <br>

            <li><a href="logout.php">Log out</a></li>
            </br>


        </ul><hr>

    </fieldset>
</div>
<div class="footer">
    <hr>
    <h3><a href="contact_us.php"><b>Contact Us</b></a></h3>
    <p>Rajuk Trade Centre (3rd Floor ), Nikunja-2, Dhaka-1229</p>
    <p style="font-size:14px">Copyright ©2016 Niloy, Inc. All Rights Reserved.</p>
</div>






</body>
</html>
