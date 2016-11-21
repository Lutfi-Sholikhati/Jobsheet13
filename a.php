<?php
include "koneksi.php";
$Id_Mobil = $_POST['Id_Mobil'];
$Merk = $_POST['Merk'];
$Model = $_POST['Model'];
$Tipe = $_POST['Tipe'];
$Pintu = $_POST['Pintu'];
$Tahun_Produksi = $_POST['Merk'];
$Negara_Pembuat = $_POST['Negara_Pembuat'];
$Jenis_Produksi = $_POST['Jenis_Produksi'];

if (isset($_POST['Input']))
{
	$sql = "INSERT INTO mobil'('Id_Mobil, Merk, Model, Tipe, Pintu, Tahun_Produksi, Negara_Pembuat,'Jenis_Produksi') VALUES ('$Id_Mobil', '$Merk', '$Model','$Tipe', '$Pintu', '$Tahun_Produksi', '$Negara_Pembuat','$Jenis_Produksi')";
	$exe =mysql_query($sql);
}
elseif (isset($_POST['Edit']))
 {
	$sql = "UPDATE mobil SET 'Merk'='$Merk', 'Model'='$Model','Tipe'='$Tipe', 'Pintu'='$Pintu', 'Tahun_Produksi'='$Tahun_Produksi','Negara_Pembuat'='$Negara_Pembuat','Jenis_Produksi'='$Jenis_Produksi'
	WHERE 
	'Id_Mobil'='$Id_Mobil'";
	$exe =mysql_query($sql);
 }
 elseif (isset($_POST['Delete']))
 {
	$sql = "DELETE FROM mobil WHERE
	'Id_Mobil'='$Id_Mobil'";
	$exe =mysql_query($sql);
 }
 elseif (isset($_POST['Search']))
 {
	$sql = "SELECT * FROM mobil WHERE 
	'Id_Mobil'='$Id_Mobil'";
	$exe =mysql_query($sql);

	echo "<table>\n";
	while ($line = mysql_fetch_array($exe, MYSQL_NUM))
	{
		echo "\t<tr>\n";
	  	foreach ($line as $col_value)
	  	{
	  		echo "\t\t<td>$col_value</td>\n";
	  	}
	  	echo "\t</tr>\n";
	}
	echo "</table>\n";
 }
 ?>