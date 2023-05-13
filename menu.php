<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    $username = $_SESSION['username'];
    $status = $_SESSION['status'];
    if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
    echo "<h2>Hallo $username, anda telah login</h2>
    menu utama <br><br>
    <a href = 'list.php'>Data Mahasiswa</a>
    <a href = 'dosen.php'>Data dosen</a>"
    ?>
    <form action="logout.php" method= "post">
        <input type="submit" value="LOGOUT" name="tsubmit">
    </form>
</body>
</html>
