<!DOCTYPE html>
<html>

<head>

	<!-- Standard Meta -->
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Properties -->
	<title>Rooms - Mountains Resort</title>
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
	<script src="javascript">
		function validation() {
			window.location.href = 'book.php';
			alert " ss "
		}
	</script>
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
						<h1 class="uk-margin-remove">RESORT</h1><!-- page title -->
						<p class="impx-text-large uk-margin-remove">Browse &amp; Choose</p>
						<!-- page subtitle -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- PAGE HEADING END -->

	<!-- CONTENT -->
	<div class="uk-padding uk-padding-remove-horizontal">
		<div class="uk-container">
			<div data-uk-grid>
				<!-- main content -->
				<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s uk-margin-small-top">
					<div class="uk-position-relative uk-visible-toggle">
						<!-- Rooms List -->
						<ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-2@s data-uk-grid uk-grid-match uk-margin-large-bottom"
							data-uk-grid>
							<li>
								<!-- room item #1 -->
								<div class="uk-card uk-card-default uk-card-medium">
									<div class="uk-card-media-top uk-position-relative">
										<img src="images/rooms/room-1.jpg" alt="">
										<div class="impx-overlay light overlay-squared padding-xwide"></div>
									</div>
									<div class="uk-card-body impx-padding-medium">
										<h4 class="uk-card-title uk-margin-remove-bottom">The nest A</h4>
										<span class="uk-label bg-color-dark-gray">from $150/night</span>
										<ul class="uk-list room-fac">
											<li><span class="impx-text-aqua"></span> cosy 2-bedroom
												accommodation. Services include: accommodation only. Extras on request.
											</li>
										</ul>
										<?php
										if (isset($_SESSION["username"])) {
											?>
											<div
												class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
												<a href="book.php?type=Villa B&price=150&image=images/rooms/room-1.jpg"
													class="uk-button uk-button-text">BOOK
													NOW
													&raquo;</a>
											</div>
											<?php
										} else {
											?>
											<div
												class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
												<a href="book.php?type=Villa B&price=150&image=images/rooms/room-1.jpg"
													class="uk-button uk-button-text"
													uk-toggle="target: #modal-example2">BOOK
													NOW
													&raquo;</a>
											</div>
											<?php
										}
										?>
										<!-- <div
											class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
											<a href="book.php?type=The nest A&price=150&image=images/rooms/room-1.jpg"
												class="uk-button uk-button-text impx-text-aqua">BOOK
												NOW
												&raquo;</a>
										</div> -->
									</div>
								</div>
							</li><!-- room item #1 end -->
							<li>
								<!-- room item #2 -->
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top uk-position-relative">
										<img src="images/rooms/room-2.jpg" alt="">
										<div class="impx-overlay light overlay-squared padding-xwide"></div>
									</div>
									<div class="uk-card-body impx-padding-medium">
										<h4 class="uk-card-title uk-margin-remove-bottom">The nest B</h4>
										<span class="uk-label bg-color-dark-gray">from $150/night</span>
										<ul class="uk-list room-fac">
											<li><span class="impx-text-aqua"></span> Enjoy a cozy 2-bedroom retreat,
												accommodation-only. Tailored extras available upon request, ensuring
												your perfect getaway.
											</li>
										</ul>
										<?php
										if (isset($_SESSION["username"])) {
											?>
											<div
												class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
												<a href="book.php?type=Villa B&price=150&image=images/rooms/room-1.jpg"
													class="uk-button uk-button-text">BOOK
													NOW
													&raquo;</a>
											</div>
											<?php
										} else {
											?>
											<div
												class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
												<a href="book.php?type=Villa B&price=150&image=images/rooms/room-1.jpg"
													class="uk-button uk-button-text "
													uk-toggle="target: #modal-example2">BOOK
													NOW
													&raquo;</a>
											</div>
											<?php
										}
										?>
										<!-- <div
											class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
											<a href="book.php?type=The nest B&price=150&image=images/rooms/room-1.jpg"
												class="uk-button uk-button-text impx-text-aqua">BOOK
												NOW
												&raquo;</a>
										</div> -->
									</div>
								</div>
							</li><!-- room item #2 end -->
							<li>
								<!-- room item #3 -->
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top uk-position-relative">
										<img src="images/rooms/room-3.jpg" alt="">
										<div class="impx-overlay light overlay-squared padding-xwide"></div>
									</div>
									<div class="uk-card-body impx-padding-medium">
										<h4 class="uk-card-title uk-margin-remove-bottom">The nest C</h4>
										<span class="uk-label bg-color-dark-gray">from $150/night</span>
										<ul class="uk-list room-fac">
											<li><span class="impx-text-aqua"></span> Unwind in a cozy 2-bedroom haven,
												accommodation-only. Customize your experience with extras upon request,
												making it uniquely yours.
											</li>
										</ul>
										<?php
										if (isset($_SESSION["username"])) {
											?>
											<div
												class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
												<a href="book.php?type=Villa B&price=150&image=images/rooms/room-1.jpg"
													class="uk-button uk-button-text">BOOK
													NOW
													&raquo;</a>
											</div>
											<?php
										} else {
											?>
											<div
												class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
												<a href="book.php?type=Villa B&price=150&image=images/rooms/room-1.jpg"
													class="uk-button uk-button-text"
													uk-toggle="target: #modal-example2">BOOK
													NOW
													&raquo;</a>
											</div>
											<?php
										}
										?>
										<!-- <div
											class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
											<a href="book.php?type=The nest C&price=150&image=images/rooms/room-1.jpg"
												class="uk-button uk-button-text impx-text-aqua">BOOK
												NOW
												&raquo;</a>
										</div> -->
									</div>
								</div>
							</li><!-- room item #3 end -->
							<li>
								<!-- room item #4 -->
								<div class="uk-card uk-card-default">
									<div class="uk-card-media-top uk-position-relative">
										<img src="images/rooms/room-4.jpg" alt="">
										<div class="impx-overlay light overlay-squared padding-xwide"></div>
									</div>
									<div class="uk-card-body impx-padding-medium">
										<h4 class="uk-card-title uk-margin-remove-bottom">The nest D</h4>
										<span class="uk-label bg-color-dark-gray">from $150/night</span>
										<ul class="uk-list room-fac">
											<li><span class="impx-text-aqua"></span> Experience a snug 2-bedroom escape,
												accommodation-only. Elevate your stay with extras tailored to your
												preferences, just a request away.
											</li>
										</ul>
										<?php
										if (isset($_SESSION["username"])) {
											?>
											<div
												class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
												<a href="book.php?type=Villa B&price=150&image=images/rooms/room-1.jpg"
													class="uk-button uk-button-text">BOOK
													NOW
													&raquo;</a>
											</div>
											<?php
										} else {
											?>
											<div
												class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
												<a href="book.php?type=Villa B&price=150&image=images/rooms/room-1.jpg"
													class="uk-button uk-button-text"
													uk-toggle="target: #modal-example2">BOOK
													NOW
													&raquo;</a>
											</div>
											<?php
										}
										?>
										<!-- <div
											class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
											<a href="book.php?type=The nest D&price=150&image=images/rooms/room-1.jpg"
												class="uk-button uk-button-text impx-text-aqua">BOOK
												NOW
												&raquo;</a>
										</div> -->
									</div>
								</div>
							</li><!-- room item #4 end -->
						</ul>
						<!-- rooms list end -->
					</div>

					<!-- rooms paging -->
					<ul class="uk-pagination uk-flex-center impx-pagination uk-margin-remove-top" data-uk-margin>
						<li><a href="accommandations1.php"><span data-uk-pagination-previous></span></a></li>
						<li><a href="accommandations.php">1</a></li>
						<li><a href="accommandations1.php">2</a></li>
						<li class="uk-active"><a href="accommandations2.php">3</a></li>
						<!-- <li><a href="accommandations.php"><span data-uk-pagination-next></span></a></li> -->
					</ul>
					<!-- rooms paging end -->
				</div>
				<!-- main content end -->

				<!-- sidebar -->
				<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s uk-margin-small-top">
					<!-- features -->
					<div class="bg-color-white uk-padding  impx-padding-medium uk-box-shadow-small">
						<h4 class="uk-heading-line uk-margin-medium-bottom"><span>Our Key Features</span></h4>
						<ul class="uk-list uk-list-divider uk-list-large">
							<li>
								<div data-uk-grid class="uk-grid-medium">
									<div class="uk-width-auto">
										<i class="fa fa-cutlery fa-2x impx-text-gray"></i>
									</div>
									<div class="uk-width-expand">
										<h6 class="uk-margin-remove">In-house Restaurant</h6>
										<p class="uk-margin-remove-bottom uk-margin-small-top">Exquisite cuisine,
											panoramic views, live music, and top-notch service. Unforgettable dining</p>
									</div>
								</div>
							</li>
							<li>
								<div data-uk-grid class="uk-grid-medium">
									<div class="uk-width-auto">
										<i class="fa fa-asterisk fa-2x impx-text-gray"></i>
									</div>
									<div class="uk-width-expand">
										<h6 class="uk-margin-remove">Spa</h6>
										<p class="uk-margin-remove-bottom uk-margin-small-top">Tranquil oasis,
											rejuvenating therapies, and inner peace. Discover serenity within</p>
									</div>
								</div>
							</li>
							<li>
								<div data-uk-grid class="uk-grid-medium">
									<div class="uk-width-auto">
										<i class="fa fa-paw fa-2x impx-text-gray"></i>
									</div>
									<div class="uk-width-expand">
										<h6 class="uk-margin-remove">Outdoor</h6>
										<p class="uk-margin-remove-bottom uk-margin-small-top">Immerse in nature,
											adventure, and fresh air. Unleash your outdoor spirit</p>
									</div>
								</div>
							</li>
							<li>
								<div data-uk-grid class="uk-grid-medium">
									<div class="uk-width-auto">
										<i class="fa fa-heart fa-2x impx-text-gray"></i>
									</div>
									<div class="uk-width-expand">
										<h6 class="uk-margin-remove">Gym</h6>
										<p class="uk-margin-remove-bottom uk-margin-small-top">Cutting-edge fitness,
											expert guidance, and peak performance. Achieve your fitness goals here</p>
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
	<!-- CONTENT END -->
	<!-- This is the modal -->
	<div id="modal-example2" uk-modal>
		<div class="uk-modal-dialog uk-modal-body">
			<h2 class="uk-modal-title">Information</h2>
			<p><strong>To make a booking, please login or register!</strong></p>
			<p class="uk-text-right">
				<button class="uk-button uk-button-default uk-modal-close uk-border-rounded"
					type="button"><strong>Cancel</strong></button>
				<button class="uk-button uk-button-primary uk-border-rounded" type="button"
					onclick="location.href='login.php?bookpg=1'">
					<strong>&nbsp;Login&nbsp;</strong>
				</button>
				<!-- <a href="login.php?type=Villa B&price=500&image=images/rooms/room-1.jpg"
					class="uk-button uk-button-text impx-text-aqua">test
					&raquo;</a> -->
				<button class="uk-button uk-button-primary uk-border-rounded" type="button"
					onclick="location.href='signup.php?bookpg=1'">
					<strong>Register</strong>
				</button>
			</p>
		</div>
	</div>
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
</body>


</html>