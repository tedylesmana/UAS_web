<?php
include "db_connect.php";
$query=mysqli_query ($kon, "SELECT * FROM mahasiswa")or die (mysqli_error());
$jumlah = mysqli_num_rows($query);
echo "<html>";
echo "<head>";
echo "</head>";
echo "<title> mahasiswa </title>";
echo "<body>";
echo "<font color='red' face='Arial' size=5><b><br>Data mahasiswa</b></font><br><br>";
echo "<a href='add_mahasiswa.php' style=\"textdecoration: none\"><font face='tahoma' size='3'>Masukkan Data mahasiswa Baru</font></a><br>";
echo "<form action=\"mahasiswa.php\" method=\"get\">";
echo "<label>cari :</label>";
echo "<input type=\"text\" name=\"cari\">";
echo "<input type=\"submit\" value=\"cari\">";
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
}
echo "<br><table id=\"table1\" border=\"0\" cellpadding=\"3\" cellspacing=\"3\" bordercolor=\"blue\" bgcolor=\"white\">
<tr bgcolor='blue' height=\"50\"><font color='white'>
<th align='center'><font color='white' face='Arial' size=3>No</font></th>
<th align='center'><font color='white' face='Arial' size=3>NPM</font></th>
<th align='center'><font color='white' face='Arial' size=3>Nama</font></th>
<th align='center'><font color='white' face='Arial' size=3>Tempat Lahir</font></th>
<th align='center'><font color='white' face='Arial' size=3>Tanggal Lahir</font></th>
<th align='center'><font color='white' face='Arial' size=3>Jenis Kelamin</font></th>
<th align='center'><font color='white' face='Arial' size=3>Alamat</font></th>
<th align='center'><font color='white' face='Arial' size=3>Kode Pos</font></th>
<th align='center'><font color='white' face='Arial' size=3>Ubah?</font></th>
</tr>";
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query("select * from mahasiswa where nama like '%".$cari."%'");
}else{
    
}
$j=0;
while ($row=mysqli_fetch_array($query)) {
echo "<tr><td align='center' bgcolor='#657FFF'>";
echo "<font face='Arial' size=2>";
echo $j+1;
echo "</font>";
echo "</td>";
echo "<td align='left=' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["npm"];
echo"</font>";
echo"</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["nama"];
echo "</font>";
echo "</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["tempat_lahir"];
echo "<td align='left=' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["tanggal_lahir"];
echo"</font>";
echo"</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["jenis_kelamin"];
echo "</font>";
echo "</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["alamat"];
echo "</font>";
echo "</td>";
echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo $row["kode_pos"];
echo "</font>";
echo "</td>";

echo "<td align='left' bgcolor='#E8D3DF'>";
echo "<font face='Arial' size=2>";
echo "<a href='delete_mahasiswa.php?npm=".$row['npm']."' style=\"textdecoration: none\" title=\"Hapus\"><font face='tahoma' size='2'>Hapus</font></a>
<a href='edit_mahasiswa.php?npm=".$row['npm']."' style=\"textdecoration: none\" title=\"Edit\"><font face='tahoma' size='2'>Edit</font></a>"; $j++; }
echo "</table><br>";

?>