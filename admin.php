
<?php //tampilan yang dimunculkan di home admin
include "koneksi.php";
session_start();
$select="Select * from user where username='$_SESSION[username]'";
$hasil=mysqli_query($conn, $select);
$buff=mysqli_fetch_array($hasil);

if(isset($_SESSION['username']))
?>
<h2>Hello, <?php echo '<strong>'.$buff['nama'].'</strong>';?></h2>
<p>Welcome to Informatics Engineering Of Oxford</p>
<img src="images/logo4.jpeg" width="850" height="400"/>
