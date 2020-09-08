<html>

	<body>
		<h2>Daftar Mahasiswa</h2>
		<a href="?module=daftarBaru_mahasiswa#pos">Daftar Baru</a><br></br>
		<?php
		include "koneksi.php";
		$select="Select * from mahasiswa";
		$hasil=mysqli_query($conn, $select);
		?>
		<table width="850" border="1">
				<tr>
					<td width="20">No</td>
					<td width="150">NIM</td>
					<td width="130">Nama</td>
					<td width="77">Username</td>
					<td width="77">Password</td>
					<td width="80">Semester</td>
					<td width="135">Angkatan</td>
					<td colspan="2">Aksi</td>
				</tr>

		<?php
		$count=0;
		while($buff=mysqli_fetch_array($hasil)){
		$count++;
		?>

			<tr>
				<td width="20"><?php echo $count;?></td>
				<td width="150"><?php echo $buff['nim'];?></td>
				<td width="130"><?php echo $buff['nama'];?></td>
				<td width="77"><?php echo $buff['username'];?></td>
				<td width="77"><?php echo $buff['password'];?></td>
				<td width="80"><?php echo $buff['semester'];?></td>
				<td width="135"><?php echo $buff['angkatan'];?></td>
				<td width="55"><a href="?module=edit_mhs&id_mahasiswa=<?php echo $buff['id_mahasiswa'];?>">edit</a></td>
				<td><a href="hapus_mhs.php?id_mahasiswa=<?php echo $buff['id_mahasiswa'];?>">hapus</a></td>
			</tr>
			<?php
			};
			mysqli_close($conn);
			?><br />
		</table>
	</body>
</html>