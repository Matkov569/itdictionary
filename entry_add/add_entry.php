<?php
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/insert.php');

	if(!empty($_POST)){
		$entry = mysqli_real_escape_string($conn,$_POST['word']);
		$desc = mysqli_real_escape_string($conn,$_POST['desc']);
		$type = mysqli_real_escape_string($conn,$_POST['type']);
		
		$query = "INSERT INTO wordbase (Word, Description, Type, Polish, Synonyms) VALUES ('".$entry."','".$desc."','".$type."','";
		
		if(!empty($_POST['poli'])){
			$poli = mysqli_real_escape_string($conn,$POST['poli']);
		}
		else
			$poli = "---";

		if(!empty($_POST['syns'])){
			$syns = mysqli_real_escape_string($conn,$POST['syns']);
		}
		else
			$syns = "---";

		$query = $query.$poli."','".$syns."')";
		$result = mysqli_query($conn, $query);

		if($result){
			$cats = $_POST['cat'];

			$id = mysqli_insert_id($conn);
			$query = "INSERT INTO wordcats (ID_wB, ID_cat) VALUES ('".$id."', '".$cats[0]."')";

			for ($i=1; $i <count($cats); $i++) { 
				$query = $query.", ('".$id."', '".$cats[$i]."')";
			}

			$result = mysqli_query($conn, $query);
			$path = 'location:../entry/'.$id;
		}
	
		else{
			$path = 'location:../error';
		}

	}
	else{
		$path = 'location:../error';
	}

	mysqli_close($conn);
	header($path);

	
?>