<?php
include"config/koneksi.php";
require('html2fpdf.php');
ob_start();

?>
<html>
<head>
<title>Data Registrasi</title>
</head>
<body onload="window.print()">
<center>
<h1> Data Registrasi </h1>
<?php 
          $no =1;
          $nomor_registrasi = $_GET['nomor_registrasi'];
          $query = mysqli_query($db,"SELECT * FROM registrasi_rawatjalan a LEFT JOIN pasien b ON a.nomor_rekam_medis = b.nomor_rekam LEFT JOIN dokter c ON a.id_dokter = c.id_dokter LEFT JOIN poli d ON c.kode_poli = d.kode_poli LEFT JOIN waktu_praktik e ON a.id_waktu = e.id_waktu WHERE a.nomor_registrasi = '$nomor_registrasi'");

          $data = mysqli_fetch_array($query);
          ?>
    <table width="100%" border="1" align="center">
    <tr>
    <td> No.Registrasi </td> <td width="5"> : </td> <td>
    <?php echo $data['nomor_registrasi'] ?> 
     </td>
    </tr>
    <tr>
    <td> Nomor Rekam Medis </td> <td> : </td> <?php echo $data['nomor_rekam'] ?> <td> </td>
    </tr>
    <tr>
    <td> Nama Pasien </td> <td> : </td> <td> <?php echo $data['nama_pasien'] ?> </td>
    </tr>
    <tr>
    <td> Umur </td> <td> : </td> <td> <?php echo $data['umur'] ?> </td>
    </tr>
    <tr>
    <td> Poli </td> <td> : </td> <td> <?php echo $data['nama_poli'] ?> </td>
    </tr>
    <tr>
    <td> Dokter </td> <td> : </td> <td> <?php echo $data['nama_dokter'] ?> </td>
    </tr>
    <tr>
    <td> Waktu Praktik </td> <td> : </td> <td> <?php echo $data['waktu_praktik'] ?> </td>
    </tr>
    </table>
   
  <p> Silahkan ... Nanti ubah disini bro file lapregister.php </p>

</body>
</html>
<?php
// Output-Buffer in variable:
// $html=ob_get_contents();
// ob_end_clean();
// $pdf=new HTML2FPDF();
// $pdf->AddPage();
// $pdf->WriteHTML($html);
// if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
//     header("Content-type: application/PDF");
// } else {
//     header("Content-type: application/PDF");
//     header("Content-Type: application/pdf");
// }
// $pdf->Output("DataRegistrasi.pdf","I");

?>