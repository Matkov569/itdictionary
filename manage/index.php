<?php
	session_start();
	if(!isset($_SESSION['Logged']) || empty($_SESSION['Logged']) || $_SESSION['Logged']!=1){
		header('location:../login');
		exit();
	}
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/header.php');

?>
	<article class="pageCenter">
		<h1 class="h1Big">Managment menu</h1>
		<a href="./entries/" class="categoryCloud">
			<p>Manage entries</p>
		</a>
		<a href="./categories/" class="categoryCloud">
			<p>Manage categories</p>
		</a>
		<a href="./password/" class="categoryCloud">
			<p>Change password</p>
		</a>
		<?php
			if($_SESSION['Type']=="Admin")
				echo '<a href="./users/" class="categoryCloud"><p>Manage users</p></a>';
			if($_SESSION['Type']=="Teacher")
				echo '<a href="./adduser/" class="categoryCloud"><p>Add user(s)</p></a>';
		?>
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>