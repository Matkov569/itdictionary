<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/header.php');
?>
	<nav class="menu_top">
		<div class="search_form">
			<form action="" method="">
				<input type="text" name="keyWord" placeholder="Search" class="search_input">
				<div class="search_join"></div>
				<button class="search_button">
					<i class="material-icons" style="font-size:30px">search</i>
				</button>
			</form>
		</div>
	</nav>
	<article class="pageCenter">
		<h1 class="h1Big">IT Dictionary</h1>
		<p class="pBig">IT Dictionary is a project carried out by Paweł Habrzyk, Łukasz Kopka and Mateusz Kowalski as part of English classes in the fourth semester of studies in the field of Informatics (practical profile) at the Faculty of Applied Mathematics at the Silesian University of Technology in Gliwice.</p>
		<p class="pBig">Creators:</p>
		<p class="pBig">Paweł Habrzyk, Łukasz Kopka - dictionary entries</p>
		<p class="pBig">Mateusz Kowalski - web development</p>
		<p class="pBig">logo RMS logo PolSl ewentualnie wydziału języków</p>
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>