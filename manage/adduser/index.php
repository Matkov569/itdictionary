<?php
	session_start();
	if(!isset($_SESSION['Logged']) || empty($_SESSION['Logged']) || $_SESSION['Logged']!=1 || $_SESSION['Type']=="Student"){
		header('location:../login');
		exit();
	}
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/header.php");
?>
	<nav class="menu_top">
		<div class="search_form">
			<form action="search.html" method="GET">
				<input type="text" name="keyWord" placeholder="Search" class="search_input">
				<div class="search_join"></div>
				<button class="search_button">
					<i class="material-icons" style="font-size:30px">search</i>
				</button>
			</form>
		</div>
	</nav>
	<article class="page">
		<form name="user_add" action="adduser.php" method="POST">
			<span class="infoForm">	
				<h1>Add user(s)</h1>	
			</span>
			<table class="userTableForm">
				<tr>
					<th>SUT email:</th>
					<td>User type:</td>
					<td><button onclick="more()">Add more</button></td>
				</tr>
				<tr id="u1">
					<td>
						<input type="email" name="mail1" placeholder="User SUT's email address" required>
					</td>
					<td>
						<select name="type1">
							<option value="Student">Student</option>
							<option value="Teacher">Teacher</option>
							<?php
								if($_SESSION['Type']=="Admin")
									echo '<option value="Admin">Admin</option>';
							?>
						</select>
					</td>
					<td>
						<button onclick="less(1)">Remove</button>
					</td>
				</tr>
				
			</table>
			<nav class="navForm">
				<input type="submit" value="Submit">
			</nav>
		</form>	
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>