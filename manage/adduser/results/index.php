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
		<h1 class="h1Big">Adding user(s) results</h1>
		<?php
		if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
			for($i=0;$i<count($_SESSION['success']);$i++)
				echo '<p class="pBig">User '.$_SESSION['success'][$i].' was added successfully to database.'.$_SESSION['passes'][$i].'</p>';
			$_SESSION['success']="";
		}
		if(isset($_SESSION['fails']) && !empty($_SESSION['fails'])){
			for($i=0;$i<count($_SESSION['fails']);$i++)
				echo '<p class="pBigRed">User '.$_SESSION['fails'][$i]." wasn't added to database. Make sure the user with this email doesn't exist and if not so, check for misspells and try again.</p>";
			$_SESSION['fails']="";
		}

		?>
		
		<div class="divCenter" onclick="location.href='../../'">
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