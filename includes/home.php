      <style>
         .specialMsgBox {
              background-color:#ffffbf;
              color:#131304;;
              padding: 12px;
        border: #d4d4d4 solid 1px;
        border-radius: 25px;
          }
          .specialMsgBoxInnerText{
              padding: 5px;
          }
          .marqueeBg {
              background-color:#ff7373;
              color:#222222;
              font-weight:bold;
              font-size:16px;
          }
          #readmoreSurcharge{
              color:#131304;
          }
        </style>
  </head>
     
   
  <body> 
   
  <!-- Main Content -->
  
  <div class="container home-content">

        <div class="row">

        <input type="hidden" name="global_row_count" id="global_row_count">
<!-- =============== COVID-19 UPDATE START ===================== -->    
<div class="col-md-12 col-sm-12" >
  
    
     

    <div id ="readmoreSurcharge" class="modal fade" style="z-index:9999;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">COVID-19 Service Impact Update</h4>
        </div>
       <div class="modal-body">
       <div class="specialMsgBoxInnerText"> 
            ### STAY HOME STAY SAFE ### 
        </div> 
        <div>
           GetMyParcel.com and Key Logistics Suppliers are playing a crucial role in keeping necessary goods moving and delivering critical relief during the COVID-19 crisis. We are trying to work with different local partners to ensure deliveries under lockdown, where possible. Lockdown and shelter in place restrictions are still ongoing in various parts of the world, many in accordance with World Health Organization (WHO) guidance.  These restrictions are disrupting the global supply chain in different ways. Cargo flow has been fluid and the circumstances changing on a daily basis. 
        </div> 
        <div>
            There are some additional surcharges which have been implemented by few Logistics Suppliers (aka Courier Companies), which we hope will disappear in the coming months. We are transparent to our customers in all segments where these surchages have been implemented or are currently in effect.
        </div> 
         <br>
         <hr>
         <div>
            <b>Qt) What if I have more questions on this?</b>
        </div>
        <div>
            Ans) If you have any more questions and want to know how these rates will affect you, please get in touch with us by emailing us at - info@getmyparcel.com
        </div>
        
         <hr>
         <br>
       
        <div>
            We recognise the trust you place in us when we deliver to your doorstep, shipping dock or place of business. Thank you for putting your trust in us, and we remain focused on serving you. 
        </div> 
          </div>
        </div>
      </div>
    </div>
    <!-- =============== COVID-19 UPDATE END ===================== -->
          <div class="col-md-12 col-sm-12">

            <div class="quote-box">
            <form id="orderForm" role="form" action="products.php" method="post">
            <ul class="nav nav-tabs">
				<li class="active" onclick="javascript:setCurrentQuote('parcel');"><a  class="doct" data-toggle="tab" href="#parceltab">Parcels</a></li>
				<li onclick="javascript:setCurrentQuote('document');"><a class="sectab" data-toggle="tab" href="#documentab">Documents</a></li>
			</ul>
              
    <div class="tab-content">
  
      <div id="parceltab" class="tab-pane fade in active">
              <div class="row">
			  
         <div id="errMsgParcel" class="errorMsg" style="display: none;"></div>
                <div class="col-sm-5">
                  <div class="form-group">
                    <label for="Source-Country" class="sr-only">Source Country</label>
                    
                    <select id="source_country" name="sourceCountryId" placeholder="Select Source Country" class="form-control input-lg inputshd" >
                        <option value="">Loading countries...</option>
                    </select>
                  </div>
                </div>


                <!--<div class="col-sm-2">
                  <div class="form-group">
                    <label for="quote_source_postcode" class="sr-only">Post Code</label>
                    <input type="text" name="gmt1PostalCode" class="form-control input-lg inputshd" id="postal_code" placeholder="Post Code"/>
                  </div>
                </div>-->
                
                

              

                <div class="col-sm-5">
                  <div class="form-group">
                    <label for="Destination-Country" class="sr-only">Destination</label>
                    <select name="destinationCountryId" class="form-control  input-lg inputshd" id="destination_country" placeholder="Select Destination Country">
                        <option value="">Loading countries...</option>
                    </select>
                    <!-- 
                    <form:select path="destinationCountryId" class="form-control  input-lg" id="destination_country" placeholder="Select Destination Country">
              <form:option value="" >Choose Destination Country</form:option>
              <form:option value="-3" disabled="true" >------------- Most Popular ----------------</form:option>
              <form:option value="95" >To: India</form:option>
              <form:option value="45" >To: China</form:option>
              <form:option value="223" >To: USA</form:option>
              <form:option value="157" >To: Nigeria</form:option>
              <form:option value="79" >To: Ghana</form:option>
              <form:option value="220" >To: United Arab Emirates</form:option>
              <form:option value="-2" disabled="true" >---------------------------------------------</form:option>
              <c:forEach var="country" items="${countryList}" >
                <form:option value="${country.cid}">To: ${country.cname}</form:option>
              </c:forEach>            
                    </form:select> 
                    -->
                  </div>
                </div>

               <!-- <div class="col-sm-2">
                  <div class="form-group">
                    <label for="quote_destination_postcode" class="sr-only">Post Code</label>
                    <input type="text" id="post" name="gmt2PostalCode" class="form-control input-lg inputshd" placeholder="Post Code" />
                  </div>
                </div>-->
				<div class="col-sm-2">
					<div class="form-group">
						
						<select placeholder="Unit Type" class="form-control input-lg inputshd" name="preset-units" id="preset-units">
							<option value="kg_cm" selected="selected">kgs/cms</option>
							<option value="lb_in">lbs/inches</option>
						</select>
				</div>
			</div>
            



          </div>
        
      <div id="itemRows">
        
              <div class="row" id="add-qoutes">
              <div class="col-sm-2">
                  <div class="form-group">
                     <label for="quantity" class="sr-only">Quantity</label>
                  <select placeholder="Quantity" class="form-control input-lg inputshd" name="quanityname1" id="quanityname1">
                        <option value="-1">Quantity</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>
                    
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="quote_declated" class="sr-only">Declared Wt.</label>
                    <div class="input-group input-group-lg">
                     
                      <input type="text" placeholder="Declared Wt" name="declared_weight1" id="declared_weight1" size="4" class="form-control input-lg inputshd calculatewtfield"/> 
                      <span class="input-group-addon" id="weight_unit1">kgs</span>
                    </div>
                  </div>
                </div>

                <div class="col-sm-2">
                  <div class="form-group">
                    <label for="quote_length" class="sr-only">Length</label>
                    <div class="input-group input-group-lg">
                      <!-- <input type="text" class="form-control" placeholder="Length" id="quote_length" name="quote_length"> -->
                      <input type="text" placeholder="Length" name="length1" id="length1"  class="form-control input-lg inputshd calculatewtfield" size="4" />
                      <span class="input-group-addon" id="length_unit1"  >cm</span>
                    </div>
                  </div>
                </div>

                <div class="col-sm-2">
                  <div class="form-group">
                    <label for="quote_width" class="sr-only">Width</label>
                    <div class="input-group input-group-lg">
                      <!-- <input type="text" class="form-control" placeholder="Width" id="quote_width" name="quote_width"> -->
                      <input type="text" name="width1" id="width1" placeholder="Width" class="form-control input-lg inputshd calculatewtfield" size="4"/>
                      <span class="input-group-addon" id="width_unit1" >cm</span>
                    </div>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="quote_height" class="sr-only">Height</label>
                    <div class="input-group input-group-lg">
                      <!-- <input type="text" class="form-control" placeholder="Height" id="quote_height" name="quote_height"> -->
                      <input type="text" placeholder="Height" name="height1" id="height1" class="form-control input-lg inputshd calculatewtfield" size="4"/>
            <input type="text" id="consider_weight" name="consider_weight" value="0" style="display: none;" />   
                      <span class="input-group-addon" id="height_unit1">cm</span>
                    </div>
                  </div>
                </div>

              </div>
              
        </div>

            <!--  <div class="row">
              <div class="col-sm-3">
                <div class="input-group">
        <input name="consider_weight0" id="consider_weight0" size="4" type="text"  class="form-control input-sm" readonly="readonly" />
                  <span class="input-group-addon">Kgs</span>
                </div>
                </div>
              </div> -->
            <div class="row">
              <div class="col-sm-3">
                  <div class="form-group">
                    <label for="consider_weight0" class="sr-only">Considered</label>
                    <div class="input-group input-group-lg">
                      <input type="text" placeholder="Chargeable Wt" name="consider_weight0" id="consider_weight0" size="4" readonly="readonly" class="form-control input-lg calculatewtfield"/> 
                      <span class="input-group-addon" id="consideredwt_unit" >kgs</span>
                    </div> 
          
                  </div>
                </div>
         <div class="col-sm-3 hidden-xs">
            <div class="help-tooltip">
            
            <u><a class="question" href="#" style="color:#ffffff">
             <br> What is this field? </span>
            </a></u>
            <div class="help-tooltip-hover">
              <span aria-hidden="true" class="glyphicon glyphicon-triangle-top"></span>
              <p>
              <b>Considered weight</b> : Look at Quick Help section below.
              </p>
            </div>
            </div>
          </div>
      
<!--
                <div class="col-sm-6 hidden-sm hidden-md hidden-lg hidden-xl" id="docsizehelp-2">
            <select class="select-style" style="text-align:right">
                <option name="docs_size" value="a4">A4</option>
                            <option name="docs_size" value="a5">A5</option>
                            <option name="docs_size" value="other">Other</option>
            </select>
          </div>
-->
        </div>

              <div class="row">
              
                <div class="col-sm-7 col-xs-4">
                  <div>
                    <button type="button" id="btnInstantQuotex" class="btn  btn-block btn-instance hidden-xs" style="cursor:pointer;" onclick="instantQuoteClicked()"><i class="fa fa-check"></i> Instant Quote</button>
                    <button type="button" class="btn btn-success btn-more visible-xs" id="add-more-parcel2" onclick="addRow()"><i class="fa fa-plus"></i></button>
                  </div>
                </div>

                <div class="col-sm-5 col-xs-8">
                  <div>
                    <button type="button" class="btn btn-success btn-more hidden-xs" id="add-more-parcel" onclick="addRow()"><i class="fa fa-plus"></i> Add More Parcel</button>
                    <button type="button" id="btnInstantQuotex" class="btn  btn-block btn-instance visible-xs" style="cursor:pointer;" onclick="instantQuoteClicked()" ><i class="fa fa-check"></i> Instant Quote</button> 
					
                  </div>
                </div>

              </div>
                <input type="hidden" name="productId" id="productId" />
                <input type="hidden" name="parcelString" id="parcelString" />
                <input type="hidden" name="sourceCountryName" id="sourceCountryName" />
                <input type="hidden" name="destinationCountryName" id="destinationCountryName" />
				  <input type="hidden" name="preferredCurrency" id="preferredCurrency" value="0" />
                 </div>

                 <!--documenttab-->
                 <div id="documentab" class="tab-pane fade">
                 <div class="row">
        <div id="errMsgDocuments" class="errorMsg" style="display: none;"></div>
                <div class="col-sm-5">
                  <div class="form-group">
                    <label for="Source-Country" class="sr-only">Source Country</label>
                    <!-- <select id="Source-Country" name="quote_parcel_type"  class="form-control input-lg" placeholder="Source Country" >
                      <option>Source Country</option>
                      <option>Parcel Contents Type</option>
                      <option>Parcel Contents Type 2</option>
                    </select> -->
                    <!-- 
                    <form:select path="sourceCountryId" class="form-control input-lg" id="source_country" placeholder="Select Source Country"   >
            <form:option value="" >Choose Source Country</form:option>
            <c:forEach var="country" items="${countryList}">
                  <c:choose>
                      <c:when test="${country.cname eq 'United Kingdom'}">
                         <form:option value="${country.cid}" selected="true">From: ${country.cname}</form:option>
                      </c:when>
                      <c:otherwise>
                          <form:option value="${country.cid}">From: ${country.cname}</form:option>
                      </c:otherwise>
                  </c:choose> 
              </c:forEach>
          </form:select>
                    -->
                    <select id="source_country2" placeholder="Select Source Country" class="form-control input-lg inputshd" >
                        <option value="">Loading countries...</option>
                    </select>
                  </div>
                </div>


                <!--<div class="col-sm-2">
                  <div class="form-group">
                    <label for="quote_source_postcode" class="sr-only">Post Code</label>
                    <input type="text" name="gmt1PostalCode" class="form-control input-lg inputshd" id="postal_code1" placeholder="Post Code"/>
                  </div>
                </div>-->
                
                

              

                <div class="col-sm-5">
                  <div class="form-group">
                    <label for="Destination-Country" class="sr-only">Destination</label>
                    <select name="destinationCountryId" class="form-control  input-lg inputshd" id="destination_country2" placeholder="Select Destination Country">
                        <option value="">Loading countries...</option>
                    </select>

                  </div>
                </div>

               <!-- <div class="col-sm-2">
                  <div class="form-group">
                    <label for="quote_destination_postcode" class="sr-only">Post Code</label>
                    <input type="text" id="post" name="gmt2PostalCode" class="form-control input-lg inputshd" placeholder="Post Code" />
                  </div>
                </div>-->
				<div class="col-sm-2">
					<div class="form-group">
						
						<select placeholder="Doc Type" class="form-control input-lg inputshd" name="preset-unitsdoc" id="preset-unitsdoc">
							<option value="kg_cm" selected="selected">kgs/cms</option>
							<option value="lb_in">lbs/inches</option>
						</select>
				</div>
			</div>




          </div>
        
      <div id="itemdocu">
        
              <div class="row" id="add-qoutes">
                 <div class="col-sm-2">
                  <div class="form-group">
                     <label for="quantity" class="sr-only">Quantity</label>
                  <select placeholder="Quantity" class="form-control input-lg inputshd" name="quanitynames1" id="quanitynames1">
                        <option value="-1">Quantity</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>
                    
                  </div>
                </div>
                <!-- <div class="col-sm-4" id="docsizehelp">
                  <div class="form-group">
                    <label for="quote_declated" class="sr-only">Doc Type</label>
                       <div class="form-group">
                         <input   
                               data-radiocharm-label="A4" 
                               data-radiocharm-icon="A4" 
                               type="radio"
                               name="doc_size" 
                               id="a4"
                               value="a4">
                        <input data-radiocharm-label="A5" 
                               data-radiocharm-icon="A5" 
                               type="radio"
                               name="doc_size" 
                               id="a5" 
                               value="a5">
                         <input checked
                               data-radiocharm-label="Other" 
                               data-radiocharm-icon="Other" 
                               type="radio"
                               name="doc_size" 
                               id="other" 
                               value="other">
                      </div>
                  </div>
                </div> -->

                <div class="col-sm-2">
                  <div class="form-group">
                    <label for="quote_length" class="sr-only">Declare Weight</label>
                    <div class="input-group input-group-lg">
                     
                      <input type="text" placeholder="Weight" name="weights1" id="weights1"  class="form-control input-lg inputshd calculatewtfielddoc" size="4" />
                      <span class="input-group-addon" id="weight_unitdoc1" >kgs</span>
                    </div>
                  </div>
                </div>
				<div class="col-sm-2">
					<div class="form-group">
						<label for="quote_declated" class="sr-only">Doc Type</label>
						<select placeholder="Doc Type" class="form-control input-lg inputshd" name="preset-doctype" id="preset-doctype">
							<option value="other">Other</option>
							<option value="a4">A4</option>
							<option value="a5">A5</option>
                    </select>
				</div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <label for="quote_length" class="sr-only">Length</label>
                    <div class="input-group input-group-lg">
                      <input type="text" placeholder="Length" name="lengths1" id="lengths1"  class="form-control input-lg inputshd calculatewtfielddoc" size="4" />
                      <span class="input-group-addon" id="length_unitdoc1" >cm</span>
                    </div>
                  </div>
                </div>

                <div class="col-sm-2">
                  <div class="form-group">
                    <label for="quote_width" class="sr-only">Width</label>
                    <div class="input-group input-group-lg">
                      <input type="text" name="widths1" id="widths1" placeholder="Width" class="form-control input-lg inputshd calculatewtfielddoc" size="4"/>
                      <span class="input-group-addon" id="width_unitdoc1">cm</span>
                    </div>
                  </div>
                </div>

                <div class="col-sm-2">
                  <div class="form-group">
                    <label for="quote_height" class="sr-only">Height</label>
                    <div class="input-group input-group-lg">
                      <input type="text" placeholder="Height" name="heights1" id="heights1" class="form-control input-lg inputshd calculatewtfielddoc" size="4"/>
					  <input type="hidden" id="consider_weightd1" name="consider_weightd1" value="0"/>   
                      <span class="input-group-addon" id="height_unitdoc1">cm</span>
                    </div>
                  </div>
                </div>
				

              </div>
              
        </div>
            <div class="row">
              <div class="col-sm-3">
                  <div class="form-group">
                    <label for="quote_declated" class="sr-only">Considered</label>
                    <div class="input-group input-group-lg">
                      <input type="text" placeholder="Chargeable Wt" name="consider_weightd" id="consider_weightd" size="4" readonly="readonly" class="form-control input-lg calculatewtfield"/> 
                      <span class="input-group-addon" id="consideredwt_unitdoc">Kgs</span>
                    </div> 
          
                  </div>
                </div>
         <div class="col-sm-3 hidden-xs">
            <div class="help-tooltip">
            
            <u><a class="question" href="#" style="color:#000">
             <br> What is this field? </span>
            </a></u>
            <div class="help-tooltip-hover">
              <span aria-hidden="true" class="glyphicon glyphicon-triangle-top"></span>
              <p>
              <b>Considered weight</b> : Look at Quick Help section below.
              </p>
            </div>
            </div>
          </div>
      
        </div>

              <div class="row">
              
                <div class="col-sm-7 col-xs-4">
                  <div>
                    <button type="button" id="btnInstantQuotex2" class="btn  btn-block btn-instance hidden-xs" style="cursor:pointer;" onclick="instantQuoteClickedDoc()"><i class="fa fa-check"></i> Instant Quote</button>
                    <button type="button" class="btn btn-success btn-more visible-xs" id="add-more-parcel2" onclick="addRow()"><i class="fa fa-plus"></i></button>
                  </div>
                </div>

                <div class="col-sm-5 col-xs-8">
                  <div>
                    <button type="button" class="btn btn-success btn-more hidden-xs" id="add-more-parceld" onclick="addRowd()"><i class="fa fa-plus"></i> Add More Parcel</button>
                    <button type="button" id="btnInstantQuotex2" class="btn  btn-block btn-instance visible-xs" style="cursor:pointer;" onclick="instantQuoteClickedDoc()" ><i class="fa fa-check"></i> Instant Quote</button>
                  </div>
                </div>

              </div>
                <input type="hidden" name="productId" id="productId" />
                <input type="hidden" name="parcelString" id="parcelString" />
                <input type="hidden" name="sourceCountryName" id="sourceCountryName" />
                <input type="hidden" name="destinationCountryName" id="destinationCountryName" />
          </div>
          </div>
        </form>
            </div>
			
			<script language="javascript" type="text/javascript">

var rowNum = 1;
var ar = new Array();
var beurl ="<?php echo  $config['INSTANCEURL'];?>";
var feurl ="<?php echo  $config['FRONTENDURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui/o/getmyparcel";


function getDestinationCountries(){
	
	$.ajax
	({
		  url: instanceurl_o + "/country/destination",
		  dataType: 'json',
		  type: "GET",
		  cache: false,        
		  success: function(data)
		  {
			$('#destination_country') .find('option').remove();
            $("#destination_country").append("<option value=-1>Choose Destination Country</option>");
	        $('#destination_country2') .find('option') .remove();
            $("#destination_country2").append("<option value=-1>Choose Destination Country</option>");
			for(var i=0;i<data.rows.length;i++){		
				$('#destination_country').append(new Option(data.rows[i].cell[1],data.rows[i].id));
				$('#destination_country2').append(new Option(data.rows[i].cell[1],data.rows[i].id));
			} // end for
			
		  },
		  error: function(e){
			  console.log("Exception While loading Destination countries " + e);
		  }
	});
	
	return true;
}


async function setInitialPageSetup(){
	
	//if (getCookie("gmpsessionid")){
	//	// session is already set
	//	getSourceAndDesitnationCountries();
	//} else {
		$.ajax
		({
			  url: instanceurl_o + "/user/session",         
			  dataType: 'json',
			  type: "GET",             
			  success: function(data)
			  {
				setCookie("gmpsessionid",data.sessionid,5);
				sessid = getCookie("gmpsessionid");
				console.log('==>Session cookie set: '+ sessid);
				
				getSourceAndDesitnationCountries();
			  },
			  error: function(e){
				  console.log("Exception While loading Source countries " + e);
			  }
			 
		});
	//}
	
}

function getSourceAndDesitnationCountries(){
	// First get the source countries 

	
	$.ajax
	({
		  url: instanceurl_o + "/country/source",         
		  dataType: 'json',
		  type: "GET",
		  cache: false,                  
		  success: function(data)
		  {
			$('#source_country2').find('option').remove();
			$('#source_country').find('option').remove();
			for(var i=0;i<data.rows.length;i++){ 
				 if(data.rows[i].cell[1] == 'United Kingdom') {
					$('#source_country').append(new Option(data.rows[i].cell[1],data.rows[i].id,true,true));
					$('#source_country2').append(new Option(data.rows[i].cell[1],data.rows[i].id,true,true));
				 }
				else {
					$('#source_country').append(new Option('From: '+data.rows[i].cell[1],data.rows[i].id));
					$('#source_country2').append(new Option('From: '+data.rows[i].cell[1],data.rows[i].id));
				}
			} // end for
			
			
			// Then get the Destination countries 
			getDestinationCountries();
		  },
		  error: function(e){
			  console.log("Exception While loading Source countries " + e);
		  }
		 
	});
}


 $("#global_row_count").val(rowNum);
function instantQuoteClicked(){
	var myArray=[];
 	stripCountryNameAdditives();
	stripWhiteSpaceWithEntries();	
	var bReturn = validateParcelsTab();	
	if (bReturn == false){
		return bReturn; // invalid cant proceed
	} 
	 myArray=getParcelInfoDetails(); 
	 console.log(myArray);
	var parcelSize = myArray.length;
	//myArray = myArray[parcelSize - 1];
	checkCountryName();
     var jsondata = {"sourceCountryId": $( "#source_country" ).val() ,
                     "destinationCountryId": $( "#destination_country" ).val(),
                      "sourceCountryName": $( "#source_country option:selected" ).text(),
                       "destinationCountryName": $( "#destination_country option:selected" ).text(),
                       "declaredWeight": $( "#declared_weight" ).val(), 
                       "consideredWeight": $( "#consider_weight0" ).val(),
                       "docType": "N",
                       "parcelInfoList": myArray,
					    "unit":$("#preset-units").val(),
						"preferredCurrency":$("#preferredCurrency").val()
						
                    }
      
	 $.ajax({
		url: instanceurl_o + "/quote",
		type:"POST",
		data: JSON.stringify(jsondata),
		success:function(data)
		{
			document.cookie = "user_preference="+$("#preset-units").val();
			document.cookie="currency_url=null";
			console.log(data);
			window.location.href = feurl + "/products.php";
		}
	});
}

function checkCountryName(){
	if(($( "#source_country option:selected" ).text()=='United Kingdom') && ($( "#destination_country option:selected" ).text()=='United Kingdom') ){
		document.cookie = "preferred_currency=GBP";
		$("#preferredCurrency").val("GBP");
	}else{
		document.cookie = "preferred_currency=null";
	}
}
function instantQuoteClickedDoc(){
var myArray2=[];
	 stripCountryNameAdditivesDoc();
	stripWhiteSpaceWithEntries();	
	var bReturn = validateDoc();	
	if (bReturn == false){
		return bReturn; // invalid cant proceed
	} 
  myArray2=getParcelInfoDetails2(); 
	var parcelSize = myArray2.length;
	//myArray2 = myArray2[parcelSize - 1];
	
     var jsondata = {"sourceCountryId": $( "#source_country2" ).val() ,
                     "destinationCountryId": $( "#destination_country2" ).val(),
                      "sourceCountryName": $( "#source_country2 option:selected" ).text(),
                       "destinationCountryName": $( "#destination_country2 option:selected" ).text(),
                       "declaredWeight": $( "#weights1" ).val(), 
                       "consideredWeight": $( "#consider_weightd" ).val(),
                       "docType": "D",
                       "parcelInfoList": myArray2 ,
					   "unit":$("#preset-unitsdoc").val()
                    }
                     
                     $.ajax({
                    url: instanceurl_o + "/quote",
                    type:"POST",
                    data: JSON.stringify(jsondata),
                    success:function(data)
                    {
                     document.cookie = "user_preference="+$("#preset-unitsdoc").val();
					 checkCountryName();
                   console.log(data);
                    window.location.href = feurl + "/products.php";
                    }
                    });
  }



$(function(){   

  $.ajax
	({
		  url: instanceurl_o + "/country/source",         
		  dataType: 'json',
		  type: "GET",
		  cache: false,                  
		  success: function(data)
		  {
			$('#source_country2').find('option').remove();
			$('#source_country').find('option').remove();
			for(var i=0;i<data.rows.length;i++){ 
				 if(data.rows[i].cell[1] == 'United Kingdom') {
					$('#source_country').append(new Option(data.rows[i].cell[1],data.rows[i].id,true,true));
					$('#source_country2').append(new Option(data.rows[i].cell[1],data.rows[i].id,true,true));
				 }
				else {
					$('#source_country').append(new Option('From: '+data.rows[i].cell[1],data.rows[i].id));
					$('#source_country2').append(new Option('From: '+data.rows[i].cell[1],data.rows[i].id));
				}
			} // end for
			
			
			// Then get the Destination countries 
			getDestinationCountries();
		  },
		  error: function(e){
			  console.log("Exception While loading Source countries " + e);
		  }
		 
	});
	
  
  // default is Non-Document, so hide the docsize help - a4/ a5 etc.
  //$('#docsizehelp,#docsizehelp-2').hide();

  /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
  //  var url = $("#getMyParcelVideo").attr('src');
    var url = '//www.youtube.com/embed/uGnPVSdTBcg?autoplay=1';
    /* Remove iframe src attribute on page load to
    prevent autoplay in background */
    $("#getMyParcelVideo").attr('src', '');
  
  /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed */
    $("#youTubeModal").on('shown.bs.modal', function(){
        $("#getMyParcelVideo").attr('src', url);
    });
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#youTubeModal").on('hide.bs.modal', function(){
        $("#getMyParcelVideo").attr('src', '');
    });
    
  
  do {
    if($('#leftdiv').height() < $('#rightdiv').height()){
      $('#rightdiv .right-content:last').remove();
    }
  }
  while ($('#leftdiv').height() < $('#rightdiv').height());


	/* load weight array */
	loadWtArray(300);

  setDocType();
  setPracelRows();
  
  /* source and destincation country */
  $("#source_country").bind("change", function(){checkDestinationParcel();});
  checkDestinationParcel();
  $("#source_country2").bind("change", function(){checkDestinationDoc();});
  checkDestinationDoc();


  /* number of parcel row */
  $('#number_of_parcel').bind('change',function(){
    var rowNumNew = $('#number_of_parcel').val();
    if (rowNumNew > rowNum){
      // more rows need to be added
      var rowsToBeAdded = rowNumNew - rowNum;
      for (var t=1;t<=rowsToBeAdded;t++){
        addRow();
      }
    } else {
      // rows from end to be deleted
      var rowsToBeDeleted = rowNum - rowNumNew; 
      for (var t=rowNum;t>rowNumNew;t--){
        removeRow(t);
      }
    }
    
    // Prefilling of A4/a5 applicable only for 1st parcel for documents
    showOrHideDocsizeHelp($('#quote_parcel_type').val(),$('#number_of_parcel').val());
  });

  $('#quote_parcel_type').change(function(){
    // Prefilling of A4/a5 applicable only for 1st parcel for documents
    showOrHideDocsizeHelp($('#quote_parcel_type').val(),$('#number_of_parcel').val());
  });
  
  function showOrHideDocsizeHelp(parcelType, numOfParcels){
    
    // show a4/a5 radio buttons
    if (parcelType == 'D'){
      if (numOfParcels == 1) {
        $('#docsizehelp,#docsizehelp-2').show();
      } else {
        $('#docsizehelp,#docsizehelp-2').hide();
        prefillDocsizes('other');
      }
    } else {
      // hide 
      $('#docsizehelp,#docsizehelp-2').hide();
      prefillDocsizes('other');
    }
  }
    $('input[type=radio]').radiocharm();
 
    $('#radiocharm-a4').change(function() {
       prefillDocsizes(this.value);
    });
    
    $('#radiocharm-a5').change(function() {
        prefillDocsizes(this.value); 
    });
    
    $('#radiocharm-other').change(function() {
        prefillDocsizes(this.value);
    });
	
	$('#preset-doctype').change(function() {
        prefillDocsizes(this.value);
    });
  $('#preset-units').change(function() {
        prefillUnits(this.value);
		calculateConsideredWeight();
    });
  
   $('#preset-unitsdoc').change(function() {
        prefillUnitsDoc(this.value);
		calculateConsideredDocWeight()
		
    });
	
	function prefillUnits(units){
		var units;
		//var numberOfRows  = $('#number_of_parcel').val();
	   
	for (var t=1;t<=rowNum;t++){
			if(units=='lb_in'){
				 $("#length_unit"+t).text('in');
				$("#width_unit"+t).text('in');
				$("#height_unit"+t).text('in');
				$("#consideredwt_unit").text('lbs');
				$("#weight_unit"+t).text('lbs');
				
			}
			else{
				 $("#length_unit"+t).text('cm');
				$("#width_unit"+t).text('cm');
				$("#height_unit"+t).text('cm');
				$("#consideredwt_unit").text('kgs');
				$("#weight_unit"+t).text('kgs');
			}
		}
	}
	
		function prefillUnitsDoc(units){
	var units;
	for (var t=1;t<=rowNum;t++){
	if(units=='lb_in'){
		 $("#length_unitdoc"+t).text('in');
		$("#width_unitdoc"+t).text('in');
		$("#height_unitdoc"+t).text('in');
		$("#consideredwt_unitdoc").text('lbs');
		$("#weight_unitdoc"+t).text('lbs');
		$("#preset-doctype").val("other").change();
		$("#preset-doctype").attr('disabled', true);
	}
	else{
		 $("#length_unitdoc"+t).text('cm');
		$("#width_unitdoc"+t).text('cm');
		$("#height_unitdoc"+t).text('cm');
		$("#consideredwt_unitdoc").text('kgs');
		$("#weight_unitdoc"+t).text('kgs');
		$("#preset-doctype").attr('disabled', false);
		}
		}
	}
	
  function prefillDocsizes(doctype){
    if (doctype == 'a4') {
            /*$("#declared_weight1").val('0.5');*/
      $("#lengths1").val('30');
      $("#heights1").val('1');
      $("#widths1").val('21');
           // calculateConsideredWeight();
    } else if (doctype == 'a5') {
            /*$("#declared_weight1").val('0.5');*/
      $("#lengths1").val('21');
      $("#heights1").val('1');
      $("#widths1").val('15');
           // calculateConsideredWeight();
    } else {
      /*$("#declared_weight1").val('');*/
            $("#lengths1").val('');
      $("#heights1").val('');
      $("#widths1").val('');
    }
		calculateCustomSizedoc(''+1); 
  }

  /* calculate weight */
  $('.calculatewtfield').keyup(function(){
      var val = $(this).val();
      if(isNaN(val)){
           val = val.replace(/[^0-9\.]/g,'');
           if(val.split('.').length>2) 
               val =val.replace(/\.+$/,"");
      }
      $(this).val(val); 
    
    // Calculate weight it they are all numbers
    if (val != ''){
      calculateCustomSize(''+1); // variable doesnt matter.
    }
  });
  
  
    /* calculate weight */
  $('.calculatewtfielddoc').keyup(function(){
      var val = $(this).val();
      if(isNaN(val)){
           val = val.replace(/[^0-9\.]/g,'');
           if(val.split('.').length>2) 
               val =val.replace(/\.+$/,"");
      }
      $(this).val(val); 
    
    // Calculate weight it they are all numbers
    if (val != ''){
      calculateCustomSizedoc(''+1); // variable doesnt matter.
    }
  });
  
  //change in quantity to calculate chargeable weight
  $('#quanitynames1').change(function(){
	calculateCustomSizedoc(''+1); 
});
  $('#quanityname1').change(function(){
	calculateCustomSize(''+1); 
});
  
  function setCurrentQuote(currentTab){
	  // parcel (or) document
	quoteType = currentTab;
  }
  
  var quoteType='parcel';

});

/*$(document).ready(function() { 
	setInitialPageSetup();
});*/
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

var myArray = [];
var myArray2 = [];

function getParcelInfoDetails(){
	var myArray = [];
	var numOfRows = $("#global_row_count").val();
//	if ((numOfRows != undefined) && (numOfRows != "") ){
		var l,h,w,cw,dw,qty;
		for (var b=1;b<=numOfRows;b++){
			//if(b ==1){
			//  b ="";
			//}
		
			l=$("#length"+b).val();
			h=$("#height"+b).val();
			w=$("#width"+b).val();
			cw = $("#consider_weight"+b).val();
			dw = $("#declared_weight"+b).val();
			qty = $( "#quanityname"+b+" option:selected" ).text();
		if($("#preset-units").val()=='kg_cm'){
			myArray.push({
			  length: l, 
			  height: h,
			  width: w,
			  declaredWeight:dw,
			  quantity:qty,
			  clientBoxName:"Custom",
			  clientBoxId:"0"	
			});
		}else{
			myArray.push({
			  quantity:qty,
			  lengthInches: l, 
			  widthInches: w,
			  heightInches: h,
			  declaredWeightLbs:dw,
			  clientBoxName:"Custom",
			  clientBoxId:"0"	
			});
		
		}
		
		}
			console.log(myArray);
		return myArray;
}

  function getParcelInfoDetails2(){
          var myArray2 = [];
	  var numOfRows = $("#global_row_count").val();
	 // if ( (numOfRows != undefined) && (numOfRows != "") ){
	  	var l,h,w,cw,dw,qty;
	    for (var b=1;b<=numOfRows;b++){
	      //if(b ==1){
	      //  b ="";
	      //}
	      l=$("#lengths"+b).val();
	       h=$("#heights"+b).val();
	       w=$("#widths"+b).val();
	       cw = $("#consider_weightd"+b).val();
	       dw = $("#weights"+b).val();
	       qty = $( "#quanitynames"+b+" option:selected" ).text();
			if($("#preset-unitsdoc").val()=='kg_cm'){
			myArray2.push({
			  length: l, 
			  height: h,
			  width: w,
			  declaredWeight:dw,
			  quantity:qty,
			  clientBoxName:"Custom",
			  clientBoxId:"0"	
			});
		}else{
			myArray2.push({
			  quantity:qty,
			  lengthInches: l, 
			  widthInches: w,
			  heightInches: h,
			  declaredWeightLbs:dw,
			  clientBoxName:"Custom",
		  	  clientBoxId:"0"	
			});
		}
			console.log(myArray2);
		}
	  return myArray2;
	  }

// Strip all length, breadh, height and declared weights 
// from empty space.
function stripWhiteSpaceWithEntries(){
  var numOfRows=$('#number_of_parcel').val();
  for (var b=1;b<=numOfRows;b++){
    var l=$("#length"+b).val().trim();
    var h=$("#height"+b).val().trim();
    var w=$("#width"+b).val().trim();
    
    $("#length"+b).val(l);
    $("#height"+b).val(h);
    $("#width"+b).val(w);
  }
}

// remove From: and To: from destination names
function stripCountryNameAdditives(){
  var srcCountryName=$('#source_country option:selected').html().trim();
  var destCountryName=$('#destination_country option:selected').html().trim();
  var fromText = 'From: ';
  var toText = 'To: ';

  var fromDefaultText = 'Choose Source Country';
  var toDefaultText = 'Choose Destination Country';
  
  //alert(srcCountryName.indexOf(fromText) + ';'+ destCountryName.indexOf(toText) );
  if (srcCountryName != fromDefaultText && srcCountryName.indexOf(fromText) == 0){
    $('#source_country option:selected').html(srcCountryName.substring(fromText.length, srcCountryName.length));
  }
  
  if (destCountryName != toDefaultText && destCountryName.indexOf(toText) == 0){
    $('#destination_country option:selected').html(destCountryName.substring(toText.length, destCountryName.length));
  }
  //alert($('#source_country option:selected').html() + ';'+ $('#destination_country option:selected').html());
}

// remove From: and To: from destination names
function stripCountryNameAdditivesDoc(){
  var srcCountryName=$('#source_country2 option:selected').html().trim();
  var destCountryName=$('#destination_country2 option:selected').html().trim();
  var fromText = 'From: ';
  var toText = 'To: ';

  var fromDefaultText = 'Choose Source Country';
  var toDefaultText = 'Choose Destination Country';
  
  //alert(srcCountryName.indexOf(fromText) + ';'+ destCountryName.indexOf(toText) );
  if (srcCountryName != fromDefaultText && srcCountryName.indexOf(fromText) == 0){
    $('#source_country2 option:selected').html(srcCountryName.substring(fromText.length, srcCountryName.length));
  }
  
  if (destCountryName != toDefaultText && destCountryName.indexOf(toText) == 0){
    $('#destination_country2 option:selected').html(destCountryName.substring(toText.length, destCountryName.length));
  }
  //alert($('#source_country option:selected').html() + ';'+ $('#destination_country option:selected').html());
}

function setDocType(){ 
  var docType = '${orderForm.docType}';
  if(docType == ""){
    $(".docType-btn[data-value='N']").trigger('click');
  } else {
    if(docType == "N") {
      $(".docType-btn[data-value='N']").addClass('btn-success');
    } else {
      $(".docType-btn[data-value='D']").addClass('btn-success');
    }
  }
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
      $("#consider_weight0" + (i+1)).val(rvalue[5]);
    }
    
    calculateConsideredWeight();
  } 
}

function loadWtArray(maxwt){
  ar[0]=0.5;
  for(var k=1; k < maxwt; k++)
  {             
    ar[k]= k;
  } 
}

// --  
function addRow() {
	var qty;
/*if(rowNum ==1){
		qty =  $('#quanityname option:selected').val();}
	else{qty =  $('#quanityname'+rowNum+' option:selected').val();}*/
	if($("#preset-units").val()=='kg_cm'){
		var weightUnit="kgs";
		var unit="cm";
	}else{
		var weightUnit="lbs";
		var unit="in";
	}
  rowNum ++;
  var newRow = '<div class="row" id="rowNum'+rowNum+'"><span class="qoute-remove" onclick="removeRow('+ ''+rowNum + ');"> <i class="fa fa-times" aria-hidden="true"></i> </span><div class="col-sm-2"><div class="form-group"><label for="quantity" class="sr-only">Quantity</label> <select placeholder="Quantity"name="quanityname'+rowNum+'" id="quanityname'+rowNum+'"  onchange="calculateCustomSize('+ ''+rowNum + ');" class="form-control input-lg calculatewtfield inputshd" ></option><option value="-1">Quantity</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select></div></div><div class="col-sm-3"><div class="form-group"><label for="quote_declated" class="sr-only">Declared</label><div class="input-group input-group-lg"><input type="text" placeholder="Declared" name="declared_weight'+rowNum+'" id="declared_weight'+rowNum+'" value="' + $("#declared_weight1").val() + '" onchange="calculateCustomSize('+ ''+rowNum + ');" size="4" class="form-control input-lg calculatewtfield"/><span class="input-group-addon" id="weight_unit'+rowNum+'">'+weightUnit+'</span></div></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_length" class="sr-only">Length</label><div class="input-group input-group-lg"><input type="text" placeholder="Length" name="length'+rowNum+'" id="length'+rowNum+'" onchange="calculateCustomSize('+ ''+rowNum + ');"  class="form-control input-lg calculatewtfield" size="4" /><span class="input-group-addon"  id="length_unit'+rowNum+'">'+unit+'</span></div></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_width" class="sr-only">Width</label><div class="input-group input-group-lg"><input type="text" name="width'+rowNum+'" id="width'+rowNum+'" value="' + $("#width1").val() + '" onchange="calculateCustomSize('+ ''+rowNum + ');" placeholder="Width" class="form-control input-lg calculatewtfield" size="4"/><span class="input-group-addon" id="width_unit'+rowNum+'">'+unit+'</span></div></div></div><div class="col-sm-3"><div class="form-group"><label for="quote_height" class="sr-only">Height</label><div class="input-group input-group-lg"><input type="text" placeholder="Height" name="height'+rowNum+'" id="height'+rowNum+'" value="' + $("#height1").val() + '" onchange="calculateCustomSize('+ ''+rowNum + ');" class="form-control input-lg calculatewtfield" size="4"/><span class="input-group-addon" id="height_unit'+rowNum+'">'+unit+'</span></div></div></div></div>'; 
  jQuery('#itemRows').append(newRow);
  $('#number_of_parcel').val(rowNum);
  $("#global_row_count").val(rowNum);
	
  //$('#quanityname'+rowNum+' ').val(qty);
  //$('#quanityname'+rowNum+' ').trigger('change');
  
  // reset 1st row values
  $("#length"+rowNum).val('');
  $("#height"+rowNum).val('');
  $("#width"+rowNum).val('');
  $("#declared_weight"+rowNum).val('');
  $("#consider_weight0").val('');
  $("#quanityname"+rowNum).val("-1").trigger('change');
}

var global_row_count;
function addRowd() {
	if($("#preset-unitsdoc").val()=='kg_cm'){
		var weightUnit="kgs";
		var unit="cm";
		rowNum ++;
  var newRow = '<div class="row" id="rowNum'+rowNum+'"><span class="qoute-remove" onclick="removeRow('+ ''+rowNum + ');"> <i class="fa fa-times" aria-hidden="true"></i> </span><div class="col-sm-2"><div class="form-group"><label for="quantity" class="sr-only">Quantity</label> <select placeholder="Quantity"     name="quanitynames'+rowNum+'" id="quanitynames'+rowNum+'"  onchange="calculateCustomSizedoc('+ ''+rowNum + ');" class="form-control input-lg calculatewtfield inputshd" ><option selected="selected">' + $('#quanitynames1 option:selected').text() + '</option><option value="-1">Quantity</option><option value="">1</option><option value="">2</option><option value="">3</option><option value="">4</option><option value="">5</option><option value="">6</option><option value="">7</option><option value="">8</option><option value="">9</option><option value="">10</option><option value="">11</option><option value="">12</option><option value="">13</option><option value="">14</option><option value="">15</option><option value="">16</option><option value="">17</option><option value="">18</option><option value="">19</option><option value="">20</option></select></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_length" class="sr-only">Declare Weight</label><div class="input-group input-group-lg"><input type="text" placeholder="Weight" name="weights'+rowNum+'" id="weights'+rowNum+'" value="' + $("#weights1").val() + '" onchange="calculateCustomSizedoc('+ ''+rowNum + ');" class="form-control input-lg inputshd calculatewtfield" size="4" /><span class="input-group-addon" id="weight_unitdoc'+rowNum+'">'+weightUnit+'</span> </div> </div></div><div class="col-sm-2"><div class="form-group"><label for="quote_declated" class="sr-only">Doc Type</label><select placeholder="Doc Type" class="form-control input-lg inputshd" name="preset-doctype" id="preset-doctype"><option selected="selected">' + $('#preset-doctype option:selected').text() + '</option><option value="other">Other</option><option value="a4">A4</option><option value="a5">A5</option> </select></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_length" class="sr-only">Length</label><div class="input-group input-group-lg"><input type="text" placeholder="Length" name="length'+rowNum+'" id="lengths'+rowNum+'" value="' + $("#lengths1").val() + '" onchange="calculateCustomSizedoc('+ ''+rowNum + ');"  class="form-control input-lg calculatewtfield" size="4" /><span class="input-group-addon" id="length_unitdoc'+rowNum+'">'+unit+'</span></div></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_width" class="sr-only">Width</label><div class="input-group input-group-lg"><input type="text" name="widths'+rowNum+'" id="widths'+rowNum+'" value="' + $("#widths1").val() + '" onchange="calculateCustomSize('+ ''+rowNum + ');" placeholder="Width" class="form-control input-lg calculatewtfield" size="4"/><span class="input-group-addon" id="width_unitdoc'+rowNum+'">'+unit+'</span></div></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_height" class="sr-only">Height</label><div class="input-group input-group-lg"><input type="text" placeholder="Height" name="heights'+rowNum+'" id="heights'+rowNum+'" value="' + $("#heights1").val() + '" onchange="calculateCustomSizedoc('+ ''+rowNum + ');" class="form-control input-lg calculatewtfield" size="4"/><span class="input-group-addon" id="height_unitdoc'+rowNum+'">'+unit+'</span><input type="hidden" id="consider_weightd'+rowNum+'" name="consider_weightd'+rowNum+'"/><span class="input-group-addon"></span></div></div></div></div>'; 
	}else{
		var weightUnit="lbs";
		var unit="in";
	
  rowNum ++;
  var newRow = '<div class="row" id="rowNum'+rowNum+'"><span class="qoute-remove" onclick="removeRow('+ ''+rowNum + ');"> <i class="fa fa-times" aria-hidden="true"></i> </span><div class="col-sm-2"><div class="form-group"><label for="quantity" class="sr-only">Quantity</label> <select placeholder="Quantity"     name="quanitynames'+rowNum+'" id="quanitynames'+rowNum+'"  onchange="calculateCustomSizedoc('+ ''+rowNum + ');" class="form-control input-lg calculatewtfield inputshd" ><option selected="selected">' + $('#quanitynames1 option:selected').text() + '</option><option value="-1">Quantity</option><option value="">1</option><option value="">2</option><option value="">3</option><option value="">4</option><option value="">5</option><option value="">6</option><option value="">7</option><option value="">8</option><option value="">9</option><option value="">10</option><option value="">11</option><option value="">12</option><option value="">13</option><option value="">14</option><option value="">15</option><option value="">16</option><option value="">17</option><option value="">18</option><option value="">19</option><option value="">20</option></select></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_length" class="sr-only">Declare Weight</label><div class="input-group input-group-lg"><input type="text" placeholder="Weight" name="weights'+rowNum+'" id="weights'+rowNum+'" value="' + $("#weights1").val() + '" onchange="calculateCustomSizedoc('+ ''+rowNum + ');" class="form-control input-lg inputshd calculatewtfield" size="4" /><span class="input-group-addon" id="weight_unitdoc'+rowNum+'">'+weightUnit+'</span> </div> </div></div><div class="col-sm-2"><div class="form-group"><label for="quote_declated" class="sr-only">Doc Type</label><select placeholder="Doc Type" class="form-control input-lg inputshd" name="preset-doctype" id="preset-doctype"><option value="other">Other</option> </select></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_length" class="sr-only">Length</label><div class="input-group input-group-lg"><input type="text" placeholder="Length" name="length'+rowNum+'" id="lengths'+rowNum+'" value="' + $("#lengths1").val() + '" onchange="calculateCustomSizedoc('+ ''+rowNum + ');"  class="form-control input-lg calculatewtfield" size="4" /><span class="input-group-addon" id="length_unitdoc'+rowNum+'">'+unit+'</span></div></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_width" class="sr-only">Width</label><div class="input-group input-group-lg"><input type="text" name="widths'+rowNum+'" id="widths'+rowNum+'" value="' + $("#widths1").val() + '" onchange="calculateCustomSize('+ ''+rowNum + ');" placeholder="Width" class="form-control input-lg calculatewtfield" size="4"/><span class="input-group-addon" id="width_unitdoc'+rowNum+'">'+unit+'</span></div></div></div><div class="col-sm-2"><div class="form-group"><label for="quote_height" class="sr-only">Height</label><div class="input-group input-group-lg"><input type="text" placeholder="Height" name="heights'+rowNum+'" id="heights'+rowNum+'" value="' + $("#heights1").val() + '" onchange="calculateCustomSizedoc('+ ''+rowNum + ');" class="form-control input-lg calculatewtfield" size="4"/><span class="input-group-addon" id="height_unitdoc'+rowNum+'">'+unit+'</span><input type="hidden" id="consider_weightd'+rowNum+'" name="consider_weightd'+rowNum+'"/><span class="input-group-addon" ></span></div></div></div></div>'; 
	}
  jQuery('#itemdocu').append(newRow);
  $('#number_of_parcel').val(rowNum);
   $("#global_row_count").val(rowNum);
   var prevVal = $("#quantyname"+newRow - 1).val();
  // reset 1st row values
  $("#preset-doctype").val('other').trigger('change');
  $("#lengths1").val('');
  $("#heights1").val('');
  $("#widths1").val('');
  $("#weights1").val('');
  $("#consider_weightd").val('');
  $("#quanitynames1").val("-1").trigger('change');
}


function removeRow(rnum) {
  jQuery('#rowNum' + rnum).remove(); 
  jQuery('#rowBtn' + rnum).remove();  
  rowNum = rowNum - 1;
  $('#number_of_parcel').val(rowNum); 
   $("#global_row_count").val(rowNum);
  calculateConsideredWeight();
   calculateConsideredDocWeight();
}

function calculateConsideredWeight(){
  var totalConsWt = 0;
  for (var b=1;b<=rowNum;b++){
    var currConsWt = calculateIndividualConsideredWt(b);
      //alert(b + ';' + currConsWt);
    if (currConsWt == false) continue;
  
      //alert(b + '== before == total:' + totalConsWt  + '; curr:' + currConsWt);
    totalConsWt = totalConsWt + currConsWt;
      //alert(b + '== after == total:' + totalConsWt  + '; curr:' + currConsWt);
      
  } 

  if(totalConsWt > 0.5 )
    totalConsWt = Math.round(totalConsWt)
  $('#consider_weight0').val(totalConsWt);
 // getParcelInfoDetails();  
}

function calculateConsideredDocWeight(){
	  var totalConsWt = 0;
	  for (var b=1;b<=rowNum;b++){
	    var currConsWt = calculateIndividualConsideredWtDoc(b);
	      //alert(b + ';' + currConsWt);
	    if (currConsWt == false) continue;
	  
	      //alert(b + '== before == total:' + totalConsWt  + '; curr:' + currConsWt);
	    totalConsWt = totalConsWt + currConsWt;
	      //alert(b + '== after == total:' + totalConsWt  + '; curr:' + currConsWt);
	  }
	
	  if(totalConsWt > 0.5 )
	    totalConsWt = Math.round(totalConsWt)
	  $('#consider_weightd').val(totalConsWt);
	//  getParcelInfoDetails();  
	}

var l_value=0;
var w_value=0;
var h_value=0;
var dw_value=0;
function calculateIndividualConsideredWt(rnum){
  //var qty = $('#quanityname'+rnum).text();
  //if(rnum == '1'){
//rnum = '';
//}
 var qty = $( "#quanityname"+rnum+" option:selected" ).text();
 var quantity = $( "#quanityname"+rnum+" option:selected" ).val();
  if(quantity==-1)
  return false;
	
	
  var dweight_raw = $('#declared_weight'+rnum).val();
  var pl = $("#length" + rnum).val();
  var pw = $("#width"+ rnum).val();
  var ph = $("#height"+ rnum).val();
    
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

  //alert(rnum + ';' + dweight + ';' + cweight + ';'+ pl + ';' +pw + ';' + ph);

  //var r = (computeWeight(pl, pw, ph))*qty;
  var finalWt = 0;
  if($("#preset-units").val()=="kg_cm"){
	var denominator=5000;
	var r = (computeWeight(pl, pw, ph,denominator));
	var closestwt = getClosestNum(r);   
	 if(closestwt < dweight){
    finalWt = getClosestNum(dweight);
  }else{
    finalWt = closestwt;
  }
  
}else{
	var denominator=139;
	var r = (computeWeight(pl, pw, ph,denominator));
	var closestwt=r;
	 if(closestwt < dweight){
    finalWt = dweight;
  }else{
    finalWt = closestwt;
  }
}

  
  if(rowNum > 1 && finalWt == '0.5')
    finalWt = Math.round(finalWt);
  finalWt = qty * finalWt;
  $('#consider_weight'+rnum).val(finalWt);  
  return finalWt; 
}

function calculateIndividualConsideredWtDoc(rnum){
	  //var qty = $('#quanityname'+rnum).text();
	//if(rnum == '1'){
	//	rnum = '';
	//}
	 var qty = $( "#quanitynames"+rnum+" option:selected" ).text();
     var quantity = $( "#quanitynames"+rnum+" option:selected" ).val();
    if(quantity==-1)
    return false;
	  

	  var dweight_raw = $('#weights'+rnum).val();
	  var pl = $("#lengths" + rnum).val();
	  var pw = $("#widths"+ rnum).val();
	  var ph = $("#heights"+ rnum).val();
	    
	  if (pl == '' ||
	      pw == '' || 
	      ph == '' || 
	      dweight_raw == '')
	    return false;
	
	    // Handle the decimals.
	    pl = Math.ceil(pl); $("#lengths" + rnum).val(pl);
	    pw = Math.ceil(pw); $("#widths"+ rnum).val(pw);
	    ph = Math.ceil(ph); $("#heights"+ rnum).val(ph);  
	
	
	  var dweight = parseFloat(dweight_raw);
	  var cweight_raw = $('#consider_weightd'+ rnum).val();
	  var cweight  = 0;
	  if (cweight_raw != '')
	   cweight = parseFloat(cweight_raw);   

	  //alert(rnum + ';' + dweight + ';' + cweight + ';'+ pl + ';' +pw + ';' + ph);

	  // var r = (computeWeight(pl, pw, ph))*qty;
	if($("#preset-units").val()=="kg_cm"){
	var denominator=5000;
	var r = (computeWeight(pl, pw, ph,denominator));
	var closestwt = getClosestNum(r);   
	 if(closestwt < dweight){
    finalWt = getClosestNum(dweight);
  }else{
    finalWt = closestwt;
  }
  
}else{
	var denominator=139;
	var r = (computeWeight(pl, pw, ph,denominator));
	var closestwt=r;
	 if(closestwt < dweight){
    finalWt = dweight;
  }else{
    finalWt = closestwt;
  }
}

	  if(rowNum >1 && finalWt == '0.5')
	    finalWt = Math.round(finalWt);
	  finalWt = qty * finalWt;
	  //$('#consider_weightd'+rnum).val(finalWt);  
	  return finalWt; 
	}

function computeWeight(l,w,h,denominator){

  var r=0;
  if(!l)l=0;
  if(!w)w=0; 
  if(!h)h=0;
  
  
  try{ 
    r=(parseFloat(l) * parseFloat(w) * parseFloat(h))/denominator;
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

function validateParcelsTab(){
  calculateConsideredWeight();
  var status = true;
  if (status) status = validateUnallowedValueWithName ('errMsgParcel','#source_country', "", 'Invalid Source country. Pls choose a source country of your parcel');
  if (status) status = validateUnallowedValueWithName ('errMsgParcel','#destination_country', "-1", 'Invalid Destination country. Pls choose the destination of your parcel');

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
  
  if (status) status = validateEmptyWithName('errMsgParcel','#consider_weight0', 'Invalid parcel information. Pls complete all parcel rows to proceed');
  if (status) status = validateHasPostiveValueWithName ('errMsgParcel','#consider_weight0', 'Total weight considered should be greater than 0. No parcels to courier.'); 
  //if (status) status = validateConsidredWeightLessThanWithName ('errMsgParcel','#consider_weight0', 300, 'Total weight considered should be less than 300.');
  if (!status) {
    return false;
  } 
}

function validateDoc(){
	calculateConsideredDocWeight();
	  var status = true;
	  if (status) status = validateUnallowedValueWithName ('errMsgDocuments','#source_country2', "", 'Invalid Source country. Pls choose a source country of your parcel');
	  if (status) status = validateUnallowedValueWithName ('errMsgDocuments','#destination_country2', "-1", 'Invalid Destination country. Pls choose the destination of your parcel');

	  if (!status) {
	    return false;
	  }
	  
	  var bReturn = true;
	  for (i=1;i<=rowNum;i++){
		 // if(i==1){validateDocParcels(i)}else{
	    if (validateDocParcels(i) == false){
	      bReturn = false;
	      break;
	    } 
		 // }
	  }

	  if (bReturn == false){
	    showErrorDivWithName('errMsgDocuments','Invalid parcel information. Enter all parcel dimensions and weight information. All values must be greater than 0');
	    return bReturn; // invalid cant proceed
	  } else {
	    hideErrorDivWithName('errMsgDocuments');
	  }

	  for (i=1;i<=rowNum;i++){
	    if(parseFloat($('#declared_weight' + i).val())> 300){
	      showErrorDivWithName('errMsgDocuments','The weight you have mentioned is more than the maximum weight for a usual parcel. '+
	          'Please send an email to info@ekapital.co.uk for custom handling and rates and we will be '+
	          'happy to assist you get the best deals.');
	      return false;     
	    }
	  }
	  var temp = $("#consider_weightd").val();
	  if (status) status = validateEmptyWithName('errMsgDocuments','#consider_weightd', 'Invalid parcel information. Pls complete all parcel rows to proceed');
	  if (status) status = validateHasPostiveValueWithName ('errMsgDocuments','#consider_weightd', 'Total weight considered should be greater than 0. No parcels to courier.'); 
	  //if (status) status = validateConsidredWeightLessThanWithName('errMsgDocuments','#consider_weightd', 300, 'Total weight considered should be less than 300.');
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
      parseFloat($('#declared_weight' + Ix).val()) != 0&&
	  $('#quanityname' + Ix).val() != -1)
	  
	  {
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

function validateDocParcels(Ix){

	  if (jQuery.isNumeric($('#lengths' + Ix).val()) 
	    &&  jQuery.isNumeric($('#widths' + Ix).val())
	    && jQuery.isNumeric($('#heights' + Ix).val())
	    && jQuery.isNumeric($('#weights' + Ix).val()) )
	  {
	    // all numeric 
	    if (parseFloat($('#lengths' + Ix).val()) != 0 &&
	      parseFloat($('#widths' + Ix).val()) != 0 &&
	      parseFloat($('#heights' + Ix).val()) != 0 &&
	      parseFloat($('#weights' + Ix).val()) != 0&&
		 $('#quanitynames' + Ix).val() != -1)
		 {
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


function appendToString(Ix){
   return Ix + ','+ $('#length' + Ix).val() + ','+ $('#width'+ Ix).val() + ','+ $('#height'+ Ix).val() + ','+ $('#declared_weight'+ Ix).val() + ','+ $('#consider_weight'+ Ix).val();
}

function updateproduct(){   
  $('#sourceCountryName').val($('#source_country option:selected').html());
  $('#destinationCountryName').val($('#destination_country option:selected').html()); 
  document.forms[0].submit();
}

function calculateCustomSize(rnum){
 calculateConsideredWeight();
 //calculateConsideredDocWeight(); 
}


function calculateCustomSizedoc(rnum){
 calculateConsideredDocWeight(); 
}

function checkDestinationParcel(){
  if($("#source_country").val() != "221" && $("#source_country").val() > "0"){
	  $("#destination_country option[value=221]").attr('selected', 'selected');
		$('#destination_country').select2().trigger('change');
	/* 	$("#destination_country").val("221");
		$("#destination_country").text("United Kingdom"); */
		$("#destination_country").attr("disabled", true);
  } else {
    $("#destination_country").removeAttr('disabled');
  }
}                                 
function checkDestinationDoc(){
  if($("#source_country2").val() != "221" && $("#source_country2").val() > "0"){
	  $("#destination_country2 option[value=221]").attr('selected', 'selected');
		$('#destination_country2').select2().trigger('change');
	/* 	$("#destination_country").val("221");
		$("#destination_country").text("United Kingdom"); */
		$("#destination_country2").attr("disabled", true);
  } else {
    $("#destination_country2").removeAttr('disabled');
  }
}   
</script>