<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: main.php");
    exit;
}
require 'funtion.php';

$user = $_SESSION["username"];
$foto = $_SESSION["photo"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Berita</title>
    <style>
    body,html { 
        background-image: url("https://images.pexels.com/photos/1619317/pexels-photo-1619317.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: lightslategray;
        height: 100%;
        margin: 0;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="card" style="background-color: rgba(0,0,0,0.0)">
            <div class="card-header bg-dark">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <a class="navbar-brand" href="#">
                    <img src="foto/<?= $foto ?>" alt="" style="width:40px;"> <?php echo " $user"; ?>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Keluar</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="card-body bg-light" style="margin-top: 10%">
                <h5 class="card-title" name="judul">Title</h5>
                <p class="card-text" name="isi">Content</p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>