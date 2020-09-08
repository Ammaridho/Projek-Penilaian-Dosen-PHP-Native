<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>UNIVERSITY OF OXFORD</title>
    <link rel="stylesheet" type="text/css" charset="utf-8" href="style/style.css" />
  </head>
  <body>
	<div class="container">
		<div class="header">
		<div class="logo"><img src="images/logo.png" width="110" height="110"  /></div>
			<ul id="navmenu">
				<li class="menu-item"><a href="hal_mahasiswa.php">Homepage</a></li>
					<li class="menu-item"><a href="hal_mahasiswa.php">Homepage</a></li>
					<li class="menu-item"><a href="?module=bio_mhs#pos">Profil</a></li>
					<li class="menu-item"><a href="?module=pilih_dosen#pos">Penilaian Dosen</a></li>
					<li class="menu-item"><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="page">
		<?php if(isset($_GET['module']))
			include "$_GET[module].php";
		else
			include "mhs.php";?>
		</div>
		<div class="footer">
                <p>&copy; 2019. M Ammaridho S and Inka Sulistiani</p>
        </div>
	</div>
  </body>
</html>