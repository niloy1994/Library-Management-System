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
    <title>Registration</title>

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
    <form action="registration_success.php" method="post">
        <fieldset class="field">
            <ul>
                <label style="color: dimgray" for="username"><b>User Name</label><br><input type="text" name="username" id="username" required autofocus placeholder="User Name"><br><br>
               <!-- <script>
                    function validateForm() {
                        var x = document.forms["myForm"]["username"].value;
                        if (x == null || x == "") {
                            alert("username must be filled out");
                            return false;
                        }
                    }
                </script>-->




                <label style="color: dimgray" for="email"><b>Email</b></label><br><input type="email" name="email" id="email"  required autofocus placeholder="Email"><br/><br/>

                <!--<script>
                    function validateForm() {
                        var x = document.forms["myForm"]["email"].value;
                        if (x == null || x == "") {
                            alert("email must be filled out");
                            return false;
                        }
                    }
                </script>-->


                <label style="color: dimgray" for="password"><b>Password</b></label><br><input type="password" name="password" id="password"  required autofocus placeholder="Password">


                </br></br>



                <label style="color: dimgray" for="user_type"><b>User Type: </b></label>
                <select name="user_type">
                    <option value="Librarian">Librarian</option>
                    <option value="Client">Client</option>

                </select>
                </br></br>


                <label style="color: dimgray" for="profession"><b>Profession: </b></label>
                <select name="profession">
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Businessman">Business Man</option>
                </select>
                <br><br>
                <label style="color: dimgray" ><b>Gender: </b><input type="radio" name="gender" value="Female"><label for="gender">Female</label>
                    <input type="radio" name="gender" value="Male"><label for="gender">Male</label>
                </label>


                <br><br>
                <label style="color: dimgray" for="contact_no"><b>Contact No</b></label><br>
                <input type="text" name="contact_no"  id="contact_no"  required autofocus placeholder="Contact No">


                <br><br>


                <input type="submit" name="submit" value="Register">
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