<!DOCTYPE html>
<html lang="en">
<head>
    <link  href="'https://fonts.googleapis.com/css2?family=Bungee+Spice&family=Dancing+Script&family=Dangrek&family=Roboto:ital,wght@1,300&display=swap'">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review cafe</title>
    <link rel="stylesheet"  href="css/style2.css">
    <script src="peosttest3.js"></script>
    <script src="jquery.js"></script>
</head>
<body style="background-image: url(https://i.pinimg.com/564x/dd/6e/7c/dd6e7cab19114331503d64d32b3f716b.jpg);">
    
    <div class="input">
        <p><b>Registrasi</b></p>
        <form action="" method="POST" enctype="multipart/form-data">
            <label id="form" for="email"> Email :  </label>
            <input id="form" type="email" name="email" placeholder="Masukkan email"><br>

            <label id="form" for="username">Username:  </label>
            <input id="form" type="text" name="username"  placeholder="Masukkan username"><br>

            <label id="form" for="password"> Password:  </label>
            <input id="form" type="password" name="password"  placeholder="Masukkan password"><br>

            <label id="form" for="konfirmasi"> Konfirmasi Password :  </label>
            <input id="form" type="password" name="konfirmasi"  placeholder="Konfirmasi password"><br>

            <button id = "submit" type="submitt" name="regis" id="email" class="btn btn-primary deep-purple btn-block " required>Submit</button>
        </form>
        <p>Sudah punya akun?
                <a href="login.php">Login</a>
            </p>
    </div>
    
    <div class="boxinput2">
        <h1>CONTACT US</h1>
        <table>
        <tr>
            <td>Email</td>
            <td>nurmedinamaulidiah@gmail.com</td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>0822220604444</td>
        </tr>
        <tr>
            <td>Office</td>
            <td>
                Jl. Green Andara Residence Blok B3 No. 19, <br>
                Pangkalan Jati Baru, Cinere, Depok, Jawa Barat Indonesia<br>
            </td>
        </tr>


        </table>
    
    </div>

    
    

<script src="peosttest3.js">
</script>
</body>
</html>

<?php
    require 'konfig.php';

    if(isset($_POST['regis'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        // cek username udah digunakan atau belum
        $sql = "SELECT * FROM akun WHERE username='$username'";
        $user = $db->query($sql);

        if(mysqli_num_rows($user) > 0){
            echo "<script>
                    alert('username telah digunakan, silahkan gunakan username lain')
                </script>";
        }else{
            // cek konfirmasi password
            if($password == $konfirmasi){

                $password = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO akun (email, username, psw)
                            VALUES ('$email', '$username', '$password')";
                $result = $db->query($query);

                if($result){
                    echo "<script>
                    alert('Registrasi Berhasil')
                </script>";
                }else{
                    echo "<script>
                    alert('Registrasi Gagal')
                </script>";
                }
            }else{
                echo "<script>
                    alert('konfirmasi password salah!')
                </script>";
            }
        }
    }

?>
