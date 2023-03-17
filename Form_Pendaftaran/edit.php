<?php
    include "koneksi.php";

    $nama = @$_GET['nama'];
    $email  = @$_GET['email'];
    $alamat  = @$_GET['alamat'];
    $telp  = @$_GET['telp'];
    $password  = @$_GET['password'];
    
    $id = @$_GET['id'];
    
    $sql = "UPDATE pelanggan SET nama='$nama', email='$email', alamat='$alamat', telp='$telp', password='$password' WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record Data Successful";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
?>