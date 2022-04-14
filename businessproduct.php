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
   	<style type="text/css">
	.table-actions{
		text-align: center;
	}
	.table-actions a{
		margin: 5px;
	}
	
	</style>

</head>
<body>
    <?php include 'includes/menuAx.php' ?>
	   </header>	
	
	
	
	<main class="padded">
     <div class="container">
        <div class="box-intro text-center">
          <h3 class="heading">Your Products</h3>
        </div>
		 <div id="successMsg"></div>
        <div id="errorMsg"></div>
		
		
			<div class="row margin20-bottom margin20-top">
	    <div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">
						<span class="panel-title">Products List</span>
						<div class="panel-actions pull-right">
							
						</div>
					</div>
					<div class="panel-body">
						
	            	<table id="productDatatable" class="table table-hover table-bordered display">
						<thead>
				            <tr>
				              
				                
				                <th>Product Name</th>
				                <th> Actions </th>
				                
				            </tr>
				        </thead>
					</table>
					</div>  	
				</div>
			<!-- main body grid - End -->		
     	</div>
	 </div>
    </div>
	   </main>
	   
	    
  <div class="modal fade" id="rateModel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Rates</h4>
      </div>
      <div class="modal-body">
      <div class="row">
		<div class="col-md-9">
			<label class="col-md-3" style="margin-top: 8px;"> Country
			</label>
			<div class="col-md-9">
				 <div id="billingDropDown">
				   <select name="billingCountryId" class="form-control" onclick="getProductRateForCountry();"  input-lg inputshd" id="billing_country" placeholder="Select Billing Country">
					  <option value="">Select Country</option>
				   </select>
				</div>
			</div>
			<input type="hidden" id="selProduct">
		</div>

		</div>
		
		<div class="row">
		<div   class="col-md-12" style="overflow: auto; max-height: calc(100vh - 220px);">
		<table id="rates" border="1" class="col-md-12" style="margin-top: 10px;">
		<thead>
		<tr>
		<th>Weight</th>
		<th>Rate</th>
		</tr>
		</thead>
		<tbody>
		
		</tbody>
		</table>
		
		</div>
		</div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	
	
	
	
	
	
	
	
  <?php  include 'includes/footerAx.php' ?>
  
  <script type="text/javascript">
  var beurl ="<?php echo  $config['INSTANCEURL'];?>";
var feurl ="<?php echo  $config['FRONTENDURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui";
var orderurl=beurl+"/api/v1/ui";


$(document).ready(function () {
	getBillingCountriesList();
	setTimeout(function() {
  		var status = '${status}' ;
	 	if(status && status ==  '0' ){
	 		showErrorDiv('<div class="alert alert-danger">${msg} </div>');
	 	}else if(status == '1'){
	 		showSuccessDiv('<div class="alert alert-success">${msg} </div>');
	 	}
	}, 10)
});
		var table = jQuery("#productDatatable").DataTable({
			"processing": true,
			 responsive: true,
		    "ajax": {
		        "url": instanceurl_o+"/getmyparcel/products",
		    	},
	    	"columnDefs": [ 
		        {
		         	"targets": 0,
		         	"data": null,
		         	"render": function ( data, type, full, meta ) {
						logDebugMsg(full);
							
					      return '<div > '+full.marketingName+'</div>';
				    	}
		     	},
		    	
		     	{
		         	"targets": 1,
		         	"data": null,
		         	"render": function ( data, type, full, meta ) {
					      return '<div class="table-actions">'+
					      '<a onclick="showRates('+full.productId+')" href="javascript:void(0);"><button title="View Rates" class="btn btn-xs btn-info"><i class="fa fa-euro"></i></button></a>'+
					      /* ' <a style="color:#428bca;text-decoration:underline;" href="/bussinessproductrates.gmp?pid='+full.productId+'"><i class="fa fa-money"></i></a>   '+ */
					      '<a href="/bussinessproductview.php?pid='+full.productId+'"><button title="Edit Product" class="btn btn-xs btn-warning"><i class="fa fa-edit"></i></button></a></div>';
				    	}
		     	},
			],
		    "columns": [
		   
		        { "data": "marketingName",className: "text-left" },
		        ],
	        "initComplete": function(settings, json) {
	        	 if(!(typeof json !== 'undefined' && json.data.length > 0)){
		        	 $("#productDatatable_wrapper").hide();
		        	 $("#productDatatable_wrapper").closest(".panel-body").html("<h2> Your account is being reviewed and you will receive a call within 24 hours from our customer service to allocate the right products to you.</h2>");
	        	 }
	          } 
		});
	
 
var p=0;
  function getProductRateForCountry()
  {
	   var country= $("#billing_country").val();
		
      setRates(p, country);
		 $('.modal').modal('show');			
			
  } 
	 function showRates(id){
		p=id;
		 $("#selProduct").val(id);
		 $('#rateModel')
	        .prop('class', 'modal fade') // revert to default
	        .addClass( $(this).data('direction') );
	
		// setRates(id, cid);
		 $('.modal').modal('show');
			
		 
	}
	function setRates(p, country){
		
		$("#rates tbody").html(null);
		
		$.ajax({
			 type: 'GET',
			 url: instanceurl_o+'/getmyparcel/rate/'+country+'/'+p,
			 dataType: 'json',
	   error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown while retrieving rate list:" + errorThrown+" => "+'/rate/'+country+'/'+p);
        },
			 success:function(json){
		 logDebugMsg("==>Success while retrieving rate list:" + +" => "+instanceurl_o+'/getmyparcel/rate/'+country+'/'+p);
				 $(json).each(function(i, element) {	
			 		var tr = '<tr><td style="text-align: center;"> '+element.weight+' </td> <td  style="text-align: center;" > '+element.rate+'</td> </tr>';
				 	$("#rates tbody").append(tr);
				 })
				 		 
			 }
		 });
	}

function getBillingCountriesList() {
    //get list of country
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: orderurl + '/o/getmyparcel/country/all',
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown while retrieving country list:" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/o/country/all , data :: ' + data);
			logDebugMsg(data);
            if (data) {
                var count = 0;

                $.each(data.rows, function(key, entry) {
                  <!--  $("#billing_country").append($('<option></option>').attr('value', entry.cell[1]).text(entry.cell[1]));-->
					$("#billing_country").append($('<option></option>').attr('value', entry.cell[1]).text(entry.cell[1]));

                    count++;
                })	
				
            }
        },

    });
}
</script>
</html>