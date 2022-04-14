<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include 'includes/headerAx.php' ?>
      <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-91408953-1', 'auto');
         ga('send', 'pageview');
      </script>
      <?php  include 'includes/include_chat_box.php' ?>
      <?php  include 'includes/google_tag_manager_head.php' ?>
      <?php  include 'auth_mandate.php' ?>
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
      <!-- Main Content -->
      <main class="padded20">
      <div class="container"  id="breadcrumb1" >
         <ol class="breadcrumb" >
            <?php
               if ( $_SESSION["usertype"] == "B") {	?>	
            <li><a href="/businesshome.php">Home</a></li>
            <?php } 
               else {?>
            <li><a href="/index.php">Home</a></li>
            <?php }?>
            <li><a href="/products.php">Order</a></li>
            <li class="active">Payment</li>
         </ol>
      </div>
      <div class="container">
         <div class="col-md-12 col-sm-12 col-xs-12  ">
            <div class="box-intro text-center">
               <h5 class="heading">Use previously saved cards </h5>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 ">
               <div>
                  <div class="alert alert-success" style = "display:none"  id="sucessMessage"></div>
                  <div class="alert alert-danger" style="display:none" id="errorMessage"></div>
				
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
                  </br>
                  <span class="required">*</span>
                  <label>Choose Card</label>	
                  <div class="col-md-12 text-center  margin20-top"
                     style="text-align: left;">
                     <table id="cardDatatable"
                        class="table table-hover table-bordered display"
                        style="text-align: center; ">
                        <thead>
                           <tr>
                              <th>Card Holder Name </th>
                              <th>Brand</th>
                              <th>Card No</th>
                              <th>Action</th>
                              <th></th>
                           </tr>
                        </thead>
                     </table>
                  </div>
                  <p style="margin: 20px 0; text-align: center; font-size: 20px;">OR</p>
                  <p style="margin: 20px 0; text-align: center; font-size: 20px;">Want to use new one ? </p>
                  <p style="margin: 20px 0; text-align: center; font-size: 20px;"><i style="font-size:24px" class="fa">&#xf063;</i></p>
                  <center>	
                     <button id="directpay" name="directpay" type="button" class="btn btn-success"><i class="fa fa-play-circle-o"></i> Go to Payment Page </button>
                  </center>
                  </br>
               </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
               <div class="col-md-12 col-sm-12 col-xs-12 pardetail">
			   					 <div  style = "display:none" id="noInvoiceDiv"  >

                  <p class="headingbill"><strong>From </strong><span class="fright" id="fromCountryName"></span>
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
                  <!--<div id="promo" class="PromoMsg col-sm-12">(Promocode : <span id="promocodeApplied"></span>)</div>
                  <!--<p class= "tcost"> <span>Surcharge</span><span id="surcharge"></span></p>-->
                  <p class="tcost"><span>VAT</span><span class="fright" id="appliedVat"></span>
                  </p>
                  <p class="border"></p>
                  <p class="totlcost" style="font-size: 22px"><span>Total</span><span class="fright" id="appliedTotalAmount">£ </span>
                  </p>
               </div>
			   
			     <div  style = "display:none" id="invoiceDiv" >
                      
                         <h3 class="headingbill">Billing summary</h3>
                      <!--  <p class="tcost"><span>Total Shipping cost</span><span class="fright" id="appliedCostInv">£ </span>
                        </p>
                        
                      
                        <p class="tcost"><span>VAT</span><span class="fright" id="appliedVatInv"></span>
                        </p>  -->
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
                      
                       <!-- <h3 class="headingbill">Billing summary</h3></br>
                        <p class="tcost"><span>Weight Difference Charges</span><span class="fright" id="wtDiffCharge">£ </span>
                        </p> -->
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
                        <!--<div id="promo" class="PromoMsg col-sm-12">(Promocode : <span id="promocodeAppliedW"></span>)</div> </p>
                        <!--<p class= "tcost"> <span>Surcharge</span><span id="surcharge"></span></p>-->
						<p class="tcost"><span>Weight Difference</span><span class="fright" id="wtDiffChargeTotal"> </p>
                        <p class="tcost"><span>VAT</span><span class="fright" id="appliedVatW"></span>
                        </p>
                        <p class="border"></p>
                        <p class="totlcost" style="font-size: 22px"><span>Amount Paid</span><span class="fright" id="paidAmmountW">£ </span>
                        </p>
						<p class="totlcost" style="font-size: 22px"><span>Pending Amount</span><span class="fright" id="pendingAmmountW">£ </span>
                        </p>
                       <!-- <p class="totlcost" style="font-size: 22px"><span>Weight Difference Charges</span><span class="fright" id="wtDiffChargeTotal">£ </span>
                        </p> -->
						</div>
			   </div>
            </div>
            <hr>
            <div>
            </div>
         </div>
      </div>
      </div>
      </div>
      </div> <!-- container -->
      </div> <!-- main -->
      <!-- Footer -->
      <?php  include 'includes/footerAx.php' ?>
    <!-- Footer - End -->
<script type = "text/javascript" >var beurl = "<?php echo  $config['INSTANCEURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui";
var instanceurl = "<?php echo  $config['INSTANCEURL'];?>";
var furl = "<?php echo  $config['FRONTENDURL'];?>";
var successMessage = "Great! your order has been placed successfully";
var pageUrl = "";
var url_string = window.location.href
var url = new URL(url_string);
var orderctivationid = url.searchParams.get("orderctivationid");
var orderid;
var userid;
var paymentGatewayProvider = getPaymentProvider();
var paymentProvider = paymentGatewayProvider.provider;
var flow = url.searchParams.get("flow");
var invoicenum = url.searchParams.get("inv");
var invoiceBill;
var cardHolderName;
var weightDifference = url.searchParams.get("WTDIFFENCE");
var weightDifferenceCost;
var orderid = url.searchParams.get("id");
  var regex =  new RegExp("^[a-zA-Z ]+$");
    var phoneNofilter = /^\d*(?:\.\d{1,2})?$/;

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
            }
        },
    });
    return succeed;
}

function checkButton(element) {
    element.checked = true;
}

function getOrderDetail() {
    var succeed = 0.0;
    var u = 0;
    if (url.searchParams.get("flow") == "view") {
        u = instanceurl_o + '/getmyparcel/' + url.searchParams.get("id");
    } 	
	else if(url.searchParams.get("flow")=='create'){
		 u = instanceurl_o + '/getmyparcel/' + url.searchParams.get("id");
    }else {
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
            }
        },
    });
    return succeed;
}
var orderid = url.searchParams.get("id");
if (url.searchParams.get("flow") == "view") {
    pageUrl = instanceurl_o + "/getmyparcel/getpayment/" + orderid;
} else {
    pageUrl = instanceurl_o + "/getmyparcel/redirecttopayment/" + orderid;
}
if (paymentProvider == "STRIPE") {
    var cTable = jQuery("#cardDatatable")
        .DataTable({
			  "iDisplayLength": 5,
            responsive: true,
            select: true,
            "processing": true,
            "order": [
                [1, "asc"]
            ],
            "ajax": {
                //  "url": instanceurl_o + "/getmyparcel/getCustomerbyuserid/" + orderid+"/",
                "url": instanceurl_o + "/getmyparcel/cardList",
                "dataSrc": "",
                error: function(jqXHR, ajaxOptions, thrownError) {
                    $('#sucessMessage').hide();
                    $('#errorMessage').show();
                    $('#errorMessage').html("Oops! error while fetching card please contact admin");
                    logDebugMsg(thrownError + "\r\n" + jqXHR.statusText + "\r\n" + jqXHR.responseText + "\r\n" + ajaxOptions.responseText);
                }

            },
            order: [
                [1, 'asc']
            ],
            "columnDefs": [{
                    "targets": 0,

                    "defaultContent": ""
                },
                {
                    "targets": 1,
                    "defaultContent": ""
                },
                {
                    "targets": 2,

                    "defaultContent": ""
                },
                {
                    "targets": 3,

                    "render": function(cellvalue, options, rowObject) {
                        return "<button id='pay'   onclick='gopayStripe(`" + cellvalue.setUpIntentId + "`,`" + orderid + "`,`" + cellvalue.brand + "`,`" + cellvalue.pm + "`,`" + cellvalue.cardno + "`,`" + cellvalue.ed + "`,`" + cellvalue.cn + "`,`" + cellvalue.customerid + "`,`" + cellvalue.payid + "`);'  title='Go to Payment Page' class='btn btn btn-primary' style='background-color: #428bca;border-color: #357ebd;'  > Pay with this Card </button>";
                    }
                },
            ],
            columns: [{
                    data: "cn"
                },
                {
                    data: "brand"
                }, {
                    data: "cardno"
                },
                {
                    "className": 'details-control',
                    "orderable": false,
                    "data": null,
                    "defaultContent": ''
                },
            ],

        });
		
		
    function gopayStripe(setUpIntentId, orderid, brand, pm, cardno, ed, cn, customerid, payid) {
			cardHolderName=cn;
		//$('#pay').prop('disabled', false);
        var r = confirm("Continue with this card ?");
        if (r == true) {
            var jsondata = {
                "setUpIntentId": setUpIntentId,
                "orderid": orderid,
                "brand": brand,
                "cardno": cardno,
                "ed": ed,
                "payid": payid,
                "customerid": customerid
            }
            $.ajax({
                url: instanceurl_o + "/getmyparcel/paymentmethod",
                type: "POST",
                data: JSON.stringify(jsondata),
                cache: false,
                success: function(d) {
                    var data = JSON.parse(d);
                    //  alert(data.pid);  
                    var paymentMethodId = data.pid;
				
                    var order = getOrderDetail();
                    if (order.paymentcompleted == 'Y') {
                        $('#sucessMessage').show();
                        $('#sucessMessage').html("payment for this order is up to date");
                    } else {
                        var flag = updateCustomerAddress(customerid);
                        logDebugMsg("is address updated?  => " + flag);
                        if (flag == true) {
                            logDebugMsg('Creating payment intent start');
                            createPaymentIntent(customerid, paymentMethodId);
                        } else {
                            logDebugMsg('billing address  is not provided');
                            return false;
                        }
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    logDebugMsg("==>Error thown :" + errorThrown);
                }
            });
        }
    }
} else if (paymentProvider == ("BARCLAYS")) {
    var cTable = jQuery("#cardDatatable")
        .DataTable({
            select: true,
            "processing": true,
            "order": [
                [1, "asc"]
            ],
            "ajax": {
                "url": instanceurl_o + "/getmyparcel/getaliasbyuserid/" + orderid,
                "dataSrc": ""
            },
            order: [
                [1, 'asc']
            ],
            "columnDefs": [{
                    "targets": 0,

                    "defaultContent": ""
                },
                {
                    "targets": 1,

                    "defaultContent": ""
                },
                {
                    "targets": 2,

                    "render": function(cellvalue, options, rowObject) {
                        return "<button id='pay' onclick='gopayBarclays(`" + rowObject.alias + "`,`" + rowObject.brand + "`,`" + rowObject.pm + "`,`" + rowObject.cardno + "`,`" + rowObject.ed + "`,`" + rowObject.cn + "`);' title='Go to Payment Page' class='btn btn btn-primary' style='background-color: #428bca;border-color: #357ebd;'> Pay with this Card </button></button></button>";
                    }
                },
            ],
            columns: [{
                data: "brand"
            }, {
                data: "cardno"
            }, {
                data: null
            }],
        });

    function gopayBarclays(alias, brand, pm, cardno, ed, cn) {
        var jsondata = {
            "alias": alias,
            "brand": brand,
            "pm": pm,
            "cardno": cardno,
            "ed": ed,
            "cn": cn,
        }
        $.ajax({
            url: pageUrl,
            type: "POST",
            data: JSON.stringify(jsondata),
            cache: false,
            success: function(d) {
                var data = JSON.parse(d);
                var url = data.url;
                window.location.href = url;
            }
        });
    }
};

 
$('#directpay').bind('click', function() {
    $("#directpay").prop('disabled', true);
    if (paymentProvider == ("BARCLAYS")) {
        $.ajax({
            url: pageUrl,
            cache: false,
            type: "POST",
            success: function(d) {
                var data = JSON.parse(d);
                var url = data.url;
                window.location.href = url;
            }
        });
    } else if (paymentProvider == ("STRIPE")) {	
	logDebugMsg(flow);
	if(flow=='invoice'){
					var url = new URL(furl + "/pay.php");		
					url.searchParams.append('flow', 'invoice');
					url.searchParams.append('inv', invoicenum);
					if(weightDifference=='Y')
					{
						url.searchParams.append('WTDIFFENCE', 'Y');
					}
					
					window.location.href = url;
				}else{
        $.ajax({
            async: false,
            url: pageUrl,
            cache: false,
            type: "POST",
            error: function(jqXHR, textStatus, errorThrown) {
                logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown + " In" + pageUrl);
            },
            success: function(d) {
                var data = JSON.parse(d);
                var urlPay = data.url;
				var url = new URL(urlPay);	
				if(weightDifference=='Y')
					{
						url.searchParams.append('WTDIFFENCE', 'Y');
					}
                window.location.href = url;
            }
        });
				}
		

    }
});

//save data in database(java side)
function saveCardDetails(orderid, payId, paymentmethodid, customerid) {
    var succeed = 0.0;
	var u;
	if(weightDifference=='Y')
		{
			 u = instanceurl_o + "/getmyparcel/addPaymentStatus/weightDifference/" + orderid;
		}else{			
        u = instanceurl_o + "/getmyparcel/addPaymentStatus/" + orderid;}
    
    var jsondata = {
        "paymentmethodid": paymentmethodid,
        "customerid": customerid,
        "orderid": orderid,
        "alias": customerid,
        "payId": payId,
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
            $('#errorMessage').html("Oops! " + response.error.message);
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
            //var d = JSON.parse(data); 
            $('#errorMessage').hide();
            $('#sucessMessage').show();
            $('#sucessMessage').html(data.msg);
            succeed = data.msg;
        },
    });
    return succeed;
};
//save data in database(java side)
function saveOrderPaymnetStatus(orderid, payId, paymentmethodid, customerid, activeUser)
{
		var dRow;
	if(flow== 'invoice')
	{
	logDebugMsg(invoiceBill.rows);
	 dRow=invoiceBill.rows;
     for (var i in dRow) {          
		logDebugMsg(dRow[i].id);
		saveCardDetails(dRow[i].id, payId, paymentmethodid, customerid, activeUser) ;
	 }
	}else{
		saveCardDetails(orderid, payId, paymentmethodid, customerid, activeUser) ;
	}
}

	function roundAmountsToInt(amountToRound){
	var amtfixedToLastTwoDigits = amountToRound.toFixed(2);
	var amountToReturn = parseInt(amtfixedToLastTwoDigits,10); 
	return amountToReturn;
	}
	
function createPaymentIntent(customer, paymentMethodId) {
   
	 var t;  var description;
	if(flow=='invoice')
	{	   logDebugMsg("invoiceBill");
       logDebugMsg(invoiceBill); 
        t=invoiceBill.total;
        description= "Invoice Number : "+invoicenum;
	}
	if (weightDifference=='Y')
	{
      logDebugMsg("weightDifference");
	  logDebugMsg(weightDifferenceCost);
	  t=weightDifferenceCost;
	  description="Weight Difference cost for order  : "+orderid;
	}
	if(flow !='invoice' & weightDifference !='Y'){
		 var order = getOrderDetail();
	t=(order.totalPayableAmountForOrder);
	//t=(order.appliedTotalAmount);
		description="Order Number : "+order.id;
	}
    var jsondata = {
        "amount": roundAmountsToInt(t * 100),
        "payment_method": paymentMethodId,
        "description": description,
        "customer": customer
    }
    logDebugMsg('inside creating payment Intent method...');
	logDebugMsg(jsondata);
	callPaymentIntent(jsondata);
   
}

function callPaymentIntent(jsondata){
	$.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: instanceurl_o + "/o/getmyparcel/stripe/paymentIntent",
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
			 $('#errorMessage').show();
			 $('#errorMessage').html("Oops! please contact administrator");
        },
        success: function(response) {
            logDebugMsg("Cusomer  charged!");
            var alias = response.charges.data[0].customer;
            //save card details in java side 
            saveOrderPaymnetStatus(orderid, response.id, response.charges.data[0].payment_method, response.charges.data[0].customer.id);
			 if(flow =='invoice')
			{
				updateInvoiceTable();
				window.location.href = furl + "/finalizebooking.php?flow="+flow;
			}else{
				
			window.location.href = furl + "/finalizebooking.php?status=1&id=" + orderid+"&flow="+flow; }
        },
    });
}

function updateInvoiceTable(){
	var urlInv;
			 urlInv=  instanceurl_o + "/getmyparcel/invoice/payment/"+invoicenum ;
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
var radioValue="";
function updateCustomerAddress(customer) {
    var flag = true;
    var order = getOrderDetail();
    var address = "";
     radioValue = $("input[name='selcaddresdel']:checked").val(); 
	 var flag1 = true;
	 flag1=validatebillingaddress();
		 if(flag1==false){
			 return flag1;
		 }
	 address=getBillingAddress(customer);  	 
        logDebugMsg("Enter  address manually");
        //validation for enter address mannually
    logDebugMsg('Upadate Customer Address...');
	updateBillingAddress(address);
  
    return flag;
}

function updateBillingAddress(address){
	var url;
    $.ajax({
        async: false,
        data: JSON.stringify(address),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: instanceurl_o + "/o/getmyparcel/stripe/address",
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
            //var d = JSON.parse(data); 						
            logDebugMsg("Cusomer  Address Updated!");
            //add address in database
            if (radioValue == "eMaddress") {
                $.ajax({
                    async: false,
                    data: JSON.stringify(address),
                    dataType: 'json',
                    contentType: "application/json; charset=utf-8",
                    type: 'POST',
                    url: instanceurl_o + "/getmyparcel/billingAddress",
                    error: function(jqXHR, textStatus, errorThrown) {
                        logDebugMsg('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
                    },
                    success: function(data) {
                        //var d = JSON.parse(data); 
                        logDebugMsg(data.message);
                    },
                });
            } else {
                logDebugMsg("previous address is used");
            }
        },
    });
}
function getBillingAddress(customer){
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

function getAddress(id) {
    var succeed = 0.0;
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/getmyparcel/address/' + id,
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            var d = data;
            if (d) {
                succeed = d;
                //alert(d.id);
            }
        },
    });
    return succeed;
}

function getBilligAddress() {
    var succeed = 0.0;
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/getmyparcel/addresses/billing',
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/getmyparcel/addresses/billing , data :: ');
            succeed = data;
            var dRow = data.rows;
            for (var i in dRow) {
                var str = "";
                for (var j in dRow[i]) {
                    if (j == 'id') continue;
                    str += dRow[i][j] + ",";
                }
                $("#addressDropdown").append('<option value=' + dRow[i].id + '>' + str + '</option>');
            };
            return succeed;
        }
    });
    return succeed;
}
function getAllInvoices()
{ var succeed=0.0;

	 var url_string = window.location.href
    var url = new URL(url_string);
    var flow = url.searchParams.get("flow");
	var inv = url.searchParams.get("inv");
 
	 $.ajax({
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/getmyparcel/order/' + inv + '/invoice',
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/getmyparcel/order/' + inv + '/invoice');
            logDebugMsg(data);
           var d=data;
		   logDebugMsg("row");
		
		 getInvoiceCartDetails(d);
		
		  if(d){
			   invoiceBill=d;
		  return succeed;}
		}
      
    });
	logDebugMsg("end of inv");
}

function getInvoiceCartDetails(d){
	 $("#appliedTotalAmountInv").text('£ ' + d.total);
		 $("#appliedCostInv").text('£ ' + d.appliedCost);
		 $("#appliedVatInv").text('£ ' + d.appliedVat);
		 $("#pendingAmount").text('£ ' + d.total);
		 $("#paidAmount").text('£ ' + d.paidAmount);
		 $("#appliedTotalInv").text('£ ' + d.totalAmount);
}
function getInvoiceById(invoicenum)
{
	 $.ajax({
        type: 'GET',
        dataType: 'json',
        url:  u = instanceurl_o + '/getmyparcel/' + invoicenum+"/invoice/",
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' +instanceurl_o + '/getmyparcel/invoice/' + invoicenum);
            logDebugMsg(data);
			if (data.paid == 'Y') {
        $('#card-button').prop('disabled', true);
        $('#cancelPayment').attr('disabled', true);
        $('#goToConfirm').attr('disabled', true);
        $('#sucessMessage').show();
        $('#sucessMessage').html("payment for this order is up to date");
    }
        
        }
    });
	
}
function  getWeightDifferenceCost(or)
{
	var url_string;
        url_string = instanceurl_o + '/getmyparcel/order/weightdifference/'+or;
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

	if(flow=='invoice'){
	$('#noInvoiceDiv').hide();
	$('#wtDiffDiv').hide();
    $('#invoiceDiv').show();
		  $.when(
                getAllInvoices(),
				getInvoiceById(invoicenum),
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
        $('#card-button').prop('disabled', true);
        $('#cancelPayment').attr('disabled', true);
        $('#goToConfirm').attr('disabled', true);
        $('#sucessMessage').show();
        $('#sucessMessage').html("payment for this order is up to date");
    }
    $("#productNameW").text(d.productName);
    $("#fromCountryNameW").text(d.sourceCountryName);
    $("#collAddresscountryW").val(d.sourceCountryName);
    $("#toCountryNameW").text(d.destinationCountryName);
    $("#deliveryAddresscountryW").val(d.destinationCountryName);
		
	}
	
	if(weightDifference !='Y' & flow !='invoice'){
		$('#wtDiffDiv').hide();
		$('#noInvoiceDiv').show();
    $('#invoiceDiv').hide();
    if (d.paymentcompleted == 'Y') {
        $('#pay').prop('disabled', true);
        $('#directpay').prop('disabled', true);
        $('#preaddress').attr('disabled', true);
        $('#enterManuallyAddress').attr('disabled', true);
        $('#sucessMessage').show();
        $('#sucessMessage').html("payment for this order is up to date");
    }
	
	var orderPrices=d.orderPrice;
	getOrderPrice(orderPrices);
    $("#productName").text(d.productName); 
    $("#appliedVat").text('£ ' + d.totalVatForOrder);
    $("#appliedTotalAmount").text('£ ' + d.totalPayableAmountForOrder);
    $("#fromCountryName").text(d.sourceCountryName);
    $("#collAddresscountry").val(d.sourceCountryName);
    $("#toCountryName").text(d.destinationCountryName);
    $("#deliveryAddresscountry").val(d.destinationCountryName);
    orderid = d.id;
    userid = d.userId; }
}

function getOrderPrice(orderPrices){
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

$(document).ready(function() {
    var ad;
    $.when(
        getBillingCountriesList(),
        d = getOrderDetail(),
        getBillAdd(),
        // setup page elements 	
        setupPage(d)

    ).then(function() {
        logDebugMsg("==> Page loading completed ...");
    });
});
var count = 1;

function incrementCount() {
    count++;
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

function getBillAdd() {
    var size;

    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/getmyparcel/addresses/billing',
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/getmyparcel/addresses/billing');
           
            if (data.size > 0) {
                $("#preaddress").prop("checked", true);
            } else {
                $("#accordion h3:first").addClass("ui-state-disabled");
                $("#preaddress").prop("checked", false);
                $('#preaddress').hide();
                $('#preAddLable').hide();
                $("#enterManuallyAddress").prop("checked", true);
                $('#accordion').accordion({
                    active: 1
                });

            }
			arrangeBillingAddress(data);
        }
    });
}

function arrangeBillingAddress(data){
	     dRow = data.rows;
            var row = document.getElementById("myAddRow");
            var hh = 0;
            var x;
            for (var i in dRow) {
                var str = "";
                for (var j in dRow[i]) {
                    if (j == 'id') continue;
                    str += dRow[i][j] + ",";
                }
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
                    x.innerHTML = "<div id='" + dRow[i].id + "'  class='addDiv'><label class='chkClass'><input type='checkbox' id='" + dRow[i].id + "_chk" + "'   class='bill_add' name='billName' onclick='selAddress(" + dRow[i].id + ")'   value='" + dRow[i].id + "' /> " + "    " + dRow[i].addressLine1 + " ," + dRow[i].addressLine2 + " ," + dRow[i].city + " ," + dRow[i].postCode + " ," + dRow[i].country + " " + " <span class='checkmark1'></span></lable>  </div>";
                }


            };
            var radioValue = $("input[name='billName']:checked").val();
            $('input.bill_add').on('change', function() {
                $('input.bill_add').not(this).prop('checked', false);
            });
}

function selAddress(id) {
    $(".addDiv").css("background", "transparent");
    $(".addDiv").css("border", "transparent");
    document.getElementById(id).style.background = "rgb(200 231 247)";
    document.getElementById(id).style.border = "thin solid #554c75";
    $("#enterManuallyAddress").prop("checked", false);
    $("#preaddress").prop("checked", true);
}

function preAddress() {}
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
    $('#billingAddresscity').attr('readonly', false);
    $('#billingAddresspostCode').attr('readonly', false);
	$("#billingAddressaddressLine1").val("");
	$("#billingAddressaddressLine2").val("");
	$("#phoneNumber").val("");
	$("#billingAddresscity").val("");
	$("#billingAddresspostCode").val("");
}

function getAllPriceElemets()
{ var succeed=0.0;	
	 $.ajax({
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/getmyparcel/order/' + orderid + '/price',
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/getmyparcel/order/' + orderid + '/price');
			logDebugMsg(data);
			var dRow=data.orderPrice;
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
		$("#appliedVatW").text('£ ' + data.totalVatForOrder);
		$("#pendingAmmountW").text('£ ' + data.totalPayableAmountForOrder);
		$("#paidAmmountW").text('£ ' + data.totalPaidAmount);
		}
      
    });
	
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