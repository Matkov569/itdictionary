<?php
	session_start();
	if(empty($_GET)){ 
		header('location:../no_result');
		exit();
	}
	else {
		$id = $_GET['id'];
	}
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/select.php');

	$query = "SELECT * from wordbase WHERE Word = '".$id."'";
	$result = mysqli_query($conn, $query);
	if($result){
		$tab = mysqli_fetch_array($result);
		$query = "SELECT c.Name from categories c join wordcats w on w.ID_cat = c.ID_cat WHERE w.ID_wB = ".$tab['ID_wB'];
		$result = mysqli_query($conn, $query);
		$string = "";
		while($arr = mysqli_fetch_array($result)){
			$string = $string.$arr['Name'].",";
		}
		$cats = substr($string, 0, -1);
		mysqli_close($conn);
	}
	else{
		mysqli_close($conn);
		header('location:../no_result');
		exit();
	}

	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/header.php');
?>
	<article class="page">
		<div class="word_holder">
			<span class="word_word">
				<h1><?php echo $tab['Word']; ?></h1>
			</span>
			<span class="word_basics">
				<h2>pl. <?php echo $tab['Polish']; ?></h2>
				<h3>Synonyms: <?php echo $tab['Synonyms']; ?> </h3>		
			</span>
			</span>

			<span class="word_category">
				<h2><?php echo $tab['Type']; ?></h2>
				<p>Categories:</p>
				<h3> <?php echo $cats; ?> </h3>
			</span>
		</div>
		
		
		<div class="word_definition">
			<p><?php echo $tab['Description']; ?></p>
		</div>
		<div class="word_footer">
			<p><a href="../entry_add">Haven't found what you were looking for? -> Help us grow, by adding new entries</a></p>
			<!--<p>See also: <a href="">GG</a>, <a href="">EZ</a></p>-->
		</div>

	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>