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
        <nav class="navbar fixed-top navbar-light bg-navbar" style="z-index: 1">
			<ul class="navbar-nav ml-auto">
                <li class="nav-item">Total</li>
                <li class="nav-item" id="rupiah">Rp. 0</li>
				
            </ul>
			<li class="list-unstyled nav-item">
			<input type = "button" class = "paybut" value = "confirm" style="background-color:#f14e4e">
			</li>
		</nav>
		<div id="pay_pop" class="pay_pop">
            <!-- Modal content -->
            <div class="payment-content">
				<div class="modal-header">
					<h2>PAYMENT</h2>
					<span class="close" id="closex">&times;</span>
                </div>
				<div class="modal-body">
					<p>Total: <span id="total">Rp. 0</span></p>
                    <p>Select Payment Method:</p>
					<input type = "radio" id = "cash" name = "payment" value = "cash"">
						<label for = "cash"><tabspace>CASH</tabspace></label>
					<input type = "radio" id = "ewallet" name = "payment" value = "ewallet">
						<label for = "ewallet"><tabspace>E-WALLET</tabspace></label>
					<input type = "radio" id = "edc" name = "payment" value = "edc">
						<label for = "edc"><tabspace>EDC</tabspace></label>
					<div class="pay_cash" id = "pay_cash">
						<tabspace>CASH:</tabspace>
						<input type="text" id="cashpay">
						<div align = "right" class = "mt-4 mb-3 confirm" style="display:none"><input type = "button" value = "Confirm Payment" onclick="confirmpay()"></div>
					</div>
					<div class="pay_ewallet">
						Select E-Wallet:
						<ul class = "list-unstyled ewallet_method" id = "id_ewallet">
							<li>
								<input type = "radio" id = "ovo" name = "pay">
								<label for = "pay"><img src = "img/ovo.png">
							</li>
							<li>
								<input type = "radio" id = "gopay" name = "pay">
								<label for = "pay"><img src = "img/gopay.png">
							</li>
							<li>
								<input type = "radio" id = "dana" name = "pay">
								<label for = "pay"><img src = "img/dana.png">
							</li>
						</ul>
						<div class = "pnum" style='display: none'><tabspace>Phone Number:</tabspace>
						<input type="text" id="pnumber"></div>
						<div align = "right" class = "mt-4 mb-3 confirm2" style="display:none"><input type = "button" value = "Confirm Payment" onclick="confirmpay2()"></div>
					</div>
					<div class="pay_edc">
						Select EDC:
						<ul class = "list-unstyled ewallet_method" id = "id_edc">
							<li>
								<input type = "radio" id = "bca" name = "pay">
								<label for = "pay">BCA
							</li>
							<li>
								<input type = "radio" id = "mandiri" name = "pay">
								<label for = "pay">MANDIRI
							</li>
							<li>
								<input type = "radio" id = "bni" name = "pay">
								<label for = "pay">BNI
							</li>
						</ul>
						<div align = "right" class = "mt-4 mb-3 confirm3" style="display:none"><input type = "button" value = "Confirm Payment" onclick="confirmpay2()"></div>
					</div>
                </div>
            </div>
        </div>
		<div id="payprocess" class="payprocess">
            <div class="payprocess-content">
                <div class="modal-body" align="center">
					<p alig class="mt-2">PAYMENT IN PROCESS</p>
					<img src="img/loading.gif">
				</div>
			</div>
		</div>
		
    </header>