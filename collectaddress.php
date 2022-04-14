<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
   header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
   header("Cache-Control: post-check=0, pre-check=0", false);
   header("Pragma: no-cache");
    ?>
	<title>Order Details Collection | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
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
	<!-- TBD: Values not appearing on fields, on submit enable client validation that fields are mandatory -->
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
			<li><a href="/products.php">Products</a></li>
            <li class="active">Your addresses</li>
          </ol>
        </div>
      </div>
      <div class="container">
		
        <div class="box-intro text-center">
          <h1 class="heading">Your Addresses</h1>
       
			
        </div>
 

        <div class="form-back-btn visible-xs">
          <a id="btnInstantQuote" class="btn btn-default" href="/products.php">Back</a>
        </div>

        
        <section class="custom-tab ">
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
		              <li>
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
		<section class="col-sm-12">
           <div id="errMsg" class="errorMsg" style="display: none;"></div>
		</section>	
		<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-8 col-sm-8 col-xs-12" >
			<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 pardetail">
				<h2>Parcel details</h2>
				<div id="parcelInfoDiv"></div>
		<br>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<label>Parcel content<span style="color: red;">*</span></label>
					<textarea rows="6" class="form-control shadotxt" id="parcelContent" placeholder="Enter Parcel Contents in Detail. For e.g. Suitcase1 : Shirts x 5 pieces, Pants x 12 pieces, Undergarments x 5 pieces (or) Engineering materials mentioned in Contents list & Provide a separate contents list document. This is needed by Customs in most countries to correctly calculate the Customs Import Duty and could be verified by Customs (if needed)."></textarea>
					<p>Refer List of <a href="https://www.getmyparcel.com/prohibiteditemstandc.gmp" target="_blank">Prohibited Items</a></p>
				</div>

			<div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label>Value<span style="color: red;">*</span></label>
					<div class="input-group">
					
					  <input   class="form-control shadotxt" id="parcelValue" type="text" placeholder="Parcel Value" />
										  
                     <span class="input-group-addon">£ </span>
                  </div>
					
				</div>
			</div>
			<?php 
			$tomorrow_timestamp = strtotime("+ 1 day");
			$tomorrow_date = date("Y-m-d", $tomorrow_timestamp);
			
			$end_timestamp = strtotime("+ 7 day");
			$end_date = date("Y-m-d", $end_timestamp);
			?>
			<div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<label>Preferred Collection Date<span style="color: red;">*</span></label>
				   <div class="input-group">
                <input type="text" class="form-control" onfocus="this.blur();" name="collectionDate" id="collectionDate" readonly="readonly">
                <span class="input-group-addon" id="addonBtn" style="cursor: pointer;"><i class="fa fa-calendar"></i></span>
				</div>
			</div>
			</div>
				
			<div class="insurance-info got-covered-block col-md-12 col-sm-12 col-xs-12" style="display: none"  id="insuranceDiv" >
		        <h5 class="insurance-info-title"><i class="icon-shield-check mr-3"></i>Full Cover - Recommended Option</h5>
		        <div class="insurance-content col-md-12 col-sm-12 col-xs-12" id="insuranceMsg">
		            <p class="short-info">We strongly recommend you cover your shipment for <strong>&pound;<span id="insuranceCostValue"></span> loss </strong> or damage for just <strong>&pound; <span id="insurancePercentValue"></span> exc VAT</strong></p>
		            <p> <i class="fa fa-info-circle" aria-hidden="true"></i> What is Enhanced cover and what's covered?</p>
		            <div class="col-md-12 col-sm-12 col-xs-12 radiowrap">
		            	<label><input type="radio" name="radio1" onclick="addInsurancePercent('yes');" value="yes">Yes please increase my cover.
		            		<div class="yes showhidediv">Enhanced cover entitles you to claim up to the stated value if your goods are lost or damaged in transit, However in the case of damage, it does not cover: 
		            			<ul>
		            				<li>Damage to any exterior packaging, such as suitcase wheels or handles</li>
		            				<li>Goods not packaged in accordance with our labelling and packaging guidelines</li>
		            				<li>Goods on our compensation exclusion item list</li>
		            			</ul>
		            		</div>
		            	</label>
		            	<label><input type="radio" name="radio1" value="no" onclick="addInsurancePercent('no');">No thanks, I accept the risk and confirm I'm not sending a compensation exclusion item.
		            		<div class="no showhidediv">If your goods are damaged, you will not be covered for:
		            			<ul>
		            				<li>Damage to any exterior packaging, such as suitcase wheels or handles</li>
		            				<li>Goods not packaged in accordance with our labelling and packaging guidelines</li>
		            				<li>Goods on our compensation exclusion item list</li>
		            			</ul></div>

		            	</label>
						
		            </div>
		        </div>
		    </div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 pardetail">
				<h2>Custom details</h2>
				<p> As your package  is being delivered internationally, we will need to generate custom documents for you, which will require the following details to allow your parcel to pass through customs.</p>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-4 col-sm-4 col-xs-12"><label>VAT Status :</label></div>
					<div class="col-md-8 col-sm-8 col-xs-12">
						<select class="form-control shadotxt vatselect" id="vatStatus">
							<option value="-1">Please Select your VAT status</option>
							<option value="Personal Individual">Personal Individual</option>
							<option value="Company - Non VAT Registered">Company - Non VAT Registered</option>
							<option value="Company - VAT Registered">Company - VAT Registered</option>
						</select>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 vatregi myopbox">
					<div class="col-md-4 col-sm-4 col-xs-12"><label>VAT Number :</label></div>
					<div class="col-md-8 col-sm-8 col-xs-12">
							<input type="text" id="vatNumber" class="form-control shadotxt">
						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12"><label>EORI Number :</label></div>
					<div class="col-md-8 col-sm-8 col-xs-12">
							<input type="text" id="eoriNumber" class="form-control shadotxt">
						
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-4 col-sm-4 col-xs-12"><label>Export reason :</label></div>
					<div class="col-md-8 col-sm-8 col-xs-12">                       
                        <select id="customexportreason-dropdown" name="customexportreason" class="form-control shadotxt">
							<option>Please select export reason</option>
				        </select>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="col-md-4 col-sm-4 col-xs-12"><label>Country of Origin :</label></div>
					<div class="col-md-8 col-sm-8 col-xs-12">              
                        <select id="manufacturingcountry-dropdown" name="manufacturingcountry" class="form-control shadotxt">
							<option selected="true" disabled>Please select manufacturing country</option>
				        </select>
					</div>
				</div>
				
			</div>
			  
          <div class="row">
         <!--  <section class="col-sm-12">
           <div id="errMsg" class="error collectAddErrMsg"></div>
		</section> -->		 
            <section class="col-md-12 col-sm-12 col-xs-12" >

             
				
              <div class="panel-product col-md-12 col-sm-12 col-xs-12">
              <h2 class="parcelcons">Sender Address</h2>
            	 <div class="form-group">
            	 	<p style="font-size: 19px;color: #1da6da;">
            	 	<input type="checkbox" name=""  class="ml10"  style="margin-top: 0;" id="addSurchargeConsignor">This is the Residential Address</p>
					 <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<div class="input-group">
							<input  name="collAddress.contactName" class="form-control  input-lg"  id="collAddresscontactName" type="text" placeholder="Contact Name" />
							<span class="input-group-addon">Name <span style="color:red;">*</span></span>
						</div>
					<br>	<div class="input-group">
							<input class="form-control input-lg" id="collAddressphoneNumber" type="text" placeholder="Contact number"/>
							<span class="input-group-addon">Phone <span style="color:red;">*</span></span>
						</div></br>
					</div>
					<br/>
					<input type="radio" name="selcaddres" class="ml10" value="selpreadd" id="selprevaddres">
            	 	<span class="radiotxt" id="">Select Previous Address</span>
	            	  <div id="sourceAddressGrid" class="col-sm-12 postcodfld selpreadd showhideadd mb10">
	                  <select id="addressDropdown" class="form-control" onclick="fillupform()">
	                    <option value="-1">Select Previous Sender Address</option>
	                  </select>
	                  
	                </div>
	              </div>
	             
               <!--  <div class="form-group">
                  <label for="coldate">Preferred Collection Date <span style="color:red;">*</span></label>
                  <div class="input-group collectionDate">
					
                    <input  name="collectionDate" class="form-control hasDatepicker" onfocus="this.blur();" id="collectionDate" type="text" readonly="readonly">
                    <span class="input-group-addon" id="addonBtn" style="cursor:pointer;"><i class="fa fa-calendar"></i></span>
					
                  </div>
                </div> -->
                <div class="clearfix"></div>
				<p class="text-center" id="orcol">OR</p>

				<div class="findadresdiv col-md-12 col-sm-12 col-xs-12 no-padding" id="findaddresscol">

					<input type="radio" name="selcaddres" class="ml10" value="findadd" >
						<span class="radiotxt">Find UK Address</span>
							<div class="postcodfld col-md-12 col-sm-12 col-xs-12 showhideadd findadd">
								<div class="col-md-8 col-sm-8 col-xs-12 no-padding">
									<input type="text" id="getConsignorLookup1"  class="form-control shadotxt" placeholder="Postcode">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 no-padding">
									<button id="btnConsignorLookup" class="lookupbtn btn">Lookup</button>
								</div>
								<select class="form-control shadotxt" id="selectLookUpAddress">
									
								</select>

							
							</div>
				

				</div>
				<div class="clearfix"></div>
              <p class="text-center">OR</p>

                <div class="findadresdiv col-md-12 col-sm-12 col-xs-12 no-padding">
                  <input type="radio" name="selcaddres" class="ml10" value="entmanuly" checked>
                  <span class="radiotxt">Enter Manually</span>
                  <div class="addrebar entmanuly showhideadd" style="display: block;">
                  
                  <br/>
                  <div class="input-group">
					<input   name="collAddress.addressLine1" class="form-control  input-lg"  id="collAddressaddressLine1" type="text" placeholder="Collection Address Line 1" /><br/>
					<span class="input-group-addon">Address Line 1 <span style="color:red;">*</span></span>
				   </div>
				   <br>
					<input  name="collAddress.addressLine2" class="form-control input-lg" id="collAddressaddressLine2" type="text" placeholder="Collection Address Line 2"/><br/>
                    

						<input   name="collAddress.addressLine3" class="form-control input-lg" id="collAddressaddressLine3" type="text" placeholder="Collection Address Line 3"/><br/>
					


                  <div class="input-group">
					
					  <input  name="collAddress.city"  class="form-control input-lg" id="collAddresscity" type="text" placeholder="Collection Address City"/>
										  
                     <span class="input-group-addon">City <span style="color:red;">*</span></span>
                  </div>
               <br/>
                

                 <div class="row">
                    <div class="form-group">
                      <div class="col-sm-8">
                        <label class="control-label" for="sourcecountry">Source Country</label>
						 
                        	<input type="text"   name="collAddress.country" class="form-control  input-lg" id="collAddresscountry"   placeholder="Collection Country" readonly="readonly" />
				  		</div>
						
                      <div class="col-sm-4">
                        <label class="control-label" for="postalcode">Post code <span id="colpost" style="color:red;">*</span></label>
						
						<input d="d" value="" name="collAddress.postCode" id ="collAddresspostCode" class="form-control input-lg"  type="text"  placeholder="PostCode"/>
						
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                <!-- <p>
                  <button type="button" id="btnClearSource" class="btn btn-info">Clear</button></p> -->

                
					<input name="collAddress.id" value="-1" style="margin-bottom: 15px;" id="collAddressid"  class="form-control"  type="hidden"  />
					</div>
				</div>
              </div>
            </section>
            
            <section class="col-md-12 col-sm-12 col-xs-12 " style=" margin-top: 24px;">
             

              <div class="clearfix"></div>
               <div class="panel-product2 col-md-12 col-sm-12 col-xs-12">
               
              <h2 class="parcelcons">Receiver Address</h2>
             
            	 <div class="form-group">
            	 	<p style="font-size: 19px;color: #1da6da;">
            	 	<input type="checkbox" name="" class="ml10"   style="margin-top: 0;"id="addSurchargeConsignee">This is the Residential Address</p>
					
					<div class="findadresdiv col-md-12 col-sm-12 col-xs-12 no-padding">
						<div class="input-group">
								<input   name="deliveryAddress.contactName" class="form-control input-lg"  id="deliveryAddresscontactName" type="text" placeholder="Delivery Address Contact Name"/>
							<span class="input-group-addon">Name <span style="color:red;">*</span></span>
						</div>
					<br>	<div class="input-group">
							<input   name="deliveryAddress.phoneNumber" id ="deliveryAddressphoneNumber" class="form-control input-lg"  type="text" placeholder="Delivery Contact Phone Number"  />
							<span class="input-group-addon">Phone <span style="color:red;">*</span></span>
						</div></br>
					</div>
					
					
            	 	<input type="radio" name="selcaddresdel" class="ml10" value="selpreaddel" id="selprevaddresdel" >
            	 	<span class="radiotxt">Select Previous Address</span>
            	 	<div id="destAddressGrid" class="col-sm-12 postcodfld selpreaddel showhideaddel mb10">
	                  <select  class="form-control" id="addressdlvDropdown">
	                    <option value="-1">Select previous receiver address</option>
	                  </select>
	                 
	                </div>

	            	  
	              </div>
	             
                <div class="clearfix"></div>
				<p class="text-center" id="ordel">OR</p>

				<div class="findadresdiv col-md-12 col-sm-12 col-xs-12 no-padding" id="findaddressdel">

					<input type="radio" name="selcaddresdel" class="ml10" value="findaddel" >
						<span class="radiotxt">Find UK Address</span>
							<div class="postcodfld col-md-12 col-sm-12 col-xs-12 showhideaddel findaddel">
								<div class="col-md-8 col-sm-8 col-xs-12 no-padding">
									<input type="text" id="getConsigneeLookup2" placeholder="Postcode" class="form-control shadotxt">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12 no-padding">
									<button id="btnConsigneeLookup"  class="lookupbtn btn">Lookup</button>
								</div>
								<select class="form-control shadotxt" id="selectLookUpAddress2">
									
								</select>

							
							</div>
				

				</div>
				<div class="clearfix"></div>
              <p class="text-center">OR</p>

                <div class="findadresdiv col-md-12 col-sm-12 col-xs-12 no-padding">
                  <input type="radio" name="selcaddresdel" class="ml10" value="entmanulydel" checked>
                  <span class="radiotxt">Enter Manually</span>
                  <div class="addrebar entmanulydel showhideaddel" style="display: block;">
				
                  <br>
                
                <div class="input-group">
                    
					                    
						<input   name="deliveryAddress.addressLine1" class="form-control input-lg"  id="deliveryAddressaddressLine1" type="text" placeholder="Delivery Address Line 1"/><br/>
					<span class="input-group-addon">Line 1 <span style="color:red;">*</span></span>
					</div>
					<br>

						<input  name="deliveryAddress.addressLine2" class="form-control input-lg" id="deliveryAddressaddressLine2" type="text" placeholder="Delivery Address Line 2"/><br/>
					

					  <input   name="deliveryAddress.addressLine3" id="deliveryAddressaddressLine3" class="form-control input-lg"  type="text" placeholder="Delivery Address Line 3"/><br/>
					
					
                    <div class="input-group">
					
					  <input   name="deliveryAddress.city" id="deliveryAddresscity" class="form-control input-lg"  type="text" placeholder="Delivery Address City" />
										  
                     <span class="input-group-addon">City <span style="color:red;">*</span></span>
                    </div>
					<br>
                 
                
               <div class="row">
                    <div class="form-group">
                      <div class="col-sm-8">
                        <label class="control-label" for="sourcecountry">Destination Country</label>
						
							<input type="text"   name="deliveryAddress.country" class="form-control input-lg"  id="deliveryAddresscountry"   placeholder="Delivery Address Country" readonly="readonly"/>
						
                      </div>

                      <div class="col-sm-4">
                        <label class="control-label" for="postalcode">Post code <span id="delpost" style="color:red;">*</span></label>
						
							<input  name="deliveryAddress.postCode" id ="deliveryAddresspostCode" class="form-control input-lg"  type="text"  placeholder="PostCode"/>
						
                      </div>
					  
					  	<input name="deliveryAddress.id" value="-1" style="margin-bottom: 15px;" id="deliveryAddressid"  class="form-control"  type="hidden"  />
					  
					  
                      <div class="clearfix"></div>
                    </div>
                  </div>

             </div>

                <!-- <p>
                  <button type="button" id="btnClearSource" class="btn btn-info">Clear</button></p> -->

                
				</div>
              </div>
             
            </section>
          </div>

        <div class="row">

          <section class="col-sm-12 col-xs-12">
			

	<div class="col-md-6 col-sm-6 col-xs-12"><a href="/products.php" class="backbtn btn"><i class="fa fa-angle-left" aria-hidden="true"></i> Back</a></div>
	<div class="col-md-6 col-sm-6 col-xs-12"><span class="pull-right"><button type="button" id="confirmAndProceed" name="confirmAndProceed" class="btn btn-success">Confirm &amp; Proceed</button></div>
	
	
          </section>
          
		
        </div>
        <br />

	
		</form>
			</div>
			
		</div>

		<div class="col-md-4 col-sm-4 col-xs-12 " >
			<div class="col-md-12 col-sm-12 col-xs-12 pardetail">
				
				<p class="headingbill" id="fromCountryName"><strong>From </strong>:  </p>
				<p class="headingbill" id="toCountryName"><strong>To </strong>: </p>
				
				<p class="headingbill" id="productName"><strong>Product </strong>: </p>

				<p class="headingbill" id="labelParcelInformation"><strong>Parcels List </strong>: </p>
				<div id="parcelInfomation"></div>
				<p class="headingbill" id="consideredWt"></p>
				<p class="border"></p>
				<h3 class="headingbill">Billing summary</h3>
				<p class="tcost"><span>Total Shipping cost</span><span class="fright" id="appliedCost">£ </span></p>
				<p class="tcost"><span>Insurance (exc VAT)</span><span class="fright" id="insuranceCharges"></span></p>
				<p class="tcost"><span>Discount</span><span class="fright"id="discount"></span></p>
				<div id="promo" class="PromoMsg col-sm-12">(Promocode : <span id="promocodeApplied"></span>)</div>
				<div  id="surchargediv"><p class= "tcost"> <span>Surcharge</span><span class="fright" id="surcharge"></span></p></div>
				<p class="tcost"><span>VAT</span><span class="fright" id="appliedVat"></span></p>
				<p class="border"></p>
				<p class="totlcost" style="font-size: 22px"><span >Total</span><span class="fright" id="appliedTotalAmount">£ </span></p>

			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 pardetail">
				<div id="errMsgPromoCodeApply" class="errorMsg col-sm-12"></div>
				<div id="successMsgPromoCodeApply" class="successMsg col-sm-12"></div>
				<div class="col-md-8 col-sm-8 col-xs-12 no-padding-right">
					<input type="text" name="promocode" placeholder="Enter PromoCode" id="promo_code" class="form-control promotxt">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 no-padding">
					<button class="btn apppro" id="applybutton">Apply</button>
				</div>
				
			</div>
		</div>
	<div class="row">
	        <div class="col-sm-12 col-xs-12">
	          <div class="well" style="width: 100%;">
	            * All rates are subject to Remote Area Surcharge and other Charges, depending upon the carrier. Once you raise the order, our customer service will let you know if there are any more charges based on your order. You will have an option to either continue with the order at that point in time after processing additional payment involved. Please refer to our <a href="/faq.gmp" target="_blank">FAQ's &gt; What is Remote Area Surcharge?</a> - to understand more about Remote area Surcharge and other charges that could be applicable.
	          </div>
	        </div>
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

var unitPreference = '<?php if(isset($_COOKIE["user_preference"])){ echo $_COOKIE["user_preference"]; } ?>';
var currency= '<?php if(isset($_COOKIE["preferred_currency"])){ echo $_COOKIE["preferred_currency"]; } ?>';
var beurl ="<?php echo  $config['INSTANCEURL'];?>";
    var feurl ="<?php echo  $config['FRONTENDURL'];?>";
    var instanceurl_o = beurl + "/api/v1/ui/getmyparcel";
	var instanceurl_open=beurl + "/api/v1/ui";
	var instanceurl="<?php echo $config['INSTANCEURL'];?>";
   	var apiKey= "<?php echo $config['ADDRESSLOOKUPAPIKEY'];?>";
if(unitPreference=='lb_in'){
		var weightUnit="lbs";
		var unit="in";
}else{
	var weightUnit="kgs";
	var unit="cm";
}
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


	$('#addressDropdown').select2();
	$('#addressdlvDropdown').select2();
	
	var addresses = JSON.parse('[]');
    var data = [];    
    processAddressDropdownData();        

	if (addresses.length == 0){
		$('#addressDropdown').hide();
	}	

    function processAddressDropdownData(){
    	for(var i in addresses){
    		var str = "";
            for (var j in addresses[i]){
                if(j=='id') continue;
                str += addresses[i][j] +",";
            }
    		$("#addressDropdown").append('<option value=' + addresses[i].id + '>'+ str + '</option>');
        }
    }

	var insurancePercent;

	// Default Page behaviour 
	$('.isa_error').hide();
	disableAddress();
	
	$(document).scroll(function() {
	  let y = $(this).scrollTop();
	  if (y > 2000) {
		$('.sidenav').css('display', 'none',);
	  } else {
		$('.sidenav').css('display', 'block');
	  }
	});
	
	$(function() {
		var offset = $(".sidenav").offset();
		var topPadding = 15;
		$(window).scroll(function() {
			if ($(window).scrollTop() > offset.top) {
				$(".sidenav").stop().animate({
					marginTop: $(window).scrollTop() - offset.top + topPadding
				});
			} else  {
				$(".sidenav").stop().animate({
					marginTop: 0
				});
			};
		});
	})

	var parcelTypeUrl = instanceurl+'/api/v1/ui/masterdata/parcelType';

	
	// -- Core URLs 
	
	
	
	function getCurrency(){
			$.ajax({
		type: 'GET',
		dataType: 'json',
		url: instanceurl+"/api/v1/ui/currency/"+currency,
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
	// Field Binds
$(document).ready(function(){

	
	$('#parcelValue').keyup(function() {
		// if the value (from API) is less than the value then show the additional box-intro
		// this box should have insurance values calculated
		var minInsuranceValue = sessionStorage.getItem("MinOrderInsurance");
		var value = parseInt($('#parcelValue').val());
		if (value >= parseInt(minInsuranceValue)){
			$("#insuranceDiv").show();
		} else {
			$("#insuranceDiv").hide();
		}
		
	var cost =calculatePercent(sessionStorage.getItem("insurancePercent"), 	$('#parcelValue').val());
		$("#insuranceCostValue").text($('#parcelValue').val());
		$("#insurancePercentValue").text(cost);
		
	 });
	
	   
	 
	 
	$('#addonBtn').click(function(){
		$(document).ready(function(){
			$("#collectionDate").focus();
		});
	});
	
	if($('#collectionDate').val().length == 10){
		$('#collectionDate').trigger('change');
	}

	$('#applybutton').bind('click', function() {
		var code = $('#promo_code').val();
		$.ajax({
			url : instanceurl_o + "/promocode/" + code,
			type : 'POST',
			cache : false,
			success : function(d) {
				if(d){
					html(currencySymbol + d.appliedTotalAmount*exchangeRate);
					var discountResponse = JSON.parse(d);
					var discountPercent = discountResponse.amount;
					logDebugMsg('==> Promo Code applied : ' + discountResponse);
					if (parseFloat(discountPercent) > 0){
						// i.e. no errors and promocode was valid
						$('#successMsgPromoCodeApply').text("Discount applied Successfully - " + code);
						$('#successMsgPromoCodeApply').show();
						$('#successMsgPromoCodeApply').fadeOut(15000);
						//calculateDiscount(discountPercent);
					$("#discount").html(currencySymbol+ " -"+discountResponse.discount*exchangeRate);
					$("#appliedTotalAmount").html(currencySymbol+discountResponse.total*exchangeRate);
						$('#promo').show();
						$("#promocodeApplied").text(code);
						$("#promocodeAppliedMobile").text(code);
						
					} else {
						// Invalid promocode
						var message = discountResponse.message;
						$('#errMsgPromoCodeApply').text("Promocode couldnt  be applied "  + message);
						$('#errMsgPromoCodeApply').show();
						$('#errMsgPromoCodeApply').fadeOut(15000);
					}
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
				$('#errMsgPromoCodeApply').text("Promocode couldnt  be applied - " + errorThrown);
				$('#errMsgPromoCodeApply').show();
			}
		});
	});
	$('#successMsgPromoCodeApply').hide();
	$('#errMsgPromoCodeApply').hide();
	$('#promo').hide();
	
		$('#applybuttonmobile').bind('click', function() {
		var code = $('#promo_codeMobile').val();
		$.ajax({
			url : instanceurl_o + "/promocode/" + code,
			type : 'POST',
			cache : false,
			success : function(d) {
				if(d){
					var discountResponse = JSON.parse(d);
					var discountPercent = discountResponse.amount;
					logDebugMsg('==> Promo Code applied : ' + discountResponse);
					if (parseFloat(discountPercent) > 0){
						// i.e. no errors and promocode was valid
						$('#successMsgPromoCodeApply').text("Discount applied Successfully - " + code);
						$('#successMsgPromoCodeApply').show();
						$('#successMsgPromoCodeApply').fadeOut(15000);
						//calculateDiscount(discountPercent);
					$("#discountMobile").text("£ -"+discountResponse.discount);
					$("#appliedTotalAmountMobile").text("£ "+discountResponse.total);
						$('#promo').show();
						$("#promocodeAppliedMobile").text(code);
						
					} else {
						// Invalid promocode
						var message = discountResponse.message;
						$('#errMsgPromoCodeApply').text("Promocode couldnt  be applied "  + message);
						$('#errMsgPromoCodeApply').show();
						$('#errMsgPromoCodeApply').fadeOut(15000);
					}
				}
				
			},
			error: function (jqXHR, textStatus, errorThrown) {
				$('#errMsgPromoCodeApply').text("Promocode couldnt  be applied - " + errorThrown);
				$('#errMsgPromoCodeApply').show();
			}
		});
	});
	
	function calculateDiscount(discountPercent){
	                var appliedTotalAmt = $("#appliedTotalAmount").text();
					var stripTotal=calculateStripTotal(appliedTotalAmt);
                    var totaldiscount = Math.round(parseFloat( (stripTotal * (discountPercent / 100)))).toFixed(2);
					$("#discount").text("£ -"+totaldiscount);
					appliedTotalAmt = parseFloat(appliedTotalAmt.substring(2, 7)) - parseInt(totaldiscount);
					$("#appliedTotalAmount").text("£ "+appliedTotalAmt);
					}
	

	$("#colAddrLookupTrigger").click(function(){
		var val = $("#colAddrLookup").val();
		$("#colAddrLookup").autocomplete('search`', val);
    });
	
	
	$("#delAddrLookupTrigger").click(function(){
		var val = $("#delAddrLookup").val();
		$("#delAddrLookup").autocomplete('search', val);
    });


    $('.radiowrap input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".showhidediv").not(targetBox).hide();
        $(targetBox).show();
    });

    $('.panel-product input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".showhideadd").not(targetBox).hide();
        $(targetBox).show();
    });

    $('.panel-product2 input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".showhideaddel").not(targetBox).hide();
        $(targetBox).show();
    });

    $(".vatselect").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".myopbox").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".myopbox").hide();
            }
        });
    }).change();
	
	
	// Address lookup for Consignor
	$("#btnConsignorLookup").click(function(){
		var postcode;
		var consignorpostcode = $("#getConsignorLookup1").val();
		if(consignorpostcode != ''){
			postcode = $("#getConsignorLookup1").val();
		}else{
			postcode = $("#getConsigneeLookup2").val();
		}
		var key ="<?php echo  $config['ADDRESSKEY'];?>";
		 var instanceurl="<?php echo  $config['INSTANCEURL'];?>";
		 $.ajax({
				type: 'GET',
				dataType: 'json',
				//data: {},
				url: 'https://api.getAddress.io/find/'+postcode+'?api-key='+key,
				error: function (jqXHR, textStatus, errorThrown) {
					logDebugMsg('==>> Error in calling url ::' + 'https://api.getAddress.io/find/'+postcode + ' , error :: '+jqXHR + '|' + textStatus + '|' + errorThrown);
				},
				success: function (data) {
				  $.each(data.addresses, function (key, entry) {
					logDebugMsg(entry);
					var chkAdd = $("#getConsignorLookup1").val();
					if(chkAdd != ''){
						$("#selectLookUpAddress").append($('<option></option>').attr('value', entry).text(entry));
					}else{
						$("#selectLookUpAddress2").append($('<option></option>').attr('value', entry).text(entry));
					}	
				});
			}
		});
	});
	
	// Address lookup for Consignee
	$("#btnConsigneeLookup").click(function(){
		var postcode = $("#getConsigneeLookup2").val();
		var key ="<?php echo  $config['ADDRESSKEY'];?>";
		 $.ajax({
				type: 'GET',
				dataType: 'json',
				//data: {},
				url: 'https://api.getAddress.io/find/'+postcode+'?api-key='+key,
				error: function (jqXHR, textStatus, errorThrown) {
					logDebugMsg('==>> Error in calling url ::' + 'https://api.getAddress.io/find/'+postcode + ' , error :: '+jqXHR + '|' + textStatus + '|' + errorThrown);
				},
				success: function (data) {
					  $.each(data.addresses, function (key, entry) {
						$("#selectLookUpAddress2").append($('<option></option>').attr('value', entry).text(entry));
					})       	
				} 
			});
	});
	
	
	$("#confirmAndProceed").click(function(){
		var status = true;
		
		if (status) status = validateEmpty('#parcelContent', 'Parcel Content is Mandatory');
		if (status) status = validateEmpty('#parcelValue', 'Parcel Value is Mandatory');
		if (status) status = validateEmpty('#collectionDate', 'Preferred Collection Date is Mandatory');
		
		var consignorAddressRadioSelection = $('input[name="selcaddres"]:checked').val();
		var consigneeAddressRadioSelection = $('input[name="selcaddresdel"]:checked').val();
		
		// validate Username and Phone Number - Consignor
		if (status) status = validateEmpty('#collAddresscontactName','Sender Contact Name is Mandatory');
		if (status) status = validateEmpty('#collAddressphoneNumber', 'Phone number of Sender Contact is Mandatory');
		if (status) status = validatePhoneNumber('#collAddressphoneNumber', 'Phone number of Sender Contact is not Valid');
		
		// validate Username and Phone Number - Consignee
		if (status) status = validateEmpty('#deliveryAddresscontactName','Receiver Contact Name is Mandatory');
		if (status) status = validateEmpty('#deliveryAddressphoneNumber', 'Phone number of Receiver Contact is Mandatory');
		if (status) status = validatePhoneNumber('#deliveryAddressphoneNumber', 'Phone number of Receiver Contact is not Valid');
		
		
		// Consignor - validation if "Find Address" 
		if(consignorAddressRadioSelection=='findadd'){
		if (status) status = validateEmpty('#selectLookUpAddress','Sender Look Up Address is not Selected');
		if(status==true){
		var selectedConsignorAddress = $('#selectLookUpAddress').val();
		
		//  -- split to populate the Address line1,2,3,city + Postcode from lookup field
		// -- ensure id is -1
		var res = selectedConsignorAddress.split(",");
		$("#collAddressaddressLine1").val(res[0]);	
		$("#collAddressaddressLine2").val(res[1]);
		$("#collAddressaddressLine3").val(res[2]);
		$("#collAddresscity").val(res[5]);
		$("#collAddresspostCode").val($("#getConsignorLookup1").val());
		}
		}
		// Consignee - validation if "Find Address" 
		if(consigneeAddressRadioSelection=='findaddel'){
		if (status) status = validateEmpty('#selectLookUpAddress2','Receiver Look Up Address is not Selected');
		if(status==true){
		var selectedConsigneeAddress = $('#selectLookUpAddress2').val();
		// -- split to populate the Address line1,2,3,city + Postcode from lookup field
		// -- ensure id is -1
		var array = selectedConsigneeAddress.split(",");
	    $("#deliveryAddressaddressLine1").val(array[0]);
		$("#deliveryAddressaddressLine2").val(array[1]);
	    $("#deliveryAddressaddressLine3").val(array[2]);
		$("#deliveryAddresscity").val(array[5]);
		$("#deliveryAddresspostCode").val($("#getConsigneeLookup2").val());
		}
		}
		
		// Consignor - Previous address
		// get the Adddress Id - validate that the value id is is not -1
		if(consignorAddressRadioSelection=='selpreadd'){
		if (status) status = validateUnallowedValue('#addressDropdown', "-1", ' Please Choose a Previous Sender Address');
		if(status==true){
		var selectedConsignorAddress=$('#addressDropdown').val();
        $("#collAddressid").val(selectedConsignorAddress);
		}
		}
				
		// Consignee - Previous address
		// get the Adddress Id - validate that the value of Id is not -1
		if(consigneeAddressRadioSelection=='selpreaddel'){
			if (status) status = validateUnallowedValue ('#addressdlvDropdown', "-1", ' Please Choose a Previous Receiver Address');
		if(status==true){
		var selectedConsigneeAddress=$('#addressdlvDropdown').val();
		$("#deliveryAddressid").val(selectedConsigneeAddress);
		}
		}

		// Validation if "Enter Manually is selected"
		
			
		if(consignorAddressRadioSelection=='entmanuly'){	
		if (status) status = validateEmpty('#collAddressaddressLine1','Sender Address line 1 are Mandatory');

		if (status) status = validateEmpty('#collAddresscity','Sender Address City is Mandatory');
      if($("#colpost").is(":visible")){
		if (status) status = validateEmpty('#collAddresspostCode','Sender PostCode is Mandatory');
        }
		
		}

		if(consigneeAddressRadioSelection=='entmanulydel'){
		if (status) status = validateEmpty('#deliveryAddressaddressLine1','Receiver Address line 1 is Mandatory');
		
		if (status) status = validateEmpty('#deliveryAddresscity','Receiver City is Mandatory');
       if($("#delpost").is(":visible")){
		if (status) status = validateEmpty('#deliveryAddresspostCode','Consignee PostCode is Mandatory');	
		}
		}
		
		if (!status) return false;
		
		var $this = $(this);
		$this.toggleClass('btn btn-success');
		if($this.hasClass('btn btn-success')){
			$this.text('Confirm & Proceed');			
		} else {
			$this.toggleClass('btn btn-success');
			$this.text('Please wait, processing and going to next page ...');
			$('#confirmAndProceed').prop('disabled', true);
		}
		
		getParcelType();

		var jsondata = {
					"collAddress": {
						"id": $("#collAddressid").val(),
						"addressLine1": $("#collAddressaddressLine1").val(),
						"addressLine2": $("#collAddressaddressLine2").val(),
						"addressLine3": $("#collAddressaddressLine3").val(),
						"city": $("#collAddresscity").val(),
						"county": $("#collAddresscounty").val(),
						"postCode": $("#collAddresspostCode").val(),
						"country": $("#collAddresscountry").val(),
						"phoneNumber": $("#collAddressphoneNumber").val(),
						"contactName": $("#collAddresscontactName").val(),
						"residentialSurcharge":consignorSurchargeRequired
					
					},
					"deliveryAddress": {
						 "id": $("#deliveryAddressid").val(),
							"addressLine1": $("#deliveryAddressaddressLine1").val(),
							"addressLine2": $("#deliveryAddressaddressLine2").val(),
							"addressLine3": $("#deliveryAddressaddressLine3").val(),
							"city": $("#deliveryAddresscity").val(),
							"county": $("#deliveryAddresscounty").val(),
							"postCode": $("#deliveryAddresspostCode").val(),
							"country": $("#deliveryAddresscountry").val(),
						"phoneNumber": $("#deliveryAddressphoneNumber").val(),
						"contactName": $("#deliveryAddresscontactName").val(),
							"residentialSurcharge":consigneeSurchargeRequired
				},
					"customsInfo": {
						"vatStatus": $("#vatStatus").val(),
							"vatNumber": $("#vatNumber").val(),
							"eoriNumber": $("#eoriNumber").val(),
							"exportReason": $("#customexportreason-dropdown option:selected").text(),
							"manufactureIn": $("#manufacturingcountry-dropdown option:selected").text(),
					},
					"collectionDate": $("#collectionDate").val(),
					"parcelcontent": $("#parcelContent").val(),
					"parcelvalue": $("#parcelValue").val(),
					"parcelTypeArray": parcelTypeArray,
					"insuranceNeeded" : insuranceNeeded,
					
				
				}

           		logDebugMsg(JSON.stringify(jsondata));
				$.ajax({
					url: instanceurl_o + "/order/details",
					type:"POST",
					data: JSON.stringify(jsondata),
					success:function(data)
					{
						
						logDebugMsg(data);
						logDebugMsg(JSON.stringify(jsondata));
				 		window.location.href = feurl + "/getconfirmations.php";
					}
				});
	 }); 
});

	var consignorSurchargeRequired = "N";
	var consigneeSurchargeRequired = "N";
	$('input[type="checkbox"]').click(function(){
	   logDebugMsg("check box checked");
	//    if ($(this).attr('id') == "addSurchargeConsignor"){
      if($('#addSurchargeConsignor').prop("checked") == true){
		  consignorSurchargeRequired="Y";
	  }
	  else{
		  consignorSurchargeRequired="N";
	  }
			      if($('#addSurchargeConsignee').prop("checked") == true){
		  consigneeSurchargeRequired="Y";
	  }
	  else{
		  consigneeSurchargeRequired="N";
	  }
			 
            logDebugMsg("Consignor Checkbox is checked.");
           // insuranceNeeded = "Y";
        	
            $.ajax({
                type: 'GET',
                dataType: 'json',
               url: instanceurl_o + '/order/price/residential/'+consignorSurchargeRequired+'/'+consigneeSurchargeRequired,
                error: function (jqXHR, textStatus, errorThrown) {
                    logDebugMsg('==>> Error in calling url ::' + instanceurl+'/api/v1/ui/o/getmyparcel/order/price/consignorresidential/'+consignorSurchargeRequired  + ' , error :: '+jqXHR + '|' + textStatus + '|' + errorThrown);
                },
                success: function (data) {
					logDebugMsg("success");
					$("#surcharge").text("£ "+data.amount);
					$("#appliedTotalAmount").text("£ "+data.total);
					if(data.amount!=0.0){
						//calculatesurcharge(data.amount);
						$("#surchargediv").show();
					}
					else{
						$("#surchargediv").hide();
                }
				}
            });
       // }
	});
		
	
	
	function calculateStripTotal(total){
		var StripTotal;
		if(total.includes("£"))
		{
			StripTotal = total.substring(2,7);
		}else{
			StripTotal=total
		}
		return StripTotal;
	}

	var insuranceNeeded = "N";
	function addInsurancePercent(val){
	  if (val=='yes'){
		  insuranceNeeded = "Y";
	  }else{ insuranceNeeded = "N";}
		//var insuranceStatus="false";
		var parcelAmount = $("#parcelValue").val();
		var appliedTotalAmt = $("#appliedTotalAmount").text();
		var totalInsuranceAmt = 0;
		
	     var insuranceUrl = instanceurl_o + '/insurancePercent/'+parcelAmount+'/'+insuranceNeeded;
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: insuranceUrl,
			error: function (jqXHR, textStatus, errorThrown) {
				logDebugMsg('==>> Error in calling url ::' + insuranceUrl  + ' , error :: '+jqXHR + '|' + textStatus + '|' + errorThrown);
			},
			success: function (data) {
				
				var insurancePercent = parseFloat(data.amount);
				if( (insurancePercent) && (insurancePercent != 0)){	
					$("#appliedTotalAmount").html(currencySymbol +appliedTotalAmount*exchangeRate);;					
					$("#insuranceCharges").html(currencySymbol +data.insuranceAmount*exchangeRate);
					  if(insuranceNeeded=='Y'){
					$("#insurancePercentValue").text(data.insuranceAmount);
					  }
					  if(insuranceNeeded=='N'){
					$("#insurancePercentValue").text("0");
					  }
					$("#appliedTotalAmount").html(currencySymbol+data.total*exchangeRate);
				}else{
				
					$("#appliedTotalAmount").html(currencySymbol+data.total*exchangeRate);
					$("#insuranceCharges").html(currencySymbol+" 0");
				}
			
				if(val=="no"){
					//var totalAppliedCost = $("#appliedCost").text();
					//$("#appliedTotalAmount").text(totalAppliedCost);
					$("#insuranceCharges").html(currencySymbol+" 0");;
				}
			}
		});
	}
	
	// Load Dropdowns
	var addresses = '';
	var dlvaddresses = '';
	var partyaddresses = ''; 
	var parcelListCount = 0;	
	  var d = new Date();
	d.setDate(d.getDate()+1);
	var senderDetails=[];
	var receiverDetails=[];
	
	$(function () {
		//setup an array of AJAX options,
		//each object will specify information for a single AJAX request
		var ajaxes  = [
				{
					// get Quote Details
					type : 'GET',
					dataType : 'json',
					url : instanceurl_o + "/order/details",
					callbackError : function(jqXHR, textStatus, errorThrown) {
						// logging happens anyways
					},
					callback : function(data) {
						logDebugMsg(data);
						var d = data;
						if (d) {
							
							$("#productName").html("<strong>Product </strong>: "+ d.productName);
							$("#appliedVat").html(currencySymbol +d.appliedVat);
							$("#appliedCost").html(currencySymbol + d.appliedCost*exchangeRate);
							$("#appliedTotalAmount").html(currencySymbol + d.appliedTotalAmount*exchangeRate);
							$("#productNameMobile").html("<strong>Product </strong>: "+ d.productName);
							$("#appliedVatMobile").text('£ ' +d.appliedVat);
							$("#appliedCostMobile").text('£ ' + d.appliedCost);
							$("#appliedTotalAmountMobile").text('£ ' + d.appliedTotalAmount);
							$("#fromCountryName").html("<strong>From </strong>: " + d.sourceCountryName);
							$("#fromCountryNameMobile").html("<strong>From </strong>: " + d.sourceCountryName);
							$("#collAddresscountry").val(d.sourceCountryName);
							$("#toCountryName").html("<strong>To </strong>: "+ d.destinationCountryName);
							$("#toCountryNameMobile").html("<strong>To </strong>: "+ d.destinationCountryName);
							if(unitPreference=='kg_cm'){
							$("#consideredWt").html("<strong>Considered Weight </strong>: "+ d.consideredWeight + " kgs");
							$("#consideredWtMobile").html("<strong>Considered Weight </strong>: "+ d.consideredWeight + " kgs");
							}else{
							$("#consideredWt").html("<strong>Considered Weight </strong>: "+ d.consideredWeightLb + " lbs");
							$("#consideredWtMobile").html("<strong>Considered Weight </strong>: "+ d.consideredWeightLb + " lbs");
							}
							$("#deliveryAddresscountry").val(d.destinationCountryName);
							if(d.appliedDiscount>0)
							{
							$("#discount").text('£ ' +"-"+d.appliedDiscount);
							$("#discountMobile").text('£ ' +"-"+d.appliedDiscount);
							}
							else
							{
							 $("#discount").html(currencySymbol +d.appliedDiscount);
							 $("#discountMobile").text('£ ' +d.appliedDiscount);
							}
							//$("#insuranceCharges").text('£ 0');
                            $("#insuranceCharges").html(currencySymbol + d.insuranceAmount);
							$("#insuranceChargesMobile").text('£ ' + d.insuranceAmount);
	                        hideFindAddress(d.sourceCountryId,d.destinationCountryId);
							getcountrydetails(d.sourceCountryId,d.destinationCountryId);
				            if(d.residentialSurcharge == "0.0"){		
	                         $("#surchargediv").hide();
				                  }
				            else{
					       $("#surchargediv").show();
					       $("#surcharge").text("£" + d.resiSurcharge);
						   $("#surchargeMobile").text("£" + d.resiSurcharge);
				           }
							var count = 0;
							parcelListCount = d.parcelInfoList.length;
							$.each(d.parcelInfoList,function(key, entry) {
												// Build the info in right side panel
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
												$("#parcelInfomation").append(
																"<p>"
																		+ q
																		+ " Parcel X "
																		+ dw
																		+ " "+weightUnit+" ("
																		+ l
																		+ " "+unit+" X "
																		+ w
																		+ " "+unit+" X "
																		+ h
																		+ " "+unit+")</p>");
												$("#parcelInfomationMobile").append(
																"<p>"
																		+ q
																		+ " Parcel X "
																		+ dw
																		+ " "+weightUnit+" ("
																		+ l
																		+ " "+unit+" X "
																		+ w
																		+ " "+unit+" X "
																		+ h
																		+ " "+unit+")</p>");					
												// Build the info in the parcel type choice panel
												var id = "parceltype-dropdown" + count;
												parcelTypeCount = count;
												$("#parcelInfoDiv").append( '<div id="parcellist" class="form-group"><div class="col-md-6 col-sm-6 col-xs-12"><input type="text" name="" value="'
																		+ l
																		+ ' '+unit+' X '
																		+ w
																		+ ' '+unit+'  X '
																		+ h
																		+ ' '+unit+' ( #'
																		+ q
																		+ ' Quantity)" class="form-control shadotxt"></div></div><div class="form-group"><div class="col-md-6 col-sm-6 col-xs-12">'
																		+ ' <select id="'
																		+ id
																		+ '" name="parceltype-dropdown" class="form-control shadotxt parceltype-dd"><option selected="true" disabled>Please Select your Parcel Type</option></select></div></div>');
												count++;
												parcelTypeCount = count;
											})

						//	getCountryDetailsDest(d.destinationCountryId);

						}
						logDebugMsg('==>> Success in calling url ::'+ instanceurl_o + '/order/details' + ' , data :: '+ data);
					}
				},
				{
					// getConsigneeAddress
					type: 'GET',
					dataType: 'json',
					url: instanceurl_o + '/addresses/consignee',
					callbackError: function (jqXHR, textStatus, errorThrown) {
						
					},
					callback: function (data) {
						if(data){
                           $.each(data, function (key, entry) {
								dlvaddresses = data;
								receiverDetails.push(data[key].id,data[key].contactName,data[key].phoneNumber);
								$("#addressdlvDropdown").append($('<option></option>').attr('value', data[key].id ).text(data[key].contactName +', '+ data[key].addressLine1 +', '+ data[key].addressLine2 +', '+ data[key].addressLine3 +', '+ data[key].city +', '+ data[key].country +', '+ data[key].postCode +', '+ data[key].phoneNumber));
							})
							logDebugMsg(data);
						}
					}
				},				
				{
					// getConsignorAddress
					url: instanceurl_o + '/addresses/consignor',
					type: 'GET',
					dataType: 'json',
					callback : function (data) { 
					logDebugMsg("getConsignorAddress");
						logDebugMsg(data);
						addresses = data;
							$.each(data, function (key, entry) {
								senderDetails.push(data[key].id,data[key].contactName,data[key].phoneNumber),
							$("#addressDropdown").append($('<option></option>').attr('value', data[key].id ).text(data[key].contactName +', '+ data[key].addressLine1 +', '+ data[key].addressLine2 +', '+ data[key].addressLine3 +', '+ data[key].city +', '+ data[key].country +', '+ data[key].postCode +', '+ data[key].phoneNumber));
						});
						logDebugMsg(data);
					},
					callbackError : function (jqXHR, textStatus, errorThrown) {
						// logging happens anyways
					}
				},
				{
					// get Min Order Insurance
					type: 'GET',
					dataType: 'json',
					url: instanceurl_o + '/minOrderInsurance',
					callbackError: function (jqXHR, textStatus, errorThrown) {
						
					},
					callback: function (data) {
						if(data){
							var amt = data.amount;
							var type = data.type;
							sessionStorage.setItem("MinOrderInsurance",data.amount);
						}
					   logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/minOrderInsurance'  + ' , data :: '+data);
					},
					callbackError : function (jqXHR, textStatus, errorThrown) { 
						// logging happens anyways
					}
				},
				{
					 // getCustomsExportReasonsmasterdata
					 type: 'GET',
					 dataType: 'json',
					 url: instanceurl+'/api/v1/ui/masterdata/CustomsExportReasons',
					 error: function (jqXHR, textStatus, errorThrown) {
						 logDebugMsg('==>> Error in calling url ::' + instanceurl+'/api/v1/ui/masterdata/CustomsExportReasons'  + ' , error :: '+jqXHR + '|' + textStatus + '|' + errorThrown);
					 },
					 callback: function (data) {
						logDebugMsg('==>> Success in calling url ::' + instanceurl+'/api/v1/ui/masterdata/CustomsExportReasons'  + ' , data :: '+data);
						if(data){
							 logDebugMsg(data);
							 for (var i=0;i < data.length; i++){
								$('#customexportreason-dropdown').append($('<option></option>').attr('key', data[i].key).text(data[i].label));
							 }
						}
					 },
					 callbackError : function (jqXHR, textStatus, errorThrown) { 
						// logging happens anyways
					 }
				},
				{
					// getManufacturingCountrymasterdata
					type: 'GET',
					dataType: 'json',
					url: instanceurl_o + "/country/all",
					callbackError: function (jqXHR, textStatus, errorThrown) {
						// logging happens anyways
					},
					callback: function (countrydata) {
					   logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/o/country/destination , data :: '+countrydata);
					   if(countrydata){
						var count = 0;
						$.each(countrydata.rows, function (key, entry) {                	
							$("#manufacturingcountry-dropdown").append($('<option></option>').attr('value', entry.cell[0]).text(entry.cell[1]));
							count++;
						})
					   }
					}
				},
				{
					// get insurance percent value	
					type: 'GET',
					dataType: 'json',
					url:  instanceurl_o + '/insurancePercent/',
					callbackError: function (jqXHR, textStatus, errorThrown) {
						 // logging happens anyways
					},
					callback: function (data) {
						insurancePercent = parseInt(data.amount);
						sessionStorage.setItem("insurancePercent",insurancePercent);
					}  
				},
				
				{
					// getParcelTypemasterdata
					// This should come after the quote details where this dropdown is built
					type: 'GET',
					dataType: 'json',
					url: instanceurl+'/api/v1/ui/masterdata/parcelType',
					callbackError: function (jqXHR, textStatus, errorThrown) {
					  // logging happens anyways
					},
					callback: function (data) {
					 logDebugMsg('==>> Success in calling url ::' + instanceurl+'/api/v1/ui/masterdata/parcelType'  + ' , data :: '+data);
					 if(data){
						 logDebugMsg('=> Number of parcels'+parcelListCount);
						 for (var currentParcelCount=0; currentParcelCount<parcelListCount;currentParcelCount++){
							 //var count = 0;
							 $.each(data, function (key, entry) {
								logDebugMsg("=> Parcel Type : " + entry.key+":" +entry.label);
								$('#parceltype-dropdown'+currentParcelCount).append($('<option></option>').attr('key', entry.key).text(entry.label));

								//count++;
							 });
							 logDebugMsg("=> Parcel Type options count : " + $('#parceltype-dropdown0 option').length);
						 }
					 }
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
						 logDebugMsg('==>> Error in calling url ::' + ajaxes[current].url + ' , error :: '+jqXHR + '|' + textStatus + '|' + errorThrown);
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


    // Calculations & Utilities
    function calculatePercent(percent, num){
        return (percent / 100) * num;
    }
         
	//$('#collectionDate').datepicker({format: "yyyy-mm-dd", autoclose:true, todayHighlight: true}).attr('readonly','readonly');
	
	
         
	function disableAddress(){
		if($("#id").val() != "-1"){
			$('form [d=d]').attr('readonly','readonly');
		}

		if($("#dlvAddressId").val() != "-1"){
			$('form [d=dl]').attr('readonly','readonly');
		}
	}
	
    var parcelTypeCount = 0;     

   var parcelTypeArray=[];
  
	function getParcelType(){
		 if(parcelTypeCount == 0){
			 parcelTypeCount = 1;
		 }
		 var len=parcelTypeCount-1;
		 for(var i=0; i<=len; i++){
			var id = "parceltype-dropdown"+i;
			parcelTypeArray.push($("#"+id+" option:selected").val());
		} 
	
	}

    //  ---- Post Code based Address Lookup ---
    /* let us save in localstorage just to avoid repeated api calls */
    var addressLooks = {};
  
    var ls = window.localStorage;
    if(ls.getItem("lookUpAddresses") && ls.getItem("lookUpAddresses") !=null){
    	logDebugMsg(':::: ' + ls.getItem("lookUpAddresses"));
    	addressLooks = JSON.parse(ls.getItem("lookUpAddresses"));
    }
    
    $("#colAddrLookup").autocomplete({
    	minLength: 6,
    	clearButton: true,
    	delay:1,
    	source :function( request, response ) {
    		// take from localstorage if exists.
    		if(addressLooks[request.term]){
    			response(addressLooks[request.term]);
    		}else{
	    		$.ajax({
	               url: "https://api.getAddress.io/find/"+request.term,
	               dataType: "json",
	               data: {
	                  "api-key": apiKey,
	               },
	               success: function( data ) {
	
	            	   var dat = $.map(data.addresses, function(item) {
	                	   logDebugMsg('itgems:::'+ item);
		                   	 var items = item.split(",");
	                     	 var lab = '';		
		               			for(var i of items){
		               				if(i!= ' '){
		                				lab+=i+',';
		               				}
		               			}
	                     	 lab = lab.substring(0, lab.length-1); 
	                       return {
	                           label : lab,
	                           value : lab,
	                           raw: item+ request.term
	                       };
	                 });
	            	 addressLooks[request.term] = dat; 
	            	 ls.setItem("lookUpAddresses",JSON.stringify(addressLooks));
	            	 response(dat);
	               },
	               error: function(xhr){
	            	   addressLooks[request.term] = [];
	            	   ls.setItem("lookUpAddresses",[]);
	               },
	            }); 
    		}
           },
           select: function(event, ui){
        	   filForm(ui.item.raw);
        	   
           }
    });
    
    var filForm =  function(newAddr){
    	 var items = newAddr.split(",");
    	 var fields = ['addressLine1','addressLine2','addressLine3','city','state','county','postCode'];
     	 var lab = '';
		 for(var i in items){
			 $("#"+fields[i]).val(items[i]) ;
		 }
    };
    

    $("#delAddrLookup").autocomplete({
    	minLength: 6,
    	source :function( request, response ) {
    		if(addressLooks[request.term]){
    			response(addressLooks[request.term]);
    		}else{
    			
	    		$.ajax({
	               url: "https://api.getAddress.io/find/"+request.term,
	               dataType: "json",
	               data: {
	                  "api-key": apiKey,
	               },
	               success: function( data ) {
	
	            	   var dat = $.map(data.addresses, function(item) {
		                   	 var items = item.split(",");
	                     	 var lab = '';		
		               			for(var i of items){
		               				if(i!= ' '){
		                				lab+=i+',';
		               				}
		               			}
	                     	 lab = lab.substring(0, lab.length-1); 
	                       return {
	                           label : lab,
	                           value : lab,
	                           raw: item+ request.term
	                       };
	                 });
	            	 addressLooks[request.term] = dat; 
	            	 ls.setItem("lookUpAddresses",JSON.stringify(addressLooks));
	            	 response(dat);
	               },
	               error: function(xhr){
	            	   addressLooks[request.term] = [];
	            	   ls.setItem("lookUpAddresses",[]);
	               },
	            }); 
    		}
           },
           select: function(event, ui){
        	   logDebugMsg('selected '+ ui.item.label +'::: '+ ui.item.raw);
        	   filDelForm(ui.item.raw);
        	   
           }
    });
    
    var filDelForm =  function(newAddr){
   	 var items = newAddr.split(",");
   	 var fields = ['dlvAddressLine1','dlvAddressLine2','dlvAddressLine3','dlvCity','dlvState','dlvCounty','dlvPostCode'];
    	 var lab = '';
		 for(var i in items){
			 $("#"+fields[i]).val(items[i]) ;
		 }
   };
   
	// ---- End Address Handling ---
	processDlvDropdownData();
	function processDlvDropdownData(){
	for(var i in dlvaddresses){
		 var str = "";
		 for (var j in dlvaddresses[i]){
			 if(j=='id') continue;
			 str += dlvaddresses[i][j] +",";
		 }
		 $("#addressdlvDropdown").append('<option value=' + dlvaddresses[i].id + '>'+ str + '</option>');
		}
	}  


	function newAddress(){
		$('form [d=d]').val('');
		$('form [d=d]').attr('readonly',false);
		document.getElementById('id').value="-1";
	}

     
	function dlvfillupform(id){
		newdlvAddress();
		id = $("#addressdlvDropdown").val();
		for(var i in dlvaddresses){           
			if(dlvaddresses[i].id == id){
				var formdata = dlvaddresses[i];
				for(var f in formdata){                   
					switch(f){
						case 'contactName' : {
								 $('#deliveryAddresscontactName').val(formdata[f]);
						}break;
						   case 'addressLine1' : {
								 $('#deliveryAddressAddressLine1').val(formdata[f]);
						}break;
						case 'addressLine2' : {
								$('#deliveryAddressAddressLine2').val(formdata[f]);
						}break;
						case 'addressLine3' : {
								$('#deliveryAddressAddressLine3').val(formdata[f]);
						}break;
						case 'id' : {
								$('#deliveryAddressid').val(formdata[f]);
						}break;
						case 'county' : {
								$('#deliveryAddresscounty').val(formdata[f]);
								
						}break;
						case 'postCode' : {
								$('#deliveryAddresspostCode').val(formdata[f]);
						}break;
						 case 'country' : {
								$('#deliveryAddresscountry').val(formdata[f]);
								logDebugMsg(formdata[f]);
						}break;
						   case 'phoneNumber' : {
								$('#deliveryAddressphoneNumber').val(formdata[f]);
						}break;
					}
				}
				$('form [d=dl]').attr('readonly','readonly');
				break;
			}               
		}
	 }        
	 
	 function newdlvAddress(){
		 $('form [d=dl]').attr('readonly',false).val('');
		 document.getElementById('dlvAddressId').value="-1";
	 }

	 function fillupform(){
		 newAddress();
		 id = $("#addressDropdown").val();
		 for(var i in addresses){
			if(addresses[i].id == id){
				var formdata = addresses[i];
				for(var f in formdata){
					if($('#'+f).length){
						$('#'+f).val(formdata[f]);
					}
				}
				$('form [d=d]').attr('readonly','readonly');
				break;
			}               
		 }
	 }

function hideFindAddress(sourceCountryId,destinationCountryId){
if(sourceCountryId=='221'){
  $("#findaddresscol").show();
  } else {
	$("#findaddresscol").hide();  
	$("#orcol").hide(); 
  }  
  
if(destinationCountryId=='221'){
   $("#findaddressdel").show();
  } else {
  $("#findaddressdel").hide();
	$("#ordel").hide(); 

  }
}

function getcountrydetails(countrySourceId,countryDestinationId){
	var holidays=[0,6];
	  $.ajax({
	            url:  instanceurl_o +'/country/'+countrySourceId,
			     type:"GET",
			     dataType: 'json',
				 cache: false,
                success: function(data){
			   logDebugMsg('==>> Success in calling url ::' + instanceurl_o +'/country/' +countrySourceId +' , data :: '+data);
               if(data)  {
				  if(data.isPostcodeMandatory=='Y'){
				  $("#colpost").show();
               }
               else{
              $("#colpost").hide();
			  $("#collAddresspostCode").val("000");
              }
			  if(data.workingDays!=undefined ||data.workingDays!=null){
			var firstArray = [0,1,2,3,4,5,6];
             var secondArray = data.workingDays;
              holidays = firstArray.filter(item=>secondArray.indexOf(item)==-1);
			$('#collectionDate').datepicker({format: "yyyy-mm-dd", autoclose:true, todayHighlight: true, startDate: '+1d',endDate: '+10d',daysOfWeekDisabled: holidays}).attr('readonly','readonly');
                 }else{
			$('#collectionDate').datepicker({format: "yyyy-mm-dd", autoclose:true, todayHighlight: true, startDate: '+1d',endDate: '+10d',daysOfWeekDisabled: holidays}).attr('readonly','readonly');
				 }
               }
			   else{
			$('#collectionDate').datepicker({format: "yyyy-mm-dd", autoclose:true, todayHighlight: true, startDate: '+1d',endDate: '+10d',daysOfWeekDisabled: holidays}).attr('readonly','readonly');
				 }				
				getCountryDetailsDest(countryDestinationId);				
               },
			    error: function(e){
			$('#collectionDate').datepicker({format: "yyyy-mm-dd", autoclose:true, todayHighlight: true, startDate: '+1d',endDate: '+10d',daysOfWeekDisabled: holidays}).attr('readonly','readonly');
			  logDebugMsg("Exception While loading Source countries details " + e);
		  }
	  
	  });
}

function getCountryDetailsDest(countryId){
	$.ajax({
	 url:  instanceurl_o +'/country/'+countryId,
			     type:"GET",
			     dataType: 'json',
				 cache: false,
                success: function(data){
			   logDebugMsg('==>> Success in calling url for destination ::' + instanceurl_o +'/country/'+countryId  + ' , data :: '+data);
               if(data)  {
				  if(data.isPostcodeMandatory=='Y'){
				  $("#delpost").show();
               }
               else{
              $("#delpost").hide();
			 $ ("#deliveryAddresspostCode").val("000");
			  
              }
			
               }
               },
			    error: function(e){
			  logDebugMsg("Exception While loading destination countries " + e);
		  }
	});
}

    $('#addonBtn').click(function(){
       	    $(document).ready(function(){
       	        $("#collectionDate").focus();
       	    });
  		 });
         
$("#addressDropdown").bind("change", function(){
  var selectedConsignorAddress=$('#addressDropdown').val();
  if(selectedConsignorAddress!='-1'){
  for (var i = 0; i<senderDetails.length; i++) {		 
        if(selectedConsignorAddress==senderDetails[i]){
			$("#collAddresscontactName").val(senderDetails[i+1]);
			$("#collAddressphoneNumber").val(senderDetails[i+2]);
			$('#collAddresscontactName').attr('disabled', true);
			$('#collAddressphoneNumber').attr('disabled', true);
		}
  }		
  }else{
	  $('#collAddresscontactName').attr('disabled', false);
	  $('#collAddressphoneNumber').attr('disabled', false);
	  $('#collAddresscontactName').val("");
		$('#collAddressphoneNumber').val("");
  }
  });
  
  $("#addressdlvDropdown").bind("change", function(){
  var selectedConsigneeAddress=$('#addressdlvDropdown').val();
  if(selectedConsigneeAddress!='-1'){
  for (var i = 0; i<receiverDetails.length; i++) {		 
        if(selectedConsigneeAddress==receiverDetails[i]){
			$("#deliveryAddresscontactName").val(receiverDetails[i+1]);
			$("#deliveryAddressphoneNumber").val(receiverDetails[i+2]);
			$('#deliveryAddresscontactName').attr('disabled', true);
			$('#deliveryAddressphoneNumber').attr('disabled', true);
		}
  }	
  }
  else{
	  $('#deliveryAddresscontactName').attr('disabled', false);
		$('#deliveryAddressphoneNumber').attr('disabled', false);
		$('#deliveryAddresscontactName').val("");
		$('#deliveryAddressphoneNumber').val("");
  }
  });
</script>
</body>
</html>
