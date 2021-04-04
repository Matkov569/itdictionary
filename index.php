<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/header.php');
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/select.php');
	$query = "SELECT count(ID_wB) as cnt FROM wordbase";
	$result = mysqli_query($conn, $query);
	$tab = mysqli_fetch_array($result);
	mysqli_close($conn);
?>
	<article class="pageCenter">
		<h1 class="h1Big">IT Dictionary</h1>
		<p class="pBig">A dictionary about IT, ICT, Computer Science and other related things</p>
		<p class="pBig">Curently there are <?php echo $tab['cnt']; ?> entries in our dicktionary</p>
		<p class="pBig">Help us make our dictionary by adding new entries to it!</p>
		<p class="pBig">kurwa już nie wiem co napisać xd</p>
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>