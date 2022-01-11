<?php

// koneksi ke database
$conn = mysqli_connect("localhost","root","","presensi");


function query($query){

    global $conn;

    $result = mysqli_query($conn , $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

                                        //  ================= SISWA ================

// =============== tambah data ====================== 
if (isset($_POST["tambahsiswa"])){
    // ambil data dari tiap element dalam form siswa
    $nis= htmlspecialchars($_POST["nis"]);    
    $nama = htmlspecialchars($_POST["nama"]);
    $lp = htmlspecialchars($_POST["lp"]);
    $tmp_lahir = htmlspecialchars($_POST["tmp_lahir"]);
    $tgl_lahir = htmlspecialchars($_POST["tgl_lahir"]);

    $query = "INSERT INTO `siswa_ref` (`nis`, `nama`, `lp`, `tmp_lahir`, `tgl_lahir` ) 
    VALUES ('$nis', '$nama', '$lp', '$tmp_lahir', '$tgl_lahir')" ;
  mysqli_query($conn , $query);
  return mysqli_affected_rows($conn);
}

// ================= edit / update data ===============
if (isset($_POST["editsiswa"])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $lp = $_POST['lp'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];

    $update = mysqli_query($conn, "UPDATE siswa_ref SET 
   nis = '$nis',
   nama = '$nama',
   lp = '$lp',
   tmp_lahir = '$tmp_lahir',
   tgl_lahir = '$tgl_lahir'
   

   WHERE nis = '$nis'");

    mysqli_query($conn, $update);

    return mysqli_affected_rows($conn);
};
// =================== hapus data ===================
if (isset($_POST["hapussiswa"])) {

    $nis = $_POST['nis'];


    $delete = mysqli_query($conn, "DELETE FROM `siswa_ref` WHERE `siswa_ref`.`nis` = '$nis'");

    mysqli_query($conn, $delete);
    //  echo '<prev>';
    //  print_r($_POST);
    //  die;
    return mysqli_affected_rows($conn);
};
                                        //  ================= GURU ================

// =============== tambah data ======================                                   
if (isset($_POST["tambahguru"])){
     // ambil data dari tiap element dalam form guru
     $kd_guru = htmlspecialchars($_POST["kd_guru"]);
     $nip = htmlspecialchars($_POST["nip"]);
     $nama = htmlspecialchars($_POST["nama"]);
    // inset data
     $query = "INSERT INTO `guru_ref` (`kd_guru`, `nip`, `nama`) 
     VALUES ('$kd_guru', '$nip', '$nama')" ;
   mysqli_query($conn , $query);
   return mysqli_affected_rows($conn);
}
 //=============== edit data guru ==================
 if (isset($_POST["editguru"])) {
    $kd_guru = $_POST['kd_guru'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];


    $updateguru = mysqli_query($conn, "UPDATE guru_ref SET 
    kd_guru = '$kd_guru',
    nip = '$nip',
    nama = '$nama'
    WHERE kd_guru = '$kd_guru'");

    mysqli_query($conn, $updateguru);
    return mysqli_affected_rows($conn);
};

 //=============== hapus data guru ==================
if (isset($_POST["hapusguru"])) {
    $kd_guru = $_POST['kd_guru'];
    $delete = mysqli_query($conn, "DELETE FROM `guru_ref` WHERE `guru_ref`.`kd_guru` = '$kd_guru'");

    mysqli_query($conn, $delete);
    return mysqli_affected_rows($conn);
};



                                        //  ================= MAPEL ================
                                        
// =============== tambah data ======================                                   
if (isset($_POST["tambahmapel"])){
    // ambil data dari tiap element dalam form mapel
    $kd_mapel = htmlspecialchars($_POST["kd_mapel"]);    
    $nama_mapel = htmlspecialchars($_POST["nama_mapel"]);
   // inset data
    $query = "INSERT INTO `mapel_ref` (`kd_mapel`, `nama_mapel`) 
    VALUES ('$kd_mapel', '$nama_mapel')" ;
  mysqli_query($conn , $query);
  return mysqli_affected_rows($conn);
}
///=============== edit data ==================
if (isset($_POST["editmapel"])) {
    $kd_mapel = $_POST['kd_mapel'];
    $nama_mapel = $_POST['nama_mapel'];


    $updatemapel = mysqli_query($conn, "UPDATE mapel_ref SET 
    kd_mapel = '$kd_mapel',
    nama_mapel = '$nama_mapel'
    WHERE kd_mapel = '$kd_mapel'");

    mysqli_query($conn, $updatemapel);
    return mysqli_affected_rows($conn);
};

 //=============== hapus data  ==================
 if (isset($_POST["hapusmapel"])) {
    $kd_mapel = $_POST['kd_mapel'];
    $delete = mysqli_query($conn, "DELETE FROM `mapel_ref` WHERE `mapel_ref`.`kd_mapel` = '$kd_mapel'");

    mysqli_query($conn, $delete);
    return mysqli_affected_rows($conn);
};
//

if (isset($_POST["register"])){
    // ambil data dari tiap element dalam form mapel
   
    $nama = htmlspecialchars($_POST["nama"]);    
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);    
    $password2 = mysqli_real_escape_string($conn,$_POST["password2"]);
    $level = htmlspecialchars($_POST["level"]); 
    $result = mysqli_query($conn, "SELECT  username from userakun where username = '$username'");
    if( mysqli_fetch_assoc($result)){
        echo "<script>
            alert('username sudah terdaftar');
        </script>";
        return false;

    }
     //cek konfirmasi password
     if($password !== $password2){
        echo "<script>
        alert('Password tidak sesuai!');
        </script>";

        return false;

    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
   // inset data
   $query= "INSERT INTO `userakun` (`id`, `nama`, `username`, `password`, `level`) 
   VALUES ('', '$nama', '$username', '$password', '$level')";

  mysqli_query($conn , $query);
  return mysqli_affected_rows($conn);
}
if (isset($_POST["hapusakun"])) {
    $id = $_POST['id'];
    $delete = mysqli_query($conn, "DELETE FROM `userakun` WHERE `userakun`.`id` = '$id'");
    
    mysqli_query($conn, $delete);
    return mysqli_affected_rows($conn);
};


?>
