<?php

	include 'config/koneksi.php';

	$tipe = $_POST['tipe'];
	if($tipe == "ceklama"){



			$nomor_rekam = $_POST['nomor_rekam'];
			$query = "SELECT * from pasien WHERE nomor_rekam = '$nomor_rekam'";
			$cek  = mysqli_query($db,$query);
			$hasil = mysqli_fetch_array($cek);

			$cz = count($hasil);
			if($cz == 0){

				echo "<h3> Data Tidak Ditemukan </h3>";

			}else{
				?>
				<script>
				$("#nomor_rekam_2").val("<?php echo $hasil['nomor_rekam'] ?>");
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