<?php
include "koneksi.php";

$nama = @$_GET['nama'];
$email = @$_GET['email'];
$alamat = @$_GET['alamat'];
$telp = @$_GET['telp'];
$password = @$_GET['password'];

$data = [$nama, $email, $alamat, $telp, $password];
if (empty($data)) {
  echo "Harap isi data dengan benar";
}
$sql = "INSERT INTO pelanggan VALUES('','$nama','$email','$alamat', '$telp', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>