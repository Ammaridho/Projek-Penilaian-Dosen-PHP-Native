<html>

	<body>
		<?php
		$id_dosen = $_GET['id_dosen'];			//FORM UNTUK EDIT DOSEN
		include "koneksi.php";
		$select = "SELECT * from dosen where id_dosen='$id_dosen'";  
		$hasil = mysqli_query($conn, $select);
		while($buff=mysqli_fetch_array($hasil)){
		?>
		<h2>Edit Data</h2><br />
		<form action="edit_dosen2.php" method="post">
		<table width="487" border="0">
		<input type="hidden" name="id_dosen" value="<?php echo $buff['id_dosen'];?>" />
			<tr>
				<td width="150">nama</td>
				<td width="327"><input type="text" name="nama" value="<?php echo $buff['nama'];?>" /></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip" value="<?php echo $buff['nip'];?>" /></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $buff['username'];?>" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $buff['password'];?>" /></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="text" name="semester" value="<?php echo $buff['semester'];?>" /></td>
			</tr>
			<tr>
				<td>Matakuliah</td>
				<td><input type="text" name="matkul" value="<?php echo $buff['matkul'];?>" /></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $buff['email'];?>" /></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td><input type="text" name="notel" value="<?php echo $buff['notel'];?>" /></td>
			</tr>
			<tr>
				<td height="68" align="right"><input type="reset" value="reset" class="tombol_sc"/></td>
				<td><input type="submit" value="submit" class="tombol_sc"/></td>
			</tr>
		</table>
		</form>
		<?php
		};
		mysqli_close($conn);
		?>
	</body>
</html>