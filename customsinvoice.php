<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Customs Invoice | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>	
	 <?php include 'includes/headerAx.php' ?>
     <?php include('config.php'); ?>
   <?php
	$cdn=$config['CDNURL'];
	?>
<style>
.outer-sec {
    border: 1px solid #ddd;
    padding: 12px;
    /* margin-top: 30px; */
    border-radius: 5px;
}
body {
    font-family: 'Roboto Condensed',sans-serif !important;
    font-size: 14px !important;
    line-height: 1.42857143;
    color: #333;
    background: rgba(0, 0, 0, 0) url("../img/bg-main-new.png") repeat scroll 0 0;
    overflow-x: hidden;
}  

.admin-order-view h1{
	font-family: "Roboto Condensed",sans-serif;
	font-size: 36px;
	font-weight: normal !important;
	margin-bottom: 40px;
	margin-top: 20px !important;
}
hr {
    border-width: 2px;
}
hr {
    border-color: #520152;
    margin: 10px 0;
}
.admin-order-view h3{  font-family: "Roboto Condensed",sans-serif;}
.marginTop45{margin-top:45px;}
.admin-order-view .well, .transit-time .well.well-lg{ width:100%;}
.dl-horizontal dd {width:auto;display: inline-block;}
.outer-sec p {margin:0;}

table.productslist {
	border-width: 1px;
	border-spacing: 1px;
	border-style: solid;
	border-color: gray;
	border-collapse: collapse;
	background-color: rgb(255, 255, 240);
	width:100%;
}
table.productslist th {
	border-width: 1px;
	padding: 5px;
	border-style: solid;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}
table.productslist td {
	border-width: 1px;
	padding: 5px;
	border-style: solid;
	border-color: gray;
	background-color: white;
	-moz-border-radius: ;
}


</style>
</head>
<body>
    <!-- Main Content -->
	<!-- TBD: Values not appearing on fields, on submit enable client validation that fields are mandatory -->
  	<main class="padded20">
	 <div style="float:right;">   
		<a class="printMeButton"><img src="<?php echo $cdn;?>/img/printer.png" ></a>
	</div>
	<section class="col-sm-12 printable">
      	 
    <div class="container admin-order-view">
		<div>  
			<br />	
			<!-- 			
			<div style="float:right;">   
					<a class="printMeButton"><img src="<?php echo $cdn;?>/images/printer.png" ></a>
			</div>
			-->
		</div>
            <div class="row">
          	<section class="col-sm-12 printable">
				<div class="box-intro text-center">
					<h1 class="heading" style="margin-top: 0;color: darkblue; font-weight: bold;">Proforma Invoice / Packing List</h1>	
					<!-- Hidden Order ID : <a href="vieworder.gmp?id=<c:out value="${order.id}"/>"><c:out value="${order.id}"/></a> -->
				</div>
				<div class="col-sm-6 ">
	                <div class="outer-sec">
					  <p><span><b>Number of Packages:</b></span>&nbsp;&nbsp;<span><span id="noofparcel"></span><c:out value="${order.numOfParcel}"/></span></p>
					  <p><span><b>Date of Export:</b></span>&nbsp;&nbsp;<span> <span id="collectiondateactual"></span><c:out value="${order.collectionDateAsPresentableDate}"/></span></p>
					</div>
				</div>
				<div class="col-sm-6 ">
	                <div class="outer-sec">
					  <p><span><b>AWB Number:</b></span>&nbsp;&nbsp;
						
								<span id="trackingId"></span><c:out value="${order.trackingId}"/>
						
					  </p>
					  <p><span><b>Country of Origin:</b></span>&nbsp;&nbsp;<span><span id="collectioncountry"></span><c:out value="${order.collAddress.country}"/></span></p>
					</div>
				</div>
				<div class="col-sm-12 ">
				
					<table width="100%">
					<tr>
					<td width="50%">
					
					<h3 style="color: darkblue;">Shipper</h3>
	                <div class="outer-sec">
					  <p><b>Shipper Name :</b><span id="colcontactName"></span><c:out value="${order.collAddress.contactName}"/></p>
	                  <p><span id="coladdressLine1"></span><c:out value="${order.collAddress.addressLine1}"/></p>
	                  <p><span id="coladdressLine2"></span><c:out value="${order.collAddress.addressLine2}"/></p>
	                  <p><span id="coladdressLine3"></span><c:out value="${order.collAddress.addressLine3}"/></p>
	                  <p><span id="colcity"></span><c:out value="${order.collAddress.county}"/> </p>
	                  <p><b>Postal Code:</b> <span id="colpostCode"></span><c:out value="${order.collAddress.postCode}"/></p>
	                  <p><span id="colcountry"></span><c:out value="${order.collAddress.country}"/></p>
					  <p><b>Phone #:</b><span id="colphoneNumber"></span><c:out value="${order.collAddress.phoneNumber}"/></p>
					  <br/>
					
						<c:if test="${showVat == true}">
							<p><strong>VAT Status : Private Individual / Not VAT Registered</strong></p>
						</c:if>
					  
					  
					</div>
					</td>
					<td>
					<h3 style="color: darkblue;">Consignee</h3>
					<div class="outer-sec">
					 
						<p><b>Consignee Name :</b> <span id="delcontactName"></span><c:out value="${order.deliveryAddress.contactName}"/></p>
						<p><span id="deladdressLine1"></span><c:out value="${order.deliveryAddress.addressLine1}"/></p>
	                  	<p><span id="deladdressLine2"></span><c:out value="${order.deliveryAddress.addressLine2}"/></p>
						<p><span id="deladdressLine3"></span><c:out value="${order.deliveryAddress.addressLine3}"/></p>
	                  	<p><span id="delcity"></span><c:out value="${order.deliveryAddress.county}"/></p>
						<p>Postal Code: <span id="delpostCode"></span><c:out value="${order.deliveryAddress.postCode}"/></p>
						<p><span id="delcountry"></span><c:out value="${order.deliveryAddress.country}"/></p>
						<br/>
						<br/>
						<p>.</p>
					</div>
					</td>
				</div>
				<div class="col-sm-12">
				<hr>
				<table class="productslist" id="productslist">
					<thead>
					<tr>
						<th>Country of Manufacture</th>
						<th>Description of Goods</th>
						<th>Weight (Kgs)</th>
						<th>Unit Value</th>
						<th>Commodity Value</th>
					</tr>
					</thead>
					<tbody>

					<tr>
						<td></td> 
						<td></td> 
						<td><b>Total: <span id="consideredweight"></span><c:out value="${order.consideredWeight}"/></b></td> 
						<td><b><span id="parcelvalue"></span><c:out value="${order.parcelvalue}"/></b></td> 
						<td><b><span id="parcelval"></span><c:out value="${order.parcelvalue}"/></b></td> 
					</tr>
					<tr>
						
						<td colspan=2><b>Declared Currency: GBP</b></td> 
						<td></td> 
						<td colspan=2><b>Total Invoice Value:
						<span id="parvalue"></span><c:out value="${order.parcelvalue}"/></b></td> 
					</tr>
					</tbody>
				</table>
				
				</div>
				<div class="col-sm-12">
				<hr>
				<br />
				<p><b>Declaration</b>				
				<br />	
				<p><b>SIGNATURE OF SHIPPER / EXPORTER:</b>
				<br/>
				I declare that all the information contained in this invoice is true and correct.
				<br/><br/><br/>
				Title :_____<br/>
				Printed Name: ______________________, <br/><br/><br/><br/>
				Signed :________________, <br/>
				Dated : 
	
				</div>

			</div>	
			<div>  
			<br />				
		</div>
		  </section>
		 </div>

     </div>			  
      <!-- main body grid - End -->
	  </section>
            <div style="float:right;">   
		<a class="printMeButton"><img src="<?php echo $cdn;?>/img/printer.png" ></a>
			</div>	
  </main>

<script type="text/javascript">

var beurl ="<?php echo  $config['INSTANCEURL'];?>";
var feurl ="<?php echo  $config['FRONTENDURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui";
var url_string = window.location.href
    var url = new URL(url_string);
	$(function(){	
	$.ajax({
    type: 'GET',
    dataType: 'json',
  	url: instanceurl_o + '/getmyparcel/customs/invoice/'+url.searchParams.get("id"),
    error: function (jqXHR, textStatus, errorThrown) {
        console.log('==>> Error in calling url ::' + instanceurl_o + '/getmyparcel/customs/invoice/'+url.searchParams.get("id")  + ' , error :: '+jqXHR + '|' + textStatus + '|' + errorThrown);
    },
    success: function (d) {
    	if(d){
		sessionStorage.setItem("orderid",d.id);
		$("#orderno").text(d.id);
    	$("#orderraisedon").text(d.orderDate);
    	$("#orderraisedby").text(d.user.userid);
		
		$("#quotedtotal").text(d.totalPriceForOrderWithoutVat);
		$("#quotedtotalfinal").text(d.totalPriceForOrderWithoutVat);
		$("#quotedfinal").text(d.totalPriceForOrderWithoutVat);
    	$("#appliedvat").text(d.totalVatForOrder);
		$("#appliedvatfinal").text(d.totalVatForOrder);
		$("#vatfinal").text(d.totalVatForOrder);
		 var orderPrices=d.orderPrice;
		 for (var i in orderPrices) {          	
		if(orderPrices[i].type=='DISCOUNT')
		{  $("#applieddiscount").text('£ ' + orderPrices[i].amount);
		 break;
		}
	 }
		//$("#applieddiscount").text(d.appliedDiscount);
		$("#appliedtotal").text(d.totalPriceForOrder);
		$("#appliedtotalfinal").text(d.totalPriceForOrder);
		$("#totalfinal").text(d.totalPriceForOrder);
		$("#totalfinalvalue").text(d.totalPriceForOrder);
				
		$("#noofparcel").text(d.numOfParcel);
		$("#parcelvalue").text(d.parcelvalue);
		$("#parcelval").text(d.parcelvalue);
		$("#parvalue").text(d.parcelvalue);
		$("#parcelcontent").text(d.parcelcontent);
		$("#productVatPercent").text(d.productVatPercent);
	
		$("#consideredweight").text(d.consideredWeight);
		$("#coldate").text(d.collectionDateAsPresentableDate);
		$("#collectiondateactual").text(d.collectionDateAsPresentableDate);
		$("#productactualname").text(d.product.actualName);
		$("#productmarketname").text(d.product.marketingName);
		$("#productmarketnameorder").text(d.product.marketingName);
		//$("#TrackingId").text(d.trackingId);
		$("#colcontactName").text(d.collAddress.contactName);
		$("#colphoneNumber").text(d.collAddress.phoneNumber);
		$("#coladdressLine1").text(d.collAddress.addressLine1);
		$("#coladdressLine2").html(d.collAddress.addressLine2);
		$("#coladdressLine3").html(d.collAddress.addressLine3);
		$("#colcity").text(d.collAddress.city);
		$("#colpostCode").text(d.collAddress.postCode);
		$("#colcountry").text(d.collAddress.country);
	  $("#collectioncountry").text(d.collAddress.country);
	  if(d.linkOfAWBFile != null && d.linkOfAWBFile != ''){
		 $("#trackingId").text(d.trackingId); 
	  }else{
		   $("#trackingId").html('<span style="color:red">AWB Not uploaded</span>');
	  }
    
		$("#deliverycountry").text(d.deliveryAddress.country);
	//	$("#consigneeAddressDiv").append('<p><b>Contact Name :</b> '+d.deliveryAddress.contactName+'</p><p><b>Phone :</b> '+d.deliveryAddress.phoneNumber+'</p><p> '+d.deliveryAddress.addressLine1+'</p><p> '+d.deliveryAddress.addressLine2+'</p><p> '+d.deliveryAddress.addressLine3+'</p><p>'+d.deliveryAddress.city+'</p><p>Postal Code: '+d.deliveryAddress.postCode+'</p><p>'+d.deliveryAddress.country+'</p>');
		$("#delcontactName").text(d.deliveryAddress.contactName);
		$("#delphoneNumber").text(d.deliveryAddress.phoneNumber);
		$("#deladdressLine1").text(d.deliveryAddress.addressLine1);
		$("#deladdressLine2").text(d.deliveryAddress.addressLine2);
		$("#deladdressLine3").text(d.deliveryAddress.addressLine3);
		$("#delcity").text(d.deliveryAddress.city);
		$("#delpostCode").text(d.deliveryAddress.postCode);
		$("#delcountry").text(d.deliveryAddress.country);
    	var count =0 ;
    	 $.each(d.parcelInfoList, function (key, entry) {
    	 	$("#productslist > tbody").before('<tr><td>'+d.collAddress.country+'</td><td>'+d.parcelcontent+'<br/> <br/> No Commercial Value. <br/>The Value Mentioned is only for Customs purpose.</td> <td>'+entry.declaredWeight+
			'</td><td>'+d.parcelvalue+'</td><td>'+d.parcelvalue+'</td></tr>');
    	 	count++;
			});
        console.log('==>> Success in calling url ::' + instanceurl_o + '/getmyparcel/customs/invoice/'+url.searchParams.get("id")  +  ' , data :: '+d);
    	}

    }
        });
});
	
	 $(".printMeButton").attr( "href", "javascript:void( 0 )" ).click( function(){
			// Print the DIV.
			$( ".printable" ).print();
			// Cancel click event.
			return( false );
		});
	 

</script>
</body>
</html>