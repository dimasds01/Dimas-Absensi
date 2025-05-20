<?php
include '../koneksi.php';

//Define variable
$id_karyawan = $_POST['id_karyawan'];
$nama = $_POST['nama'];
if (isset($_POST['simpan'])) {
	//$waktu = $_POST['waktu'];
	
	$save = "INSERT INTO tb_absen SET id_karyawan='$id_karyawan', nama='$nama', datang=NOW()";
	mysqli_query($koneksi, $save);

	if ($save) {
		echo "<script>alert('Anda sudah absen datang untuk hari ini') </script>";
		echo "<script>window.location.href = \"index.php?m=awal\" </script>";	
	}else{
		echo "kryptosssss";		
	}
}
elseif (isset($_POST['update'])){
	//$pulang = $_POST['pulang'];
	
	$update = "UPDATE tb_absen SET pulang=NOW() WHERE id_karyawan='$id_karyawan' AND DATE(datang)=CURRENT_DATE";
	mysqli_query($koneksi, $update);
	
	if ($update) {
		echo "<script>alert('Anda sudah absen pulang untuk hari ini') </script>";
		echo "<script>window.location.href = \"index.php?m=awal\" </script>";	
	}else{
		echo "kryptosssss";
	}

}
 ?>