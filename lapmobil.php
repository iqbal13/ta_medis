<?php
include"inc/koneksi.php";
require('html2fpdf.php');
ob_start();

?>
<html>
<head>
<title>Data Pemasukan</title>
</head>
<body>
<center>
<h1> Data Pemasukan </h1>
    <table width="100%" border="1" align="center">
        <thead>
          <tr>
            <th>No</th>
            <th>Type Mobil</th>
            <th>Disewa </th>
          </tr>
        </thead>
        <tbody>
        <center>
          <?php 
          $no =1;
          $query = mysqli_query($db,"SELECT * from tbl_mobil");
          while($data = mysqli_fetch_assoc($query)){
            $cek = mysqli_num_rows(mysqli_query($db,"SELECT * FROM form_pemesanan WHERE kode_mobil = '$data[kd_mobil]'"));
           ?>
                     <tr>

            <td><?php echo $no; ?></td>
            <td><?php echo $data['type_mobil']; ?></td>
            <td><?php echo $cek ?></td> 
          </tr>
          <?php 
          $no++;
          }; ?>
          </center>
        </tbody>
      </table>


</body>
</html>
<?php
// Output-Buffer in variable:
$html=ob_get_contents();
ob_end_clean();
$pdf=new HTML2FPDF();
$pdf->AddPage();
$pdf->WriteHTML($html);
if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    header("Content-type: application/PDF");
} else {
    header("Content-type: application/PDF");
    header("Content-Type: application/pdf");
}
$pdf->Output("datapemasukan.pdf","I");

?>