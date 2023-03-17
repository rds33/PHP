<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="proses_update.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>" />
  Nama: <input type="text" name="nama" value="<?php echo $nama; ?>" /><br />
  Alamat: <input type="text" name="alamat" value="<?php echo $alamat; ?>" /><br />
  Telepon: <input type="text" name="telepon" value="<?php echo $telepon; ?>" /><br />
  <input type="submit" name="submit" value="Perbarui" />
</form>
  <!-- <form action="insert.php" method= "get">
    <label for="nama_depan">Nama Depan:</label><br>
    <input type="text" id="nama_depan" name="nama_depan"><br><br>
    <label for="nama_belakang">Nama Belakang:</label><br>
    <input type="text" id="nama_belakang" name="nama_belakang"><br><br>
    <label for="tanggal_lahir">Tanggal Lahir:</label><br>
    <input type="text" id="tanggal_lahir" name="tanggal_lahir"><br><br>
    <label for="alamat">Alamat:</label><br>
    <input type="text" id="alamat" name="alamat">
    <input type="submit" value="Submit">
  </form> -->
</body>
</html>