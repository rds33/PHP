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
$nama_depan = @$_GET['nama_depan'];
$nama_belakang = @$_GET['nama_belakang'];
$tanggal_lahir = @$_GET['tanggal_lahir'];
$alamat = @$_GET['alamat'];

$sql = "INSERT INTO nasabah VALUES('','$nama_depan','$nama_belakang','$tanggal_lahir', '$alamat')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>