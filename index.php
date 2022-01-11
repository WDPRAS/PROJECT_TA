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

<div class="row">
						    <div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Siswa</h4>
										<button class="btn btn-primary btn-sm ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>										
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
												
									    <div class="table-responsive">
										<table id="add-row" class="table table-striped table-bordered " >
											<thead>
                                            <tr>
                                        	<th>Id Siswa</th>
                                            <th>Nama</th>
                                            <th>Asal Sekolah</th> 
                                            <th>Nomor</th>                                                                                                                                                  
                                            <th class ="aksi">Aksi</th>
										</tr>
											</thead>
										
                                            <tbody>
                                    <tr>
                                    <?php $i=1; ?>
                                    <?php foreach($result as $row) : ?>
                                    <td><?= $i; ?></td>
                                    <td><?= $row["id_siswa"]; ?></td>
                                    <td><?= $row["nama"]; ?></td>                                    
                                    <td><?= $row["asal_sekolah"]; ?></td>                                    
                                    <td><?= $row["nomor"]; ?></td>
                                  
                                    <td class= "aksi" >
                                    <div class="d-flex align-items-center">
                                    <a href=" " class="btn btn-warning btn-sm m-0  " data-toggle="modal" data-target="#EditModal<?= $row["nis"]; ?>">
                                          <span class="icon text-white-70">
                                              <i class="fas fa-edit"></i>
                                          </span>
                                      </a>
                                      <a href=" " class="btn btn-danger  btn-sm m-3" data-toggle="modal" data-target="#hapusm<?= $row["nis"]; ?>">
                                          <span class="icon text-white-70">
                                              <i class="fas fa-trash-alt"></i>
                                          </span>
                                      </a>
                                       <!-- Edit modal -->
                                  <div class="modal fade" id="EditModal<?= $row["nis"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <!-- modal header -->
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">×</span>
                                                  </button>
                                              </div>
                                              <!-- modal body -->
                                              <div class="modal-body">
                                                  <form method="post">
                                                      <div class="modal-body">
                                                          <input type="text" name="nis" placeholder="NIS" class="form-control" required VALUE="<?= $row["nis"]; ?>">
                                                          <br>
                                                          <input type="text" name="nama" placeholder="Nama" class="form-control" required VALUE="<?= $row["nama"]; ?>">
                                                          <br>
                                                          <input type="text" name="lp" placeholder="Jenis Kelamin" class="form-control" required VALUE="<?= $row["lp"]; ?>">
                                                          <br>
                                                          <input type="text" name="tmp_lahir" placeholder="Tempat Lahir" class="form-control" required VALUE="<?= $row["tmp_lahir"]; ?>">
                                                          <br>
                                                          <input type="text" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" required VALUE="<?= $row["tgl_lahir"]; ?>">
                                                          <br>
                                                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                          <button type="submit" class="btn btn-primary" name="editsiswa">Submit</button>
                                                          </div>                          
                                                      </div>
                                                  </form>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                                    <!-- hapus modal -->
                                    <div class="modal fade" id="hapusm<?= $row["nis"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                              <!-- modal header -->
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ?</h5>
                                                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">×</span>
                                                  </button>
                                              </div>
                                              <!-- modal body -->
                                              <div class="modal-body">
                                                  <form method="post">
                                                      <div class="modal-body">
                                                          Apakah anda yakin ingin menghapus <?= $row["nama"]; ?>?
                                                          <input type="hidden" name="nis" value="<?= $row["nis"]; ?>">
                                                          <br>
                                                          <br>
                                                          <button type="submit" class="btn btn-danger" name="hapussiswa"> Hapus</button>
                                                      </div>
                                              </div>

                                              </form>
                                          </div>

                                      </div>
                                  </div>
                                        </div>
                                    </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach ;?>
									</tbody>
                  
										</table>										
									</div>
								</div>
							</div>
						</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>