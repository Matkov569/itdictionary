<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/header.php');
?>
	<article class="pageCenter">
		<h1 class="h1Big">List of entries of category <?php print($_GET['cat']); ?></h1>
		<table class="resultTable">
			<tr class="resultHead">
				<th>Entry</th>
				<th>Polish</th>
				<th>Synonyms</th>
				<th>Type</th>
			</tr>
			<?php
				include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/select.php');
				$query = "SELECT w.Word, w.Polish, w.Type, w.Synonyms FROM wordbase w JOIN wordcats wc ON wc.ID_wB=w.ID_wB JOIN categories c ON c.ID_cat=wc.ID_cat WHERE c.Name = '".$_GET['cat']."' GROUP BY w.ID_wB";
				$result = mysqli_query($conn, $query);

				while($tab = mysqli_fetch_array($result)){
					echo '<tr class="result"><td><a href="../../entry/'.$tab['Word'].'">'.$tab['Word'].'</a></td><td>'.$tab['Polish'].'</td><td>'.$tab['Synonyms'].'</td><td>'.$tab['Type'].'</td></tr>';
				}

				mysqli_close($conn);
			?>
		</table>
		
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>