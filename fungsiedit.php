<?php
include("koneksi.php");

$query = "UPDATE cv_data SET 
            nama = '{$_POST['nama']}', 
            alamat = '{$_POST['alamat']}', 
            telepon = '{$_POST['telepon']}', 
            email = '{$_POST['email']}', 
            web = '{$_POST['web']}', 
            pendidikan = '{$_POST['pendidikan']}', 
            pengalaman_kerja = '{$_POST['pengalaman_kerja']}', 
            keterampilan = '{$_POST['keterampilan']}', 
            foto_path = '{$_POST['foto_path']}' 
          WHERE id = '{$_POST['id']}'";

$result = mysqli_query($conn, $query);

if ($result) {

    echo "<div class='alert alert-success'>Data berhasil disimpan.</div>";
    echo "<a class='btn btn-primary' href='index.php'>Kembali ke Tampilan Data</a>";
} else {
    echo "Data gagal diupdate: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
