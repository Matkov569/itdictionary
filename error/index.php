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
		<h1 class="h1Big">Error :(</h1>
		<p class="pBig">We are sorry, but some problem occured and your request couldn't be executed.</p>
		<p class="pBig">If you were trying to add entry that already exist, we inform that it's not possible. </p>
		<p class="pBig">Option to edit entries has only users with accounts. Account is given by teacher, so "funny persons", also known as trolls, won't make mess of our project.</p>
		<div class="divCenter" onclick="location.href='../'">
			<div class="magicBtnHolder">
				<div class="magicBtnBorder"></div>
				<div class="magicBtnBorder2"></div>
				<a class="magicBtn">Go back</a>
			</div>	
		</div>
		
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>