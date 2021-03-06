<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengumuman </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>/assets/css/landing-page.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <!-- <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <a class="btn btn-primary" href="#">Sign In</a>
      </div>
    </nav> -->

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">PENGUMUMAN!</h1>
            <p class="lead">Dibawah ini adalah hasil pengumuman dari Himpunan Mahasiswa Manajemen UNUSA
              <br>Gunakan Search untuk melihat nama sesuai NIM dibawah ini :
            </p>
                
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <?php echo form_open('home/hasil');?>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" class="form-control form-control-lg" id="username" name="nim" placeholder="Masukkan NIM Anda..">
                  <!-- <input type="text" class="form-control form-control-lg" placeholder="Masukkan NIM Anda.." name="search"> -->
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-success" name="submit">Cek!</button>
                  <?php echo form_close();?>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
