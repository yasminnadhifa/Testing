<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi =='tambah'){
    $db->input($_POST['nama'],$_POST['usia'],$_POST['jenis'],$_POST['gender'],$_POST['tujuan'],$_POST['tanggal']);
    header("location:../view/tampil.php");
}
elseif($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampil.php");
}
 elseif($aksi == "update"){
    $db->update($_POST['id'],$_POST['nama'],$_POST['usia'],$_POST['jenis'],$_POST['gender'],$_POST['tujuan'],$_POST['tanggal']);
    header("location:../view/tampil.php");
} 
?>