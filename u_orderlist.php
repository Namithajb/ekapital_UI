
<!DOCTYPE html>
<html lang="en">
  <head>
 
		    <title>User Dashboard | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
		<?php include 'includes/headerAx.php' ?>
		<?php  include 'includes/include_chat_box.php' ?>
		<?php  include 'includes/google_tag_manager_head.php' ?>
		<?php  include 'auth_mandate.php' ?>
    	

        </head>
     <body>
    <!-- added -->   
	<?php include 'includes/google_tag_manager_body.php' ?>
  		<?php include 'includes/menuAx.php' ?>
        </header>	

    <!-- Main Content -->
  <main class="padded">
      <div class="container">
       <div class="box-intro text-center">
          <h3 class="heading">User Dashboard</h3>
        </div>
	 <div class="row">	   
	   <div class="col-md-8">
	   <div class="well">	
        <div class="row">
          <div class="col-md-6">           
            <div class="form-group">
              <label>Start Date</label>
              <div class="input-group">
                <input type="text" class="form-control" name="sdate" id="sdate">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
		</div>
		<div class="col-md-6">
            <div class="form-group">
              <label>End Date</label>
              <div class="input-group">
                <input type="text" class="form-control" type="text" name="edate" id="edate">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              </div>
            </div>
		</div>
		 
        </div>
        <div class="row">
		   <div class="col-md-4">
			<button type="submit" class="btn btn-primary" onclick="loadgrid();" > Go <span class="badge"><i class="fa fa-angle-double-right"></i></span></button>
		   </div>
        </div>
      </div>
	   </div>
	   <div class="col-md-4">
	              <?php
		  	if ( $_SESSION["usertype"] == "B") {	?>	
		<button  type="button" onclick="window.location='/businesshome.php';" class="btn btn-success pull-right"><span class="badge"><i class="fa fa-angle-double-right"></i></span>&nbsp;&nbsp;Create New Order</button>
				<?php } 
			else {?>
			    <button onclick="window.location='/';" type="button" class="btn btn-success pull-right"><span class="badge"><i class="fa fa-angle-double-right"></i></span>&nbsp;&nbsp;Create New Order</button>
			 <?php }?>
	   </div>
	  </div>
	  <!-- top box end -->
	  
	
	 
	 <!-- main body grid -->
	  <div class="row margin20-bottom margin20-top">
	  	
		 <section class="col-md-12 text-center ">
		 <div class="well">
			<!-- <table id="ordergrid" ></table> -->
			<table id="ordergridDatatable" class="table table-hover table-bordered display">
				<thead>
		            <tr>
		                <th>Order Id</th>
		                <th>Collection Address</th>
		                <th>Destination Address</th>
		                <th>Product Name</th>
		                <th>Order Raised On</th>
		                <th>Tracking Id</th>
		                <th>Total Cost</th>
		                <th>Order Status</th>
		 
		                <th>AWB</th>
		            </tr>
		        </thead>
			</table>
			</div>
		</section>
      
	  <!-- main body grid - End -->
	</div>
    </div>
  </main>
  <!-- Main Content -->

	<!-- Footer -->
    <?php  include 'includes/footerAx.php' ?>
	<!-- Footer - End -->
  
<script type="text/javascript">
 var beurl ="<?php echo  $config['INSTANCEURL'];?>";
    var instanceurl_o = beurl + "/api/v1/ui/getmyparcel";
	var feurl ="<?php echo  $config['FRONTENDURL'];?>";

	function goviewpage(id){
           $.ajax
                  ({
              url: instanceurl_o + "/order/"+id,
              cache: false,        
              success: function(d)
			  
              {
				  var data = JSON.parse(d);
                   var url=data.url;
				   logDebugMsg(data.url);
				   window.location.href = url;
              }
           });
	}
	

  
	function goconfirmpage(id){
		window.location="/getuserconfirmations.gmp?orderid="+id;		
	}

	function makePrice(cellvalue, options, rowObject){		  
		   return "&pound; " + cellvalue;
	}
	
	function makeUrlView(cellvalue, options, rowObject){
		if(rowObject[9] == "Y"){
			return "<a style='color:#428bca;text-decoration:underline;' href='javascript:goviewpage("+rowObject[0]+");'>View Order</a>";
		} else if(rowObject[9] == "N" && rowObject[8] == "CNF"){
			return "<a style='color:#428bca;text-decoration:underline;' href='javascript:goconfirmpage("+rowObject[0]+");'>View Order</a>";
		} else if(rowObject[9] == "N" && rowObject[8] == "CAN"){
			return "<a style='color:#428bca;text-decoration:underline;' href='javascript:goviewpage("+rowObject[0]+");'>View Order</a>";
		} else if(rowObject[8] == "UNC"){
			return "<a style='color:#428bca;text-decoration:underline;' href='javascript:goviewpage("+rowObject[0]+");'>View Order</a>";
		}						   
	}
	
	function makeAwbUrlView(cellvalue, options, rowObject){
		if(rowObject[11] != null && rowObject[11] != undefined){
			return "<a style='color:#428bca;text-decoration:underline;' target='_blank' href='"+rowObject[11]+"'>"+rowObject[12]+"</a>";
		} else{
			return "AWB Not Available";
		}						   
	}

	function makeStatus(cellvalue, orderStatus, paymentCompletedStatus){
		
		if(orderStatus == "UNC"){
			return "Unconfirmed";
		} else if(paymentCompletedStatus == "Y"){
			return "Completed";
		} else if(orderStatus == "SHE"){
			return "Scheduled";
		} else if(paymentCompletedStatus == "N" && orderStatus == "CNF"){
			return "Payment Pending";
		} else if(paymentCompletedStatus == "N" &&orderStatus == "CAN"){
			return "Cancelled";
		} else {
            // Unkonwn 
            return "Under Query";
        }
	}
	
	
	var d = new Date();
	d.setDate(d.getDate()-7);
	$('#sdate').datepicker({format: "yyyy-mm-dd", autoclose:true, todayHighlight: true}).attr('readonly','readonly');
	$('#sdate').datepicker('update', d);
	$('#edate').datepicker({format: "yyyy-mm-dd", autoclose:true,todayHighlight: true}).attr('readonly','readonly');
	$('#edate').datepicker('update', new Date());
	
	var sdate=$('#sdate').val()+" 00:00:00";
	var edate=$('#edate').val()+" 23:59:59";
	
	var table = jQuery("#ordergridDatatable").DataTable({
		"processing": true,
	    "ajax": {
	        "url": instanceurl_o+"/user/orders/"+sdate+"/"+edate,
	        "dataSrc": "rows"
	    	},
	    "columnDefs": [
			{
	         	"targets": 0,
	         	"data": null,
	         	"render": function ( data, type, full, meta ) {
				      return '<a style="color:#428bca;text-decoration:underline;" href="/vieworder.php?id='+data+'">'+data+'</a>';
			    	}
	     	},
			{
				"targets": 5,
				"data": null,
				"render": function ( data, type, row, meta ) {
					if(data == undefined)
				      	return '- NA -';
					else
						var turl = row.cell[14];
						var track = turl + data;
					return 	'<a title="Click to track the parcel information" target="_blank" href="'+track+'">'+data+'</a>';
			    	}
			},
	       	{
	        	"targets": 6,
	        	"data": null,
	        	"render": function ( data, type, full, meta ) {
				      return '£ '+data;
			    	}
	    	},
	    	{
            "targets": 7,
            "defaultContent": "",
            "render": function(data, type, row, meta) {
                logDebugMsg(row);
				 logDebugMsg(row.cell[8]);
                var label_class;
                var payStatus;
				if(row.cell[16]=='N'){
                switch (row.cell[8]) {
                    case 'Y':
                        label_class = 'success';
                        payStatus = data;
                        return "<button   class='btn btn-" + label_class + "'>" + "   <i class='fa fa-check' aria-hidden='true'> </i>  Paid   " + "</button>";

                        break;
                    case 'N':
                        label_class = 'danger';
                        payStatus = data;
                        return "<button id='btnMakePayment' title='Click here to make payment' onclick='makePayment(" + row.id + ");' class='btn btn-" + label_class + "'>" +"<i class='fa fa-hand-o-right' aria-hidden='true'></i> Pay Now "+ "</button>";
                        break;
                }
				}else{
					return makeStatus (data, row.cell[7], row.cell[8]);
				}
            }
        },
		
	     	{
	            "targets": 8,
	            "render": function ( data, type, full, meta ) {
		            	if(data != null && data != undefined){
							return "<a style='color:#428bca;text-decoration:underline;' target='_blank' href='"+full.cell[11]+"'>"+data+"</a>";
						} else{
							return "AWB Not Available";
						}
			    	}
	        }	
	    ],
	    "columns": [
	        { "data": "cell.0" },
	        { "data": "cell.1" },
	        { "data": "cell.2" },
	        { "data": "cell.3" },
	        { "data": "cell.4" },
	        { "data": "cell.5" },
	        { "data": "cell.6" },
	        { "data": "cell.7" },
	    //    { "data": "cell.8" },
	        { "data": "cell.10" },
	        ]
	});

	
	function loadgrid(){	
	var sdate=$('#sdate').val()+" 00:00:00";
	var edate=$('#edate').val()+" 23:59:59";
		table.ajax.url( instanceurl_o+"/user/orders/"+sdate+"/"+edate).load();
	}
		var paymentGatewayProvider = getPaymentProvider();
var paymentProvider = paymentGatewayProvider.provider;

function getPaymentProvider() {
    var succeed = 0.0;
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + "/paymentProvider",
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {

            var d = data;
            if (d) {
                succeed = d;
				logDebugMsg(d.provider);

            }
        },

    });
    return succeed;
}
	
	function makePayment(orderid){

	 var d = new Date();
     var month = '' + (d.getMonth() + 1);
     var day = '' + d.getDate();
     var year = d.getFullYear();
	
	 var nextPage="";
	//window.location="/getalias.gmp?oid="+'${order.id}';
	$.ajax({
    url: instanceurl_o + "/getalias/" + orderid,
    cache: false,
    success: function(d)
    {
	var nextPage="";
        var data = JSON.parse(d);
		
        if (data.size == 0) {
            if (paymentProvider == ("BARCLAYS")) {
                nextPage = "paymentredirect";
            }
           if( paymentProvider == ("STRIPE")) {
            nextPage = "pay";
        }
    }
    else {
        nextPage = "stripeRedirect";
    }
	  var url = new URL(feurl + "/" + nextPage + ".php");
	logDebugMsg(data.weightDifference);
	if(data.weightDifference=='Y')
	{
		 url.searchParams.append('WTDIFFENCE', data.weightDifference);
		 
	}  
    url.searchParams.append('id', orderid);
    url.searchParams.append('flow', data.flow);
	logDebugMsg(url);
    window.location.href = url
}

});
	
}
</script>
</body>
</html>