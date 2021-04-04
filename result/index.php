<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/header.php');
?>
	<article class="pageCenter">
		<h1 class="h1Big">Results for: <?php echo $_GET['search']; ?></h1>
		<?php
			include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/select.php');
			$query = "SELECT Word, Type, Polish FROM wordbase WHERE MATCH(Word, Description, Polish, Synonyms) AGAINST ('%".$_GET['search']."%' IN NATURAL LANGUAGE MODE)";
			$result = mysqli_query($conn, $query);
			$rows = mysqli_num_rows($result);
			if($rows==0)
				echo '<p class="pBig">We are sorry, but no matches were found :(</p>';
			else{
				while($tab = mysqli_fetch_array($result)){
					echo '<a href="../entry/'.$tab['Word'].'" class="categoryCloud"><p>'.$tab['Word'].'</p><p>'.$tab['Type'].'</p><p>pl. '.$tab['Polish'].'</p></a>';
				}
			}
			mysqli_close($conn);
		?>
		
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>