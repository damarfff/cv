<?php

include("koneksi.php");

$id = mysqli_real_escape_string($conn, $_POST['id']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$telepon = mysqli_real_escape_string($conn, $_POST['telepon']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$web = mysqli_real_escape_string($conn, $_POST['web']);
$pendidikan = mysqli_real_escape_string($conn, $_POST['pendidikan']);
$pengalaman_kerja = mysqli_real_escape_string($conn, $_POST['pengalaman_kerja']);
$keterampilan = mysqli_real_escape_string($conn, $_POST['keterampilan']);
$foto_path = mysqli_real_escape_string($conn, $_POST['foto_path']);

$query = "INSERT INTO cv_data (id, nama, alamat, telepon, email, web, pendidikan, pengalaman_kerja, keterampilan, foto_path) VALUES('$id','$nama','$alamat','$telepon','$email','$web','$pendidikan','$pengalaman_kerja','$keterampilan','$foto_path')";
$result = mysqli_query($conn, $query);


if ($query){
    echo "<div class='alert alert-success'>Data berhasil disimpan.</div>";
    echo "<a class='btn btn-primary' href='index.php'>Kembali ke Tampilan Data</a>";
}else{
    echo "Data Gagal Disimpan";
}
?>