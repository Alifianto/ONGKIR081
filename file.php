<?php
// baca data yang ada pada file process.txt
$file = fopen("process.txt", "r");
$data = file_get_contents("process.txt");
fclose($file);
?>
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Appie App Landing HTML Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="assets/css/slick.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="assets/css/custom-animation.css">
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">


</head>

<body>
    <!--====== PRELOADER PART START ======-->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">Preloader Close</div>
        </div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>
        <div class="layer layer-three"><span class="overlay"></span></div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->
    <!--====== PART START ======-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="appie-hero-thumb-6">
                    <div class="thumb wow animated fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <img src="assets/images/hero.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appie-hero-content appie-hero-content-6">
                    <span>Welcome To Creative App.</span>
                    <h1 class="appie-title">Get started with Appie Template.</h1>
                    <p>Lost the plot so I said nancy boy I don't want no agro bleeder bum bag easy peasy cheesed off cheers ruddy.</p>
                    <ul>
                        <li><a href="#"><i class="fab fa-apple"></i> <span>Available on the <span>App Store</span></span></a></li>
                        <li><a class="item-2" href="#"><i class="fab fa-google-play"></i> <span>Available on the <span>Google Play</span></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>List Pencarian</h4>
                <p>Berikut list pencarian harga kirim</p>
            </div>
            <div class="col-md-4 text-center">
                <a class="btn btn-success" href="index.php"><i class="fal fa-home"></i> Home</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <th>Nama</th>
                <th>Jarak</th>
                <th>Harga</th>
            </thead>
            <tbody>
                <?php
                // membaca data dari file process.txt
                if (!empty($data)) {
                    $data = explode("\n", $data);
                    foreach ($data as $value) {
                        $data = explode("|", $value);
                        echo "<tr>";
                        echo "<td>" . $data[0] . "</td>";
                        echo "<td>" . $data[1] . " KM</td>";
                        echo "<td>" . $data[2] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <!--====== APPIE FOOTER PART START ======-->

    <div class="container mb-3">
        <div class="copyright-text text-center">
            <p>Copyright © 2021 Appie. All rights reserved.</p>
        </div>
    </div>

    <!--====== APPIE FOOTER PART ENDS ======-->


    <!--====== APPIE BACK TO TOP PART ENDS ======-->
    <div class="back-to-top back-to-top-6">
        <a href="#"><i class="fal fa-arrow-up"></i></a>
    </div>
    <!--====== APPIE BACK TO TOP PART ENDS ======-->


    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!--====== TweenMax js ======-->
    <script src="assets/js/TweenMax.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>
</body>

</html>