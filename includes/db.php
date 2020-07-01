<?php
	session_start();
	$conn = mysqli_connect('localhost','root','','ecom');
	global $conn;
	echo "connection....";
?>