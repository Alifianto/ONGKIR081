<?php
$nama = '';
$jarak = '';
$harga = 0;
if (isset($_POST['submit'])) {
	// file ini digunakan untuk menyimpan hasil pencarian user ke dalam file txt
	// jika sudah maka tambahkan ke dalam file txt
	$nama = $_POST['nama'];
	$jarak = $_POST['jarak'];
	$harga = intval($jarak) * 5000;
	// cek apakah file txt sudah ada?
	if (file_exists("process.txt")) {
		// jika sudah ada, tulis ke dalam file txt
		$file = fopen("process.txt", "a");
		fwrite($file, "\n" . $nama . "|" . $jarak . "|" . $harga);
		fclose($file);
	} else {
		// jika belum ada, buat file txt
		$file = fopen("process.txt", "w");
		fwrite($file, $nama . "|" . $jarak . "|" . $harga);
		fclose($file);
	}
	// menutup file txt
}
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
						<img src="assets/images/kurir.jpg" alt="">
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
	<div class="container pb-190">
		<div class="row">
			<div class="col-lg-12">
				<div class="appie-section-title">
					<h3 class="appie-title">How does it work</h3>
					<p>The full monty spiffing good time no biggie cack grub fantastic. </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="appie-single-counter mt-30 wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="200ms">
					<div class="counter-content">
						<div class="icon">
							<img src="assets/images/icon/counter-icon-1.svg" alt="">
						</div>
						<h3 class="title"><span class="counter-item">45</span>k+</h3>
						<p>Users</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="appie-single-counter mt-30 item-2 wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="400ms">
					<div class="counter-content">
						<div class="icon">
							<img src="assets/images/icon/counter-icon-2.svg" alt="">
						</div>
						<h3 class="title"><span class="counter-item">108</span>+</h3>
						<p>Order Done</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="appie-single-counter mt-30 item-4 wow animated fadeInUp" data-wow-duration="2000ms" data-wow-delay="800ms">
					<div class="counter-content">
						<div class="icon">
							<img src="assets/images/icon/counter-icon-4.svg" alt="">
						</div>
						<h3 class="title"><span class="counter-item">725</span>k+</h3>
						<p>Happy Client</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<figure>
					<img src="assets/images/aa.png" alt="">
				</figure>
			</div>
			<div class="col-md-8">
				<div class="contact-form">
					<h4>Let’s Connect</h4>
					<p>Integer at lorem eget diam facilisis lacinia ac id massa.</p>
					<form action="#" method="post" class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda">
							</div>
						</div>
						<div class="col-md-12 mb-3">
							<div class="form-group">
								<div class="position-relative ">
									<input type="text" class="form-control mb-2" id="jarak" name="jarak" placeholder="Jarak">
									<span class="position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
										<span class="text-muted">x Rp. 5.000</span>
									</span>
								</div>
							</div>
						</div>
						<div class="col-sm-12 mb-3">
							<div class="form-group">
								Harga : <span id="result"></span>
							</div>
						</div>
						<div class="col-md-12 d-flex justify-content-center">
							<button type="submit" class="btn btn-primary mr-3" name="submit">Search</button>
							<a class="btn btn-success" href="file.php">Cek Data</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--====== APPIE FOOTER PART START ======-->

	<div class="container">
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
	<script>
		// cek apakah user sudah mengisi form
		var nama = document.getElementById('nama');
		var jarak = document.getElementById('jarak');
		$('button[name="submit"]').click(function(e) {
			if (nama.value == '') {
				alert('Silahkan isi nama anda');
				nama.focus();
				return false;
			} else if (jarak.value == '') {
				alert('Silahkan isi jarak anda');
				jarak.focus();
				return false;
			} else {
				// jika sudah isi, maka akan mengirimkan data ke server
				var form = document.getElementById('form');
				$(form).submit();
			}
		});
		if ('<?= $nama ?>' != '') {

			document.getElementById('nama').value = '<?= $nama ?>';
		}
		if ('<?= $jarak ?>' != '') {
			document.getElementById('jarak').value = '<?= $jarak ?>';
		}
		if ('<?= $harga ?>' != '') {
			var result = '<?= $harga ?>';
			result = result.replace(/\D/g, '');
			result = result.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
			document.getElementById('result').innerHTML = 'Rp. ' + result;
		}
	</script>
</body>

</html>