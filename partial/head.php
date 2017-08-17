<?php 
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=yes" />
        <link href="http://gadingpluit-hospital.com/assets/css/default.css" rel="stylesheet" />
        <link href="http://gadingpluit-hospital.com/assets/css/custom.css" rel="stylesheet" />
        <link href="http://gadingpluit-hospital.com/assets/css/responsive.css?v=1501424264" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="http://gadingpluit-hospital.com/assets/images/icon.png"/>
        <title>Rumah Sakit GADING PLUIT</title>

        <!-- Jquery menu -->
        <link rel="stylesheet" href="http://gadingpluit-hospital.com/assets/jMenu/jMenu.jquery.css" type="text/css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://gadingpluit-hospital.com/assets/jMenu/jMenu.jquery.js"></script>
        <script type="text/javascript" src="<?php echo $url ?>js/jquery.steps.js"></script>
<!-- script type="text/javascript">
<www.spacegun.co.uk  >
var message = "function disabled"; 
function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){alert(message); return false; } 
if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) {alert(message);return false; } } 
document.onmousedown = rtclickcheck;
</script-->        
<script type="text/javascript">
            $(document).ready(function() {
                $("#jMenu").jMenu();
            });
$("#example-basic").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    autoFocus: true
});    </script>
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
 	<link rel="stylesheet" href="http://gadingpluit-hospital.com/style.css" />
        <script type="text/javascript">
                $(document).ready(function() {
                        $(".various1").fancybox({
                                'titlePosition'		: 'inside',
                                'transitionIn'		: 'elastic',
                                'transitionOut'		: 'elastic'
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
        <link rel="stylesheet" href="<?php echo $url ?>js/jquery.steps.css">
    </head>
