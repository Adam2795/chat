<?php  
include_once "inc.php";

$uname = $_POST['uname'];
$password = $_POST['password'];
$email = $_POST['email'];

$q = mysqli_query($link, "INSERT INTO user (username, password, email) VALUES ('$uname', '$password', '$email')");


header("Location:index.php");

?>