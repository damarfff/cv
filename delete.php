<?php
include ("koneksi.php");
?>
<?php
     
        if (isset($_GET['id'])) {
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            $query = "DELETE FROM cv_data WHERE id = '$id'";
            $result = mysqli_query($conn, $query);
        
            if ($result) {
                echo "<div class='alert alert-success'>Data berhasil dihapus.</div>";
                echo "<a class='btn btn-primary' href='index.php'>Kembali ke Tampilan Data</a>";
            } else {
                echo "<div class='alert alert-danger'>Gagal menghapus data.</div>";
            }
        }
?>