<?php
include ("koneksi.php");
$query = mysqli_query($conn, "SELECT * FROM cv_data WHERE id='$_GET[id]'");
$aray = mysqli_fetch_array ($query);
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
    <form method="POST" action="fungsiedit.php">
    <table>
    <tr>
        <td>id</td>
        <td><input type="text" name="id" value="<?php echo $aray['id'];?>"></td>
      </tr>
      <tr>
        <td>nama</td>
        <td><input type="text" name="nama" value="<?php echo $aray['nama'];?>"></td>
      </tr>
      <tr>
        <td>alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $aray['alamat'];?>"></td>
      </tr>
      <tr>
        <td>telepon</td>
        <td><input type="text" name="telepon" value="<?php echo $aray['telepon'];?>"></td>
      </tr>
      <tr>
        <td>email</td>
        <td><input type="text" name="email" value="<?php echo $aray['email'];?>"></td>
      </tr>
      <tr>
        <td>web</td>
        <td><input type="text" name="web" value="<?php echo $aray['web'];?>"></td>
      </tr>
      <tr>
        <td>pendidikan</td>
        <td><input type="text" name="pendidikan" value="<?php echo $aray['pendidikan'];?>"></td>
      </tr>
      <tr>
        <td>pengalaman kerja</td>
        <td><input type="text" name="pengalaman_kerja" value="<?php echo $aray['pengalaman_kerja'];?>"></td>
      </tr>
      <tr>
        <td>keterampilan</td>
        <td><input type="text" name="keterampilan" value="<?php echo $aray['keterampilan'];?>"></td>
      </tr>
      <tr>
      <tr>
        <td>Foto</td>
        <td><input type="text" name="foto_path" value="<?php echo $aray['foto_path'];?>"></td>
      </tr>
      <tr>
        <td></td>
        <td><button class="btn btn-success" type="submit" name="simpan">Simpan</button></td>
      </tr>
    </table>

    </body>
</html>

