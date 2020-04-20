<?php
include_once('connection.php');
$username =$_POST['username'];
$get_kd_kons = mysqli_fetch_row(mysqli_query($koneksi,"select kd_kons from konsumen where username='$username'"));
$kd_kons = $get_kd_kons[0];

$total=$_POST['total'];
$pembayaran=$_POST['pembayaran'];
$kembalian=$_POST['kembalian'];
$tanggal=date("Y-m-d");
$insert = "INSERT INTO penjualan(kd_konsumen,tgl_jual,total_biaya,pembayaran,kembalian) VALUES($kd_kons,'$tanggal','$total','$pembayaran','$kembalian')";
$exeinsert = mysqli_query($koneksi,$insert);
$response = array();
if($exeinsert)
{
$response['code'] =1;
$response['test'] =$kd_kons;
$response['message'] = "Success ! Pemesanan dibuat";
}
else
{
$response['code'] =0;
$response['test'] =$kd_kons;
$response['message'] = "Failed ! Pemesanan gagal dibuat";
}
echo json_encode($response);
?> 