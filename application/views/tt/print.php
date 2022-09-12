<style type="text/css">
<!--
.style1 {font-family: Arial}
.style3 {font-family: Arial, Helvetica, sans-serif}
.style4 {
	color: #0000FF;
	font-style: italic;
	font-weight: bold;
}
td {
   vertical-align: top ;
}
.style19 {font-size: 12px}
.style20 {font-size: 11px}
.style23 {
	font-size: 17px;
	font-weight: bold;
}
.style24 {
	font-size: 15px;
	font-weight: bold;
}
.style25 {font-size: 14px}
.style26 {font-size: 14}
.style28 {font-size: 12;
		font-family: arial;}
.style30 {font-size: 10px; font-weight: bold; }
.style31 {font-size: 12px; font-weight: bold; }
-->
</style>
<?php
        $koneksi = mysqli_connect("localhost","root","","raimu_backend") or die (mysqli_error());
			$id =$_POST['kode'];
			$face = mysqli_query($koneksi,"SELECT * FROM v_face WHERE kode = '$id'");
						if (!$face) {
				printf("Error: %s\n", mysqli_error($koneksi));
				exit();
			}
			$wajahmu = mysqli_fetch_array($face);
			$nama = $wajahmu['nama'];
			$kepribadian = $wajahmu['keterangan_kepribadian'];
			$hasil = $wajahmu['hasil'];
			
?>

<!--<img src="kepala.png" width="1118" height="176" />-->
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
   <p>&nbsp;</p>


  <p align="center">&nbsp;</p>
<table border="0" cellpadding="1" cellspacing="0" width="100%" align="justify">
	<tr>
    	<td>NO Reg : </td>
    </tr>
    <tr>
    	<td>Di Berikan Kepada</td>
    </tr>
    <tr>
    	<td><?= $nama; ?></td>
    </tr>
    <tr>
    	<td>4</td>
    </tr>
    <tr>
    	<td> <?php
switch ($hasil) {
    case 1:
        echo 'Dengan Jenis Kecerdasan Segitiga';
        break;
    case 2:
        echo 'Dengan Jenis Kecerdasan Lingkaran';
       	break;
	case 3:
        echo 'Dengan Jenis Kecerdasan Bujur Sangkar';
       	break;
	case 4:
        echo 'Dengan Jenis Kecerdasan Bujur Sangkar';
       	break;	
 	case 5:
        echo 'Dengan Jenis Kecerdasan Bujur Lingkaran';
		break;
	case 6:
        echo 'Dengan Jenis Kecerdasan Galur';
       	break;
	case 7:
        echo 'Dengan Jenis Kecerdasan Galur';
       	break;
	case 8:
        echo 'Dengan Jenis Kecerdasan Segitiga';
       	break;	
	case 9:
        echo 'Dengan Jenis Kecerdasan Persegi Panjang';
       	break;
        return;
}
?></td>
    </tr>
    <tr>
    	<td> <?php
switch ($hasil) {
    case 1:
        echo '(Neo Korteks Kiri)';
        break;
    case 2:
        echo '(Limbik Kanan)';
       	break;
	case 3:
        echo '(Limbik Kiri)';
       	break;
	case 4:
        echo '(Limbik Kiri)';
       	break;	
 	case 5:
        echo '(Limbik Kanan)';
		break;
	case 6:
        echo '(Neo Korteks Kanan)';
       	break;
	case 7:
        echo '(Neo Korteks Kanan)';
       	break;
	case 8:
        echo '(Neo Korteks Kiri)';
       	break;	
	case 9:
        echo '(Mid Brain)';
       	break;
        return;
}
?></td>
    </tr>
    <tr>
    	<td>7</td>
    </tr>
    <tr>
    	<td><?= $kepribadian;?></td>
    </tr>
    <tr>
    	<td>9</td>
    </tr>
    <tr>
    	<td><img src="<?php echo base_url();?>assets/ttd.jpg" /></td>
    </tr>
    <tr>
    	<td>11</td>
    </tr>
    <tr>
    	<td>12</td>
    </tr>
    
</table>
