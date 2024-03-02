<?php
	include 'koneksi.php';
?>
<html>
	<head>
		<title> E-TICKET </title>
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
	<form method="post" action="pesan_proses.php">
		<table border="2" width="78%" cellpadding="10" bgcolor="#7FFFD4">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td>
					<input type="text" name="Nama" style="width:80%"></input>
				</td>
			</tr>
			<tr>
				<td>Nomor Identitas</td>
				<td>:</td>
				<td>
					<input type="text" name="NIK" style="width:80%"></input>
				</td>
			</tr>
			<tr>
				<td>No. Hp</td>
				<td>:</td>
				<td><font size="2"><i>*Isi dengan nomor yang bisa dihubungi</i></font>
					<input type="text" name="No_Hp" style="width:80%"></input>
				</td>
			</tr>
			<tr>
				<td>Tempat Wisata</td>
				<td>:</td>
				<td>
					<select name="Tempat_Wisata" id="tw">
						<option value="20000">Museum Fatahillah</option>
						<option value="25000">Monumen Nasional</option>
						<option value="30000">Taman Mini Indonesia Indah</option>
					</select>
					<input type="hidden" name="Tempat_Wisata"></input>
			</tr>
			<tr>
				<td>Tanggal Kunjungan</td>
				<td>:</td>
				<td>
					<input type="date" name="Tanggal_Kunjungan" style="width:80%"></input>
				</td>
			</tr>
			<tr>
				<td>Pengunjung Dewasa</td>
				<td>:</td>
				<td>
					<input type="number" id="pengunjungDewasa" name="Pengunjung_Dewasa" style="width:80%"></input>
				</td>
			</tr>
			<tr>
				<td>Pengunjung Anak-Anak</td>
				<td>:</td>
				<td>
					<input type="number" name="Pengunjung_Anak" style="width:80%"></input>
				</td>
			</tr>
			<tr>
				<td>Harga Tiket</td>
				<td>:</td>
				<td>
					<input type="text" id="hargaTiket" style="width:80%"></input>
					<input type="hidden" name="Harga_Tiket" style="width:80%"></input>
				</td>
			</tr>
			<tr>
				<td>Total Bayar</td>
				<td>:</td>
				<td>
					<input type="text" id="totalBayar" style="width:30%">
					<input type="hidden" name="Total_Bayar" style="width:30%">
				</td>
			</tr>
		</table>
					<br>
					<div class="form-check">
						<input class="form-check input" id="Persetujuan" type="checkbox" value="" required>
						<label class="form-check label" for="Persetujuan">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan
						syarat dan ketentuan yang berlaku
					</div>
					<br>
					<input type="submit" name="btn_submit" value="Pesan">
					<input type="button" id="btntotalBayar" value="Total Bayar">
					<input type="reset" value="Cancel">
	</form>
</div>
</font>
</body>
<script>
	let hargaTiket = document.getElementById('hargaTiket');
	let btntotalBayar = document.getElementById('btntotalBayar');
	let totalBayar = document.getElementById('totalBayar');
	const tempatWisata = document.querySelector(`[id="tw"]`);
	let selectTempatWisata = document.querySelector('input[name=Tempat_Wisata]');
	let pengunjungDewasa = document.querySelector('input[name=Pengunjung_Dewasa]');
	let pengunjungAnak = document.querySelector('input[name=Pengunjung_Anak]');
	let inputTotalBayar = document.querySelector('input[name=Total_Bayar]');
	let inputHargaTiket = document.querySelector('input[name=Harga_Tiket]');
	let hargaTiketTempatWisata;
	
	tempatWisata.addEventListener(`change`, (e) => {
	const select = e.target;
	const value = select.value;
	const desc = select.options[select.selectedIndex].text;
	hargaTiket.value = "Rp. "+value;
	inputHargaTiket.value = value;
	selectTempatWisata.value=desc;
	hargaTiketTempatWisata = value;
	});
	
	btntotalBayar.addEventListener("click", function(){
		let totalTiketDewasa = pengunjungDewasa.value*hargaTiketTempatWisata;
		let totalTiketAnak = pengunjungAnak.value*(hargaTiketTempatWisata/2);
		totalBayar.value = "Rp. "+(totalTiketDewasa+totalTiketAnak);
		inputTotalBayar.value = totalTiketDewasa+totalTiketAnak;
	});

</script>
</html>