<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "berita";
$koneksinya = mysqli_connect($host, $user, $pass); #koneksi ke database
if (!$koneksinya) {
    die("Gagal Koneksi...");
}
$dbNya = mysqli_select_db($koneksinya, $dbName); #memilih database
if (!$dbNya) {
    $dbNya = mysqli_query($koneksinya, "CREATE DATABASE $dbName");
    if (!$dbNya) {
        die("Gagal Buat Database");
    }else {
        $dbNya = mysqli_select_db($koneksinya, $dbName);
        if (!$dbNya) {
            die("Gagal Konek Database");
        }
    }
}else {
    $sqlTabelMember = "create table if not exists member (
        id_member int auto_increment not null primary key,
        nama_lengkap varchar(20) not null,
        username varchar(20) not null,
        email varchar(20) not null,
        password varchar(255) not null,
        telp bigint(15) not null,
        jenis_kelamin enum ('Laki-laki','Perempuan') not null,
        photo varchar(23) not null default 'profil.jpg');";
    $sqlTabelKategori = "create table if not exists kategori (
        id_kategori int auto_increment not null primary key,
        kategori varchar(20) not null,);";
    $sqlTabelBerita = "create table if not exists member (
        id_berita int auto_increment not null primary key,
        judul varchar(30) not null,
        isi varchar(500) not null,
        hari varchar(20) not null,
        tanggal varchar(30) not null,
        gambar_berita bigint(15) not null);";
    mysqli_query($koneksinya, $sqlTabelMember);
    //mysqli_query($koneksinya, $sqlTabelKategori);
    //mysqli_query($koneksinya, $sqlTabelBerita);
}
?>