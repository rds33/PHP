<?php
include "koneksi.php";

$nama = @$_GET['nama'];
$email = @$_GET['email'];
$alamat = @$_GET['alamat'];
$telp = @$_GET['telp'];
$password = @$_GET['password'];

$sql = "INSERT INTO pelanggan VALUES('','$nama','$email','$alamat', '$telp', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>