<?php
session_start();
//require_once('db_connection.php');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connectionif($_SESSION['utype']!='admin')


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM book where id=". $_REQUEST['book_id'];
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

} else {
    echo "0 results";
}






?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>buy book</title>

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

<div class="bookform">


    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="frmPayment" id="frmPayment">
        <fieldset class="field">
            <ul>
             <br><br><br><br><br>
                <label style="color: dimgray" for="price"><b>Price</b></label><br>
                <input type="text" name="amount" value="<?php echo $row['price'] ?>" id="price" required autofocus placeholder="Price">
                <br><br><br><br>
                <label style="color: dimgray" for="no_books"><b>No. Of Books</b></label><br><input type="no_books" name="quantity" id="no_books" autofocus placeholder="No. Of Books">
                <br><br><br>




                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="tahsin_1274242778_biz@gmail.com">
                <input type="hidden" name="item_name" value="Memorex 256MB Memory Stick">
                <input type="hidden" name="item_number" value="MEM32507725">
<!--                <input type="hidden" name="amount" value="3">-->
                <input type="hidden" name="tax" value="1">
<!--                <input type="hidden" name="quantity" value="1">-->
                <input type="hidden" name="no_note" value="1">
                <input type="hidden" name="currency_code" value="USD">
                <input type="hidden" name="cancel_return" value="http://localhost/library/cancel.php">
                <input type="hidden" name="return" value="http://localhost/library/success.php">

                <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">


                <!--                <input type="submit" name="submit" value="Buy">-->
            </ul>
        </fieldset>
    </form>
</div>
<div>
    <br>
    <li><a href="client.php">Home</a></li>

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