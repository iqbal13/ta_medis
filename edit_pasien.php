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
<?php 

if(@$_GET['aksi'] == "edit"){
    $nomor_rekam = $_GET['nomor_rekam'];
    $data = mysqli_query($db,"SELECT * FROM pasien WHERE nomor_rekam = '$nomor_rekam'");
    $dt = mysqli_fetch_array($data);
?>

<h1 class="text-center">Edit Data Pasien nomor rekam <?php echo $nomor_rekam ?>      </h1>
<div class="col-md-6">
<form method="POST" action="<?php echo $url ?>proses_admin.php?aksi=editpasien">
<div class="form-group">

<label> Nomor Rekam </label>
<input type="text" name="nomor_rekam" class="form-control" value="<?php echo $dt['nomor_rekam'] ?>">
</div>

<div class="form-group">

<label> Nama Pasien </label>
<input type="text" name="nama_pasien" class="form-control" value="<?php echo $dt['nama_pasien'] ?>">
</div>

<div class="form-group">

<label> Tanggal Lahir </label>
<input type="date" name="ttl" class="form-control" value="<?php echo $dt['ttl'] ?>">
</div>

<div class="form-group">

<label> Alamat</label>
<input type="text" name="alamat" class="form-control" value="<?php echo $dt['alamat'] ?>">
</div>

<div class="form-group">

<label> Nomor Telepon </label>
<input type="text" name="nomor_kontak" class="form-control" value="<?php echo $dt['nomor_kontak'] ?>">
</div>


<div class="form-group">

<label> Jenis Kelamin </label>
<input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $dt['jenis_kelamin'] ?>">
        </div>




<div class="form-group">
<button type"submit" name="submit" class="btn btn-primary"> Simpan Data </button>
</div>

</form>
</div>
<div class="clearfix"></div>
<?php 
}else{
?>
<h1>Tambah Pasien </h1>
<div class="col-md-6">
<form method="POST" action="<?php echo $url ?>proses_admin.php?aksi=tambahpasien">
<div class="form-group">

<label> Nomor Rekam </label>
<input type="text" name="nomor_rekam" class="form-control" value="">
</div>

<div class="form-group">

<label> Nama Pasien </label>
<input type="text" name="nama_pasien" class="form-control" value="">
</div>

<div class="form-group">

<label> Tanggal Lahir </label>
<input type="date" name="ttl" class="form-control" value="">
</div>

<div class="form-group">

<label> Alamat</label>
<input type="text" name="alamat" class="form-control" value="">
</div>

<div class="form-group">

<label> Nomor Telepon </label>
<input type="text" name="nomor_kontak" class="form-control" value="">
</div>


<div class="form-group">

<label> Jenis Kelamin </label>
<input type="text" name="jenis_kelamin" class="form-control" value="">
        </div>




<div class="form-group">
<button type"submit" name="submit" class="btn btn-primary"> Simpan Data </button>
</div>

</form>
</div>
<div class="clearfix"></div>
<?php 
}
?>
<br />

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