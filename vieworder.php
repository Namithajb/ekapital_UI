<!DOCTYPE html>
<html lang="en">
  <head>
  <title>View Order | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>	
	 <?php include 'includes/headerAx.php' ?>
     <?php include('config.php'); ?>
		<?php  include 'includes/include_chat_box.php' ?>
		<?php  include 'includes/google_tag_manager_head.php' ?>
		<?php  include 'auth_mandate.php' ?>
    	

        </head>
        <style>
        	body{background: #fff;}
        </style>
    <body>
 		<div class="bodyoverlay"></div>
    <!-- added -->   
	<?php include 'includes/google_tag_manager_body.php' ?>
  		<?php include 'includes/menuAx.php' ?>
        </header>	

 
    <!-- Main Content -->
	<!-- TBD: Values not appearing on fields, on submit enable client validation that fields are mandatory -->
  	<main class="padded20">
      	<div class="bg-clr02">
	        <div class="container-fluid">
	          <ol class="breadcrumb">
	               <?php
		  	if ( $_SESSION["usertype"] == "B") {	?>	
			<li><a href="/businesshome.php">Home</a></li>
				<?php } 
			else {?>
			 <li><a href="/index.php">Home</a></li>
			 <?php }?>
	            <li class="active">View Order</li>
	          </ol>
	        </div>
      	</div>
      	 
    <div class="container admin-order-view">
		<div class="box-intro text-center">
          <!-- 	<h1 class="heading" style="margin-top: 0;color: darkblue; font-weight: bold;"> Order Information # <a ef="vieworder.gmp?id=<c:out value="${order.id}"/>"><c:out value="${order.id}"/></a> </h1>	-->
     
            	<center><h3 class="heading" style="color: blue; ">Order No. <span id ="orderno"></span></h3></center> 
 					
   </div>
      <div id="successMsg"></div>
<div class="alert alert-danger" id = "payerror" name = "payerror" style = "display:none">
	
				  Your Payment has been declined. This could be due to a System Error (or) due to Incorrect card information. Your Order will not be processed until the Payment has been confirmed.
    Our Customer Service Executive will communicate with you, either via email (or) via phone within the next 24 hours.
    Kindly provide the right information for processing the payment and for continuing with the order.
   
    </div>	
		<div id = "invDiv" name = "invDiv" style = "display:none">  
	   <label class='label label-danger pull-right'> Invoice generated <span id ="orderInvoice"></span> </label> 
	</div>

            <div class="row">
          		<section class="col-sm-12 printable">
          			<div>

  						<!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#orderdet" aria-controls="orderdet" role="tab" data-toggle="tab">Order Details</a></li>
					    <li role="presentation"><a href="#proinfo" aria-controls="proinfo" role="tab" data-toggle="tab">Product Info</a></li>
					    <!--<li role="presentation"><a href="#clientinfo" aria-controls="clientinfo" role="tab" data-toggle="tab">Client Info</a></li>-->
					     <li role="presentation"><a href="#trakinginfo" aria-controls="trakinginfo" role="tab" data-toggle="tab">Tracking</a></li>
					    <li role="presentation"><a href="#parcel" aria-controls="pricing" role="tab" data-toggle="tab">Parcel Info</a></li>
					    <li role="presentation"><a href="#addres_a" aria-controls="addres_a" role="tab" data-toggle="tab">Addresses</a></li>
					    <li role="presentation"><a href="#payment_sec" aria-controls="payment_sec" role="tab" data-toggle="tab">Payments</a></li>
					    <li role="presentation"><a href="#document_sec" aria-controls="document_sec" role="tab" data-toggle="tab">Documents</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="orderdet">
					    	<div class="col-md-12 col-sm-12 col-xs-12">
	          					<div class="order_section col-md-12 col-xs-12">
	          					<h3>Order Information</h3>
	          					<div class="col-md-8 col-sm-8 col-xs-12">
	          						<dl class="dl-horizontal margin0">
			          
	                              <dt>Order Raised On: </dt>
								  <dd><span id ="orderraisedon"></span></dd>
			                      <dt>Order Raised By:</dt>
			                      <dd><span id="orderraisedby"></span></dd>
			
			                    </dl>
	          					</div>
			                   
		                  	</div>
          				</div>

          				<div class="col-md-12 col-sm-12 col-xs-12">
          					<div class="order_section col-md-12 col-sm-12 col-xs-12">
          						<h3>Order Status</h3>
          						<div class="col-md-8 col-sm-8 col-xs-12">
          							
		                  	   	<label for="status">Order Status:</label>
				                   <span id="orderstatus">
									<!--<c:if  test="${order.status == 'CNF'}"> CONFIRMED</c:if> 
									<c:if  test="${order.status == 'UNC'}"> UNCONFIRMED </c:if> 
									<c:if  test="${order.status == 'REF'}"> REFUNDED </c:if> 
									<c:if  test="${order.status == 'CAN'}"> CANCELLED </c:if> 
									<c:if  test="${order.status == 'DEL'}"> DELIVERED </c:if> 
									 <security:authorize access="hasAnyRole('ROLE_ADMIN', 'ROLE_MANAGER','ROLE_SHIPPING')">
									 <c:if  test="${order.invoiced == 'N'}">
									 &nbsp;<button title="Edit" class="btn btn-xs btn-primary pull-right" id="editOrderStatus" onclick="editOrderStatus()"><i  class="fa fa-edit"></i></button>
				                </c:if>
				                </security:authorize>-->
									</span>
									</br>	
									 <label for="status">Payment Completed:</label>
				                   <span id="paystatus">
									</span>
          						</div>
							</div>
          				</div>

						<div class="col-md-12 col-sm-12 col-xs-12">
          					<div class="order_section col-md-12 col-sm-12 col-xs-12">
          						
          						<div class="col-md-8 col-sm-8 col-xs-12">
          				  <label>
									  Collection Date:
                                     </label>
				                   <span id="coldate">
								</span></br>	
									 <label>Estimated Delivery Date : </label>
									 <span id="estdeldate"></span> 
          						</div>
	          					

									<div class="col-md-4 col-sm-4 col-xs-12">
	          						<div class="righaction">
	          							<div class="float-nav">
			 		 					<a href="javascript:void(0)" class="menu-btn openNav" ><i class="fa fa-edit"></i> Edit</a>
										</div>
										<div id="" class="sidenav">
											<p class="titlenav">Collection Date</p>
											<a href="javascript:void(0)" class="closebtn closeNav" >&times;</a>
											  <div class="mainDivForShowMsg">
											<div class="toggleMsg"></div>
											<div class="editfields">
									 	<label for="collectiondateactual">
										Collection Date:
										<br></label>
									<input type="text" class="form-control mb15" readonly="readonly" name="collectiondateactual" id="collectiondateactual">
									</div>
									<div class="butonaction">
									  	<button class="btn btn-success" id="collectiondateactualBtn">Submit</button>
										<button class="btn btn-warning" onclick="refreshpage();">Done</button>
									  	<button class="btn cancel_btn cancelNav">Cancel</button>
									  </div>
									</div>
	          						</div>
	          						</div>
	          					</div>
							</div>
          				</div>
          				
          				<div class="col-md-12 col-sm-12 col-xs-12">
          					<div class="order_section">
          				
          					<form:form action="gettogateway.gmp" method="post" modelAttribute="order">
							<h3>Terms and Conditions</h3>
			                 <div class="checkbox">
			                   <label>
			                     <spring:bind path="agreedgmpconditions">
			                      <input type="checkbox" name="agreedgmpconditions" id="gmptc" value="Y" >
			                      I agree to&nbsp;<a href="/gmptandc.gmp" target="_blank">Get my parcel terms and conditions</a>
								  </spring:bind>
			                   </label>
							
			                 </div>
			                 <div class="checkbox">
			                   <label>
			                     <spring:bind path="prohibiteditemslist">
			                      <input type="checkbox" name="prohibiteditemslist" id="phbtc" value="Y" >
			                      I agree to&nbsp;<a href="/prohibiteditemstandc.gmp" target="_blank">prohibited items terms and conditions</a>
								 </spring:bind>
			                   </label>
			                 </div>
						  
			                 <div class="checkbox">
			                   <label>
			                     <spring:bind path="uninsureditemslist">
			                      <input type="checkbox" name="uninsureditemslist" id="uninstc" value="Y">
			                      I agree to&nbsp;<a href="/uninsuredtandc.gmp" target="_blank">un-insured items terms and conditions</a>
								</spring:bind>
			                   </label>
			                 </div>   
			  				 <div class="checkbox">
			                   <label>
			                     <spring:bind path="weightdifference">
			                      <input type="checkbox" name="weightdifference" id="wtdifftc" value="Y" >
			                      I agree to pay&nbsp;<a href="/wtdifferencetandc.gmp" target="_blank">the weight difference</a>
								</spring:bind>
			                   </label>
			                 </div>
			            </form:form>
          					</div>
          				</div>

					    </div>
					    <div role="tabpanel" class="tab-pane" id="proinfo">

					    	<div class="order_section col-md-12 col-xs-12">
	          					<h3>Product Name</h3>
	          					<div class="col-md-8 col-sm-8 col-xs-12">
	          						<div class="form-group">
										<div class="">
											  <span id="productname"></span>
											<span>
								<a target="_blank" href="/productsinfo.gmp?id=3">
                			<!--<button class="btn btn-default btn-sm border-radius" type="button">i</button>-->
									</a>
								</span>
										</div>
							 		</div>
	          					</div>
			                   
		                  	</div>
		                  	<div class="order_section col-md-12 col-xs-12">
	          					
	          					<div class="col-md-12 col-sm-12 col-xs-12">
	          						<div class="well well-lg">
                  					<p><b>Transit Time</b>:<span id="transittimeorder">3</span> Days</p>
                  <div id="expandingDescription"><!-- Product Description -->
							<ul type="disc">
							<li>This service is powered by premium international couriers.</li>
							<li>This service is recommended for all worldwide express deliveries.</li>
							<li>Delivery within 1-4 working days</li>
							<li>Collections are between 10AM to 5.30PM</li>
							<li>Booking cut off time is 11 AM week days</li>
							<li>2 Copies of customs invoice should be prepared by customer and handed over to driver for non-documents leaving European Union</li>
							<li>4 hours window for collection can be requested but depending on the postcode</li>
							<li>Shipment insurance can be purchased &nbsp;extra up to ?1000</li>
							<li>Customs duty may have to be paid at the destination by the recipient. For more information on customs duty please contact Customs &amp; Excise</li>
							<li>Pre-printed airway bill will be emailed to the customer prior to the collection, therefore please make sure that you have the printing facility.</li>
							<li>Maximum recommended weight for parcels: 70 kg per piece. If the parcel is heavy or big please inform while booking, this might need tail lift van and requires minimum of 24 hours? notice for collection.</li>
							<li>Over Weight Surcharge will be applicable if the any piece in a shipment over 70 kg in weight (?30 per shipment)</li>
							<li>Over Size Surcharge is applied to packages with a single dimension in excess of 120cm or to pallets with a base dimension in excess of 120cm (?30 per shipment)</li>
							<li>Maximum dimensions per item: 120 x 120 x 150 cm high.</li>
							<li>Maximum weight for palletised goods: 1000kg</li>
							<li><strong>NOTE:</strong>&nbsp;Please note that any surcharges on deliveries to EU countries are subject to VAT</li>
							</ul></div>
							<p class="expand" id="showDescription" style="text-align:right;width:100%;color:#DC3449;">Read More ...</p>
							<br>
								<p><b>Special Instructions</b>:
											  </p><div id="expandingSplInstructions"><!-- Special Instructions -->
							<ul dir="ltr" type="disc">
							<li>This service is suitable for both documents and parcels</li>
							<li>Each Pack shouldn?t weigh more than 70 Kgs</li>
							<li>The maximum length of each pack shouldn't be more than 120cm, one or more of the dimensions must not exceed (120cm x 70cm x 60cm)</li>
							<li>The Parcel should be labelled clearly with Destination Address</li>
							<li>2 Copies of customs invoice should be prepared by customer for non-documents leaving European Union.</li>
							<li>All 2 Copies should be handed to the driver</li>
							<li>Address correction of ?9 will be charged if any part of the delivery address requires amendment</li>
							<li>Volumetric weight is taken in to consideration so customers are required to know the dimensions of the parcel.</li>
							<li>Volumetric weight will be applicable if the volumetric weight is greater than the gross weight @5:1 (length x weight x Height, divided by 5000 if in centimetres or 305 if in inches)</li>
							<li>If you do not provide correct parcel dimensions and weight and your parcel is oversize or overweight then extra charge will be debited from your card.</li>
							<li>Price do not include local customs duty , clearance, Quarantine and storage charges</li>
							<li>Extened or remote area charge may apply to certain delivery areas, call customer service for futher information.</li>
							<li>Do ensure that your parcel does not contain any items mentioned under "<a href="https://www.getmyparcel.com/prohibiteditemstandc.gmp" target="_blank" rel="noreferrer">Prohibited items list</a>".</li>
							<li>This service does not accept and carry the following items :( Live stock, Precious stone and metals, firearms, Bullion, Pornography, Cash and Currency, Negotiable Stocks and Bonds, Travellers Cheques, Antiques, Perishables, Glass, Ivory, Certain types of Dangerous Goods, Drugs, Plants, Liquids and any other articles banned / prohibited by IATA ).</li>
							<li>Restrictions for each destination can vary , please contact customer service for futher information</li>
							</ul></div> 
											  
				  			<p class="expand" id="showSplInstructions" style="text-align:right;width:100%;color:#DC3449;">Read More ...</p>
				  
				  <br>
				</div>
			                    </div>
	          					
		                  	</div>

		                  
	          					
		                  	</div>
						<div role="tabpanel" class="tab-pane" id="trakinginfo">
							<div class="col-md-12 col-xs-12">
							
							<div class="order_section col-md-12 col-xs-12">
	          					<h3>Tracking Info</h3>
	          					<div class="col-md-8 col-sm-8 col-xs-12">
	          						<dl class="dl-horizontal margin0">
		                              <dt>Tracking Id :</dt>
									  <dd><span id="trackingId"></span></dd>
		                              <dt>Tracking Status :</dt>
									  <dd><span id="trackingStatus">NA</span></dd>
				                      <dt>Tracking Status last updated :</dt>
				                      <dd><span id="trackingStatusLastUpdated">NA</span></dd>
				                      
			                    	</dl>
			                    
	          					</div>
			                    
			                    
		                  	</div>

		                  </div>

						</div>
					    <div role="tabpanel" class="tab-pane" id="clientinfo">
					    	<div class="col-md-12 col-xs-12">
					    		<div class="order_section col-md-12 col-xs-12">
					    			<p><label>Client Name : Unique air express</label></p>
					    			<table class="table">
					    				<thead>
					    					<tr>
					    						<th>Adderss</th>
					    						<th>Details</th>
					    						<th>Contact</th>
					    						<th>Details</th>
					    						<th>Primary Address</th>
					    						<th>Details</th>
					    					</tr>
					    				</thead>
					    				<tbody>
					    					<tr>
					    						<td>Is Active</td>
					    						<td>Y</td>
					    						<td>Full Name</td>
					    						<td> Deshmukh Nilesh, dummy</td>
					    						<td>Address Line 1</td>
					    						<td>118 Bedfont Close</td>
					    					</tr>
					    					<tr>
					    						<td>Is Active</td>
					    						<td>Y</td>
					    						<td>Full Name</td>
					    						<td> Deshmukh Nilesh, dummy</td>
					    						<td>Address Line 1</td>
					    						<td>118 Bedfont Close</td>
					    					</tr>
					    					<tr>
					    						<td>Is Active</td>
					    						<td>Y</td>
					    						<td>Full Name</td>
					    						<td> Deshmukh Nilesh, dummy</td>
					    						<td>Address Line 1</td>
					    						<td>118 Bedfont Close</td>
					    					</tr>
					    				</tbody>
					    			</table>
					    		</div>
					    	</div>

					    </div>
					    <div role="tabpanel" class="tab-pane" id="parcel">
					    	<div class="col-md-12 col-xs-12">
					    		<div class="order_section col-md-12 col-xs-12">
					    			<h3>Parcel Info</h3>
					    		  <div id="parcelInfoDiv"></div>
			                  		<div class="form-group">
			                    		<label for="coldate">Number of Items:</label> <span id="noofparcel"></span>
			                  		</div>
					    		</div>
					    	</div>
								<div class="col-md-12 col-xs-12">
					    		<div class="order_section col-md-12 col-xs-12">
								<div class="form-group">
			                    		<label for="parcelcontent">Considered Weight:</label> <span id="consideredweight"></span>
									</div>
									</div>
					    	</div>
							<div class="col-md-12 col-xs-12">
					    		<div class="order_section col-md-12 col-xs-12">
								<div class="form-group">
			                    		<label for="docType">Contents:</label><span id ="ordertype"></span>
									</div>
									</div>
					    	</div>
							<div class="col-md-12 col-xs-12">
								<div class="order_section col-md-12 col-sm-12 col-xs-12">
          						<div class="col-md-8 col-sm-8 col-xs-12">
          							
		                  	   	<div class="form-group">
							 			<label for="parcelcontent">Declared Parcel Contents:</label>
								<span id="parcelcontent"></span>
								 	</div>
          						</div>
	          					<div class="col-md-4 col-sm-4 col-xs-12">
	          						<div class="righaction">
	          							<div class="float-nav">
			 		 					<a href="javascript:void(0)" class="menu-btn openNav" ><i class="fa fa-edit"></i> Edit</a>
										</div>
										<div id="" class="sidenav">
											<p class="titlenav">Declared Parcel Contents</p>
											<a href="javascript:void(0)" class="closebtn closeNav" >&times;</a>
											  <div class="mainDivForShowMsg">
											<div class="toggleMsg"></div>
											<div class="editfields">
									  <label>Declared Parcel Contents</label>
									 		<textarea id="declaredcontent" class="form-control" /></textarea>
									</div>
									<div class="butonaction">
									  	<button class="btn btn-success" id="updateDeclaredContent">Save</button>
										<button class="btn btn-warning" onclick="refreshpage();">Done</button>
									  	<button class="btn cancel_btn cancelNav">Cancel</button>
									  </div>
									  </div>
									</div>
	          						</div>
	          						</div>
          						<div class="col-md-8 col-sm-8 col-xs-12">
          							
		                  	   	<div class="form-group">
							 			<label for="parcelcontent">Declared Parcel Value (£) :</label>
										<span id="parcelvalue"></span>
								 	</div>
          						</div>
	          					

									<div class="col-md-4 col-sm-4 col-xs-12">
	          						<div class="righaction">
	          							<div class="float-nav">
			 		 					<a href="javascript:void(0)" class="menu-btn openNav" ><i class="fa fa-edit"></i> Edit</a>
										</div>
										<div id="" class="sidenav">
											<p class="titlenav">Declared Parcel Value</p>
											<a href="javascript:void(0)" class="closebtn closeNav" >&times;</a>
											  <div class="mainDivForShowMsg">
											<div class="toggleMsg"></div>
											<div class="editfields">
									  <label>Declared Parcel Value</label>
									 		<textarea id="parcelvalueedit" class="form-control" /></textarea>
									</div>
									<div class="butonaction">
									  	<button class="btn btn-success" id="updateParcelValue">Save</button>
										<button class="btn btn-warning" onclick="refreshpage();">Done</button>
									  	<button class="btn cancel_btn cancelNav">Cancel</button>
									  </div>
									</div>
	          						</div>
	          						</div>
	          					</div>
							</div>
							</div>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="addres_a">
							<div class="col-md-12 col-xs-12">
							
							<div class="order_section col-md-12 col-xs-12">
	          					<h3>Receiver Address</h3>
	          					<div class="col-md-8 col-sm-8 col-xs-12">
	          						<dl class="dl-horizontal margin0">
		                         
		                        
									  <div id="consigneeAddressDiv"></div>
			                    	</dl>
			                    
	          					</div>
			                    
	          					<div class="col-md-4 col-sm-4 col-xs-12">
	          						<div class="righaction">
	          							<div class="float-nav">
			 		 					<a href="javascript:void(0)" class="menu-btn openNav"> <i class="fa fa-edit"></i> Edit</a>
										</div>
										<div id="mySidenav" class="sidenav">
											<p class="titlenav">Receiver Address</p>
											<a href="javascript:void(0)" class="closebtn closeNav">×</a>
												  <div class="mainDivForShowMsg">
                                                   <div class="toggleMsg"></div>
											<div class="editfields">
											  <label>Contact Name </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="delcontactName">
											    <label>Phone Number </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="delphoneNumber">
											  <label>Address Line 1 </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="deladdressLine1">
											  <label>Address Line 2 </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="deladdressLine2">
											  <label>Address Line 3 </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="deladdressLine3">										
											  <label>City </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="delcity">
											  <label>Postal Code: </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="delpostCode">
											  <label>Country </label>
											  <select  class="form-control mb15"  name="country" id="delcountry">
											<span id="delCountry" style="display:none"><c:out value="${order.deliveryAddress.country}"/></span>
											</select>
											</div>
										<div class="butonaction">
									  	<button class="btn btn-success"  name="editDeliveryAddress" id="editDeliveryAddress">Submit</button>
										<button class="btn btn-warning" onclick="refreshpage();">Done</button>
									  	<button class="btn btn-primary cancelNav">Cancel</button>
									  </div>
									  </div>
									</div>
	          						</div>
	          					</div>
			                    
		                  	</div>

		                
		                  	<div class="order_section col-md-12 col-xs-12">
	          					<h3>Sender Address</h3>
	          					<div class="col-md-8 col-sm-8 col-xs-12">
	          						<dl class="dl-horizontal margin0">
		                              
		                        <div id="consignorDiv"></div>
			                    	
	          					</div>
			                    
	          					<div class="col-md-4 col-sm-4 col-xs-12">
	          						<div class="righaction">
	          							<div class="float-nav">
			 		 					<a href="javascript:void(0)" class="menu-btn openNav"> <i class="fa fa-edit"></i> Edit</a>
										</div>
										<div id="mySidenav" class="sidenav">
											<p class="titlenav">Sender Address</p>
											<a href="javascript:void(0)" class="closebtn closeNav">×</a>
											  <div class="mainDivForShowMsg">
                                                  <div class="toggleMsg"></div>
											<div class="editfields">
											 
											  <label>Contact Name </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="colcontactName">
											  <label>Address Line 1 </label>
											   <label>Phone: </label>
											  <input type="text" class="form-control mb15" name="" placeholder=""  id="colphoneNumber">
											  <input type="text" class="form-control mb15" name="" placeholder="" id="coladdressLine1">
											  <label>Address Line 2 </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="coladdressLine2">
											  <label>Address Line 3 </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="coladdressLine3">
											  <label>City </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="colcity">
											  <label>Postal Code: </label>
											  <input type="text" class="form-control mb15" name="" placeholder="" id="colpostCode">
											   <label>Country: </label>
											   	<select id="colcountry" class="form-control country_list" name="country" >
												</select>
											</div>
										<div class="butonaction">
									  	<button class="btn btn-success" name="editCollectionAddress" id="editCollectionAddress">Submit</button>
										<button class="btn btn-warning" onclick="refreshpage();">Done</button>
									  	<button class="btn btn-primary cancelNav">Cancel</button>
									  </div>
									</div>
	          						</div>
									</div>
	          					</div>			                    
		                  	</div>
		                  </div>
						</div>

					    <div role="tabpanel" class="tab-pane" id="payment_sec">
					    <div class="col-md-12 col-sm-12 col-xs-12">
	          			<div class="order_section col-md-12 col-xs-12">
	          					<h3>Payment Terms</h3>
	          			<div class="col-md-8 col-sm-8 col-xs-12">
							<dl class="dl-horizontal margin0">
							<dt>Cost:</dt>                      
							<dd>&pound;<span id="ratequotedcost"></span></dd>
							<dt>Discount (-):</dt>
							<dd>&pound; <span id="applieddiscountcost"><c:out value="0.0"/></span></dd> 
							<dt>Applicable VAT (+):</dt>
							<dd>&pound; <span id="appliedvatcost"></span> </dd>
							<dt>Insurance cost:</dt>
							<dd>&pound; <span id="insuranceamountcost"></span> </dd>
							<div  style="display:none" id="wtDifference">	
							<dt>Weight Difference Charges:</dt>
							<dd>&pound; <span id="wtDiffCharges"></span> </dd>
							</div>
							<dt>Total:</dt>
							<dd>&pound;<span id="appliedtotalCost"></span>  </dd>
					     <div  style="display:none" id="pendingAmmountDiv">	
                        <p class="border"></p>						
					    <dt>Paid Amount:</dt>
                         <dd><span  id="paidAmmountW"> </span></dd>
					    <dt>Amount To Pay </dt>    
                         <dd><span id="pendingAmmountW"></span></dd>
					  </div>
                      </dl>
					</div>
			          
		                  	</div>

		                  	<div class="order_section col-md-12 col-xs-12">
	          					<div class="col-md-8 col-sm-8 col-xs-12">
	          						<dl class="dl-horizontal margin0">
		                              <dt> Payment Mode Transaction Id: </dt>
									  <dd><span id ="paymentmodetxnid"></span></dd>
		                            
			                    	</dl>
	          					</div>
	          					
		                
          				</div>
						</div>
						</div>
					    <div role="tabpanel" class="tab-pane" id="document_sec">
					    	<div class="col-md-12 col-xs-12">
					    		<div class="order_section col-md-12 col-xs-12">
					    				<div class="container-fluid autowidth">
                  <span id="orderdocuments"></span>
                  </div> 
					    			 <p id="aa" style="display: none;"></p>
					    		</div>
					    	</div>

					    </div>
					</div>

			</div>

			
		
			</section>
			</div>
			
		
     <!-- </div>			   -->
      <!-- main body grid - End -->
	  <section class="col-sm-12">
			<div><br/>
			<button onclick="window.location='/u_orderlist.php';" type="button" class="btn btn-primary"><span class="badge"><i class="fa fa-angle-double-left"></i></span>&nbsp;&nbsp;Back to Order List</button>
			</div>
			</section>
	  	</div>
  </main>
  <!-- Main Content -->
  
	<!-- Footer -->
    <?php  include 'includes/footerAx.php' ?>
	<!-- Footer - End -->
	

<div id="parcelInfoModal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Add a New Parcel to Order</h4>
		      </div>
			  <form:form action="updateparcelinfo.gmp" method="post" class="form-horizontal" role="form" name="addNewParcelForm" id="addNewParcelForm">
			  <input type="hidden" name="orderid" value="<c:out value="${order.id}"/>">
			  <input type="hidden" name="parcelid" value="-1">
			  <input type="hidden" name="itemtype" value="<c:out value="${order.docType}"/>">
			  
		      <div class="modal-body">
		     
		      <button type="button" id="addboxdivbtn" title = "Add Box" class="btn btn-success btn-lg" onclick="addBoxdiv()" style="width: 49%">ADD BOX</button>
		       <button type="button" id="addparceldivbtn" title = "Add Parcel" class="btn btn-success btn-lg" onclick="addparceldiv()" style="width: 49%">ADD PARCEL</button>
		       
		       <div class = "row" style="display: none" id = "parceldiv">
					<section class="col-sm-12">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="length">L (cm)</label>
									<div class="input-group">
										<input id="length" class="form-control input-sm calculatewtfield " type="text" size="3" name="length" value=""> 
										<!-- <span class="input-group-addon">cm</span> -->
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="width">W (cm)</label>
									<div class="input-group">
										<input id="width" class="form-control input-sm calculatewtfield" type="text" size="3" name="width" value=""> 
										<!-- <span class="input-group-addon">cm</span> -->
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="height">H (cm)</label>
									<div class="input-group">
										<input id="height" class="form-control input-sm calculatewtfield" type="text" size="3" name="height" value=""> 
										<!-- <span class="input-group-addon">cm</span> -->
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label class="control-label" for="declaredwt">Declared Weight(Kg)</label>
									<div class="input-group">
										<input id="declaredwt" class="form-control input-sm calculatewtfield" type="text" size="3" name="declaredwt" value="" >  
										<!-- <span class="input-group-addon">cm</span> -->
									</div>
								</div>
							</div>

						</section>
						</div>
		      </div>
		       <small>&nbsp;&nbsp; NOTE : Any changes to parcels in Order will affect Product Pricing</small>
		      <div class="modal-footer">      
		      
		        <button type="submit" class="btn btn-success" id="btnConfirmAddParcelModal" name="btnConfirmAddParcelModal" style="display: none">Add Parcel to Order</button>
		        
		        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="refreshpage();">Cancel</button>
		      </div>
			    </form:form>
	    </div>
  	</div>
</div>

<div id="editParcelInfoModal" class="modal fade" role="dialog">
  	<div class="modal-dialog">
	    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Edit Parcel information </h4>
		      </div>
			  
		      <div class="modal-body">
						<div class="row margin20-top">
				 <c:forEach var="parcel" items="${order.parcelInfoList}">
				  <div id="itemRows<c:out value="${parcel.id}"/>"> 
				  
				  <form:form action="updateparcelinfo.gmp" method="post" class="form-horizontal" role="form">
				    <input type="hidden" id="parcelid" name="parcelid" value="<c:out value="${parcel.id}"/>">
					<input type="hidden" id="orderid" name="orderid" value="<c:out value="${order.id}"/>">
					
					<section id="rowNum0" class="col-sm-12">
						<section class="col-sm-2">
							<div class="form-group">
								<div class="col-sm-12">
									<label class="control-label" for="length">L (cm)</label>
									<div class="input-group">
										<input id="length" class="form-control input-sm calculatewtfield" type="text" size="3" name="length" value="<c:out value="${parcel.length}"/>"> 
										<!-- <span class="input-group-addon">cm</span> -->
									</div>
								</div>
							</div>
						</section>
						<section class="col-sm-2">
							<div class="form-group">
								<div class="col-sm-12">
									<label class="control-label" for="width">W (cm)</label>
									<div class="input-group">
										<input id="width" class="form-control input-sm calculatewtfield" type="text" size="3" name="width" value="<c:out value="${parcel.width}"/>"> 
										<!-- <span class="input-group-addon">cm</span> -->
									</div>
								</div>
							</div>
						</section>
						<section class="col-sm-2">
							<div class="form-group">
								<div class="col-sm-12">
									<label class="control-label" for="height">H (cm)</label>
									<div class="input-group">
										<input id="height" class="form-control input-sm calculatewtfield" type="text" size="3"  name="height" value="<c:out value="${parcel.height}"/>">
										<!-- <span class="input-group-addon">cm</span> -->
									</div>
								</div>
							</div>	
						</section>
						<section class="col-sm-3">
							<div class="form-group">
								<div class="col-sm-12">
									<label class="control-label" for="height">D.Wt(kg)</label>
									<div class="input-group">
										<input id="declaredwt" class="form-control input-sm calculatewtfield" type="text" size="3"  name="declaredwt" value="<c:out value="${parcel.declaredWeight}"/>">
										<!-- <span class="input-group-addon">cm</span> -->
									</div>
								</div>
							</div>	
						</section>
						
						 <button type="submit" class="btn btn-primary">Save</button>
		        
		       <!--  <button type="button" class="btn btn-default" data-dismiss="modal" onclick="refreshpage();">Cancel</button> -->
		        
		         <button type="button" class="btn btn-danger" onclick="deleteparcel($(this).closest('div').attr('id'));"><i class='fa fa-trash-o fa-lg'></i></button>
					
					</section>
				   </form:form>
				   </div>
				</c:forEach>
				</div>
		      </div>
		     
	    </div>
  	</div>
</div>



<!-- document upload modal -->
<div id="documentModal" class="modal fade">
    <div  class="modal-dialog">
        <div class="modal-content">
            <form action="/uploaddocument.gmp" method="post" enctype="multipart/form-data" id="documentForm">
            <div class="modal-header">
                <h3>Upload Document</h3>
            </div>
            <div class="modal-body">
                <div id='content' class="tab-content">
                    <input type="hidden" name="order_id" value="${order.id}" />
                    <div class="form-group">
	                    <label class="control-label">Document Type</label>
	                    <select class="form-control" name="type">
	                       <c:if test="${order.orderMode=='C'}">
	                       <option value="AWB">AWB</option>
	                       </c:if>
	                       <c:if test="${order.orderMode=='S' && not empty order.participatingContainerSchedule}">
	                       <option value="HBL">HBL</option>
	                       </c:if>
	                       <option value="CUSTOMSINVOICE">Customs Invoice</option>
	                       <option value="CUSTOMERINVOICE">Customer Invoice</option>
	                       <option value="PACKINGLIST">Packing List</option>
	                       <option value="ADDITIONALDOCUMENT">Addition Document</option>
	                    </select>
                    </div>
                    <div class="file-upload text-center">
	                    <label for="file">Choose File</label>
	                    <input type="file" name="file" id="file"/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Upload</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>
        </div>
    </div>
</div>
	
	

<div id="boxModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-header">
        		<h3>Add Box</h3>
        	</div>
            <div class="modal-body">
                <div id='content' class="tab-content">
             			
             			<div class="row">
             			<section class="col-sm-5">
						<div class="form-group">
							  <label class="col-md control-label">Select a Box</label>
							  <div class="col-md">
							    <select id="boxlist" name="boxlist" class="form-control" style="width: auto">
							    <option selected value ="0">Choose box</option>
							      
							    </select>
							    
							     
							  </div>
							</div>
							</section>
														
							<section class="col-sm-5" style="margin-left: 10px;">
							<div class="form-group">
							  <label class="col-md control-label">Enter Quantity</label>
							  <div class="col-md">
							  
							     <select id="boxlistqty" name="boxlistqty" class="form-control" style="width: auto" >
							    <option selected value ="0">Choose Quantity</option>
							   
							    </select>
							  </div>
							</div>
							</section>
							</div>
							
							   <div id="itemRowsdiv" style="display: none">
                                    <section class="col-sm-11" id="rowNum0">
                                        <section class="col-sm-3">
                                            <!-- Appended Input-->
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="declaredweight">Declared
                                                        Weight
                                                        <span class="text-danger">*</span>
                                                        </label>
                                                    <div class="input-group">
                                                        <input type="text" name="declared_weight1"
                                                            id="declared_weight1"
                                                            onchange="calculateCustomSize(''+1);" size="4"
                                                            class="form-control input-lg calculatewtfield" /> <span
                                                            class="input-group-addon">Kgs</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </section>


                                        <section class="col-sm-3">
                                            <!-- Appended Input-->
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="length">Length
                                                    <span class="text-danger">*</span>
                                                    </label>

                                                    <div class="input-group">
                                                        <input type="text" name="length1" id="length1"
                                                            onchange="calculateCustomSize(''+1);"
                                                            class="form-control input-lg calculatewtfield" size="4" />
                                                        <span class="input-group-addon">cms</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="col-sm-3">

                                            <!-- Appended Input-->
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="width">Width
                                                    <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="text" name="width1" id="width1"
                                                            onchange="calculateCustomSize(''+1);"
                                                            class="form-control input-lg calculatewtfield" size="4" />

                                                        <span class="input-group-addon">cms</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="col-sm-3">


                                            <!-- Appended Input-->
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <label class="control-label" for="height">Height
                                                    <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="text" name="height1" id="height1"
                                                            onchange="calculateCustomSize(''+1);"
                                                            class="form-control input-lg calculatewtfield" size="4" />
                                                        <input type="hidden" id="consider_weight1"
                                                            name="consider_weight1" value="0" /> <span
                                                            class="input-group-addon">cms</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </section>

                                    </section>
                                
                                </div>
						                	
                </div>
            </div>
            <small>&nbsp;&nbsp;NOTE : Any changes to parcels in Order will affect Product Pricing</small>
            <div class="modal-footer">
            	<button type="button" class="btn btn-success" onclick="addBoxRow()" >Submit</button>
				<button class="btn cancel_btn cancelNav" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="float-navright">
  <a href="javascript:void(0)" class="menu-btns">
    <ul>
      <li class="line"></li>
      <li class="line"></li>
      <li class="line"></li>
    </ul>
  </a>
</div>
<div class="main-navright">
 

				
<button type="button" class="btn btn-warning"><a style="color:#ffffff;text-decoration:none;" onclick="customsinvoice()" target="_blank"><span class="">Customs Invoice&nbsp;&nbsp;<i class="fa fa-building "></i></span></a></button>

<button onclick="createinvoice()" type="button" class="btn btn-primary"><span class="badge"><i class="fa fa-file"></i></span>&nbsp;&nbsp;Download Invoice</button>
					
	<button type="button" id="makepayment" name="makepayment" class="btn btn-success" onclick="makepayment();">
								<i class="fa fa-gbp" aria-hidden="true"></i> Make Payment
			
					
</div>


				
<script type="text/javascript">
var beurl ="<?php echo  $config['INSTANCEURL'];?>";
var feurl ="<?php echo  $config['FRONTENDURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui";

$('#subject').select2({
    theme: "bootstrap"
});

	var url_string = window.location.href
    var url = new URL(url_string);
	var minNumberOfDaysToAdd = "";
	var maxNumberOfDaysToAdd = "";
$(function(){	
$.ajax({
    type: 'GET',
    dataType: 'json',
  	url: instanceurl_o + '/getmyparcel/'+url.searchParams.get("id"),
    error: function (jqXHR, textStatus, errorThrown) {
        console.log('==>> Error in calling url ::' + instanceurl_o + '/order/'+url.searchParams.get("id")  + ' , error :: '+jqXHR + '|' + textStatus + '|' + errorThrown);
    },
    success: function (data) {
    	var d = data;
    	if(d){
		sessionStorage.setItem("orderid",d.id);
		$("#orderno").text(d.id);   
		getOrderAdditionalInfo(d);
		getParcelAdditionalInfo(d);		
		getParcelDetails(d);	
		createProductInfo(d);		
		createCollectionAddress(d);
		getsourcecountrylist(d.collAddress.country);
		createDeliveryAddress(d);
		getdestinationcountrylist(d.deliveryAddress.country);
		generateParcelDiv(d);
		 getOrderStatus(d.status);
		 getInvoiced(d.invoiced);
		 getOrderType(d.docType);
		 createTermsDiv(d);
		 makePaymentHide(d);
		
		
		 minNumberOfDaysToAdd = parseInt(d.product.transitTimeMin);
		 maxNumberOfDaysToAdd=parseInt(d.product.transitTimeMax);
		 calculatedeliverydate(d.collectionDate);
		 createPaymentDetails(d);
	createDocument(d);
        console.log('==>> Success in calling url ::' + instanceurl_o + '/getmyparcel/'+url.searchParams.get("id")  +  ' , data :: '+data);
    	}
		
    }
        
});
});

function getOrderAdditionalInfo(d){
		$("#orderraisedon").text(d.orderDate);
    	$("#orderraisedby").text(d.user.userid);
		$("#coldate").text(d.collectionDateAsPresentableDate);
		$("#collectiondateactual").val(d.collectionDateAsPresentableDate);
		$("#remark").text(d.remarks);
		 $('#paystatus').text(d.paymentcompleted);
}

function getParcelAdditionalInfo(d){
	$("#noofparcel").text(d.numOfParcel);
		$("#parcelvalue").text(d.parcelvalue);
		$("#parcelvalueedit").text(d.parcelvalue);
		$("#parcelcontent").text(d.parcelcontent);
		$("#declaredcontent").text(d.parcelcontent);
		if(d.unit=='kg_cm'){
		$("#consideredweight").text(d.consideredWeight +" kgs");
		}else{
		$("#consideredweight").text(d.consideredWeightLb + " lbs");
		}
}

function getParcelDetails(d){
	if(d.trackingId==null||d.trackingId==''){
			$("#trackingId").text("Not set");
		}else{
		$("#trackingId").append('<a title="Click to track the parcel information" target="_blank" href="'+d.trackingUrl+d.trackingId+'">'+d.trackingId+'</a>');
		}
		if(d.trackingStatus==null||d.trackingStatus==''){
			$("#trackingStatus").text("NA");
		}else{
		$("#trackingStatus").text(d.trackingStatus);
		}
		if(d.trackingStatusLastUpdated==null||d.trackingStatusLastUpdated==''){
			$("#trackingStatusLastUpdated").text("NA");
		}else{
		$("#trackingStatusLastUpdated").text(d.trackingStatusLastUpdated);
		}
}

function createProductInfo(d){
	$("#productactualname").text(d.product.actualName);
		$("#productmarketname").text(d.product.marketingName);
		$("#productmarketnameorder").text(d.product.marketingName);
		$("#productname").text(d.product.marketingName);
		$("#transittime").text(d.product.transitTimeMin);
		$("#transittimeorder").text(d.product.transitTimeMin);
		$("#expandingDescription").html(d.product.description);
		$("#expandingSplInstructions").html(d.product.specialinstructions);
}

function createCollectionAddress(d){
	$("#consignorDiv").append('<p><b>Contact Name :</b> '+d.collAddress.contactName+'</p><p><b>Phone :</b> '+d.collAddress.phoneNumber+'</p><p> '+d.collAddress.addressLine1+'</p><p> '+d.collAddress.addressLine2+'</p><p> '+d.collAddress.addressLine3+'</p><p>'+d.collAddress.city+'</p><p>Postal Code: '+d.collAddress.postCode+'</p><p>'+d.collAddress.country+'</p>');
		$("#colcontactName").val(d.collAddress.contactName);
		$("#colphoneNumber").val(d.collAddress.phoneNumber);
		$("#coladdressLine1").val(d.collAddress.addressLine1);
		$("#coladdressLine2").val(d.collAddress.addressLine2);
		$("#coladdressLine3").val(d.collAddress.addressLine3);
		$("#colcity").val(d.collAddress.city);
		$("#colpostCode").val(d.collAddress.postCode);
}

function createDeliveryAddress(d){
	 	$("#consigneeAddressDiv").append('<p><b>Contact Name :</b> '+d.deliveryAddress.contactName+'</p><p><b>Phone :</b> '+d.deliveryAddress.phoneNumber+'</p><p> '+d.deliveryAddress.addressLine1+'</p><p> '+d.deliveryAddress.addressLine2+'</p><p> '+d.deliveryAddress.addressLine3+'</p><p>'+d.deliveryAddress.city+'</p><p>Postal Code: '+d.deliveryAddress.postCode+'</p><p>'+d.deliveryAddress.country+'</p>');
		$("#delcontactName").val(d.deliveryAddress.contactName);
		$("#delphoneNumber").val(d.deliveryAddress.phoneNumber);
		$("#deladdressLine1").val(d.deliveryAddress.addressLine1);
		$("#deladdressLine2").val(d.deliveryAddress.addressLine2);
		$("#deladdressLine3").val(d.deliveryAddress.addressLine3);
		$("#delcity").val(d.deliveryAddress.city);
		$("#delpostCode").val(d.deliveryAddress.postCode);
}

function createPaymentDetails(d){
		 $("#ratequotedcost").text(d.totalAppliedCost);
		 $("#applieddiscountcost").text(d.totalDiscountCost);
		 $("#appliedvatcost").text(d.totalVatForOrder);
		 $("#insuranceamountcost").text(d.totalInsuranceCost);
		 if(d.totalWeightDifferenceCost>0){
			$("wtDifference").show();
		 $("#wtDiffCharges").text(d.totalWeightDifferenceCost);	
		 }		 
		 $("#appliedtotalCost").text(d.totalPriceForOrder);
		$("#paymentmodetxnid").text(d.paymentmodetxnid);
		
}

function generateParcelDiv(d){
	var count=0;
	if(d.unit=='kg_cm'){
    	 $.each(d.parcelInfoList, function (key, entry) {
    	 	$("#parcelInfoDiv").append('<p>'+entry.length+' X '+entry.width+'  X '+entry.height+' ('+entry.quantity+' Quantity) Decalred Weight :  '+entry.declaredWeight+' kgs </p>');
    	 	count++;
        });
		}else{
		$.each(d.parcelInfoList, function (key, entry) {
    	 	$("#parcelInfoDiv").append('<p>'+entry.lengthInches+' X '+entry.widthInches+'  X '+entry.heightInches+' ('+entry.quantity+' Quantity) Decalred Weight :  '+entry.declaredWeightLbs+' lbs </p>');
    	 	count++;
        });
		}
}

function makePaymentHide(d){
	  if(d.paymentcompleted=='Y')
		{
			$("#makepayment").hide();
		}
	   else{	
			$("#makepayment").show();
		}
		var inum
	  if(d.invoiced=='Y')
			{	$("#invDiv").show();
				inum = getOrderInvoiceId(d.id);
			    $("#orderInvoice").text(inum.invoicenum);
				$("#makepayment").hide();
			}
		 if(d.client.isCreditApplicable=='Y')
		{
			$("#makepayment").hide();
		}
}

function createTermsDiv(d){
	 if(d.prohibiteditemslist == 'Y'){
		 document.getElementById("phbtc").disabled = true;
		 document.getElementById("phbtc").checked = true;
		 }
		 if(d.agreedgmpconditions == 'Y'){
		 document.getElementById("gmptc").disabled = true;
		  document.getElementById("gmptc").checked = true;
		 }
		 if(d.uninsureditemslist == 'Y'){
		 document.getElementById("uninstc").disabled = true;
		document.getElementById("uninstc").checked = true;		 
		 }
		  if(d.weightdifference == 'Y'){
		 document.getElementById("wtdifftc").disabled = true;
		 document.getElementById("wtdifftc").checked = true;
		 }
}

function createDocument(d){
	 if(d.documents==''){
				  $("#orderdocuments").text("No documents avaliable for order")
				  }else{
				   var labelname;
				    var name;
				      	 $.each(d.documents, function (key, entry) {
						 if(entry.type=='PACKINGLIST'){
						 labelname="label label-warning";
						 name="PACKING LIST";
						 }else if(entry.type=='CUSTOMSINVOICE'){
						  labelname="label label-success";
						  name="CUSTOMS INVOICE";
						 }else if(entry.type=='CUSTOMERINVOICE'){
						  labelname="label label-info";
						 name="CUSTOMER INVOICE";
						 }else if(entry.type=='ADDITIONALDOCUMENT'){
						   labelname="label label-default";
						  name="ADDITIONAL DOCUMENT";
						 }
						$("#orderdocuments").append('<div class="col-sm-3 document"> <a title="'+entry.docname+'" href="'+entry.link+'" target="_new"><center> <i class="fa fa-file-o fa-4x"></i><br/><label class="'+labelname+'">'+name+'</label></center></a></div>');
    	
        });
		}
	
}

function getOrderInvoiceId(oid)
{
	 var succeed = 0.0;
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + "/getmyparcel/order/invoicenum/"+oid,
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("==>Error thrown :" + errorThrown);
        },
        success: function(data) {

            var d = data;
            if (d) {
                succeed = d;
				console.log("==>invoicenum");
				console.log(d);
            }
        },

    });
    return succeed;
}
function getOrderType(type){
	if(type=='D'){
		$('#ordertype').text("Documents");
}
else if(type=='N'){
	$('#ordertype').text("Non-Documents");
}
}

function getOrderStatus(status){
	if(status=='CNF')
	$('#orderstatus').text("CONFIRMED");
	else if(status == 'UNC')
	$('#orderstatus').text("UNCONFIRMED");
	else if(status == 'REF')
	$('#orderstatus').text("REFUNDED");							
	else if(status == 'CAN')
	$('#orderstatus').text("CANCELLED");							
	else if(status == 'DEL')
	$('#orderstatus').text("DELIVERED");						
				
if(status=='DEL'){
	$('.float-nav').hide();
}				
}

function getInvoiced(invoiced){
	if(invoiced=='N')
	$('#editparcelinfo').show();
	$('#editdeladd').show();
	$('#editcolladd').show();
	$('#editdoctype').show();
	$('#editdeclaredparcelcontent').show();
	$('#editdeclaredparcelvalue').show();
	$('#editconsideredweight').show();
	$('#editcdate').show();
}

$('#makepayment').click(function(){
	var $this = $(this);
	$this.toggleClass('btn btn-success');
	if($this.hasClass('btn btn-success')){
		$this.text('Make Payment');			
	} else {
		$this.toggleClass('btn btn-success');
		$this.text('Redirecting to Payment Gateway...');
		$('#makepayment').prop('disabled', false);
	}
});

$('#orderRaisedFor').select2();
$("#clientInfo").hide();
$("#ratedialog").hide();

function refreshpage(){
	$('.modal').hide();
	 window.location.reload();
}

function calvatinpercent(){
	
	var vatinpercent = $("#vatonratequotedpercent").val();
	
	var result = 0;
	        result = parseInt($("#vatonratequotedpercent").val()) / 100 * parseInt($("#ratequoted").val());
	        
	        	    console.log(result);
	        $("#vatonratequoted").val(result);
	        
	        var a = parseFloat($('#vatonratequoted').val()),
	        b = parseFloat($('#ratequoted').val());
	        result = a+b;
	        
	        $("#totalratequoted").text(result);
	        console.log( $("totalratequoted").val());
	        console.log( $("totalratequoted").text());
	        console.log( $("totalratequoted").html());
	        	return result;
	        	
    
	   
	
}

var containsShippingLabel = '<c:out value="${containsShippingLabel}"/>';

$('#collectiondateactual').datepicker({format: "dd-mm-yyyy"}).attr('readonly','readonly');
var currTextCollectionDate = '<c:out value="${order.collectionDateAsPresentableDate}"/>';
$('#collectiondateactualBtn').bind('click',function(){
	
	//var newText =$('#collectiondateactual').val();
	var newText = $('#collectiondateactual').val().split('-').reverse().join("-");

	if (currTextCollectionDate != newText){
		updateOrderTextData(oid, 'collectiondateactual', newText,this);
		currTextCollectionDate = newText;
	} 
 });


$('#updateParcelValue').bind ('click',function () {
	var a = updateOrderTextData(oid, "parcelvalue", $('#parcelvalueedit').val(),this);
});


$('#updateDeclaredContent').bind ('click',function () {
	var a = updateOrderTextData(oid, "parcelcontent", $('#declaredcontent').val(),this);
});


function saveRemark(){
	
	var a = updateOrderTextData(oid, "remarks", $('#remarkArea').val(),this);
}


function showClientInfo(){
	$( '#clientInfo' ).dialog({
		resizable: true,
		modal: true,
		width:'auto'
	});
}

var oid = '<c:out value="${order.id}"/>';

function openRatesModal() {
	  $("#ratesModal").modal("show");
	}
	
function editaffcom(){
	$('#editaffiliatecomissionmodal').modal('show');
}

function editpartyadd(){
	$('#editpartyaddmodal').modal('show');
}

function editdeladd(){
	$('#editdeladdmodal').modal('show');
}

function editcolladd(){
	$('#editcolladdmodal').modal('show');
}

function editOrderStatus(){
	$('#editOrderStatusmodal').modal('show');
}

function editappliedcost(){
	$('#editappliedcostmodal').modal('show');
}

function editsdet(){
	$('#editsdetmodal').modal('show');
}
function editsdst(){
	$('#editsdstmodal').modal('show');
}

function editsdd(){
	$('#editsddmodal').modal('show');
}


function editsupplierinfo(){
	$('#editsupplierinfomodal').modal('show');
}
function editinsurance(){
	$('#editinsurancemodal').modal('show');
}

function editcdate(){
	$('#editcdatemodal').modal('show');
}

function editpayid(){
	$('#editpayidmodal').modal('show');
}

function edittracking(){
	$('#edittrackingmodal').modal('show');
}

function editconsideredweight(){
	$('#editconsideredweightmodal').modal('show');
}

function editdeclaredparcelvalue(){
	$('#editdeclaredparcelvaluemodal').modal('show');
	}
	
	
function editdeclaredparcelcontent(){
	$('#editdeclaredparcelcontentmodal').modal('show');
	}

function editcontent(){
	$('#editcontentmodal').modal('show');
	}


function editparcelinfo(){
	$('#editParcelInfoModal').modal('show');
}
function editdoctype(){
	$('#editdoctypemodal').modal('show');
}

function editRemark(){
	$('#editRemarkModal').modal('show');
}
$('#scheduleddeliverydate').datepicker({ format: "yyyy-mm-dd",
	autoclose:true,
	todayHighlight: true
}).attr('readonly','readonly');
var currTextScheduledDeliveryDate = '<c:out value="${order.sheduledDeliverDateAsPresentableDate}"/>';

$('#scheduleddeliverydateBtn').bind('click',function(){
	
	//var newText =$('#scheduleddeliverydate').val();
	var newText = $('#scheduleddeliverydate').val().split('/').reverse().join("-");
	if (currTextScheduledDeliveryDate != newText){
		updateOrderTextData(oid, 'scheduleddeliverydate', newText,this);
		currTextScheduledDeliveryDate = newText;
	} 
 });

function orderRaisefor() {
	$('#editorderraisedforModal').modal('show');
	 $.ajax
	    ({
	          url: "getusers.gmp",
	          cache: false,        
	          success: function(d)
	          {
	        	  var data = JSON.parse(d);
	            for(var i=0;i<data.length;i++){ 
	                $('#orderRaisedFor').append(new Option(data[i].name,data[i].email));
	            }
	          }
	    });
}

 /*   $(window).bind('load', function() {
        $('#help_txn_id').bubbletip($('#help_txn_id_tip'));
        <c:if test="${order.insuranceAmount > 0}">
		$('#help_insurance_id').bubbletip($('#help_insurance_id_tip'));
		</c:if>
    });	*/
	
	// Description set to Expanding
	$("#showDescription").on('click',function(){
		var divHeight = $("#expandingDescription").height();
		if(divHeight > 70) {
			$("#expandingDescription").animate({height:70},20);
			$("#showDescription").text("Read More ...");
		} else {
			var autoheight1 = $('#expandingDescription').css('height', 'auto').height();
			$("#expandingDescription").animate({height:autoheight1},20);
			$("#showDescription").text("Read Less ...");
		}
	});
	$("#showSplInstructions").on('click',function(){

		var divHeight = $("#expandingSplInstructions").height();
		if(divHeight > 70) {
			$("#expandingSplInstructions").animate({height:70},20);
			$("#showDescription").text("Read More ...");
		} else {
			var autoheight1 = $('#expandingSplInstructions').css('height', 'auto').height();
			$("#expandingSplInstructions").animate({height:autoheight1},20);
			$("#showSplInstructions").text("Read Less ...");
		}
	});
	
	 $(".printMeButton").attr( "ef", "javascript:void( 0 )" ).click( function(){
			// Print the DIV.
			$( ".printable" ).print();
			// Cancel click event.
			return( false );
		});
	 


	


	function showEditOrder(){ 
	//	window.location="/admineditorderpage.gmp?id="+<c:out value="${order.id}"/>; 
	}







function openAddNewParcelToOrderModal() {
	$("#parcelInfoModal").modal("show");
}

$('#itemtypedeclaredBtn').bind ('click',function () {
	updateOrderTextData(oid, 'itemtypedeclared', $('#itemtypedeclared').val(),this);
	location.reload(true);
});

$('#updateContainerScheduleDeliveryType').bind('click',function (){
	
	updateOrderTextData(oid, 'container_delivery_type', $('#selectContainerDeliveryType').val(),this);
	refreshpage();
});

function updateOrderTextData(orderId, fieldName,fieldValue,thisData){
	
		var sendemail = "no";
		 var orderid=url.searchParams.get("id");
		 
		 var jsondata={
			 "oid" : orderid,
			 "fname" :fieldName,
			 "fvalue" : fieldValue,
			 "fclass" :"order",
		 }
		
		 $.ajax({
			    url: instanceurl_o +"/getmyparcel/field/update",	
				type : 'POST',
				cache: false,       
				data: JSON.stringify(jsondata),
				success:function(data){
					var d = JSON.parse(data);
					console.log(d);
					/*if(d.status=="success"){
							$(thisData).closest('.mainDivForShowMsg').find('.toggleMsg').html("<div class='alert alert-success'>"+d+"</div>").css("display","inline-block");
						$(thisData).closest('.mainDivForShowMsg').find('.toggleMsg').fadeOut(3000);	
						 window.location.reload();
					}*/
					if(thisData != 'undefined') {
						$(thisData).closest('.mainDivForShowMsg').find('.toggleMsg').html("<div class='alert alert-success'>"+d.status+"</div>").css("display","inline-block");
						$(thisData).closest('.mainDivForShowMsg').find('.toggleMsg').fadeOut(3000);	
						
					} else {
						showSuccessDiv(d.status);
						fadeSuccessDiv(3000);	    
					}		
				},
				error:function(jqX, exception){
	               // alert('Rates Update failed : ' + fieldName + ';'+ fieldValue  + ';'+ exception);
					if(thisData != 'undefined') {
						$(thisData).closest('.mainDivForShowMsg').find('.toggleMsg').html("<div class='alert alert-danger'>"+exception+"</div>").css("display","inline-block");
						$(thisData).closest('.mainDivForShowMsg').find('.toggleMsg').fadeOut(3000);			
					} else {
						showErrorDiv(exception);
						fadeErrorDiv(2000);
					}
				}	
			});			
		    return true;
	}




$('#saveManifestPrice').bind('click',function(){
//	updateOrderTextData(${order.id}, 'manifest_price', $('#manifestPrice').val(), this);
});

function viewSendEmailModal(){
	$("#emailModal").modal("show");
	
	}
	
var emailTable;

if (!emailTable) {
	//emailTable = showemails();

} else {
	//reloademaildatatable();

}

/*function showemails(){
return   emailTable = jQuery("#emailDatatable").DataTable({
	"deferRender" : true,
	autoWidth: false,
	select : true,
	"processing" : true,
	"order" : [ [ 1, "asc" ] ],
	"ajax" : {
		//"url" : "/getAllEmailsByOrderid.gmp?orderid=<c:out value="${order.id}"/>",
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
        	
        	"defaultContent": "" 
    	},
    	 {
        	"targets": 3,
        	
        	"defaultContent": "" 
    	},
    	 {
        	"targets": 4,
        	
        	"defaultContent": "" 
    	},
    	 {
        	"targets": 5,
             "render" : function(cellvalue, options, rowObject) 
             { 
            	 var sub = rowObject.subject;
            	 if(sub.indexOf("Invoice") != -1){
            		 return "<button type='button'   onclick='redirecttoinv()'  class='btn btn-xs btn-danger' title='Resend Email' ><i class='fa fa-repeat' aria-hidden='true'></i></button>";
	 
            	 }else{
            		 return "<button type='button'   onclick='resendemail($(this))'  class='btn btn-xs btn-danger' title='Resend Email' ><i class='fa fa-repeat' aria-hidden='true'></i></button>";

            	 }
                              }
    	},
],

	columns : [ 
		
		{data : "from"},
		{data : "to"},
		{data : "cc"},
		{data : "subject"},
		{data: "datetime"},
		{data : ""}


	],
	
});

return emailTable

}*/

function redirecttoinv(){
	window.location="/admininvoicepage.gmp";
}

/*function reloademaildatatable(){
	//var dataUrl ="/getAllEmailsByOrderid.gmp?orderid=<c:out value="${order.id}"/>";
	emailTable.ajax.url(dataUrl).load();
}*/


function resendemail(data){
	var orderid=sessionStorage.getItem("orderid");
	 event.stopPropagation();
	   if(confirm("Do you want to Resend the email ?")) {
	    this.click;
	var data = emailTable.row(data.parents('tr')).data();
	
    $.post("resendEmail.gmp",
            { 
        	
    	orderid : orderid,
    	from : data.from,
    	to : data.to,
    	cc : data.cc,
    	subject : data.subject ,
		
            },
            function(data){
            	alert(data);
            	 reloademaildatatable();
            });
	
}  else
{
    alert("Cancelled");
}       
event.preventDefault();
}


$("#sendemailsubmit").click(function(){
	var orderid=sessionStorage.getItem("orderid");
	$("#sendemailsubmit").attr("disabled",true);
	 event.stopPropagation();
	   if(confirm("Do you want to Send the Email ?")) {
	    this.click;

	
	var sub = $("#subject").val();
	
	var customsinv;
	var adddoc;
	var packlist; 
	
	if ($('#reqdoc_CUSTOMSINVOICE').prop( "checked" )){
		customsinv = "Customs invoice";
	}
		
		
	if ($('#reqdoc_ADDITIONALDOCUMENT').prop( "checked" )){
		adddoc = "Additional Document";
	}
	if ($('#reqdoc_PACKINGLIST').is(":checked")){
		packlist = "Packing List";
	}
	
	
	
	
	 $.post("resendEmail.gmp",
	            { 
	        	
	    	orderid : orderid,
	    	subject : sub ,
	    	customsinv : customsinv,
	    	adddoc : adddoc,
	    	packlist : packlist,
	    	
	    	
			
	            },
	            function(data){
	            	 alert(data);
	            	 window.location.reload();
	            });
		
}  else
{
    alert("Cancelled");
}       
event.preventDefault();
});

 
function addBoxdiv(){

	 $.ajax
	    ({
	        //  url: "getboxlist.gmp?cid="+"<c:out value="${clientId}"/>",
	          cache: false,        
	          success: function(d)
	          {
	        	 data = JSON.parse(d);
	        	 
	            for(var i=0;i<data.length;i++){ 
	                $('#boxlist').append(new Option(data[i].boxName,data[i].id));
	                
	            }
	          }
	    });

$("#parcelInfoModal").modal("hide");	 
$('#boxModal').modal('show');

var selectValues = {
		  "1": "1", "2": "2",
		  "3":"3","4":"4",
		  "5":"5","6":"6",
		  "7":"7","8":"8",
		  "9":"9",
		  "10":"10", "11":"11",
		  "12":"12","13":"13", "14":"14", "15":"15", "16":"16", "17":"17", "18":"18", "19":"19", "20":"20"};
		var $mySelect = $('#mySelect');
		//
		$.each(selectValues, function(key, value) {
		  var $option = $("<option/>", {
		    value: key,
		    text: value
		  });
		  $('#boxlistqty').append($option);
		});
}

function addparceldiv(){
	$("#parceldiv").css("display","block");
	$("#btnConfirmAddParcelModal").css("display","block");
	$("#addboxdivbtn").css("display","none");
	$("#addparceldivbtn").css("display","none");
}



function addBoxRow() {
	$('#boxModal').modal('hide');

	var orderid=sessionStorage.getItem("orderid");
	//var rowNum = 1;
	var len = '';
	var ht=0;
	var wid=0;
	var wg=0;
	
	var boxQuantity = $("#boxlistqty").val();
	
	var boxid =  $('#boxlist').val();
	
	
	
	  $.ajax({
	        url: "/addbox.gmp",
	        type: "GET",
	        async: false,
	        data: {
	            "bid": boxid,
	            "boxqty": boxQuantity,
	            "orderid": orderid
	        },
	        success: function(d){
	            alert(d);
	            location.reload();
	        },
	        error: function(){
	            alert("error");
	        }
	    });
	
}

function deleteparcel(data){
	//refreshpage();
	
	var parcelid = $("#"+data+"").find('input[name="parcelid"]').val();
	
	  $.ajax({
	        url: "/deleteparcel.gmp",
	        type: "POST",
	        //async: false,
	        data: {
	            "parcelid": parcelid,
	            "orderid": '${order.id}'
	        },
	        success: function(d){
	            alert(d);
	            location.reload();
	        },
	        error: function(){
	            alert("error");
	        }
	    });
	
	
}



function goToKYC(){

	
	//var links="<c:out value="${downloadlinks}"/>"
	
	
  //  window.location="/managecontacts.gmp?cname="+"<c:out value="${order.deliveryAddress.contactName}"/>&aid="+"<c:out value="${order.deliveryAddress.id}"/>";

}

function downloadKYC(cname){
	
	$("#btnkyc").val('Downloading');
	$("#btnkyc").attr("disabled", true);
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "/downloadAllKycForContact?cname="+cname, true);
    ajax.responseType = "blob";
    ajax.onreadystatechange = function () {
        if (this.readyState == 4) {
            
            var blob = new Blob([this.response], { type: "application/octet-stream" });
            var fileName = ""+cname+".zip";
            saveAs(blob, fileName);
        }
        $("#btnkyc").val('Download KYC');
        $("#btnkyc").attr("disabled", false);
        
    };
   
    ajax.send(null);

	 

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
				console.log(d.provider);

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


$( document ).ready(function() {
	var cdt = '${order.containerDeliveryType}';
	if (cdt == 'C'){
		$("#selectContainerDeliveryType").val('C');
	}else{
		$("#selectContainerDeliveryType").val('D');
	}
	
});

function generateShippingLabel(){
	$("#btnShippingLabel").prop("disabled",true);
	$("#btnShippingLabel").text("Generating...");
	$.ajax({
		url : '/createshippinglabel.gmp?oid=<c:out value="${order.id}"/>',
		type : 'POST',
		//dataType : 'text/html',
		success : function(data){						
			alert("Shipping Label Generated and Uploaded placed successfully.");
			window.top.location.reload();
		},
		error : function(jqXhr, exception) {
			console.log(exception);
			alert("Exception thrown while placing order.\n\nMessage = " + exception);
			window.top.location.reload();
		}
	});
}

function sendCustomEmail(){
	
	//window.location="/adminemail.gmp?id="+${order.id}; 
}


function createZohoShip(orderId){
	$("#btnZohoshipment").attr("disabled", true);
	 $.ajax({
		// url: "createzohoshipment.gmp?oid=<c:out value="${order.id}"/>",	
			type : 'POST',
			cache: false,       
			
			success:function(d){
				alert(d);
				location.reload();
			},
			error:function(jqX, exception){
              alert(exception);
              location.reload();
			}	
		});			
	    return true;
}


/*$( document ).ready(function() {
    var dataset = [
      <c:forEach var="product" items="${relproductsList}">
        [
        "<c:out value="${product.id}"/>",
        "<c:out value="${product.actualName}"/>",
        "<c:out value="${product.marketingName}"/>",
        "<c:out value="${product.transitTimeMin}"/> - <c:out value="${product.transitTimeMax}"/> Days",
        "<c:out value="${product.calculatedRateWithoutVat}"/>",
        "<c:out value="${product.calculatedVat}"/>",
        "<c:out value="${product.calculatedFinalRate}"/>",
        "<button class='btn btn-info'><a href='/updateproduct.gmp?id=<c:out value="${order.id}"/>&productid=<c:out value="${product.id}"/>'>Select</a></button>"],
     </c:forEach>                          
    ]

var table = jQuery("#showRatesGrid").DataTable({
    data: dataset,
    "columnDefs": [ 
        {
            "targets": [0],
            "visible": false,
            "searchable": false
        },
     	{
	    	"targets": [4,5,6],
		    "render": function ( data, type, full, meta ) {
		      return 'Â£ ' + data;
	    	}
	  	},

    ],
    columns:[
        {title:"id"},
        {title:"Actual Name"},
        {title:"Marketing Name"},
        {title:"Transit Period"},
        {title:"Cost"},
        {title:"VAT"},
        {title:"Total Cost"},
        {title:""}
        ]
});
});*/



function cancelPickupWithSupplier(){
	$.ajax({
		url : '/order/<c:out value="${order.id}"/>/cancelPickup',
		type : 'POST',
		data: {reasonCode:$('#reasonCode').val()},
		success : function(data){				
			if(data.result == "success") {
				alert("Order Pickup Cancelled Successfully.");
			} else {
				alert("Unable to cancel pickup with Supplier. There has been an Error while making request. Contact your System Administrator for further information. \n\nMessage = " + data.message);
			}
			
			$("#cancelPickupModal").modal("hide");
			window.top.location.reload();
		},
		error : function(jqXhr, exception) {
			console.log(exception);
			alert("Exception thrown while cancelling pickup. Please contact your System Administrator.");
			window.top.location.reload();
		}
	});
}

$(function(){ 

		setTimeout(function() {
		var url_string = window.location.href
       var url = new URL(url_string);
	  var status=url.searchParams.get("status");
	  var msg=url.searchParams.get("message");
	  
	 	if(status == '1'){
	 		$("#payerror").hide();
	 		showSuccessDiv('<div class="alert alert-success">'+ msg +' </div>');
	 	}if(status == '0'){
	 		$("#payerror").show();
	 		showErrorDiv('<div class="alert alert-danger">'+ msg + '</div>');
	 	}
	}, 10)
} );



$("#editCollectionAddress").click(function(){
	var orderid=url.searchParams.get("id");
var jsondata = {
		    "id"   :    orderid,
		    "contactName" :  $("#colcontactName").val(),
		    "phoneNumber" :  $("#colphoneNumber").val(),
		    "addressLine1":  $("#coladdressLine1").val(),
			"addressLine2":  $("#coladdressLine2").val(),
		  	"addressLine3" :  $("#coladdressLine3").val(),
			"county"  :         $("#colcounty").val(),
		    "city"    :        $("#colcity").val(),
		  	"postCode" :  $("#colpostCode").val(),
			"country"  :    $("#colcountry option:selected").text(),
		  	"addresstype" : "C",
		    }

	$.ajax({
		url: instanceurl_o + "/getmyparcel/address/update",
		type:"POST",
		data: JSON.stringify(jsondata),
		success:function(data)
		{	
			var d = JSON.parse(data);
		  console.log(d);
		  $("#editCollectionAddress").closest('.mainDivForShowMsg').find('.toggleMsg').html("<div class='alert alert-success'>"+d.message+"</div>").css("display","inline-block");
						$("#editCollectionAddress").closest('.mainDivForShowMsg').find('.toggleMsg').fadeOut(3000);

		}
	});

});


$("#editDeliveryAddress").click(function(){
	var orderid=url.searchParams.get("id");
var jsondata = {
		    "id"   :    orderid,
		    "contactName" :  $("#delcontactName").val(),
		    "phoneNumber" :  $("#delphoneNumber").val(),
		    "addressLine1":  $("#deladdressLine1").val(),
			"addressLine2":  $("#deladdressLine2").val(),
		  	"addressLine3" :  $("#deladdressLine3").val(),
			"county"  :         $("#delcounty").val(),
		    "city"    :        $("#delcity").val(),
		  	"postCode" :  $("#delpostCode").val(),
			"country"  :    $("#delcountry option:selected").text(), 
		  	"addresstype" : "D",
		    }

	$.ajax({
		url: instanceurl_o + "/getmyparcel/address/update",
		type:"POST",
		data: JSON.stringify(jsondata),
		success:function(data)
		{	
			var d = JSON.parse(data);
		  console.log(d);
		    $("#editDeliveryAddress").closest('.mainDivForShowMsg').find('.toggleMsg').html("<div class='alert alert-success'>"+d.message+"</div>").css("display","inline-block");
						$("#editDeliveryAddress").closest('.mainDivForShowMsg').find('.toggleMsg').fadeOut(3000);
		}
	});

});

	function getsourcecountrylist(sourceCountry) {			
	$.ajax({
		type : 'GET',
		url : instanceurl_o+"/o/getmyparcel/country/source",
		dataType: 'json',
		type: "GET",
		cache : false,
		success : function (data) {
			  console.log('==>> Success in calling url ::' + instanceurl_o + '/o/country/source , data :: '+data);
			 $("#colcountry") .append($("<option></option>").attr("value",sourceCountry).text(sourceCountry)); 
					if(data){
						var count = 0;
						$.each(data.rows, function (key, entry) {                	
						$("#colcountry").append($('<option></option>').attr('value', entry.cell[1]).text(entry.cell[1]));
						count++;
						})
					   }
	           }
	
           });
          }
			
	function getdestinationcountrylist(destinationCountry) {			
	$.ajax({
		type : 'GET',
		url : instanceurl_o+"/o/getmyparcel/country/destination",
		dataType: 'json',
		type: "GET",
		cache : false,
		success : function (data) {
			  console.log('==>> Success in calling url ::' + instanceurl_o + '/o/country/destination , data :: '+data);
			 $("#delcountry") .append($("<option></option>").attr("value",destinationCountry).text(destinationCountry)); 
					if(data){
					var count = 0;
					$.each(data.rows, function (key, entry) {    
					$("#delcountry").append($('<option></option>').attr('value', entry.cell[1]).text(entry.cell[1]));
					count++;
						})
					   }
		
	       }
	
       });
    }
		function createinvoice(){
			 var orderid=url.searchParams.get("id");
		window.open("/invoicecontent.php?id="+orderid,'_blank');
	 		}
			function customsinvoice(){
			 var orderid=url.searchParams.get("id");
		window.open("/customsinvoice.php?id="+orderid,'_blank');
	 		}
			
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


<script>
	$('.openNav').click(function(){
	$(this).parents('.righaction').find('.sidenav').css('width', '450px');
	$('.bodyoverlay').css('display', 'block');
});
$('.closeNav').click(function(){
	$(this).parents('.righaction').find('.sidenav').css('width', '0');
	$('.bodyoverlay').css('display', 'none');
});
$('.cancelNav').click(function(){
	$(this).parents('.righaction').find('.sidenav').css('width', '0');
	$('.bodyoverlay').css('display', 'none');
});

$('.float-navright').click(function() {
  $('.main-navright, .menu-btns').toggleClass('active');
});
</script>

<script language="javascript">
        function CheckFileExtension() {
            var ext = $("#fupSample").val().split('.').pop();
            //alert(ext);
             $("#aa").html(ext)
             $("#aa").show();
        };

    </script>
</body>

</html>