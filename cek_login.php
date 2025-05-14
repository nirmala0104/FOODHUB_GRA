<?php
// mengaktifkan session php
session_start();

//menambahkan file koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form login atau index.php
//di bagian ini yg ditangkap harus sesuai dengan NAME yang ada pada field INPUT
$username = $_POST['username'];
//penambahan md5 adalah untuk melakukan enkripsi data password, agar sama pada sisi database
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($con, "select * from db_user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:menuutama.php");
} else {
    header("location:index.php?pesan=gagal");
}
