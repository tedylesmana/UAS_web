<?php
include "db_connect.php";
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$kode_pos = $_POST['kode_pos'];
$query=mysqli_query($kon, "INSERT INTO mahasiswa (npm, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, kode_pos)
VALUES ('$npm', '$nama','$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin','$alamat','$kode_pos')")or die (mysqli_error());
if($query) 
{
?>
<script language="JavaScript">
document.location='mahasiswa.php'</script>
<?php
}
?>