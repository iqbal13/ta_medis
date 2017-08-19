<?php

	include 'config/koneksi.php';

	$tipe = $_POST['tipe'];
	if($tipe == "ceklama"){



			$nomor_rekam = $_POST['nomor_rekam'];
			if($nomor_rekam == ""){
				echo "Harap Isikan Nomor Rekam terlebih dahulu";
				exit;
			}
			$query = "SELECT * from pasien WHERE nomor_rekam = '$nomor_rekam'";
			$cek  = mysqli_query($db,$query);
			$hasil = mysqli_fetch_array($cek);

			$cz = count($hasil);
			if($cz == 0){

				echo "<h3> Data Tidak Ditemukan </h3>";
				echo "<p> Silahkan ubah jenis pasien menjadi <strong> Baru </strong> untuk melanjutkan pendaftaran </p>";

			}else{
				echo "<h3> Data Ditemukan : Selamat datang ".$hasil['nama_pasien']."</h3> <br /> Klik next untuk melanjutkan ";
				?>
				<script>             
				   $(".sw-btn-next").show();
				$("#nomor_rekam_2").val("<?php echo $hasil['nomor_rekam'] ?>");
				$("#nama_pasien").val("<?php echo $hasil['nama_pasien'] ?>");
				$("#ttl").val("<?php echo $hasil['ttl'] ?>");
				$("#alamat").val("<?php echo $hasil['alamat'] ?>");
				$("#nomor_kontak").val("<?php echo $hasil['nomor_kontak'] ?>");
								</script>

				<?php
			}




	}else if($tipe == "poli"){

		$id_poli = $_POST['id_poli'];
		$query = "SELECT * FROM dokter WHERE kode_poli = '$id_poli'";
		$dt = mysqli_query($db,$query);
		$cek = mysqli_num_rows($dt);
		
		//kalo cek = 0

		if($cek == 0){

			echo "<script>alert('Data Tidak Ditemukan')</script>";

		}else{
			echo "<option value=''> Pilih Dokter </option>";

			while($d = mysqli_fetch_array($dt)){

				echo '<option value="'.$d['id_dokter'].'">'.$d['nama_dokter'].'</option>';
			}

		}

	}else if($tipe == "dokter"){
			$id_dokter = $_POST['id_dokter'];
			$query = "SELECT jadwal_praktik.*, waktu_praktik.waktu_praktik FROM jadwal_praktik left join waktu_praktik ON jadwal_praktik.id_waktu = waktu_praktik.id_waktu WHERE id_dokter = '$id_dokter'";
		$dt = mysqli_query($db,$query);
		$cek = mysqli_num_rows($dt);
		
		//kalo cek = 0

		if($cek == 0){

			echo "<script>alert('Data Tidak Ditemukan')</script>";

		}else{
			echo "<option value=''> Pilih waktu </option>";
			while($d = mysqli_fetch_array($dt)){

				echo '<option value="'.$d['id_waktu'].'">'.$d['waktu_praktik'].'</option>';
			}

		}
	}

	?>