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
     <?php include('config.php'); ?>
   
    <?php  include 'includes/include_chat_box.php' ?>
     <style type="text/css">
        .input-group{
            padding-bottom: 10px;
            width: 100%;
            padding-right: 10px;
        },
         .ui-datepicker-calendar {
    display: none;
    }
    </style>

</head>
<body>
    <?php include 'includes/menuAx.php' ?>
	   </header>	
   
   
   
    <main class="padded">
     <div class="container">
        <div class="box-intro text-center">
          <h3 class="heading">Your Settings</h3>
        </div>
		
        <div id="successMsg"></div>
        <div id="errMsg"></div>
		 <button type="button" class="btn btn-success" id="btnAddCard" > <i class="fa fa-plus"></i> Manage Cards
				 </button>  
				  <button type="button" class="btn btn-success" id="btnInvoices" > <i class="fa fa-plus"></i> Invoices
				 </button>
				 
				 </br></br>
    <!-- top box -->
     <div class="row">
        <div class="col-md-12">
            <div id="successMsg"></div>
            <div id="errorMsg"></div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Client Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4">
                              <div class="input-group">
                                <label>Client Name</label>
                                <input id="name" class="form-control" placeholder="Name" readonly />
                               
                              </div> 
                            </div>
                        </div>
                    </div>
                </div>

              
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">User Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4">
                              <div class="input-group">
                                <label>User ID</label>
                                <input  id="userid" class="form-control" placeholder="Your user id" readonly/>
                              </div> 
                            </div>
                        </div>
                    
                    </div>
                </div>
                
   

          
            
            </div>

        </div>
      </div>
     
    
        	       
                
               
  </main>
   
   
   
   
   
   
   
  <?php  include 'includes/footerAx.php' ?>
  
  
  
  
  
  <script language="javascript">
    var beurl ="<?php echo  $config['INSTANCEURL'];?>";
var feurl ="<?php echo  $config['FRONTENDURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui";
var orderurl=beurl+"/api/v1/ui";

 

 var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

 for (i = new Date().getFullYear() ; i > 2019; i--) {
     $.each(months, function (index, value) {
         $('#yearMonthInput').append($('<option />').val(index + "_" + i).html(value + " " + i));
     });                
 }
 
$('#btnAddCard').bind('click', function(ev)
{
	window.location.href = feurl+"/u_payment.php";
});

$('#btnInvoices').bind('click', function(ev)
{
	window.location.href = feurl+"/b_invoice.php";
});
 
 
    $(document).ready(function () {
        setTimeout(function() {
            var status = '${status}' ;
            if(status && status ==  '0' ){
                showErrorDiv('<div class="alert alert-danger">${msg}</div>');
                fadeErrorDiv(5000); 
            }else if(status == '1'){
                showSuccessDiv('<div class="alert alert-success">${msg} </div>');
                fadeSuccessDiv(5000);
            }
        }, 10);
		
		  
		
		  $.ajax({
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/getmyparcel/settings',
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("==>Error thrown while retrieving country list:" + errorThrown);
        },
        success: function(data) {
            console.log('==>> Success in calling url ::' + instanceurl_o + '/settings');
			
			$('#name').val(data.client);
			$('#userid').val(data.user_id);
            
        },

    });
		
    });
    
   
	







 </script>

</html>