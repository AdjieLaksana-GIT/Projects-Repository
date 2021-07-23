<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>


<article>
<?php
  include("connection.php");
?>

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
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">


<?php
  include("insert.php");
?>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

     <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="tamu.php"><h2>Sinatriya Kancana</h2>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="tamu.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
                <li class="nav-item"><a class="nav-link" href="tentang1.php">About Us</a></li>     
                <li class="nav-item active"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
          </div>
            </a></div></nav></header>
    <!-- Page Content -->
     <div class="banner header-text">
    <div class="banner-item-01" style="background-image: url(assets/images/sinatriya.png);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4></h4>
              <h2></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


 
    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">

            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.111261448373!2d107.63644391472022!3d-6.8772713950303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e70f9c820c75%3A0x4fc5a9923eadd741!2sStudio%20Patung%20Amrizal%20Salayan%20%2FTripta%20Garage!5e0!3m2!1sen!2sid!4v1611823563287!5m2!1sen!2sid" width="100%" height="330px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>Sekretariat Karang Taruna RW 11 Awiligar</h4>
              <p>Studio Patung Amrizal Salayan<br><br>Jl. Ligar Utara II No.68, Cibeunying, Kec. Cimenyan, Bandung, Jawa Barat 40191<br><br></p>
              <ul class="social-icons">
                <li><a href="https://www.instagram.com/sinatriyakancana.11/"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Buku Tamu</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="Alamat E-Mail" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="ttl" type="text" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="telp" type="text" class="form-control" id="telp" placeholder="Nomor Telepon" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat" required="">
                    </fieldset>
                  </div>  
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="pesan" id="pesan" placeholder="Pesan" cols="30"></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="submit" name="submit" value="Kirim">
                      <input type="reset" name="reset" value="Reset">
                    </fieldset>
                  </div>
                </div>
              </form>
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
              <p>Copyright © 2021 <a href="tamu.php">Sinatriya Kancana</a></p>
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

</article>