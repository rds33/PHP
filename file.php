<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>
<body>
<a href="form_insert.php">tambah data</a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank_abc";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nama_depan, nama_belakang, tanggal_lahir, alamat FROM nasabah";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>
  
    <table border= 1 >
      <thead>
        <tr>
          <th>Nama Depan</th>
          <th>Nama Belakang</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($result as $key => $value) { ?>
      <tr>
          <td><?php echo $value ["nama_depan"];?></td>
          <td><?php echo $value ["nama_belakang"];?></td>
          <td><?php echo $value ["tanggal_lahir"];?></td>
          <td><?php echo $value ["alamat"];?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  <?php
  // output data of each row
  // while($row = $result->fetch_assoc()) {
  //   echo "id: " . $row["id"]. " - Name: " . $row["nama_depan"]. " " . $row["nama_belakang"]. $row["tanggal_lahir"]. $row["alamat"]."<br>";
  // }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>
