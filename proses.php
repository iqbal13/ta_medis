<?php
	include 'config/koneksi.php';


$jenis_pasien = $_POST['jenis_pasien'];
$nomor_rekam = $_POST['nomor_rekam'];
	$nama_pasien = $_POST['nama_pasien'];
	$ttl = $_POST['ttl'];
	$alamat = $_POST['alamat'];
	$nomor_kontak  = $_POST['nomor_kontak'];

	$tanggal_lahir = explode("-",$ttl);
	$tahun_lahir = $tanggal_lahir[0];

	$umur = date('Y') -  $tahun_lahir;
if($jenis_pasien == 2){

	//ini buat pasien baru
	

	$daftar_query = "INSERT INTO pasien (nomor_rekam,nama_pasien,ttl,umur,alamat,nomor_kontak) VALUES ('$nomor_rekam','$nama_pasien','$ttl','$umur','$alamat','$nomor_kontak')";
	$run_query = mysqli_query($db,$daftar_query);
}else{




}
	$nomor_rekam = $_POST['nomor_rekam'];

	$id_dokter = $_POST['id_dokter'];
	$id_poli = $_POST['id_poli'];
	$id_waktu = $_POST['id_waktu'];
	$cara_bayar = $_POST['cara_bayar'];
	$tanggal_kunjungan = $_POST['tanggal_kunjungan'];

	$cek = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM registrasi_rawatjalan ORDER BY waktu_registrasi DESC"));
	if(count($cek) != 0){
	$nomor_registrasi = $cek['nomor_registrasi'];
	$no = explode("-",$nomor_registrasi);
	$no_akhir = $no[1];
	$next = $no_akhir + 1;
	$no_registrasi_baru = "RJ".date('Y').date('m').date('d').'-'.$next;
	}else{
		$no_registrasi_baru = "RJ".date('Y').date('m').date('d').'-001';
	}


	$waktu_registrasi = date('Y-m-d H:i:s');


	$query_ins = "INSERT INTO registrasi_rawatjalan (nomor_registrasi,nomor_rekam_medis,tanggal_kunjungan,id_dokter,id_waktu,waktu_registrasi,cara_bayar) VALUES ('$no_registrasi_baru','$nomor_rekam','$tanggal_kunjungan','$id_dokter','$id_waktu','$waktu_registrasi','$cara_bayar')";

	$run_ins = mysqli_query($db,$query_ins);
	if($run_ins){
		echo "<script>$('.sw-btn-next').click() </script>";
		echo "<script>$('.sw-btn-prev').hide() </script>";
		
		$dt = mysqli_fetch_array(mysqli_query($db,"SELECT * FROM registrasi_rawatjalan a LEFT JOIN pasien b ON a.nomor_rekam_medis = b.nomor_rekam LEFT JOIN dokter c ON a.id_dokter = c.id_dokter LEFT JOIN poli d ON c.kode_poli = d.kode_poli LEFT JOIN waktu_praktik e ON a.id_waktu = e.id_waktu WHERE a.nomor_registrasi = '$no_registrasi_baru'"));
		$poli = $dt['nama_poli'];
		$dokter = $dt['nama_dokter'];
		$waktu = $dt['waktu_praktik'];

		?>

		<div class="panel-heading">Pendaftaran Berhasil </div>
		<p> Download data anda sebagai bukti bla bla bla 
                       <a href="<?php echo $url ?>lapregister.php?nomor_registrasi=<?php echo $no_registrasi_baru ?>" target="_blank"> Download </a>
           </p>
                        <table class="table" id="data-nyaisi">
                            <tbody>
                            	<tr> <th> No Registrasi : </th> <td> <?php echo $no_registrasi_baru ?> </td> </tr>
                                <tr> <th>Name:</th> <td> <?php echo $nama_pasien ?></td> </tr>
                                <tr> <th>Nomor Rekam :</th> <td><?php echo $nomor_rekam ?></td> </tr>
                                <tr> <th> Umur : </th> <td> <?php echo $umur ?> </td> </tr>
                                <tr> <th> Poli : </th> <td> <?php echo $poli ?> </td> </tr>
                                <tr> <th> Dokter : </th> <td>  <?php echo $dokter ?> </td> </tr>
                                <tr> <th> Waktu : </th> <td> <?php echo $waktu ?> </td> </tr>
                                <tr> <th> Cara Bayar : </th> <td> <?php echo $cara_bayar ?> </td> </tr>
                            </tbody>
                        </table>



		<?php
	}else{
		echo "GAGAL";
	}





?>