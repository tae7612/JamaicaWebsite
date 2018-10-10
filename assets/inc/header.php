<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8 />
	<title><?php echo $page;?></title>
	<link rel ="stylesheet" type ="text/css" href ="assets/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src = "<?php echo $path; ?>assets/javascript/final.js"> </script>
</head> 
<body>
		<label for="show-menu" class="show-menu">Menu</label>
		<input type="checkbox" id="show-menu" role="button">
	<nav>
		<ul>
			<li> <a href = "index.php"> Home </a> </li>
			<li class = "dropbox"> 
				<button class = "dropbtn"> About JA </button>
				<div class = "dropbox-content">
					<a href ="National_H.php"> History</a>
					<a href ="geography.php"> Geography</a>
				</div>
			</li>
			<li> <a href = "WhyJA.php">Why JA? </a> </li>
			<li class = "dropbox"> 
				<button class = "dropbtn"> Culture</button>
				<div class = "dropbox-content">
					<a href ="food.php"> Food</a>
					<a href ="music.php"> Music</a>
					<a href ="sport.php"> Sports</a>
					<a href ="language.php"> Language</a>
				</div>
			</li>
			<li> <a href = "hidden.php">Hidden Gems </a> </li>
			<li> <a href = " event.php">Events </a> </li>
			<li class = "dropbox"> 
				<button class = "dropbtn"> Project</button>
				<div class = "dropbox-content">
					<a href = "comment.php"> Comments </a>
					<a href ="references.php"> References</a>
					<a href ="grading.php"> Grading</a>
					
				</div>
			</li>
		</ul>
		
	</nav>