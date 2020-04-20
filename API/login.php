<?php
include_once "connection.php";
class usr{}

$username = $_POST["username"];
$password = md5($_POST["password"]);

if ((empty($username)) || (empty($password))) {
 $response = new usr();
 $response->success = 0;
 $response->message = "Kolom tidak boleh kosong";
 die(json_encode($response));
}

$query = mysqli_query($koneksi, "SELECT * FROM konsumen WHERE username='$username' AND password='$password'");
$checkuser = mysqli_query($koneksi, "SELECT * FROM konsumen WHERE username='$username'");

$row = mysqli_fetch_array($query); 
$row2 = mysqli_fetch_array($query); 
if (!empty($row)){
 $response = new usr();
 $response->success = 1;
 $response->message = "Selamat datang ".$row['username'];
 $response->username = $row['username'];
 die(json_encode($response));

} else if(!empty($row2)){
    $response = new usr();
    $response->success = 0;
    $response->message = "Password salah";
    die(json_encode($response));
}else{
    $response = new usr();
    $response->success = 0;
    $response->message = "Username Tidak Terdaftar";
    die(json_encode($response));
}

mysqli_close($con);
?> 