<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Barclays Payment Redirect | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>    
	<?php include 'includes/headerAx.php' ?>
	<?php include('config.php'); ?>
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
 	<main class="padded20">
	<div class="container">
<div>

	<p style="margin: 20px 0; text-align: center; font-size: 20px;">Select from your previously saved cards with us ... </p>


				<div class="col-md-12 text-center  margin20-top"
				style="text-align: left;">
				<table id="cardDatatable"
					class="table table-hover table-bordered display"
					style="text-align: center; ">
					<thead>
						<tr>
						
							<th>Brand</th>
							<th>Card No</th>
							<th>Action</th>
						
						</tr>
					</thead>

				</table>

				</div>
				</div>
				
				<hr>
				<div>
				<p style="margin: 20px 0; text-align: center; font-size: 20px;">OR</p>
				<p style="margin: 20px 0; text-align: center; font-size: 20px;">Want to use new one ? </p>
				<p style="margin: 20px 0; text-align: center; font-size: 20px;"><i style="font-size:24px" class="fa">&#xf063;</i></p>
				
		<center>	
		<button id="directpay" name="directpay" type="button" class="btn btn-success"><i class="fa fa-play-circle-o"></i> Go to Payment Page </button>
	  </center>  
	  <br><br>
	  </div> 
	  </div> <!-- container -->
	  </div> <!-- main -->
<!-- Footer -->
    
	  <?php  include 'includes/footerAx.php' ?>
	
	<!-- Footer - End -->
	           	
<script type="text/javascript">
	  var beurl ="<?php echo  $config['INSTANCEURL'];?>";
    var instanceurl_o = beurl + "/api/v1/ui/getmyparcel";
        var instanceurl="<?php echo  $config['INSTANCEURL'];?>";
		
   var pageUrl="";
   var url_string = window.location.href
    var url = new URL(url_string);
var orderid=url.searchParams.get("id");

   if(url.searchParams.get("flow")=="view"){
	 pageUrl=instanceurl_o + "/getpayment/"+orderid;
   }else{
	 pageUrl=instanceurl_o + "/redirecttopayment/"+orderid;
   }
console.log(instanceurl_o + "/getaliasbyuserid/"+orderid);

var cTable = jQuery("#cardDatatable")
.DataTable(
		{

			select : true,
			"processing" : true,
			"order" : [ [ 1, "asc" ] ],
			"ajax" : {
				"url" : instanceurl_o + "/getaliasbyuserid/"+orderid,
				"dataSrc" : ""

			},
			order : [ [ 1, 'asc' ] ],
			"columnDefs" : [
					 {
			         	"targets": 0,
			         	
			         	"defaultContent": "" 
			     	},
			     	 {
			         	"targets": 1,
			         	
			         	"defaultContent": "" 
			     	},
			     {
			         	"targets": 2,
			         	
			         	"render" : function(cellvalue, options,rowObject)
			         	{	
							return  "<button id='pay' onclick='gopay(`"+ rowObject.alias+"`,`"+ rowObject.brand+"`,`"+ rowObject.pm+"`,`"+ rowObject.cardno+"`,`"+ rowObject.ed+"`,`"+ rowObject.cn+"`);' title='Go to Payment Page' class='btn btn btn-primary' style='background-color: #428bca;border-color: #357ebd;'> Pay with this Card </button></button></button>" ;
						}
			     	},
			     	 

			],

			columns : [ {
				data : "brand"
			}, {
				data : "cardno"
			},  {
                data : null
            }

			],

		});
		
		function gopay(alias,brand,pm,cardno,ed,cn){
						
			var jsondata = {
		  	 "alias": alias,
		     "brand": brand,
			 "pm": pm,
		     "cardno": cardno,
		     "ed": ed,
		  	 "cn" : cn,
		    }
		  $.ajax
              ({
              url: pageUrl,
			  type:"POST",
		      data: JSON.stringify(jsondata),
              cache: false,        
              success: function(d)
			  
              {
				  console.log(cardno);
				  var data = JSON.parse(d);
                   var url=data.url;
				   console.log(data.url);
				   window.location.href = url;
              }
        });
		}
	 $('#directpay').bind('click',function(){
			$("#directpay").prop('disabled',true);
			     $.ajax
        ({
              url: pageUrl,
			  type:"POST",
              cache: false,        
              success: function(d)
			  
              {
				  var data = JSON.parse(d);
                   var url=data.url;
				   console.log(data.url);
				   window.location.href = url;
              }
        });
        
		});
	
	
		
</script>

</body>
</html>