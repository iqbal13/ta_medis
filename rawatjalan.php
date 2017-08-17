<?php 

		include 'config/koneksi.php';
		?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Rawat Jalan </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Include SmartWizard CSS -->
    <link href="<?php echo $url ?>css/smart_wizard.css" rel="stylesheet" type="text/css" />
    
    <!-- Optional SmartWizard theme -->
    <link href="<?php echo $url ?>css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
        
    
        <br />
        
        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1">Langkah 1<br /><small>This is step description</small></a></li>
                <li><a href="#step-2">Langkah 2<br /><small>This is step description</small></a></li>
                <li><a href="#step-3">Langkah 3<br /><small>This is step description</small></a></li>
                <li><a href="#step-4">Langkah 4<br /><small>This is step description</small></a></li>
            </ul>
            
            <div>
                <div id="step-1" class="">
                            <form method="POST" id="form-registrasi">

                    <h2>Langkah 1 Content</h2>
                    <div>
                    <p> Selamat Datang di Pemesanan rawat jalan bla bla bla bla bla </p>

                    </div>

                </div>

                <div id="step-2" class="">
                 	<h3> Verifikasi Data Pasien </h3>

                 	<div class="col-md-6">
                 	<div class="form-group">
                 	<label> Jenis Pasien </label>
                 	<select class="form-control" name="jenis_pasien" id="jenis_pasien" onchange="jenispasien(this.value)">
                 	<option value="1"> Lama </option>
                 	<option  value="2"> Baru </option>
                 	</select>
                 	</div>
                 	<div class="untuklama">
                 	<div class="form-group">
                 	<label> No. Rekam Medis </label>
                 	<input type="text" name="no_rekam_medis" class="form-control" id="nomor_rekam">

                 	</div>

                 	<div class="form-group">
                 	<label> Tanggal Lahir </label>
                 	<input type="date" name="tanggal_lahir" class="form-control">
                 	</div>           

                 	      	<button class="btn btn-primary" type="button" id="btncek"> Cek Data </button>
                 		<div class="lagi_loading"> </div>
                 		<div class="hasilnya"></div>

                 	      	</div>
                 	</div>

                 	<div class="clearfix"> </div>

                </div>
                <div id="step-3" class="">
                    <h2>Langkah 2 Content</h2>
                    <div class="col-md-6">
                    		<h3 class="text-center"> Pendaftaran Rawat Jalan </h3>

              <!--       <div class="form-group">
                    	<label> Kode Rumah Sakit </label>
                    	<input type="text" name="kode_rumah_sakit" class="form-control">

                    </div> -->


                    <div class="form-group">
                    	<label> Nomor Rekam Medis </label>
                    	<input type="text" name="nomor_rekam" id="nomor_rekam_2" class="form-control" value="">

                    </div>


                    <div class="form-group">
                    	<label> Nama Pasien </label>
                    	<input type="text" name="nama_pasien" class="form-control">

                    </div>


                    <div class="form-group">
                    	<label> Tempat Tanggal Lahir </label>
                    	<input type="date" name="ttl" class="form-control">

                    </div>


                    <div class="form-group">
                    	<label> Alamat </label>
                    	<input type="text" name="alamat" class="form-control">

                    </div>


                    <div class="form-group">
                    	<label> Nomor Kontak </label>
                    	<input type="text" name="nomor_kontak" class="form-control">

                    </div>


                    <div class="form-group">
                    	<label> Tanggal Kunjungan </label>
                    	<input type="date" name="tanggal_kunjungan" class="form-control">

                    </div>


                    <div class="form-group">
                    	<label> Pilih Poli </label>
                    	<select class="form-control" name="id_poli" onchange="pilih_poli(this.value)">
                    	<option value=""> Pilih Poli </option>
                    <?php 
                    $poli = mysqli_query($db,"SELECT * FROM poli");
                    while($p = mysqli_fetch_array($poli)){ ?>
                    <option value="<?php echo $p['kode_poli'] ?>"> <?php echo $p['nama_poli'] ?> </option>
                    <?php } ?>
                    </select>
                    </div>


                    <div class="form-group">
                    	<label> Pilih Dokter </label>
                    	<select class="form-control" name="id_dokter" id="pilih_dokter" onchange="pilih_dokter(this.value)">
                    	<option value=""> Pilih Dokter </option>
                    	</select>
                    </div>


                    <div class="form-group">
                    	<label> Pilih Waktu </label>
                    	<select class="form-control" name="id_waktu" id="pilih_waktu">
                    	<option value=""> Pilih Waktu </option>
                    	</select>
                    </div>

                    
                    <div class="form-group">
                    	<label> Cara Bayar </label>
                    	<select name="cara_bayar" class="form-control" id="cara_bayar">
                    	<option value="1"> JKN </option>
                    	<option value="2"> BPJS </option>
                    	<option value="3"> TUNAI </option>
                    	</select>
                    </div>
                   		</form>
                 </div>

                     <div class="clearfix"> </div>
           </div>
                <div id="step-4" class="">
                    <h2>Step 4 Content</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading">My Details</div>
                        <table class="table" id="data-nyaisi">
                            <tbody>
                                <tr> <th>Name:</th> <td>Tim Smith</td> </tr>
                                <tr> <th>Email:</th> <td>example@example.com</td> </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    
    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include SmartWizard JavaScript source -->
    <script type="text/javascript" src="<?php echo $url ?>js/jquery.smartWizard.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            
            // Step show event 
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");

               if(stepNumber != 3){
               	$(".finishbtn").hide();
               	$(".daftar-btn").hide();
           	    }else{              
               	$(".finishbtn").show();
               }

              	if(stepNumber != 2){
              		$(".daftar-btn").hide();
              	}else{
              		$(".daftar-btn").show();
              	}


               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled');
               }else if(stepPosition === 'final'){
                   $("#next-btn").addClass('disabled');
               }else{
                   $("#prev-btn").removeClass('disabled');
                   $("#next-btn").removeClass('disabled');
               }       

            });


            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn btn-info finishbtn')
                                             .on('click', function(){  });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });  
             var btnReg = $('<button></button>').text('Daftar')
                                             .addClass('btn btn-info daftar-btn')
                                             .on('click', function(){ submitdata() });                         
            
            
            // Smart Wizard
            $('#smartwizard').smartWizard({ 
                    selected: 0, 
                    theme: 'dots',
                    transitionEffect:'fade',
                    showStepURLhash: false,
                    toolbarSettings: {toolbarPosition: 'both',
                                      toolbarExtraButtons: [btnFinish, btnReg]
                                    }
            });
                                         
            
            // External Button Events
            $("#reset-btn").on("click", function() {
                // Reset wizard
                $('#smartwizard').smartWizard("reset");
                return true;
            });
            
            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });
            
            $("#next-btn").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });
        });   

        function jenispasien(a){
        	if(a == 2){
        		$(".untuklama").hide();
        		$("#nomor_rekam_2").val("A13-<?php echo rand(0,100) ?>");	
        	}else{
        		$(".untuklama").show();
        		$("#nomor_rekam").val("");

        	}

        }

        function pilih_poli(dt){
        	var datanya = "id_poli="+dt+"&tipe=poli";
        	$.ajax({
        		type:"POST",
        		url:"<?php echo $url ?>ajax.php",
        		data:datanya,
        		success:function(dt){
        			$("#pilih_dokter").html(dt);
        		}	
        	})

        }


          function pilih_dokter(dt){
          	alert(dt);
        	var datanya = "id_dokter="+dt+"&tipe=dokter";
        	$.ajax({
        		type:"POST",
        		url:"<?php echo $url ?>ajax.php",
        		data:datanya,
        		success:function(dt){
        			$("#pilih_waktu").html(dt);
        		}	
        	})

        }

        $("#btncek").click(function(){
        	var nomor_rekam = $("#nomor_rekam").val();
        	var datanya = "nomor_rekam="+nomor_rekam+"&tipe=ceklama";
        	$.ajax({
        		type:"POST",
        		url:"<?php echo $url ?>ajax.php",
        		data:datanya,
        		beforeSend:function(){
        			$(".lagi_loading").html("Sabar ...pengecekan data");
        		},success:function(dt){
        			$(".lagi_loading").html("");
        			$(".hasilnya").html(dt);
        		}
        	})

        });	

        function submitdata(){
        var nilai = $("#form-registrasi").serialize();
        alert(nilai);
        }
    </script>  
</body>
</html>
