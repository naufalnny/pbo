<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Katalog &mdash; Online Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-2">

            <div class="row">
              <div class="col-md-12 mb-2">
                <div class="float-md-left mb-2">
                  <h2 class="text-black h5">
                  <?php
                      echo $keyword;// code...
                  ?></h2>
                </div>
              </div>
            </div>
            <div class="row mb-5">
            <?php
            foreach ($data as $d) {
              $link = str_replace(" ","-","$d->judulBuku");
              $link = str_replace("&","z","$link");
            ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="<?php echo base_url('product/productname/'.$link)?>"><img src="<?php echo base_url('assets/images/')?><?php echo $d->img; ?>.jpg" alt="Image placeholder" class="img-ole"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="<?php echo base_url('product/productname/'.$link)?>"><?php echo $d->judulBuku; ?></a></h3>
                    <p><?php echo $d->pengarang; ?></p>
                    <p class="text-primary h4">RP <?php echo $d->harga; ?></p>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>


            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 order-1 mb-5 mb-md-0">
            <div class="border p-4 rounded mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Toko</h3>
              <ul class="list-unstyled mb-0">
                <li class="mb-1"><a href="<?php echo base_url('Catalog') ?>" class="d-flex"><span>Semua Toko</span></a></li>
                <?php foreach ($shop_data as $sd) {
                  $link2 = str_replace(" ","-","$sd->nama_toko");
                  $link2 = str_replace("&","z","$link2");
                ?>
                <li class="mb-1"><a href="<?php echo base_url('searching/ShopSearch/'.$sd->id_toko)?>" class="d-flex"><span><?php echo $sd->nama_toko; ?></span></a></li>
              <?php } ?>

              </ul>
            </div>


          </div>
        </div>


      </div>
    </div>


  </div>

  <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/aos.js')?>"></script>

  <script src="js/main.js"></script>

  </body>
</html>
