<?php include "_config/config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv=“Pragma” content=”no-cache”>
	<meta http-equiv=“Expires” content=”-1″>
	<meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
	<script src="https://kit.fontawesome.com/661db8639e.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
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
				<div class="nav-footer muted">
					Logged in as:
					<br>
					Test
				</div>
			</nav>
		</nav>
		<nav class="navbar fixed-top navbar-light bg-navbar" style="z-index: 1">
			<a type="button" class="btn button3" href="index.html">
				<i class="fas fa-backspace"></i> Back </a>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">Total</li>
				<li class="nav-item" id="rupiah">Rp. 0</li>
			</ul>
			<li class="list-unstyled nav-item">
				<input type="button" class="paybut" value="confirm" style="background-color:#f14e4e">
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
					<input type="radio" id="cash" name="payment" value="cash"">
						<label for = " cash">
					<tabspace>CASH</tabspace></label>
					<input type="radio" id="ewallet" name="payment" value="ewallet">
					<label for="ewallet">
						<tabspace>E-WALLET</tabspace>
					</label>
					<input type="radio" id="edc" name="payment" value="edc">
					<label for="edc">
						<tabspace>EDC</tabspace>
					</label>
					<div class="pay_cash" id="pay_cash">
						<tabspace>CASH:</tabspace>
						<input type="number" id="cashpay" required>
						<div id="showRp" class="mt-5 mb-5">Rp. 0</div>
						<div align=" right" class="mt-4 mb-3 confirm" style="display:none"><input type="button" value="Confirm Payment" onclick="confirmpay()"></div>
					</div>
					<div class="pay_ewallet">
						Select E-Wallet:
						<ul class="list-unstyled ewallet_method" id="id_ewallet">
							<li>
								<input type="radio" value="ovo" id="ovo" name="pay">
								<label for="pay"><img src="img/ovo.png">
							</li>
							<li>
								<input type="radio" value="gopay" id="gopay" name="pay">
								<label for="pay"><img src="img/gopay.png">
							</li>
							<li>
								<input type="radio" value="dana" id="dana" name="pay">
								<label for="pay"><img src="img/dana.png">
							</li>
						</ul>
						<div class="pnum" style='display: none'>
							<tabspace>Phone Number:</tabspace>
							<input type="number" id="pnumber" required>
						</div>
						<div align="right" class="mt-4 mb-3 confirm2" style="display:none"><input type="button" value="Confirm Payment" onclick="confirmpay2()"></div>
					</div>
					<div class="pay_edc">
						Select EDC:
						<ul class="list-unstyled ewallet_method" id="id_edc">
							<li>
								<input type="radio" value="bca" id="bca" name="pay">
								<label for="pay">BCA
							</li>
							<li>
								<input type="radio" value="mandiri" id="mandiri" name="pay">
								<label for="pay">MANDIRI
							</li>
							<li>
								<input type="radio" value="bni" id="bni" name="pay">
								<label for="pay">BNI
							</li>
						</ul>
						<div align="right" class="mt-4 mb-3 confirm3" style="display:none"><input type="button" value="Confirm Payment" onclick="confirmpay2()"></div>
					</div>
					<!-- <a class="paybut" style="background-color:#f14e4e">Confirm</a>-->
					<div id="payprocess" class="payprocess">
						<div class="payprocess-content">
							<div class="modal-body" align="center" style="background-color: aquamarine;">
								<p class="mt-2 mb-5">PAYMENT IN PROCESS</p>
								<img src="img/25.gif" class="mt-5" id="loadinggif">
								<h1 class="ml8">
									<span class="letters-container">
										<span class="letters bang">✔</span>
									</span>
									<span class="circle circle-white"></span>
									<span class="circle circle-dark"></span>
									<span class="circle circle-container"><span class="circle circle-dark-dashed"></span></span>
								</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>