<?php
include '../koneksi.php';
if (isset($_POST['simpan2'])) {
	$pulang = $_POST['pulang'];


}

$save = "UPDATE tb_absen SET pulang='$pulang'
WHERE id='$id'";
mysqli_query($koneksi, $save);

if ($save) {
	echo "<script>alert('Anda sudah absen pulang untuk hari ini') </script>";
	 echo "<script>window.location.href = \"index.php?m=awal\" </script>";	
}else{
	echo "kryptosssss";
}

 ?>