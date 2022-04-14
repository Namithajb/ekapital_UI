<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Make Payment for Order| UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
      <?php include 'includes/headerAx.php' ?>
      <?php include( 'config.php'); ?>
      <?php include 'includes/include_chat_box.php' ?>
      <?php include 'includes/google_tag_manager_head.php' ?>
	  <?php
		$cdn=$config['CDNURL'];
		?>
      <style>
         input[type="radio"], input[type="checkbox"] {
         margin: 10px;
         margin-top: 1px \9;
         line-height: normal;
         }
         .addDiv{ padding: 10px ; }
         .required {
         color: red;
         }
         .p0{padding: 0;}
         .field{
         height: 35px;
         width: 100%;
         border: 1px solid ;
         flex: 0.5;
         padding: 5px;
         background: #c4c9e626;
         font-weight: 400;
         color: #dfdfe4;
         outline: none;
         cursor: text;
         }
         label {
         display: inline-block;
         max-width: 100%;
         margin-bottom: 5px;
         font-weight: bold;
         /*margin-left: 110px;*/
         }
         /*#cardholder-name{ margin-left: 100px;width: 157%;
         }*/
         #addLable{ margin-left: 1px;width: 157%;
         }
         .pr-0{padding-right: 0;}
         .pl-0{padding-left: 0;}
         .box-intro.text-center .heading {
         font-size: 30px;
         margin-top: 15px;
         margin-bottom: 50px;
         /*    margin-left: 150px;*/
         }
         .btn-success {
         color: #fff;
         background-color: #5CB85C;
         border-color: #4cae4c;
         margin-bottom: 10px;
         }
         .btn-warning {
         color: #fff;
         background-color: #c1172f;
         margin-bottom: 10px;
         }
         .shadowbox_wrap input{box-shadow: 2px 2px 10px #e2e2d2;
         border: 0;
         }
         .shadowbox_wrap .form-group{margin-bottom: 23px;}
         .form-group1 {
         margin-bottom: 15px;
         margin-left: 100px;
         }
         input[type="radio"], input[type="checkbox"] {
         margin: 10px;
         margin-top: 1px \9;
         line-height: normal;
         }
         .addDiv{ padding: 10px ; }
         #addTable{margin-top: 11px;}
         .highlightdiv{background: #ffffff;box-shadow: 2px 2px 10px #e2e2e2;}
         .required {
         color: red;
         }  
         /* The lblAddress */
         .chkClass {
         display: block;
         position: relative;
         padding-left: 35px;
         margin-bottom: 12px;
         cursor: pointer;
         font-size: inherit;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         }
         label {
         display: inline-block;
         max-width: 100%;
         margin-bottom: 5px;
         font-weight: inherit;
         }
         /* Hide the browser's default radio button */
         .chkClass input {
         position: absolute;
         opacity: 0;
         cursor: pointer;
         }
         /* Create a custom radio button */
         .checkmark1 {
         position: absolute;
         top: 0;
         left: 0;
         height: 10px;
         width: 10px;
         background-color: #eee;
         border-radius: 50%;
         }
         /* On mouse-over, add a grey background color */
         .chkClass:hover input ~ .checkmark1 {
         background-color: #ccc;
         }
         /* When the radio button is checked, add a blue background */
         .chkClass input:checked ~ .checkmark1 {
         background-color: rgb(200 231 247);
         }
         /* Create the indicator (the dot/circle - hidden when not checked) */
         .checkmark1:after {
         content: "";
         position: absolute;
         display: none;
         }
         /* Show the indicator (dot/circle) when checked */
         .chkClass input:checked ~ .checkmark:after {
         display: block;
         }
         /* Style the indicator (dot/circle) */
         .chkClass .checkmark1:after {
         top: 9px;
         left: 9px;
         width: 8px;
         height: 8px;
         border-radius: 50%;
         background: white;
         } 
         /* The lblAddress */
         .lblAddress {
         display: block;
         position: relative;
         padding-left: 35px;
         margin-bottom: 12px;
         cursor: pointer;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
         }
         /* Hide the browser's default radio button */
         .lblAddress input {
         position: absolute;
         opacity: 0;
         cursor: pointer;
         }
         /* Create a custom radio button */
         .checkmark {
         position: absolute;
         top: 0;
         left: 0;
         height: 20px;
         width: 20px;
         background-color:white;
         border-radius: 50%;
         }
         /* On mouse-over, add a grey background color */
         .lblAddress:hover input ~ .checkmark {
         background-color: #ccc;
         }
         /* When the radio button is checked, add a blue background */
         .lblAddress input:checked ~ .checkmark {
         background-color: #2196F3;
         }
         /* Create the indicator (the dot/circle - hidden when not checked) */
         .checkmark:after {
         content: "";
         position: absolute;
         display: none;
         }
         /* Show the indicator (dot/circle) when checked */
         .lblAddress input:checked ~ .checkmark:after {
         display: block;
         }
         /* Style the indicator (dot/circle) */
         .lblAddress .checkmark:after {
         top: 9px;
         left: 9px;
         width: 8px;
         height: 8px;
         border-radius: 50%;
         background: white;
         }
         .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
         border: 1px solid #1c94c4;
         background: #fff url(<?php echo $cdn;?>/css/images/ui-bg_glass_65_ffffff_1x400.png) 50% 50% repeat-x;
         font-weight: bold;
         color: #1c94c4;
         }
         .bAdd{
         height: 200px;
         }
      </style>
   </head>
   <body>
      <!-- added -->
      <?php include 'includes/google_tag_manager_body.php' ?>
      <?php include 'includes/menuAx.php' ?>
      </header>
      <body>
         <main class="padded20">
         <div class="bg-clr02">
            <?php
               if ( $_SESSION["logged_in"] == "Y") { ?>
            <div class="container" style="display:none ; " id="breadcrumb1" >
               <ol class="breadcrumb" >
                  <?php
                     if ( $_SESSION["usertype"] == "B") {      ?>
                  <li><a href="/businesshome.php">Home</a></li>
                  <?php }
                     else {?>
                  <li><a href="/index.php">Home</a></li>
                  <?php }?>
                  <li><a href="/products.php">Order</a></li>
                  <li class="active">Payment</li>
               </ol>
            </div>
            <?php } ?>
         </div>
         <div class="container">
            <div id="main pardetail">
               <div class="col-md-12 col-sm-12 col-xs-12  ">
                  <div class="col-md-8 col-sm-12 col-xs-12">
                     <div class="col-md-12 col-sm-12 col-xs-12 pardetail">
                        <div class="form-group">
                           <div class="alert alert-success" style="display:none" id="sucessMessage"></div>
                           <div class="alert alert-danger" style="display:none" id="errorMessage"></div>
                           <div   class = " alert alert-warning" id="validatePayment"  style="display:none ;text-align: center; ">
                           </div>
                        </div>
                        <div class="col-md-offset-1 col-md-10 col-sm-9 col-xs-12 shadowbox_wrap">
                           <div class="box-intro text-center">
                              <h3 class="heading">Make Payment</h3>
                           </div>
						  <div class="form-group">
											<span class="required">*</span>
											<label for="name" style="color:black;">Cardholders  Name</label>
											<div class="">
											<input type="text" name="userName" class="form-control nametxt" placeholder="Cardholders Name" autofocus="" id="cardholder-name">
											</div>
											</div>
											<div class="form-group">
                                         <label id="addLable" for="name" style="color:black;"><span class="required">*</span>Contact Number </label>
											<div class="">
                                          <input name="phoneNumber1" id="phoneNumber" class="form-control " type="text" placeholder="Phone Number" />
                                        </div>
                                        </div>
                                 <div>
						   
                              <span class="required">*</span>
                              <label>Please Select Billing Address</label>	  
                              <div id="accordion">
                                 <h3> Previous Addresses  </h3>
                                 <div class ="">
                                    <!-- <label id="preAddLable" class="container">Previous Address  -->
                                    <label class="lblAddress">
                                       Previous Addresses 
                                       <input type="radio" id="preaddress" name="selcaddresdel"   value="preaddress"  onmouseover="checkButton(this)"   onclick="preAddress()">
                                       <!--<span id="preAddLable">Previous Address</span> -->
                                       <span class="checkmark"></span>
                                    </label>
                                    <div id="preAdd"  >
                                       <table id="addTable">
                                          <tr id="1">
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                          </tr>
                                          <tr id="2">
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                          </tr>
                                          <tr id="3">
                                             <td></td>                                            
                                             <td></td>
                                             <td></td>
                                          </tr>
                                          <tr id="4">
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                          </tr>
                                          <tr id="5">
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                          </tr>
                                          <tr id="6">
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                          </tr>
                                          <tr id="7">
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                          </tr>
                                          <tr id="8">
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                          </tr>
                                          <tr id="9">
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                          </tr>
                                          <tr id="10">
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                          </tr>
                                       </table>
                                    </div>
                                 </div>
                                 <h3>Enter Address Manually</h3>
                                 <div class ="">
                                    <label class="lblAddress">Enter Address Manually
                                    <input type="radio" id="enterManuallyAddress"   name="selcaddresdel"  onmouseover="checkButton(this)"  value="eMaddress"  onclick="enterAddress()"  > 
                                    <span class="checkmark"></span>
                                    </label>
                                    <!--  <span>Enter Manually</span>  -->
                                    <div id="enterAddress" >
                                       <div class="addrebar entmanulydel showhideaddel" style="display: block; ;">
                                          <br>
                                          <div class="row">
                                             <div class=" col-md-12 col-sm-12 col-xs-12 form-group p0">
											
                                                <div class="col-md-12 col-sm-12 col-xs-12 form-group p0">
                                                   <label id="addLable" for="name" style="color:black;"><span class="required">*</span>Address Line 1</label>
                                                   <div class="">
                                                      <input name="addressLine1" class="form-control " id="billingAddressaddressLine1" type="text" placeholder="Billing Address Line 1" />
                                                   </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 form-group p0">
                                                   <label id="addLable" for="name" style="color:black;"><span class="required">*</span>Address Line 2</label>
                                                   <div class="">
                                                      <input name="addressLine2" class="form-control " id="billingAddressaddressLine2" type="text" placeholder="Billing Address Line 2" />
                                                   </div>
                                                </div>
                                             
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group pl-0">
                                                   <label id="addLable" for="name" style="color:black;"><span class="required">*</span>City</label>
                                                   <div class="">
                                                      <input name="city" id="billingAddresscity" class="form-control " type="text" placeholder="Billing Address City" />
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group pr-0">
                                                   <label id="addLable" class="control-label" for="billingcountry"><span class="required">*</span>Country</label>
                                                   <div id="billingDropDown" class=" input-lg p0">
                                                      <select name="billingCountryId" class="form-control  input-lg inputshd" id="billing_country" placeholder="Select Billing Country">
                                                         <option value="">Select Country</option>
                                                      </select>
                                                   </div>
                                                   <div id="billingCountryButton" style="display:none;" >
                                                      <input name="country" id="billingCountry" class="form-control " type="text" placeholder="Billing Address Country"  />
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group pl-0">
                                                   <label id="addLable" for="name" style="color:black;"><span class="required">*</span>Post code</label>
                                                   <div class="">
                                                      <input name="city" id="billingAddresspostCode" class="form-control " type="text" placeholder="PostCode" />
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <br>
                           
                           <div class="form-group">
                              <span class="required">*</span>
                              <label for="name" style="color:black;">Card Details</label>
                              <div class="">
                                 <div id="card-element" class="field "></div>
                              </div>
                           </div>
                           <div class=" form-group">
                              <label class="sr-checkbox-label">
                              <input type="checkbox" id="save-card"><span class="sr-checkbox-check"></span> Save card for future payments</label>
                           </div>
                
                        </div>
						
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                           <button type="button" id="card-button" class="btn btn-success">Make Payment <i class="fa fa-cc-stripe"></i></button>       
                           <button type="button" id="cancelPayment" class="btn btn-warning">Continue Without Payment</button>
                           <button type="button" id="goToConfirm" class="btn btn-primary" style='background-color: #428bca;border-color: #357ebd;margin-bottom: 10px; '>Back</button>
                        </div>
						<div class="col-md-12 col-sm-12 col-xs-12 text-center"  id="errorPayment">
						<span style='color:red'>There are errors in this page, please check errors above to continue</span>
						</div>
                     </div>
                     <div class="col-md-offset-1 col-md-10 col-sm-9 col-xs-12">
                        <div id="card-message"></div>
                      
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                     <div class="col-md-12 col-sm-12 col-xs-12 pardetail">
					 <div  style = "display:none" id="noInvoiceDiv"  >
                        <p class="headingbill" ><strong>From </strong><span class="fright" id="fromCountryName"></span>
                        </p>
                        <p class="headingbill"><strong>To  </strong><span class="fright" id="toCountryName"></span>
                        </p>
                        <p class="headingbill"><strong>Product  </strong><span class="fright" id="productName"></span>
                        </p>
                
                        <h3 class="headingbill">Billing summary</h3>
                        <p class="tcost"><span>Total Shipping cost</span><span class="fright" id="appliedCost">£ </span>
                        </p>
                        <p class="tcost"><span>Insurance (exc VAT)</span><span class="fright" id="insuranceCharges"></span>
                        </p>
                        <p class="tcost"><span>Discount</span><span class="fright" id="discount"></span>
                        </p>
                       
                        <p class="tcost"><span>VAT</span><span class="fright" id="appliedVat"></span>
                        </p>
                        <p class="border"></p>
                        <p class="totlcost" style="font-size: 22px"><span>Total</span><span class="fright" id="appliedTotalAmount">£ </span>
                        </p>
						</div>
						 <div  style = "display:none" id="invoiceDiv" >

                        <h3 class="headingbill">Billing summary</h3>
                    
						  <p class="tcost"><span>Total</span><span class="fright" id="appliedTotalInv"></span>
                        </p>
						   <p class="border"></p>
						   <p class="tcost"><span>Paid Amount</span><span class="fright" id="paidAmount"></span>
                        </p>
						 <p class="tcost"><span>Pending Amount</span><span class="fright" id="pendingAmount"></span>
                        </p>
                        <p class="border"></p>
                        <p class="totlcost" style="font-size: 22px"><span>Amount To Pay</span><span class="fright" id="appliedTotalAmountInv">£ </span>
                        </p>
						</div>
						
						 <div  style = "display:none" id="wtDiffDiv" >
                      
                     
                          <p class="headingbill" ><strong>From </strong><span class="fright" id="fromCountryNameW"></span>
                        </p>
                        <p class="headingbill"><strong>To  </strong><span class="fright" id="toCountryNameW"></span>
                        </p>
                        <p class="headingbill"><strong>Product  </strong><span class="fright" id="productNameW"></span>
                        </p>
                
                        <h3 class="headingbill">Billing summary</h3>
                        <p class="tcost"><span>Total Shipping cost</span><span class="fright" id="appliedCostW">£ </span>
                        </p>
                        <p class="tcost"><span>Insurance (exc VAT)</span><span class="fright" id="insuranceChargesW"></span>
                        </p>
                        <p class="tcost"><span>Discount</span><span class="fright" id="discountW"></span>
						
                        </p>
						<p>
                       
						<p class="tcost"><span>Weight Difference</span><span class="fright" id="wtDiffChargeTotal"> </p>
                        <p class="tcost"><span>VAT</span><span class="fright" id="appliedVatW"></span>
                        </p>
                        <p class="border"></p>
                        <p class="totlcost" style="font-size: 22px"><span>Amount Paid</span><span class="fright" id="paidAmmountW">£ </span>
                        </p>
						<p class="totlcost" style="font-size: 22px"><span>Pending Amount</span><span class="fright" id="pendingAmmountW">£ </span>
                        </p>
                   
						</div>
                     </div>
                  </div>
                  </br>
               </div>
            </div>
         </div>
         <br>
         <br>
         <?php  include 'includes/footerAx.php' ?>

<script src = "https://js.stripe.com/v3/" ></script>
<script type = "text/javascript" >var beurl = "<?php echo  $config['INSTANCEURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui";
var instanceurl = "<?php echo  $config['INSTANCEURL'];?>";
var furl = "<?php echo  $config['FRONTENDURL'];?>";
var secret_key = "<?php echo  $config['STRIPE_SECRET_KEY'];?>";
var publishable_key = "<?php echo  $config['STRIPE_PUBLISHABLE_KEY'];?>";
var successMessage = "Great! your order has been placed successfully";
var invoiceBill;
var cardholderName;
//checks user is login or not
var isLogin = " <?php if ( $_SESSION['logged_in'] == 'Y') {?><?php echo 1; ?><?php } else {?><?php echo 0; ?><?php } ?>";

var url_string = window.location.href
var url = new URL(url_string);
var orderid = 0;
var userid = 0;
var orderctivationid = 0;
var userType = 0;
var setupIntent;
var cid;
var pid;
var setUpIntentId;
var weightDifference = url.searchParams.get("WTDIFFENCE");
var weightDifferenceCost;
var orderid = url.searchParams.get("id");

var flow = url.searchParams.get("flow");
var inv = url.searchParams.get("inv");
var activationid =  url.searchParams.get("activationid");
var activeUser;
var regex = new RegExp("^[a-zA-Z ]+$");
var inv ;
var invoiceCustomer;
$("#errorPayment").hide();

//get active user type N or Anonymous
function getUserType() {
    var succeed = 0.0;
    var userTypeUrl;
    if (isLogin == 1) {
        userTypeUrl = instanceurl_o + '/getmyparcel/user/type';
    } else {
        userTypeUrl = instanceurl_o + '/o/getmyparcel/user/type';
    }
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: userTypeUrl,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error in colling :" + userTypeUrl);
            logDebugMsg("==>Error thrown  while getting usertype :" + errorThrown);
			if(errorThrown=='Unauthorized')
			{
				  $('#errorMessage').show();
                $('#errorMessage').html("Oops! you are not unauthorized for this payment link " );
			}
        },
        success: function(data) {
            logDebugMsg("==>Success in colling :" + userTypeUrl);
            var d = data;
            if (d) {
                succeed = d;
                logDebugMsg("user type is :" + d.userType);
				checkingUserType(d);
            }
        },
    });
    return succeed;
}
function checkingUserType(d){
	userType=d.userType;
                if (d.userType == "ROLE_ANONYMOUS") {
                    $('#cancelPayment').hide();
                    $('#goToConfirm').hide();
                    userid = url.searchParams.get("uid");
                    orderctivationid = url.searchParams.get("aid");
                    urlForBilllingAddress = instanceurl_o + '/o/addresses/billing/' + userid + "/" + orderid + "/" + orderctivationid + "/";
                }
                if (flow ==  'view') {
                    logDebugMsg("Order flow is => " + flow);
                    $('#goToConfirm').hide();
                }
				if (flow == 'invoice' || flow ==='invoice-anonymous') {
                    logDebugMsg("Order flow is => " + flow);
                    $('#goToConfirm').hide();
					 $('#cancelPayment').hide();
                }
}

function getPaymentProvider() {
    var succeed = 0.0;
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + "/o/getmyparcel/paymentProvider",
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown for url :" +
                instanceurl_o + "/o/getmyparcel/paymentProvider" + " & error is  =>" + errorThrown);
        },
        success: function(data) {
            logDebugMsg("==>Success for url : /o/getmyparcel/paymentProvider");
            var d = data;
            if (d) {
                succeed = d;
            }
        },
    });
    return succeed;
}
//get particular address by address id
function getAddress(id) {
    // var s = getUserType();
    //var userType = s.userType;
    logDebugMsg("In getAddress :" + userType)
    var succeed = 0.0;
    var url = 0;
    if (userType == "ROLE_ANONYMOUS") {
        url = instanceurl_o + '/o/getmyparcel/address/' + id + "/" + orderid + "/" + orderctivationid + "/" + userid + "/";
    } else {
        url = instanceurl_o + '/getmyparcel/address/' + id;
    }
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error for url   :" + url);
            logDebugMsg("==>Error thrown   :" + errorThrown);
        },
        success: function(data) {
            logDebugMsg("==>success for url   :" + url);
            var d = data;
            if (d) {
                succeed = d;
                $("#preaddress").attr('checked', 'checked');
            }
        },
    });
    return succeed;
}

function preadd() {


}
//enter billing address manually
function enterAddress() {
    $(".addDiv").css("background", "transparent");
    $(".addDiv").css("border", "transparent");
    $("#preaddress").prop("checked", false)
    var radioValue = $("input[name='billName']:checked").val();
    if (radioValue !== undefined || radioValue !== null) {
        document.getElementById(radioValue).style.background = "transparent";
        document.getElementById(radioValue + "_chk").checked = false;
        $("#enterManuallyAddress").prop("checked", true);
    }
    $("#billingDropDown").show();
    $("#billingCountryButton").hide();
    $('#billingAddressaddressLine1').attr('readonly', false);
    $('#billingAddressaddressLine2').attr('readonly', false);
    $('#phoneNumber').attr('readonly', false);
    $('#billingAddresscity').attr('readonly', false);
    $('#billingAddresspostCode').attr('readonly', false);
	$("#billingAddressaddressLine1").val("");
	$("#billingAddressaddressLine2").val("");
	$("#phoneNumber").val("");
	$("#billingAddresscity").val("");
	$("#billingAddresspostCode").val("");
}

//get customer id for user
function getStripeCustomer(orderid) {
	//userid=url.searchParams.get("uid");
	console.log(userid);
    var succeed = 0.0;
    var url = 0;
    logDebugMsg("In getStripeCustomer & user type is :" + userType);
    if (userType == "ROLE_ANONYMOUS") {
		if(flow == 'invoice-anonymous') {
			 url = instanceurl_o + '/o/getmyparcel/invoice/stripeCustomer/' + activationid + "/" + inv +"/" +userid;
		}else {
        url = instanceurl_o + '/o/getmyparcel/stripeCustomer/' + orderid + "/" + orderctivationid; }
    } else {
        url = instanceurl_o + '/getmyparcel/stripeCustomer';
    }
	
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {
            $('#errorMessage').show();
            $('#errorMessage').html("Oops! " + response.error.message);
            logDebugMsg("==>Error thrown :" + errorThrown + "  for" + url);
        },
        success: function(data) {
            logDebugMsg("==>Success for :" + url);
			logDebugMsg(data);
            var d = data;
            if (d) {
                succeed = d;
            }
        },
    });
    return succeed;
}
//get order for which ww are making payment
function getOrderDetail() {
	if(flow=='invoice-anonymous'){
		return false;
	}	
    var succeed = 0.0;
    var u = 0;
    var user = getUserType();
    if (url.searchParams.get("flow") == "view") {
        u = instanceurl_o + '/getmyparcel/' + url.searchParams.get("id");
    } else if (user.userType == "ROLE_ANONYMOUS") {
        u = instanceurl_o + '/o/getmyparcel/order/' + orderid + "/" + orderctivationid + "/" + userid + "/";
    }		
	else if(url.searchParams.get("flow")=='create'){
	   u = instanceurl_o + '/getmyparcel/' + url.searchParams.get("id");
    }else if(url.searchParams.get("flow")=='anonymous'){
		 u = instanceurl_o + '/getmyparcel/' + url.searchParams.get("id");
		 $('#goToConfirm').hide();
	}
	else {
 return false;
	}
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: u,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            var d = data;
            if (d) {
                succeed = d;
                //if payment is already done
                if (url.searchParams.get("flow") == "create") {
					succeed = getCreateOrder(d);
         
                }
                //If anonymous payment page link is invalid or payment is up do date
                if (user.userType == "ROLE_ANONYMOUS") {
					checkStatus(d);
              
                }
            }
        },
    });
    return succeed;
}

function getCreateOrder(d){
	               $.ajax({
                        async: false,
                        type: 'GET',
                        dataType: 'json',
                        url: instanceurl_o + '/getmyparcel/' + d.id,
                        error: function(jqXHR, textStatus, errorThrown) {
                            logDebugMsg("==>Error thrown :" + errorThrown + " at " + instanceurl_o + '/order/' + d.id);
                        },
                        success: function(data) {
                            var d = data;
                            succeed = d;
                            if (d.paymentcompleted == "Y") {
                
								
                            }
                        },
                    });
                    return succeed;
}
function checkStatus(d){
	      if (d.status == "0") {
                        $('#validatePayment').show();
                        $('#validatePayment').html("Invalid link (or) this link is expired");
                   
                        var timer = setTimeout(function() {
                            $('#errorMessage').hide();
                            window.location.href = furl + "/login.php";
                        }, 10000);
                    }
                    if (d.paymentcompleted == "Y") {
                       
                        var timer = setTimeout(function() {
                            $('#errorMessage').hide();
                            window.location.href = furl + "/login.php";
                        }, 10000);
                    }
}
//update billing address
var radioValue="";
function updateCustomerAddress(customer) {
    var flag = true;var order ;
	if(flow=='invoice' || flow=='invoice-anonymous'){
		
	var dRow=invoiceBill.rows;
	 logDebugMsg(dRow[0])
    order = dRow[0];}
	else
	{
		order=getOrderDetail();
	}
	var address = "";
	radioValue = $("input[name='selcaddresdel']:checked").val();
	address=getBillingAddress(customer);
	
    logDebugMsg('Upadate Customer Address...');
	updateBillingAddress(address);
    return flag;
}

function getBillingAddress(customer){
	// var radioValue = $("input[name='selcaddresdel']:checked").val();
    if (radioValue == "eMaddress") {
        logDebugMsg("Enter  address manually");

            address = {
                "city": $("#billingAddresscity").val(),
                "country": $("#billing_country").val(),
                "addressLine1": $("#billingAddressaddressLine1").val(),
                "addressLine2": $("#billingAddressaddressLine2").val(),
                "postCode": $("#billingAddresspostCode").val(),
                "phoneNumber": $("#phoneNumber").val(),
                "state": "NA",
                "contactName": cardholderName,
                "customer": customer
            }

    } else if (radioValue == "preaddress") {
        logDebugMsg("previous address");
        var addid = $("input[name='billName']:checked").val();
        logDebugMsg("address selected (id) :" + addid);
            var a = getAddress(addid);
            address = {
                "city": a.city,
                "country": a.country,
                "addressLine1": a.addressLine1,
                "addressLine2": a.addressLine2,
                "postCode": a.postCode,
                "phoneNumber": a.phoneNumber,
                "state": "NA",
                "contactName": a.contactName,
                "customer":  customer,
            }
  
    }
	return address;
}

function updateBillingAddress(){
	var url;
    var subUrl;
    if (isLogin == 1) {
        url = instanceurl_o + "/getmyparcel/stripe/address";
        subUrl = instanceurl_o + "/getmyparcel/billingAddress";
    } else {
        url = instanceurl_o + "/o/getmyparcel/stripe/address";
		if(flow=='invoice-anonymous'){
			var uid=invoiceCustomer.email;
			  subUrl = instanceurl_o + "/o/getmyparcel/billingAddress/" + uid + "/";
		}else{
        subUrl = instanceurl_o + "/o/getmyparcel/billingAddress/" + orderid + "/" + userid + "/"; }
    }
	logDebugMsg(address);
    $.ajax({
        async: false,
        data: JSON.stringify(address),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
            logDebugMsg("Cusomer  Address Updated!");
            //add address in database
            if (radioValue == "eMaddress") {
				logDebugMsg("new address and url is"+subUrl);
				postBillingAddress(address,subUrl);
               
            } else {
                logDebugMsg("previous address is used");
            }
        },
    });
}
function postBillingAddress(address,subUrl){
	$.ajax({
                    async: false,
                    data: JSON.stringify(address),
                    dataType: 'json',
                    contentType: "application/json; charset=utf-8",
                    type: 'POST',
                    url: subUrl,
                    error: function(jqXHR, textStatus, errorThrown) {
                        logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
                    },
                    success: function(data) {
                        logDebugMsg(data.message);
                    },
                });
}
//attach card to particualr email id
function attachCustomer(paymentMethod, customer, activeUser, order) {
    var jsondata = {
        "customer": customer,
        "payment_method": paymentMethod,
    }
    var url;
    if (isLogin == 1) {
        url = instanceurl_o + "/getmyparcel/stripe/attach";
    } else {
        url = instanceurl_o + "/o/getmyparcel/stripe/attach"
    }
    logDebugMsg('attach customer start...');
    $.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
				logDebugMsg(activeUser);
            //update customer address
            var flag = updateCustomerAddress(customer, activeUser, order);
            if (flag == true) {		
			
                //create payment intent
                logDebugMsg("Adddress updated successfully");
                createPaymentIntent(customer, paymentMethod, activeUser, order);
            } else {
                return false;
            }
        },
    });
}
//create new customer on stripe
function createCustomer(paymentMethod, cardholderName, activeUser, order) {
	var email;
	if(flow == 'invoice-anonymous'){
	
		email =invoiceCustomer.email;
	}else{
		email=order.orderRaisedBy;
	}
    var jsondata = {
        "email": email,
        "payment_method": paymentMethod,
        "name": cardholderName
    }
    var url;
    if (isLogin == 1) {
        url = instanceurl_o + "/getmyparcel/stripe/customer";
    } else {
        url = instanceurl_o + "/o/getmyparcel/stripe/customer"
    }
    logDebugMsg('Creating customer...');
    logDebugMsg(jsondata);
    $.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
			logDebugMsg("User=>");

				logDebugMsg(activeUser);
            //update customer address
            var flag = updateCustomerAddress(data.customer.id, activeUser, order);
            if (flag == true) {
				logDebugMsg("User=>");
				
				logDebugMsg(activeUser);
                //create payment intent
                createPaymentIntent(data.customer.id, paymentMethod, activeUser, order);
            } else {
                return false;
            }
        },
    });
}
//save data in database(java side)
function saveOrderPaymnetStatus(orderid, payId, paymentmethodid, customerid, activeUser)
{
		var dRow;
	if(flow== 'invoice')
	{
	 dRow=invoiceBill.rows;
     for (var i in dRow) {          
		logDebugMsg(dRow[i].id);
		saveOrderPaymnetDetails(dRow[i].id, payId, paymentmethodid, customerid, activeUser) ;
	} }
	 else if(flow=='invoice-anonymous')
	 {
     logDebugMsg(" saveOrderPaymnetDetailsInvoice and flow is invoice-anonymous");
	 dRow=invoiceBill.rows;
     for (var i in dRow) {          
		logDebugMsg(dRow[i]);	
		saveOrderPaymnetDetailsInvoice(dRow[i].id,dRow[i].orderctivationid, payId, paymentmethodid, customerid, activeUser) ;
	}
	 }
	else{
		saveOrderPaymnetDetails(orderid, payId, paymentmethodid, customerid, activeUser) ;
	}
}

function saveOrderPaymnetDetailsInvoice(orderid, orderctivationid, payId, paymentmethodid, customerid, activeUser) {
	 var jsondata = {
        "paymentmethodid": paymentmethodid,
        "customerid": customerid,
        "orderid": orderid,
        "alias": customerid,
        "payId": payId,
    }
	var u=instanceurl_o + "/o/getmyparcel/order/invoice/" + inv + "/" + flow;
	 $.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: u,
        error: function(jqXHR, textStatus, errorThrown) {
            $('#errorMessage').show();
          //  $('#errorMessage').html("Oops! " + response.error.message);
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);	
        },
        success: function(data) {
           
            logDebugMsg(data);
			
            
        },
    });

}

function saveOrderPaymnetDetails(orderid, payId, paymentmethodid, customerid, activeUser) {
	logDebugMsg("In saveOrderPaymnetDetails ")
    var succeed = 0.0;
	logDebugMsg(orderid+" ,"+ payId+" ,"+  paymentmethodid+" ,"+ customerid+" ,"+ activeUser);

    var jsondata = {
        "paymentmethodid": paymentmethodid,
        "customerid": customerid,
        "orderid": orderid,
        "alias": customerid,
        "payId": payId,
    }

	 if (activeUser.userType == "ROLE_ANONYMOUS") {
	if(weightDifference=='Y')
		{
			 u =instanceurl_o + "/o/getmyparcel/addPaymentStatus/weightDifference/" + orderid + "/" + orderctivationid;
		}else{			
        u = instanceurl_o + "/o/getmyparcel/addPaymentStatus/" + orderid + "/" + orderctivationid;}
    } else {			
		if(weightDifference=='Y')
		{
			 u = instanceurl_o + "/getmyparcel/addPaymentStatus/weightDifference/" + orderid;
		}else{			
        u = instanceurl_o + "/getmyparcel/addPaymentStatus/" + orderid;}
    }
    $.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: u,
        error: function(jqXHR, textStatus, errorThrown) {
            $('#errorMessage').show();
           // $('#errorMessage').html("Oops! " + response.error.message);
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
            //var d = JSON.parse(data);
            logDebugMsg(data.status)
            $('#errorMessage').hide();
            $('#sucessMessage').show();
            $('#sucessMessage').html(data.msg);
            succeed = data.msg;
        },
    });
    return succeed;
};

function saveCardDetailsInvoice(orderid, orderctivationid,payId, cn, paymentmethodid, customerid, alias, brand, cardno, ed, activeUser) {
    logDebugMsg('In saveCardDetails ' + activeUser.userType);
    var succeed = 0.0;
    var url = 0;
	var email=invoiceCustomer.email;
	logDebugMsg(invoiceCustomer);
	
    if (flow == "invoice-anonymous") {
		
        url = instanceurl_o + "/o/getmyparcel/invoice/addupdatealias/" + email+"/";
    } else {
        url = instanceurl_o + "/getmyparcel/addupdatealias";
    }
    var jsondata = {
        "paymentmethodid": paymentmethodid,
        "customerid": customerid,
        "orderId": orderid,
        "cardno": cardno,
        "brand": brand,
        "alias": customerid,
        "ed": ed,
        "payId": payId,
        "cn": cn,
        "customerid": customerid,
        "setUpIntentId": setUpIntentId
    }
	logDebugMsg(jsondata);
    $.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {		
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
            //var d = JSON.parse(data);
            logDebugMsg("saveCardDetails successfully")
            logDebugMsg(data.msg)
            $('#errorMessage').hide();
            succeed = data.msg;
        },
    });
    return succeed;
};
function saveCardDB(orderid, payId, cn, paymentmethodid, customerid, alias, brand, cardno, ed, activeUser)
{
	
	logDebugMsg("==>User");
    logDebugMsg(activeUser);	 
		var dRow;
	if(flow== 'invoice')
	{
	//logDebugMsg(invoiceBill.rows);
	 dRow=invoiceBill.rows;
	 logDebugMsg(dRow[0].id)
	 saveCardDetails(dRow[0].id, payId, cn, paymentmethodid, customerid, alias, brand, cardno, ed, activeUser) ;
    
	}else if(flow=='invoice-anonymous')
	{
		 dRow=invoiceBill.rows;
	 logDebugMsg(dRow[0].id)
	 saveCardDetailsInvoice(dRow[0].id, dRow[0].orderctivationid,payId, cn, paymentmethodid, customerid, alias, brand, cardno, ed, activeUser) ;
	}
	else{
		saveCardDetails(orderid, payId, cn, paymentmethodid, customerid, alias, brand, cardno, ed, activeUser) ;
	}
}

function saveCardDetails(orderid, payId, cn, paymentmethodid, customerid, alias, brand, cardno, ed, activeUser) {
    logDebugMsg('In saveCardDetails ' + activeUser.userType);
    var succeed = 0.0;
    var url = 0;
    if (activeUser.userType == "ROLE_ANONYMOUS") {
        url = instanceurl_o + "/o/getmyparcel/addupdatealias/" + orderctivationid;
    } else {
        url = instanceurl_o + "/getmyparcel/addupdatealias";
    }
    var jsondata = {
        "paymentmethodid": paymentmethodid,
        "customerid": customerid,
        "orderId": orderid,
        "cardno": cardno,
        "brand": brand,
        "alias": customerid,
        "ed": ed,
        "payId": payId,
        "cn": cn,
        "customerid": customerid,
        "setUpIntentId": setUpIntentId
    }
	logDebugMsg(jsondata);
    $.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {		
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
            //var d = JSON.parse(data);
            logDebugMsg("saveCardDetails successfully")
            logDebugMsg(data.msg)
            $('#errorMessage').hide();
            $('#sucessMessage').show();
            $('#sucessMessage').html(data.msg);
            succeed = data.msg;
        },
    });
    return succeed;
}

$('#goToConfirm').bind('click', function(ev) {
    window.location.href = furl + "/getconfirmations.php";
});
$('#cancelPayment').bind('click', function(ev) {
    window.location.href = furl + "/finalizebooking.php?status=0&id=" + orderid+"&flow=cancel";
});
//Submit the card details to Stripe from the client
$('#card-button').bind('click', function(ev) {
			$("#errorPayment").hide();
		showAlternateBtnText ('card-button','Attempting payment...', true);
	var flag=validateCardHolderName();
		if(flag==false){
		showErrorMessage();
		return flag;
	}
 
	var flag=validatePhoneNo();
	if(flag==false){
		showErrorMessage();
		return flag;
	}
	
	var flag=validatebillingaddress();
	if(flag==false){
		showErrorMessage();
		return flag;
	}
    var url;
    logDebugMsg("cardholderName :" + cardholderName);
    if (isLogin == 1) {
        url = instanceurl_o + '/getmyparcel/stripe/setupIntent';
    } else {
        url = instanceurl_o + '/o/getmyparcel/stripe/setupIntent';
    }
    //1. Create setupIntentId.
    //Generated each time when page loads
  
	setupIntent=generateSetUpIntent(url);
    logDebugMsg('handling card setup...');
    //Gives paymentMethodId Response
	
    stripe.confirmCardSetup(
        setupIntent.client_secret, {
            payment_method: {
                card: cardElement,
                billing_details: {
                   name: cardholderName,
                },
            },
        }
    ).then(function(result) {
        if (result.error) {
            logDebugMsg(result.error.message);
            $('#errorMessage').show();
            $('#errorMessage').html("Oops! " + result.error.message);
			showErrorMessage();
        } else {
	processPayment(result);
          
        }
    });
});

function processPayment(result){
	logDebugMsg('Setup succeeded');
           pid = result.setupIntent.payment_method;
           setUpIntentId = result.setupIntent.id;
           var order;
           var customer;
           if(flow=="invoice-anonymous") {
			   $.when(              
                invoiceCustomer = getStripeCustomer(orderid),
                activeUser = getUserType(),
            ).then(function() {
                logDebugMsg("==>  loading...");
		   });
		   customer=invoiceCustomer;
		   logDebugMsg("invoiceCustomer :");logDebugMsg(invoiceCustomer);
		   }else{
            $.when(
                order = getOrderDetail(),
                customer = getStripeCustomer(orderid),
                activeUser = getUserType(),
            ).then(function() {
                logDebugMsg("==>  loading...");
		   }); }
	
            if (customer.size > 0) {
				  logDebugMsg("==>  attch customer...");
                attachCustomer(pid, customer.customerid, activeUser, order);
            } else {
				 logDebugMsg("==>  create customer...");
                // create customer and make payment
               createCustomer(pid, cardholderName, activeUser, order);
            }
}

function showErrorMessage(){
	$("#errorPayment").show();
	$("#card-button").text('Make Payment');
}

function validatePhoneNo(){
	phoneNumber=$('#phoneNumber').val();
	
	 if (phoneNumber == "") {
                $('#errorMessage').show();
                $('#errorMessage').html("Oops! Your contact number is empty");
                return false;
            }else{
				var flag1 = true;
                 var phoneNofilter = /^\d*(?:\.\d{1,2})?$/;
          if (phoneNofilter.test(phoneNumber) && phoneNumber.length<20) {
                 flag1 = true;
             } else {
                
               $('#errorMessage').show();
                $('#errorMessage').html("Oops! Your contact number is not correct");
				$("#errorPayment").show();
                flag1 = false;
                return flag1;
              }
         
		}
}

function validateCardHolderName(){
	cardholderName = $('#cardholder-name').val();
    if (cardholderName == "") {
        $('#errorMessage').show();
        $('#errorMessage').html("Please enter cardholder name");
        return false;
    }
	if(regex.test(cardholderName)== false)
	{
		 $('#errorMessage').show();
        $('#errorMessage').html("Oops! card holder name is not correct");
        return false;
	}
}

function generateSetUpIntent(url){
	$.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown while generating setupIntent :" + errorThrown);
        },
        success: function(response) {
            setupIntent = response;
            logDebugMsg('Fetched setup intent: ' + response.id);
        },
    });
	return setupIntent;
}

	function roundAmountsToInt(amountToRound){
	var amtfixedToLastTwoDigits = amountToRound.toFixed(2);
	var amountToReturn = parseInt(amtfixedToLastTwoDigits,10); 
	return amountToReturn;
	}
	
//make actual payment
function createPaymentIntent(customer, paymentMethod, activeUser, order) {
  
  var t;
  var description;
    var jsondata;
	if(flow=='invoice' || flow=='invoice-anonymous')
	{  logDebugMsg("invoiceBill");
       logDebugMsg(invoiceBill); 
        t=  invoiceBill.total ;
       logDebugMsg(t);
	   
	  //var amt=roundAmountsToInt(t * 100);
		description= "Invoice Number : "+inv;
	}else if (weightDifference=='Y')
	{
      logDebugMsg("weightDifference");
	  logDebugMsg(weightDifferenceCost);
	  t=weightDifferenceCost;
	  description="Weight Difference cost for order  : "+order.id;
	}else if(flow !='invoice' & weightDifference !='Y'){
		t=(order.totalPayableAmountForOrder);
		description="Order Number : "+order.id;
		
	}
    var jsondata = {
        "amount": roundAmountsToInt(t * 100),
        "payment_method": paymentMethod,
        "description": description,
        "customer": customer
    }
	logDebugMsg(jsondata);
    var url;
    if (isLogin == 1) {
        url = instanceurl_o + "/getmyparcel/stripe/paymentIntent"
    } else {
        url = instanceurl_o + "/o/getmyparcel/stripe/paymentIntent"
    }
    logDebugMsg('Creating payment Intent...');
	createPaymentIntentCall(url,jsondata);
}

function createPaymentIntentCall(url,jsondata){
	$.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {
            $('#sucessMessage').hide();
            $('#errorMessage').show();
            $('#errorMessage').html(jqXHR.responseJSON.message);
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(response) {
            logDebugMsg("Cusomer  charged!");
			postPaymentResponse();
            var alias = response.charges.data[0].customer;
            var cn = document.getElementById("cardholder-name").value;
            //card expiry date
            var ed = response.charges.data[0].payment_method_details.card.exp_month + "/" + response.charges.data[0].payment_method_details.card.exp_year;
			//save card in db
			 if ($("#save-card").prop('checked') == true) {
                //save card details in java side				
                saveCardDB(orderid, response.id, cn, response.charges.data[0].payment_method, response.charges.data[0].customer.id, alias, response.charges.data[0].payment_method_details.card.brand, response.charges.data[0].payment_method_details.card.last4, ed, activeUser);
            } else {
                logDebugMsg("customer not ready to save card");
            }			
           saveOrderPaymnetStatus(orderid, response.id, response.charges.data[0].payment_method, response.charges.data[0].customer.id, activeUser);		   
			//upadte invoice table -invoice paid or not			          
            var url = 0;
          finalPage();
			
        },
    });
}

function finalPage(){
	
	if(flow=='invoice-anonymous' || flow=='invoice')
			{
			updateinvoicetable();
					 
			} 
	if(flow =='view' || flow == 'create') {				
              window.location.href = furl + "/finalizebooking.php?status=1&id=" + orderid+"&flow="+flow;
            }
			else if(flow =='invoice-anonymous')
			{
				   window.location.href = furl + "/finalizepayment.php?&invoice=" + inv;
			}else if(flow =='anonymous')
			{     
				   window.location.href = furl + "/finalizepayment.php?&orderid=" + orderid;
			}
			else if(flow =='invoice'){
				window.location.href = furl + "/finalizebooking.php?flow="+flow;
			}else{
				window.location.href = furl + "/finalizepayment.php?&orderid=" + orderid;
			}
     
}
function postPaymentResponse(){
			$('#card-button').attr('disabled', true);
            $('#cancelPayment').attr('disabled', true);
            $('#goToConfirm').attr('disabled', true);
            $('#preaddress').attr('disabled', true);
           $('#enterManuallyAddress').attr('disabled', true);
}

    function updateinvoicetable(){
	     var urlInv;
				if(isLogin==1){ urlInv=  instanceurl_o + "/getmyparcel/invoice/payment/"+inv ;}
				else{urlInv=instanceurl_o + "/o/getmyparcel/invoice/payment/"+inv; }
					  $.ajax({
							type: 'POST',
							dataType: 'json',
							url: urlInv,
							error: function(jqXHR, textStatus, errorThrown) {
								logDebugMsg("==>Error thrown :" + errorThrown);
							},
							success: function(data) {
								logDebugMsg('==>> Success in calling url ::' + urlInv);
								logDebugMsg(data);
								if(data.paidStatus=='N'){
									 $('#sucessMessage').hide();
									 $('#errorMessage').show();  
                                     $('#errorMessage').html(message);
									 return false;
									 
								}  
							}
						  
						});	
}
function getBillingCountriesList() {
    //get list of country
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/o/getmyparcel/country/all',
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown while retrieving country list:" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/o/country/all , data :: ' + data);
            if (data) {
                var count = 0;
                $.each(data.rows, function(key, entry) {
                    $("#billing_country").append($('<option></option>').attr('value', entry.cell[1]).text(entry.cell[1]));
                    count++;
                })
            }
        },
    });
}

function getPreviousBillingAddresses(urlForBilllingAddress) {
	if(flow=='invoice-anonymous'){
		return false;
	}
		
		if(flow=='anonymous') {return false;}

    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: urlForBilllingAddress,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' + "   " + '/addresses/billing , data :: ' + data);
            logDebugMsg(data);
            var dRow = data.rows;

            for (var i in dRow) {
                var str = "";
                for (var j in dRow[i]) {
                    if (j == 'id') continue;
                    str += dRow[i][j] + ",";
                }
                $("#addressDropdown").append('<option value=' + dRow[i].id + '>' + str + '</option>');
            };
        }
    });
	
}

function setupUserTypeSpecificParams(s, d) {
    userType = s.userType;
    if (userType == "ROLE_ANONYMOUS" || userType == "A") {
        $("#breadcrumb1").hide();
        logDebugMsg("user is  ROLE_ANONYMOUS");
        orderid = url.searchParams.get("id");
        userid = url.searchParams.get("uid");
        orderctivationid = url.searchParams.get("aid");
        urlForBilllingAddress = instanceurl_o + '/o/getmyparcel/addresses/billing/' + userid + "/" + orderid + "/" + orderctivationid + "/";
    } else {
        $("#breadcrumb1").show();
        logDebugMsg("user is not ROLE_ANONYMOUS");
        orderid = d.id;
        userid = d.orderRaisedBy;
        orderctivationid = d.orderctivationid;
        urlForBilllingAddress = instanceurl_o + '/getmyparcel/addresses/billing';
    }
}

function getInvoiceById(invoicenum)
{
	 var  activationid = url.searchParams.get("activationid");
    var u;
	if(userType=='ROLE_ANONYMOUS')
	{
		
		u=instanceurl_o + '/o/getmyparcel/' + activationid + '/invoice/'+invoicenum+"/";
	}else{
		u= instanceurl_o + '/getmyparcel/' + invoicenum+"/invoice/";
	}
	 $.ajax({
        type: 'GET',
        dataType: 'json',
        url:  u,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' +instanceurl_o + '/getmyparcel/invoice/' + invoicenum);
            logDebugMsg(data);
			if (data.paid == 'Y') {
      
		displayPaymentResponse();
    }
        
        }
    });
	
}

  function displayPaymentResponse(){
	  $('#card-button').prop('disabled', true);
        $('#cancelPayment').attr('disabled', true);
        $('#goToConfirm').attr('disabled', true);
        $('#sucessMessage').show();
        $('#sucessMessage').html("payment for this order is up to date");
  }
  

 function  getWeightDifferenceCost(or)
{
	var url_string;
	if (userType == "ROLE_ANONYMOUS") {
        url_string = instanceurl_o + '/o/getmyparcel/order/weightdifference/'+orderid+"/" + orderctivationid + "/" + userid + "/";
    } else {
        url_string = instanceurl_o + '/getmyparcel/order/weightdifference/'+or;
    } 
 $.ajax({ 
 type:'GET',
 dataType: 'json',
  url:url_string,
  error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
		success: function(data) {
           logDebugMsg('==>> Success in calling url ::'+ instanceurl_o + '/getmyparcel/order/weightdifference/'+or);
            logDebugMsg(data);
			 $("#wtDiffChargeTotal").text('£ ' + data.amount);
			// weightDifferenceCost=data;
         weightDifference = url.searchParams.get("WTDIFFENCE");
		weightDifferenceCost=data.amount;
        }
 
 
 })	;
}

function setupPage(d) {
    $("#save-card").prop("checked", true);
	if(flow=='anonymous' || flow=='invoice-anonymous'){
		showManualAddress();
	}
				
	if(flow=='invoice' || flow=='invoice-anonymous' ){
	$('#noInvoiceDiv').hide();
	$('#wtDiffDiv').hide();
    $('#invoiceDiv').show();
		  $.when(
                getAllInvoices(),
				getInvoiceById(inv),
            ).then(function() {
                logDebugMsg("==>  loading...");
            });	
	}	
	if(weightDifference =='Y')
	{
	  $('#noInvoiceDiv').hide();
	  $('#invoiceDiv').hide();
	  $('#wtDiffDiv').show();
	  $.when(
		 getWeightDifferenceCost(orderid),
		 getAllPriceElemets(),

		).then(function() {
		 logDebugMsg("==>  loading...");
		});		
		if (d.paymentcompleted == 'Y') {
			displayPaymentResponse();       
    }
	displayweightdifferencedetails();	
	}	
	if(weightDifference !='Y' & flow !='invoice' & flow!='invoice-anonymous'){
			$('#wtDiffDiv').hide();
		$('#noInvoiceDiv').show();
    $('#invoiceDiv').hide();
    if (d.paymentcompleted == 'Y') {
		displayPaymentResponse();    
    }	
	//gettting order prices
	var orderPrices=d.orderPrice;
	displayorderpricedetails(orderPrices);
	displaycartdetails();
	}
}


//create stripeElements and mount them in form
var stripe = Stripe(publishable_key);
var elements = stripe.elements();
var cardElement = elements.create('card', {
        iconStyle: 'solid',
        style: {
            base: {
                fontWeight: 400,
                fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
                fontSize: '16px',
                fontSmoothing: 'antialiased',
            },
        },
    }
);
cardElement.mount('#card-element');

// All functions loaded, now execute the page
$(document).ready(function() {
    $.when(
        getBillingCountriesList(),
        // get basic values
        s = getUserType(),
        d = getOrderDetail(),
        getBillAdd(),
        setupUserTypeSpecificParams(s, d),
        getPreviousBillingAddresses(urlForBilllingAddress),
        // setup page elements
        setupPage(d)
    ).then(function() {
        logDebugMsg("==> Page loading completed ...");
    });
});

function displayorderpricedetails(orderPrices){
		 for (var i in orderPrices) {          
		logDebugMsg(orderPrices[i].type);
		
		if(orderPrices[i].type=='APPLIED') {  $("#appliedCost").text('£ ' + orderPrices[i].amount);}
		if(orderPrices[i].type=='INSURANCE')
			{  
		$("#insuranceCharges").text('£ ' + orderPrices[i].amount);
		}
		
		if(orderPrices[i].type=='DISCOUNT') { 
		if (orderPrices[i].amount > 0) {
         $("#discount").text('£ '+ "-" + orderPrices[i].amount);
			} else {
			    $("#discount").text('£ '+ orderPrices[i].amount);
			}
		}
		if(orderPrices[i].type=='WEIGHTDIFFERENCE') { 
   		$('#pendingAmmountDiv').show(); $("#wtDiffCharges").text( orderPrices[i].amount);
		} 
	 }
}

function displaycartdetails(){
	 $("#productName").text(d.productName);
    $("#appliedVat").text('£ ' + d.totalVatForOrder);
    $("#appliedTotalAmount").text('£ ' + d.totalPayableAmountForOrder);
    $("#fromCountryName").text(d.sourceCountryName);
    $("#collAddresscountry").val(d.sourceCountryName);
    $("#toCountryName").text(d.destinationCountryName);
    $("#deliveryAddresscountry").val(d.destinationCountryName);
}

function displayweightdifferencedetails(){
	$("#productNameW").text(d.productName);
    $("#fromCountryNameW").text(d.sourceCountryName);
    $("#collAddresscountryW").val(d.sourceCountryName);
    $("#toCountryNameW").text(d.destinationCountryName);
    $("#deliveryAddresscountryW").val(d.destinationCountryName);		
}

var count = 1;
function incrementCount() {
    count++;
}
function getBillAdd() {
	if(flow=='invoice-anonymous'){
		return false;
	}		
		if(flow=='anonymous') {return false;}
    var size;
    var userTypeUrl;
    if (isLogin == 1) {
        userTypeUrl = instanceurl_o + '/getmyparcel/addresses/billing';
    } else {
        userTypeUrl = instanceurl_o + "/o/getmyparcel/addresses/billing/" + userid + "/" + orderid + "/" + orderctivationid + "/";
    }
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: userTypeUrl,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::');
            logDebugMsg(data);
            dRow = data.rows;
            logDebugMsg(data.size);
          //  var row = document.getElementById("myAddRow");
            // var x = row.insertCell(0);
            //var b=0;
            if (data.size > 0) {
				if(flow !='anonymous' || flow !='invoice-anonymous'){
                $("#preaddress").prop("checked", true);}else {
					 $("#enterManuallyAddress").prop("checked", true);
				}
            } else {
				showManualAddress();
                
            }
			checkBillingAddress(dRow);
        }
    });
}

function checkBillingAddress(dRow){
	var row = document.getElementById("myAddRow");
	var hh = 0;
            var x;
            for (var i in dRow) {
                var str = "";
                for (var j in dRow[i]) {
                    if (j == 'id') continue;
                    str += dRow[i][j] + ",";
                }
                logDebugMsg(dRow[i]);
                var rowCount = $("#addTable td").length;
                var aa = rowCount % 3;
                if (aa == 0) {
                    incrementCount();
                    var row = document.getElementById(count);
                    var x = row.insertCell(0);
                    x.innerHTML = "<div  id='" + dRow[i].id + "'  class='addDiv '><label class='chkClass'><input type='checkbox'   id='" + dRow[i].id + "_chk" + "'  class='bill_add' name='billName' onclick='selAddress(" + dRow[i].id + ")'  value='" + dRow[i].id + "' /> " + "  " + dRow[i].addressLine1 + " ," + dRow[i].addressLine2 + " ," + dRow[i].city + " ," + dRow[i].postCode + " ," + dRow[i].country + " " + " <span class='checkmark1'></span></lable>  </div>";
                } else {
                    var row = document.getElementById(count);
                    var x = row.insertCell(0);
                    logDebugMsg(x);
                    x.innerHTML = "<div id='" + dRow[i].id + "'  class='addDiv'><label class='chkClass'><input type='checkbox' id='" + dRow[i].id + "_chk" + "'   class='bill_add' name='billName' onclick='selAddress(" + dRow[i].id + ")'   value='" + dRow[i].id + "' /> " + "    " + dRow[i].addressLine1 + " ," + dRow[i].addressLine2 + " ," + dRow[i].city + " ," + dRow[i].postCode + " ," + dRow[i].country + " " + " <span class='checkmark1'></span></lable>  </div>";
                }
            };
			 var radioValue = $("input[name='billName']:checked").val();
            $('input.bill_add').on('change', function() {
                $('input.bill_add').not(this).prop('checked', false);
            });
}
function preAddress() {
}
function selAddress(id) {
    $(".addDiv").css("background", "transparent");
    $(".addDiv").css("border", "transparent");
    document.getElementById(id).style.background = "rgb(200 231 247)";
    document.getElementById(id).style.border = "thin solid #554c75";
    $("#enterManuallyAddress").prop("checked", false);
    $("#preaddress").prop("checked", true);
}

function showManualAddress(){
				$("#accordion h3:first").addClass("ui-state-disabled");
                $("#preaddress").prop("checked", false);
                $('#preaddress').hide();
                $('#preAddLable').hide();
                $("#enterManuallyAddress").prop("checked", true);
                $('#accordion').accordion({
                    active: 1
                });
}

function getAllInvoices()
{ var succeed=0.0;
     var u;
   var  activationid = url.searchParams.get("activationid");
  
	if(userType=='ROLE_ANONYMOUS')
	{
	 if (flow =='invoice-anonymous'){
		 u=instanceurl_o + '/o/getmyparcel/' + activationid + '/invoice/'+inv+"/";
	 }		 
		
	}else{
		u=instanceurl_o + '/getmyparcel/order/' + inv + '/invoice';
	}
	
	 $.ajax({
        type: 'GET',
        dataType: 'json',
        url: u,
        error: function(jqXHR, textStatus, errorThrown) {
			
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
			
            logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/getmyparcel/order/' + inv + '/invoice');
            logDebugMsg(data);
			if(data.status==0)
			{
				 $('#sucessMessage').hide();
            $('#errorMessage').show();
            $('#errorMessage').html(data.message);
				var timer = setTimeout(function() {                
                 window.location.href = furl ;
                }, 5000);
			
			}
           var d=data;
		   logDebugMsg("row");
		 logDebugMsg(d.total);
		 displayPriceForInvoice(d);

		  if(d){
			   invoiceBill=d;
		  return succeed;}
		}
      
    });
	logDebugMsg("end of inv");
}

function displayPriceForInvoice(d){
		 $("#appliedTotalAmountInv").text('£ ' + d.total);
		 $("#appliedCostInv").text('£ ' + d.appliedCost);
		 $("#appliedVatInv").text('£ ' + d.appliedVat);
		 $("#pendingAmount").text('£ ' + d.total);
		 $("#paidAmount").text('£ ' + d.paidAmount);
		 $("#appliedTotalInv").text('£ ' + d.totalAmount);
}

function getAllPriceElemets()
{ var succeed=0.0;	
	 var u = 0;
    if (userType == "ROLE_ANONYMOUS") {
		u=instanceurl_o + '/o/getmyparcel/order/' + orderid + '/price/'+orderctivationid+"/"+userid;
    } else {
        u = instanceurl_o + '/getmyparcel/order/' + orderid + '/price';
    }
	 $.ajax({
        type: 'GET',
        dataType: 'json',
        url: u,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/getmyparcel/order/' + orderid + '/price');
			var dRow=data.orderPrice;
			displayPriceForWtDifference(dRow);    
		$("#appliedVatW").text('£ ' + data.totalVatForOrder);
		$("#pendingAmmountW").text('£ ' + data.totalPayableAmountForOrder);
		$("#paidAmmountW").text('£ ' + data.totalPaidAmount);          
		}      
    });	
}


function displayPriceForWtDifference(dRow){
	for (var i in dRow) {          
		logDebugMsg(dRow[i].type);		
		if(dRow[i].type=='APPLIED') {  $("#appliedCostW").text('£ ' + dRow[i].amount);}
		if(dRow[i].type=='INSURANCE') {  $("#insuranceChargesW").text('£ ' + dRow[i].amount);}
		if(dRow[i].type=='DISCOUNT') { 
		if (dRow[i].amount > 0) {
        $("#discountW").text('£ ' + "-" + dRow[i].amount);
			} else {
				$("#discountW").text('£ ' +dRow[i].amount);
			}
		}
		if(dRow[i].type=='WTDIFFENCE') {  $("#wtDiffChargeTotal").text('£ ' + dRow[i].amount);}
	 }
}

function validatebillingaddress(){
	 var radioValue = $("input[name='selcaddresdel']:checked").val();
    if (radioValue == "eMaddress") {
        logDebugMsg("Enter  address manually");
        //validation for enter address mannually
        var bCountry = $("#billing_country").val();
        var postCode = $("#billingAddresspostCode").val();
        var city = $("#billingAddresscity").val();
        var phoneNumber = $("#phoneNumber").val();
        var billingAddressaddressLine1 = $("#billingAddressaddressLine1").val();
        var billingAddressaddressLine2 = $("#billingAddressaddressLine2").val();
        //validate billing address ( enter address )
            var flag1 = true;
            if (billingAddressaddressLine1 == "") {
                $('#errorMessage').show();
                $('#errorMessage').html("Oops! Your address line1 is empty");
                flag1 = false;
                return flag1;
            } else if (billingAddressaddressLine2 == "") {
                $('#errorMessage').show();
                $('#errorMessage').html("Oops! Your address line2 is empty");
                flag1 = false;
                return flag1;
            }  else if (city == "") {
                $('#errorMessage').show();
                $('#errorMessage').html("Oops! Your city name is empty");
                flag1 = false;
                return flag1;
            } else if (bCountry == "") {
                $('#errorMessage').show();
                $('#errorMessage').html("Oops! Your country name is empty");
                flag1 = false;
                return flag1;
            } else if (postCode == "") {
                $('#errorMessage').show();
                $('#errorMessage').html("Oops! Your postcode name is empty");
                flag1 = false;
                return flag1;
            } 
			 //return flag1;
			}else if (radioValue == "preaddress") {
				logDebugMsg("previous address");
				var addid = $("input[name='billName']:checked").val();
				logDebugMsg("address selected (id) :" + addid);
					var flag1 = true;
					if (addid === undefined || addid === null) {
						$('#errorMessage').show();
					$('#errorMessage').html("Oops ! you have not checked any address from previous addresses list ");
                flag1 = false;
                return flag1;
            } else {
                return flag1;
            }      
	}else {
        $('#errorMessage').show();
        $('#errorMessage').html("Oops! you have not selected (or) enter  billing address");
		return false;
        
    }	
	}


</script>
</body> 
</html>