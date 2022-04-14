<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<?php
   header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
   header("Cache-Control: post-check=0, pre-check=0", false);
   header("Pragma: no-cache");
    ?>
	<title> Home | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
     <?php include 'includes/headerAx.php' ?>
     <?php include('config.php'); ?>
   
    <?php  include 'includes/include_chat_box.php' ?>
   <?php
	$cdn=$config['CDNURL'];
	?>

</head>
<body>
    <?php include 'includes/menuAx.php' ?>
	<main class="padded"  style="background-color:#fff;background-image:url(<?php echo $cdn;?>/img/bg-header1.jpg)">
    <?php  include 'includes/home.php' ?>
	</main>
  <?php  include 'includes/footerAx.php' ?>
</html>