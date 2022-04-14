
<!DOCTYPE html>
<html lang="en">
  <head>
 
	<title>Order Confirmation | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
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
 		  <div class="form-back-btn visible-xs">
            	<a id="btnInstantQuote" class="btn btn-default" href="/collectaddress.php">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                    Back
              </a>
            </div>
      	<div class="bg-clr02">
	        <div class="container">
	          <ol class="breadcrumb custom-non">
	           <?php
		  	if ( $_SESSION["usertype"] == "B") {	?>	
			<li><a href="/businesshome.php">Home</a></li>
				<?php } 
			else {?>
			 <li><a href="/index.php">Home</a></li>
			 <?php }?>
				<li><a href="/products.php">Products</a></li>
				<li><a href="/collectaddress.php">Collect Address</a></li>
	            <li class="active">Order Confirmation</li>
	          </ol>
	        </div>
      	</div>
      	
    	<div class="container">
			<div class="box-intro text-center">
	          						
					
								
						<h1 class="heading">Confirm your Order Details </h1>	
					
					
				<table class="table addessTable custom-non"> 
	          	<thead>
	          		<tr>
		          		<th>Collection From : <span id="sourcecountry"></span></th>
		          		<th>Delivery To : <span id="destinationcountry"></span></th>
		          		
		          		<th>
		          		</tr>
	          	</thead>
	           </table>
	        </div>
        
      	<div class="row">
        <section class="col-sm-12">
		  <div class="form-back-btn visible-xs">
            	<a id="btnInstantQuote" class="btn btn-default back-btn" href="/collectaddress.php">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                    Back
              </a>
            </div>		
				
				<section class="custom-tab custom-non">
          		<div class="board">
		        <div class="board-inner ">
		        <div class="liner"></div>
		        <div class="container">
		        <ul class="nav nav-tabs" id="myTab">

<!--  -->

		<!-- <td> <div class="completed-step"><a href="/xhome.gmp"><span>1</span>Select Product</a></div></td> -->
		
		    <li class="active">
			  <a href="/xhome.gmp" data-toggle="tab" title="welcome">
			    <span class="round-tabs one">
			      <i class="glyphicon glyphicon-home"></i>
			    </span>
			  </a> <br/>
			  <span>Select Product</span>
			</li>
	    		       <li class="active">
		                <a href="#profile" data-toggle="tab" title="profile">
		                  <span class="round-tabs two">
		                    <i class="glyphicon glyphicon-user"></i>
		                  </span>
		                </a> <br/>
		                <span>Address Details </span>
		              </li>
		              <li class="active">
		                <a href="#messages" data-toggle="tab" title="Order confirmation">
		                  <span class="round-tabs three">
		                    <i class="glyphicon glyphicon-gift"></i>
		                  </span> </a> <br/>
		                <span>Order Confirmation </span>
		              </li>
		              <li>
		                <a href="#messages" data-toggle="tab" title="Order payment">
		                  <span class="round-tabs three">
		                    <i class="glyphicon glyphicon-gift"></i>
		                  </span> </a> <br/>
		                <span>Order Payment </span>
		              </li>
		              <li>
		                <a href="#messages" data-toggle="tab" title="Booking confirmation">
		                  <span class="round-tabs three">
		                    <i class="glyphicon glyphicon-gift"></i>
		                  </span> </a> <br/>
		                <span>Booking confirmation</span>
		              </li>
		
		            </ul>
		          </div>
		        </div>
		    </div>
		</section>
		
              <div class="clearfix"></div>
        			<br/>
              
              <div class="row">
          		<section class="col-sm-12" style="background-color:#F7F8E0; padding:20px;">
					<div class="col-sm-4">
					
						<h3>Sender Address </h3>
						
						 <div id="consignorDiv"></div>
						
						<br/>
						<br/>
						
						<h3>Parcel Declarations </h3>
						 <p>Parcels</p>
                        <div id="parcelInfoDiv"></div>
							<p><b>Considered Weight:</b> <span id="consideredWeight"></span></p>	
		
                         
 
						 <div class="col-sm-6" >
	                         <div class="help-tooltip" style="text-align:left">
	                            <a class="question" href="#">
	                              <span aria-hidden="true" class="glyphicon glyphicon glyphicon-hand-right"></span>
	                            </a>
	                            <div class="help-tooltip-hover">
	                              <span aria-hidden="true" class="glyphicon glyphicon-triangle-top"></span>
	                              <p>
	                                Considered weight : This is a calculated value. As your parcel / courier may contain objects of any weight, we consider the weight of parcel by calculating a "volumetric weight" of the parcel based on its size and dimensions (or) the actual weight, whichever is higher.
	                              </p>
	                              <p> Refer our Help pages for more information on this calculation.
	                              </p>
	                              <p>
	                                <b>Note:</b> If the actual weight of the parcel (weighed after collection) is more than the declared weight in order, additional amounts could be charged. Do refer to our Weight Difference <a href="#" >Terms and Conditions </a>for more information.
	                              </p>
	                            </div>
	                            </div>
                         
                         
						 
							
						</div>
					</div>

                <!--    <div class="col-sm-4">
                    
                        <h3>Notify Party Address </h3>
                         <div id="partyAddressDiv"></div>
                        
                    </div>-->

 				<div class="col-sm-4">
				<h3>Receiver Address </h3>
				 
					<div id="consigneeAddressDiv"></div>
					<br/>
						<br/>
					 
				<h3>Involved Dates </h3>
			 <p><b>Preferred Collection Date :
              </b> <span id="prefColDate"></span> </p>
           <p><b>Estimated Delivery Date :</b> 
		   <span id="estdeldate"></span> </p>
				
				</div>
				
					<div class="col-sm-4">
					 <h3>Payment Terms </h3>
		              <div class="well autowidth">
			            <dl class="dl-horizontal margin0">
			
			                        <dt>Applied Cost</dt>
			                                <dd > <span id="appliedCost"></span></dd>
											 <dt>Insurance (inc. VAT)</dt>
			                        
			                             
			                            
			                                <dd > <span id="insuranceCharges"></span></dd>
		
			                       <hr> 
		
			                       <hr> 
			                        <dt>Applicable VAT @ 0.0 % (+)</dt>
			                                <dd><span id="appliedVat"></span></dd>
			                     
			                      <dt>Discount (-)</dt>
			                              <dd> <span id="appliedDiscount"></span></dd>
			                    
			                      <dt class="_discountDetailTxt">Applied Discount Detail</dt>
			                      <dd class="_discountDetailTxt"><span id="discountdetail"></span></dd>

			                      
								   <dt class="surcharge">Surcharge</dt>
			                      <dd class="surcharge"><span id="surcharge"></span></dd>

			                   
			                      <script type="text/javascript">
			                        $('._discountDetailTxt').hide();
			                      </script>
			                      <hr>
			                      <dt>Total *</dt>
			                      <dd> <span id="producttotal">
			                        </span></dd>
									 <dt class="totalGBP">Total(GBP)*</dt>
			                      <dd class="totalGBP"><span id="totalcostgbp"></span></dd>
			                    </dl>
			                
			                
			            
			            </dl>
			        </div>
				  </div>
				  
				
			</section>
		 </div>
	  <!-- Product Details below -->
        <div class="clearfix"></div>
        <br/>

        <div class="row">
          <section class="col-sm-8">
             <h3>
                	<span id="productname"></span>
                	<span>
                		<!--<a target="_blank" href="/productsinfo.gmp?id=3">
                			<button class="btn btn-default btn-sm border-radius" type="button">i</button>
                		</a>-->
                	</span>
                </h3>
				<div class="well">
                  <p><b>Transit Time</b>: <span id="transittime"></span> Days</p>
                  <div id="expandingDescription"></div><!-- Product Description -->

				  
				  <p class="expand" id="showDescription"style="text-align:right;width:100%"><i class="fa fa-arrow-down"></i> <i>Click on text to Read More</i><i class="fa fa-arrow-down"></i></p>


				  <br/>
				  <p><b>Special Instructions</b>:
				  <div id="expandingSplInstructions"></div><!-- Special Instructions -->

				  
				  <p class="expand" id="showSplInstructions" style="text-align:right;width:100%"><i class="fa fa-arrow-down"></i> <i>Click on text to Read More</i><i class="fa fa-arrow-down"></i></p>
				  
				  <br/>
				</div>
          </section>
 
        <section class="col-sm-4"  style="background-color:#F2FBEF; padding:20px;">
          <div class="row">
           <form id="order"  action="submit.php" method="post">
           	<!-- <div class="col-sm-12"></div> -->
           <!-- end class sm-6 -->
			
			
			<div class="col-sm-12 form-group">	
            <div id="errMsg" class="errorMsg" style="display: none;"></div>
			<div id="term_condition">
					<h3>Terms and Conditions</h3>
	                 <div class="checkbox">
	                   <label>
					
	                     
	                      <input type="checkbox" name="agreedgmpconditions" id="gmptc" value="Y"  >
	                      I agree to&nbsp;<a href="/gmptandc.gmp" target="_blank"> Terms and conditions</a>
						  
					  
	                   </label>
					
	                 </div>
	                 <div class="checkbox">
	                   <label>
					
	                     
	                      <input type="checkbox" name="prohibiteditemslist" id="phbtc" value="Y"  >
	                      I agree to&nbsp;<a href="/prohibiteditemstandc.gmp" target="_blank">prohibited items terms and conditions</a>
						 
					 
	                   </label>
					
	                 </div>
				  
	                 <div class="checkbox">
	                   <label>
					
	                     
	                      <input type="checkbox" name="uninsureditemslist" id="uninstc" value="Y"  >
	                      I agree to&nbsp;<a href="/uninsuredtandc.gmp" target="_blank">un-insured items terms and conditions</a>
						
					
	                   </label>
	                 </div>   
	  				 <div class="checkbox">
	                   <label>
					
	                     
	                      <input type="checkbox" name="weightdifference" id="wtdifftc" value="Y"  >
	                      I agree to pay&nbsp;<a href="/wtdifferencetandc.gmp" target="_blank">the weight difference</a>
						
					
	                   </label>
	                 </div>
					 <hr>
					  <div class="checkbox">
	                   <label>
	                      <input type="checkbox" name="acceptAllTerms" id="acceptAllTerms" >
	                      I agree to ALL of the above Terms & Conditions
	                   </label>
	                 </div>
	                
	            </div>
            </div>
            
<!--             Enable/Disable Email sending  -->

             
            
            </form>
			</div> <!--  end row -->
		</section>
		 </div>
   </section>
					
			
            

           
			<div class="col-sm-12" >
			 	
			<div style="display: inline-block; margin-bottom: 20px; margin-top: 20px; width: 100%;">
				<span class="pull-left">
					<a id="btnInstantQuote" class="backbtn btn" href="/collectaddress.php"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a>
				</span>
				<span class="pull-right"><button type="button" id="confirmAndBook" class="btn btn-success">Confirm &amp; Proceed to Payment</button>
		            	 </span>
			</div> 
			</div>
          </div>
        
        <div class="col-sm-12">
          <div class="well" style="width: 100%;">
            * All rates are subject to Remote Area Surcharge and other Charges, depending upon the carrier. Once you raise the order, our customer service will let you know if there are any more charges based on your order. You will have an option to either continue with the order at that point in time after processing additional payment involved. Please refer to our <a href="/faq.gmp" target="_blank">FAQ's &gt; What is Remote Area Surcharge?</a> - to understand more about Remote area Surcharge and other charges that could be applicable.
          </div>
        </div>

		<div class="row">
            <div class="col-sm-12">
		  		<hr>
					<div class="clearfix"></div>
					<!-- <article class="col-sm-12">
					  <div class="border-radius-5 bg-white padding5 margin10-bottom margin10-top">
						<ul class="margin0 list-inline text-center pull-left">
						  <li><img src="/resources/images/cardbanners.jpg" alt="All supported Credit cards" class="img-responsive"/></li>
						</ul>
						<ul class="margin0 list-inline text-center pull-right">
						  <li>payments powered by <br><img src="/resources/images/worldpay.png" alt="Worldpay Logo" class="img-responsive"/></li>
						</ul>
						<div class="clearfix"></div>
					  </div>
					</article> -->
			</div>
		</div>
      </div>
  </main>
  
  <!-- Footer -->
    
    
		
 
 <!-- Footer -->
	  <?php  include 'includes/footerAx.php' ?>
	<!-- Footer - End -->
  <!-- Main Content -->
<script type="text/javascript">

var beurl ="<?php echo  $config['INSTANCEURL'];?>";
var feurl ="<?php echo  $config['FRONTENDURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui/getmyparcel";
var instanceurl="<?php echo $config['INSTANCEURL'];?>";
var paymentProvider;

//var paymentGatewayProvider = getPaymentProvider();
//var paymentProvider = paymentGatewayProvider.provider;
$(document).ready(function() {
   var paymentGatewayProvider = getPaymentProvider();
    paymentProvider = paymentGatewayProvider.provider;
	console.log(paymentProvider);
});
function getPaymentProvider() {
    var succeed = 0.0;
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + "/paymentProvider",
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("==>Error thrown :" + errorThrown);
        },
        success: function(data) {

            var d = data;
            if (d) {
                succeed = d;

            }
        },

    });
    return succeed;
}

var unitPreference = '<?php if(isset($_COOKIE["user_preference"])){ echo $_COOKIE["user_preference"]; } ?>';
if(unitPreference=='lb_in'){
		var weightUnit="lbs";
		var unit="in";
}else{
	var weightUnit="kgs";
	var unit="cm";
}
	var currency= '<?php if(isset($_COOKIE["preferred_currency"])){ echo $_COOKIE["preferred_currency"]; } ?>';
	 var currecyCode="GBP";
	var exchangeRate=1;
	var currencySymbol="£";
if(currency =="GBP"){
	 currecyCode="GBP";
	 exchangeRate=1;
	 currencySymbol="£";
}else{
	getCurrency();
}
	function getCurrency(){
			$.ajax({
		type: 'GET',
		dataType: 'json',
		url:  instanceurl+"/api/v1/ui/currency/"+currency,
			success: function (d) {
			if(d!=null){
		 currecyCode=d.currencyCode;
		 exchangeRate=d.exchangeRate;
		 currencySymbol=d.currencySymbol;
			}
			},
			error: function(e){
				logDebugMsg("Exception While loading product list " + e);
			}
		})
	}
	var creditApplicable="N";
	var minNumberOfDaysToAdd = "";
	var maxNumberOfDaysToAdd = "";
    $(function () {
		//setup an array of AJAX options,
		//each object will specify information for a single AJAX request
		var ajaxes  = [
		{
		url: instanceurl_o + "/user/current",
		type:"GET",
		dataType: 'json',
		callback: function (data) {
			if(data){
			  if(data.isCreditAppplicable=='Y'){
		   $('#confirmAndBook').text("Confirm Order");
			creditApplicable='Y';
			  } 
	     	}
		 }
		},
		{
		 type: 'GET',
        dataType: 'json',
  	    url: instanceurl_o + '/order/details', 
		
		 callback: function (d) {
						if(d){
						$("#appliedVat").html(currencySymbol +d.appliedVat);
    	$("#appliedCost").html(currencySymbol +d.appliedTotalAmount* exchangeRate);
    	$("#appliedTotalAmount").html(currencySymbol+d.appliedTotalAmount* exchangeRate);
		if(unitPreference=='kg_cm'){
    	$("#consideredWeight").text(d.consideredWeight +" kgs");
		}else{
		$("#consideredWeight").text(d.consideredWeightLb + " lbs");
		}
    	//$("#prefColDate").text(d.collectionDate);
         $("#insuranceCharges").html(currencySymbol+ d.insuranceAmount* exchangeRate);
    	$("#consignorDiv").append('<p><b>Contact Name :</b> '+d.collAddress.contactName+'</p><p><b>Phone :</b> '+d.collAddress.phoneNumber+'</p><p> '+d.collAddress.addressLine1+'</p><p> '+d.collAddress.addressLine2+'</p><p> '+d.collAddress.addressLine3+'</p><p>'+d.collAddress.city+'</p><p>Postal Code: '+d.collAddress.postCode+'</p><p>'+d.collAddress.country+'</p>');
    	//$("#partyAddressDiv").append('<p><b>Contact Name :</b> '+d.partyAddress.contactName+'</p><p><b>Phone :</b> '+d.partyAddress.phoneNumber+'</p><p> '+d.partyAddress.addressLine1+'</p><p> '+d.partyAddress.addressLine2+'</p><p> '+d.partyAddress.addressLine3+'</p><p>'+d.partyAddress.county+'</p><p>Postal Code: '+d.partyAddress.postCode+'</p><p>'+d.partyAddress.country+'</p>');
    	$("#consigneeAddressDiv").append('<p><b>Contact Name :</b> '+d.deliveryAddress.contactName+'</p><p><b>Phone :</b> '+d.deliveryAddress.phoneNumber+'</p><p> '+d.deliveryAddress.addressLine1+'</p><p> '+d.deliveryAddress.addressLine2+'</p><p> '+d.deliveryAddress.addressLine3+'</p><p>'+d.deliveryAddress.city+'</p><p>Postal Code: '+d.deliveryAddress.postCode+'</p><p>'+d.deliveryAddress.country+'</p>');
    	$("#appliedCost").html(currencySymbol+d.appliedCost*exchangeRate);
    	$("#appliedVat").html(currencySymbol + d.appliedVat);
    	$("#appliedDiscount").html(currencySymbol+ d.appliedDiscount*exchangeRate);
    	$("#discountdetail").html(currencySymbol+d.appliedDiscountDetail*exchangeRate);
    	$("#producttotal").html(currencySymbol+ d.appliedTotalAmount*exchangeRate);		
		$("#productname").text(d.product.marketingName);
		$("#transittime").text(d.product.transitTimeMin);
		$("#expandingDescription").html(d.product.description);
		$("#expandingSplInstructions").html(d.product.specialinstructions);
		$("#sourcecountry").html(d.sourceCountryName);
		$("#destinationcountry").html(d.destinationCountryName);
		 minNumberOfDaysToAdd = parseInt(d.product.transitTimeMin);
		 maxNumberOfDaysToAdd=parseInt(d.product.transitTimeMax);
		 calculatedeliverydate(d.collectionDate);
		   if(d.residentialSurcharge == "0.0"){		
	        $('.surcharge').hide();
		 }
		 else{
			 $("#surcharge").text("£" + d.residentialSurcharge);
		 }
		 if(currency=="GBP"){
			  $('.totalGBP').hide();
		 }else{
			 $("#totalcostgbp").text("£" + d.appliedTotalAmount); 
		 }
    	var count =0 ;
    	 $.each(d.parcelInfoList, function (key, entry) {
				var q=entry.quantity;
				 if(unitPreference=='kg_cm'){
					var l = entry.length;
					var dw = entry.declaredWeight;
					var h = entry.height;
					var l = entry.length;
					var w = entry.width;
					}
					else{
					var l = entry.lengthInches;
					var dw = entry.declaredWeightLbs;
					var h = entry.heightInches;
					var l = entry.lengthInches;
					var w = entry.widthInches;
					  }
    	 	$("#parcelInfoDiv").append('<p>'+l+' X '+w+'  X '+h+' ('+q+' Quantity) Decalred Weight :  '+dw+' '+weightUnit+' </p>');
    	 	count++;
        })
        console.log('==>> Success in calling url ::' + instanceurl_o + '/order/details'  + ' , data :: '+data);
    	}
		},
		callbackError : function (jqXHR, textStatus, errorThrown) { 
						// logging happens anyways
					}
		
		}
		
		],
		current = 0;

//declare your function to run AJAX requests
		function do_ajax() {

			//check to make sure there are more requests to make
			if (current < ajaxes.length) {

				//make the AJAX request with the given info from the array of objects
				$.ajax({
					url      : ajaxes[current].url,
					type	 : ajaxes[current].type,
					dataType : ajaxes[current].dataType,
					success  : function (serverResponse) {
						//once a successful response has been received,
						//no HTTP error or timeout reached,
						//run the callback for this request
						ajaxes[current].callback(serverResponse);
					},
					error 	: function (jqXHR, textStatus, errorThrown) {
						 console.log('==>> Error in calling url ::' + ajaxes[current].url + ' , error :: '+jqXHR + '|' + textStatus + '|' + errorThrown);
						//call the respective error callback
						ajaxes[current].callbackError(jqXHR, textStatus, errorThrown);
					},
					complete : function () {
						//increment the `current` counter
						//and recursively call our do_ajax() function again.
						current++;
						do_ajax();
						//note that the "success" callback will fire
						//before the "complete" callback
					}
				});
			}
		}

		//run the AJAX function for the first time once `document.ready` fires
		do_ajax();
	});

	$(function(){
		$("#confirm_div").hide();
		$("#cost_div").removeClass('col-sm-4');
		$("#cost_div").addClass('col-sm-12');
		
	});


	function cancelOrder(){
		if(confirm("Do you really want to cancel this order ? ")){
			window.top.location = "/cancelorder.gmp";
		}
	}	
	
	$('#acceptAllTerms').bind('click',function(){
		// one click agree all
		$('#gmptc').prop( 'checked', true );
		$('#phbtc').prop( 'checked', true );
		$('#uninstc').prop( 'checked', true );
		$('#wtdifftc').prop( 'checked', true );
		
		
		
	});

$("#showDescription").on('click',function(){

	var divHeight = $("#expandingDescription").height();
	if(divHeight > 70) {
		$("#expandingDescription").animate({height:70},20);
	} else {
		var autoheight1 = $('#expandingDescription').css('height', 'auto').height();
		$("#expandingDescription").animate({height:autoheight1},20);
	}
});
$("#showSplInstructions").on('click',function(){
	
	var divHeight = $("#expandingSplInstructions").height();
	if(divHeight > 70) {
		$("#expandingSplInstructions").animate({height:70},20);
	} else {
		var autoheight1 = $('#expandingSplInstructions').css('height', 'auto').height();
		$("#expandingSplInstructions").animate({height:autoheight1},20);
	}
});

function emailstatus(){
	
	var emailstate =  $("#email").val();
	console.log(emailstate);
	
}

$("#confirmAndBook").click(function(){

	/* var list = $("select[id^='parceltype-dropdown']");
	console.log(list.length); */
		var status = true;
		if (status) status = validateIfChecked('#gmptc','You must accept "Standard Terms and conditions" to make this booking',true);
		if (status) status = validateIfChecked('#phbtc','You must accept "Prohibited items terms and conditions" to make this booking',true);
		if (status) status = validateIfChecked('#uninstc','You must accept "Uninsured Items terms and conditions" to make this booking',true);
		if (status) status = validateIfChecked('#wtdifftc','You must accept out "Weight difference terms and conditions" to make this booking',true);
		
		if (!status) return false;
		
		var $this = $(this);
		$this.toggleClass('btn btn-success');
		if($this.hasClass('btn btn-success')){
			$this.text('Confirm & Proceed to Payment');			
		} else {
			$this.toggleClass('btn btn-success');
			$this.text('Please wait, processing and going to Next Page ...');
			$('#confirmAndBook').prop('disabled', true);
		}

	var jsondata = {
		  	"status": "CNF",
		     "prohibiteditemslist": $("#phbtc").val(),
		      "uninsureditemslist": $("#uninstc").val(),
		      "agreedgmpconditions": $("#gmptc").val(),
		  		"weightdifference" : $("#wtdifftc").val(),
				"preferredCurrency":currency
		    }
	var nextPage="";
	$.ajax({
		url: instanceurl_o + "/order/confirm",
		type:"POST",
		data: JSON.stringify(jsondata),
		success:function(data)
		{	
			  var d = JSON.parse(data);
			   console.log(d);
		 if(creditApplicable=='Y'){
			 nextPage="finalizebooking"; 
		 }
		
		 else if(d.size==0){
			
			 if(paymentProvider=='BARCLAYS')
			 {nextPage="paymentredirect";}
		      if(paymentProvider=='STRIPE')
			 {nextPage="pay"; 
			 }
		 }
		 else {
			  if(paymentProvider=='BARCLAYS')
			 {nextPage="barclayspaymentredirect";}
		      if(paymentProvider=='STRIPE')
			 { nextPage="stripeRedirect";}
		 }
		  console.log(d.nextPage);
		  var url=new URL(feurl + "/" + nextPage + ".php");
		   if(creditApplicable=='N'){
		      if(paymentProvider=='STRIPE') {
		  url.searchParams.append('id', d.orderid);
		  url.searchParams.append('aid', d.orderactivationid);
			  url.searchParams.append('flow', d.flow); 
			   url.searchParams.append('uid', d.uid); 
		   } }else{
			     url.searchParams.append('id', d.orderid);
		   }
			 if(paymentProvider=='BARCLAYS')
			  {
				  url.searchParams.append('id', d.orderid);
			  }
			
		 window.location.href =url
		}
	});
	 }); 
	 
   function calculatedeliverydate(collectionDate){
   var someDate = new Date(collectionDate);
	someDate.setDate(someDate.getDate() + minNumberOfDaysToAdd); 
	//$('#estdeldate').html("between "+someDate.getFullYear()+"-"+(someDate.getMonth()+1)+"-"+someDate.getDate());
	$('#estdeldate').html("between "+someDate.getDate()+"-"+(someDate.getMonth()+1)+"-"+someDate.getFullYear());
	someDate = new Date(collectionDate);
	someDate.setDate(someDate.getDate() + maxNumberOfDaysToAdd); 
	//$('#estdeldate').html($('#estdeldate').html() + " and " + someDate.getFullYear()+"-"+(someDate.getMonth()+1)+"-"+someDate.getDate());
	$('#estdeldate').html($('#estdeldate').html() + " and " + someDate.getDate()+"-"+(someDate.getMonth()+1)+"-"+someDate.getFullYear());

	var collectionDate = new Date(collectionDate);
	$('#prefColDate').html($('#prefColDate').html() + collectionDate.getDate()+"-"+(collectionDate.getMonth()+1)+"-"+collectionDate.getFullYear());
	
	
	}


</script>
</body>
</html>
