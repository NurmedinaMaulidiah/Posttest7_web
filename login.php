<!DOCTYPE html>
<html lang="en">
<head>
    <link  href="'https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Dancing+Script&family=Dangrek&family=Roboto:ital,wght@1,300&display=swap'">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review cafe</title>
    <link rel="stylesheet"  href="css/style-login1.css">
    <script src="peosttest3.js"></script>
    <script src="jquery.js"></script>
</head>
<body style="background-image: url(https://i.pinimg.com/564x/dd/6e/7c/dd6e7cab19114331503d64d32b3f716b.jpg)">
    
    
    <div class="input">
        <p><b>Login User</b></p>
        <form action="" method="post">
            <input id="form" type="text" name = "user"  placeholder="email atau username" ><br>
            <input id="form" type="password" name="password" placeholder="password">
            <input id="form" type="submit" name="login" value="Login" class="submit"><br><br>
        </form>
        <p>Belum punya akun?
            <a href="register.php" >Register</a>
        </p>
    </div>

</body>
</html>

<?php

    session_start();
    require 'konfig.php';

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM akun WHERE username='$user' OR email='$user'";
        $result = $db->query($sql);

        //cek akun ada atau gak
        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);
            $username = $row['username'];

            //cek passwordnya valid
            if(password_verify($password, $row['psw'])){

                $_SESSION['login'] = $username;

                echo "<script>
                        alert('Selamat Datang $username');
                        document.location.href = 'tampilan-awal.php';
                        </script>";
            }else{
                echo "<script>
                        alert('Username dan Password salah');
                        </script>";
            }
        } else{
            echo "<script>
                        alert('Buat akun terlebih dahulu');
                        </script>";
        }
    }

?>