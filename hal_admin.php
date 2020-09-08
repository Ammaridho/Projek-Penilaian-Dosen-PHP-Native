<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>UNIVERSITY OF OXFORD</title>
    <link rel="stylesheet" type="text/css" charset="utf-8" href="style/style.css" />
  </head>
  <body>
	<div class="container">
		<div class="header">
		<div class="logo"><img src="images/logo.png" width="110" height="110" /></div>
			<ul id="navmenu">
				<li class="menu-item"><a href="hal_admin.php">Homepage</a></li>
				<li class="menu-item"><a href="hal_admin.php">Homepage</a></li>
				<li class="menu-item has-child">
					<span>Daftar</span>
					<ul class="menu sub-menu">
						<li class="menu-item sub-menu-item"><a href="?module=data_dosen#pos">Daftar Dosen</a></li>
						<li class="menu-item sub-menu-item"><a href="?module=data_mahasiswa#pos">Daftar Mahasiswa</a></li>
					</ul>
				</li>
				<li class="menu-item has-child">
					<span>Penilaian Dosen</span>
					<ul class="menu sub-menu">
						<li class="menu-item sub-menu-item"><a href="?module=daftarBaru_kuisioner#pos">Buat Pertanyaan</a></li>
						<li class="menu-item sub-menu-item"><a href="?module=data_kuisioner#pos">Daftar Pertanyaan</a></li>
					</ul>
				</li>
				<li class="menu-item has-child">
					<span>Hasil</span>
					<ul class="menu sub-menu">
						<li class="menu-item sub-menu-item"><a href="?module=hasil#pos">Hasil Penilaian</a></li>
						<li class="menu-item sub-menu-item"><a href="print.php">Cetak Hasil Penilaian</a></li>
					</ul>
				</li>
				<li class="menu-item"><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="page">
		<?php if(isset($_GET['module']))
			include "$_GET[module].php";
		else
			include "admin.php";?>
		</div>
		<div class="footer">
                <p>&copy; 2019. M Ammaridho S and Inka Sulistiani</p>
        </div>
	</div>
  </body>
</html>