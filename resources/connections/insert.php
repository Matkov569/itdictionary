<?php
	
	$conn = mysqli_connect('localhost','insert','qwerty','dictionary');
	if ($conn -> connect_errno) {
  		echo "Failed to connect to MySQL: " . $conn -> connect_error;
  		exit();
	}
?>