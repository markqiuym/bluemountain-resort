<?php
// session_start();
if (isset($_POST['arrivalDate'])) {
	$arrivaldate = $_POST['arrivalDate'];
	$departureDate = $_POST['departureDate'];
	$guestNumber = $_POST['guestNumber'];
	$roomsTpye = $_POST['roomsTpye'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	$roomNum = $_POST['roomNum'];

	// echo ($image);

	$timestamp1 = strtotime($arrivaldate);
	$timestamp2 = strtotime($departureDate);
	$diff = $timestamp2 - $timestamp1;


	$days_difference = floor($diff / (60 * 60 * 24));
	// echo "days_difference===" . $days_difference;
	// echo "roomNum===" . $roomNum;
	// echo "price===" . $price;
	if ($days_difference == 1) {
		$nightNum = $days_difference;
		$total = $roomNum * $price * $days_difference;
	} else {
		$nightNum = $days_difference - 1;
		$total = $roomNum * $price * ($days_difference - 1);
	}
	$ttlWithTax = $total + $total * 0.1;
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
	<title>Confirmation</title>
	<link rel="shortcut icon" href="images/logo/logo-black.svg" type="image/x-icon">
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
			<div class="impx-menu-wrapper style2">
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
	<div class="impx-page-heading uk-position-relative rooms">
		<div class="impx-overlay dark"></div>
		<div class="uk-container">
			<div class="uk-width-1-1">
				<div class="uk-flex uk-flex-left">
					<div class="uk-light uk-position-relative uk-text-left page-title">
						<h1 class="uk-margin-remove">COMFIRM FORM</h1><!-- page title -->
						<p class="impx-text-large uk-margin-remove">Browse &amp; Choose Your Choice</p>
						<!-- page subtitle -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- PAGE HEADING END -->

	<!-- CONTENT -->
	<form action="accommandations.php" method="POST" onsubmit="return check()">
		<div class="uk-padding uk-padding-remove-horizontal">
			<div class="uk-container">
				<div data-uk-grid>

					<!-- INFORMATION -->
					<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-2-1@s uk-margin-small-top">
						<div class="bg-color-white uk-padding  impx-padding-medium uk-box-shadow-small">
							<div class="uk-position-relative uk-visible-toggle">
								<h4 class="uk-margin-medium-bottom"><span>Who's checking in?</span></h4>
								<ul class="uk-child-width-1-1@xl uk-child-width-1-1@l uk-child-width-1-1@m uk-child-width-1-1@s data-uk-grid uk-grid-match uk-margin-large-bottom"
									data-uk-grid>
									<li>
										<!-- First name -->
										<div class="uk-width-1-2@s">
											<label class="uk-form-label uk-text-bold" for="form-stacked-text">First
												name<strong>*</strong></label>
											<div class="uk-form-controls">
												<input class="uk-input uk-form-width-medium" id="form-stacked-text"
													type="text" placeholder="(e.g. John)" required>
											</div>
										</div>
										<!-- Surname -->
										<div class="uk-width-1-2@s">
											<label class="uk-form-label uk-text-bold"
												for="form-stacked-text">Surname<strong>*</strong></label>
											<div class="uk-form-controls">
												<input class="uk-input uk-form-width-medium" id="form-stacked-text"
													type="text" placeholder="(e.g. Smith)" required>
											</div>
										</div>

										<!-- Email -->
										<div class="uk-width">
											<label class="uk-form-label uk-text-bold"
												for="form-stacked-text">Email<strong>*</strong></label>
											<div class="uk-form-controls">
												<input class="uk-input uk-form-width-medium" id="form-stacked-text"
													type="text" placeholder="Email for confirmation" required>
											</div>
										</div>
										<!-- <div class="uk-width-1-2@s"> -->
										<div class="uk-width-1-6@s">
											<label class="uk-form-label uk-text-bold" for="phone">Mobile number
												*</label>
											<div class="uk-form-controls">
												<input class="uk-input uk-form-width-medium" id="areaCode" type="text"
													placeholder="(e.g. +61)" required>
											</div>

										</div>

										<!-- </div> -->
										<div class="uk-width-5-6@s">
											<label class="uk-form-label uk-text-bold" for="phone">&nbsp;</label>
											<div class="uk-form-controls">
												<input class="uk-input uk-form-width-medium" id="phone" type="tel"
													placeholder="(e.g.404123456)" required>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<br>
						<!-- Payment method -->

						<div class="bg-color-white uk-padding  impx-padding-medium uk-box-shadow-small">
							<div class="uk-position-relative uk-visible-toggle">
								<h4 class="uk-margin-medium-bottom"><span>Payment method</span></h4>
								<div>
									<img src="./images/visa.png" alt="visa" height="40px" width="40px">
									<img src="./images/master.png" alt="master" height="40px" width="40px">
									<img src="./images/ipay.png" alt="ipay" height="40px" width="40px">
								</div>
								<br>
								<ul class="uk-child-width-1-1@xl uk-child-width-1-1@l uk-child-width-1-1@m uk-child-width-1-1@s data-uk-grid uk-grid-match uk-margin-large-bottom"
									data-uk-grid>
									<li>
										<!-- Name -->
										<div class="uk-width-5-6@s">
											<label class="uk-form-label uk-text-bold" for="form-stacked-text">Name on
												Card*</label>
											<div class="uk-form-controls">
												<input class="uk-input uk-form-width-medium" id="form-stacked-text"
													type="text" required>
											</div>
										</div>
										<!-- card -->
										<div class="uk-width-1-1@s">
											<label class="uk-form-label uk-text-bold"
												for="form-stacked-text">Debit/Credit
												card
												number*</label>
											<div class="uk-form-controls">
												<input class="uk-input uk-form-width-medium" id="form-stacked-text"
													type="text" required>
											</div>
										</div>
										<div class="uk-width-1-6@s">
											<label class="uk-form-label uk-text-bold" for="phone">Expiry date*</label>
											<div class="uk-form-controls">
												<input class="uk-input uk-form-width-medium" id="areaCode" type="text"
													placeholder="MM/YY" required>
											</div>

										</div>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<div class="uk-width-1-6@s">
											<label class="uk-form-label uk-text-bold" for="phone">Security
												code*</label>
											<div class="uk-form-controls">
												<input class="uk-input uk-form-width-medium" id="phone" type="tel"
													required>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<br>
						<div class="bg-color-white uk-padding  impx-padding-medium uk-box-shadow-small">
							<div class="uk-position-relative uk-visible-toggle">
								<h4 class="uk-margin-medium-bottom"><span>Important information</span></h4>
								<ul>
									<li>
										<p>This rate is non-refundable. If you change or cancel your booking you will
											not
											get a
											refund or credit to use for a future stay. This policy will apply regardless
											of
											COVID-19,
											subject to any local consumer laws.
										</p>
									</li>
									<li>
										<p>No refunds will be issued for late check-in or early check-out.
										</p>
									</li>
									<li>
										<p>Stay extensions require a new reservation. </p>
									</li>
									<li>
										<p>Front desk staff will greet guests on arrival. For more details, please
											contact
											the property using the information on the booking confirmation.
										</p>
									</li>
								</ul>
								<div class="uk-button uk-width-1-1">
									<label class="uk-form-label empty-label">&nbsp;</label>
									<button class="uk-button uk-width-1-3 uk-border-rounded uk-button-primary"
										id="js-modal-dialog" type="submit">Complete
										booking ></button>
									<button class="uk-button uk-width-1-3 uk-border-rounded uk-button-primary"
										onclick="window.location.href = 'accommandations.php';">Close</button>
								</div>
							</div>
						</div>
					</div>

					<!-- main content end -->

					<!-- sidebar -->
					<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-3@s uk-margin-small-top">


						<!-- Price details -->
						<div class="bg-color-white uk-padding  impx-padding-medium uk-box-shadow-small">
							<h4 class="uk-heading-line uk-margin-medium-bottom"><span>Booking Information</span></h4>
							<img src=<?php echo ($image) ?> alt="Photo is not exist!">
							<ul class="uk-list uk-list-divider uk-list-large">
								<li>
									<div data-uk-grid class="uk-grid-medium">
										<div class="uk-width-expand">
											<h6 class="uk-margin-remove">Property:&nbsp
												<?php echo ($roomsTpye) ?>
											</h6>
											<br>
											<h6 class="uk-margin-remove">Guest Number:&nbsp
												<?php echo ($guestNumber) ?>
											</h6>

										</div>
									</div>
								</li>
								<li>
									<div data-uk-grid class="uk-grid-medium">
										<div class="uk-width-expand">
											<h6 class="uk-margin-remove">Check-in:
												&nbsp
												<?php echo ($arrivaldate) ?>
											</h6>

											<h6 class="uk-margin-remove">Check-out:
												&nbsp
												<?php echo ($departureDate) ?>
											</h6>
											<h6 class="uk-margin-remove">
												<?php echo ($nightNum) ?>-night stay
											</h6>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<!-- features end -->
						<br>
						<!-- Price details -->
						<div class="bg-color-white uk-padding  impx-padding-medium uk-box-shadow-small">
							<h4 class="uk-heading-line uk-margin-medium-bottom"><span>Price details</span></h4>
							<ul class="uk-list uk-list-divider uk-list-large">
								<li>
									<div data-uk-grid class="uk-grid-medium">
										<div class="uk-width-expand">
											<h6 class="uk-margin-remove">
												<?php echo $roomNum ?> room x
												<?php echo $nightNum ?> night&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												AU$
												<?php echo ($total) ?>.00

											</h6>
											<br>
											<h6 class="uk-margin-remove">Taxes&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												10%
											</h6>
										</div>
									</div>
								</li>
								<li>
									<div data-uk-grid class="uk-grid-medium">
										<div class="uk-width-expand">
											<h4 class="uk-margin-remove">
												Total:
												&nbsp&nbsp&nbsp&nbsp&nbsp
												&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												AU$
												<?php echo ($ttlWithTax) ?> .00
											</h4>
										</div>
									</div>
								</li>

							</ul>
						</div>
						<!-- features end -->
					</div>
					<!-- sidebar end -->

				</div>
			</div>
		</div>
	</form>
	<!-- CONTENT END -->

	<!-- CONTACT INFO -->
	<?php include './components/contactInfo.html'; ?>
	<!-- CONTACT INFO END -->

	<!-- FOOTER -->
	<?php include './components/footer.html'; ?>
	</footer>
	<!-- FOOTER END -->
	<!-- This is the modal -->
	<div id="modal-confirm" uk-modal>
		<div class="uk-modal-dialog uk-modal-body">
			<h2 class="uk-modal-title">Information</h2>
			<p><strong>Are you sure to book?</strong></p>
			<p class="uk-text-right">
				<button class="uk-button uk-button-default uk-modal-close"
					type="button"><strong>Cancel</strong></button>
				<button class="uk-button uk-button-primary" type="submit" onclick="location.href='login.php'">
					<strong>OK</strong>
				</button>
			</p>
		</div>
	</div>
	<!-- Javascript -->
	<script>

		function check() {
			var name = document.getElementById("form-stacked-text").value;
			alert("Your room has been booked successfully, Thank you " + name + " for choosing mountains resort, enjoy your stay!")
		}
	</script>
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
</body>


</html>