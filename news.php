
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
        <link href="http://gadingpluit-hospital.com/assets/css/default.css" rel="stylesheet" />
        <link href="http://gadingpluit-hospital.com/assets/css/custom.css" rel="stylesheet" />
        <link href="http://gadingpluit-hospital.com/assets/css/responsive.css?v=1504606527" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="http://gadingpluit-hospital.com/assets/images/icon.png"/>
        <title>Rumah Sakit GADING PLUIT</title>

        <!-- Jquery menu -->
        <link rel="stylesheet" href="http://gadingpluit-hospital.com/assets/jMenu/jMenu.jquery.css" type="text/css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://gadingpluit-hospital.com/assets/jMenu/jMenu.jquery.js"></script>
<!-- script type="text/javascript">
<www.spacegun.co.uk  >
var message = "function disabled"; 
function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){alert(message); return false; } 
if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) {alert(message);return false; } } 
document.onmousedown = rtclickcheck;
</script-->        
<script type="text/javascript"> //
<![CDATA[ 
/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ Disable context menu on images by GreenLava (BloggerSentral.com) Version 1.0 
Anda bebas mengcopy dan menyebarluaskan kode, namun harap jangan dihapus link ini 
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ */     
function nocontext(e) {         var clickedTag = (e==null) ? event.srcElement.tagName : e.target.tagName;        
 if (clickedTag == "IMG") {             alert(alertMsg);             return false;         }     }     v
 ar alertMsg = "Image context menu is disabled";     document.oncontextmenu = nocontext; //]]> 
</script>
<script type="text/javascript">
            $(document).ready(function() {
                $("#jMenu").jMenu();
            });
        </script>
        <!-- end Jquery menu -->

        <!-- Nivo Slider -->

        <link rel="stylesheet" href="http://gadingpluit-hospital.com/assets/nivoslider/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="http://gadingpluit-hospital.com/assets/nivoslider/nivo-slider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="http://gadingpluit-hospital.com/assets/nivoslider/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.slider').nivoSlider();
            });
        </script>
        <!-- End Nivo Slider -->
        
        <!--=================================
        Fancy Box
        =================================-->
    <script>
        !window.jQuery && document.write('<script src="http://gadingpluit-hospital.com/assets/fancybox/jquery-1.4.3.min.js"><\/script>');
    </script>
    <script type="text/javascript" src="http://gadingpluit-hospital.com/assets/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="http://gadingpluit-hospital.com/assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="http://gadingpluit-hospital.com/assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <link rel="stylesheet" href="style.css" />
        <script type="text/javascript">
                $(document).ready(function() {
                        $(".various1").fancybox({
                                'titlePosition'     : 'inside',
                                'transitionIn'      : 'elastic',
                                'transitionOut'     : 'elastic'
                        });
                });
        </script>
        
        <!--=================================
        End Fancybox
        =================================-->

        <!-- Tab -->
        <script type="text/javascript">
            $(document).ready(function() {
                //Default Action
                $(".tab_content").hide(); //Hide all content
                $("ul.tabs li:first").addClass("active").show(); //Activate first tab
                $(".tab_content:first").show(); //Show first tab content
                //On Click Event
                $("ul.tabs li").click(function() {
                    $("ul.tabs li").removeClass("active"); //Remove any "active" class
                    $('#select option').removeAttr('selected').filter('[value=val1]').attr('selected', true);
                    $(this).addClass("active"); //Add "active" class to selected tab
                    $(".tab_content").hide(); //Hide all tab content
                    var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
                    $(activeTab).fadeIn(); //Fade in the active content
                    return false;
                });
            }); 
        </script>
        <!-- End Tab -->
        
        <link rel="stylesheet" href="http://gadingpluit-hospital.com/assets/bootstrap/bootstrap.min.css">
    </head>

    <body oncontextmenu="return false;">
        <div id="container">

            <div class="content wrapper container">
                
            <header>
        <div class="cols-left logo">
            <a href="http://gadingpluit-hospital.com/"><img src="http://gadingpluit-hospital.com/assets/images/logo.png"  oncontextmenu="return false;"/></a>
        </div>
        <div class="clear clear-mobile"></div>
        <div id="language-mobile">
            <a href="http://gadingpluit-hospital.com/eng"><img src="http://gadingpluit-hospital.com/assets/images/eng.jpg"/>English</a> | 
            <a href="http://gadingpluit-hospital.com/ind"><img src="http://gadingpluit-hospital.com/assets/images/ind.jpg"/>Bahasa</a>
        </div>
        <div class="cols-right contact">
            <!--img src="images/phone.png" align="left"/-->
            <div id="language">
                <a href="http://gadingpluit-hospital.com/eng"><img src="http://gadingpluit-hospital.com/assets/images/eng.jpg"/>English</a> | 
                <a href="http://gadingpluit-hospital.com/ind"><img src="http://gadingpluit-hospital.com/assets/images/ind.jpg"/>Bahasa</a>
            </div>
            <p>Jl. Boulevard Timur Raya, Kelapa Gading - Jakarta 14250 <br/>T. (+6221) 4521001, 4520201 &nbsp;&nbsp; F. (+6221) 4520578 <br/>E. gadingpluit@gadingpluit-hospital.com </p>
            <h2>Gawat Darurat: (+6221) 4-5858-258</h2>
        </div>
        <div class="clear"></div>
</header>               
<nav>
 <?php include 'partial/menu.php' ?>
     </nav>           
                    <img src="http://gadingpluit-hospital.com/gambar/konten/2017/08/Akreditasi_Home_2017.jpg" alt="" class="header-content"  oncontextmenu="return false;" />

    <div class="col-xs-12 col-md-8">
    <div class="cols-page" id="cols-teal">
        <h1 class="main-title">Layanan 24 Jam</h1>
        <div class="main-content">
        <p><p> 
Untuk memenuhi kebutuhan masyarakat atas pelayanan kesehatan mendesak, RS. GADING PLUIT menyediakan Layanan Gawat Darurat 24-Jam.
    
Instalasi Gawat Darurat (IGD) RS. GADING PLUIT selalu siap memberikan pelayanan gawat dan darurat atau bersifat menyelamatkan nyawa (life saving) dengan tenaga medis dan paramedis yang berpengalaman, trampil dan bersetifikat.

Beberapa pelayanan gawat darurat yang dapat kami berikan antara lain:

Resusitasi Jantung – Paru, bagi pasien yang mengalami kegawatan jantung dan paru
Penanganan kasus perlukaan dan kecelakaan
Kasus gangguan peredaran darah otak (stroke)
Dan berbagai kondisi gawat darurat lainnya.
Selain itu, demi menunjang penegakkan diagnosa agar lebih tepat dan akurat  untuk penanganan yang cepat dan sesuai, IGD RS. GADING PLUIT didukung oleh Bagian Farmasi, Laboratorium, dan Radiologi, yang meliputi untuk MRI 1,5 Tesla, MSCT-Scan 64 Slice, yang juga beroperasional 24-jam.

Bekerjasama dengan IGD, Bagian Kebidanan kami juga siap 24 jam untuk kasus kehamilan darurat dengan kualifikasi yang setara.


Untuk INFORMASI lebih lanjut, silahkan hubungi: IGD Ext. 28243

Untuk bantuan AMBULANCE, hubungi: (+6221) 4-5858-258
</p> </p>       
            <p><p>Rumah Sakit GADING PLUIT telah diresmikan pada tanggal 7 Juni 2005 dan memperoleh sertifikat ISO 9001:2000 pada tanggal 10 Juni 2006 dan semenjak itu, Rumah Sakit GADING PLUIT terus berusaha untuk menjadi yang terdepan dengan membuka sentra pelayanan terbaru untuk memudahkan akses masyarakat kepada fasilitas kesehatan terkini TANPA HARUS PERGI KELUAR NEGERI.</p>
<p>Hal ini terbukti dengan adanya&nbsp;<a href="http://www.gadingpluit-hospital.com/about.html"><strong>MSCT-Scan 64 Slice Somatom Sensation Cardiac 64</strong></a>&nbsp;dan<strong>&nbsp;</strong><a href="http://www.gadingpluit-hospital.com/about.html"><strong>MRI 1,5 Tesla Total Imaging Matrix</strong></a>&nbsp;pada tahun 2004 yang pada saat itu merupakan teknologi diagnostik terbaru di Indonesia. Kemudian sentra-sentra seperti <strong><span style="text-decoration: underline;">GADING CANCER CENTER, HEART &amp; VASCULAR HEALTH CENTER, GADING CRYO CENTER</span></strong> mulai dibuka untuk mengembangkan fasilitas-fasilitas baru.</p>
<p>Tahun 2008, Rumah Sakit GADING PLUIT membuka <strong><span style="text-decoration: underline;">CYCLOTRON &amp; PET-CT CENTER</span></strong>, fasilitas PET-CT Scan yang <strong>PERTAMA</strong> di Indonesia dan diresmikan oleh Menteri Riset dan Teknologi RI DR. Kusmayanto Kadiman.</p>
<p>Sentra terbaru yang telah dibuka adalah fasilitas <strong>RADIOTERAPI </strong>pada tanggal 16 April 2013 yang lalu dan GADING CANCER CENTER merubah nama menjadi <strong>GADING INTEGRATED CANCER </strong><strong>CARE </strong><strong>(GICC) </strong><strong>&nbsp;</strong><strong>&nbsp;</strong>dengan terpenuhinya seluruh fasilitas kanker di Rumah Sakit GADING PLUIT.</p>
<p>Visi kami adalah untuk menjadi rumah sakit kepercayaan dan kebanggaan masyarakat, maka dari itu Rumah Sakit GADING PLUIT dirancang untuk memberikan pelayanan medis bertaraf internasional, melalui kerjasama tim yang profesional dan inovatif, didasari kasih dan pengabdian kepada sesama.</p>
<p><strong>Pada tahun 2017</strong>, <strong>Rumah Sakit GADING PLUIT berhasil mencapai penilaian PARIPURNA yang diberikan oleh Komisi Akreditasi Rumah Sakit (KARS).</strong> Hal ini untuk membuktikan bahwa kami selalu berusaha untuk menyediakan pelayanan kesehatan terbaik yang berdasarkan keselamatan pasien.</p></p>
            <div class="clear"></div>
        </div>
    </div>

</div>

<div class="col-xs-4 sidebar">
    <div class="cols-sidebar" id="cols-orange">
        <h1 class="title"><span>cari</span>dokter</h1>
        <ul class="tabs">
            <li class="active"><a href="#tab1"><img src="http://gadingpluit-hospital.com/assets/images/doctor.jpg?v=1504606527"  oncontextmenu="return false;"/><h2>Cari Berdasarkan Nama</h2></a></li>
            <li><a href="#tab2"><img src="http://gadingpluit-hospital.com/assets/images/specialization.jpg?v=1504606527"  oncontextmenu="return false;"/><h2>Cari Berdasarkan Spesialis</h2></a></li>
        </ul>
        <div class="tab_container">
            <div style="display: block;" id="tab1" class="tab_content">
                 <form action="http://gadingpluit-hospital.com/ind/cari_dokter" method="post">
                    <div class="col-sm-9">
                        <select class="form-control" name="dokter" id="select">
                            <option value="">-Pilih Dokter-</option>
                                                        <option value="8">dr. A. Andrie Ronggani, Sp.OG</option>
                                                        <option value="115">dr. A. Andrie Ronggani, Sp.OG (Klinik Teratai)</option>
                                                        <option value="1">dr. Abdul Latief, Sp.A</option>
                                                        <option value="44">dr. Albert Teddy, Sp.S</option>
                                                        <option value="151">dr. Andika Hananto Gunawan, Sp. KN</option>
                                                        <option value="45">dr. Andreas Harry, Sp.S (K) </option>
                                                        <option value="145">dr. Andrew S. Setiawan, Sp. OG</option>
                                                        <option value="16">dr. Andrias Sudjana, Sp.B</option>
                                                        <option value="49">dr. Annie S. Gunadi S., Sp.KJ</option>
                                                        <option value="40">dr. Ardian Jahja Saputra, Sp.JP, FIHA, FICA</option>
                                                        <option value="32">dr. Aries Bunjamin, Sp.PD </option>
                                                        <option value="142">dr. Armelia A.R, Sp. THT</option>
                                                        <option value="28">dr. Asrofi S. Surachman, Sp.BP</option>
                                                        <option value="154">dr. Aulia Huda, Sp. KN</option>
                                                        <option value="140">dr. Bambang Irawan, Sp,P</option>
                                                        <option value="17">dr. Barlian Sutedja, Sp.B</option>
                                                        <option value="26">dr. Bernard S. Tjandra, Sp.U</option>
                                                        <option value="61">dr. Bing Wibisono, Sp.KK, MS</option>
                                                        <option value="126">dr. Bram Pradipta, Sp.OG</option>
                                                        <option value="64">dr. Cicilia, Sp.M</option>
                                                        <option value="134">dr. Daniel Lumadyo W., Sp.Rad</option>
                                                        <option value="46">dr. Danny Iskandar, Sp.S</option>
                                                        <option value="156">dr. Djaja Gosal, Sp. PD</option>
                                                        <option value="135">Dr. Dora Merddeka A. Marpaung, Sp.THT</option>
                                                        <option value="22">Dr. dr. Bambang Darwono, Sp.B, Sp.OT, FICS, FAPOA</option>
                                                        <option value="97">Dr. dr. Terawan A. Putranto, Sp.Rad - KRI</option>
                                                        <option value="98">Dr. dr. Tjondro Setiawan, Sp.Rad (K)</option>
                                                        <option value="122">dr. Egi. E. Manuputty, Sp.U</option>
                                                        <option value="66">dr. Endang E.T., Sp.M</option>
                                                        <option value="129">dr. Faisal Adam, Sp. Onk. Rad</option>
                                                        <option value="109">dr. Frans S. Hokardi</option>
                                                        <option value="105">dr. Frans S. Hokardi ( Laser Klinik )</option>
                                                        <option value="93">dr. Freddy Hartono, Sp.RM, Akp</option>
                                                        <option value="146">dr. Ganda S,DTM&H, Sp. JP, Ph. D, FIHA</option>
                                                        <option value="132">dr. H. Syafruddin A. R. Lelosutan, Sp. PD-KGEH</option>
                                                        <option value="133">dr. Handrianto, Sp. BS</option>
                                                        <option value="124">dr. Hanif G. Tobing, Sp.BS</option>
                                                        <option value="139">dr. Harianto Wijaya, Sp,OG (K)</option>
                                                        <option value="10">dr. Harijanto, Sp.OG, MM</option>
                                                        <option value="114">dr. Harijanto, Sp.OG, MM (Klinik Teratai)</option>
                                                        <option value="50">dr. Henny Riana, Sp.KJ</option>
                                                        <option value="47">dr. Ichsan Kurnia, Sp.S</option>
                                                        <option value="89">dr. Idawati Karjadidjaja., MS, Sp.GK</option>
                                                        <option value="12">dr. IG. N. Elbatiputera, Sp.OG</option>
                                                        <option value="116">dr. IG.N. Elbatiputera, Sp.OG (Klinik Teratai)</option>
                                                        <option value="34">dr. Ikhwan Rinaldi, Sp.PD-KHOM</option>
                                                        <option value="125">dr. Irmiya Rachmiyani, Sp. OG</option>
                                                        <option value="110">dr. Irsal Yan, Sp.OG</option>
                                                        <option value="4">dr. Irwan Hendrata, Sp.A</option>
                                                        <option value="38">dr. Irwandi Rudiwan, Sp.P</option>
                                                        <option value="117">dr. Irwandi Rudiwan, Sp.P</option>
                                                        <option value="35">dr. Iwan B. Irsan, Sp.PD</option>
                                                        <option value="31">dr. J. Widodo Sutandar, Sp.PD</option>
                                                        <option value="36">dr. Joyce Bratanata, Sp.PD</option>
                                                        <option value="102">dr. Judy Tjahjaindra</option>
                                                        <option value="112">dr. Julian, MARS</option>
                                                        <option value="106">dr. Julian, MARS ( Laser Klinik )</option>
                                                        <option value="149">dr. Karina Veronica W., Sp. B. TKV(K)</option>
                                                        <option value="143">dr. L.S. Handikin, Sp. THT</option>
                                                        <option value="3">dr. Laury Cahyadi, Sp.A</option>
                                                        <option value="100">dr. Lingga Magdalena, Sp.Rad</option>
                                                        <option value="5">dr. Luszy Arijanty, Sp.A </option>
                                                        <option value="67">dr. Magda Siholita, Sp.M</option>
                                                        <option value="13">dr. Magdalena, Sp.OG, MARS</option>
                                                        <option value="62">dr. Mayasari N., Sp.KK</option>
                                                        <option value="30">dr. med. Benny Santosa, Sp.PD, Sp.PD-KEMD (Endokrinologi/Diabetetologi)</option>
                                                        <option value="70">DR. Med. Dent. Alex S. Hoetomo</option>
                                                        <option value="14">dr. Miranty F. L, Sp.OG</option>
                                                        <option value="150">dr. Mirna Primasari, Sp. Onk. Rad</option>
                                                        <option value="58">dr. Mohamad Arsan, Sp. THT</option>
                                                        <option value="90">dr. Nanny Djaja, MS, Sp.GK</option>
                                                        <option value="91">dr. Nanny Venska Kosasih., MS, Sp.GK</option>
                                                        <option value="99">dr. Nelly Susanto, Sp.Rad</option>
                                                        <option value="103">dr. Paula Sutioso</option>
                                                        <option value="148">dr. Peter Ian Limas, Sp. B-KBD</option>
                                                        <option value="25">dr. Prihardadi Turidho, Sp.OT</option>
                                                        <option value="157">dr. Pudjo Astowo, Sp.P(K)</option>
                                                        <option value="20">dr. R. W. Kartika, Sp.BTKV, FPCC</option>
                                                        <option value="123">dr. Rahmat Cahyanur, Sp.PD</option>
                                                        <option value="130">dr. Ratnawati Soediro, Sp. Onk. Rad</option>
                                                        <option value="137">dr. Regina Kartika, Sp.KK</option>
                                                        <option value="6">dr. Ricardo M. Lambok S., Sp.A</option>
                                                        <option value="94">dr. Ricky Maurice Emil, Sp.RM</option>
                                                        <option value="92">dr. Setio I. Megawati, Sp.GK</option>
                                                        <option value="52">dr. Soehendro Widyanto, Sp.KJ</option>
                                                        <option value="21">dr. Soeprajitno, Sp.B</option>
                                                        <option value="15">dr. Soeprianto Wiradjaja, Sp.B</option>
                                                        <option value="120">dr. Soewandi A.H, Sp.Rad - KRI</option>
                                                        <option value="152">dr. Sri Rahayu Yulianti, Sp.M</option>
                                                        <option value="27">dr. Taufan Tenggara, Sp.U</option>
                                                        <option value="37">dr. Teguh Wijayadi, Sp.PD</option>
                                                        <option value="159">dr. Theresia Movita. Sp. KK</option>
                                                        <option value="141">dr. Tri Wahyu Woro Wibowo, A. Md. TW</option>
                                                        <option value="144">dr. Trimartani, Sp. THT</option>
                                                        <option value="138">dr. Tugas Ratmono, Sp,S</option>
                                                        <option value="158">dr. Yeo Hans Cahyadi, Ph. D, Sp.JP, FESC</option>
                                                        <option value="147">dr. Yuanita Gunawan, Sp. OG. Dipl. CIBTAC</option>
                                                        <option value="72">drg. Anggraeni P. Sp.Perio</option>
                                                        <option value="82">drg. Chaerani W. Bachtiar, Sp.KG</option>
                                                        <option value="83">drg. Dwi Anie Lestari, Sp.Ort</option>
                                                        <option value="73">drg. Erwina Muchtar</option>
                                                        <option value="75">drg. Iskandar Biantoro, Sp.KGA</option>
                                                        <option value="74">drg. Ivan Samaoen</option>
                                                        <option value="76">drg. Karlina Yusac, Sp.KG </option>
                                                        <option value="77">drg. Nuryanti, Sp.KG</option>
                                                        <option value="131">drg. Pande Putu Lily T., Sp. Perio</option>
                                                        <option value="78">drg. Ronny Gunawan </option>
                                                        <option value="87">drg. Rosalinda Rambe, Sp. KG</option>
                                                        <option value="79">drg. Silviana Damayanti</option>
                                                        <option value="80">drg. Thomas Henry W, Sp.BM</option>
                                                        <option value="108">Poli Perusahaan / Umum </option>
                                                        <option value="155">Prof. dr. Abdul Muthalib, Sp. PD-KHOM</option>
                                                        <option value="96">Prof. Dr. dr. Soehartati G, Sp.Rad(K). Onk.Rad</option>
                                                        <option value="118">TIM DOKTER ALERGI</option>
                                                    </select>
                    </div>
                    <span><input type="submit" class="button" value="Search"/></span>
                </form>
            </div>
            <div style="display: none;" id="tab2" class="tab_content">
                  <form action="http://gadingpluit-hospital.com/ind/cari_spesialis" method="post">
                    <div class="col-sm-9">
                        <select class="form-control" name="spesialis" id="select">
                            <option value="">-Pilih Spesialis-</option>
                                                        <option value="2"> Spesialis Kebidanan & Penyakit Kandungan </option>
                                                        <option value="24">Dokter Umum</option>
                                                        <option value="26">Klinik Alergi / Bioresonance</option>
                                                        <option value="25">Klinik Fertilitas Teratai</option>
                                                        <option value="23">Laser Klinik</option>
                                                        <option value="29">Radiologi Nuklir</option>
                                                        <option value="20">Spesialis  Terapi Wicara</option>
                                                        <option value="1">Spesialis Anak</option>
                                                        <option value="3">Spesialis Bedah</option>
                                                        <option value="7">Spesialis Bedah Plastik</option>
                                                        <option value="28">Spesialis Bedah Saraf</option>
                                                        <option value="4">Spesialis Bedah Tulang</option>
                                                        <option value="17">Spesialis Gigi & Mulut</option>
                                                        <option value="18">Spesialis Gizi Klinik</option>
                                                        <option value="10">Spesialis Jantung & Pembuluh Darah</option>
                                                        <option value="12">Spesialis Kesehatan Jiwa</option>
                                                        <option value="14">Spesialis Kulit & Kelamin</option>
                                                        <option value="16">Spesialis Mata</option>
                                                        <option value="21">Spesialis Onkologi Radiasi</option>
                                                        <option value="9">Spesialis Paru & Saluran Nafas</option>
                                                        <option value="8">Spesialis Penyakit Dalam</option>
                                                        <option value="27">Spesialis Radiologi</option>
                                                        <option value="19">Spesialis Rehabilitasi Medik (Spesialis Akupuntur Medik/Akup. Kosmetik)</option>
                                                        <option value="11">Spesialis Syaraf</option>
                                                        <option value="15">Spesialis THT</option>
                                                        <option value="6">Spesialis Urologi</option>
                                                        <option value="22">Spesialis USG</option>
                                                    </select>
                    </div>
                    <span><input type="submit" class="button" value="Search"/></span>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="cols-sidebar">
        <a href="http://gadingpluit-hospital.com/ind/tanyadoktor" class="button ask">Tanya Dokter Kami</a>
    </div>

    <div class="cols-sidebar" id="cols-purple">
        <h1 class="title"><span>Berita</span>Terbaru</h1>
        <div class="slider-wrapper theme-default main-content">
            <div class="slider nivoSlider">
                                                <a href="http://gadingpluit-hospital.com/ind/read_promo/PROMO-KEMERDEKAAN">
                <img src="http://gadingpluit-hospital.com/gambar/konten/2017/08/Untitled-3.jpg" data-thumb="http://gadingpluit-hospital.com/gambar/konten/2017/08/Untitled-3.jpg" alt="PROMO KEMERDEKAAN" title="PROMO KEMERDEKAAN"  oncontextmenu="return false;"/>
                </a>
                                                <a href="http://gadingpluit-hospital.com/ind/read/HUBUNGAN-ALKOHOL-DAN-DIABETES">
                <img src="http://gadingpluit-hospital.com/gambar/konten/2017/08/Alkohol_dan_diabetes.jpg" data-thumb="http://gadingpluit-hospital.com/gambar/konten/2017/08/Alkohol_dan_diabetes.jpg" alt="HUBUNGAN ALKOHOL DAN DIABETES" title="HUBUNGAN ALKOHOL DAN DIABETES"  oncontextmenu="return false;"/>
                </a>
                                <a href="http://gadingpluit-hospital.com/ind/read/WASPADAI-BENJOLAN-DI-LEHER">
                <img src="http://gadingpluit-hospital.com/gambar/konten/2017/08/tiroid.jpg" data-thumb="http://gadingpluit-hospital.com/gambar/konten/2017/08/tiroid.jpg" alt="WASPADAI BENJOLAN DI LEHER" title="WASPADAI BENJOLAN DI LEHER"  oncontextmenu="return false;"/>
                </a>
                                <a href="http://gadingpluit-hospital.com/ind/read/BAZAAR-BHINEKA-TUNGGAL-IKA">
                <img src="http://gadingpluit-hospital.com/gambar/konten/2017/08/bazar1.JPG" data-thumb="http://gadingpluit-hospital.com/gambar/konten/2017/08/bazar1.JPG" alt="BAZAAR BHINEKA TUNGGAL IKA " title="BAZAAR BHINEKA TUNGGAL IKA "  oncontextmenu="return false;"/>
                </a>
                                <a href="http://gadingpluit-hospital.com/ind/read/DIARE-BISA-GANGGU-TUMBUH-KEMBANG-ANAK">
                <img src="http://gadingpluit-hospital.com/gambar/konten/2017/08/Diare_Artikel.jpg" data-thumb="http://gadingpluit-hospital.com/gambar/konten/2017/08/Diare_Artikel.jpg" alt="DIARE BISA GANGGU TUMBUH KEMBANG ANAK" title="DIARE BISA GANGGU TUMBUH KEMBANG ANAK"  oncontextmenu="return false;"/>
                </a>
                                </div>
        </div>
    </div>
</div><div class="clear"></div>
            </div>
        </div>

        <footer>
    <ul>
        <li id="logo-footer" class="cols-left col-md-5">
            <h1><SPAN>Rumah Sakit</SPAN> GADING PLUIT</h1>
            <img src="http://gadingpluit-hospital.com/assets/images/logo-footer-ind.png"/>

        </li>
        <li id="copyright" class="col-md-3"><span>Copyright © 2013 - All Right Reserved</span></li>
        <li id="links" class="cols-right">
            <a href="http://gadingpluit-hospital.com/ind/lokasi">LOKASI</a>
            <a href="http://gadingpluit-hospital.com/ind/hubungikami">HUBUNGI KAMI</a>
            <a href="http://gadingpluit-hospital.com/ind/content/lowongan">LOWONGAN</a>
            <br class="clear"/>
        </li>
        
        <li id="alamat-footer" class="col-md-5">
            <p>Jl. Boulevard Timur Raya, Kelapa Gading - Jakarta 14250 <br/>
            T. (+6221) 4521001, 4520201 &nbsp;&nbsp; F. (+6221)  4520578 <br/>
            E. gadingpluit@gadingpluit-hospital.com </p>
            <h1>Gawat Darurat: (+6221) 4-5858-258</h1>
        </li>
        <li id="links-mobile" class="col-md-5">
            <a href="http://gadingpluit-hospital.com/ind/lokasi">LOKASI</a>
            <a href="http://gadingpluit-hospital.com/ind/hubungikami">HUBUNGI KAMI</a>
            <a href="http://gadingpluit-hospital.com/ind/content/lowongan">LOWONGAN</a>
            <p>Copyright © 2013 - All Right Reserved</p>
        </li>  
        
        <br class="clear"/>
    </ul>
</footer>    </body>
</html>

<script src="http://gadingpluit-hospital.com/assets/bootstrap/bootstrap.min.js"></script> 
<script src="http://gadingpluit-hospital.com/assets/bootstrap/main.js"></script>
<script src="http://gadingpluit-hospital.com/assets/bootstrap/jquery.mobilemenu.js" type="text/javascript"></script>