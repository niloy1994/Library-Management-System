<?php
$con = mysql_connect('localhost','root','');
if(!$con)
    die('Error connecting to database');
mysql_select_db('library',$con);
?>