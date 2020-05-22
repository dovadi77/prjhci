<?php include "_config/config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>Boss Coffee</title>
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
</head>

<body class="menu" data-spy="scroll">
    <header>
        <nav class="sidebar">
            <div class="img-center"><img src="img/logo.png" alt="logo" class="img-fluid"></div>
            <nav class="container" id="menu-center">
                <input type="text" class="form-control empty" id="myInput" onkeyup="mySearchFunction()" placeholder="&#xF002 Search" />
                <ul class="list-unstyled">
                    <li><a class="nav-link" href="#coffee">Coffee</a></li>
                    <li><a class="nav-link" href="#noncoffee">Non Coffee</a></li>
                    <li><a class="nav-link" href="#lmeal">Light Meal</a></li>
                    <li><a class="nav-link" href="#hmeal">Heavy Meal</a></li>
                    <li><a class="nav-link" href="#dessert">Dessert</a></li>
                </ul>
            </nav>
        </nav>
        <nav class="content">
            <h3 class="text-right">Total </h3>
            <h5 id="rupiah" class="text-right">Rp. 0</h5>
        </nav>
    </header>