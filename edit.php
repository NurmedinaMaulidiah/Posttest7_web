<?php

require 'konfig.php';

// Manangkap
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

// Tampilkan value inputan dari id
$result = mysqli_query($db, 
"SELECT * FROM review WHERE id = '$id'");
$row = mysqli_fetch_array($result);

if(isset($_POST['login'])){
    $bulan = $_POST['bulan'];
    $harga = $_POST['harga'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extension = strtolower(end($x));
    $gambar_baru = "$nama.$extension";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, "gambar/".$gambar_baru)){
    $result = mysqli_query($db, 
    "UPDATE review SET 
    bulan = '$bulan',
    harga = '$harga',
    nama = '$nama',
    alamat = '$alamat',
    gambar = '$gambar_baru'
    WHERE id = '$id'");

    if($result){
        echo " 
            <script> 
            alert('Data Berhasil DiUpdate');
            document.location.href = 'show.php';
            </script>
        ";
    } else {
        echo " 
            <script> 
            alert('Data Gagal DiUpdate');
            </script>
        ";
    }
}
}
?>

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
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=""><b>Cafe Finder</b></a></div>
            <div class="menu">
                <ul>
                <li class="button1"><a href="show.php"><b>Lihat Review</b></a></li>
                    <li class="button1"><a href="tampilan-awal.php"><b>Home</b></a></li>
                    <li class="button1"><a href="halaman baru.html"><b>About Us</b></a></li>
                    <li class="button1"><a href="logout.php"><b>Logout</b></a></li>
                    <li><img src="moon.png" id = "icon"></li>
                </ul>
            </div>

        </div>
    </nav>
    
    <div class="input">
        <p><b>Review Cafe</b></p>
        <form action="" method="POST" enctype="multipart/form-data">
            <label id="form" > Bulan Kunjungan :  </label>
            <input id="form" type="date" menu="menu"  name = "bulan"  value = <?= $row['bulan']?>><br>

            <label id="form" > Range Harga :  </label>
            <input id="form" type="text" menu="menu"  name = "harga" value = <?= $row['harga']?>><br>

            <label id="form" > Nama cafe :  </label>
            <input id="form" type="text" menu="menu"  name = "nama" value = <?= $row['nama']?>><br>

            <label id="form" > Alamat :  </label>
            <input id="form" type="text" menu="menu"  name = "alamat"  value = <?= $row['alamat']?>><br>

            <label id="form" for="">Upload :</label><br>
            <input type="file" name="gambar" value = <?= $row['gambar']?>>
            

            
            <button id = "submit" type="submitt" name="login" id="email" class="btn btn-primary deep-purple btn-block " required>Submit</button>
        </form>
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
