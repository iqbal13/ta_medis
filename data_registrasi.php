<?php 
include 'partial/head.php';
?>
    <body oncontextmenu="return false;">
        <div id="container">

            <div class="content wrapper container">
            <?php include 'partial/header.php' ?> 
 <nav>
                 <?php include 'partial/menu_admin.php' ?>
                    <div class="clear"></div>
                </nav>
                
              

<div class="row" style="margin-top: 0px !important;">
<div class="col-md-12" style="margin-bottom: 400px;">
<h1 class="text-center"> Data Registrasi </h1>

<br />
<table class="table table-striped" id="data-registrasi">
<thead>
<tr>
<th> No </th>
<th> No Registrasi </th>
<th> Nomor Rekam </th>
<th> Nama Pasien </th>
<th> Poli </th>
<th> Dokter </th>
<th> Waktu </th>
<th> Cara Bayar </th>
<th> Aksi </th>
</thead>
<tbody>
<?php 
$query = "SELECT * FROM registrasi_rawatjalan a LEFT JOIN pasien b ON a.nomor_rekam_medis = b.nomor_rekam LEFT JOIN dokter c ON a.id_dokter = c.id_dokter LEFT JOIN poli d ON c.kode_poli = d.kode_poli LEFT JOIN waktu_praktik e ON a.id_waktu = e.id_waktu "; 
// echo $query;
$run_query = mysqli_query($db,$query);
$no = 1;
while($dt = mysqli_fetch_array($run_query)){ ?>
<tr>
<td> <?php echo $no++ ?> </td>
<td> <?php echo $dt['nomor_registrasi'] ?> </td>
<td> <?php echo $dt['nama_pasien'] ?> </td>
<td> <?php echo $dt['nomor_rekam'] ?> </td>
<td> <?php echo $dt['nama_poli'] ?> </td>
<td> <?php echo $dt['nama_dokter'] ?> </td>
<td> <?php echo $dt['waktu_praktik'] ?> </td>
<td>  </td>
<td> </td>
</tr>

<?php } ?>

</tbody>

</table>


</div>
<div class="clearfix"> </div>



    </div>
<div class="clear"></div>
            </div>
        </div>

        <?php include 'partial/footer.php' ?>
       </body>
</html>
<?php include 'partial/js_under.php'; ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"> 

<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
$("#data-registrasi").DataTable();
</script>