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
  <a class="navbar-brand" href="index.php">
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


<button type="button" class="btn btn-primary btn-lg btn-block">CEK IN</button>
<button type="button" class="btn btn-secondary btn-lg btn-block">CEK OUT</button>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>