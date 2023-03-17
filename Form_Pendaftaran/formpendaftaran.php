<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styledaftar.css">
    <title>Pendaftaran Orang Kaya</title>
</head>
<body>
    <div class="signupSection">
        <div class="info">
            <h1>Selamat Datang</h1>
            <i class="icon ion-ios-ionic-outline" aria-hidden="true"></i>
            <h3>Segera Daftarkan Dirimu!!!</h3>
        </div>
        <form action="insert2.php" method= "get" class="signupForm" name="signupform">
            <h1>Daftar</h1>
            <ul class="noBullet">
            <li>
                <label for="nama"></label>
                <input type="text" class="inputFields" id="nama" name="nama" placeholder="Nama" required/>
            </li>
            <li>
                <label for="email"></label>
                <input type="text" class="inputFields" id="email" name="email" placeholder="Email" required/>
            </li>
            <li>
                <label for="alamat"></label>
                <input type="text" class="inputFields" id="alamat" name="alamat" placeholder="Alamat" required/>
            </li>
            <li>
                <label for="No.telp"></label>
                <input type="text" class="inputFields" id="telp" name="telp" placeholder="No.telp" required/>
            </li>
            <li>
                <label for="password"></label>
                <input type="password" class="inputFields" id="password" name="password" placeholder="Password" required/>
            </li>
            <li id="center-btn">
                <input type="submit" id="join-btn" name="join" alt="Join" value="Join">
            </li>
            </ul>
            <a href="login.php" class="opsi" style="text-decoration:none">Edit Data</a><br>
            <a href="detail.php" class="opsi" style="text-decoration:none">Detail Terdaftar</a><br>
            <p class="opsi">
             Made by <a href="https://id.linkedin.com/in/robby-simbolon" class= "opsi"> Robby Simbolon</a>
            </p>
        </form>
    </div>
</body>
</html>
