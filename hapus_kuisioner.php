<?php
include"koneksi.php";
$id_soal=$_GET['id_soal'];
$hapus="DELETE From kuisioner Where id_soal='$id_soal'";
$hasil=mysqli_query($conn, $hapus);
if($hapus){
    echo"<script>alert('data berhasil di hapus');window.location.href='hal_admin.php?module=data_kuisioner#pos';</script>";
}?>