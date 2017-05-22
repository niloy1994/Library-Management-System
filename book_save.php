<?php
session_start();
require_once('db_connection.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Book Save</title>

    <link href="css/style.css" rel="stylesheet" type="text/css">


</head>
<body>
<div class="gridContainer clearfix"></div>
<div class="header">
    <div class="logo">
        <img src="images/library_logo1.png" heigth="300px" width="350px">
    </div>


<div class="regsuccess">
    <br>
    <img src="images/confirm.png" heigth="150px" width="150px"><br>
    <span class="success">Book added successfully</span>
    <span><a href="list_book.php">Back To Booklist</a> </span>
</div>
<?php
if(isset($_POST['edit_submit']))
{

    require_once('db_connection.php');
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $btype = $_POST['book_type'];
    $pyear = $_POST['publish_year'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];

    if($bookname !='' && $author!='' && $btype!='' && $pyear!='' && $price!='' && $amount!=''  )
    {

        if(isset($_REQUEST['book_id'])){
            //$sql = "INSERT INTO book (bookname,author,book_type,publish_year,price,amount) VALUES ('$bookname','$author','$btype','$pyear','$price','$amount')";
            $sql = "UPDATE book SET bookname='$bookname',author='$author',book_type='$btype',publish_year='$pyear',price='$price',amount='$amount' WHERE id=".$_REQUEST['book_id'];

            mysql_query($sql);
            //header('location: index.html');
        }

    }

}else{

    require_once('db_connection.php');
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    $btype = $_POST['book_type'];
    $pyear = $_POST['publish_year'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];

    if($bookname !='' && $author!='' && $btype!='' && $pyear!='' && $price!='' && $amount!=''  )
    {
        $sql = "INSERT INTO book (bookname,author,book_type,publish_year,price,amount) VALUES ('$bookname','$author','$btype','$pyear','$price','$amount')";
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