<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8 />
	<title><?php echo $page;?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src = "<?php echo $path; ?>assets/javascript/final.js"> </script>
    <link rel ="stylesheet" type ="text/css" href ="assets/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head> 
<body>



    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href = "index.php"> Home </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAboutJA" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About JA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownAboutJA">
                        <a class="dropdown-item" href ="National_H.php"> History</a>
                        <a class="dropdown-item" href ="geography.php"> Geography</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a href = "WhyJA.php">Why JA? </a>
                </li>
                <li class="nav-item">
                    <a href ="food.php"> Food</a>
                </li>
                <li class="nav-item">
                    <a href ="music.php"> Music</a>
                </li>

                <li class="nav-item">
                    <a href ="language.php"> Language</a>
                </li>

                <li class="nav-item">
                    <a href = "hidden.php">Hidden Gems </a>
                </li>

                <li class="nav-item">
                    <a href = " event.php">Events </a>
                </li>

            </ul>
        </div>

    </nav>
