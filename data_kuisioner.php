<html>

	<body>
		<h2>Daftar Kuisioner</h2>
		<a href="?module=daftarBaru_kuisioner#pos">Daftar Baru</a><br></br>
		<?php
		include "koneksi.php";
		$select="SELECT * FROM kuisioner";
		$hasil=mysqli_query($conn, $select);
		?>
		<table width="780" border="1">
				<tr>
					<td width="20">No</td>
					<td width="500">Pertanyaan</td>
					<td colspan="2">Aksi</td>
				</tr>


		<?php
		$count=0;
		while($buff=mysqli_fetch_array($hasil)){
		$count++;
		?>

			<tr>
				<td width="20"><?php echo $count;?></td>
				<td width="500"><?php echo $buff['pertanyaan'];?></td>
				<td width="55"><a href="?module=edit_kuisioner&id_soal=<?php echo $buff['id_soal'];?>">edit</a></td>
				<td><a href="hapus_kuisioner.php?id_soal=<?php echo $buff['id_soal'];?>">hapus</a></td>
			</tr>
			<?php
			};
			mysqli_close($conn);
			?><br />
		</table>
	</body>
</html>