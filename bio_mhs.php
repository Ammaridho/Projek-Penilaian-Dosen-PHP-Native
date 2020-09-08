<?php
include "koneksi.php";
session_start();
$select="Select * from mahasiswa where username='$_SESSION[username]'";
$hasil=mysqli_query($conn, $select);
$buff=mysqli_fetch_array($hasil);

if(isset($_SESSION['username']))
?>
<h2>Profil</h2>
<table width="100%" style="border= 0;">
	<tr style="border: 0;">
		<td style="border: 0;">Nama</td>
		<td style="border: 0;">:</td>
		<td style="border: 0;"><?php echo $buff['nama'];?></td>
	</tr>
	<tr style="border: 0;">
		<td style="border: 0;">NIM</td>
		<td style="border: 0;">:</td>
		<td style="border: 0;"><?php echo $buff['nim'];?></td>
	</tr>
	<tr style="border: 0;">
		<td style="border: 0;">Username</td>
		<td style="border: 0;">:</td>
		<td style="border: 0;"><?php echo $buff['username'];?></td>
	</tr>
	<tr style="border: 0;">
		<td style="border: 0;">Password</td>
		<td style="border: 0;">:</td>
		<td style="border: 0;"><?php echo $buff['password'];?></td>
	</tr>
	<tr style="border: 0;">
		<td style="border: 0;">Semester</td>
		<td style="border: 0;">:</td>
		<td style="border: 0;"><?php echo $buff['semester'];?></td>
	</tr>
	<tr style="border: 0;">
		<td style="border: 0;">Angkatan</td>
		<td style="border: 0;">:</td>
		<td style="border: 0;"><?php echo $buff['angkatan'];?></td>
	</tr>
</table>