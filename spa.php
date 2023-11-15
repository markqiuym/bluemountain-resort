<!DOCTYPE html>
<html>

<head>

	<!-- Standard Meta -->
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Properties -->
	<title>SPA - Mountain Resort</title>
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
	<div class="gtranslate_wrapper"></div>
	<script>window.gtranslateSettings = { "default_language": "en", "native_language_names": true, "detect_browser_language": true, "languages": ["en", "zh-CN", "ru", "de"], "wrapper_selector": ".gtranslate_wrapper", "switcher_horizontal_position": "right", "float_switcher_open_direction": "bottom", "flag_style": "3d" }</script>
	<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
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
	<div class="impx-slide-container spa hero-spa uk-background-fixed uk-background-center-center uk-height-1-1">
		<div class="impx-overlay"></div>

		<div class="uk-container uk-position-relative uk-height-1-1">
			<div class="uk-position-center uk-flex uk-flex-middle">
				<div class="impx-slide-fw-caption spa">
					<div class=" center bottom"></div>
					<h1 class="uk-margin-remove impx-text-shadow uk-text-center impx-text-white">Mountain Spa</h1>
					<!-- title -->
					<p
						class="uk-text-large impx-text-lighter uk-margin-remove impx-text-shadow uk-text-center uk-text-uppercase">
						Our Spa Service</p><!-- subtitle -->
				</div>
			</div>
		</div>
	</div>
	<!-- HERO IMAGE END -->

	<!-- HIGHLIGHT -->
	<div class="impx-content style3 uk-padding uk-padding-remove-horizontal pattern-1 bg-color-aqua">
		<div class="uk-container">

			<!-- welcome intro -->
			<div class="uk-flex-center" data-uk-grid>
				<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s">
					<div class="impx-intro uk-text-center uk-light spa">
						<h2 class="uk-margin-small-bottom uk-heading-line line-light"><span>Welcome to Mountain
								Spa</span>
						</h2>
						<p class="impx-text-large uk-margin-bottom">Indulge in opulent serenity at the pinnacle of
							relaxation – welcome to "Mountain Spa" at Mountains Resort, where the art of well-being
							reaches new heights.
							Escape the ordinary and elevate your senses in our luxurious sanctuary nestled amidst the
							breath-taking mountain landscapes. Our world-class spa beckons you with an exclusive blend
							of tranquillity and sophistication, promising an unparalleled escape from the demands of
							everyday life. Indulge in opulent serenity at the pinnacle of relaxation – welcome to
							"Mountain Spa" at Mountains Resort, where the art of well-being reaches new heights. .</p>
					</div>
				</div>
			</div>
			<!-- welcome intro end -->

			<div class="uk-flex-center uk-margin-small" data-uk-grid>
				<div class="uk-width-3-4@xl uk-width-3-4@l uk-width-3-4@m uk-position-relative uk-position-z-index">
					<!-- highlight items -->
					<ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-3@s impx-features-list spa uk-flex-center"
						data-uk-grid>
						<li>
							<!-- service item #1 -->
							<div class="uk-position-relative">
								<img src="images/spa-feature-1.jpg" alt="resort"
									class="uk-border-circle uk-box-shadow-medium img-60 img-centered">
								<div class="impx-overlay overlay-outline padding-xxlarge pattern-1 img-60 img-centered">
									<div class="impx-feature-caption">
										<i class="fa fa-star-o fa-2x impx-text-white circle"></i>
										<h5
											class="impx-text-white impx-text-shadow uk-margin-small-top uk-margin-remove-bottom">
											Ayurveda Spa</h5>
									</div>
								</div>
							</div>
						</li><!-- highlight item #1 end -->
						<li>
							<!-- highlight item #2 -->
							<div class="uk-position-relative">
								<img src="images/spa-feature-4.jpg" alt="resort"
									class="uk-border-circle uk-box-shadow-medium img-60 img-centered">
								<div class="impx-overlay overlay-outline padding-xxlarge pattern-1 img-60 img-centered">
									<div class="impx-feature-caption">
										<i class="fa fa-cutlery fa-2x impx-text-white  circle"></i>
										<h5
											class="impx-text-white impx-text-shadow uk-margin-small-top uk-margin-remove-bottom">
											Luxury Spa</h5>
									</div>
								</div>
							</div>
						</li><!-- highlight item #2 end -->
						<li>
							<!-- highlight item #3 -->
							<div class="uk-position-relative">
								<img src="images/spa-feature-3.jpg" alt="resort"
									class="uk-border-circle uk-box-shadow-medium img-60 img-centered">
								<div class="impx-overlay overlay-outline padding-xxlarge pattern-1 img-60 img-centered">
									<div class="impx-feature-caption">
										<i class="fa fa-asterisk fa-2x impx-text-white circle"></i>
										<h5
											class="impx-text-white impx-text-shadow  uk-margin-small-top uk-margin-remove-bottom">
											Massage Spa</h5>
									</div>
								</div>
							</div>
						</li><!-- highlight item #3 end -->
					</ul>
					<!-- highlight items -->
				</div>
			</div>

		</div>
	</div>
	<!-- HIGHLIGHT END -->

	<!-- SPA SERVICES -->
	<div
		class="uk-padding uk-padding-remove-horizontal uk-position-relative impx-sections-spa uk-background-fixed uk-background-center-center uk-height-1-1">
		<div class="impx-overlay dark"></div>
		<div class="uk-container">

			<div class="uk-flex-center" data-uk-grid>
				<div class="uk-width-3-5@xl uk-width-3-5@l uk-width-1-1@m uk-width-1-1@s">
					<!-- intro -->
					<div class="impx-intro uk-text-center uk-position-relative uk-position-z-index">
						<h2 class="impx-text-white uk-margin-remove-bottom">Our Spa Services</h2>
					</div>
					<!-- intro end -->
				</div>
			</div>

			<!-- services list -->
			<ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-1@s data-uk-grid impx-spa-services uk-position-relative uk-position-z-index uk-grid-match uk-margin-bottom"
				data-uk-grid>
				<li>
					<!-- service item #1 -->
					<div class="impx-spa-service">
						<div class="uk-grid uk-grid-collapse">
							<div
								class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s uk-position-relative">
								<div class="uk-height-1-1 uk-cover-container">
									<canvas width="290" height="220"></canvas>
									<img src="images/spa-service-1.jpg" alt="resort" class="" data-uk-cover>
								</div>
							</div>
							<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
								<div class="impx-spa-content">
									<span class="uk-label uk-label-success small">from $50</span>
									<h4 class="uk-margin-remove">Spa Service</h4>
									<p>Atqui perspicuum est partes opus est exemplis hoc facere</p>
									<ul class="uk-list">
										<li><i class="fa fa-snowflake-o"></i> Quae qui non vident</li>
										<li><i class="fa fa-signing"></i>Tenesne igitur, inquam</li>
										<li><i class="fa fa-hotel"></i>praeclare inter cohaerere</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li><!-- service item #1 end -->
				<li>
					<!-- service item #2 -->
					<div class="impx-spa-service">
						<div class="uk-grid uk-grid-collapse">
							<div
								class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s uk-position-relative">
								<div class="uk-height-1-1 uk-cover-container">
									<canvas width="290" height="220"></canvas>
									<img src="images/spa-service-2.jpg" alt="resort" class="" data-uk-cover>
								</div>
							</div>
							<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
								<div class="impx-spa-content">
									<span class="uk-label uk-label-success small">from $60</span>
									<h4 class="uk-margin-remove">Spa Service</h4>
									<p>Atqui perspicuum est partes opus est exemplis hoc facere</p>
									<ul class="uk-list">
										<li><i class="fa fa-snowflake-o"></i> Quae qui non vident</li>
										<li><i class="fa fa-signing"></i>Tenesne igitur, inquam</li>
										<li><i class="fa fa-hotel"></i>praeclare inter cohaerere</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li><!-- service item #2 end -->
				<li>
					<!-- service item #3 -->
					<div class="impx-spa-service uk-position-relative">
						<div class="uk-grid uk-grid-collapse">
							<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
								<div class="impx-spa-content">
									<span class="uk-label uk-label-success small">from $70</span>
									<h4 class="uk-margin-remove">Spa Service</h4>
									<p>Atqui perspicuum est partes opus est exemplis hoc facere</p>
									<ul class="uk-list">
										<li><i class="fa fa-snowflake-o"></i> Quae qui non vident</li>
										<li><i class="fa fa-signing"></i>Tenesne igitur, inquam</li>
										<li><i class="fa fa-hotel"></i>praeclare inter cohaerere</li>
									</ul>
								</div>
							</div>
							<div
								class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s uk-position-relative">
								<div class="uk-height-1-1 uk-cover-container">
									<canvas width="290" height="220"></canvas>
									<img src="images/spa-service-3.jpg" alt="resort" class="" data-uk-cover>
								</div>
							</div>
						</div>
					</div>
				</li><!-- service item #3 end -->
				<li>
					<!-- service item #4 -->
					<div class="impx-spa-service">
						<div class="uk-grid uk-grid-collapse">
							<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
								<div class="impx-spa-content">
									<span class="uk-label uk-label-success small">from $80</span>
									<h4 class="uk-margin-remove">Spa Service</h4>
									<p>Atqui perspicuum est partes opus est exemplis hoc facere</p>
									<ul class="uk-list">
										<li><i class="fa fa-snowflake-o"></i> Quae qui non vident</li>
										<li><i class="fa fa-signing"></i>Tenesne igitur, inquam</li>
										<li><i class="fa fa-hotel"></i>praeclare inter cohaerere</li>
									</ul>
								</div>
							</div>
							<div
								class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s uk-position-relative">
								<div class="uk-height-1-1 uk-cover-container">
									<canvas width="290" height="220"></canvas>
									<img src="images/spa-service-4.jpg" alt="resort" class="" data-uk-cover>
								</div>
							</div>
						</div>
					</div>
				</li><!-- service item #4 end -->
			</ul>
			<!-- services items end -->
		</div>
	</div>
	<!-- SPA SERVICES END -->

	<!-- PRICING PLANS -->
	<div class="uk-padding">
		<div class="uk-container uk-container-center">

			<div class="uk-flex-center" data-uk-grid>
				<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s">

					<!-- Intro -->
					<div class="impx-intro  uk-text-center">
						<h2 class="uk-margin-remove-bottom">Spa Package Pricing</h2>
						<p
							class="impx-text-large uk-margin-medium-bottom uk-margin-small-top impx-margin-bottom-remove">
							Mauris quis nisi vitae dolor laoreet auris in quam nec diam sagittis aliquet vel molesti
							turpis eu dolor posuere lacinia penatibus aliquam ut Ita fit cum gravior, tum etiam
							splendidior oratio</p>
					</div>
					<!-- Intro End -->

				</div>
			</div>

			<!-- Services Section -->
			<div class="uk-flex uk-flex-center uk-margin-small-top uk-margin-medium-bottom impx-margin-bottom-remove">
				<div class="uk-width-3-4@xl uk-width-3-4@l uk-width-1-1@m uk-width-1-1@s">
					<!-- pricing items -->
					<ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-3@s uk-grid-collapse impx-promo-pricing-list"
						data-uk-grid>
						<li>
							<!-- pricing item #1 -->
							<div class="impx-promo-pricing uk-box-shadow-large uk-light">
								<div class=" uk-padding bg-color-aqua">
									<div class="uk-position-relative uk-margin-bottom">
										<img src="images/spa-feature-1.jpg" class="uk-border-circle img-70 img-centered"
											alt="">
										<div class="impx-overlay overlay-outline padding-xxlarge img-70 img-centered">
										</div>
									</div>
									<div class="uk-text-center">
										<h4 class="uk-heading-line uk-margin-small-bottom"><span>Silver</span></h4>
										<span class="uk-label uk-label-success impx-text-aqua uk-text-bold">start from
											$299</span>
									</div>
									<ul class="uk-list">
										<li><i class="fa fa-star"></i> Quae qui non vident, nihil</li>
										<li><i class="fa fa-star"></i> praeclare inter se cohaerere</li>
										<li><i class="fa fa-star"></i> Tenesne igitur, inquam</li>
									</ul>
									<div class="uk-text-center">
										<a href="#"
											class="uk-button impx-button small impx-button-outline small-border">View
											Detail <i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</li><!-- pricing item #1 end -->
						<li class="uk-position-relative uk-position-z-index">
							<!-- pricing item #2 -->
							<div class="impx-promo-pricing uk-box-shadow-xlarge uk-light featured">
								<div class="uk-position-relative uk-padding bg-color-gold">
									<div class="uk-position-relative uk-margin-bottom">
										<img src="images/spa-feature-2.jpg" class="uk-border-circle img-70 img-centered"
											alt="">
										<div class="impx-overlay overlay-outline padding-xxlarge img-70 img-centered">
										</div>
									</div>
									<div class="uk-text-center">
										<h3 class="uk-heading-line uk-margin-small-bottom"><span>Gold</span></h3>
										<span class="uk-label uk-label-success impx-text-gold uk-text-bold">start from
											$399</span>
									</div>
									<ul class="uk-list uk-list-large">
										<li><i class="fa fa-star"></i> Quae qui non vident, nihil</li>
										<li><i class="fa fa-star"></i> praeclare inter se cohaerere</li>
										<li><i class="fa fa-star"></i> Tenesne igitur, inquam</li>
									</ul>
									<div class="uk-text-center">
										<a href="#"
											class="uk-button impx-button small impx-button-outline small-border">View
											Detail <i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</li><!-- pricing item #2 end -->
						<li class="uk-position-relative">
							<!-- pricing item #3 -->
							<div class="impx-promo-pricing uk-box-shadow-large uk-light">
								<div class="uk-position-relative uk-padding bg-color-aqua">
									<div class="uk-position-relative uk-margin-bottom">
										<img src="images/spa-feature-3.jpg" class="uk-border-circle img-70 img-centered"
											alt="">
										<div class="impx-overlay overlay-outline padding-xxlarge img-70 img-centered">
										</div>
									</div>
									<div class="uk-text-center">
										<h4 class="uk-heading-line uk-margin-small-bottom"><span>Diamond</span></h4>
										<span class="uk-label uk-label-success impx-text-aqua uk-text-bold">start from
											$499</span>
									</div>
									<ul class="uk-list">
										<li><i class="fa fa-star"></i> Quae qui non vident, nihil</li>
										<li><i class="fa fa-star"></i> praeclare inter se cohaerere</li>
										<li><i class="fa fa-star"></i> Tenesne igitur, inquam</li>
									</ul>
									<div class="uk-text-center">
										<a href="#"
											class="uk-button impx-button small impx-button-outline small-border">View
											Detail <i class="fa fa-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</li><!-- pricing item #3 end -->
					</ul>
					<!-- pricing items end -->
				</div>
			</div>

		</div>
	</div>
	<!-- PRICING PLANS END -->

	<!-- THERAPHIST LIST -->
	<div
		class="uk-padding uk-position-relative uk-background-fixed uk-background-center-center uk-height-1-1 impx-section-therapthist">
		<div class="impx-overlay darker"></div>
		<div class="uk-container uk-container-center">

			<div class="uk-flex-center" data-uk-grid>
				<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s">

					<!-- Intro -->
					<div class="impx-intro  uk-text-center uk-position-relative">
						<h2 class="impx-text-white uk-margin-remove-bottom">Meet Our Therapists</h2>
						<p class="impx-text-large uk-margin-small-top uk-margin-medium-bottom impx-text-lighter">Embark
							on a journey of unparalleled relaxation and rejuvenation at "Mountain Spa," where our
							therapists are not just artisans of touch, but architects of serenity. Nestled in the heart
							of pristine mountain landscapes, our spa transcends the ordinary, offering a sanctuary where
							expertise meets opulence.
							Our handpicked team of therapists, distinguished by their mastery in the art of wellness, is
							devoted to crafting bespoke experiences that elevate the senses. Each session is a symphony
							of skilled touch, personalized care, and a commitment to restoring harmony to both body and
							soul.
						</p>
					</div>
					<!-- Intro End -->

				</div>
			</div>

			<div class="uk-flex uk-flex-center uk-margin-small-bottom">
				<div class="uk-width-1-1">
					<!-- Therapists -->
					<ul class="uk-child-width-1-4@xl uk-child-width-1-4@l uk-child-width-1-2@m uk-child-width-1-2@s uk-grid-match"
						data-uk-grid>
						<li>
							<!-- Therapist #1 -->
							<div
								class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card">
								<div class="uk-card-header impx-padding-medium-left impx-padding-medium-right">
									<div class="uk-flex-middle" data-uk-grid>
										<div class="uk-width-expand">
											<h5 class="uk-card-title uk-margin-remove-bottom">Jane Doe</h5>
										</div>
										<div class="uk-width-auto">
											<div class="uk-label small bg-color-aqua">therapist</div>
										</div>
									</div>
								</div>
								<div class="uk-card-media-top">
									<img src="images/peoples/therapist-1.jpg" alt="">
								</div>
								<div class="uk-card-body impx-padding-medium uk-text-center">
									<p>Crafting tranquillity with expert hands, surrender to the serenity sculptor's
										soothing touch.</p>
								</div>
							</div>
						</li><!-- Therapist #1 end -->
						<li>
							<!-- Therapist #2 -->
							<div
								class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card">
								<div class="uk-card-header  impx-padding-medium-left impx-padding-medium-right">
									<div class="uk-flex-middle" data-uk-grid>
										<div class="uk-width-expand">
											<h5 class="uk-card-title uk-margin-remove-bottom">Memy Mark</h5>
										</div>
										<div class="uk-width-auto">
											<div class="uk-label small bg-color-aqua">therapist</div>
										</div>
									</div>
								</div>
								<div class="uk-card-media-top">
									<img src="images/peoples/therapist-2.jpg" alt="">
								</div>
								<div class="uk-card-body impx-padding-medium uk-text-center">
									<p>Renew and refresh as the rejuvenation maestro orchestrates a symphony of
										revitalizing rituals.</p>
								</div>
							</div>
						</li><!-- Therapist #2 end -->
						<li>
							<!-- Therapist #3 -->
							<div
								class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card">
								<div class="uk-card-header impx-padding-medium-left impx-padding-medium-right">
									<div class="uk-flex-middle" data-uk-grid>
										<div class="uk-width-expand">
											<h5 class="uk-card-title uk-margin-remove-bottom">Melia Tonny</h5>
										</div>
										<div class="uk-width-auto">
											<div class="uk-label small bg-color-aqua">therapist</div>
										</div>
									</div>
								</div>
								<div class="uk-card-media-top">
									<img src="images/peoples/therapist-3.jpg" alt="">
								</div>
								<div class="uk-card-body impx-padding-medium uk-text-center">
									<p>Transform stress into bliss with the blissful alchemist's magical fusion of
										therapies.</p>
								</div>
							</div>
						</li><!-- Therapist #3 end -->
						<li>
							<!-- Therapist #4 -->
							<div
								class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card">
								<div class="uk-card-header impx-padding-medium-left impx-padding-medium-right">
									<div class="uk-flex-middle" data-uk-grid>
										<div class="uk-width-expand">
											<h5 class="uk-card-title uk-margin-remove-bottom">Khiva Cecilia</h5>
										</div>
										<div class="uk-width-auto">
											<div class="uk-label small bg-color-aqua">therapist</div>
										</div>
									</div>
								</div>
								<div class="uk-card-media-top">
									<img src="images/peoples/therapist-4.jpg" alt="">
								</div>
								<div class="uk-card-body impx-padding-medium uk-text-center">
									<p>Relax and unwind as the relaxation virtuoso conducts a masterpiece of peaceful
										indulgence.</p>
								</div>
							</div>
						</li><!-- Therapist #4 end -->
					</ul>
					<!-- Therapists end -->
				</div>
			</div>

		</div>
	</div>
	<!-- THERAPHIST LIST -->

	<!-- CONTACT SECTION -->
	<!-- CONTACT INFO -->
	<?php include './components/contactInfo.html'; ?>
	<!-- CONTACT INFO END -->
	<!-- CONTACT SECTION END -->

	<!-- FOOTER -->
	<?php include './components/footer.html'; ?>
	<!-- Scroll to Top -->
	<a href="#top" class="to-top fa fa-long-arrow-up" data-uk-scroll></a>
	<!-- Scroll to Top End -->
	</footer>
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