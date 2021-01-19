<?php 
include_once('../connection.php'); 
class usr{} 
 
$no_nota = $_POST["no_nota"]; 
$query = "SELECT `username`, `tgl_jual`, `no_nota`,`pembelian`, `ongkir`, `total_biaya`, `status` FROM penjualan p
          JOIN konsumen k ON p.kd_konsumen=k.kd_konsumen
          where no_nota='$no_nota'";
$result = mysqli_query($koneksi,$query); 
$row = mysqli_fetch_array($result); 
while(!empty($row)) 
{ 
  $response = new usr();
  $response->username = $row['username']; 
  $response->no_nota = $row['no_nota']; 
  $response->tanggal = $row['tgl_jual']; 
  $response->pembelian = $row['pembelian']; 
  $response->ongkir = $row['ongkir']; 
  $response->total_biaya = $row['total_biaya']; 
  $response->status = $row['status']; 
  die(json_encode($response)); 
} 
mysqli_close($koneksi); 
?> 