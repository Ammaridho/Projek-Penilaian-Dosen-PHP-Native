<?php
include "koneksi.php";
session_start();
$select="Select * from dosen where username='$_SESSION[username]'";
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
		<td style="border: 0;">NIP</td>
		<td style="border: 0;">:</td>
		<td style="border: 0;"><?php echo $buff['nip'];?></td>
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
		<td style="border: 0;">Mata Kuliah</td>
		<td style="border: 0;">:</td>
		<td style="border: 0;"><?php echo $buff['matkul'];?></td>
	</tr>
	<tr style="border: 0;">
		<td style="border: 0;">Email</td>
		<td style="border: 0;">:</td>
		<td style="border: 0;"><?php echo $buff['email'];?></td>
	</tr>
	<tr style="border: 0;">
		<td style="border: 0;">No tlp</td>
		<td style="border: 0;">:</td>
		<td style="border: 0;"><?php echo $buff['notel'];?></td>
	</tr>
</table>