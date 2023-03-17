<?php
include 'koneksi.php';
session_start();
$email = @$_POST['email'];
$password = @$_POST['password'];
     
$query = mysqli_query($conn, "SELECT * FROM pelanggan where email='$email' and password='$password'");
$cek = mysqli_num_rows($query);
    
    if($cek==1){
        header("location:datapelanggan.php");
    }
    if(mysqli_num_rows($query)==1){
        $qry = mysqli_fetch_array($query);
        $_SESSION['email']    = $qry['email'];
        $_SESSION['password']    = $qry['password'];
    }
    else{
        ?>
        <script language="JavaScript">
            alert('Oops! Username atau Password tidak sesuai ...');
            document.location='./';
        </script>
    <?php
    }

?>