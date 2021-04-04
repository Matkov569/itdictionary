<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/header.php');
?>
	<article class="pageCenter">
		<h1 class="h1Big">List of categories</h1>
		<?php
			include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/select.php');
			$query = 'SELECT c.Name, count(w.ID_wb) as cnt FROM categories c left join wordcats w on c.ID_cat = w.ID_cat Group BY c.ID_cat';
			$result = mysqli_query($conn, $query);
			while($tab = mysqli_fetch_array($result)){
				echo '<a href="search/'.$tab['Name'].'" class="categoryCloud"><p>'.$tab['Name'].'</p><p>'.$tab['cnt'].' entries</p></a>';
			}
			mysqli_close($conn);
		?>
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>