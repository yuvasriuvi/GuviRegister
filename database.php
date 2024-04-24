<?php
$connection = mysqli_connect('localhost', 'root', '', 'com_signup');
	// $connection = mysqli_connect('192.168.1.2', 'root', '', 'com_signup');

	if(!$connection){
		echo "Connection to Database Failed";
	}
  // else{
  //   echo "<h1 style='color:green'>connected to database<h1>";
  // }

?>

