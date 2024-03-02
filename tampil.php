<?php

include 'koneksi.php';
$sql = "select * from data_tiket";
$hsl = mysqli_query($koneksi, $sql);
?>
<html>
	<head>
		<title> TRAVELKU TICKET</title>
	</head>
	<body>
		<div align="center">
			<table border="2" width="78%" cellpadding="5" cellspacing="0">
						<font face="calibri" color="black"><h4>PT. TRAVELKU</h4></font>
						<font face="cambria" color="black"><h1>TRAVELKU TICKET</h1>					
				<tr align="center">
					<td width="104"><a href="index.php">Halaman Utama</a></td>
					<td width="149"><a href="tampil.php">Data Booking Tiket Wisata</a></td>
					<td width="137"><a href="pesan_tiket.php">Pesan Tiket</a></td>
					</tr>
				</table>
				<br>
<table align="center" cellpadding="3" bgcolor="#7FFFD4" cellspacing="1" border="1">
<tr bgcolor="gold">
<th> No.</th>
<th> Nama Pemesan </th>
<th> Nomor Identitas </th>
<th> No. Hp </th>
<th> Tempat Wisata </th>
<th> Tanggal Kunjungan </th>
<th> Pengunjung Dewasa </th>
<th> Pengunjung Anak-Anak </th>
<th> Harga Tiket </th>
<th> Total Bayar </th>
</tr>
<?php
$no = 1;
while ($row = mysqli_fetch_array($hsl)) {
    echo '  <tr>
			<td>'.$no.'</td>
            <td>'.$row['Nama'].'</td>
            <td>'.$row['NIK'].'</td>
            <td>'.$row['No_Hp'].'</td>
            <td>'.$row['Tempat_Wisata'].'</td>
            <td>'.$row['Tanggal_Kunjungan'].'</td>
            <td>'.$row['Pengunjung_Dewasa']." Orang".'</td>
			<td>'.$row['Pengunjung_Anak']." Orang".'</td>
			<td>'.$row['Harga_Tiket'].'</td>
			<td>'.$row['Total_Bayar'].'</td>
            <td>';?>
            <?php
    echo '
            </td>
            </tr>';
    $no++;
}

?>
</font>
</table>
</body>
</html>