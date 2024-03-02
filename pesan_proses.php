<?php

include 'koneksi.php';

$Nama=$_POST['Nama'];
$NIK=$_POST['NIK'];
$No_Hp=$_POST['No_Hp'];
$Tempat_Wisata=$_POST['Tempat_Wisata'];
$Tanggal_Kunjungan=$_POST['Tanggal_Kunjungan'];
$Pengunjung_Dewasa=$_POST['Pengunjung_Dewasa'];
$Pengunjung_Anak=$_POST['Pengunjung_Anak'];
$Harga_Tiket=$_POST['Harga_Tiket'];
$Total_Bayar=$_POST['Total_Bayar'];	

$sql = "insert into data_tiket (Nama,NIK,No_Hp,Tempat_Wisata,Tanggal_Kunjungan,Pengunjung_Dewasa,Pengunjung_Anak,Harga_Tiket,Total_Bayar) 
values('".$Nama."','".$NIK."','".$No_Hp."','".$Tempat_Wisata."','".$Tanggal_Kunjungan."','".$Pengunjung_Dewasa."',
	'".$Pengunjung_Anak."','".$Harga_Tiket."','".$Total_Bayar."')";

mysqli_query($koneksi,$sql);

?>
<script>
    window.open('tampil.php','_self');
</script>