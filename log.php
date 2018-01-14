<?php
session_start();
//$mysqli = new mysqli('localhost',)
// Grab User submitted information
$uname = $_POST["username"];
$pass = $_POST["password"];

$con='petstore';
// Connect to the database
$con = mysqli_connect("localhost","root","",$con);
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}

$id=1;
$query="SELECT username, password FROM reg WHERE password='$pass'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_row($result);

if($row["username"]==$uname && $row["password"]==$pass)
{session_start();
header("location: store.html");
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>