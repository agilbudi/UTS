<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: main.php");
    exit;
} 
include 'sql.php';
require 'funtion.php';
$data = query_getData("SELECT * FROM member");
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
    <style>
    body,html {
        background-image: url("https://images.pexels.com/photos/1619317/pexels-photo-1619317.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        height: 100%;
        margin: 0;
    }
    </style>
</head>
<body>
    <table border="0" style="width: 80%" align="center" cellpadding="30" cellspacing="0">
        <thead align="center">
            <td>DATA PENGGUNA/MEMBER <br/><br/>
            <a href="tBerita.php"><button class="btn btn-primary" name="tambahBerita">
                Tambah Berita</button></a>
            <a href="logout.php"><button class="btn btn-primary" name="logout">
                Keluar</button></a></td>
        </thead>

        <tbody align="center">
            <td>
                <table border="1" cellpadding="10" cellspacing="0" style="font-family: 'Courier New', Courier, monospace; border-color: white; background-color: rgba(0, 0, 5, 0.6)">
                    <tr>
                        <th>No</th>
                        <th>Action</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Telp</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach($data as $row): ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><a href="">ubah</a></td>
                        <td><?= $row["id_member"] ?></td>
                        <td><?= $row["username"] ?></td>
                        <td><img src="foto/<?= $row["photo"] ?>" width="60"></td>
                        <td><?= $row["nama_lengkap"] ?></td>
                        <td><?= $row["email"] ?></td>
                        <td><?= $row["telp"] ?></td>
                        <td><?= $row["jenis_kelamin"] ?></td>
                    </tr>
                    <?php $i++; endforeach;?>
                </table>
            </td>
        </tbody>
        <tfoot align="center">
            <td style="font-family: 'Courier New', Courier, monospace; font-size: 10pt">April 2020</td>
        </tfoot>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>