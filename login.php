<?php
session_start();

require_once('db_connection.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from user where username='$username' and password='$password'";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);



{

    if ($username == '' || $password == '') {
        header('Location: login.php?err=1');
        return;
    }

    if ($row["username"] == $username && $row["password"] == $password)
    {
        $_SESSION["utype"] = $row["user_type"];
        if ($row['user_type'] == 'admin') {
            //$_SESSION["username"] = $row["username"];
            header('Location:admin.php');
        }
        else if ($row['user_type'] == 'Librarian') {
            header('Location:librarian.php');
        }
        else if ($row['user_type'] == 'Client') {
            header('Location:client.php');
        }

    }
    else  {
        header('Location:index.php?err=2');
        //echo 'username or password is wrong!!';
        //echo 'incorrect username/ password please try again.' ;


    }
}

?>