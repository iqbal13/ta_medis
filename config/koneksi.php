<?php 
	$folder = "ta1";
	$link = "localhost:999";
	$url = "http://".$link."/".$folder."/";

	$db = mysqli_connect("localhost","root","","ta_medis");
	session_start();
?>