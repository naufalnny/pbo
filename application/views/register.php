<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
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
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              Returning customer? <a href="<?php echo base_url('UserCo/login')?>">Click here</a> to Login
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Register Page</h2>
            <div class="p-3 p-lg-5 border">

            <form action="<?= base_url('UserCo/registrasi') ?>" method="post" class="form-box">
              <div class="form-group row">
                <div class="col-md-12">
                  <label class="text-black">Nama </label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama');?>">
                  <?= form_error('nama', '<small class="text-danger">','</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label class="text-black">Username </label>
                  <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username');?>">
                  <?= form_error('username', '<small class="text-danger">','</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label class="text-black">Email </label>
                  <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email');  ?>">
                  <?= form_error('email', '<small class="text-danger">','</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Password </label>
                  <input type="password" class="form-control" id="password1" name="password1" value="<?= set_value('passowrd1');  ?>">
                  <?= form_error('password1', '<small class="text-danger">','</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label class="text-black">Konfirmasi Password </label>
                  <input type="password" class="form-control" id="password2" name="password2" value="<?= set_value('password');  ?>">
                </div>
              </div>
              <br>
              <br>

              <div class="form-group">
                <button class="btn btn-primary btn-lg py-3 btn-block" >Register</button>
              </div>

            </form>
          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>

    
  </div>

  <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
  <script src=" <?php echo base_url('assets/js/jquery-ui.js')?>"></script>
  <script src=" <?php echo base_url('assets/js/popper.min.js')?>"></script>
  <script src=" <?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src=" <?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
  <script src=" <?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
  <script src=" <?php echo base_url('assets/js/aos.js')?>"></script>

  <script src=" <?php echo base_url('assets/js/main.js')?>"></script>

  </body>
</html>
