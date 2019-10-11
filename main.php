<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Easybook - Hotel Booking Directory Listing Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="pin">
            <div class="pulse"></div>
        </div>
    </div>
    <!--loader end-->
    <!-- Main  -->
    <div id="main">
        <!-- header-->
        <header class="main-header">
            <!-- header-top-->

        </header>
        <!--  header end -->
        <!--  wrapper  -->
        <div id="wrapper">
            <!-- content-->

            <div class="content">
                <!-- Map -->
                <div class="map-container column-map right-pos-map fix-map hid-mob-map">
                    <div id="map-main"></div>
                    <ul class="mapnavigation">
                        <li><a href="#" class="prevmap-nav"><i class="fas fa-caret-left"></i> Prev</a></li>
                        <li><a href="#" class="nextmap-nav">Next <i class="fas fa-caret-right"></i></a></li>
                    </ul>
                    <div class="map-close"><i class="fas fa-times"></i></div>
                    <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="Qué Buscas ?">
                </div>
                <!-- Map end -->
                <!--col-list-wrap -->
                <div class="searchMaper">
                    <div class="row">
                        <!-- col-list-search-input-item -->
                        <div class="profile-edit-container">
                            <div class="header-search-input-item fl-wrap location autocomplete-container">
                                <label>Destination or Hotel Name</label>
                                <span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>
                                <input type="text" placeholder="Location" class="autocomplete-input" id="autocompleteid" value="" />
                                <a href="#"><i class="fal fa-dot-circle"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--col-list-wrap end -->
                <div class="limit-box fl-wrap"></div>
            </div>
            <!-- content end-->
        </div>
        <!--wrapper end -->
        <!--footer -->
        <footer class="main-footer">
            <!--subscribe-wrap-->

            <!--sub-footer end -->
        </footer>
        <!--footer end -->
        <!--register form -->
        <div class="main-register-wrap modal">
            <div class="reg-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
                    <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                        <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                    </ul>
                    <!--tabs -->
                    <div id="tabs-container">
                        <div class="tab">
                            <!--tab -->
                            <div id="tab-1" class="tab-content">
                                <h3>Sign In <span>Easy<strong>Book</strong></span></h3>
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address <span>*</span> </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password <span>*</span> </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <!--tab end -->
                            <!--tab -->
                            <div class="tab">
                                <div id="tab-2" class="tab-content">
                                    <h3>Sign Up <span>Easy<strong>Book</strong></span></h3>
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>Full Name <span>*</span> </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Email Address <span>*</span></label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password <span>*</span></label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--tab end -->
                        </div>
                        <!--tabs end -->
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div class="soc-log fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->
        <a class="to-top"><i class="fas fa-caret-up"></i></a>
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtX-f49XIUGH3gzMtn9kVNrtSQfpIlZ0A&libraries=places&callback=initAutocomplete"></script>
    <script type="text/javascript" src="js/mapplugins.js"></script>
    <script type="text/javascript" src="js/maps.js"></script>

    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/componentsBuilder.js"></script>
</body>

</html>