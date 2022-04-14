<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include 'includes/headerAx.php' ?>
      <?php include('config.php'); ?>
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
      <style>
         input[type="radio"], input[type="checkbox"] {
         margin: 10px;
         margin-top: 1px \9;
         line-height: normal;
         }
         .addDiv{ padding: 10px ;
         border: thin 1px;
         }
         .bAdd{
         height: 350px;
         }
         .required {
         color: red;
         }
         .p0{padding: 0;}
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
         margin-bottom: 0px;
         /*    margin-left: 150px;*/
         }
         #addCardModal .modal-header{border-bottom: 0;}
         #addCardModal input {
         box-shadow: 2px 2px 10px #e2e2d2;
         border: 0;
         }
         .btn-success {
         color: #fff;
         background-color: #5CB85C;
         border-color: #4cae4c;
         }
         .btn-warning {
         color: #fff;
         background-color: #c1172f;
         }
         .shadowbox_wrap input{box-shadow: 2px 2px 10px #e2e2d2;
         border: 0;
         }
         .shadowbox_wrap .form-group{margin-bottom: 23px;}
         .form-group1 {
         margin-bottom: 15px;
         margin-left: 100px;
         }
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
         background: #fff url(images/ui-bg_glass_65_ffffff_1x400.png) 50% 50% repeat-x;
         font-weight: bold;
         color: #1c94c4;
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
      <div class="container">
         <div>
            <div class="alert alert-success" style = "display:none"  id="sucessMsg"></div>
            <div class="alert alert-danger" style="display:none" id="errorMsg"></div>
            <div class="box-intro text-center">
               <h3 class="heading">Your Payment Methods</h3>
               </br>
            </div>
            <button type="button" class="btn btn-success" id="btnAddCard" onclick="addCard()" > <i class="fa fa-plus"></i> Add New Card
            </button> </br></br>
            <div class="col-md-12 text-center  margin20-top"
               style="text-align: left;">
               <table id="cardDatatable"
                  class="table table-hover table-bordered display"
                  style="text-align: center; ">
                  <thead>
                     <tr>
                        <th>Card Holder Name</th>
                        <th>Brand</th>
                        <th>Card No</th>
                        <th>Action</th>
                        <th></th>
                     </tr>
                  </thead>
               </table>
            </div>
         </div>
         <hr>
         <div id="addCardModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog"  >
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <div class="box-intro text-center">
                        <h4 class="heading">Enter Card Details</h4>
                     </div>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <div class="alert alert-success" style="display:none" id="sucessMessage"></div>
                        <div class="alert alert-danger" style="display:none" id="errorMessage"></div>
                        <div id="card-message"></div>
                     </div>
                     <div>
                        <span class="required">*</span>
                        <label>Please Select Billing Address</label>	  
                        <div id="accordion">
                           <h3> Previous Addresses  </h3>
                           <div class ="bAdd">
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
                           <div class ="bAdd">
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
                                             <label id="addLable" for="name" style="color:black;"><span class="required">*</span>Contact Number </label>
                                             <div class="">
                                                <input name="phoneNumber1" id="phoneNumber" class="form-control " type="text" placeholder="Phone Number" />
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12 form-group pr-0">
                                             <label id="addLable" for="name" style="color:black;"><span class="required">*</span>City</label>
                                             <div class="">
                                                <input name="city" id="billingAddresscity" class="form-control " type="text" placeholder="Billing Address City" />
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12 form-group pl-0">
                                             <label id="addLable" class="control-label" for="billingcountry"><span class="required">*</span>Country</label>
                                             <div id="billingDropDown" class=" input-lg p0">
                                                <select name="billingCountryId" class="form-control  input-lg inputshd" id="billing_country" placeholder="Select Billing Country">
                                                   <option value="">Loading countries...</option>
                                                </select>
                                             </div>
                                             <div id="billingCountryButton" style="display:none;" >
                                                <input name="country" id="billingCountry" class="form-control " type="text" placeholder="Billing Address Country"  />
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12 form-group pr-0">
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
                     <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <span class="required">*</span>
                        <label id="name" for="name" style="color:black;">Cardholders Name</label>
                        <div class="">
                           <input name="userName" class="form-control" id="cardholder-name" type="text" placeholder="Cardholders Name" />
                        </div>
                     </div>
                     <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <span class="required">*</span>
                        <label for="name" style="color:black;">Card Details</label>
                        <div class="">
                           <div id="card-element" class="field "></div>
                        </div>
                     </div>
                     <!--  <div>
                        <span class="required">*</span>
                        <label>Please Select Billing Address</label>				   
                        <input type="radio" id="enterManuallyAddress" name="selcaddresdel" value="eMaddress" data-toggle="collapse" onclick="enterAddress()"
                          data-target="#enterAddress"> 
                        <span>Enter Manually</span> 
                        <div id="enterAddress" class="collapse">
                          <div class="addrebar entmanulydel showhideaddel" style="display: block; ;">
                            <br>
                            <div class="row">
                              <div class=" col-md-12 col-sm-12 col-xs-12 form-group p0">
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group p0">
                                  <label id="addLable" for="name" style="color:black;">Address Line 1</label>
                                  <div class="">
                                    <input name="addressLine1" class="form-control " id="billingAddressaddressLine1" type="text" placeholder="Billing Address Line 1" />
                                  </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group p0">
                                  <label id="addLable" for="name" style="color:black;">Address Line 2</label>
                                  <div class="">
                                    <input name="addressLine2" class="form-control " id="billingAddressaddressLine2" type="text" placeholder="Billing Address Line 2" />
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group pl-0">
                                  <label id="addLable" for="name" style="color:black;">Contact Number</label>
                                  <div class="">
                                    <input name="phoneNumber1" id="phoneNumber" class="form-control " type="text" placeholder="Phone Number" />
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group pr-0">
                                  <label id="addLable" for="name" style="color:black;">City</label>
                                  <div class="">
                                    <input name="city" id="billingAddresscity" class="form-control " type="text" placeholder="Billing Address City" />
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group pl-0">
                                  <label id="addLable" class="control-label" for="billingcountry">Country</label>
                                  <div id="billingDropDown" class=" input-lg p0">
                                    <select name="billingCountryId" class="form-control  input-lg inputshd" id="billing_country" placeholder="Select Billing Country">
                                      <option value="">Loading countries...</option>
                                    </select>
                                  </div>
                                  <div id="billingCountryButton" style="display:none;" >
                                    <input name="country" id="billingCountry" class="form-control " type="text" placeholder="Billing Address Country"  />
                                  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group pr-0">
                                  <label id="addLable" for="name" style="color:black;">Post code</label>
                                  <div class="">
                                    <input name="city" id="billingAddresspostCode" class="form-control " type="text" placeholder="PostCode" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <input type="radio" id="preaddress" name="selcaddresdel"   value="preaddress" data-toggle="collapse"  onclick="preAddress()"
                          data-target="#preAdd" > <span>Previous Address</span>  </br>
                        <div id="preAdd" class="collapse">
                          <table id="addTable">
                             <tr id="1"><td></td><td></td><td></td><td></td></tr><tr id="2"><td></td><td></td><td></td><td></td></tr>
                                <tr id="3"><td></td><td></td><td></td><td></td></tr><tr id="4"><td></td><td></td><td></td><td></td></tr>
                                <tr id="5"><td></td><td></td><td></td><td></td></tr><tr id="6"><td></td><td></td><td></td><td></td></tr>
                                <tr id="7"><td></td><td></td><td></td><td></td></tr><tr id="8"><td></td><td></td><td></td><td></td></tr>
                                <tr id="9"><td></td><td></td><td></td><td></td></tr><tr id="10"><td></td><td></td><td></td><td></td></tr>
                          </table>
                        </div>
                        </div>   -->
                     <div class="form-group">
                        <button type="button" id="card-button" class="btn btn-success">Save Card <i class="fa fa-cc-stripe"></i></button>
                     </div>
                     </br>	
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
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
<script src = "https://js.stripe.com/v3/" ></script> 
<script type = "text/javascript" >var beurl = "<?php echo  $config['INSTANCEURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui";
var instanceurl = "<?php echo  $config['INSTANCEURL'];?>";
var furl = "<?php echo  $config['FRONTENDURL'];?>";
var successMessage = "Great! your order has been placed successfully";
var publishable_key = "<?php echo  $config['STRIPE_PUBLISHABLE_KEY'];?>";
var sid;
//create stripeElements and mount them in form
var stripe = Stripe(publishable_key);
var elements = stripe.elements();
var cardElement = elements.create('card');
cardElement.mount('#card-element');
var pageUrl = "";
var url_string = window.location.href
var url = new URL(url_string);
  var regex =  new RegExp("^[a-zA-Z ]+$");
//var orderid = url.searchParams.get("orderid");
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
    var billingAddressaddressLine1 = document.getElementById('billingAddressaddressLine1');
    billingAddressaddressLine1.value = "";
    var billingAddressaddressLine2 = document.getElementById('billingAddressaddressLine2');
    billingAddressaddressLine2.value = "";
    var phoneNumber = document.getElementById('phoneNumber');
    phoneNumber.value = "";
    var billingAddresspostCode = document.getElementById('billingAddresspostCode');
    billingAddresspostCode.value = "";
    var billingAddresscity = document.getElementById('billingAddresscity');
    billingAddresscity.value = "";
}
//get particular address by address id
function getAddress(id) {
    // var s = getUserType();
    //  var userType = s.userType;
    var succeed = 0.0;
    var url = instanceurl_o + '/getmyparcel/address/' + id;
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            var d = data;
            if (d) {
                succeed = d;
                //alert(d.id);
                $("#preaddress").attr('checked', 'checked');
            }
        },
    });
    return succeed;
}

function getPreviousBillingAddresses() {
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/getmyparcel/addresses/billing',
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            console.log('==>> Success in calling url ::' + "   " + '/addresses/billing , data :: ' + data);
            var dRow = data.rows;
            for (var i in dRow) {
                var str = "";
                for (var j in dRow[i]) {
                    if (j == 'id') continue;
                    str += dRow[i][j] + ",";
                }
                $("#addressDropdown").append('<option value=' + dRow[i].id + '>' + str + '</option>');
            };
            // $("#preaddress").attr('checked', 'checked')
        }
    });
}
//update billing address 
function updateCustomerAddress(customer) {
    var flag = true;
    // var order = getOrderDetail();
    var cardholderName = $('#cardholder-name').val();
    var address = "";
    var radioValue = $("input[name='selcaddresdel']:checked").val();
    if (radioValue == "eMaddress") {
        console.log("Enter  address manually");
        //validation for enter address mannually
        var bCountry = $("#billing_country").val();
        var postCode = $("#billingAddresspostCode").val();
        var city = $("#billingAddresscity").val();
        var phoneNumber = $("#phoneNumber").val();
        var billingAddressaddressLine1 = $("#billingAddressaddressLine1").val();
        var billingAddressaddressLine2 = $("#billingAddressaddressLine2").val();
        //validate billing address ( enter address ) 
        function validateEnterAddress() {
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
            } else if (phoneNumber == "") {
                $('#errorMessage').show();
                $('#errorMessage').html("Oops! Your phone number is empty");
                flag1 = false;
                return flag1;
            } else if (city == "") {
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
            } else {
                  var phoneNofilter = /^\d*(?:\.\d{1,2})?$/;
          if (phoneNofilter.test(phoneNumber)) {
            if(phoneNumber.length<20){
                 flag1 = true;
             } else {
                
               $('#errorMessage').show();
                $('#errorMessage').html("Oops! Your contact number  is not correct");
                flag1 = false;
                return flag1;
              }
            }
            else {
                $('#errorMessage').show();
                $('#errorMessage').html("Oops! Your contact number is not correct");
                flag1 = false;
                return flag1;
           }		
               return flag1;
            }
        }
        var f = validateEnterAddress();
        if (f == true) {
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
        } else {
            return false;
        }
    } else if (radioValue == "preaddress") {
        console.log("previous address");
        var addid = $("input[name='billName']:checked").val();
        console.log(" address selected (addid)=>" + addid);

        function validate() {
            var flag1 = true;
            if (addid === undefined || addid === null) {
                $('#errorMessage').show();
                $('#errorMessage').html("Oops ! you have not checked any address from previous addresses list ");
                flag1 = false;
                return flag1;
            } else {
                return flag1;
            }
        }
        var f = validate();
        console.log(f);
        if (f == true) {
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
                "customer": customer
            }
        } else {
            return false;
        }
    } else {
        $('#errorMessage').show();
        $('#errorMessage').html("Oops! you have not selected (or) enter  billing address");
        return false;
    }
    console.log('Upadate Customer Address...');
    var url;
    $.ajax({
        async: false,
        data: JSON.stringify(address),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: instanceurl_o + "/o/getmyparcel/stripe/address",
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
            console.log("Cusomer  Address Updated!");
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
                        console.log('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
                    },
                    success: function(data) {
                        console.log(data.message);
                    },
                });
            } else {
                console.log("previous address is used");
            }
        },
    });
    return flag;
}

function addCard() {
    $("#addCardModal").modal("show");
    $('#sucessMessage').hide();
    $('#errorMessage').hide();
    $('#sucessMsg').hide();
    $('#errorMsg').hide();
}
$('#card-button').bind('click', function(ev) {
	/*var $this = $(this);
	$this.toggleClass('btn btn-success');
	if($this.hasClass('btn btn-success')){
		$this.text('Make Payment');			
	} else {
		$this.toggleClass('btn btn-success');
		$this.text('saving card...');
		$('#card-button').prop('disabled', false);
	} */
    var cardholderName = $('#cardholder-name').val();
    if (cardholderName == "") {
        $('#errorMessage').show();
        $('#errorMessage').html("Oops! card holder name is empty");
        return false;
    }
	if(regex.test(cardholderName)== false)
	{
		 $('#errorMessage').show();
        $('#errorMessage').html("Oops! card holder name is not correct");
        return false;
	}
    console.log("cardholderName :" + cardholderName);
    //1. Create setupIntentId. 
    //Generated each time when page loads
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/getmyparcel/stripe/setupIntent',
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("==>Error thrown :" + errorThrown);
        },
        success: function(response) {
            setupIntent = response;
            console.log('Fetched setup intent: ' + response.id);
        },
    });
    console.log('handling card setup...');
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
            console.log(result.error.message);
            $('#errorMessage').show();
            $('#errorMessage').html("Oops! " + result.error.message);
        } else {
            console.log('Setup succeeded');
            console.log('Setup Intent Payment Method: ' + result.setupIntent.payment_method);
            pid = result.setupIntent.payment_method;
            sid = result.setupIntent.id;
            console.log(result);
            var order;
            var customer;
            $.when(
                customer = getStripeCustomer(),
            ).then(function() {
                console.log("==>  loading...");
            });
            if (customer.size > 0) {
                attachCustomer(pid, customer.customerid);
            } else {
                // create customer and make payment
                createCustomer(pid, cardholderName);
            }
        }
    });
});

function getBillingCountriesList() {
    //get list of country
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/o/getmyparcel/country/all',
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("==>Error thrown while retrieving country list:" + errorThrown);
        },
        success: function(data) {
            console.log('==>> Success in calling url ::' + instanceurl_o + '/o/getmyparcel/country/all , data :: ' + data);
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
//create new customer on stripe
function createCustomer(paymentMethod, cardholderName) {
    var jsondata = {
        "payment_method": paymentMethod,
        "name": cardholderName,
    }
    console.log('Creating customer...');
    $.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: instanceurl_o + "/getmyparcel/stripe/customer",
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
            //var d = JSON.parse(data); 						
            console.log("Cusomer  created!");
            //update customer address
            var flag = updateCustomerAddress(data.customer.id);
            if (flag == true) {
                //create payment intent
                console.log("Adddress updated successfully");
                addCardIndb(data);

            } else {
                //$('#errorMessage').show();
                //$('#errorMessage').html("please enter billing details");
                return false;
            }
            window.location.href = furl + "/u_payment.php";
        },
    });
}
//attach card to particualr email id
function attachCustomer(paymentMethod, customer) {
    var jsondata = {
        "customer": customer,
        "payment_method": paymentMethod,
    }
    console.log('attach customer start...');
    $.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: instanceurl_o + "/o/getmyparcel/stripe/attach",
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
            //var d = JSON.parse(data); 						
            console.log(data);
            console.log('add card start...');
            var flag = updateCustomerAddress(customer);
            if (flag == true) {
                //create payment intent
                console.log("Adddress updated successfully");
                addCardIndb(data);
            } else {
                // $('#errorMessage').show();
                //$('#errorMessage').html("please enter billing details");
                return false;
            }
            window.location.href = furl + "/u_payment.php";
        },
    });
}
//add card in database for future use
function addCardIndb(response) {
    console.log("==>Add Card Details :");
    var ed = response.card.exp_month + "/" + response.card.exp_year;
    var jsondata = {
        "cn": response.billing_details.name,
        "paymentmethodid": response.id,
        "customerid": response.customer.id,
        "ed": ed,
        "brand": response.card.brand,
        "cardno": response.card.last4,
        "setUpIntentId": sid
    }
    console.log('save card in db start...');
    $.ajax({
        async: false,
        data: JSON.stringify(jsondata),
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        type: 'POST',
        url: instanceurl_o + "/getmyparcel/stripe",
        error: function(jqXHR, textStatus, errorThrown) {
            console.log('error :: ' + jqXHR + '|' + 'textStatus' + '|' + errorThrown);
        },
        success: function(data) {
            //var d = JSON.parse(data); 						
            console.log(data.status);
            $('#errorMsg').hide();
            $('#sucessMsg').show();
            $('#sucessMsg').html("Card saved successfully.");
            var table = $('#cardDatatable').DataTable();
            table.ajax.reload();
            $("#addCardModal").modal("hide");
        },
    });
}
//get customer id for user
function getStripeCustomer() {
    var succeed = 0.0;
    var url = 0;
    url = instanceurl_o + '/getmyparcel/stripeCustomer';
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: url,
        error: function(jqXHR, textStatus, errorThrown) {
            $('#errorMessage').show();
            $('#errorMessage').html("Oops! " + response.error.message);
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
//Get payment Gateway
//var paymentProvider=url.searchParams.get("paymentProvider");
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
                "url": instanceurl_o + "/getmyparcel/cardList",
                "dataSrc": "",
                error: function(jqXHR, ajaxOptions, thrownError) {
                    $('#sucessMsg').hide();
                    $('#errorMsg').show();
                    $('#errorMsg').html("Oops! error while fetching card please contact admin");
                    console.log(thrownError + "\r\n" + jqXHR.statusText + "\r\n" + jqXHR.responseText + "\r\n" + ajaxOptions.responseText);
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
                      
                        return "<button  id='deleteCard' onclick='deleteCard(`" + rowObject.paymentmethodid + "`);'  tital='Delete Card'   class='btn btn-xs btn-danger'  > <i class='fa fa-trash'> </button>";;
                    }
                },
            ],
            columns: [{
                    data: "cn"
                },
                {
                    data: "brand"
                },
                {
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

    function deleteCard(paymentmethodid) {
        var r = confirm("Are you sure you want to delete this card");
        if (r == true) {
            var jsondata = {
                "paymentmethodid": paymentmethodid
            }
            $.ajax({
                url: instanceurl_o + "/getmyparcel/stripe",
                type: "DELETE",
                data: JSON.stringify(jsondata),
                cache: false,
                success: function(d) {
                    var data = JSON.parse(d);
                    console.log("==>stripe card deleted form stripe server and db");
                    console.log(data.status);
                    var table = $('#cardDatatable').DataTable();
                    table.ajax.reload();
                    var timer = setTimeout(function() {
                        $('#errorMsg').hide();
                        $('#sucessMsg').show();
                        $('#sucessMsg').html("Card removed successfully.");
                    }, 10);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log("==>Error thown while deleting stripe card form stripe server :" + errorThrown);
                    var timer = setTimeout(function() {
                        $('#sucessMsg').hide();
                        $('#errorMsg').show();
                        $('#errorMsg').html("Oops! error while deleting card please contact admin");
                    }, 10);
                }
            });
            return true;
        } else {
            return false;
        }
    }
} else {};
$(document).ready(function() {
    $.when(
        getBillingCountriesList(),
        getPreviousBillingAddresses(),
        getBillAdd(),
    ).then(function() {
        console.log("==> Page loading completed ...");
    });
});
var count = 1;
function incrementCount() {
    count++;
}
function getBillAdd() {
    var size;
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/getmyparcel/addresses/billing',
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("==>Error thrown :" + errorThrown);
        },
        success: function(data) {
            console.log('==>> Success in calling url ::');
            dRow = data.rows;
            var row = document.getElementById("myAddRow");
            // var x = row.insertCell(0);
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
            var hh = 0;
            var x;
            for (var i in dRow) {
                var str = "";
                for (var j in dRow[i]) {
                    if (j == 'id') continue;
                    str += dRow[i][j] + ",";
                }
                console.log(dRow[i]);
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
    });
}
function preAddress() {}
function selAddress(id) {
    $(".addDiv").css("background", "transparent");
    $(".addDiv").css("border", "transparent");
    document.getElementById(id).style.background = "rgb(200 231 247)";
    document.getElementById(id).style.border = "thin solid #554c75";
    $("#enterManuallyAddress").prop("checked", false);
    $("#preaddress").prop("checked", true);
}
</script>

</body>
</html>