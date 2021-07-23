<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/sk.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sinatriya Kancana</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Sinatriya Kancana</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="utama.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
                <li class="nav-item"><a class="nav-link" href="crud.php">Member Data</a></li>
                <li class="nav-item"><a class="nav-link" href="tentang.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
           <div class="banner-item-01" style="background-image: url(assets/images/bg-sk.jpg);"> 
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Berita</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/k-cc.jpg" alt="">
              <div class="down-content">
                <h4>Camping Ceria</h4>
                <h6><small>19 November 2019</small></h6>
                <p style="text-align: justify;">Pada hari ini, anggota sinatriya kancana melakukan perjalan ke tempat perkemahan di daerah ciwidey untuk melaksanakan acara camping ceria.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/k-hk.jpg" alt="">
              <div class="down-content">
                <h4>Hari Kemerdekaan</h4>
                <h6><small>17 Agustus 2019</small></h6>
                <p style="text-align: justify;">Pada hari ini, seluruh warga kelurahan cibeunying memeriahkan serangkaian acara yang diselenggarakan oleh karang taruna kelurahan cibeunying, tak terkecuali sinatriya kancana dari karang taruna rw 11 awiligar. dalam kesempatan ini sinatriya kancana berhasil membawa beberapa prestasi diantaranya</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/k-mp.jpg" alt="">
              <div class="down-content">
                <h4>Sinatriya Kancana : The Journey</h4>
                <h6><small>30 September 2019</small></h6>
                <p style="text-align: justify;">serangkaian acara dalam menyambut hari kemerdekaan republik indonesia ditutup dengan apik di acara Malam puncak pentas seni dengan tema sinatriya kancana : the journey. seluruh lapisan warga rw 11 awiligar dan sekitarnya memenuhi area berlangsungnya acara yang menandakan antusiasme yang cukup tinggi, tak heran karena acara malam puncak pentas seni yang di selenggarakan di rw 11 awiligar ini di gadang-gadang selalu menjadi hari yang ditunggu-tunggu bahkan bukan hanya untuk warga rw 11 awiligar saja, bahkan rw 11 awiligar kerap didapuk sebagai acara termegah yang diselenggarakan di lingkungan kelurahan cibeunying ini.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
                     <p>Copyright © 2021 <a href="utama.php">Sinatriya Kancana</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>