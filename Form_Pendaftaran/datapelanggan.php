<?php
    include "koneksi.php";
    session_start();

    $query = mysqli_query($conn, "SELECT * FROM pelanggan Where password='$_SESSION[password]'");
    if (!$query) {
        echo "Data tidak tersedia.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledatapelanggan.css">
    <title>Data Orang Kaya</title>
</head>
<body>
    <div class="signupSection">
        <?php
    if ($query->num_rows > 0) {?> 
        <form action="edit.php" method="GET" class="signupForm">
            <?php foreach ($query as $key => $value) { ?>
            <h1>Selamat Datang <?php echo $value['nama'];?> !! </h1>
            <input type="hidden" name="id" value="<?php echo $value['id']; ?>" required>
            <ul class="noBullet">
            <li>
                <label for="nama"></label>
                <input type="text" class="inputFields" id="nama" name="nama" value="<?php echo $value['nama']; ?>" required/>
            </li>
            <li>
                <label for="email"></label>
                <input type="text" class="inputFields" id="email" name="email" value="<?php echo $value['email']; ?>" required/>
            </li>
            <li>
                <label for="alamat"></label>
                <input type="text" class="inputFields" id="alamat" name="alamat" value="<?php echo $value['alamat']; ?>" required/>
            </li>
            <li>
                <label for="No.telp"></label>
                <input type="text" class="inputFields" id="telp" name="telp" value="<?php echo $value['telp']; ?>" required/>
            </li>
            <li>
                <label for="password"></label>
                <input type="password" class="inputFields" id="password" name="password" value="<?php echo $value['password']; ?>" required/>
            </li>
            <li id="center-btn">
                <input type="submit" id="join-btn" name="join" alt="Join" value="Perbaharui">
            </li>
            </ul>
            <?php } ?>
            <a href="delete.php" class= "delete" style="text-decoration:none">Hapus Data</a><br><br>
            <a href="logout.php" class= "delete" style="text-decoration:none">Logout</a>
        </form>
    </div>
    <?php
    } else {
    echo "0 results";
    }
    ?>
</body>
</html>