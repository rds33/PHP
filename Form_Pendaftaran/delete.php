<?php
include 'koneksi.php';
session_start();
$email=$_SESSION['email'];

$sql = "DELETE FROM pelanggan WHERE email='$_SESSION[email]'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>