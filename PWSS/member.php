<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: main.php");
    exit;
} 
require 'funtion.php';

if (isset($_POST["member"])) {
    if (tambahMember($_POST) > 0) {
        echo "<script>
        alert('Terimakasih Sudah Menjadi Member!☺');
        document.location.href = 'main.php';
        </script>";
    }else {
        echo "<script>
        alert('Data Gagal Ditambahkan!');
        </script>";
    }
}
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
<style>
    body,html {
        background-image: url(back.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        height: 100%;
        margin: 0;
    }
</style>
<title>Jadi Member</title>
</head>
<body>
    <div class="container" style="height: 100%;" align="center">
        <table border="0" style="width: 50%; height: 100%;">
            <thead style="height: 5%">
                <tr>
                    <td> </td>
                </tr>
            </thead>
            <tbody align="center" >
                <tr>
                    <th> </th>
                </tr>
                <tr style="height: 10%">
                    <td><h2 style="font: italic bold; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Isikan Data Diri Anda</h2></td>
                </tr>
                <tr style="height: 70%">
                    <td>
                        <form method="post" enctype="multipart/form-data" action="" align="left" style="width: 80%; padding: 20px; border: 0px solid #f1f1f1; background-color: rgba(0, 0, 51, 0.2);">
                            <div class="form-group">
                                <input type="namespace" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                                <small id="nameHelp" class="form-text">Masukan nama lengkap anda.</small>
                                <br/>
                                <input type="namespace" class="form-control" id="user" name="user" placeholder="Username" required>
                                <small id="userHelp" class="form-text">Gunakan username unik tanpa spasi untuk login.</small>
                                <br/>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                                <small id="emailHelp" class="form-text">Masukan email Anda.</small>
                                <br/>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                <small id="passwordHelp" class="form-text">Buat password lebih dari 6 karakter kecuali karakter unik.</small>
                                <br/>
                                <input type="number" class="form-control" id="telp" name="telp" placeholder="Contoh: ID(62)" required>
                                <small id="telpHelp" class="form-text">Masukan nomor Telepon sekarang.</small>
                                <br/>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-secondary">
                                        <input type="radio" value="laki-laki" name="jenis_kelamin" required> Laki-laki
                                    </label>
                                    <label class="btn btn-secondary">
                                        <input type="radio" value="perempuan" name="jenis_kelamin" required> Perempuan
                                    </label>
                                </div><br/>
                                <small id="GenderHelp" class="form-text">Pilih Jenis Kelamin Anda.</small>
                                <br/>
                                <input id="photo" class="form-control-file" type="file" name="photo">
                                <small id="photohelp" class="form-text">Upload foto Anda.*</small>
                            </div>
                            <div align="right">
                                <button type="submit" class="btn btn-primary" name="member">Daftar Member</button>
                            </div>
                            <small class="form-text">*Optional untuk diisi.</small>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </tbody>
            <tfoot style="height: 5%" align="center">
                <tr>
                    <td style="font-family: 'Courier New', Courier, monospace; font-size: 8pt">April 2020</td>
                </tr>
            </tfoot>
        </table>
    </div>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>