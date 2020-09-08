<?php //UNTUK MENGHAPUS DOSEN HANYA MEMBUTUHKAN ID SAJA
include"koneksi.php";
$id_dosen=$_GET['id_dosen'];
$hapus="DELETE From dosen Where id_dosen='$id_dosen'";
$hasil=mysqli_query($conn, $hapus);
if($hapus){
    echo"<script>alert('data berhasil di hapus');window.location.href='hal_admin.php?module=data_dosen#pos';</script>";
}?>