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

<div class="bookform">
    <form action="book_save.php" method="POST">
        <fieldset class="field">
            <ul>
                <label style="color: dimgray" for="bookname"><b>Book Name</label><br><input type="text" value="<?php echo $row['bookname'] ?>" name="bookname" id="bookname"
                                                                                            required autofocus placeholder="Book Name"><br><br>


                <label style="color: dimgray" for="author"><b>Author</b></label><br><input type="author" value="<?php echo $row['author'] ?>" name="author" id="author" required autofocus placeholder="Author"><br/><br/>


                <label style="color: dimgray" for="book_type"><b>Book Type: </b></label>
                <select name="book_type">
                    <option <?php if($row['book_type']=="science fiction"){  ?> selected="selected" <?php };?> value="science fiction">Science fiction</option>
                    <option <?php if( $row['book_type']=="drama"){ ?> selected="selected" <?php }?> value="drama">Drama</option>
                    <option <?php if( $row['book_type']=="horror"){ ?> selected="selected" <?php }?> value="horror">Horror</option>
                    <option <?php if($row['book_type']=="adventure"){  ?> selected="selected" <?php }?> value="adventure">Adventure</option>
                    <option <?php if($row['book_type']=="comics"){  ?> selected="selected" <?php }?> value="comics">Comics</option>
                    <option <?php if($row['book_type']=="encyclopedias"){  ?> selected="selected" <?php }?>  value="encyclopedias">Encyclopedias</option>
                </select>
                <br><br>

                <label style="color: dimgray" for="publish_year"><b>Publish Year</b></label><br>
                <input type="text" name="publish_year" value="<?php echo $row['publish_year'] ?>"  id="publish_year" required autofocus placeholder="Publish Year">
                <br><br>
                <label style="color: dimgray" for="price"><b>Price</b></label><br>
                <input type="text" name="price" value="<?php echo $row['price'] ?>" id="price" required autofocus placeholder="Price">
                <br><br>

                <label style="color: dimgray" for="amount"><b>Amount</b></label><br>
                <input type="text" name="amount" value="<?php echo $row['amount'] ?>"  id="edition" required autofocus placeholder="Amount">
                <br><br>

                <input type="hidden" value="<?php echo $row['id'];?>" name="book_id">
                <input type="submit" name="edit_submit" value="Edit">
            </ul>
        </fieldset>
    </form>
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