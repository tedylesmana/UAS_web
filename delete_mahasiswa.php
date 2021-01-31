<?php
include "db_connect.php";
$npm = $_GET['npm'];
$query = "DELETE FROM mahasiswa WHERE npm = $npm";
mysqli_query($kon, $query);
?>
<script language="JavaScript">
document.location='mahasiswa.php'</script>
<?php
?>