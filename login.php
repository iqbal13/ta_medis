<?php 
include 'partial/head.php';
?>
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
</header>                <nav>
                 <?php include 'partial/menu.php' ?>
                    <div class="clear"></div>
                </nav>
       

<div class="row" style="margin-top: 0px !important;">
<div class="col-md-12" style="padding-right: 5px !important;">
    <div class="cols-home" id="cols-teal">
        <h3> Login </h3>

        <div  class="col-md-6">
        <form method="POST" action="<?php echo $url ?>proseslogin.php">
        <div class="form-group">

            <label> Username </label>
            <input type="text" name="username" class="form-control">

        </div>
        <div class="form-group">
            <label> Password </label>
            <input type="password" name="password" class="form-control">
        </div>

        <button type="submit" name="submit" class="btn btn-primary"> Log in </button>
        </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
    </div>
<div class="clear"></div>
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