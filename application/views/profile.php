<!DOCTYPE html>
<html>
<head>
	<title>Profile <?= $pelanggan['nama_cust']; ?>&mdash; Online Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/profile.css')?>">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/icomoon/style.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/icomoon/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">



</head>
<body>
	<div class="site-wrap">
	<div class="container">
	    <div class="row profile">
			<div class="col-md-3">
				<div class="profile-sidebar">
					<!-- SIDEBAR USERPIC -->
					<div class="profile-userpic">
						<img src="<?php echo base_url('assets/images/atta.jpg')?>" class="img-responsive" alt="">
					</div>
					<!-- END SIDEBAR USERPIC -->
					<!-- SIDEBAR USER TITLE -->
					<div class="profile-usertitle">
						<div class="profile-usertitle-name">
							<?= $pelanggan['nama_cust']; ?>
						</div>
						<div class="profile-usertitle-job">
							Customer
						</div>
					</div>
					<!-- END SIDEBAR USER TITLE -->
					<!-- SIDEBAR BUTTONS -->
					<div class="profile-userbuttons">
						<a href=""><button type="button" class="btn btn-success btn-sm">Chart</button></a>
						<a href=""><button type="button" class="btn btn-danger btn-sm">Transaksi</button></a>
					</div>
					<!-- END SIDEBAR BUTTONS -->
					<!-- SIDEBAR MENU -->
					<div class="profile-usermenu">
						<!-- NAV MENU -->
						<ul class="nav">
							<li class="active">
								<a href="">
								<i class="glyphicon glyphicon-home"></i>
								Overview </a>
							</li>
							<li>
								<a href="">
								<i class="glyphicon glyphicon-user"></i>
								Account Settings </a>
							</li>

						</ul>

						<!-- NAV BUTTON -->
						<ul class="nav">
							<li class="">
								<a href="<?php echo base_url('UserCo/logout')?>">
								<button type="button" class="btn btn-danger btn-sm" style="height: 40px; width: 100px;">Logout</button>
								</a>
							</li>
						</ul>
					</div>
					<!-- END MENU -->
				</div>
			</div>




			<div class="col-md-9">
	            <div class="profile-content">
					<h3 class="text-Primary">Selamat Datang <?= $pelanggan['nama_cust']; ?>, Nikmati layanan kami bersama
					berbagai mitra toko buku dari berbagai genre, ayo cari buku kesukaan mu disini!</h3>
					<br> <br> <br>
					<h4 class="text-black">Biodata Customer: </h2>
					<h4 class="text-black" style="padding-left: 15px;">Id User: <?= $pelanggan['id_cust']; ?> </h2>
					<h4 class="text-black" style="padding-left: 15px;">Username : <?= $pelanggan['username_cust']; ?> </h2>
					<h4 class="text-black" style="padding-left: 15px;">Nama : <?= $pelanggan['nama_cust']; ?> </h2>
					<h4 class="text-black" style="padding-left: 15px;">E-Mail : <?= $pelanggan['email']; ?> </h2>
					<br> <br> <br>
					<h4 class="text-black text-center">Selamat Berbelanja, salam hangat dari babang mamat <3.</h3>

	            </div>
			</div>






		</div>
	</div>
</div>

	<br>
	<br>

</body>
</html>
