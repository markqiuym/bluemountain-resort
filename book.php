<!DOCTYPE html>
<html>

<head>

	<!-- Standard Meta -->
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Properties -->
	<title>Rooms - Sativa</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="css/uikit.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/tiny-date-picker.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/media-query.css" />

</head>

<body id="impx-body">
	<!-- Multilangage Switcher Start -->
	<?php include './components/lang.html'; ?>
	<!-- Multilangage Switcher End -->
	<!-- HEADER -->
	<header id="impx-header">
		<div>
			<div class="impx-menu-wrapper style2"
				data-uk-sticky="top: .impx-page-heading; animation: uk-animation-slide-top">
				<!-- Mobile Nav Start -->
				<?php include './components/header-mobile.html'; ?>
				<!-- Mobile Nav End -->
				<!-- Top Header -->
				<?php include './components/header-top.php'; ?>
				<!-- Top Header End -->
				<?php include './components/header.html'; ?>
			</div>
		</div>

	</header>
	<!-- HEADER END -->

	<!-- PAGE HEADING -->
	<div class="impx-page-heading uk-position-relative rooms" style="height: 8rem;">
		<div class="impx-overlay dark"></div>
		<div class="uk-container">
			<div class="uk-width-1-1">
				<div class="uk-flex uk-flex-left">
					<div class="uk-light uk-position-relative uk-text-left page-title">
						<!-- <h1 class="uk-margin-remove">Book</h1>page title -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- PAGE HEADING END -->


	<!-- sidebar -->
	<br>
	<br>
	<div class="uk-flex uk-flex-center uk-flex-middle">
		<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@s">

			<!-- booking form -->
			<div class="bg-gradient-seawead uk-padding impx-padding-medium">
				<div class="impx-hp-booking-form side-form uk-margin-bottom uk-margin-remove-top">
					<h6 class="uk-heading-line uk-text-center impx-text-white uk-text-uppercase"><span>Booking
							Form</span></h6>
					<form action="comfirm.php" method="POST">
						<input type="hidden" name="price" id="price">
						<input type="hidden" name="image" id="image" value="44">
						<div class="uk-margin">
							<div class="uk-form-controls">
								<div class="uk-inline">
									<label class="uk-form-label">Arrival</label>
									<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
									<input class="uk-input booking-arrival uk-border-rounded" type="text"
										name="arrivalDate" placeholder="m/dd/yyyy" required>
								</div>
							</div>
						</div>
						<div class="uk-margin">
							<div class="uk-form-controls">
								<div class="uk-inline">
									<label class="uk-form-label">Departure</label>
									<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
									<input class="uk-input booking-departure uk-border-rounded" name="departureDate"
										type="text" placeholder="m/dd/yyyy" required>
								</div>
							</div>
						</div>
						<div class="uk-margin">
							<div class="uk-form-controls uk-position-relative">
								<label class="uk-form-label" for="form-guest-select">Guest</label>
								<span class="uk-form-icon select-icon" data-uk-icon="icon: users"></span>
								<select class="uk-select uk-border-rounded" id="form-guest-select" name="guestNumber"
									required>
									<option value="">Please select...</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
						</div>
						<div class="uk-margin">
							<div class="uk-form-controls uk-position-relative">
								<label class="uk-form-label" for="form-rooms-select">RESORT</label>
								<span class="uk-form-icon select-icon" data-uk-icon="icon: album"></span>
								<select class="uk-select uk-border-rounded" id="form-rooms-select" name="roomsTpye"
									onchange="myFunction()" required>
									<option value="">Please select...</option>
									<option value="Single Room">Single</option>
									<option value="Double Room">Double</option>
									<option value="Primier Room">Primier</option>
									<option value="Deluxe Room">Deluxe</option>
								</select>
							</div>
							<span id="display" name="price"></span>
						</div>
						<div class="uk-button uk-width-1-1">
							<label class="uk-form-label empty-label">&nbsp;</label>
							<button class="uk-button uk-width-1-3">Book
								Now!</button>
							<button class="uk-button uk-width-1-3"
								onclick="window.location.href = 'accommandations.php';">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<!-- CONTACT INFO -->
	<?php include './components/contactInfo.html'; ?>
	<!-- CONTACT INFO END -->

	<!-- FOOTER -->
	<?php include './components/footer.html'; ?>
	<!-- FOOTER END -->


	<!-- Javascript -->
	<script src="js/jquery.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<script type="text/javascript"
		src="http://maps.google.com/maps/api/js?key=AIzaSyBGb3xrNtz335X4G2KfoOXb-XuIyHAzlVo"></script>
	<script src="js/jquery.gmap.min.js"></script>
	<script src="js/jquery.parallax.min.js"></script>
	<script src="js/tiny-date-picker.min.js"></script>
	<script src="js/date-config.js"></script>
	<script src="js/template-config.js"></script>
	<script>
		function myFunction() {
			var rooms = document.getElementById("form-rooms-select").value;
			if (rooms === 'Single Room') {
				document.getElementById("display").innerHTML = "The price is $50/night";
				document.getElementById("price").value = 50;
				document.getElementById("image").value = "images/rooms/room-1.jpg";
			}
			if (rooms === 'Double Room') {
				document.getElementById("display").innerHTML = "The price is $80/night";
				document.getElementById("price").value = 80;
				document.getElementById("image").value = "images/rooms/room-2.jpg";
			}
			if (rooms === 'Primier Room') {
				document.getElementById("display").innerHTML = "The price is $100/night";
				document.getElementById("price").value = 100;
				document.getElementById("image").value = "images/rooms/room-3.jpg";
			}
			if (rooms === 'Deluxe Room') {
				document.getElementById("display").innerHTML = "The price is $150/night";
				document.getElementById("price").value = 150;
				document.getElementById("image").value = "images/rooms/room-4.jpg";
			}

		}
	</script>
</body>


</html>