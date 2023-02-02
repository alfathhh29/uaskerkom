<?php
include "../../../koneksi.php";
$KodePasien = $_POST['KodePasien'];
$NamaPasien = $_POST['Registation_code'];
$AlamatPasien = $_POST['NamaPasien'];
$GenderPasien = $_POST['GenderPasien'];
$UmurPasien = $_POST['UmurPasien'];
$TeleponPasien = $_POST['policlinc_id'];
$docter = $_POST['dokter_id'];


$insertPasien = "INSERT INTO pasien values ('$KodePasien','$NamaPasien','$AlamatPasien','$GenderPasien','$UmurPasien','$TeleponPasien','$docter')";

$insertPasien_query = mysqli_query($connect,$insertPasien);

if ($insertPasien_query)
{
	header('location:../../../halaman_utama.php?tabel_pasien=$tabel_pasien');
}
else
{
	echo "Insert gagal dijalankan";
}

?>