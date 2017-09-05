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
<h1 class="text-center"> Data Pasien </h1>
<a class="btn btn-primary pull-left" href="edit_pasien.php"> Tambah Pasien </a>
<br />
<table class="table table-striped" id="data-registrasi">
<thead>
<tr>
<th> No </th>
<th> Nomor Rekam </th>
<th> Nama Pasien </th>
<th> Tanggal Lahir </th>
<th> Alamat </th>
<th> Nomor Kontak </th>
<th> Jenis Kelamin </th>
<th> Aksi </th>
</thead>
<tbody>
<?php 
$query = "SELECT * FROM pasien "; 
// echo $query;
$run_query = mysqli_query($db,$query);
$no = 1;
while($dt = mysqli_fetch_array($run_query)){ ?>
<tr>
<td> <?php echo $no++ ?> </td>
<td> <?php echo $dt['nomor_rekam'] ?> </td>
<td> <?php echo $dt['nama_pasien'] ?> </td>
<td> <?php echo $dt['ttl'] ?> </td>
<td> <?php echo $dt['alamat'] ?> </td>
<td> <?php echo $dt['nomor_kontak']  ?> </td>
<td> <?php echo $dt['jenis_kelamin'] ?> </td>
<td> <a href="<?php echo $url ?>edit_pasien.php?aksi=edit&nomor_rekam=<?php echo $dt['nomor_rekam'] ?>"> Edit </a> 
<a href="<?php echo $url ?>proses_admin.php?aksi=hapuspasien&nomor_rekam=<?php echo $dt['nomor_rekam'] ?>" onclick="return confirm('Yakin hapus data ini ? ')"> Hapus </a>  </td>
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