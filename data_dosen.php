<html>
	
	<body>
		<h2>Daftar Dosen</h2>
		<a href="?module=daftarBaru_dosen#pos">Daftar Baru</a><br></br>  
		<?php
		include "koneksi.php";
		$select="SELECT * FROM dosen";
		$hasil=mysqli_query($conn, $select);        //untuk menampilkan tabel dosen
		?>

		
		<table width="850" border="1">					
			<tr>
				<td width="20">No</td>
				<td width="120">NIP</td>
				<td width="140">Nama</td>
				<td width="77">Username</td>
				<td width="77">Password</td>
				<td width="90">Semester</td>
				<td width="125">Mata Kuliah</td>
				<td colspan="2">Aksi</td>
			</tr>

			<?php
			$count=0;
			while($buff=mysqli_fetch_array($hasil)){  // array 
			$count++;
			?>
			<tr>
				
				<td width="20"><?php echo $count;?></td>      
				<td width="120"><?php echo $buff['nip'];?></td>        
				<td width="140"><?php echo $buff['nama'];?></td>
				<td width="77"><?php echo $buff['username'];?></td>
				<td width="77"><?php echo $buff['password'];?></td>
				<td width="90"><?php echo $buff['semester'];?></td>
				<td width="125"><?php echo $buff['matkul'];?></td>
				<td width="55"><a href="?module=edit_dosen&id_dosen=<?php echo $buff['id_dosen'];?>">edit</a></td>  
				<td><a href="hapus_dosen.php?id_dosen=<?php echo $buff['id_dosen'];?>">hapus</a></td>   
			</tr>
			<?php
		};
		mysqli_close($conn);
		?><br />

		</table>
		
	</body>
</html>