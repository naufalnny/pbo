<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url('assets/images/logopng.png')?>">
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

<header class="site-navbar" role="banner" id="myHeader">
  <div class="site-navbar-top">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
          <div class="site-logo">
            <a href="<?php echo base_url('UserCo')?>" class="js-logo-clone">OBS Store</a>
          </div>
        </div>

        <div  class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
          <form method="POST" action="<?php echo base_url('searching/ShowSearch')?>" class="site-block-top-search">
            <span class="icon icon-search2"></span>
            <input type="text" class="form-control border-0" name="keyword" placeholder="Search">
          </form>
        </div>

        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
          <div class="site-top-icons">
            <ul>
              <li><a href="<?php echo base_url('UserCo/login')?>"> <?= $pelanggan['nama_cust']; ?> <span class="icon icon-person">
              </span></a></li>
              <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
              <li>
                <a href="" class="site-cart">
                  <span class="icon icon-shopping_cart"></span>
                  <span class="count"> <?= $pelanggan['jml_hart']; ?> </span>
                </a>
              </li>
              <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
      <ul class="site-menu js-clone-nav d-none d-md-block">
        <li class="">
          <a href="<?php echo base_url('UserCo')?>">Home</a>
        </li>
        <li class="">
          <a href="<?php echo base_url('UserCo/aboutus')?>">Tentang Kami</a>
        </li>
        <li><a href="<?php echo base_url('Catalog/index')?>">Katalog</a></li>
        <li><a href="#">Transaksi</a></li>
        <li><a href="<?php echo base_url('UserCo/contact')?>">Kontak Person</a></li>
      </ul>
    </div>
  </nav>
</header>
<script>
    window.onscroll = function() {myFunction()};


    var header = document.getElementById("myHeader");


    var sticky = header.offsetTop;


    function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
    }
</script>
        <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
        <script src=" <?php echo base_url('assets/js/jquery-ui.js')?>"></script>
        <script src=" <?php echo base_url('assets/js/popper.min.js')?>"></script>
        <script src=" <?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src=" <?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
        <script src=" <?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
        <script src=" <?php echo base_url('assets/js/aos.js')?>"></script>

        <script src=" <?php echo base_url('assets/js/main.js')?>"></script>
</body>
