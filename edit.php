<form method="post">

<H1> INPUT DATA MAHASISWA BARU </H1>
	<table align="left">

		<tr>

		<td>Nama:</td>

			<td><input type="text" name="nama"></td>

		</tr>

		<tr>

		<td>Nim:</td>

			<td><input type="text" name="nim"></td>

		</tr>

		<tr>

			<td>Jenis kelamin:</td>

			<td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki

				<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan 

				<input type="radio" name="jenis_kelamin" value="Dll">Dll </td>

		</tr>

		<tr>

			<td>Program Studi:</td>

			<td>

				<select name="program_studi">

				<option>Pilih</option>

				<option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>

				<option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran</option>

				<option value="D3 Teknik Informatika">D3 Teknik Informatika</option>

				<option value="D3 Komputerisasi Akutansi">D3 Komputerisasi Akutansi</option>

				<option value="D4 Sistem Multimedia">D4 Sistem Multimedia</option>

				</select>

			</td>

		</tr>

		<tr>

			<td>Faklutas:</td>

			<td>

				<select name="fakultas">

				<option>Pilih</option>

				<option value="FakultasIlmuTerapan">FakultasIlmuTerapan</option>

				<option value="FakultasKomunikasi&Bisnis">FakultasKomunikasi&Bisnis</option>

				<option value="FakultasIndustriKreatif">FakultasIndustriKreatif</option>

				<option value="FakultasTeknikElektro">FakultasTeknikElektro</option>

				<option value="FakultasEkonomi&Bisnis">FakultasEkonomi&Bisnis</option>

				</select>

			</td>

		</tr>



		<tr>

			<td>Asal:</td>

			<td><textarea name="asal"></textarea></td>

		</tr>

		<tr>

			<td>Moto Hidup:</td>

			<td><textarea name="moto"></textarea></td>

		</tr>

		<tr>

			<td>
				<input type="submit" name="submit" value="Daftar">
			</td>

		</tr>

	</table>	

</form>

<?php
if (isset($_POST['kirim'])) {
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "dbmahasiswa";
	$conn = new mysqli($host, $username, $password, $db);
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$prodi = $_POST['progeram_studi'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];
	$sql = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', jenis_kelamin = '$jenis_kelamin', program_studi = '$program_studi', fakultas = '$fakultas', asal = '$asal', moto = '$moto' WHERE nim = '$nim'";
	$has = mysqli_query($conn, $sql);
	if ($has) {
		echo "Data Telah diubah";
		header("location:caridata.php");
	}else{
		echo "Data gagal diubah";
	}
	$hasil = mysqli_query($conn, $query);
			echo "Data Berhasil Ditambah, silahkan <a href ='caridata.php'>klik</a> untuk lanjut";
}
?>