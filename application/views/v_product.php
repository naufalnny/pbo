<!DOCTYPE html>
<html lang="en">
  <head>
    <?php foreach ($data as $d) { ?>
      <title><?php echo $d->judulBuku; ?> &mdash; Online Book Store</title>
    <?php } ?>
    <title>Tentang Kami &mdash; Online Book Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-section">
      <div class="container">
        <div class="row">
          <?php
          foreach ($data as $d) {
          ?>
          <div class="col-md-6">
            <img src="<?php echo base_url('assets/images/')?><?php echo $d->img; ?>.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-primary"><?php echo $d->judulBuku; ?></h2>
            <p><h5 class="text-black">Karya : <?php echo $d->pengarang; ?></h5></p>
            <p><h5 class="text-black">Rating : <?php echo $d->rating; ?>/5</h5></p>
            <p><?php echo $d->deskripsi; ?></p>

            <p><h5 class="text-black">Lokasi Toko :</h5></p>
            <select name="product" class="mb-3">
            <?php foreach ($shop as $s) {
            ?>
              <option value="<?php $s->id_toko; ?>"><?php echo $s->nama_toko; ?> - Stok : <?php echo $s->total_buku; ?></option>
            <?php }
            ?>

            </select>
            <p><strong class="text-primary h2">Rp <?php echo $d->harga; ?></strong></p>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="cart.html" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

          </div>
        <?php }
        ?>


        </div>
      </div>
    </div>



  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  </body>
</html>
