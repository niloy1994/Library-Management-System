<?php
session_start();
require_once('db_connection.php');
if($_SESSION['utype']!='admin')
{
    header('location: index.php');
    return;
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Add book</title>

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-2.1.3.min.js"></script>


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
    <form action="book_save.php"  method="post">
        <fieldset class="field">
            <ul>
                <label style="color: dimgray" for="bookname"><b>Book Name</label><br><input type="text" name="bookname" id="bookname" required autofocus placeholder="Book Name"><br><br>
                <!--<script>
                    function validateForm() {
                        var x = document.forms["myForm"]["bookname"].value;
                        if (x == null || x == "") {
                            alert("bookname must be filled out");
                            return false;
                        }
                    }
                </script>-->



                <label style="color: dimgray" for="author"><b>Author</b></label><br><input type="text" name="author" id="author"  required autofocus placeholder="Author"><br/><br/>

                <!--<script>
                    function validateForm() {
                        var x = document.forms["myForm"]["author"].value;
                        if (x == null || x == "") {
                            alert("author must be filled out");
                            return false;
                        }
                    }
                </script>-->



                <label style="color: dimgray" for="book_type"><b>Book Type: </b></label>
                <select name="book_type">
                    <option value="science fiction">Science fiction</option>
                    <option value="drama">Drama</option>
                    <option value="horror">Horror</option>
                    <option value="adventure">Adventure</option>
                    <option value="comics">Comics</option>
                    <option value="encyclopedias">Encyclopedias</option>
                </select>


                <br><br>

                <label style="color: dimgray" for="publish_year"><b>Publish Year</b></label><br>
                <input type="text" name="publish_year"  id="publish_year"  required autofocus placeholder="Publish Year">
                <!--<script>
                    function validateForm() {
                        var x = document.forms["myForm"]["publish_year"].value;
                        if (x == null || x == "") {
                            alert("publish_year must be filled out");
                            return false;
                        }
                    }
                </script>-->
                <br><br>
                <label style="color: dimgray" for="price"><b>Price</b></label><br>
                <input type="text" name="price"  id="price"  required autofocus placeholder="Price">
                <!--<script>
                    function validateForm() {
                        var x = document.forms["myForm"]["price"].value;
                        if (x == null || x == "") {
                            alert("price must be filled out");
                            return false;
                        }
                    }
                </script>-->
                <br><br>

                <label style="color: dimgray" for="amount"><b>Amount</b></label><br>
                <input type="text" name="amount"  id="edition"  required autofocus placeholder="Amount">
                <!--<script>
                    function validateForm() {
                        var x = document.forms["myForm"]["amount"].value;
                        if (x == null || x == "") {
                            alert("amount must be filled out");
                            return false;
                        }
                    }
                </script>-->
                <br><br>


                <input type="submit" name="submit" value="Add">
            </ul>
        </fieldset>
    </form>
</div>
<div>
<br>
    <li><a href="admin.php"><b>Home</a></li>

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