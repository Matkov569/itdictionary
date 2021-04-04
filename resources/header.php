<!DOCTYPE html>
<html>
<head>
	<title>IT dictionary</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/dictionary/resources/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="">
<nav class="menu">
	<h1 class="giant"><a href="/dictionary">@</a></h1>
	<h1>IT dictionary</h1>
	<span class="menu_button_holder">
		<a href="/dictionary/entry_add"><button>Add new entry</button></a>
		<?php
			if(isset($_SESSION['Logged']) && !empty($_SESSION['Logged']) && $_SESSION['Logged']==1){
				echo '<a href="/dictionary/manage"><button>Manage</button></a>';
				echo '<a href="/dictionary/logout"><button>Log out</button></a>';
			}
			else{
				echo '<a href="/dictionary/login"><button>Log in</button></a>';
			}
		?>
		<a href="/dictionary/categories"><button>Categories</button></a>
		<a href="/dictionary"><button>Quiz - not yet</button></a>
		<a href="/dictionary/about"><button>About project</button></a>
	</span>
</nav>
<main>
	<nav class="menu_top">
		<div class="search_form">
			<form action="/dictionary/search.php" method="POST">
				<input type="text" name="search" placeholder="Search" class="search_input" required>
				<div class="search_join"></div>
				<button class="search_button">
					<i class="material-icons" style="font-size:30px">search</i>
				</button>
			</form>
		</div>
	</nav>