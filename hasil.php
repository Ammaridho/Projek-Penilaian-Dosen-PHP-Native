<?php
    include "koneksi.php";

    $select = "SELECT * FROM hasil_kuisioner INNER JOIN dosen ON hasil_kuisioner.id_dosen=dosen.id_dosen INNER JOIN kuisioner ON 
            hasil_kuisioner.id_soal=kuisioner.id_soal GROUP BY hasil_kuisioner.id_dosen";
    $hasil = mysqli_query($conn, $select);
    $rowcount = mysqli_num_rows($hasil);

    if($rowcount==0) {
        ?><p>Belum ada hasil ! :)</p><?php
    }else {
        ?>
        <div class="view">
			<h2>Hasil Kuisioner</h2>
            <table width="100%" border="2">         
            <tr align="center">
				<td rowspan="2">no</td>
				<td rowspan="2">Nama Dosen</td>
				<td colspan="5">Nilai</td>
				<td rowspan="2">Rata-rata</td>
			</tr>
			<tr align="center">
				<td width="50">1</td>
				<td width="50">2</td>
				<td width="50">3</td>
				<td width="50">4</td>
				<td width="50">5</td>
			</tr>
                <?php
                $count = 0;
                $total=0; $total1=0; $total2=0; $total3=0; $total4=0; $total5=0;
                while($buff = mysqli_fetch_array($hasil)) {
					$count++;
                    ?>
                    <tr align="center">
                        <td><?php echo $count;?></td>
                        <td><?php echo $buff['nama'];?></td>
                            <?php
                                $select1 = "SELECT * FROM hasil_kuisioner WHERE id_dosen='".$buff['id_dosen']."'";
                                $hasil1 = mysqli_query($conn, $select1);
                                $nilai1=0; $nilai2=0; $nilai3=0; $nilai4=0; $nilai5=0;
                                while($buff1 = mysqli_fetch_array($hasil1)) {
                                    switch($buff1['nilai']) {
                                        case 1: {
                                            $total1++;
                                            $nilai1++;
                                            break;
                                        }
                                        case 2: {
                                            $total2++;
                                            $nilai2++;
                                            break;    
                                        }
                                        case 3: {
                                            $total3++;
                                            $nilai3++;
                                            break;
                                        }
                                        case 4: {
                                            $total4++;
                                            $nilai4++;
                                            break;
                                        }
                                        case 5: {
                                            $total5++;
                                            $nilai5++;
                                            break;
                                        }
                                        default : {
                                            break;
                                        }
                                    }
										$total = ($total1*1 + $total2*2 + $total3*3 + $total4 *4+ $total5*5) / ($total1 + $total2 + $total3 + $total4 + $total5);
                                        //MENGAKUMULASIKAN NILAI
                                
                                } ?> 
                                <td align="center"> <?php echo $nilai1?> </td>
                                <td align="center"> <?php echo $nilai2?> </td>
                                <td align="center"> <?php echo $nilai3?> </td>
                                <td align="center"> <?php echo $nilai4?> </td>
                                <td align="center"> <?php echo $nilai5?> </td>
								<td align="center"> <?php echo $total?> </td>
                               
                    </tr>
                    <?php
                } 
                ?>
            </table>
        </div>
    <?php };
    mysqli_close($conn);
?>


<?php 
    include "koneksi.php";
 		$select1= "SELECT * FROM hasil_kuisioner INNER JOIN dosen ON hasil_kuisioner.id_dosen=dosen.id_dosen INNER JOIN kuisioner ON hasil_kuisioner.id_soal=kuisioner.id_soal GROUP BY hasil_kuisioner.id_dosen";
 		$hasil1 = mysqli_query($conn, $select1);
 	 ?>

 	 
 	 
 	<div align="center" style="padding-top: 45px;">
 	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Pertanyaan', 'Rata - rata'],
          <?php
          $count="0"; 
          	while($buff=mysqli_fetch_array($hasil1)){
          		$count++;
          		echo "['".$count."',".$total."],";
          	}
           ?>
        ]);

        var options = {
          title: 'Hasil Kuesioner',
          width: 800,
          legend: { position: 'none' },
          chart: { title: 'Hasil Kuesioner',
                   subtitle: 'Berdasarkan isian Mahasiswa' },
          bars: 'vertical', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Pertanyaan '} // Top x-axis.
            },
            y: {
              0: { side: 'left', label: 'Rata-rata '} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
	</div>
	
</html>