<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

<article>
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


     <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Sinatriya Kancana</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="utama.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
                <li class="nav-item"><a class="nav-link" href="crud.php">Member Data</a></li>
                <li class="nav-item active"><a class="nav-link" href="tentang.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/sk-s.jpg);">
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


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>KARANG TARUNA RW 11 AWILIGAR</h2>
              <h2>KELURAHAN CIBEUNYING KECAMATAN CIMENYAN KABUPATEN BANDUNG</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/tarka.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Karang Taruna</h4>
              <p style="text-align: justify;">Karang Taruna adalah organisasi kepemudaan di Indonesia. Karang Taruna merupakan wadah pengembangan generasi muda nonpartisan, yang tumbuh atas dasar kesadaran dan rasa tanggung jawab sosial dari, oleh dan untuk masyarakat khususnya generasi muda di wilayah Desa/ Kelurahan atau komunitas sosial sederajat, yang terutama bergerak dibidang kesejahteraan sosial. Sebagai organisasi sosial kepemudaan Karang Taruna merupakan wadah pembinaan dan pengembangan serta pemberdayaan dalam upaya mengembangkan kegiatan ekonomi produktif dengan pendayagunaan semua potensi yang tersedia di lingkungan baik sumber daya manusia maupun sumber daya alam yang telah ada.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Sinatriya Kancana</h2>
               <p style="text-align: justify;">Karang Taruna RW 11 Awiligar dengan nama Sinatriya Kancana. Sinatriya atau Sinatria berasal dari bahasa Jawa Kuno (Sanksekerta) yang juga menjadi dasar kata ksatria, yang berarti gagah berani, jujur, berwibawa, dan welas asih layaknya seorang ksatria. Sedangkan Kencana atau Kancana dalam bahasa Sunda artinya Emas yang megah. nama tersebut juga adalah harapan bagi karang taruna RW 11 Awiligar agar dalam masa jabatan dan dimasyarakat dapat bermanfaat dan mengembangkan semua potensi anak muda RW 11 Awiligar guna menjadikan pemuda yang tangguh layaknya seorang ksatria dan berharga bagi masyarakat RW 11 Awiligar layaknya emas yang megah.</p>
               <br>
               <p style="text-align: justify;">Karang Taruna beranggotakan pemuda dan pemudi (dalam AD/ART nya diatur keanggotaannya mulai dari pemuda/i berusia mulai dari 11 - 45 tahun) dan batasan sebagai Pengurus adalah berusia mulai 17 - 35 tahun. Karang Taruna didirikan dengan tujuan memberikan pembinaan dan pemberdayaan kepada para remaja, misalnya dalam bidang keorganisasian, ekonomi, olahraga, ketrampilan, advokasi, keagamaan dan kesenian.</p>
            </div>

            <h5>Visi</h5>
            <p style="text-align: justify;">Mewujudkan Pemuda Kecamatan Banyumanik Berjiwa Sosial Dan Mampu Menciptakan Generasi Muda Yang Tangguh, Berbudi Pekerti Yang Baik, Sopan Satun Dan Berkualitas Dalam Bermasyarakat.</p>
            <br>
            <h5>Misi</h5>
            <p style="text-align: justify;">1. Menciptakan jiwa cinta tanah air dan budaya bagi pemuda dan pemudi RW 11 Awiligar.</p>
            <p style="text-align: justify;">2. Mewujudkan pemuda RW 11 Awiligar yang aktif, kreatif, sopan santun dan berkarakter. </p>
            <p style="text-align: justify;">3. Turut menbantu menciptakan lingkungan RW 11 Awiligar yang bersih dan sehat.</p>
            <p style="text-align: justify;">4. Berkegiatan dengan didasari jiwa Kebangsaan dan Kepancasilaan. </p>
            <p style="text-align: justify;">5. Mengembangkan Potensi Diri Setiap Anggota.</p>
            <p style="text-align: justify;">6. Membantu pemuda kelurahan dalam bermasyarakat dan berkegiatan untuk meningkatkan potensi daerah tersebut.</p>
            <p style="text-align: justify;">7. Mengembangkan potensi pemuda dalam ROKE (Rekreasi Olahraga Kesenian Ekonomi).</p>
            <p style="text-align: justify;">8. Membantu mewujudkan generasi muda dalam UEP (Usaha Ekonomi Produktif).</p>
            <p style="text-align: justify;">9. Berkontribusi aktif dalam semua kegiatan di lingkungan RW 11 Awiligar.</p>
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
</article>