<?php
	
	$conn = mysqli_connect('localhost','update','qwerty','dictionary');
	if ($conn -> connect_errno) {
  		echo "Failed to connect to MySQL: " . $conn -> connect_error;
  		exit();
	}
?>