<?php
  date_default_timezone_set('Asia/Jakarta');
  if(isset($_POST['submit'])){
    $nama = mysqli_real_escape_string($link, $_POST['nama']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $ttl = mysqli_real_escape_string($link, $_POST['ttl']);
    $telp = mysqli_real_escape_string($link, $_POST['telp']);
    $alamat = mysqli_real_escape_string($link, $_POST['alamat']);
    $pesan = mysqli_real_escape_string($link, $_POST['pesan']);
    $tanggal = date('Y-m-d H:i:s');

    $sql = "INSERT INTO tamu (nama, email, ttl, telp, alamat, pesan, tanggal) VALUES('$nama','$email','$ttl','$telp','$alamat','$pesan','$tanggal')";

    if(mysqli_query($link, $sql)){ ?>
    <script>
      alert('Data berhasil ditambahkan!');
      document.location.href = "index.php?web=form";
    </script>
    <?php } else { echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); } 
  }
?>