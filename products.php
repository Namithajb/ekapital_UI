<!DOCTYPE html>
<html lang="en">
  <head>
       <title>Products | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
 		 <?php include 'includes/headerAx.php' ?>
		<style>
		.imgwrap img{ 
			margin: 1px 0;
		}
		</style>
		<?php  include 'includes/include_chat_box.php' ?>
		<?php  include 'includes/google_tag_manager_head.php' ?>
      
        </head>
     <body>
		<?php include 'includes/google_tag_manager_body.php' ?>
  		<?php include 'includes/menuAx.php' ?>
        </header>
		<?php
	$cdn=$config['CDNURL'];
	?>

    <!-- Main Content -->
  <main class="padded20">
      <div class="bg-clr02" >
          <div class="container">
              <ol  class="breadcrumb custom-non">
              	             <?php
					 if ( $_SESSION["logged_in"] == "Y") {
						if ( $_SESSION["usertype"] == "B") {	?>		
						<li><a href="/businesshome.php" title=""><i class='fa fa-home'></i>Home</a></li>
						<?php } 
							
						else {?>
						 <li><a href="/" title=""><i class='fa fa-home'></i>Home</a></li>
						 <?php }
							} else {?>
								 <li><a href="/" title=""><i class='fa fa-home'></i>Home</a></li>
						 <?php }?>
                <li class="active">Products</li>
              </ol>
            </div>
				<section class="custom-tab custom-non">
          		<div class="board">
		        <div class="board-inner ">
		          <div class="liner"></div>
		          <div class="container">
		            <ul class="nav nav-tabs" id="myTab">
						<li class="active">
						  <a href="/xhome.gmp" data-toggle="tab" title="welcome">
							<span class="round-tabs one">
							  <i class="glyphicon glyphicon-home"></i>
							</span>
						  </a> <br/>
						  <span>Select Product</span>
						</li>
                      <li>
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
   <div   class = " alert alert-warning" id="validateQuote"  style="display:none ;text-align: center; ">
					</div>	</br>
					
	          	<table class="table addessTable custom-non"> 
	          	<thead>
	          		<tr>
		          		<!--<th>From : <span id="sourceCountry"></span></th>-->
							<th>Quote<br> <span id="sourceCountry"></span>
							<span id="sourceCountry"></span>&nbsp;To&nbsp;  <span id="destinationCountry"></span></th>
		          		<th style="text-align:left"> Currency<br>
							
						<!--<img src="<?php echo $cdn;?>/img/gbp-round-getmyparcel.png" id="currency"  alt="GBP"/>	-->
						<?php
					 if ( $_COOKIE["preferred_currency"] == "GBP") {?>	
						<img src="<?php echo $cdn;?>/img/GBP_selected.png" id="currency"  alt="GBP" />	
						 <?php } else{?>
						 <img src="<?php echo $cdn;?>/img/gbp-round-getmyparcel.png" id="currency"  alt="GBP"/>
						 <?php }?>
						 <?php
					 if ( $_COOKIE["currency_url"] != "null") {?>	
						<img src="<?php echo $cdn;?><?php echo $_COOKIE["currency_url"];?>" id="newCurrency" alt="newCurrency"/>	
						 <?php }?>
						&nbsp;<span id="preferredCurrency"></span>&nbsp;<span id="preferredCurrencyNew"></span></th>
		          		
		          		<!--<th><img src="<?php echo $cdn;?>/img/gbp.jpg" /></th>-->
		          		</tr>
	          	</thead>
	           </table>
        	
        <div class="">
          <div class="wizard-steps01">
            <section class="custom-tab ">
              <div class="board">
                <div class="container">
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="home">
					  
                      <div class="tab-main">
							  <div class="filters-first-row col-md-12">
								<div class="">
									<div class="filters-found-services col-md-6 col-sm-6 col-xs-12" id="serviceamount">
										<span class="serviereslut"><span id="totalProducts"></span> services found, <strong>from <span id="currencySymbol"></span><span id="startingAmount"></span></strong></span>
										
									</div>
								

                        <div class="col-md-6 col-sm-6 col-xs-12 text-right desktop-mode-packages">
                            <div class="filter-found-sizes collapsed" data-toggle="collapse" data-target="#details-list" role="button" aria-expanded="false" aria-controls="details-list">
                                <div class="found-sizes-wrap">
                                    <div class="found-sizes-dimens" id="parcelInfoDiv">
                                             
                                    </div>
                                    <div class="found-sizes-edit">
                                        <a href="javascript:showParcelInfo();" class="btn btn-primary btn-xs"><span id="btnEditParcelList">Edit</span></a>
										<a href="javascript:hideParcelInfo();" class="btn btn-primary btn-xs"><span id="btnCloseParcelList">Close</span></a>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
        	<div class="col-md-12 col-sm-12 col-xs-12">
			<div  id="itemRowsp">
					<div class="col-md-12 col-sm-12 text-right" >
						<button type="button" class="btn btn-success" id="btnAddNewParcelRow"><i class="fa fa-plus"></i> Add More</button>
						<button type="button" class="btn btn-danger" id="btnUpdateParcelInfo"><i class="fa fa-plus"></i> Update Results</button> 
						 <div id="errMsgParcel" class="errorMsg" style="display: none;"></div>
					</div>
					<div class="" id="addp-qoutes"></div>
			</div>
                       
                        <!-- responsive table start -->
                        <div class="col-md-12 col-sm-12 col-xs-12 boxsizeswrap" id="divProducts">
                          <div class="col-md-4 col-sm-4 col-xs-12" >
                            <h2 class="tophead">Express (1-2 Days)</h2>
                            <span id="divExpress">
							</span>
                          

                          </div>

                          <!--express economy -->
                          <div class="col-md-4 col-sm-4 col-xs-12" >
                            <h2 class="tophead">Express Economy (3-5 Days)</h2>
							<span id="divExpressEconomy">
                            
							</span>
                          </div>

                          <!--economy-->
                          <div class="col-md-4 col-sm-4 col-xs-12">
                            <h2 class="tophead">Economy ( > 5 Days)</h2>
                            <span id="divEconomy">
							</span>
                          </div>
                        </div>

                        <div id="no-more-tables">
                          
                        <div class="clearfix"></div>

						<input type="hidden" name="global_row_count" id="global_row_count">
                        <form id="orderForm" role="form" class="form-horizontal" action="collectaddress.gmp" method="post">
					  		<input type="hidden" name="productId" id="productId" />
                            <input type="hidden" name="sourceCountryName" id="sourceCountryName" value="United Kingdom" />
                            <input type="hidden" name="destinationCountryName" id="destinationCountryName" value="India" />
                            <input type="hidden" name="gmt1PostalCode" id="gmt1PostalCode" value="444" />
                            <input type="hidden" name="gmt2PostalCode" id="gmt2PostalCode" value="444" />
                            <input type="hidden" name="consideredWeight" id="consideredWeight" value="3.0" />
                            <input type="hidden" name="docType" id="docType" value="N" />
                            <input type="hidden" name="parcelString" id="parcelString" value="1,2,3,4,3,3&lt;SPLITTER&gt;" />
                             <input type="hidden" name="sourceCountryId" id="sourceCountryId" value="221" />
                            <input type="hidden" name="destinationCountryId" id="destinationCountryId" value="95" />
                            <input type="hidden" name="numOfParcel" id="numOfParcel" value="1" />
                            <input type="hidden" name="orderMode" id="orderMode" value="C" />
                        
					  </form>
                        <hr>

                      </div>

                    </div>
                    <div class="tab-pane fade" id="profile">


                    </div>
                    <div class="tab-pane fade" id="messages">


                    </div>
                    <div class="tab-pane fade" id="settings">

                    </div>
                    <div class="tab-pane fade" id="doner">

                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>


            </section>

            <div class="clearfix"></div>
          </div>


        </div>

        <div class="container">
          <div class="col-sm-12">
            <div class="well" style="width: 100%;">
              * All rates are subject to Remote Area Surcharge or any other charges, depending upon your pickup / destination location, subject to the carrier. Once you raise the order, our customer service will let you know, if there are any more charges based on your order. You will have an option to either continue with the order at that point in time after processing additional payment involved. Please refer to our <a href="/faq.gmp" target="_blank">FAQ's &gt; What is Remote Area Surcharge?</a> - to understand more about Remote area Surcharge and other charges that could be applicable.
            </div>
          </div>

        </div>
      </div>
    </main>
  <!-- Main Content -->
  
  <!-- Footer -->
    
    
	 <!-- Modal -->
  <div class="modal fade" id="infomodal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Description</h4>
        </div>
        <div class="modal-body" id="divInfoModal">
 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>	
 
	  <!-- Footer -->

	<?php  include 'includes/footerAx.php' ?>
  

	<!-- Footer - End -->
  
<script language="javascript" type="text/javascript">
var beurl ="<?php echo  $config['INSTANCEURL'];?>";
var feurl ="<?php echo  $config['FRONTENDURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui/o/getmyparcel";
var instanceurl = beurl + "/api/v1/ui/getmyparcel/";
var unitPreference = '<?php if(isset($_COOKIE["user_preference"])){ echo $_COOKIE["user_preference"]; } ?>';
var currency= '<?php if(isset($_COOKIE["preferred_currency"])){ echo $_COOKIE["preferred_currency"]; } ?>';
var currency_url= '<?php if(isset($_COOKIE["currency_url"])){ echo $_COOKIE["currency_url"]; } ?>';
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
	var currencyUrl="";
if(currency =="GBP"){
	 currecyCode="GBP";
	 exchangeRate=1;
	 currencySymbol="£";
}else{
	getCurrency();
}
	<?php
	if ( $_SESSION["logged_in"] == "Y") {
		
		// Yes, user is logged in, continue to page
		?>
		var producturl=instanceurl;
		<?php
	} else {
		// User is not logged in. Get back to login page
		?>
		var producturl=instanceurl_o;
		<?php
	}
    ?>
	var startingPrice = 999;
	var totalProductsCount = 0;
	
	var currencyList=null;
	function getCurrency(){
			$.ajax({
		type: 'GET',
		dataType: 'json',
		url: instanceurl_o + "/quote/currency",
			success: function (d) {
				currencyList=d;
			if(d!=null){
				 for (var i=0;i < d.length; i++){
								if(d[i].currencyCode!='GBP'){
									
									 currecyCode=d[i].currencyCode;
									exchangeRate=d[i].exchangeRate;
									currencySymbol=d[i].currencySymbol;
									currencyUrl=d[i].selectedImageUrl;
									if(currency_url=="null"){
									$("#preferredCurrency").append("<img src=<?php echo $cdn;?>"+currencyUrl+">&nbsp;");
									}
									$('#newCurrency').attr('src', "<?php echo $cdn;?>"+d[i].selectedImageUrl);
									document.cookie = "preferred_currency="+currecyCode;
									document.cookie="currency_url="+d[i].imageUrl;
								}
								else{
									if(d.length==1){
									$('#currency').attr('src', "<?php echo $cdn;?>"+d[i].selectedImageUrl);
									document.cookie = "preferred_currency=GBP";
									}
								}
							 }
		/* currecyCode=d.currencyCode;
		 exchangeRate=d.exchangeRate;
		 currencySymbol=d.currencySymbol;
		 currencyUrl=d.imageUrl;
			if(currecyCode!="GBP"){
			$("#currency").append(new Option(currecyCode,currecyCode,true,true));
			//$("#preferredCurrency").append("<img src=<?php echo $cdn;?>/img/usd-round-getmyparcel.png>");
			$("#preferredCurrency").append("<img src=<?php echo $cdn;?>"+currencyUrl+">");
			}else{
				
			}*/
			}
				//document.cookie = "preferred_currency="+currecyCode;
			},
			error: function(e){
				logDebugMsg("Exception While loading product list " + e);
			}
		})
	}
	
	 $('#currency').click(function (){
		 var alt = $(this).attr("alt");
			document.cookie = "preferred_currency="+alt;	
			location.reload();
    	   }); 
$('#newCurrency').click(function (){
		 var alt = $(this).attr("alt");
			document.cookie = "preferred_currency="+alt;	
			location.reload();
    	   });   		   
	function generateProductsTabs(){
	$('#divExpressEconomy').text("Loading Products....");
	$('#divExpress').text("Loading Products....");
	$('#divEconomy').text("Loading Products....");
	
	$.ajax({
		type: 'GET',
		dataType: 'json',
		url: producturl + "/quote/product",
			success: function (d) {
			if(d){
				
				if(d.status=="failed")
				{ 
					
					$('#validateQuote').show();
					 $('#validateQuote').html("Your quote information couldnt be retrieved, please <a href='/index.php'>raise a quote again</a> or contact our <a href='/contact.php'>support team</a>");
				}
				$('#divExpressEconomy') .find('text').remove();
				$('#divExpress') .find('text').remove();
				$('#divEconomy') .find('text').remove();
			// Express Economy Product
			calculateExpressEconomy(d.expressEconomy);
			calculateExpress(d.express);
			calculateEconomy(d.economy);
			var expressEconomy =  d.expressEconomy;
			var express =  d.express;
			var economy =  d.economy;

			if(expressEconomy.length==0&&express.length==0&&economy.length==0){
				var x = document.getElementById('serviceamount');
				x.style.visibility = 'hidden';  
			}
			}
			generateParcelList();
			},
			error: function(e){
				logDebugMsg("Exception While loading product list " + e);
			}
		})
	}
	
	function generateParcelList(){
		$.ajax({
			type: 'GET',
			dataType: 'json',
			url: instanceurl_o + "/quote/parcelInfo",
			success: function (d) {
			
			if(d){
				$("#sourceCountry").text(d.sourceCountryName);
				$("#destinationCountry").text(d.destinationCountryName)
				d=d.parcelInfoList;
		$('#parcelInfoDiv').empty(); 
		      $.each( d, function( key, value ) {
				var id = value.id;
				var q = value.quantity;
			if(unitPreference=='kg_cm'){
                var l = value.length;
                var dw = value.declaredWeight;
                var h = value.height;
                var id = value.id;
                var w = value.width;
				}
				else{
				var l = value.lengthInches;
                var dw = value.declaredWeightLbs;
                var h = value.heightInches;
                var w = value.widthInches;
				  }

			$('#parcelInfoDiv').append('<p class="lable-list" data-package-id1="0">'+q+' Parcel,'+dw+' '+weightUnit+', '+l+' x '+w+' x '+h+' '+unit+'</p>');
			});
						}
					logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/quote/parcelInfo'  + ' , data :: '+d);
					},
			error:function(e){
			  logDebugMsg("Exception While loading parcel list " + e);
				}
			});	

	}
	
 $(document).ready(function(){
	//generateParcelList();

	generateProductsTabs();
	
	$('.found-sizes-edit').click(function(){
		$('#itemRowsp').slideToggle();
	});

	$('#btnEditParcelList').show();
	$('#btnCloseParcelList').hide();
	
	$('#btnAddNewParcelRow').click(function(){
		addRowProduct();
	});
	
	$('#btnUpdateParcelInfo').click(function(){
		updateParcelInfo();
	});
});

function calculateExpressEconomy(expressEconomy){
		if( (expressEconomy) && (expressEconomy.length !=0) ){
				var count = 0;
				var productCount = 0;

				$('#divExpressEconomy').empty();
				$.each( expressEconomy, function( key, value ) {
						// Calculate and show Strarting price 
						if(startingPrice > expressEconomy[count].calculatedFinalRate){
						   startingPrice = expressEconomy[count].calculatedFinalRate;
						   $("#startingAmount").text(startingPrice*exchangeRate);
						   $("#currencySymbol").html(currencySymbol);
						} 
						productCount = count + 1;
					
						var content = buildExpressEconomyResults(expressEconomy[count]);
						$('#divExpressEconomy').append(content);
						//$('#divInfoModal').append(expressEconomy[count].shortDescription + "<br>"+expressEconomy[count].specialinstructions);
						count++;
					});
				totalProductsCount = totalProductsCount + productCount;
				$("#totalProducts").text(totalProductsCount);
			}else {
					// No products found
				   $('#divExpressEconomy').empty();
		$('#divExpressEconomy').append('<div class="col-md-12 col-sm-12 col-xs-12 boxdetail no-padding"> <div class="headerbox col-md-12 col-sm-12 no-padding"> <div class="col-md-4 col-sm-4 col-xs-12 leftlogo"> <div class="imgwrap"> <img src="<?php echo $cdn;?>/img/products/no-products-found.png" /> </div> </div> <div class="col-md-8 col-sm-8 col-xs-12 rightcon"> <h3></h3> <p></p> </div> </div> <div class="col-md-12 col-sm-12 rateborder"> <span class="ratec">No Express Economy Products found</span> <span></span> </div> <div class="col-md-12 col-sm-12 rateborder"> <div class="col-md-6 col-sm-6 no-padding"> <span class="ratec"> No Products found</span> </div> <div class="col-md-6 col-sm-6 "> </div> </div> <div class="col-md-12 col-sm-12 col-xs-12 bottomsec"> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <a href="javascript:void(0)"> </div> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> </div> </div> </div');
		}
}
 
function calculateExpress(express)
{
   if( (express) && (express.length !=0) ){
					var count = 0;
					var productCount = 0;
					$('#divExpress').empty();
					$.each( express, function( key, value ) {
						// Calculate and show Strarting price 
						if(startingPrice > express[count].calculatedFinalRate){
						   startingPrice = express[count].calculatedFinalRate;
						   $("#startingAmount").text(startingPrice);
						}
						productCount = count + 1;
						
						var content = buildExpressResults(express[count]);
						$('#divExpress').append(content);
						//$('#divInfoModal').append(express[count].shortDescription + "<br>"+express[count].specialinstructions);
						count++;
					});
					totalProductsCount = totalProductsCount + productCount;
					$("#totalProducts").text(totalProductsCount);
				} else {
				// No products found
				$('#divExpress').empty();
         		$('#divExpress').append('<div class="col-md-12 col-sm-12 col-xs-12 boxdetail no-padding"> <div class="headerbox col-md-12 col-sm-12 no-padding"> <div class="col-md-4 col-sm-4 col-xs-12 leftlogo"> <div class="imgwrap"> <img src="<?php echo $cdn;?>/img/products/no-products-found.png" /> </div> </div> <div class="col-md-8 col-sm-8 col-xs-12 rightcon"> <h3></h3> <p></p> </div> </div> <div class="col-md-12 col-sm-12 rateborder"> <span class="ratec">No Products found</span> <span></span> </div> <div class="col-md-12 col-sm-12 rateborder"> <div class="col-md-6 col-sm-6 no-padding"> <span class="ratec"> No Products found</span> </div> <div class="col-md-6 col-sm-6 "> </div> </div> <div class="col-md-12 col-sm-12 col-xs-12 bottomsec"> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <a href="javascript:void(0)"> </div> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> </div> </div> </div');
				}	
}

function calculateEconomy(economy){
				if( (economy) && (economy.length !=0) ){
					var count = 0;
					var productCount = 0;
					$('#divEconomy').empty(); 
				  $.each( economy, function( key, value ) {
					// Calculate and show Strarting price 
					if(startingPrice > economy[count].calculatedFinalRate){
						startingPrice = economy[count].calculatedFinalRate;
						$("#startingAmount").text(startingPrice);
					}
					productCount = count + 1;

					var content = buildEconomyResults(economy[count]);
					$('#divEconomy').append(content);
					//$('#divInfoModal').append(economy[count].shortDescription + "<br>"+economy[count].specialinstructions);
					count++;
					});
				   totalProductsCount = totalProductsCount + productCount;
				   $("#totalProducts").text(totalProductsCount);
               }else{
				   // No products found
				  $('#divEconomy').empty();
         		  $('#divEconomy').append('<div class="col-md-12 col-sm-12 col-xs-12 boxdetail no-padding"> <div class="headerbox col-md-12 col-sm-12 no-padding"> <div class="col-md-4 col-sm-4 col-xs-12 leftlogo"> <div class="imgwrap"> <img src="<?php echo $cdn;?>/img/products/no-products-found.png" /> </div> </div> <div class="col-md-8 col-sm-8 col-xs-12 rightcon"> <h3></h3> <p></p> </div> </div> <div class="col-md-12 col-sm-12 rateborder"> <span class="ratec">No Products found</span> <span></span> </div> <div class="col-md-12 col-sm-12 rateborder"> <div class="col-md-6 col-sm-6 no-padding"> <span class="ratec"> No Products found</span> </div> <div class="col-md-6 col-sm-6 "> </div> </div> <div class="col-md-12 col-sm-12 col-xs-12 bottomsec"> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <a href="javascript:void(0)"> </div> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> </div> </div> </div');
         	  }
	
}
 

function buildExpressEconomyResults(expressEconomyProduct){
	var str = '<div class="col-md-12 col-sm-12 col-xs-12 boxdetail no-padding"> <div class="headerbox col-md-12 col-sm-12 no-padding"> <div class="col-md-4 col-sm-4 col-xs-12 leftlogo"> <div class="imgwrap"> <img src=<?php echo $cdn;?>'+expressEconomyProduct.imageUrl+' > </div> </div> <div class="col-md-8 col-sm-8 col-xs-12 rightcon"> <h3>'+expressEconomyProduct.marketingName+' </h3> <p>Estimated Transit Time '+expressEconomyProduct.transitTimeMin+' - '+expressEconomyProduct.transitTimeMax+' Days</p> </div> </div> <div class="col-md-12 col-sm-12 rateborder"> <span class="ratec">'+currencySymbol+ +expressEconomyProduct.calculatedRateWithoutVat * exchangeRate+'</span> <span>Standard Rate</span><br>';
	if(expressEconomyProduct.totalExcessCharge>0) {
	str+=('<span id="excessInfo" class="smaltxt"><span style="color: red;">* </span>Rate inc £'+expressEconomyProduct.totalExcessCharge * exchangeRate+' for<a href="help.php#excesses"> OverDimension/ OverWeight excess </a> </span>');
	}
	str+=('</div> <div class="col-md-12 col-sm-12 rateborder"> <div class="col-md-6 col-sm-6 no-padding"> <span class="ratec">' +currencySymbol+ +expressEconomyProduct.calculatedFinalRate* exchangeRate+'</span> <span class="smaltxt">Total Rate inc Vat</span> </div> <div class="col-md-6 col-sm-6 "> <a href="javascript:bookProduct('+expressEconomyProduct.id+')" class="bookqo">Book</a> </div> </div> <div class="col-md-12 col-sm-12 col-xs-12 bottomsec"> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <a href="javascript:void(0)"><i class="fa fa-print" aria-hidden="true"></i> Printer Required</a> </div> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <a href="javascript:getproductinfo('+expressEconomyProduct.id+')"><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a> </div> </div> </div>');
	return str;
}


function buildExpressResults(expressProduct){
	var str = '<div class="col-md-12 col-sm-12 col-xs-12 boxdetail no-padding"> <div class="headerbox col-md-12 col-sm-12 no-padding"> <div class="col-md-4 col-sm-4 col-xs-12 leftlogo"> <div class="imgwrap"> <img src=<?php echo $cdn;?>'+expressProduct.imageUrl+' > </div> </div> <div class="col-md-8 col-sm-8 col-xs-12 rightcon"> <h3>'+expressProduct.marketingName+' </h3> <p>'+expressProduct.transitTimeMin+' > '+expressProduct.transitTimeMax+' Days</p> </div> </div> <div class="col-md-12 col-sm-12 rateborder"> <span class="ratec">'+currencySymbol+ +expressProduct.calculatedRateWithoutVat * exchangeRate+'</span> <span>Standard Rate</span> <br>';
	if(expressProduct.totalExcessCharge>0){
	str+=('<span id="excessInfo" class="smaltxt"><span style="color: red;">* </span>Rate inc £'+expressProduct.totalExcessCharge * exchangeRate+' for <a href="help.php#excesses"> OverDimension/ OverWeight excess </a> </span>');
	}
	str+=('</div> <div class="col-md-12 col-sm-12 rateborder"> <div class="col-md-6 col-sm-6 no-padding"> <span class="ratec">' +currencySymbol+ +expressProduct.calculatedFinalRate * exchangeRate+'</span> <span class="smaltxt">Total Rate inc Vat</span> </div> <div class="col-md-6 col-sm-6 "> <a href="javascript:bookProduct('+expressProduct.id+')" class="bookqo">Book</a> </div> </div> <div class="col-md-12 col-sm-12 col-xs-12 bottomsec"> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <a href="javascript:void(0)"><i class="fa fa-print" aria-hidden="true"></i> Printer Required</a> </div> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <a href="javascript:getproductinfo('+expressProduct.id+')"><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a> </div> </div> </div>');
	return str;
}

function buildEconomyResults(economyProduct){
	var str = '<div class="col-md-12 col-sm-12 col-xs-12 boxdetail no-padding"> <div class="headerbox col-md-12 col-sm-12 no-padding"> <div class="col-md-4 col-sm-4 col-xs-12 leftlogo"> <div class="imgwrap"> <img src=<?php echo $cdn;?>'+economyProduct.imageUrl+' > </div> </div> <div class="col-md-8 col-sm-8 col-xs-12 rightcon"> <h3>'+economyProduct.marketingName+'</h3> <p>Estimated Transit Time '+economyProduct.transitTimeMin+' - '+economyProduct.transitTimeMax+' Days</p> </div> </div> <div class="col-md-12 col-sm-12 rateborder"> <span class="ratec">' +currencySymbol+ +economyProduct.calculatedRateWithoutVat * exchangeRate+'</span> <span>Standard Rate</span><br>';
	if(economyProduct.totalExcessCharge>0) {
		
	str+=('<span id="excessInfo" class="smaltxt"><span style="color: red;">* </span>Rate inc £'+economyProduct.totalExcessCharge * exchangeRate+' for <a href="help.php#excesses"> OverDimension/ OverWeight excess </a> </span>');
	}
	str+=('</div> <div class="col-md-12 col-sm-12 rateborder"> <div class="col-md-6 col-sm-6 no-padding"> <span class="ratec">' +currencySymbol+ +economyProduct.calculatedFinalRate * exchangeRate+'</span> <span class="smaltxt">Total Rate inc Vat</span> </div> <div class="col-md-6 col-sm-6 "> <a href="javascript:bookProduct('+economyProduct.id+')" class="bookqo">Book</a> </div> </div> <div class="col-md-12 col-sm-12 col-xs-12 bottomsec"> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <a href="javascript:void(0)"><i class="fa fa-print" aria-hidden="true"></i> Printer Required</a> </div> <div class="col-md-6 col-sm-6 col-xs-12 text-center"> <a href="javascript:getproductinfo('+economyProduct.id+')" ><i class="fa fa-info-circle" aria-hidden="true"></i> More Info</a> </div> </div> </div>');
	return str;
}


 function bookProduct(productid){
	$.ajax({
		url: instanceurl_o + "/quote/product/"+productid,
		type:"POST",
		cache:"false",
		success:function(data)
		{
			logDebugMsg("Product booking response ==>"+data);
			window.location.href = feurl + "/login.php?a=co";
		}
	});
 }
 
  function getproductinfo(productid){
	$.ajax({
		url: instanceurl_o + "/product/"+productid,
		type:"GET",
		cache:"false",
		success:function(data)
		{
          var d = JSON.parse(data);
			$('#divInfoModal').empty();			  
			$('#divInfoModal').append(d.shortDescription + "<br>"+d.specialinstructions);
			$('#infomodal').modal();
		}
	});
 }


function nextPage(pid){
    $('#productId').val(pid)
    document.forms[0].submit();
}

function setPracelRows(){
	var parcelString = $("#parcelString").val();
	if(parcelString != ""){
	var rowNumNew = $('#number_of_parcel').val();
	if (rowNumNew > rowNum){
	  var rowsToBeAdded = rowNumNew - rowNum;
	  for (var t=1;t<=rowsToBeAdded;t++){
		addRow();
	  }
	}

    var parcelStringArray = parcelString.split("<SPLITTER>");
    for(var i = 0; i < parcelStringArray.length; i++){

      var rvalue = parcelStringArray[i].split(",");     
      $("#length" + (i+1)).val(rvalue[1]);
      $("#width" + (i+1)).val(rvalue[2]);
      $("#height" + (i+1)).val(rvalue[3]);      
      $("#declared_weight" + (i+1)).val(rvalue[4]);
      $("#consider_weight" + (i+1)).val(rvalue[5]);
    }
    
    calculateConsideredWeight();
  } 
}

	function addRow() {
		  rowNum ++;
		  var newRow = '<div class="row" id="rowNum'+rowNum+'"><span class="qoute-remove" onclick="removeRow('+ ''+rowNum + ');"> <i class="fa fa-times" aria-hidden="true"></i> </span><div class="col-sm-2"><div class="form-group"><label for="quantity" class="sr-only">Quantity</label> <select placeholder="Quantity"     name="quanityname'+rowNum+'" id="quanityname'+rowNum+'" value="' + $("#quanityname").val() + '" onchange="calculateCustomSize('+ ''+rowNum + ');" class="form-control input-lg calculatewtfield inputshd" ><option value="">Quantity</option><option value="">1</option><option value="">2</option><option value="">3</option><option value="">4</option><option value="">5</option><option value="">6</option><option value="">7</option><option value="">8</option><option value="">9</option><option value="">10</option><option value="">11</option><option value="">12</option><option value="">13</option><option value="">14</option><option value="">15</option><option value="">16</option><option value="">17</option><option value="">18</option><option value="">19</option><option value="">20</option></select></div></div><div class="col-sm-3"><div class="form-group"><label for="quote_declated" class="sr-only">Declared</label><div class="input-group input-group-lg"><input type="text" placeholder="Declared" name="declared_weight'+rowNum+'" id="declared_weight'+rowNum+'" value="' + $("#declared_weight").val() + '" onchange="calculateCustomSize('+ ''+rowNum + ');" size="4" class="form-control input-lg calculatewtfield"/><span class="input-group-addon" >kgs</span></div></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_length" class="sr-only">Length</label><div class="input-group input-group-lg"><input type="text" placeholder="Length" name="length'+rowNum+'" id="length'+rowNum+'" value="' + $("#length").val() + '" onchange="calculateCustomSize('+ ''+rowNum + ');"  class="form-control input-lg calculatewtfield" size="4" /><span class="input-group-addon" >cms</span></div></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_width" class="sr-only">Width</label><div class="input-group input-group-lg"><input type="text" name="width'+rowNum+'" id="width'+rowNum+'" value="' + $("#width").val() + '" onchange="calculateCustomSize('+ ''+rowNum + ');" placeholder="Width" class="form-control input-lg calculatewtfield" size="4"/><span class="input-group-addon" >cms</span></div></div></div><div class="col-sm-3"><div class="form-group"><label for="quote_height" class="sr-only">Height</label><div class="input-group input-group-lg"><input type="text" placeholder="Height" name="height'+rowNum+'" id="height'+rowNum+'" value="' + $("#height").val() + '" onchange="calculateCustomSize('+ ''+rowNum + ');" class="form-control input-lg calculatewtfield" size="4"/><span class="input-group-addon" >cms</span></div></div></div></div>';  
		  jQuery('#itemRows').append(newRow);
		  $('#number_of_parcel').val(rowNum);
		 
		  
		  // reset 1st row values
		  $("#length").val('');
		  $("#height").val('');
		  $("#width").val('');
		  $("#declared_weight1").val('');
		  $("#consider_weight0").val('');
		}
 
function removeRow(rnum) {
  jQuery('#rowNum' + rnum).remove(); 
  jQuery('#rowBtn' + rnum).remove();  
  rowNum = rowNum - 1;
  $('#number_of_parcel').val(rowNum); 
  calculateConsideredWeight();
} 

var rowNum = 0;
function addRowProduct() {
  rnum = $("#global_row_count").val();
  if(rnum){
    rowNum = rnum;
  }
 
  rowNum ++;
  var newRow = '<div class="itemrowpr" id="rowNum'+rowNum+'"><span class="qoute-remove2" onclick="removeRow('+ ''+rowNum + ');"> <i class="fa fa-times" aria-hidden="true"></i> </span><div class="col-sm-2"><div class="form-group"><label for="quantity" class="sr-only">Quantity</label> <select placeholder="Quantity"     name="quanityname'+rowNum+'" id="quanityname'+rowNum+'" value="-1" onchange="calculateCustomSize('+ ''+rowNum + ');" class="form-control input-lg calculatewtfield inputshd" ><option value="-1">Quantity</option><option value="">1</option><option value="">2</option><option value="">3</option><option value="">4</option><option value="">5</option><option value="">6</option><option value="">7</option><option value="">8</option><option value="">9</option><option value="">10</option><option value="">11</option><option value="">12</option><option value="">13</option><option value="">14</option><option value="">15</option><option value="">16</option><option value="">17</option><option value="">18</option><option value="">19</option><option value="">20</option></select></div></div><div class="col-sm-2 custwidth"><div class="form-group"><label for="quote_declated" class="sr-only">Declared</label><div class="input-group input-group-lg"><input type="text" placeholder="Declared" name="declared_weight'+rowNum+'" id="declared_weight'+rowNum+'"  onchange="calculateCustomSize('+ ''+rowNum + ');" size="4" class="form-control input-lg calculatewtfield"/><span class="input-group-addon" >'+weightUnit+'</span></div></div></div><div class="col-sm-2 custwidth"><div class="form-group"><label for="quote_length" class="sr-only">Length</label><div class="input-group input-group-lg"><input type="text" placeholder="Length" name="length'+rowNum+'" id="length'+rowNum+'"  onchange="calculateCustomSize('+ ''+rowNum + ');"  class="form-control input-lg calculatewtfield" size="4" /><span class="input-group-addon" >'+unit+'</span></div></div></div><div class="col-sm-2 custwidth"><div class="form-group"><label for="quote_width" class="sr-only">Width</label><div class="input-group input-group-lg"><input type="text" name="width'+rowNum+'" id="width'+rowNum+'"  onchange="calculateCustomSize('+ ''+rowNum + ');" placeholder="Width" class="form-control input-lg calculatewtfield" size="4"/><span class="input-group-addon" >'+unit+'</span></div></div></div><div class="col-sm-2 custwidth"><div class="form-group"><label for="quote_height" class="sr-only">Height</label><div class="input-group input-group-lg"><input type="text" placeholder="Height" name="height'+rowNum+'" id="height'+rowNum+'"  onchange="calculateCustomSize('+ ''+rowNum + ');" class="form-control input-lg calculatewtfield" size="4"/><input type="hidden" id="consider_weight'+rowNum+'" name="consider_weight'+rowNum+'"/><span class="input-group-addon" >'+unit+'</span></div></div></div></div>'; 
  
  jQuery('#itemRowsp').append(newRow);
  $('#number_of_parcel').val(rowNum);
  $("#global_row_count").val(rowNum);
  
  // reset 1st row values
  $("#length").val('');
  $("#height").val('');
  $("#width").val('');
  $("#declared_weight").val('');
  $("#consider_weight0").val('');
}
function removeRow(rnum) {
  jQuery('#rowNum' + rnum).remove(); 
  jQuery('#rowBtn' + rnum).remove();  
  rowNum = rowNum - 1;
  $('#number_of_parcel').val(rowNum); 
  $("#global_row_count").val(rowNum); 
  calculateConsideredWeight();
}

var myArray = [];

function calculateConsideredWeight(){
  var totalConsWt = 0;
  for (var b=1;b<=rowNum;b++){
    var currConsWt = calculateIndividualConsideredWt(b);
	if (currConsWt == false) continue;
    totalConsWt = totalConsWt + currConsWt;
  } 
  if(totalConsWt > 0.5 )
    totalConsWt = Math.round(totalConsWt)
  $('#consider_weight0').val(totalConsWt);  
}
var l_value=0;
var w_value=0;
var h_value=0;
var dw_value=0;
function getParcelInfoDetails(){

	var numOfRows = $("#global_row_count").val();
	myArray = [];
	if ( (numOfRows != undefined) && (numOfRows != "") ){
		var l,h,w,cw,dw,qty;
		for (var b=1;b<=numOfRows;b++){
			l=$.trim($("#length"+b).val()); 
			h=$.trim($("#height"+b).val());
			w=$.trim($("#width"+b).val());
			cw = $.trim($("#consider_weight"+b).val());
			dw = $.trim($("#declared_weight"+b).val());
			qty = $( "#quanityname"+b+" option:selected" ).text();

			if ( l!="" && h!="" && w!="" && dw!="" && qty != "") {
			  // push only if its a valid row
			  if(unitPreference == 'kg_cm'){
			  myArray.push({
				  length: l, 
				  height: h,
				  width: w,
				  declaredWeight:dw,
				  quantity:qty
				  
			  });
			} 
			else
			{
			myArray.push({
			  quantity:qty,
			  lengthInches: l, 
			  widthInches: w,
			  heightInches: h,
			  declaredWeightLbs:dw
			});
			}
			}else {
			  // invalid row - ignore 
			  // no errors on screen though
			} // end if else
		 // end for
	}
	}else{
		  
		var l=$.trim($("#length").val());
		var h=$.trim($("#height").val());
		var w=$.trim($("#width").val());
		var cw = $.trim($("#consider_weight").val());
		var dw = $.trim($("#declared_weight").val());
		var qty = $( "#quanityname option:selected" ).text();
		if(unitPreference == 'kg_cm'){
		myArray.push({
					length: l, 
					height: h,
					width: w,
					declaredWeight:dw,
					quantity:qty 

					});
	}
	else{
		myArray.push({
			  quantity:qty,
			  lengthInches: l, 
			  widthInches: w,
			  heightInches: h,
			  declaredWeightLbs:dw
			});
	}
	
	}
	logDebugMsg('==>' + myArray);
}

function convertInchTocm(value)
{
	return Math.ceil(value * 2.54);
}
function convertKgToLb(value){
	return value * 2.2046;
}
function convertLbToKg(value){
	return value * 0.4536;
}


function calculateIndividualConsideredWt(rnum){

  var dweight_raw = $('#declared_weight'+rnum).val();
  var pl = $("#length" + rnum).val();
  var pw = $("#width"+ rnum).val();
  var ph = $("#height"+ rnum).val();
  var qty = $( "#quanityname"+rnum+" option:selected" ).text();
    
  if (pl == '' ||
      pw == '' || 
      ph == '' || 
      dweight_raw == '')
    return false;
   
    // Handle the decimals.
    pl = Math.ceil(pl); $("#length" + rnum).val(pl);
    pw = Math.ceil(pw); $("#width"+ rnum).val(pw);
    ph = Math.ceil(ph); $("#height"+ rnum).val(ph);  

	var dweight = parseFloat(dweight_raw);
	var cweight_raw = $('#consider_weight'+ rnum).val();
	var cweight  = 0;
	if (cweight_raw != '')
		cweight = parseFloat(cweight_raw);   


  var finalWt = computeWeight(pl, pw, ph);
  finalWt = qty * finalWt;
  
  if(rowNum > 1 && finalWt == '0.5')
    finalWt = Math.round(finalWt);

  $('#consider_weight'+rnum).val(finalWt);  
  return finalWt; 
}

function computeWeight(l,w,h){

  var r=0;
  if(!l)l=0;
  if(!w)w=0; 
  if(!h)h=0;
  
  
  try{ 
    r=(parseFloat(l) * parseFloat(w) * parseFloat(h))/5000;
    if(isNaN(r))
      r=0;
  }catch(e){
    // nothing
  };
  
  return r; 
}
  
function getClosestNum(num) { 
  var i = 0, closest, closestDiff, currentDiff;
  if(ar.length)
  {
    closest = 0;
    for(var i=0;i < ar.length;i++)
    {           
      if (num > closest){
        closest = ar[i];
      } else {
        break;
      }
    }
    //returns first element that is closest to number
    return closest;
  }
    
  //no length
  return false;
}
function validate(){
  calculateConsideredWeight();
  var status = true;
  if (status) status = validateEmpty('#postal_code', 'Collection Address Post code cannot be empty');
  if (status) status = validateUnallowedValue ('#source_country', "", 'Invalid Source country. Pls choose a source country of your parcel');
  if (status) status = validateUnallowedValue ('#destination_country', "", 'Invalid Destination country. Pls choose the destination of your parcel');

  if (!status) {
    return false;
  }
  
  var bReturn = true;
  for (i=1;i<=rowNum;i++){
    if (validateParcels(i) == false){
      bReturn = false;
      break;
    }
  }

  if (bReturn == false){
    showErrorDiv('Invalid parcel information. Enter all parcel dimensions and weight information. All values must be greater than 0');
    return bReturn; // invalid cant proceed
  } else {
    hideErrorDiv();
  }

  for (i=1;i<=rowNum;i++){
    if(parseFloat($('#declared_weight' + i).val())> 300){
      showErrorDiv('The weight you have mentioned is more than the maximum weight for a usual parcel. '+
          'Please send an email to info@ekapital.co.uk for custom handling and rates and we will be '+
          'happy to assist you get the best deals.');
      return false;     
    }
  }
  
  if (status) status = validateEmpty('#consider_weight0', 'Invalid parcel information. Pls complete all parcel rows to proceed');
  if (status) status = validateHasPostiveValue ('#consider_weight0', 'Total weight considered should be greater than 0. No parcels to courier.'); 
  if (status) status = validateConsidredWeightLessThan ('#consider_weight0', 300, 'Total weight considered should be less than 300.');
  if (!status) {
    return false;
  } 
}

function validateParcels(Ix){
  if (jQuery.isNumeric($('#length' + Ix).val()) 
    &&  jQuery.isNumeric($('#width' + Ix).val())
    && jQuery.isNumeric($('#height' + Ix).val())
    && jQuery.isNumeric($('#declared_weight' + Ix).val()) )
  {
    // all numeric 
    if (parseFloat($('#length' + Ix).val()) != 0 &&
      parseFloat($('#width' + Ix).val()) != 0 &&
      parseFloat($('#height' + Ix).val()) != 0 &&
      parseFloat($('#declared_weight' + Ix).val()) != 0 &&
	  $('#quanityname' + Ix).val() != -1) {
        return true;
    }  else {
      // one of the values is 0
      return false; 
    }
  } else {
    // invalid. reject.
    return false; 
  }
}

function nextPage(){
  // get for base fields
  var finalStr = appendToString(1); 
  // get list of other field values
  for (i=2;i<=rowNum;i++){
    finalStr = finalStr + '<SPLITTER>' + appendToString(i);
  }
  finalStr = finalStr + '<SPLITTER>'; 
  $('#parcelString').val(finalStr);
}



  
  
function calculateCustomSize(rnum){
	calculateConsideredWeight(); 
}

 function updateParcelInfo(){
	var bReturn=validateparcel();
	 if(bReturn==false){
		 return bReturn;
	 }
	 getParcelInfoDetails();
	
	$.ajax({
		type: 'POST',
		url: instanceurl_o + "/quote/update",
		data: JSON.stringify(myArray),
		success:function(data){
			logDebugMsg("=> " + data );
			generateProductsTabs();
		}
	});

 }


function validateparcel(){	
var rowNum=$("#global_row_count").val();
var bReturn=true;
for (i=1;i<=rowNum;i++){
    if (validateParcels(i) == false){
      bReturn = false;
      break;
    } 
	 
  }

  if (bReturn == false){
     showErrorDivWithName('errMsgParcel','Invalid parcel information. Enter all parcel dimensions and weight information. All values must be greater than 0');
    return bReturn; // invalid cant proceed
  } else {
    hideErrorDivWithName('errMsgParcel');
  }

  for (i=1;i<=rowNum;i++){
    if(parseFloat($('#declared_weight' + i).val())> 300){
      showErrorDivWithName('errMsgParcel','The weight you have mentioned is more than the maximum weight for a usual parcel. '+
          'Please send an email to info@ekapital.co.uk for custom handling and rates and we will be '+
          'happy to assist you get the best deals.');
      return false;     
    }
  }
  }
  
  

 function hideParcelInfo(){
  $('#btnEditParcelList').show();
  $('#btnCloseParcelList').hide();
 }
 
 function showParcelInfo(){

  $('#btnEditParcelList').hide();
  $('#btnCloseParcelList').show();
  logDebugMsg("==> calling URL : "+ instanceurl_o + "/quote/parcelInfo");
  $.ajax({
            type: 'GET',
            url: instanceurl_o + "/quote/parcelInfo",
            success:function(data){
              var count = 1;
              var d = JSON.parse(data);
			 d=d.parcelInfoList;
			  $('#addp-qoutes').empty();
              $.each( d, function( key, value ) {
				  var id = value.id;
				   var q = value.quantity;
				 if(unitPreference=='kg_cm'){
                var l = value.length;
                var dw = value.declaredWeight;
                var h = value.height;
                var id = value.id;
                var l = value.length;
                var w = value.width;
				  }
				  else{
				var l = value.lengthIn;
                var dw = value.declaredWeightLbs;
                var h = value.heightInches;
                var l = value.lengthInches;
                var w = value.widthInches;
				  }
                $('#addp-qoutes').append('<div class="itemrowpr" id="rowNum'+count+'"><span class="qoute-remove2" onclick="removeRow('+count+');"> <i class="fa fa-times" aria-hidden="true"></i> </span><div class="col-sm-2"><div class="form-group"><label for="quantity" class="sr-only">Quantity</label> <select placeholder="Quantity"     name="quanityname" id="quanityname'+count+'" value="'+q+'" text="'+q+' "onchange="calculateCustomSize(1);" class="form-control input-lg  inputshd" ><option selected value ='+q+'>'+q+'</option><option value="">1</option><option value="">2</option><option value="">3</option><option value="">4</option><option value="">5</option><option value="">6</option><option value="">7</option><option value="">8</option><option value="">9</option><option value="">10</option><option value="">11</option><option value="">12</option><option value="">13</option><option value="">14</option><option value="">15</option><option value="">16</option><option value="">17</option><option value="">18</option><option value="">19</option><option value="">20</option></select></div></div><div class="col-sm-2 custwidth"><div class="form-group"><label for="quote_declated" class="sr-only">Declared</label><div class="input-group input-group-lg"><input type="text" placeholder="Declared" name="declared_weight" id="declared_weight'+count+'" value="'+dw+'" onchange="calculateCustomSize(1);" size="4" class="form-control input-lg "/><span class="input-group-addon" >'+weightUnit+'</span></div></div></div><div class="col-sm-2 custwidth"><div class="form-group"><label for="quote_length" class="sr-only">Length</label><div class="input-group input-group-lg"><input type="text" placeholder="Length" name="length" id="length'+count+'" value="'+l+'" onchange="calculateCustomSize(1);"  class="form-control input-lg " size="4" /><span class="input-group-addon" >'+unit+'</span></div></div></div><div class="col-sm-2 custwidth"><div class="form-group"><label for="quote_width" class="sr-only">Width</label><div class="input-group input-group-lg"><input type="text" name="width" id="width'+count+'" value="'+w+'" onchange="calculateCustomSize(1);" placeholder="Width" class="form-control input-lg " size="4"/><span class="input-group-addon" >'+unit+'</span></div></div></div><div class="col-sm-2 custwidth"><div class="form-group"><label for="quote_height" class="sr-only">Height</label><div class="input-group input-group-lg"><input type="text" placeholder="Height" name="height" id="height'+count+'" value="'+h+'" onchange="calculateCustomSize(1);" class="form-control input-lg " size="4"/><input type="hidden" id="consider_weight'+count+'" name="consider_weight"/><span class="input-group-addon" >'+unit+'</span></div></div></div></div>');

                count++;
              });
              $("#global_row_count").val(count-1); 
			  logDebugMsg("==> Number of rows of parcels currently - :" + $("#global_row_count").val());
            }
        });
 }
</script>
<script>
 
</script>
</body>
</html>
