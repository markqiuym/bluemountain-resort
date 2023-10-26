<!DOCTYPE html>
<html>

<head>

	<!-- Standard Meta -->
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Properties -->
	<title>Home - Mountain Resort</title>
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
				data-uk-sticky="top: .impx-slide-container; animation: uk-animation-slide-top">
				<!-- Mobile Nav Start -->
				<?php include './components/header-mobile.html'; ?>
				<!-- Mobile Nav End -->

				<!-- Top Header -->
				<?php include './components/header-top.php'; ?>
				<!-- Top Header End -->
				<?php include './components/header.html'; ?>
				<!-- SLIDESHOW -->
				<div class="uk-container-expand">
					<div class="impx-slide-container style1">
						<div class="impx-slideshow-fw">
							<div
								data-uk-slideshow="autoplay: true; autoplay-interval: 4000; animation: fade; finite: false; min-height: 319; max-height: 980;">
								<div class="uk-position-relative uk-visible-toggle uk-light">

									<ul class="uk-slideshow-items">
										<li>
											<!-- Slideshow Item #1 -->
											<div
												class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-center">
												<img src="images/slideshow/full-slide-1.jpg" alt=""
													data-uk-cover="height:319px">
												<div class="uk-overlay-primary uk-position-cover impx-overlay dark">
												</div>
											</div>
											<div class="uk-container uk-position-relative uk-height-1-1">
												<div class="uk-position-left uk-flex uk-flex-middle">
													<div class="impx-slide-fw-caption">
														<!-- <div
															class="impx-slide-fw-caption-outline uk-transition-slide-left">
														</div> -->
														<h1
															class="uk-margin-remove impx-text-shadow uk-transition-slide-top uk-text-left">
															Mountains Resort</h1>
														<p
															class="impx-text-large uk-margin-remove impx-text-shadow uk-transition-slide-bottom uk-text-right uk-text-uppercase">
															Thrill Seeker's Paradise</p>
													</div>
												</div>
											</div>
										</li><!-- Slideshow Item #1 End -->
										<li>
											<!-- Slideshow Item #2 -->
											<div
												class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-right">
												<img src="images/slideshow/full-slide-2.png" alt="" data-uk-cover>
												<div class="uk-overlay-primary uk-position-cover impx-overlay dark">
												</div>
											</div>
											<div class="uk-container uk-position-relative uk-height-1-1">
												<div class="uk-position-right uk-flex uk-flex-middle">
													<div class="impx-slide-fw-caption right">
														<!-- <div
															class="impx-slide-fw-caption-outline right bottom uk-transition-slide-left">
														</div> -->
														<h1
															class="uk-margin-remove impx-text-shadow uk-transition-slide-top uk-text-right">
															Beautiful Panorama</h1>
														<p
															class="uk-text-large uk-margin-remove impx-text-shadow uk-transition-slide-bottom uk-text-right uk-text-uppercase">
															Enjoy the Best View</p>
													</div>
												</div>
											</div>
										</li><!-- Slideshow Item #2 End -->
										<li>
											<!-- Slideshow Item #3 -->
											<div
												class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
												<img src="images/slideshow/full-slide-3.jpg" alt="" data-uk-cover>
												<div class="uk-overlay-primary uk-position-cover impx-overlay dark">
												</div>
											</div>
											<div class="uk-container uk-position-relative uk-height-1-1">
												<div class="uk-position-left uk-flex uk-flex-middle">
													<div class="impx-slide-fw-caption text-right">
														<!-- <div
															class="impx-slide-fw-caption-outline uk-transition-slide-top">
														</div> -->
														<h1
															class="impx-text-white uk-margin-remove impx-text-shadow uk-transition-scale-down">
															Luxurious &amp; Convenient</h1>
														<p
															class="uk-text-large uk-margin-remove impx-text-shadow uk-transition-scale-up uk-text-right uk-text-uppercase">
															Choose The Best One</p>
													</div>
												</div>
											</div>
										</li><!-- Slideshow Item #3 End -->
										<li>
											<!-- Slideshow Item #4 -->
											<div
												class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-bottom-right">
												<img src="images/slideshow/full-slide-4.jpg" alt="" data-uk-cover>
												<div class="uk-overlay-primary uk-position-cover impx-overlay dark">
												</div>
											</div>
											<div class="uk-container uk-position-relative uk-height-1-1">
												<div class="uk-position-center uk-flex uk-flex-middle">
													<div class="impx-slide-fw-caption bottom">
														<!-- <div
															class="impx-slide-fw-caption-outline center bottom uk-transition-slide-left">
														</div> -->
														<h1
															class="uk-margin-remove impx-text-shadow uk-transition-slide-top uk-text-center">
															Oriental Spa</h1>
														<p
															class="uk-text-large uk-margin-remove impx-text-shadow uk-transition-slide-bottom uk-text-center uk-text-uppercase">
															Our Spa Service</p>
													</div>
												</div>
											</div>
										</li><!-- Slideshow Item #4 End -->
										<li>
											<!-- Slideshow Item #5 -->
											<div
												class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-center">
												<img src="images/slideshow/full-slide-5.jpg" alt="" data-uk-cover>
												<div class="uk-overlay-primary uk-position-cover impx-overlay dark">
												</div>
											</div>
											<div class="uk-container uk-position-relative uk-height-1-1">
												<div class="uk-position-left uk-flex uk-flex-middle">
													<div class="impx-slide-fw-caption">
														<!-- <div
															class="impx-slide-fw-caption-outline uk-transition-slide-fade">
														</div> -->
														<h1
															class="impx-text-white uk-margin-remove impx-text-shadow uk-transition-slide-bottom">
															In-house Restaurant</h1>
														<p
															class="uk-text-large uk-margin-remove impx-text-shadow uk-transition-slide-top uk-text-right uk-text-uppercase">
															The Delicious Foods</p>
													</div>
												</div>
											</div>
										</li><!-- Slideshow Item #5 End -->
										<li>
											<!-- Slideshow Item #6 -->
											<div
												class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-center">
												<img src="images/slideshow/full-slide-6.jpg" alt="" data-uk-cover>
												<div class="uk-overlay-primary uk-position-cover impx-overlay dark">
												</div>
											</div>
											<div class="uk-container uk-position-relative uk-height-1-1">
												<div class="uk-position-left uk-flex uk-flex-middle">
													<div class="impx-slide-fw-caption">
														<!-- <div
															class="impx-slide-fw-caption-outline uk-transition-slide-fade">
														</div> -->
														<h1
															class="impx-text-white uk-margin-remove impx-text-shadow uk-transition-slide-bottom">
															Our Beatiful Mountain Range</h1>
														<p
															class="uk-text-large  uk-margin-remove impx-text-shadow uk-transition-slide-top uk-text-right uk-text-uppercase">
															Enjoy the View</p>
													</div>
												</div>
											</div>
										</li><!-- Slideshow Item #6 End -->
										<li>
											<!-- Slideshow Item #7 -->
											<div
												class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-center">
												<img src="images/slideshow/full-slide-7.jpg" alt="" data-uk-cover>
												<div class="uk-overlay-primary uk-position-cover impx-overlay dark">
												</div>
											</div>
											<div class="uk-container uk-position-relative uk-height-1-1">
												<div class="uk-position-left uk-flex uk-flex-middle">
													<div class="impx-slide-fw-caption">
														<!-- <div
															class="impx-slide-fw-caption-outline uk-transition-slide-fade">
														</div> -->
														<h1
															class="impx-text-white uk-margin-remove impx-text-shadow uk-transition-slide-bottom">
															Ancient Mountain Peaks</h1>
														<p
															class="uk-text-large uk-margin-remove impx-text-shadow uk-transition-slide-top uk-text-right uk-text-uppercase">
															Mountain Climber's Delight</p>
													</div>
												</div>
											</div>
										</li><!-- Slideshow Item #7 End -->
									</ul>

									<!-- Slideshow Nav -->
									<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
										data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
									<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
										data-uk-slidenav-next data-uk-slideshow-item="next"></a>
									<!-- Slideshow Nav End -->

								</div>
							</div>

						</div>
					</div>
				</div>
				<!-- SLIDESHOW END -->

				<!-- SERVICES LIST & BOOKING FORM -->
				<div class="impx-content impx-services style2 bg-color-gray pattern-1">
					<div class="uk-container">

						<div class="uk-margin-medium-bottom impx-margin-bottom-small" data-uk-grid>

							<!-- Services List -->
							<div class="uk-width-expand impx-services-list uk-margin-bottom impx-margin-bottom-small">
								<h6 class="uk-heading-line uk-text-center uk-light uk-margin-bottom impx-text-white">
									<span>Our
										Services</span>
								</h6>
								<div class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-3@s uk-grid-medium"
									data-uk-grid>
									<div>
										<!-- Services Item #1 -->
										<div
											class="uk-card uk-card-default uk-box-shadow-hover-xlarge impx-service-card uk-padding-bottom">
											<div class="uk-card-media-top">
												<img src="images/service-1.jpg" alt="">
											</div>
											<div class="uk-card-body uk-card-small uk-text-center">
												<div class="uk-card-badge uk-label uk-label-danger bg-color-aqua">Hotel
													&amp; Resort
												</div>
												<p>Alterum significari idem, ut si diceretur, officia media omnia aut
													pleraque
													servantem vivere</p>
												<a href="accommandations.php"
													class="uk-button uk-button-default uk-button-small impx-button gold impx-button-outline outline-gold button-wide impx-button-rounded small-border">Learn
													More &raquo;</a>
											</div>
										</div>
									</div><!-- Services Item #1 End -->
									<div>
										<!-- Services Item #2 -->
										<div
											class="uk-card uk-card-default uk-box-shadow-hover-xlarge impx-service-card">
											<div class="uk-card-media-top">
												<img src="images/service-2.jpg" alt="">
											</div>
											<div class="uk-card-body uk-card-small uk-text-center">
												<div class="uk-card-badge uk-label uk-label-danger bg-color-aqua">
													Restaurant</div>
												<p>Alterum significari idem, ut si diceretur, officia media omnia aut
													pleraque
													servantem vivere</p>
												<a href="restaurant.php"
													class="uk-button uk-button-default uk-button-small impx-button gold impx-button-outline outline-gold button-wide impx-button-rounded small-border">Learn
													More &raquo;</a>
											</div>
										</div>
									</div><!-- Services Item #2 End -->
									<div>
										<!-- Services Item #3 -->
										<div
											class="uk-card uk-card-default uk-box-shadow-hover-xlarge impx-service-card">
											<div class="uk-card-media-top">
												<img src="images/service-3.jpg" alt="">
											</div>
											<div class="uk-card-body uk-card-small uk-text-center">
												<div class="uk-card-badge uk-label uk-label-danger bg-color-aqua">Spa
												</div>
												<p>Alterum significari idem, ut si diceretur, officia media omnia aut
													pleraque
													servantem vivere</p>
												<a href="spa.php"
													class="uk-button uk-button-default uk-button-small impx-button gold impx-button-outline outline-gold button-wide impx-button-rounded small-border">Learn
													More &raquo;</a>
											</div>
										</div>
									</div><!-- Services Item #3 End -->

								</div>
							</div>
							<!-- Services List End -->

						</div>





					</div>
				</div>
				<!-- SERVICES LIST & BOOKING FORM END -->

				<!-- WHY CHOOSE US? -->
				<div class="uk-padding-large uk-padding-remove-horizontal uk-position-relative bg-img3 impx-features">
					<div class="uk-container">

						<div class="uk-width-3-4@xl uk-width-3-4@l uk-width-1-1@m uk-width-1-1@s uk-margin-medium-top uk-position-relative uk-height-1-1 impx-features-content"
							data-uk-grid>

							<!-- Intro Text -->
							<div class="impx-intro uk-text-left">
								<h2 class="uk-margin-remove-bottom uk-margin-small-top">Why Choose Us?</h2>
								<p class="uk-margin-remove uk-text-uppercase">You can additional subtitle Here.</p>
							</div>
							<!-- Intro Text End -->
							<ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s impx-features-hl uk-grid-medium uk-grid-match uk-margin-top impx-margin-top-small"
								data-uk-grid>
								<li>
									<!-- Reason Item #1 -->
									<div
										class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color1 impx-feature-item uk-position-relative">
										<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Best Value for
											Family</h6>
										<p class="uk-margin-remove  impx-text-lighter">Cur igitur, cum de re conveniat,
											melius nos
											veriusque quam Stoici mallem aut expetendam.</p>
										<span data-uk-icon="icon: users; ratio: 8" class="feature-icon"></span>
									</div>
								</li><!-- Reason Item #1 End -->
								<li>
									<!-- Reason Item #2 -->
									<div
										class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color2 impx-feature-item uk-position-relative">
										<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Services
											Priority</h6>
										<p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat,
											melius nos
											veriusque quam Stoici mallem aut expetendam.</p>
										<span data-uk-icon="icon: bell; ratio: 8" class="feature-icon"></span>
									</div>
								</li><!-- Reason Item #2 End -->
								<li>
									<!-- Reason Item #3 -->
									<div
										class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color3 impx-feature-item uk-position-relative">
										<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Best
											Facilities</h6>
										<p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat,
											melius nos
											veriusque quam Stoici mallem aut expetendam.</p>
										<span data-uk-icon="icon: star; ratio: 8" class="feature-icon"></span>
									</div>
								</li><!-- Reason Item #3 End -->
								<li>
									<!-- Reason Item #4 -->
									<div
										class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color4 impx-feature-item uk-position-relative">
										<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Satisfation
											Guarantee</h6>
										<p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat,
											melius nos
											veriusque quam Stoici mallem aut expetendam.</p>
										<span data-uk-icon="icon: heart; ratio: 8" class="feature-icon"></span>
									</div>
								</li><!-- Reason Item #4 End -->
								<li>
									<!-- Reason Item #5 -->
									<div
										class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color5 impx-feature-item uk-position-relative">
										<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Beatiful
											Panorama</h6>
										<p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat,
											melius nos
											veriusque quam Stoici mallem aut expetendam.</p>
										<span data-uk-icon="icon: image; ratio: 8" class="feature-icon"></span>
									</div>
								</li><!-- Reason Item #5 End -->
								<li>
									<!-- Reason Item #6 -->
									<div
										class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color6 impx-feature-item uk-position-relative">
										<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Enjoy Your
											Time</h6>
										<p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat,
											melius nos
											veriusque quam Stoici mallem aut expetendam.</p>
										<span data-uk-icon="icon: happy; ratio: 8" class="feature-icon"></span>
									</div>
								</li><!-- Reason Item #6 End -->
							</ul>

						</div>

					</div>
				</div>
				<!-- WHY CHOOSE US? END -->

				<!-- PRICING PLANS -->

				<!-- PRICING PLANS END -->

				<!-- TESTIMONIALS CAROUSEL -->
				<div
					class="uk-padding uk-padding-remove-horizontal uk-position-relative impx-section-testimonial uk-background-fixed uk-background-center-center uk-height-1-1">
					<div class="impx-overlay"></div>
					<div class="uk-container">

						<div class="uk-flex uk-flex-right uk-margin-bottom">

							<div class="uk-width-3-5@xl uk-width-3-5@l uk-width-4-5@m">

								<div class="impx-intro uk-text-right uk-light uk-position-relative">
									<h2 class="uk-margin-small-bottom">Testimonials</h2>
									<p class="impx-text-large uk-margin-remove-top uk-margin-medium-bottom">Lorem ipsum
										dolor sit
										amet, consectetur adipiscing elit. Si id dicis, vicimus. Sed ad illum redeo.
										Quia nec
										honesto quic quam honestius nec turpi turpius.</p>
								</div>

								<!-- Testimonials List -->
								<div class="impx-testimonial-list">
									<div data-uk-slider="{autoplay: true, finite: true}">
										<div class="uk-position-relative uk-visible-toggle uk-light">
											<ul class="uk-slider-items uk-child-width-1-1" data-uk-grid>
												<li class="uk-padding uk-padding-remove-vertical">
													<!-- Testimonial List Item 1 -->
													<div class="impx-testimonial-item impx-contrast">
														<div class="impx-testi-container">
															<div class="impx-testi-text">
																<blockquote>
																	<p>Hinc ceteri particulas arripere conati suam
																		quisque videro
																		voluit afferre sententiam. Erit enim mecum, si
																		tecum erit
																		conantur! nostrum! Incendi igitur eos, qui
																		audiunt, vides
																		prima si dederis, danda sunt omnia</p>
																</blockquote>
															</div>
															<div class="uk-text-center">
																<div class="impx-testi-name">
																	<p>Mrs. Smith Yan</p>
																</div>
																<div class="impx-company-name">
																	<p class="bg-color-gold">Book Author</p>
																</div>
															</div>
														</div>
														<div class="impx-testi-image"><img
																src="images/peoples/testi-people1.jpg" alt="People 1" />
														</div>
													</div>
												</li><!-- Testimonial List Item 1 End -->
												<li class="uk-padding uk-padding-remove-vertical">
													<!-- Testimonial List Item 2 -->
													<div class="impx-testimonial-item impx-contrast">
														<div class="impx-testi-container">
															<div class="impx-testi-text">
																<blockquote>
																	<p>Hinc ceteri particulas arripere conati suam
																		quisque videro
																		voluit afferre sententiam. Erit enim mecum, si
																		tecum erit
																		conantur! nostrum! Incendi igitur eos, qui
																		audiunt, vides
																		prima si dederis, danda sunt omnia</p>
																</blockquote>
															</div>
															<div class="uk-text-center">
																<div class="impx-testi-name">
																	<p>Mrs. Smith Yan</p>
																</div>
																<div class="impx-company-name">
																	<p class="bg-color-gold">Book Author</p>
																</div>
															</div>
														</div>
														<div class="impx-testi-image"><img
																src="images/peoples/testi-people2.jpg" alt="People 1" />
														</div>
													</div>
												</li><!-- Testimonial List Item 2 End -->
												<li class="uk-padding uk-padding-remove-vertical">
													<!-- Testimonial List Item 3 -->
													<div class="impx-testimonial-item impx-contrast">
														<div class="impx-testi-container">
															<div class="impx-testi-text">
																<blockquote>
																	<p>Hinc ceteri particulas arripere conati suam
																		quisque videro
																		voluit afferre sententiam. Erit enim mecum, si
																		tecum erit
																		conantur! nostrum! Incendi igitur eos, qui
																		audiunt, vides
																		prima si dederis, danda sunt omnia</p>
																</blockquote>
															</div>
															<div class="uk-text-center">
																<div class="impx-testi-name">
																	<p>Mrs. Smith Yan</p>
																</div>
																<div class="impx-company-name">
																	<p class="bg-color-gold">Book Author</p>
																</div>
															</div>
														</div>
														<div class="impx-testi-image"><img
																src="images/peoples/testi-people3.jpg" alt="People 1" />
														</div>
													</div>
												</li><!-- Testimonial List Item 3 End -->
												<li class="uk-padding uk-padding-remove-vertical">
													<!-- Testimonial List Item 4 -->
													<div class="impx-testimonial-item impx-contrast">
														<div class="impx-testi-container">
															<div class="impx-testi-text">
																<blockquote>
																	<p>Hinc ceteri particulas arripere conati suam
																		quisque videro
																		voluit afferre sententiam. Erit enim mecum, si
																		tecum erit
																		conantur! nostrum! Incendi igitur eos, qui
																		audiunt, vides
																		prima si dederis, danda sunt omnia</p>
																</blockquote>
															</div>
															<div class="uk-text-center">
																<div class="impx-testi-name">
																	<p>Mrs. Smith Yan</p>
																</div>
																<div class="impx-company-name">
																	<p class="bg-color-gold">Book Author</p>
																</div>
															</div>
														</div>
														<div class="impx-testi-image"><img
																src="images/peoples/testi-people4.jpg" alt="People 1" />
														</div>
													</div>
												</li><!-- Testimonial List Item 4 End -->
											</ul>

											<!-- Testimonial Nav -->
											<a class="uk-position-center-left  uk-hidden-hover" href="#"
												data-uk-slidenav-previous data-uk-slider-item="previous"></a>
											<a class="uk-position-center-right uk-hidden-hover" href="#"
												data-uk-slidenav-next data-uk-slider-item="next"></a>
											<!-- Testimonial Nav End -->

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- TESTIMONIALS CAROUSEL END -->

				<!-- CONTACT SECTION -->
				<div class="impx-contact">
					<div id="impx-gmap"></div>

					<div class="impx-overlay   uk-padding uk-padding-remove-bottom uk-padding-remove-horizontal">
						<div class="uk-container">


							<div data-uk-grid class="uk-padding-remove-bottom">
								<!-- Address -->
								<div class="uk-light uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
									<h5 class="uk-heading-line uk-margin-remove-bottom impx-text-white">
										<span>Address</span>
									</h5>
									<p class="impx-text-large uk-margin-top impx-text-light">Jln. Raya Kemerderkaan RI
										No.
										17<br />Indonesia Raya</p>
								</div><!-- Address End-->
								<div class="uk-light uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-1@s">
									<!-- Phone -->
									<h5 class="uk-heading-line uk-margin-bottom impx-text-white"><span>Phone</span></h5>
									<p class="impx-text-large uk-margin-remove impx-text-light">+62 123456789<br />+62
										987456123</p>
								</div><!-- Phone End -->
								<div class="uk-light uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-1@s">
									<!-- Email -->
									<h5 class="uk-heading-line uk-margin-bottom  impx-text-white"><span>Email</span>
									</h5>
									<a href="mailt:#"
										class="impx-text-large impx-text-light">cs@sativa-html.com</a><br />
									<a href="mailt:#" class="impx-text-large impx-text-light">info@sativa-html.com</a>
								</div><!-- Email End -->
							</div>

						</div>
					</div>
				</div>
				<!-- CONTACT SECTION END -->

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
				<script src="js/tiny-date-picker.min.js"></script>
				<script src="js/date-config.js"></script>
				<script src="js/template-config.js"></script>
</body>

</html>