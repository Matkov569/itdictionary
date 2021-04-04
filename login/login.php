<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/select.php');
	$login = mysqli_real_escape_string($conn,$_POST['email']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);

	$query = "Select Password, Type from users where login = '".$login."'";
	$result = mysqli_query($conn,$query);
	mysqli_close($conn);
	$rows = mysqli_num_rows($result);
	if($rows==1){
		$tab = mysqli_fetch_array($result);
		if(password_verify($pass, $tab['Password'])){
			$_SESSION['User']=$login;
			$_SESSION['Type']=$tab['Type'];
			$_SESSION['Logged']=true;	
			$path = 'location:../manage';	
		}
		else{
			$_SESSION['error']="Incorrect password. Try again.";
			$path = 'location:./';	
		}
	}
	else if($rows==0){
		$_SESSION['error']="Account wasn't found. Check your login data.";
		$path = 'location:./';	
	}
	else{
		$_SESSION['error']="Error occured. It seem's like there are multiple accounts made on the same email address. This is technicly not possible by way of database is created, so this message shouldn't be able to occure. If it did, please contact one of website admins.";
			$path = 'location:./';	
	}
	header($path);	
?>