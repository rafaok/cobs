<?php
  $hostname   = "localhost";
  $username   = "root";
  $password   = "";
  $database   = "jasaguna";
  
  $link = new mysqli ($hostname,$username,$password,$database);
  if(!$link) {
	die("Connection failed" . mysqli_connect_error());
	}
?>
