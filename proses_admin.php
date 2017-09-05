<?php

		include 'config/koneksi.php';


		$aksi = $_GET['aksi'];

		if($aksi == "editpasien"){

				$nomor_rekam = $_POST['nomor_rekam'];
				$nama_pasien = $_POST['nama_pasien'];
				$alamat = $_POST['alamat'];
				$ttl = $_POST['ttl'];
				$jenis_kelamin = $_POST['jenis_kelamin'];
					$nomor_kontak = $_POST['nomor_kontak'];
					$querynya = "UPDATE pasien SET nama_pasien = '$nama_pasien', alamat = '$alamat', ttl = '$ttl', jenis_kelamin = '$jenis_kelamin',nomor_kontak = '$nomor_kontak' WHERE nomor_rekam = '$nomor_rekam'";
				$query = mysqli_query($db,$querynya);
				if($query){
					echo "<script>alert('Data Pasien berhasil diubah')</script>";
					echo "<script>window.open('data_pasien.php','_self')</script>";
				}

		}else if($_GET['aksi'] == "tambahpasien"){


				$nomor_rekam = $_POST['nomor_rekam'];
				$nama_pasien = $_POST['nama_pasien'];
				$alamat = $_POST['alamat'];
				$ttl = $_POST['ttl'];
				$jenis_kelamin = $_POST['jenis_kelamin'];
					$nomor_kontak = $_POST['nomor_kontak'];
					$querynya = "INSERT INTO pasien (nomor_rekam,nama_pasien,alamat,ttl,jenis_kelamin,nomor_kontak) VALUES ('$nomor_rekam','$nama_pasien','$alamat','$ttl','$jenis_kelamin','$nomor_kontak')";
				$query = mysqli_query($db,$querynya);
				if($query){
					echo "<script>alert('Data Pasien berhasil ditambahkan')</script>";
					echo "<script>window.open('data_pasien.php','_self')</script>";
				}

		}


		else if($_GET['aksi'] == "hapuspasien"){

				$nomor_rekam = $_GET['nomor_rekam'];

				$a = mysqli_query($db,"DELETE FROM pasien WHERE nomor_rekam = '$nomor_rekam'");
				if($a){
					echo "<script>alert('Data Pasien Berhasil Dihapus')</script>";
					echo "<script>window.open('data_pasien.php','_self')</script>";
				}


		}else if($_GET['aksi'] == "editdokter"){
			$kode_dokter = $_POST['id_dokter'];
			$nama_dokter = $_POST['nama_dokter'];
			$kode_poli = $_POST['kode_poli'];

			$query = "UPDATE dokter SET nama_dokter = '$nama_dokter',kode_poli = '$kode_poli' WHERE id_dokter = '$kode_dokter'";
			$bb = mysqli_query($db,$query);
			if($bb){
				echo "<script>alert('Data Dokter Berhasil Diubah ')</script>";
				echo "<script>window.open('data_dokter.php','_self')</script>";
			}
		}else if($_GET['aksi'] == "hapusdokter"){
			$kode_dokter = $_GET['kode_dokter'];
			$query = "DELETE FROM dokter WHERE id_dokter = '$kode_dokter'";
			$m = mysqli_query($db,$query);
			if($m){
				echo "<script>alert('Data Dokter Berhasil Dihapus ')</script>";
				echo "<script>window.open('data_dokter.php','_self')</script>";
			}
		}


		?>