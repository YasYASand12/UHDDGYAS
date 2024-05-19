
<?php
include_once 'koneksi.php';

$nama = $_POST['nama'];
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];

$insert = $koneksi->query("INSERT INTO user 
(nama, id, email, password) 
values
($nama, '$id', '$email', '$password')
");

if ($insert) {
    echo "Kamu Berhasil Insert Data:)";
}else {
    echo "Kamu Gagal Insert Data:(";
}


?>