<?php
$page=htmlspecialchars(@$_GET['page']);
switch ($page) {
    case null:
        include 'page/absen.php';
        break;
    case 'absen':
        include 'page/absen.php';
        break;
    case 'data':
        include 'page/datapresensi.php';
        break;
    case 'siswa':
        include 'page/siswa.php';
        break;
    default:
        include 'page/404.php';
}