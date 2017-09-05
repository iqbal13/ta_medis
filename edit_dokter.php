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

if($_GET['aksi'] == "editdokter"){
    $kode_dokter = $_GET['kode_dokter'];
    $data = mysqli_query($db,"SELECT * FROM dokter WHERE id_dokter = '$kode_dokter'");
    $dt = mysqli_fetch_array($data);
?>

<h1 class="text-center">Edit Data Dokter: Kode <?php echo $kode_dokter ?>      </h1>
<div class="col-md-6">
<form method="POST" action="<?php echo $url ?>proses_admin.php?aksi=editdokter">
<div class="form-group">

<label> Kode Dokter </label>
<input type="text" name="id_dokter" readonly class="form-control" value="<?php echo $dt['id_dokter'] ?>">
</div>

<div class="form-group">

<label> Nama Dokter </label>
<input type="text" name="nama_dokter" class="form-control" value="<?php echo $dt['nama_dokter'] ?>">
</div>

<div class="form-group">
<label> Poli </label>
<select class="form-control" name="kode_poli">
<?php 
$pol_query = mysqli_query($db,"SELECT * FROM poli");
while($poli = mysqli_fetch_array($pol_query)){  
        if($poli['kode_poli'] == $dt['kode_poli']){
            $selected = 'selected="selected"';

        }else{
            $selected = '';
        }
    ?>
<option value="<?php echo $poli['kode_poli'] ?>"> <?php echo $poli['nama_poli'] ?> </option>

<?php } ?>
</select>
</div>

<div class="form-group">
<button type"submit" name="submit" class="btn btn-primary"> Simpan Data </button>
</div>

</form>
</div>
<div class="clearfix"></div>
<?php 
}else{



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