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
		<h1 class="h1Big">Sign in</h1>
		<div>
			<form action="login.php" method="POST" class="loginForm" id="logForm">
				<div class="loginInputHolder">
					<input type="email" name="email" id="mail" placeholder="login@student.polsl.pl" required>
					<input type="password" name="pass" placeholder="Password" required>
				</div>
				<button class="btnMagicBtn">
					<div class="magicBtnHolder">
						<div class="magicBtnBorder"></div>
						<div class="magicBtnBorder2"></div>
						<span class="magicBtn">Log in</span>
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
		<p class="pBig"><a href="./password/">Forgot your password?</a></p>
		<p class="pBig">Info: Only users with created account can log in.</p>
		<p class="pBig">Accounts are created only by SUT's teachers.</p>
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>