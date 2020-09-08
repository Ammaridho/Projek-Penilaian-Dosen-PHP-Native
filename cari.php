<html>

<?php /*Mencari matakuliah pada saat ingin mengisi penilaiian dosen*/ ?>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>
    <body>

    <h2>Hasil Pencarian</h2>

    <form action="?module=cari#pos" method="post">
    	<input type="hidden" name='module' value="cari"/>
        <input type="text" name="matkul" placeholder="<?php echo $_POST['matkul']; ?>"/>
        <input type="submit" value="cari" class="tombol_sc"/>
    </form>
    <br/>
        <?php
            include "koneksi.php";
            session_start();
            $matkul = $_POST['matkul'];
            $semester=$_SESSION['semester'];
            $select = "SELECT * FROM dosen WHERE matkul LIKE '%$matkul' AND dosen.semester='$semester'";
            $hasil = mysqli_query($conn, $select);
        ?>
        		<table width="850" border="1">
				<tr>
					<td width="27">id</td>
					<td width="340">Mata kuliah</td>
					<td width="350">Dosen</td>
					<td colspan="1">aksi</td>
				</tr>
		</table>

		<?php
		$count=0;
		while($buff=mysqli_fetch_array($hasil)){
		$count++;
		?>
		<table width="850" border="1" >
			<tr>
				<td width="20"><?php echo $count;?></td>
				<td width="260"><?php echo $buff['matkul'];?></td>
				<td width="270"><?php echo $buff['nama'];?></td>
				<td width="80"><a href="?module=kuis&id_dosen=<?php echo $buff['id_dosen']; ?>">Isi Angket</a></td>
			</tr>
		</table>
        <?php
            };
            mysqli_close($conn);
        ?><br/>
        
    </body>
</html>