<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                    alert('Akses ditolak, silahkan login dulu');
                    document.location.href = 'login.php';
                </script>";
    }else{
        $username = $_SESSION['login'];
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
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="show.php">
    <script src="peosttest3.js"></script>
    <script src="jquery.js"></script>
    <style media="screen">
      *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color :hsl(152, 17%, 57%);
}
.container{
    width: 1800px;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 55%;
    left: 60%;
    overflow: hidden;
    border: 0px solid #ffffff;
    border-radius: 5px;
    box-shadow: 0px 0px 0px rgba(0,0,0,0.3);
}
.wrap{
    width: 100%;
    display: flex;
    animation: slide 16s infinite;
}
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);
    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);
    }
    100%{
        transform: translateX(-300%);
    }
}
img{
    /* width: 100%; */
    height : 490px
}
    </style>
</head>
<!-- <script>
    confirm('anda yakin ingin mengakses website ini?!!');
</script> -->
<body style = "background-color : #8EBBA7;">
<nav>
        <div class="wrapper">
            <div class="logo"><a href=""><b>Cafe Finder</b></a></div>
            <div class="menu">
                <ul>
                    <li class="button1"><a href="input-user.php"><b>Review</b></a></li>
                    <li class="button1"><a href="#"><b>Home</b></a></li>
                    <li class="button1"><a href="halaman baru.html"><b>About Us</b></a></li>
                    <!-- <li><img src="moon.png" id = "icon"></li> -->
                </ul>
            </div>

        </div>
    </nav>
    

    

    <div class="container">
        <div class="wrap">
            <img src="https://i.pinimg.com/564x/1c/27/fd/1c27fdb0a359e3139fd5f47e8dc11fea.jpg">
            <img src="https://i.pinimg.com/564x/1c/27/fd/1c27fdb0a359e3139fd5f47e8dc11fea.jpg">
            <img src="https://i.pinimg.com/564x/d3/03/91/d303910c03fa658350d9389056d451a5.jpg">
            <img src="https://i.pinimg.com/564x/d3/03/91/d303910c03fa658350d9389056d451a5.jpg">
            <img src="https://i.pinimg.com/564x/7d/46/a5/7d46a530f0a5505f34e69eb14dd3a934.jpg">
            <img src="https://i.pinimg.com/564x/7d/46/a5/7d46a530f0a5505f34e69eb14dd3a934.jpg">
            <img src="https://i.pinimg.com/564x/d3/03/91/d303910c03fa658350d9389056d451a5.jpg">
            <img src="https://i.pinimg.com/564x/d3/03/91/d303910c03fa658350d9389056d451a5.jpg">
            <img src="https://i.pinimg.com/564x/1c/27/fd/1c27fdb0a359e3139fd5f47e8dc11fea.jpg">
            <img src="https://i.pinimg.com/564x/1c/27/fd/1c27fdb0a359e3139fd5f47e8dc11fea.jpg">   
        </div>
    </div>
    <footer>
    <b>Copyright &copy; 2022</b>
   <b>Designed by dinamauldh</b>
</footer>
<script src="peosttest3.js">
</script>
</body>
</html>
    
    
    
    
    
    