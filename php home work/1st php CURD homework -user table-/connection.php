<?php
$host="localhost";
$user="root";
$pass="";
$db="bijaydatabase";
$conn=mysqli_connect($host, $user, $pass, $db);
if(!$conn){echo "Unable to connect to database";}
?>