<?php 
require 'functions.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PRESENSI</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
  <img src="img/centang.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
  ABSENSI
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="absen.php">ABSEN</a>
      </li>

    <li class="nav-item">
        <a class="nav-link" href="index.php">DATA SISWA </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="datapresensi.php">DATA PRESENSI</a>
      </li>
    </ul>
  </div>
</nav>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Kode Presensi</th>
      <th scope="col">Id Siswa</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Alasan</th>
      <th scope="col">Foto</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
  </tbody>
</table>