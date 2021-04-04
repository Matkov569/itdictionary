<?php
	session_start();

	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/insert.php');

	$POST=array_values($_POST); //przeniesienie z post do zmiennej żeby można było na indexach numerycznych działać

	$cnt = count($POST); //długość post

	$passes=array();//tablica z hasłami tylko dla wersji lokalnej
	$success=array();//tablica z hasłami
	$fails=array();//tablica z hasłami

	for ($i=0; $i < $cnt; $i+=2) { 
		$randomPassword = bin2hex(random_bytes(5));

		$email = mysqli_real_escape_string($conn,$POST[$i]);
		$type = mysqli_real_escape_string($conn,$POST[$i+1]);

		$query = "INSERT INTO `users` (`Login`, `Password`, `Type`) VALUES ('".$email."', '".password_hash($randomPassword,PASSWORD_DEFAULT)."', '".$type."')";
		$result = mysqli_query($conn,$query);
		if($result){
			array_push($passes,$randomPassword); //tylko dla wersji lokalnej potem usunąć
			array_push($success,$email);
			//$msg = "Hello! \n Someone created an account as ".$type." for you on \n <a href='itdictionary.blueserwer.pl' target='_blank'>itdictionary.blueserwer.pl</a> \n a project of Silesian University of Tehcnology's students. \n Your login data:\n email: ".$email."\n password: ".$randomPassword."\n Remember to change your password.\n Message was generated by script. Please don't respond to it.";
			//mail($email,'IT Dictionary user creation',$msg);
		}
		else{
			array_push($fails,$email);			
		}
	}
	
	mysqli_close($conn);

	$_SESSION['passes']=$passes;
	$_SESSION['success']=$success;
	$_SESSION['fails']=$fails;

	header('location:./results/');
	
?>