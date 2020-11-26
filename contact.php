<?php

if($_POST["submit"]) {
    $recipient="psarmmiey@gmail.com";
    $subject=$_POST['subject'];
    $sender=$_POST["name"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
    print('<script>alert("<p>Thank you! Your message has been sent.</p>")</script>');

}

?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from duruthemes.com/demo/html/doro/multipage-light/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 00:04:21 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AMTOXY Enterprises</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/et-lineicons.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-144098545-1');
    </script>
</head>
<body>
    <div id="doro-page"> <a href="#" class="js-doro-nav-toggle doro-nav-toggle"><i></i></a>
        <!-- Sidebar Section -->
        <aside id="doro-aside">
            <!-- Logo -->
            <h1 id="doro-logo">
                <a href="index-2.html">AMTOXY<br><span>Enterprises</span></a>
            </h1>
            <!-- Menu -->
            <nav id="doro-main-menu">
                <ul>
                    <li class="doro-active"><a href="index.html">Home</a></li>
                    <li><a href="consultancy.html">Consultancy</a></li>
                    <li><a href="services.html">Educational Services</a></li>
                    <li><a href="general_mechandize.html">General Mechandize</a></li>
                    <li class="doro-active"><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <!-- Sidebar Footer -->
            <div class="doro-footer">
                <ul>
                    <li><a href="#"><i class="ti-facebook font-14px gray-icon"></i></a></li>
                    <li><a href="#"><i class="ti-twitter-alt font-14px gray-icon"></i></a></li>
                    <li><a href="#"><i class="ti-instagram font-14px gray-icon"></i></a></li>
                    <li><a href="#"><i class="ti-linkedin font-14px gray-icon"></i></a></li>
                </ul>
                <p><small>&copy; 2020 AMTOXY</small></p>
            </div>
        </aside>
        <!-- Main Section -->
        <div id="doro-main">
            <!-- Contact -->
            <div class="doro-contact">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12"> <span class="heading-meta">Location</span>
                            <h2 class="doro-heading animate-box" data-animate-effect="fadeInLeft">Contact Us</h2> </div>
                    </div>
                    <!-- Map Section-->
                    <div class="map-section">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
                                <div id="contactMap"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Contact Info -->
                        <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInLeft">
                            <h3 class="doro-about-heading">Contact Info</h3>

                            <p><i class="et-phone"></i> +234 807 567 2248</p>
                            <p><i class="et-envelope"></i> contact@amtoxy.com</p>
                            <p><i class="et-map-pin"></i> 7, Itoko Titun Street, Labalwa Road, Abeokuta, Ogun State, Nigeria.</p>
                            <p><i class="et-map-pin"></i> 114, bonojo Street, Ijebu Ode, Ogun State, Nigeria</p>
                        </div>
                        <!-- Contact Form -->
                        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                            <h3 class="doro-about-heading">Contact Form</h3>
                            <p>We would like to hear from you</p>
                            <form method="post" class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="name" required> </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email" name="senderEmail" required> </div>
                                </div>
                                 <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" name="subject"> </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-contact" value="Say Hello!"> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="doro-footer2">
                <div class="doro-narrow-content">
                    <div class="row">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <p class="doro-lead">&copy; 2020 AMTOXY. All rights reserved</p>
                        </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <h2 class="text-center">AMTOXY</h2> </div>
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <ul class="social-network">
                                <li><a href="#"><i class="ti-facebook font-14px black-icon"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt font-14px black-icon"></i></a></li>
                                <li><a href="#"><i class="ti-instagram font-14px black-icon"></i></a></li>
                                <li><a href="#"><i class="ti-linkedin font-14px black-icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe2q1gFSd75jKUnTDPq0nZWaMlEu6vL30"></script>
    <script src="js/googlemap.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/sticky-kit.min.js"></script>
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from duruthemes.com/demo/html/doro/multipage-light/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Nov 2020 00:04:22 GMT -->
</html>