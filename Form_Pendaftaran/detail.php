<?php
include "koneksi.php";

$sql = "SELECT id, nama, email, alamat, telp FROM pelanggan";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledetail.css">
    <title>Calon Orang Kaya</title>
</head>
<body>
<section>
    <h1><a href="formpendaftaran.php" style="text-decoration:none" class="judul">Detail Terdaftar</a></h1>
  <div class="tbl-header">
    <?php if ($result->num_rows > 0) {?>
    <table cellpadding="0" cellspacing="0" border="1">
      <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No. Telp</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="1">
      <tbody>
      <?php foreach ($result as $key => $value) { ?>
        <tr>
            <td><?php echo $value ["nama"];?></td>
            <td><?php echo $value ["email"];?></td>
            <td><?php echo $value ["alamat"];?></td>
            <td><?php echo $value ["telp"];?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php
} else {
  echo "0 results";
}
$conn->close();
?>
  </div>
</section>
<div class="made-with-love">
  <p>Made by <a target="_blank" href="https://id.linkedin.com/in/robby-simbolon">Robby Simbolon</a></p>
</div>
</body>
</html>