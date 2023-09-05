<!DOCTYPE html>
<html lang="en">

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

<body>
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
            </div>
        </div>

    </header>
    <!-- HEADER END -->

    <!-- booking form -->
    <div class="bg-color-aqua uk-padding impx-padding-medium" style="width: 30rem; margin: auto;">
        <div class="impx-hp-booking-form side-form uk-margin-bottom uk-margin-remove-top">
            <h6 class="uk-heading-line uk-text-center impx-text-white uk-text-uppercase"><span>Booking
                    Form</span></h6>
            <form class="">
                <div class="uk-margin">
                    <div class="uk-form-controls">
                        <div class="uk-inline">
                            <label class="uk-form-label">Email</label>
                            <span class="uk-form-icon" data-uk-icon="icon: mail"></span>
                            <input class="uk-input booking-email uk-border-rounded" type="text"
                                placeholder="your e-mail">
                        </div>
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-controls">
                        <div class="uk-inline">
                            <label class="uk-form-label">Arrival</label>
                            <span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
                            <input class="uk-input booking-arrival uk-border-rounded" type="text"
                                placeholder="m/dd/yyyy">
                        </div>
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-controls">
                        <div class="uk-inline">
                            <label class="uk-form-label">Departure</label>
                            <span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
                            <input class="uk-input booking-departure uk-border-rounded" type="text"
                                placeholder="m/dd/yyyy">
                        </div>
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-controls uk-position-relative">
                        <label class="uk-form-label" for="form-guest-select">Guest</label>
                        <span class="uk-form-icon select-icon" data-uk-icon="icon: users"></span>
                        <select class="uk-select uk-border-rounded" id="form-guest-select">
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
                        <select class="uk-select uk-border-rounded" id="form-rooms-select">
                            <option value="">Please select...</option>
                            <option value="room_1">Single</option>
                            <option value="room_2">Double</option>
                            <option value="room_3">Primier</option>
                            <option value="room_4">Deluxe</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="uk-form-label empty-label">&nbsp;</label>
                    <button class="uk-button uk-width-1-1">Book Now!</button>
                </div>
            </form>
        </div>
    </div>
    <!-- booking form -->
</body>

</html>