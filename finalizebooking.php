<!DOCTYPE html>
<html lang="en">
  <head>
   <title>Booking Completed | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
		<?php include 'includes/headerAx.php' ?>
		<?php  include 'includes/include_chat_box.php' ?>
		<?php  include 'includes/google_tag_manager_head.php' ?>
		<?php  include 'auth_mandate.php' ?>
		
		<?php
			// User comes here only after the order object is created in DB
			// immaterial of payment is successful or not
			// Hence this Cookie / key doesnt need to be there in the cache / cookie
			// this can be removed. 
			if (isset($_COOKIE['GMPSESSID'])) {
				unset($_COOKIE['GMPSESSID']);
				//setcookie('GMPSESSID', '', time() - 3600, '/'); // empty value and old timestamp
			}
		?>
        </head>
     <body>
    <!-- added -->   
 <!-- added -->   
		<?php include 'includes/google_tag_manager_body.php' ?>
  		<?php include 'includes/menuAx.php' ?>
        </header>	
		    	
	
    
    <!-- Main Content -->
  <main class="padded20">
      	<div class="bg-clr02">
	        <div class="container">
	          <ol class="breadcrumb">
	         <?php
		  	if ( $_SESSION["usertype"] == "B") {	?>	
			<li><a href="/businesshome.php">Home</a></li>
				<?php } 
			else {?>
			 <li><a href="/index.php">Home</a></li>
			 <?php }?>
				<li  class="active">Booking Completed</a></li>
	          </ol>
	        </div>
      	</div>
    <div class="container">
		<div class="box-intro text-center">
			<h1 class="heading">Order Confirmation</h1>
       </div>
        <div id="successMsg"></div>
        
        <div class="alert alert-danger" id = "payerror" name = "payerror" style = "display:none">
	
				  Your Payment has been declined. This could be due to a System Error (or) due to Incorrect card information. Your Order will not be processed until the Payment has been confirmed.
    Our Customer Service Executive will communicate with you, either via email (or) via phone within the next 24 hours.
    Kindly provide the right information for processing the payment and for continuing with the order.
   
    </div>
	  <div class="alert alert-info" id = "cancelPay" name = "cancelPay" style = "display:block">
	
Order has been Created without Payment. Order wil not be processed until payment has been completed. Please visit <button type="button" id="viewOrder" name="viewOrder"
								class="btn btn-danger" >
								  <i class='fa fa-hand-o-right' aria-hidden='true'></i> Your Orders 
							</button> to make payment.
    </div>
        
  	   <div class="row">
      	<section class="col-sm-12">
		  		<div class="row">
					<section class="col-sm-12" style="background-color:#F7F8E0; padding:20px;">
						<div class="margin20-top">
						 <div id="orderCreate" style = "display:block" >  <h3>Your Order has been Created. </h3>  </div>
						  <div id="orderView" style = "display:block" >  <h3>Your Order payment status is updated. </h3>  </div>
						  <div id="invoiceView" style = "display:block" >  <h3>Your Invoice payment status is updated. </h3>  </div>
						 <div id="orderInfo" style = "display:block" >   <p>You should receive an email about the order confirmation in another 24 hours. If you do not receive this email or have any questions on this order please feel free to contact us at  
    		
    		
    		
<a href="mailto:info@getmyparcel.com"> <i class="fa fa-envelope-o" aria-hidden="true"></i> info@getmyparcel.com </a>

    		
    		
    		</p> </div>
						</div>  
						<div class="margin20-top" id="orderNumber">
						  <h4>Your order number is # 
						  
						  
						  </h4>
						  <p class="margin20-top">Please remember to print a copy of this receipt. Thank you for placing an order at <a href="https://www.getmyparcel.com">www.getmyparcel.com</a> !</p>
						</div>
						<div class="margin20-top">
						 
						 
						 <!--<p><button type="button" onclick="window.location='/businesshome.php';" class="btn btn-primary">Book another parcel <span class="badge"><i class="fa fa-angle-double-right"></i></span></button></p>-->
						  <?php
		  	if ( $_SESSION["usertype"] == "B") {	?>	
			 <p><button type="button" onclick="window.location='/businesshome.php';" class="btn btn-primary">Book another parcel <span class="badge"><i class="fa fa-angle-double-right"></i></span></button></p>
				<?php } 
			else {?>
			 <p><button type="button" onclick="window.location='/index.php';" class="btn btn-primary">Book another parcel <span class="badge"><i class="fa fa-angle-double-right"></i></span></button></p>
			 <?php }?>
						  
						 
                          
						  
						</div>
						<div class="margin20-top">						
						<div class="small">
							<p><b>Did you use a Promo code?</b></p>
							<p>We do come up with different sales promotions for users from time to time. Do use these to get good discounts on rates for your couriers.</p>
							<br>	
							<p><b>Want to track your order?</b></p>
							<p>Visit Order Tracking at: <a href="https://www.getmyparcel.com">www.getmyparcel.com</a>/OrderTracking or click Order Tracking from the menu of our Homepage. Your tracking information will usually be emailed to you when your order ships, usually within 2 business days, by your service provider. However, be aware that this changes between different service providers.</p>
							<br>	
							<p>This confirmation reflects receipt of your order only. If an service becomes unavailable, you will be notified by email within 48 hours. Do note that Delivery times for international destinations may sometimes vary from that advertised due to logistical reasons. Refer our <a href="gmptandc.gmp">detailed terms and conditions</a> for more infomation on this.</p>
							</br>
							<p><b>Questions?</b></p>
							<p>If you have any questions, please contact us at  
    		
    		
    		
<a href="mailto:info@getmyparcel.com"> <i class="fa fa-envelope-o" aria-hidden="true"></i> info@getmyparcel.com </a>

    		
    		
    		. To help us provide the best service, please include your Order Number and billing address on all correspondence. </p>
</br></br>
							Thanks again for your order ! 
</br></br>
                            The GetMyParcel Team
</br>
<a href="http://www.getmyparcel.com/">http://www.getmyparcel.com/</a>
						</div>
						</div>
					</section>
					
				</div>
		</section>
	  </div>
	</div>
  </main>
  <!-- Main Content -->

   
	
 
 <!-- Footer -->
	  <?php  include 'includes/footerAx.php' ?>
	<script type="text/javascript">
  


</script> 

<script type="text/javascript">
//var orderid=sessionStorage.getItem("orderid");
var orderid;
$(document).ready(function () {
	setTimeout(function() {
  		//var status = sessionStorage.getItem("status");
		//var msg=sessionStorage.getItem("msg");
		var url_string = window.location.href
       var url = new URL(url_string);
	var status=url.searchParams.get("status");
	orderid=url.searchParams.get("id");
	var msg="Great! your order has been placed successfully";
		
	
	 	if(status == '1'){
			$("#cancelPay").hide();
	 		$("#payerror").hide();
	 		showSuccessDiv('<div class="alert alert-success">'+ msg +' </div>');
	 	}if(status == '0'){
	 		//$("#payerror").show();
	 		//showErrorDiv('<div class="alert alert-danger">'+ msg + '</div>');
	 	}
	}, 10)
});

	$(function(){
		$("#invoiceView").hide();
		$("#confirm_div").hide();
		$("#cost_div").removeClass('col-sm-4');
		$("#cost_div").addClass('col-sm-12');
		var url_string = window.location.href
        var url = new URL(url_string);
		var orderid=url.searchParams.get("id"); 
		$("#orderNumber").html('<h4>Your order number is # '+orderid+' </h4>');
		
		var flow=url.searchParams.get("flow"); 
		if(flow=='view')
		{
			$("#orderCreate").hide();
			$("#orderView").show();
		}else if(flow=='create')
		{
			$("#orderView").hide();
			$("#orderCreate").show();	
		}
		else if(flow=='cancel')
		{
			$("#payerror").hide();
			$("#orderView").hide();
			$("#orderCreate").hide();	
			$("#orderInfo").hide();	
			$("#orderCreate").show();
		}else if(flow=='invoice')
		{
			$("#orderView").hide();
			$("#orderCreate").hide();	
			$("#orderInfo").hide();	
			$("#invoiceView").show();	
			$("#orderNumber").hide();
			$("#cancelPay").hide();
	 		$("#payerror").hide();
		}else{
		$("#cancelPay").hide();	
		$("#orderView").hide();
		}
	});
	

	
	$('#viewOrder').bind('click', function(ev) {
   // window.location.href = "vieworder.php?id="+orderid;
   window.location.href = "u_orderlist.php";
});
</script>
</body>
</html>
