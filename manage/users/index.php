<?php
	session_start();
	if(!isset($_SESSION['Logged']) || empty($_SESSION['Logged']) || $_SESSION['Logged']!=1 || $_SESSION['Type']!="Admin"){
		header('location:../../login');
		exit();
	}
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/header.php');
?>
	<article class="pageCenter">
		<h1 class="h1Big">List of users</h1>
		<table class="resultTable">
			<tr class="resultHead">
				<th>Email address</th>
				<th colspan="2">Type</th>
				<th><a href="../adduser/">Add user(s)</a></th>
			</tr>
			<?php
				include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/select.php');
				$query = "SELECT ID_u, Login, Type from users";
				$result = mysqli_query($conn, $query);

				while($tab = mysqli_fetch_array($result)){
					echo '<tr class="result"><td>'.$tab['Login'].'</td><td>'.$tab['Type'].'</td><td><a href="./chnguser.php?id='.$tab['ID_u'].'">Change type</a></td><td><a href="./deluser.php?id='.$tab['ID_u'].'">Delete</a></td></tr>';
				}

				mysqli_close($conn);
			?>
		</table>
		
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>