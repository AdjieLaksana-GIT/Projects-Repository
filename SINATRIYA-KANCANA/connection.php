<?php
  define('DB_NAME', 'sinatriyakancana'); // nama database
  define('DB_USER', 'root'); // nama user (default: root)
  define('DB_PASSWORD', ''); // password (default: )
  define('DB_HOST', 'localhost'); // host server

  // koneksikan dengan localhost serta sesuaikan username dan password
  $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

  // jika tidak dapat terkoneksi tampilkan pesan error
  if (!$link) {
      die('Could not connect: ' . mysqli_error($link));
  }

  // pilih database yang akan digunakan sesuai dengan DB_NAME
  $db_selected = mysqli_select_db($link, DB_NAME);

  // jika tidak dapat menemukan database tampilkan pesan error
  if (!$db_selected) {
      die('Cannot access ' . DB_NAME . ': ' . mysqli_error($link));
  }

  // // pesan jika koneksi berhasil
  // if($link && $db_selected) {
  //   echo 'Koneksi ke database berhasil';
  // }
  
  // mysqli_close($link);
?>