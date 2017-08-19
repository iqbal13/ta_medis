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
<h1 class="text-center"> Data Dokter </h1>

<br />
<table class="table table-striped" id="data-registrasi">
<thead>
<tr>
<th> No </th>
<th> Kode Dokter </th>
<th> Nama Dokter </th>
<th> Poli </th>
<th> Jadwal Prakter </th>
<th> Aksi </th>
</thead>
<tbody>
<?php 
$query = "SELECT * FROM dokter LEFT JOIN poli ON dokter.kode_poli = poli.kode_poli"; 
// echo $query;
$run_query = mysqli_query($db,$query);
$no = 1;
while($dt = mysqli_fetch_array($run_query)){ 
$runn = mysqli_query($db,"SELECT * FROM jadwal_praktik LEFT JOIN waktu_praktik ON jadwal_praktik.id_waktu = waktu_praktik.id_waktu WHERE id_dokter = '$dt[id_dokter]'"); 
    ?>
<tr>
<td> <?php echo $no++ ?> </td>
<td> <?php echo $dt['id_dokter'] ?> </td>
<td> <?php echo $dt['nama_dokter'] ?> </td>
<td> <?php echo $dt['nama_poli'] ?> </td>
<td> 
<?php while($jadwal = mysqli_fetch_array($runn)){ 
    echo "<strong>".$jadwal['waktu_praktik']."</strong><br />";
 } ?>

</td>
<td> <a href="<?php echo $url ?>dokter.php?aksi=edit&nomor_rekam=<?php echo $dt['id_dokter'] ?>"> Edit </a> 
<a href="<?php echo $url ?>pasien.php?aksi=hapus&nomor_rekam=<?php echo $dt['id_dokter'] ?>" onclick="return confirm('Yakin hapus data ini ? ')"> Hapus </a>  </td>
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