<!DOCTYPE html>
<html lang="en">
  <head>
       <title>Invoice | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
 <?php include 'includes/headerAx.php' ?>
		<?php
	$cdn=$config['CDNURL'];
	?>
        </head>
     <body>
        </header>
      <style>
		body{
          font-face: calibri, 'Times New Roman';
			font-family:Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif;
		}
			text-align:center;
		.smallfont {
		  font-size:8px;
      }
      table {
    width: 100%;
}

h3 {
    display: block;
    font-size: 1.17em;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
h4 {
    display: block;
    margin-block-start: 1.33em;
    margin-block-end: 1.33em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}

<?php
$ini_array = parse_ini_file("tenant.ini");
?>



      </style>
   </head>
   <body>      
   
    <main>
	 <div style="float:right;">   
		<a class="printMeButton"><img src="<?php echo $cdn;?>/img/printer.png" ></a>
	</div>
	<section class="col-sm-12 printable">
	 
	<div>
	   <img src="<?php echo $cdn;?>/img/tenant/<?php echo $ini_array['tenant.current']?>/logo.png" width="150" height="50" />  
	   </div>
    <div class="container ">
      <div class="row">
        <section class="col-sm-12">
				<section class="col-sm-8">
					
					<table width="800px">
                        <tr>
                            <td>
                                    <p><h3>Invoice to</h3></p>
                                    <p>	<span id="colcontactName"></span><br/>
                                  	<span id="coladdressLine1"></span> 
                           
                                    <span id="coladdressLine2"></span> <span id="coladdressLine3"></span><c:out value="${address.addressLine3}"/><br/></c:if>
                                    <span id="colcity"></span> <br/>
                                    <c:out value="${address.county}"/>  <span id="colpostCode"></span><br/>
                                    <span id="colcountry"></span><br/>
                                    Ph: <span id="colphoneNumber"></span>
                                </p>
                            </td>
                            <td>
                                <h3></h3>
                                <p>
                                    Invoice #: <b><span id="invoiceno"></span></b><b><c:out value="${invoiceNumber}" /></b><br/>
                                    Invoice for period : <span id="invoicestartdate"></span><c:out value="${invoicestartdate}"/> - to - <span id="invoiceenddate"></span><c:out value="${invoiceenddate}" /><br/>
                                    Invoice Date: <span id="currentDate"></span><c:out value="${currentDate}" /><br/>
                                    Payment Due Date: <b>Immediate</b><br/>
									 
                                 
                                    <br/>
                                </p>

                            </td>
                        </tr>
					
                    </table>
					

				</section>
				
				<section class="col-sm-12">
					<h3>Detailed Invoice</h3>
					<table style="width:100%;border-width: 0.5px; border-spacing: 2px; border-style: thin; border-color: #222; border-collapse: collapse; 	background-color: white;">
					<tr>
						<th style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray; background-color: #EFEFFB; font-weight:bold;"><span >Order ID</span></th>
						
					
						<th style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray; background-color: #EFEFFB; font-weight:bold;"><span >Collection Date</span></th>
						<th style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray; background-color: #EFEFFB; font-weight:bold;"><span >AWB Number</span></th>
						
						  
						<th style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray; background-color: #EFEFFB; font-weight:bold;"><span >Parcel From</span></th>
						<th style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray; background-color: #EFEFFB; font-weight:bold;"><span >Parcel To </span></th>
						<th style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray; background-color: #EFEFFB; font-weight:bold;"><span >Declared Contents</span></th>
						
					
                        <th style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray; background-color: #EFEFFB; font-weight:bold;"><span >Weight *</span></th>
                     
                        
						<th style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray; background-color: #EFEFFB; font-weight:bold;"><span >Cost</span></th>
						<th style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray; background-color: #EFEFFB; font-weight:bold;"><span >VAT</span></th>

                        
						<th style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray; background-color: #EFEFFB; font-weight:bold;"><span >Total</span></th>
					</tr>
					<tr>
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" ><span id ="orderno"></span></td>
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" ><span id ="coldate"></span></td>
						

                        <td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" ><span id ="productactualname"></span><br/> AWB #: <span id ="TrackingId"></span></td>
                        <td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" > <span id="collectioncountry"></span></td>
                        <td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" > <span id="deliverycountry"></span></td>
                      
                        
	
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" > <span id="parcelcontent"></span></td>	
		
						
					
                        <td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" ><span id="consideredweight"></span></td>
                  
                        
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" >&pound; <span id="quotedtotal"></span><c:out value="${order.appliedCost + order.insuranceAmount}"/></td>
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" >&pound; <span id="appliedvat"></span> (<span id="productVatPercent"></span><c:out value="${order.productVatPercent}"/> %)</td>
					
					
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" >&pound; <span id="appliedtotal"><c:out value="${order.appliedTotalAmount}"/> </td>
					</tr>
					
					<tr>
						<td colspan="7" style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;text-align:right"><b>Total</b></td>
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;">&pound; <span id="quotedtotalfinal"><c:out value="${totalCost}"/></td>
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;">&pound; <span id="appliedvatfinal"><c:out value="${totalVat}"/></td>
						
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;">&pound; <span id="appliedtotalfinal"><c:out value="${totalAmount}"/> </td>
					</tr>
					</table>
				</section>
				<hr></hr>
				<section class="col-sm-8 ">
					<div  style="float:right;width:50%;">
						<div class="well well-sm">
							<h3> Bank Details </h3>
							<dl class="dl-vertical margin0">
							
								<dt><?php echo $ini_array['invoice.bank.accountholder.name'];?> </dt>
								<dt><?php echo $ini_array['invoice.bank.name'];?></dt>
								<dt>Sort Code: <?php echo $ini_array['invoice.bank.sortcode'];?></dt>
								<dt>Account No: <?php echo $ini_array['invoice.bank.accountnumber'];?></dt>
							</dl>
						</div>
					</div>
					<h3>Summary</h3>
					<table style="width:50%;border-width: 0.5px; border-spacing: 2px; border-style: solid; border-color: #222; border-collapse: collapse; 	background-color: white; line-height:0.5em;">
					<tr>
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" >Total Cost:</td><td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" >&pound; <span id="quotedfinal"><c:out value="${totalCost}"/></td>
					</tr><tr>
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" >Total VAT:</td><td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" >&pound; <span id="vatfinal"><c:out value="${totalVat}"/></td>
					</tr><tr>
						<td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" >Total Amount Payable:</td><td  style="border-width: 1px; padding: 5px; border-style: solid; border-color: gray;  background-color: white;" >&pound;<b> <span id="totalfinal"><c:out value="${totalAmount}"/></b></td>
					</tr>
					</table>
					 
				</section>
				<hr></hr>
			 
				 <section class="col-sm-12">
					<h3>Total Amount Payable : &pound; <span id="totalfinalvalue"><c:out value="${totalAmount}"/></h3>
					<h4>Payment Due Date : Immediate</h4>
					 <h4><label for="status">Payment Status:</label>
			                   <span id="paystatus">
								</span>
								<!--<button type="button" id="makepayment" name="makepayment"
								class="btn btn-danger" onclick="makepayment();">
								  <i class='fa fa-hand-o-right' aria-hidden='true'></i> Pay Now
							</button>--></h4>
				 </section>
				 
				 <section class="col-sm-12">
                    
                    
					<p>If you have any questions on the details in this invoice, feel free to get in touch with us at email id - <a href='mailto:<?php echo $ini_array['invoice.contact.email'];?>'><?php echo $ini_array['invoice.contact.email'];?>.</a> within 15 days of the invoice date for prompt response on any queries.</p>
					<p>In case of any non-payment of invoices as per the "Payment Due Date" mentioned above in the invoice, we reserve full right to deny any further service to you or your subsidiaries. Please refer our terms and conditions under website - <?php echo $ini_array['invoice.tenant.website'];?> - for more detailed information.</p>
					
					<p>For any other enquiries, refer our website <a href='http://<?php echo $ini_array['invoice.tenant.website'];?>'><?php echo $ini_array['invoice.tenant.website'];?></a> - Help section (or) FAQs section. We have attempted to provide a wealth of information in these sections. If you still have questions, feel free to get in touch with us at email id - <a href='mailto: <?php echo $ini_array['invoice.tenant.contact'];?>'><?php echo $ini_array['invoice.tenant.contact'];?></a></p>
			  
                    <p class="small">* - Weight mentioned in this document is "Considered Weight". For more information on this topic refer FAQ section under -  <a href='http://<?php echo $ini_array['invoice.tenant.website'];?>'><?php echo $ini_array['invoice.tenant.website'];?></a></p>
              
					
					
				  </section>
		</section>
		<hr></hr>
		<section class="col-sm-12 smallfont centertext">
			<dt><?php echo $ini_array['invoice.contact.name'];?> | <?php echo $ini_array['invoice.contact.address'];?></dt>
			<dt>Web: <a href='http://<?php echo $ini_array['invoice.contact.weblink'];?>'><?php echo $ini_array['invoice.contact.weblink'];?></a> | 
			Phone: <?php echo $ini_array['invoice.contact.phone'];?> |	
			Email: <a href='mailto:<?php echo $ini_array['invoice.contact.email'];?>'><?php echo $ini_array['invoice.contact.email'];?></a></dt>
			<dt>Registered in England &amp; Wales | No.<?php echo $ini_array['invoice.tenant.registration'];?><c:out value="${registration}"/></dt>
		</section>
	  </div>
	</div>
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
  	url: instanceurl_o + '/getmyparcel/invoice/'+url.searchParams.get("id"),
    error: function (jqXHR, textStatus, errorThrown) {
        logDebugMsg('==>> Error in calling url ::' + instanceurl_o + '/getmyparcel/'+url.searchParams.get("id")  + ' , error :: '+jqXHR + '|' + textStatus + '|' + errorThrown);
    },
    success: function (data) {
    	var d = data.order;
    	if(d){
		sessionStorage.setItem("orderid",d.id);
		$("#orderno").text(d.id);
    	$("#quotedtotal").text(d.totalPayableAmountForOrderWithoutVat);
		$("#quotedtotalfinal").text(d.totalPayableAmountForOrderWithoutVat);
		$("#quotedfinal").text(d.totalPayableAmountForOrderWithoutVat);
    	$("#appliedvat").text(d.totalPayableVatForOrder);
		$("#appliedvatfinal").text(d.totalPayableVatForOrder);
		$("#vatfinal").text(d.totalPayableVatForOrder);
		 var orderPrices=d.orderPrice;
		 for (var i in orderPrices) {          	
		if(orderPrices[i].type=='DISCOUNT')
		{  $("#applieddiscount").text('£ ' + orderPrices[i].amount);
		 break;
		}
	 }
		//$("#applieddiscount").text(d.appliedDiscount);
		$("#appliedtotal").text(d.totalPayableAmountForOrder);
		$("#appliedtotalfinal").text(d.totalPayableAmountForOrder);
		$("#totalfinal").text(d.totalPayableAmountForOrder);
		$("#totalfinalvalue").text(d.totalPayableAmountForOrder);
		$("#noofparcel").text(d.numOfParcel);
		$("#parcelvalue").text(d.parcelvalue);
		if(d.parcelcontent.length > 30){
			$("#parcelcontent").text(d.parcelcontent.substring(1, 30));
		}else{
			$("#parcelcontent").text(d.parcelcontent);
		}		
		$("#productVatPercent").text(d.totalVatPercent);
		if(d.unit=='kg_cm'){
		$("#consideredweight").text(d.consideredWeight +" Kgs");
		}else{
		$("#consideredweight").text(d.consideredWeightLb + " Lbs");
		}
		$("#coldate").text(d.collectionDateAsPresentableDate);
		$("#collectiondateactual").val(d.collectionDateAsPresentableDate);
		$("#productactualname").text(d.product.marketingName);
		$("#TrackingId").text(d.trackingId);
		$("#colcontactName").text(d.collAddress.contactName);
		$("#colphoneNumber").text(d.collAddress.phoneNumber);
		$("#coladdressLine1").text(d.collAddress.addressLine1);
		if(d.collAddress.addressLine2==''){
				$("#coladdressLine2").hide();
		}else{
		$("#coladdressLine2").html('<br/>'+ d.collAddress.addressLine2);
		}
		if(d.collAddress.addressLine3==''){
			$("#coladdressLine3").hide();
		}else{
		$("#coladdressLine3").html(','+d.collAddress.addressLine3);
		}
		$("#colcity").text(d.collAddress.city);
		$("#colpostCode").text(d.collAddress.postCode);
		$("#colcountry").text(d.collAddress.country);
		$("#collectioncountry").text(d.collAddress.country);
		$("#deliverycountry").text(d.deliveryAddress.country);

        logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/getmyparcel/invoice/'+url.searchParams.get("id")  +  ' , data :: '+data);
    	}
		$("#invoiceno").text(data.invoiceNumber);
		$("#invoicestartdate").text(data.invoicestartdate);
		$("#invoiceenddate").text(data.invoiceenddate);
		$("#paybydate").text(data.paybydate);
		$("#currentDate").text(data.paybydate);
		$("#paydate").text(data.paybydate);
		
		
		  if(d.paymentcompleted=='Y')
		{
			$("#paystatus").text("Completed");
			//$("#makepayment").hide();
		}
	   else{	
	   $("#paystatus").text("Pending");
			//$("#makepayment").show();
		}
    }
        
});

	});
   $(".printMeButton").attr( "ef", "javascript:void( 0 )" ).click( function(){
			// Print the DIV.
			$( ".printable" ).print();
			// Cancel click event.
			return( false );
		});
		var paymentGatewayProvider = getPaymentProvider();
var paymentProvider = paymentGatewayProvider.provider;
function getPaymentProvider() {
    var succeed = 0.0;
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + "/getmyparcel/paymentProvider",
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
		function makepayment(){

	 var d = new Date();
     var month = '' + (d.getMonth() + 1);
     var day = '' + d.getDate();
     var year = d.getFullYear();
	 var orderid=url.searchParams.get("id");
	 var nextPage="";
	//window.location="/getalias.gmp?oid="+'${order.id}';
	$.ajax({
    url: instanceurl_o + "/getmyparcel/getalias/" + orderid,
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
    //sessionStorage.setItem("flow",data.flow);
    var url = new URL(feurl + "/" + nextPage + ".php");
    url.searchParams.append('id', orderid);
    url.searchParams.append('flow', data.flow);
    window.location.href = url
}

});
	
}
 </script>
	
   </body>
   </html>