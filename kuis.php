
<?php
    include "koneksi.php";
    session_start();
    $select = "SELECT * FROM kuisioner";
    $hasil = mysqli_query($conn, $select);
    $rowcount = mysqli_num_rows($hasil);

    if($rowcount==0) {
        ?><p>Tidak ada yang harus anda tanggapi :)</p><?php
    }else {
        ?>
        <div class="view">
            <form action="hasil_kuisioner.php" method="post">
                <table width="70%" border="2">
                    <tr align="center">
                        <td width="1%">No</td>
                        <td width="60%">Pertanyaan</td>
                        <td colspan="3">Tanggapan</td>
                    </tr>
                <?php
                    $count = 0;
                    $select = "SELECT * FROM kuisioner";
                    while($buff=mysqli_fetch_array($hasil)) {
                        $count++;
                    ?>
                    <tr>
                        <input type="hidden" name=<?php echo "id_soal".$count; ?> value=<?php echo $buff['id_soal']; ?>/>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $buff['pertanyaan']; ?></td>
                        <td>
                            <?php
                                            
                                $select1 = "SELECT * FROM hasil_kuisioner WHERE id_dosen='".$_GET['id_dosen']."' AND id_soal='".$buff['id_soal']."'AND username='".$_SESSION['username']."'";
                                $hasil1 = mysqli_query($conn, $select1);
                                $rowcount1 = mysqli_num_rows($hasil1);
								
								if($rowcount1==0) {
                                    ?>
                                    <input type="radio" name=<?php echo "nilai".$count; ?> value="1"/> 1
                                    <input type="radio" name=<?php echo "nilai".$count; ?> value="2"/> 2
                                    <input type="radio" name=<?php echo "nilai".$count; ?> value="3"/> 3
                                    <input type="radio" name=<?php echo "nilai".$count; ?> value="4"/> 4
                                    <input type="radio" name=<?php echo "nilai".$count; ?> value="5"/> 5
                                    <?php
                                }else {
                                    $buff1 = mysqli_fetch_array($hasil1)
                                    ?>
                                    <input type="radio" name=<?php echo "nilai".$count; ?> value="1" <?php echo ($buff1['nilai']=='1')?'checked':'' ?>/> 1
                                    <input type="radio" name=<?php echo "nilai".$count; ?> value="2" <?php echo ($buff1['nilai']=='2')?'checked':'' ?>/> 2
                                    <input type="radio" name=<?php echo "nilai".$count; ?> value="3" <?php echo ($buff1['nilai']=='3')?'checked':'' ?>/> 3
                                    <input type="radio" name=<?php echo "nilai".$count; ?> value="4" <?php echo ($buff1['nilai']=='4')?'checked':'' ?>/> 4
                                    <input type="radio" name=<?php echo "nilai".$count; ?> value="5" <?php echo ($buff1['nilai']=='5')?'checked':'' ?>/> 5
                                    <?php
                                }
                            ?>
                        </td>
                    </tr>
                    <?php
                    }; ?>
                </table><br>
                <input type="hidden" name="count" value=<?php echo $count; ?>/>
                <input type="hidden" name="id_dosen" value=<?php echo $_GET['id_dosen']; ?>>
                <input type="hidden" name="username" value=<?php echo $_SESSION['username']; ?>>
                <input type="submit" value="save"/>
            </form>
        </div>
    <?php };
?>

