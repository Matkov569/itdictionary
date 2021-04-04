<?php
	
	$conn = mysqli_connect('localhost','select','qwerty','dictionary');
	if ($conn -> connect_errno) {
  		echo "Failed to connect to MySQL: " . $conn -> connect_error;
  		exit();
	}
?>