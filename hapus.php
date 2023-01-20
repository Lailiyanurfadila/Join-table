<?php
// koneksi database
include("koneksi.php");

// menangkap data dari database
$id = $_GET['id_siswa'];

// menghapus data dari database
mysqli_query($conn,"DELETE FROM tb_jurusan where id_jurusan=$id");
mysqli_query($conn,"DELETE FROM tb_siswa where id_siswa=$id");
mysqli_query($conn,"DELETE FROM tb_spp where id_spp=$id");

$query = mysqli_query($conn, $sql);

// mengalihkan halaman kembali ke index.php

header("location: table-join.php");
?>
<!--Nama: lailiya nur fadila-->