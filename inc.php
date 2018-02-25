<?php  

$link = mysqli_connect("localhost", "root", "", "WebChat");

if(mysqli_connect_error($link)){
	echo "error";
}

session_start();


?>