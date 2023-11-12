<?php
include ("koneksi.php");
$result = mysqli_query($conn, "SELECT * FROM cv_data");
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>CRUD PHP | Add</title>

</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-between">
                <a class="ms-4 navbar-brand">Curriculum vitae</a>
                <form class="form-inline">             
                <a href="edit.php" class="btn btn-warning my-2 my-sm-0 me-4" >Tambah Data</a>
                </form>
    </nav>
    

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Web</th>
                <th>Pendidikan</th>
                <th>Pengalaman Kerja</th>
                <th>Keterampilan</th>
                <th>Foto</th>

            </tr>
        </thead>

    <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['nama'] . "</td>";
      echo "<td>" . $row['alamat'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['telepon'] . "</td>";
      echo "<td>" . $row['web'] . "</td>";
      echo "<td>" . $row['pendidikan'] . "</td>";
      echo "<td>" . $row['pengalaman_kerja'] . "</td>";
      echo "<td>" . $row['keterampilan'] . "</td>";
      echo "<td>" . $row['foto_path'] . "</td>";
      echo "<td> 
              <a class='btn btn-danger' href='delete.php?id=$row[id]'>Hapus</a> 
              <a class='btn btn-warning' href='edit2.php?id=$row[id]'>Edit</a> 
            </td>";
      echo "</tr>";
    }
    ?>

</body>
</html>