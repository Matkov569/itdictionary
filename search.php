<?php
	if(!empty($_POST['search'])){
		$path='location:./result/'.$link = $_POST['search'];
	}
	else{
		$path = 'location:./';
	}
	header($path);
?>