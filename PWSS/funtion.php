<?php
require 'sql.php';
 //koneksi ke database
$connect = mysqli_connect($host, $user, $pass, $dbName);

function query($query) {
    global $connect;
    $jadi = mysqli_query($connect, $query);
    return $jadi;
}
function query_getData($query){
    global $connect;
    $jadi = mysqli_query($connect, $query);
    $view = [];
    while ( $row = mysqli_fetch_assoc($jadi)) {
        $view[] = $row;
    }
    return $view;
}
function tambahMember($data){
    global $connect;
    $nama = htmlspecialchars($data["nama"]);
    $user = strtolower(htmlspecialchars($data["user"]));
    $email = htmlspecialchars($data["email"]);
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $telp = htmlspecialchars($data["telp"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $photo = upload();

    $userCheck = query("SELECT username FROM member WHERE username = '$user'");
    
    $password = password_hash($password, PASSWORD_DEFAULT);
    if (mysqli_fetch_assoc($userCheck)) {
        echo "<script>
            alert('Username sudah ada!');
            </script>";
            return false;
    }
    if (!$photo) {
        return false;
    }

    mysqli_query($connect,"INSERT INTO member VALUES
            ('', '$nama', '$user','$email','$password','$telp',
             '$jenis_kelamin', '$photo')");
    return mysqli_affected_rows($connect);
}

function upload(){
    $namaFile = $_FILES['photo']['name'];
    $ukuranFile = $_FILES['photo']['size'];
    $errorFile = $_FILES['photo']['error'];
    $tmpFile = $_FILES['photo']['tmp_name'];

    if ($errorFile === 4) {             //defauld gambar
        return "profil.jpg";
    }else {
        $ekstensi = ['jpg','jpeg','png'];                   //file bukan gambar
        $ekstensiFile = explode('.',$namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));
        if (!in_array($ekstensiFile, $ekstensi)) {
            echo "<script>
            alert('Data yang di upload bukan gambar!');
            </script>";
            return false;
        }

        if ($ukuranFile > 1500000) {
            echo "<script>
            alert('Gambar lebih besar dari 1,5 mb!');
            </script>";
            return false;
        }

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiFile;
        
        move_uploaded_file($tmpFile, 'foto/'.$namaFileBaru);
        return $namaFileBaru;
    }
}
?>