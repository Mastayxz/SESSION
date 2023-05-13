<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP </title>
</head>
<body>
<h2>Login User </h2>
    <br>
    <!-- cek notifikasi -->
     <?php 
     if(isset($_GET['pesan'])){
        if($_GET['pesan']== "gagal"){
            echo "gagal";
        }else if($_GET['pesan']=="login"){
            echo "anda telah berhasil login";
            header("location: menu.php");
            exit();
        }else if($_GET['pesan']=="belum_login"){
             echo "anda harus login untuk mengakses";
        }
     }
     ?>
     
    <br>
    <br>
    <form action="ceklogin.php" method = "post">
            <table>
                <tr>
                    <td>username</td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="masukan username" id=""></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="********" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="LOGIN"></td>
                </tr>
                

            </table>
    </form>
</body>
</html>
