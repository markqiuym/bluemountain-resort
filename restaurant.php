<!DOCTYPE html>
<html>

<head>

	<!-- Standard Meta -->
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Properties -->
	<title>Restaurant - Mountain Resort</title>
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
			<div class="impx-menu-wrapper style2 resto"
				data-uk-sticky="top: .impx-slide-container; animation: uk-animation-slide-top">

				<!-- Mobile Nav Start -->
				<?php include './components/header-mobile.html'; ?>
				<!-- Mobile Nav End -->

				<!-- Top Header -->
				<?php include './components/header-top.php'; ?>
				<!-- Top Header End -->
				<!-- HEADER Start -->
				<?php include './components/header.html'; ?>
				<!-- HEADER END -->
			</div>
		</div>

	</header>
	<!-- HEADER END -->

	<!-- HERO IMAGE -->
	<div class="impx-slide-container style1 resto">
		<div class="impx-slideshow-fw">
			<div
				class="impx-hero-resto uk-position-relative  uk-background-fixed uk-background-center-center uk-height-1-1">
				<div class="impx-overlay dark"></div>
				<div class="uk-container">
					<div class="uk-grid uk-flex uk-flex-center uk-flex-middle">
						<div
							class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-1@m  uk-width-1-1@s uk-position-center uk-margin-large-top">
							<div
								class="impx-slide-fw-caption resto-caption uk-position-relative uk-position-z-index uk-text-center uk-light">
								<!-- intro -->
								<h1 class="impx-text-shadow">Mountains Resort Restaurant</h1>

								<div class="uk-margin">
									<i class="fa fa-coffee impx-slide-icon impx-text-white"></i>
									<i class="fa fa-cutlery impx-slide-icon impx-text-white"></i>
									<i class="fa fa-glass impx-slide-icon impx-text-white"></i>
								</div>
								<!-- intro end -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- HERO IMAGE END -->

	<!-- FEATURES -->
	<div
		class="uk-padding uk-padding-remove-horizontal uk-padding-remove-bottom bg-color-gray  pattern-1 impx-resto-badge">
		<div class="uk-container">
			<div class="uk-grid">
				<!-- Image -->
				<div
					class="uk-width-2-5@xl uk-width-2-5@l uk-width-2-5@m uk-width-1-1@s uk-vertical-align-bottom uk-position-relative uk-position-z-index impx-negative-top xxlarge">
					<img src="images/chef-woman.png" alt="Chef Stand" class="img-resto-intro uk-align-center" />
				</div>
				<!-- Image End -->
				<!-- Contact Info -->
				<div class="uk-width-3-5@xl uk-width-3-5@l uk-width-3-5@m uk-width-1-1@s impx-intro resto">
					<h3>Make an Appointment</h3>
					<p class="impx-text-large uk-margin-bottom">Secure your table at our restaurant. Make a reservation
						today!</p>
					<ul class="impx-list-inline impx-hours">
						<li><i class="fa fa-check impx-text-aqua"></i><strong class="impx-text-aqua">Breakfast</strong>
							6.00 AM - 10.00 AM</li>
						<li><i class="fa fa-check impx-text-aqua"></i><strong class="impx-text-aqua">Lunch</strong>
							10.00 AM - 2.00 PM</li>
						<li><i class="fa fa-check impx-text-aqua"></i><strong class="impx-text-aqua">Dinner</strong>
							4.00 PM - 12.00 PM</li>
					</ul>
				</div>
				<!-- Contact Info End -->
			</div>
		</div>
	</div>
	<!-- FEATURES END -->

	<!-- HIGHLIGHT -->
	<div class="uk-padding uk-margin-bottom resto-feat uk-padding-remove-horizontal">
		<div class="uk-container">
			<div data-uk-grid>

				<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s uk-margin-top">
					<div class="impx-intro resto margin-medium">
						<!-- intro -->
						<h3>Get Special Offers Now!</h3>
						<p class="uk-margin-medium-bottom impx-text-large">Reserve your table at our restaurant. Book
							your dining experience now!.</p>
					</div><!-- intro end -->

					<!-- highlight items -->
					<ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-2@s"
						data-uk-grid>
						<li class="resto-feat-item">
							<!-- highlight item #1 -->
							<div data-uk-grid>
								<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
									<div class="uk-position-relative">
										<img src="images/intro-img-1.jpg" alt="resort" class="uk-border-circle">
										<div class="impx-overlay light overlay-outline padding-medium"></div>
									</div>
								</div>
								<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
									<h5 class="uk-margin-remove-bottom">Feature Title</h5>
									<p class="uk-margin-small-top uk-margin-remove-bottom">Nunc omni virtuti vitium
										contrario constructio interrete. Itaque ad tempus ad Pisonem omnes</p>
								</div>
							</div>
						</li><!-- highlight item #1 end -->
						<li class="resto-feat-item">
							<!-- highlight item #2-->
							<div data-uk-grid>
								<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
									<div class="uk-position-relative">
										<img src="images/intro-img-2.jpg" alt="resort" class="uk-border-circle">
										<div class="impx-overlay light overlay-outline padding-medium"></div>
									</div>
								</div>
								<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
									<h5 class="uk-margin-remove-bottom">Feature Title</h5>
									<p class="uk-margin-small-top uk-margin-remove-bottom">Nunc omni virtuti vitium
										contrario constructio interrete. Itaque ad tempus ad Pisonem omnes</p>
								</div>
							</div>
						</li><!-- highlight item #2 end -->

						<li class="resto-feat-item">
							<!-- highlight item #3 -->
							<div data-uk-grid>
								<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
									<div class="uk-position-relative">
										<img src="images/intro-img-3.jpg" alt="resort" class="uk-border-circle">
										<div class="impx-overlay light overlay-outline padding-medium"></div>
									</div>
								</div>
								<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
									<h5 class="uk-margin-remove-bottom">Feature Title</h5>
									<p class="uk-margin-small-top uk-margin-remove-bottom">Nunc omni virtuti vitium
										contrario constructio interrete. Itaque ad tempus ad Pisonem omnes</p>
								</div>
							</div>
						</li><!-- highlight item #3 end -->
						<li class="resto-feat-item">
							<!-- highlight item #4 -->
							<div data-uk-grid>
								<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-3@m uk-width-1-1@s">
									<div class="uk-position-relative">
										<img src="images/intro-img-4.jpg" alt="resort" class="uk-border-circle">
										<div class="impx-overlay light overlay-outline padding-medium"></div>
									</div>
								</div>
								<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s">
									<h5 class="uk-margin-remove-bottom">Feature Title</h5>
									<p class="uk-margin-small-top uk-margin-remove-bottom">Nunc omni virtuti vitium
										contrario constructio interrete. Itaque ad tempus ad Pisonem omnes</p>
								</div>
							</div>
						</li><!-- highlight item #4 end -->
					</ul>
					<!-- highlight items end -->
				</div>

				<!-- Intro Text -->
				<div class="uk-width-1-3@xl uk-width-1-3@l uk-width-1-1@m">
					<div class="impx-img-stacked uk-padding-remove-horizontal">
						<img src="images/gallery/resto-gal-7.jpg" alt="" class="">
						<img src="images/gallery/resto-gal-2.jpg" alt="" class="">
					</div>
				</div>
				<!-- Intro Text End -->

			</div>
		</div>
	</div>
	<!-- HIGHLIGHT -->

	<!-- MENU BOOK -->

	<!-- MENU BOOK -->

	<!-- GALLERY -->

	<!-- GALLERY END -->

	<!-- CTA -->
	<div class="impx-resto-content bg-color-aqua pattern-1">
		<div class="uk-container">
			<div data-uk-grid>
				<div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@m uk-width-1-1@s">
					<div class="impx-badge-content left uk-light uk-margin-medium-top uk-text-right">
						<h4 class="uk-margin-small-bottom">Enim ad omnia respondere</h4>
						<p class="impx-text-large uk-margin-remove uk-visible@s">Omnes enim iucundum motum, quo sensus
							Neque solum ea communia, verum etiam paria dixerunt. Quicquid porro</p>
					</div>
				</div>
				<div class="uk-width-1-5@xl uk-width-1-5@l uk-width-1-4@m uk-width-1-1@s">
					<div class=" impx-resto-img impx-negative-top tiny">
						<img src="images/chef.jpg" alt="resort"
							class="uk-border-circle impx-outline-border transparent large">
					</div>
				</div>
				<div class="uk-width-expand@xl uk-width-expand@l uk-width-expand@m uk-width-1-1@s">
					<div class="impx-badge-content right uk-light uk-margin-medium-top">
						<h4 class="uk-margin-small-bottom">Longum est enim ad omnia</h4>
						<p class="impx-text-large uk-margin-remove uk-visible@s">Omnes enim iucundum motum, quo sensus
							Neque solum ea communia, verum etiam paria dixerunt. Quicquid porro</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- CTA END -->

	<!-- FOOTER -->
	<?php include './components/footer.html'; ?>
	<!-- FOOTER END -->

	<!-- Javascript -->
	<script src="js/jquery.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<!-- <script type="text/javascript"
		src="http://maps.google.com/maps/api/js?key=AIzaSyBGb3xrNtz335X4G2KfoOXb-XuIyHAzlVo"></script> -->
	<script src="js/jquery.gmap.min.js"></script>
	<script src="js/jquery.parallax.min.js"></script>
	<script src="js/template-config.js"></script>
</body>


</html>