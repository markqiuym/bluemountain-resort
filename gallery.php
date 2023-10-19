<!DOCTYPE html>
<html>

<head>

	<!-- Standard Meta -->
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Properties -->
	<title>Gallery - Mountain Resort</title>
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

<body class="impx-body" id="top">

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
	<div class="impx-page-heading uk-position-relative gallery">
		<div class="impx-overlay dark"></div>
		<div class="uk-container">
			<div class="uk-width-1-1">
				<div class="uk-flex uk-flex-left">
					<div class="uk-light uk-position-relative uk-text-left page-title">
						<h1 class="uk-margin-remove">Gallery</h1><!-- page title -->
						<p class="impx-text-large uk-margin-remove">Our Story in Pictures</p><!-- page subtitle -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- PAGE HEADING END -->

	<!-- GALLERY CONTENT -->
	<div class="uk-padding uk-padding-remove-horizontal">
		<div class="uk-container">

			<div data-uk-filter="target: .js-filter">
				<!-- gallery filter -->
				<ul
					class="uk-subnav uk-subnav-pill uk-flex-center uk-margin-medium-bottom impx-gallery-filter uk-margin-small-top impx-margin-bottom">
					<li data-uk-filter-control=".all"><a href="#">All</a></li>
					<li data-uk-filter-control=".hotel"><a href="#">Hotel</a></li>
					<li data-uk-filter-control=".restaurant"><a href="#">Restaurant</a></li>
					<li data-uk-filter-control=".spa"><a href="#">Spa</a></li>
				</ul><!-- gallery filter end -->

				<!-- gallery items -->
				<div class="js-filter uk-child-width-1-4@xl uk-child-width-1-4@l uk-child-width-1-4@m uk-child-width-1-3@s uk-grid-medium uk-margin-small-bottom"
					data-uk-grid="masonry : true" data-uk-lightbox>
					<div class="restaurant all">
						<!-- gallery item #1 -->
						<a class="uk-inline-clip uk-transition-toggle" href="images/resto-gal-2.html"
							data-caption="Caption 1">
							<img src="images/gallery/resto-gal-2.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 1</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #1 end -->
					<div class="spa all" data-uk-lightbox>
						<!-- gallery item #2 -->
						<a class="uk-inline-clip uk-transition-toggle" href="images/spa-service-2.jpg"
							data-caption="Caption 4">
							<img src="images/spa-service-2.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 4</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #2 end -->
					<div class="hotel all" data-uk-lightbox>
						<!-- gallery item #3 -->
						<a class="uk-inline-clip uk-transition-toggle" href="images/service-4.jpg"
							data-caption="Caption 8">
							<img src="images/service-4.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 8</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #3 end -->
					<div class="restaurant all" data-uk-lightbox>
						<!-- gallery item #4 -->
						<a class="uk-inline-clip uk-transition-toggle" href="images/resto-square.jpg"
							data-caption="Caption 6">
							<img src="images/resto-square.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 6</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #4 end -->
					<div class="hotel all" data-uk-lightbox>
						<!-- gallery item #5 -->
						<a class="uk-inline-clip uk-transition-toggle" href="images/about-img-2.jpg"
							data-caption="Caption 7">
							<img src="images/about-img-2.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 7</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #5 end -->
					<div class="restaurant all" data-uk-lightbox>
						<!-- gallery item #5 -->
						<a class="uk-inline-clip uk-transition-toggle" href="images/resto-gal-3.html"
							data-caption="Caption 2">
							<img src="images/gallery/resto-gal-3.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 2</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #5 end -->
					<div class="hotel all" data-uk-lightbox>
						<!-- gallery item #6 -->
						<a class="uk-inline-clip uk-transition-toggle" href="images/activities/family-fun-1.jpg"
							data-caption="Caption 3">
							<img src="images/activities/family-fun-1.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 3</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #6 end -->
					<div class="spa all" data-uk-lightbox>
						<a class="uk-inline-clip uk-transition-toggle" href="images/spa-gal.html"
							data-caption="Caption 8">
							<img src="images/gallery/spa-gal.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 8</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #6 end -->
					<div class="hotel all" data-uk-lightbox>
						<!-- gallery item #7 -->
						<a class="uk-inline-clip uk-transition-toggle" href="images/rooms/room-square-4.jpg"
							data-caption="Caption 8">
							<img src="images/rooms/room-square-4.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 8</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #7 end -->
					<div class="spa all" data-uk-lightbox>
						<!-- gallery item #8 -->
						<a class="uk-inline-clip uk-transition-toggle" href="images/spa.jpg" data-caption="Caption 5">
							<img src="images/spa.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 5</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #8 end -->
					<div class="restaurant all" data-uk-lightbox>
						<!-- gallery item #9 -->
						<a class="uk-inline-clip uk-transition-toggle" href="images/resto-gal-7.html"
							data-caption="Caption 6">
							<img src="images/gallery/resto-gal-7.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 6</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #9 end -->
					<div class="spa all" data-uk-lightbox>
						<a class="uk-inline-clip uk-transition-toggle" href="images/spa-feature-2.jpg"
							data-caption="Caption 6">
							<img src="images/spa-feature-2.jpg" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary">
								<h5>Image 6</h5>
								<p>Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest ad honestatem</p>
							</div>
						</a>
					</div><!-- gallery item #9 end -->
				</div>
				<!-- gallery items end -->
			</div>

		</div>
	</div>
	<!-- GALLERY CONTENT END -->

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
	<script src="js/template-config.js"></script>

</body>


</html>