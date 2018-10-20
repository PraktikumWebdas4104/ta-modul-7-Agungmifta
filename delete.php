<?php

		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "dbmahasiswa";
		$conn = new mysqli($host, $username, $password, $db);
		$nim = $_GET['nim'];
		$qry = "DELETE FROM mahasiswa WHERE nim = '$nim'";
		$has = mysqli_query($conn, $qry);
			
			if ($has) {
				echo "Data Sudah dihapus...";
			}else{
				echo "Data Gagal dihapus";
		}
?>