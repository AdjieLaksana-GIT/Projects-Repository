<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Anggota</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>NIK</label>
          <input type="text" name="nik" />
        </div>
        <div>
          <label>NAMA</label>
         <input type="text" name="nama" />
        </div>
        <div>
          <label>JABATAN</label>
         <input type="text" name="jabatan" required="" />
        </div>
        <div>
          <label>ALAMAT</label>
         <input type="text" name="alamat" required="" />
        </div>
        <div>
          <label>FOTO</label>
         <input type="file" name="foto" required="" />
        </div>
          <td colspan=3><a href="crud.php">Back</a></td>
        <div>
         <button type="submit">Simpan</button>
        </div>
        </section>
      </form>
          </center>
      </center>
  </body>
</html>