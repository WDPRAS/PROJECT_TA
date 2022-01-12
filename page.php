<?php
$page=htmlspecialchars(@$_GET['page']);
switch ($page) {
    case null:
        include 'page/beranda.php';
        break;
    case 'beranda':
        include 'page/beranda.php';
        break;
    case 'barang':
        include 'page/barang.php';
        break;
    case 'supplier':
        include 'page/supplier.php';
        break;
    default:
        include 'page/404.php';
}