<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/update.php');

	$old = mysqli_real_escape_string($conn,$_POST['old']);
	$new = mysqli_real_escape_string($conn,$_POST['pass']);

	$query = "Select Password from users where Login = '".$_SESSION['User']."'";
	$result = mysqli_query($conn,$query);
	$tab = mysqli_fetch_array($result);
	if(password_verify($pass, $tab['Password'])){
		$query = "UPDATE users u SET u.Password = '".password_hash($new,PASSWORD_DEFAULT)."' WHERE u.Login = '".$_SESSION['User']."'";
		$result = mysqli_query($conn,$query);
		$path="location:../";
	}
	else{
		$path="location:./";
		$_SESSION['error']="Wrong password. Try again.";
	}
	mysqli_close($conn);

	header($path);	
?>