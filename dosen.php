<?php //untuk tampilan home admin
include "koneksi.php";
session_start();
$select="Select * from dosen where id_dosen='$_SESSION[id_dosen]'";
$hasil=mysqli_query($conn, $select);
$buff=mysqli_fetch_array($hasil);

if(isset($_SESSION['id_dosen']))
?>
<h2>Hello, <?php echo '<strong>'.$buff['nama'].'</strong>';?></h2>
<p>Welcome to Informatics Engineering Of Oxford</p>
<p>DOSEN<p>
<img src="images/logo4.jpeg" width="850" height="400"/>
