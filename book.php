<?php
if (isset($_GET['type'])) {
	$roomsType = $_GET['type'];
	$price = $_GET['price'];
	$image = $_GET['image'];
}
?>
<!DOCTYPE html>
<html>

<head>

	<!-- Standard Meta -->
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Properties -->
	<title>Booking</title>
	<link rel="shortcut icon" href="images/logo/logo-black.svg">
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
	<div class="uk-flex uk-flex-center uk-flex-middle">
		<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@s">

			<!-- booking form -->
			<div class="bg-gradient-seawead uk-padding impx-padding-medium">
				<div class="impx-hp-booking-form side-form uk-margin-bottom uk-margin-remove-top">
					<h6 class="uk-heading-line uk-text-center impx-text-white uk-text-uppercase"><span>Booking
							Form</span></h6>
					<form action="comfirm.php" method="POST">
						<div class="uk-margin">
							<div class="uk-form-controls">
								<div class="uk-inline">
									<label class="uk-form-label">Arrival</label>
									<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
									<input class="uk-input booking-arrival uk-border-rounded" type="text"
										name="arrivalDate" id="arrivalDate" placeholder="mm/dd/yyyy">
								</div>
							</div>
						</div>
						<div class="uk-margin">
							<div class="uk-form-controls">
								<div class="uk-inline">
									<label class="uk-form-label">Departure</label>
									<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
									<input class="uk-input booking-departure uk-border-rounded" name="departureDate"
										id="departureDate" type="text" placeholder="mm/dd/yyyy">
								</div>
							</div>
						</div>
						<div class="uk-margin">
							<div class="uk-form-controls">
								<div class="uk-inline">
									<label class="uk-form-label">Room Number</label>
									<span class="uk-form-icon" data-uk-icon="icon: lifesaver"></span>
									<input class="uk-input booking-departure uk-border-rounded" name="roomNum"
										id="roomNum" type="text" placeholder="Room number...">
								</div>
							</div>
						</div>
						<div class="uk-margin">
							<div class="uk-form-controls uk-position-relative">
								<label class="uk-form-label" for="form-guest-select">Guest</label>
								<span class="uk-form-icon select-icon" data-uk-icon="icon: users"></span>
								<select class="uk-select uk-border-rounded" id="form-guest-select" name="guestNumber">
									<option value="">Please select...</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
						</div>
						<input type="hidden" name="roomsTpye" value="<?php echo ($roomsType) ?>">
						<input type="hidden" name="price" value="<?php echo ($price) ?>">
						<input type="hidden" name="image" value="<?php echo ($image) ?>">
						<!-- <div class="uk-margin">
							<div class="uk-form-controls uk-position-relative">
								<label class="uk-form-label" for="form-rooms-select">Room Type</label>
								<span class="uk-form-icon select-icon" data-uk-icon="icon: album"></span>
								<select class="uk-select uk-border-rounded" id="form-rooms-select" name="roomsTpye"
									onchange="myFunction()">
									<option value="">Please select...</option>
									<option value="Single RoomA">Single A</option>
									<option value="Single RoomB">Single B</option>
									<option value="Double RoomA">Double A</option>
									<option value="Double RoomB">Double B</option>
									<option value="Primier RoomA">Primier A</option>
									<option value="Primier RoomB">Primier B</option>
									<option value="Deluxe RoomA">Deluxe A</option>
									<option value="Deluxe RoomA">Deluxe B</option>
								</select>
							</div>
							<span id="display" name="price"></span>
						</div> -->
						<div class="uk-button uk-width-1-1">
							<label class="uk-form-label empty-label">&nbsp;</label>
							<button class="uk-button uk-width-1-3" onclick="return validation()">Book
								Now</button>
							<button class="uk-button uk-width-1-3"
								onclick="window.location.href = 'accommandations.php';">Close</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
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
			if (rooms === 'Single RoomA') {
				document.getElementById("display").innerHTML = "The price is $50/night";
				document.getElementById("price").value = 50;
				document.getElementById("image").value = "images/rooms/room-1.jpg";
			}
			if (rooms === 'Single RoomB') {
				document.getElementById("display").innerHTML = "The price is $50/night";
				document.getElementById("price").value = 50;
				document.getElementById("image").value = "images/rooms/room-1.jpg";
			}
			if (rooms === 'Double RoomA') {
				document.getElementById("display").innerHTML = "The price is $80/night";
				document.getElementById("price").value = 80;
				document.getElementById("image").value = "images/rooms/room-2.jpg";
			}
			if (rooms === 'Double RoomB') {
				document.getElementById("display").innerHTML = "The price is $80/night";
				document.getElementById("price").value = 80;
				document.getElementById("image").value = "images/rooms/room-2.jpg";
			}
			if (rooms === 'Primier RoomA') {
				document.getElementById("display").innerHTML = "The price is $100/night";
				document.getElementById("price").value = 100;
				document.getElementById("image").value = "images/rooms/room-3.jpg";
			}
			if (rooms === 'Primier RoomB') {
				document.getElementById("display").innerHTML = "The price is $100/night";
				document.getElementById("price").value = 100;
				document.getElementById("image").value = "images/rooms/room-3.jpg";
			}
			if (rooms === 'Deluxe RoomA') {
				document.getElementById("display").innerHTML = "The price is $150/night";
				document.getElementById("price").value = 150;
				document.getElementById("image").value = "images/rooms/room-4.jpg";
			}
			if (rooms === 'Deluxe RoomB') {
				document.getElementById("display").innerHTML = "The price is $150/night";
				document.getElementById("price").value = 150;
				document.getElementById("image").value = "images/rooms/room-4.jpg";
			}

		}

		function validation() {
			var today = new Date();
			var arrivalDate = document.getElementById("arrivalDate").value;
			var departureDate = document.getElementById("departureDate").value;
			var roomNum = document.getElementById("roomNum").value;
			var formguestselect = document.getElementById("form-guest-select").value;
			var formroomsselect = document.getElementById("form-rooms-select").value;
			// alert("arrivalDate:" + arrivalDate);
			// alert("departureDate:" + departureDate);
			var tToday = today.getMonth() + 1 + "/" + today.getDate() + "/" + today.getFullYear()
			// alert("now:" + tToday);
			if (arrivalDate == "") {
				alert("Arrival date cannot be empty!");
				document.getElementById("arrivalDate").focus();
				return false;
			}
			if (arrivalDate < tToday) {
				alert("Arrival date must be greater than today!");
				document.getElementById("arrivalDate").focus();
				return false;
			}
			if (departureDate == "") {
				alert("Departure date cannot be empty!");
				document.getElementById("departureDate").focus();
				return false;
			}
			if (departureDate < tToday) {
				alert("Departure date must be greater than today!");
				document.getElementById("departureDate").focus();
				return false;
			}
			if (arrivalDate >= departureDate) {
				alert("Arrival date must be greater than start date! ");
				document.getElementById("departureDate").focus();
				return false;
			}
			if (roomNum == "") {
				alert("Room Number cannot be empty!");
				document.getElementById("roomNum").focus();
				return false;
			}
			if (formguestselect == "") {
				alert("Guest Number cannot be empty!");
				document.getElementById("form-guest-select").focus();
				return false;
			}
			if (formroomsselect == "") {
				alert("Room Type cannot be empty!");
				document.getElementById("form-rooms-select").focus();
				return false;
			}
			return true
		}
	</script>
</body>


</html>