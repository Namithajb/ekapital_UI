<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<?php
   header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
   header("Cache-Control: post-check=0, pre-check=0", false);
   header("Pragma: no-cache");
    ?>
     <?php include 'includes/headerAx.php' ?>
 
    <?php  include 'includes/include_chat_box.php' ?>
   

</head>
<body>
    <?php include 'includes/menuAx.php' ?>
	   </header>
  <main class="padded">	
	 <div class="container">
     	 
	<!-- top box -->
	 <div class="row">
	    <div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Product Details</h3>
					</div>
					<div class="panel-body">
					<div class="row">
					<div class="col-lg-12 ">				 
					  	<label> Product Name</label>
                       <div id="mName">  </div>								
					</div>
					</br></br>
					<div class="col-lg-12">				 
					  	<label>Description</label>
                        <div id="description"> </div>						
					</div></br>
					<div class="col-lg-12">				 
					  	<label> Short Description</label>
                        <div id="sDescription"> </div>						
						
					</div></br>
					<div class="col-lg-12">				 
					  	<label>Special Instructions</label>
                     <div id="instruction"> </div>						
					</div>
				
					 
					</div>										
					</div>
				</div>
			</div>   
      </div>
	 
	 <!-- main body grid -->
	 
	 <!-- main body grid -->
	  <!-- <div class="row margin20-bottom margin20-top">
		 <section class="col-md-12 text-center ">
			<table id="ordergrid" ></table>
		</section>
      </div> -->
	  <!-- main body grid - End -->
	
	 </div>

	
	
	
	
	</main>
  <?php  include 'includes/footerAx.php' ?>
  
    
  <script type="text/javascript">
  var beurl ="<?php echo  $config['INSTANCEURL'];?>";
var feurl ="<?php echo  $config['FRONTENDURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui/getmyparcel";
var orderurl=beurl+"/api/v1/ui";


$(document).ready(function () {
	var url_string = window.location.href
var url = new URL(url_string);
var pid = url.searchParams.get("pid");

	  $.ajax({
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/product/'+pid,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown while retrieving country list:" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/product/'+pid);
			logDebugMsg(data);
			$("#mName").html(data.marketingName);
			$("#description").html(data.description);
			$("#sDescription").html(data.shortDescription);
			$("#instruction").html(data.specialinstructions);


        },

    });
	
	});


</script>
</html>