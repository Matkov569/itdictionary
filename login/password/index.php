<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/header.php');
?>
	<nav class="menu_top">
		<div class="search_form">
			<form action="login.php" method="POST">
				<input type="text" name="keyWord" placeholder="Search" class="search_input">
				<div class="search_join"></div>
				<button class="search_button">
					<i class="material-icons" style="font-size:30px">search</i>
				</button>
			</form>
		</div>
	</nav>
	<article class="pageCenter">
		<h1 class="h1Big"></h1>
		<p class="pBig">Enter your SUT email address</p>
		<div>
			<form action="remind.php" method="POST" class="loginForm" id="logForm">
				<div class="loginInputHolder">
					<input type="email" name="email" id="mail" placeholder="login@student.polsl.pl" required>
				</div>
				<button class="btnMagicBtn">
					<div class="magicBtnHolder">
						<div class="magicBtnBorder"></div>
						<div class="magicBtnBorder2"></div>
						<span class="magicBtn">Reset password</span>
					</div>	
				</button>
			</form>
		</div>
		<?php
			if(isset($_SESSION['error'])){
				echo '<p class="loginFail">'.$_SESSION['error'].'</p>';
				$_SESSION['error']="";
			}
		?>
	</article>		
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>