<!DOCTYPE html>
<html>

<head>

    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Properties -->
    <title>Contact Us - Mountain Resort</title>
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
    <!-- <div class="impx-slide-container  "> -->
    <!-- <div class="impx-slideshow-fw"> -->
    <!-- <div class=" uk-position-relative  uk-background-fixed uk-background-center-center uk-height-1-1"> -->
    <div class=" impx-overlay" style="height: 9.5rem;background-color: #393939;"></div>

    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <!-- HERO IMAGE END -->
    <br>
    <div class=" uk-padding uk-padding-remove-horizontal">
        <div class="uk-container" style="width: 50rem;">
            <div data-uk-grid>
                <!-- content -->
                <div class="uk-width-3-3@xl uk-width-3-3@l uk-width-3-3@m uk-width-3-3@s uk-margin-small-top">
                    <div class="bg-color-white uk-padding  impx-padding-medium uk-box-shadow-small">
                        <form action="" method="post" onsubmit="return check()">
                            <div class="uk-position-relative uk-visible-toggle">
                                <h4 class="uk-margin-medium-bottom"><span>Contact Us</span></h4>
                                <ul class="uk-child-width-1-1@xl uk-child-width-1-1@l uk-child-width-1-1@m uk-child-width-1-1@s data-uk-grid uk-grid-match uk-margin-large-bottom"
                                    data-uk-grid>
                                    <li>
                                        <!-- Your name -->
                                        <div class="uk-width-1-2@s">
                                            <label class="uk-form-label uk-text-bold" for="form-stacked-text">Your
                                                name</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input uk-form-width-medium" id="form-stacked-text"
                                                    type="text" placeholder="Your name..." required>
                                            </div>
                                        </div>
                                        <!-- Subject -->
                                        <div class="uk-width-1-2@s">
                                            <label class="uk-form-label uk-text-bold"
                                                for="form-stacked-text">Subject</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input uk-form-width-medium" id="form-stacked-text"
                                                    type="text" placeholder="Subject..." required>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Email -->
                                        <div class="uk-width">
                                            <label class="uk-form-label uk-text-bold"
                                                for="form-stacked-text">Email</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input uk-form-width-medium" id="form-stacked-text"
                                                    type="email" placeholder="Your email..." required>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="uk-width">
                                            <label class="uk-form-label uk-text-bold"
                                                for="form-stacked-text">Message</label>
                                            <div class="uk-form-controls">
                                                <textarea class="uk-textarea" rows="5" placeholder="Your message..."
                                                    aria-label="Textarea" required></textarea>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <button class="uk-button uk-button-primary uk-border-rounded" type="submit"><strong>Send
                                        Message</strong></button>
                            </div>
                        </form>
                    </div>
                    <br>

                </div>

                <!-- main content end -->



            </div>
        </div>
    </div>

    <!-- CONTACT INFO -->
    <?php include './components/contactInfo.html'; ?>
    <!-- CONTACT INFO END -->
    <!-- FOOTER -->
    <?php include './components/footer.html'; ?>
    <!-- FOOTER END -->

    <!-- Javascript -->
    <script>

        function check() {
            var name = document.getElementById("form-stacked-text").value;
            alert("Your enquiry has been forwarded, Thank you " + name + "!")
        }
    </script>
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