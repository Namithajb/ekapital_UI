<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<?php
   header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
   header("Cache-Control: post-check=0, pre-check=0", false);
   header("Pragma: no-cache");
    ?>
     <?php include 'includes/headerAx.php' ?>
 
    <?php  include 'includes/include_chat_box.php' ?>
   
<style> .required {
      color: red;
      }
	  </style>
</head>
<body>
    <?php include 'includes/menuAx.php' ?>
		   </header>	
	
	
	<main class="padded">
 
     <div class="container">
     		  <div class="alert alert-success" style = "display:none"  id="sucessMsg"></div>
        <div class="alert alert-danger" style="display:none" id="errorMsg"></div>
       
	<!-- top box -->
		<div class="row">
			<div class="box-intro text-center">
	          <h3 class="heading">Your Addresses</h3>
	        </div>
				<div class="form-group">
					<div class="alert alert-success" style="display:none" id="sucessMessage"></div>
					<div class="alert alert-danger" style="display:none" id="errorMessage"></div>
					<div id="card-message"></div>
				</div>
			<button type="button" class="btn btn-info pull-right" onclick="addNewAdd()">
			<i class='fa fa-plus'></i>&nbsp;Add New Address </button>
			<br>
            <br>
			
			<div class="col-md-12 text-center  margin20-top"
				style="text-align: left;">
				<table id="cDatatable"
					class="table table-hover table-bordered display">
					<thead>
						<tr>
							<th>Address</th>
							<th>Edit Address</th>			
							<th>Consignor Address</th>
							<th>Consignee Address</th>
							<th>Warehouse Address</th>
							
						</tr>
					</thead>

				</table>

			</div>


		</div>
		<div class="clearfix"></div>
		<div class="space20"></div>
		
   <div id="newAddressModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-header">
        	<div class="box-intro text-center">
                    <h4 class="heading">Add New Address</h4>
                  </div>
        	</div>
            <div class="modal-body">
                <div id='content' class="tab-content">
				<div class="form-group">
					<div class="alert alert-success" style="display:none" id="sucessModel"></div>
					<div class="alert alert-danger" style="display:none" id="errorModel"></div>
				
				</div>
                	<form class="form-horizontal" name="newAddForm" id="newAddForm" >
						<fieldset>
							
							<!-- Select Basic -->
							<div class="form-group" style="display:none">
							  <label class="col-md-4 control-label" > Id &nbsp;&nbsp;</label>
							  <div class="col-md-4">
							    <input id="id" name="id" type="text" placeholder=" Id"   >
							  </div>
							</div>
							
							<div class="form-group">
							  <label class="col-md-4 control-label" >Contact Name<span class="required">*</span></label>
							  <div class="col-md-4">
							    <input id="contactName" name="contactName" type="text" placeholder="Contact Name" class="form-control input-md"  required>
							  </div>
							</div>
							<div class="form-group">
							  <label class="col-md-4 control-label" >Address Line 1<span class="required">*</span></label>
							  <div class="col-md-4">
							    <input id="addressLine1" name="addressLine1" type="text" placeholder="Address Line 1" class="form-control input-md" required>
							  </div>
							</div>
							<div class="form-group">
							  <label class="col-md-4 control-label" >Address Line 2 &nbsp;&nbsp;</label>
							  <div class="col-md-4">
							    <input id="addressLine2" name="addressLine2" type="text" placeholder="Address Line 2" class="form-control input-md" >
							  </div>
							</div>
							<div class="form-group">
							  <label class="col-md-4 control-label" >Address Line 3 &nbsp;&nbsp;</label>
							  <div class="col-md-4">
							    <input id="addressLine3" name="addressLine3" type="text" placeholder="Address Line 3" class="form-control input-md" >
							  </div>
							</div>
							<div class="form-group">
							  <label class="col-md-4 control-label" > County &nbsp;&nbsp;</label>
							  <div class="col-md-4">
							    <input id="county" name="county" type="text" placeholder="County" class="form-control input-md" >
							  </div>
							</div>
						<div class="form-group">
							  <label class="col-md-4 control-label" > City<span class="required">*</span></label>
							  <div class="col-md-4">
							    <input id="city" name="city" type="text" placeholder="City" class="form-control input-md" required>
							  </div>
							</div>
							
							<div class="form-group">
							  <label class="col-md-4 control-label" > Post Code<span class="required">*</span></label>
							  <div class="col-md-4">
							    <input id="postCode" name="postCode" type="text" placeholder="Post Code" class="form-control input-md" required>
							  </div>
							</div>
							<div class="form-group">
							  <label class="col-md-4 control-label" > Country<span class="required">*</span></label>
							  <div class="col-md-4">
							     <select id="country" name="country" class="form-control input-md" required>
							    
							     <option value="">Select Country</option>
							   
							     </select>
							  </div>
							</div>
                       		<div class="form-group">
							  <label class="col-md-4 control-label" > Phone Number &nbsp;&nbsp;</label>
							  <div class="col-md-4">
							    <input id="phoneNumber" name="phoneNumber" type="text" placeholder="Phone Number" class="form-control input-md" >
							  </div>
							</div>
							 
						</fieldset>
					</form>
						                	
                </div>
            </div>
            <div class="modal-footer">
            	<button type="button" id ="submitNewAdd" name="submitNewAdd" class="btn btn-success" >Add Address</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancel</button>
            </div>
        </div>
    </div>
</div>  

    		<div id="addressModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
        	<div class="modal-header">
        		<div class="box-intro text-center">
                    <h4 class="heading">Edit Address</h4>
                  </div>
        	</div>
            <div class="modal-body">
                <div id='content' class="tab-content">
				<div class="form-group">
					<div class="alert alert-success" style="display:none" id="sucessModel-edit"></div>
					<div class="alert alert-danger" style="display:none" id="errorModel-edit"></div>
				
				</div>
                	<form class="form-horizontal" name="editAddForm" id="editAddForm" >
						<fieldset>
							
							<!-- Select Basic -->
							<div class="form-group" style="display:none">
							  <label class="col-md-4 control-label" > Id &nbsp;&nbsp;</label>
							  <div class="col-md-4">
							    <input id="eid" name="id" type="text" placeholder=" Id"   >
							  </div>
							</div>
							
							<div class="form-group">
							  <label class="col-md-4 control-label" >Contact Name<span class="required">*</span></label>
							  <div class="col-md-4">
							    <input id="econtactName" name="contactName" type="text" placeholder="Contact Name" class="form-control input-md"  required>
							  </div>
							</div>
							<div class="form-group">
							  <label class="col-md-4 control-label" >Address Line 1<span class="required">*</span></label>
							  <div class="col-md-4">
							    <input id="eaddressLine1" name="addressLine1" type="text" placeholder="Address Line 1" class="form-control input-md" required>
							  </div>
							</div>
							<div class="form-group">
							  <label class="col-md-4 control-label" >Address Line 2</label>
							  <div class="col-md-4">
							    <input id="eaddressLine2" name="addressLine2" type="text" placeholder="Address Line 2" class="form-control input-md" >
							  </div>
							</div>
							<div class="form-group">
							  <label class="col-md-4 control-label" >Address Line 3</label>
							  <div class="col-md-4">
							    <input id="eaddressLine3" name="addressLine3" type="text" placeholder="Address Line 3" class="form-control input-md" >
							  </div>
							</div>
							<div class="form-group">
							  <label class="col-md-4 control-label" > County &nbsp;&nbsp;</label>
							  <div class="col-md-4">
							    <input id="ecounty" name="county" type="text" placeholder="County" class="form-control input-md" >
							  </div>
							</div>
						<div class="form-group">
							  <label class="col-md-4 control-label" > City<span class="required">*</span></label>
							  <div class="col-md-4">
							    <input id="ecity" name="city" type="text" placeholder="City" class="form-control input-md" required>
							  </div>
							</div>
							
							<div class="form-group">
							  <label class="col-md-4 control-label" > Post Code<span class="required">*</span></label>
							  <div class="col-md-4">
							    <input id="epostCode" name="postCode" type="text" placeholder="Post Code" class="form-control input-md" required>
							  </div>
							</div>
							<!--<div class="form-group">
							  <label class="col-md-4 control-label" > Country<span class="required">*</span></label>
							  <div class="col-md-4">
							    <input id="ecountry" name="country" type="text" placeholder="Country" class="form-control input-md" readonly>
							  </div>
							</div>-->
							 <div class="form-group">
						       <label class="col-md-4 control-label" > Country<span class="required">*</span></label>
                                 <div class="col-md-4">
									<select id="ecountry" class="form-control country_list" name="country" >
									</select>
									</div>			
							  </div>
                       		<div class="form-group">
							  <label class="col-md-4 control-label" > Phone Number &nbsp;&nbsp;</label>
							  <div class="col-md-4">
							    <input id="ephoneNumber" name="phoneNumber" type="text" placeholder="Phone Number" class="form-control input-md" >
							  </div>
							</div>
								<div class="form-group" style="display:none">
							  <label class="col-md-4 control-label" > addressType &nbsp;&nbsp;</label>
							  <div class="col-md-4">
							    <input id="addressType" name="addressType" type="hidden" placeholder="addressType" class="form-control input-md" >
							  </div>
							</div>
							 
						</fieldset>
					</form>
						                	
                </div>
            </div>
            <div class="modal-footer">
            	<button type="button" class="btn btn-success" id="submitEditAdd" name="submitEditAdd" >Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>  

      


	
	 </div>
  </main>
	
	<?php
	$cdn=$config['CDNURL'];
	?>
	
	<script type="text/javascript"	src="<?php echo $cdn;?>/js/datatables-checkboxes/dataTables.checkboxes.min.js"></script>
<script type="text/javascript">
  var beurl ="<?php echo  $config['INSTANCEURL'];?>";
var feurl ="<?php echo  $config['FRONTENDURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui";
var orderurl=beurl+"/api/v1/ui";

var cTable = jQuery("#cDatatable")
		.DataTable(
				{
					 responsive: true,
					"cache": false,
					select : true,
					"processing" : true,
					"order" : [ [ 1, "desc" ] ],
					"ajax" : {
						"url" : instanceurl_o+"/getmyparcel/address", 
						"dataSrc" : "",
				 error: function(jqXHR, ajaxOptions, thrownError) {
					  $('#sucessMsg').hide();
                    $('#errorMsg').show();
                    $('#errorMsg').html("Oops! error while fetching address please contact admin");
                  logDebugMsg(thrownError + "\r\n" + jqXHR.statusText + "\r\n" + jqXHR.responseText + "\r\n" + ajaxOptions.responseText);
                }

					},
					"columnDefs" : [
							  {
					         	"targets": 0,
					         	
					         	"defaultContent": "",
					         	
					         		"render": function(cellvalue, options, rowObject){
					         			return adderssToString(rowObject);
					                    }
					     	},
					     	{
					         	"targets": 1,
					         	 "render": function(cellvalue, options, rowObject){
					            	 return "<button id='edit' onclick='editAddress($(this));' title='Edit Address' class='btn btn-xs btn-danger'><i class='fa fa-edit'></i></button></button>" 
					             }
					     	},
					 
					     	{
					         	"targets": 2,
					         	 "render": function(cellvalue, options, rowObject){
					         		 var type = rowObject.addressType;
					         	 	if(type){
					         		if(type.indexOf('C') != -1){
					         		 				$("#addressType").val('C');
					         		 				var addType = 'C'; 
					         		 				return "<input type='checkbox' checked onchange=deleteAddressType($(this),\'"+ addType +"\') >";	
					         		 			}else{ 
					         		 				var addressType = 'C';
					         		 				
					         		 				return "<input type='checkbox' onchange=updateAddressType($(this),\'"+ addressType +"\')>";
					         		 			}}
					         	 
					     	else{ 
         		 				var addressType = 'C';
         		 				
         		 				return "<input type='checkbox' onchange=updateAddressType($(this),\'"+ addressType +"\')>";
         		 			}
					         		 
					             }
					     	},
					     	 {
					            'targets': 3,
					            "render": function(cellvalue, options, rowObject){
					            	 var type = rowObject.addressType;
						         	 if(type){
						         		if(type.indexOf('D') != -1){
						         			
					            		$("#addressType").val('D');
					            		var addressType = 'D'; 
		         		 				return "<input type='checkbox' checked onchange=deleteAddressType($(this),\'"+ addressType +"\') >";
		         		 				
		         		 			}else{ 
		         		 				var addressType = 'D';
		         		 				
		         		 				return "<input type='checkbox' onchange=updateAddressType($(this),\'"+ addressType +"\')>";
		         		 			}
					             }else{ 
		         		 				var addressType = 'D';
		         		 				
		         		 				return "<input type='checkbox' onchange=updateAddressType($(this),\'"+ addressType +"\')>";
		         		 			}
					            }
					         },
					         {
					             'targets': 4,
					             "render": function(cellvalue, options, rowObject){
					            	 var type = rowObject.addressType;
						         	 if(type){
						         		if(type.indexOf('W') != -1){
					            		 $("#addressType").val('W');
					            		 var addressType = 'W'; 
			         		 				return "<input type='checkbox' checked onchange=deleteAddressType($(this),\'"+ addressType +"\') >";
			         		 				
			         		 			}
						         	 else{ 
			         		 				var addressType = 'W';
			         		 				
			         		 				return "<input type='checkbox' onchange=updateAddressType($(this),\'"+ addressType +"\')>";
			         		 			}
						         	 }else{ 
			         		 				var addressType = 'W';
			         		 				
			         		 				return "<input type='checkbox' onchange=updateAddressType($(this),\'"+ addressType +"\')>";
			         		 			}
					             }
					          },					     
					],
					'select': {
						style: 'single'
					   },

					columns : [ 
						
						 { data: ""},
						 { data : "",className: "text-center"},
						 { data : "",className: "text-center"},
						 { data : "",className: "text-center"},
						 { data : "",className: "text-center"}
					],

				});
				
function addNewAdd(){
	 $('#newAddForm :input').each(function(){$(this).val('')});
	 $("#newAddForm").find('input[name="id"]').val('0');
	$('#newAddressModal').modal('show');
	$('#sucessMessage').hide();
	 $('#errorMessage').hide();
	 $('#sucessModel').hide();
	 $('#errorModel').hide();
}
$("#submitNewAdd").click(function() {
	var contactName = $("#contactName").val();
	var addressLine1 = $("#addressLine1").val();
	var city = $("#city").val();
	var postCode = $("#postCode").val();
	var country = $("#country").val();
	 function validateEnterAddress() {
            var flag1 = true;
            if (contactName == "") {
			    $('#sucessMessage').hide();
				 $('#errorMessage').hide();
                $('#errorModel').show();
                $('#errorModel').html("Oops! your contact name is empty");
                flag1 = false;
                return flag1;
            } else if (addressLine1 == "") {
				$('#sucessMessage').hide();
				 $('#errorMessage').hide();
                $('#errorModel').show();
                $('#errorModel').html("Oops! your address line is empty");
                flag1 = false;
                return flag1;
            } else if (city == "") {
				$('#sucessMessage').hide();
				 $('#errorMessage').hide();
                $('#errorModel').show();
                $('#errorModel').html("Oops! your city is empty");
                flag1 = false;
                return flag1;
            } else if (postCode == "") {
				$('#sucessMessage').hide();
				 $('#errorMessage').hide();
                $('#errorModel').show();
                $('#errorModel').html("Oops! your postcode is empty");
                flag1 = false;
                return flag1;
            } else if (country == "") {
				$('#sucessMessage').hide();
				 $('#errorMessage').hide();
                $('#errorModel').show();
                $('#errorModel').html("Oops! your country is empty");
                flag1 = false;
                return flag1;
            }  else {
                return flag1;
            }
        }
        var f = validateEnterAddress();

 if (f == true) {

	data= $("#newAddForm").serialize();
	var jsonData ={
	  "id" :"0",
	"contactName": $('#contactName').val(),
	"addressLine1" :	$('#addressLine1').val(),
	 "addressLine2": $('#addressLine2').val(),
	 "addressLine3": $('#addressLine3').val(),
	 "city": $('#city').val(),
	 "county": $('#county').val(),
	 "postCode": $('#postCode').val(),
	 "country": $('#country').val(),
	"phoneNumber": $('#phoneNumber').val()
	}
logDebugMsg(jsonData);  
        } else {
            return false;
        }


    $.ajax({
        type: 'POST',
        url: instanceurl_o+"/getmyparcel/address",
        data: JSON.stringify(jsonData), 
        success: function(result) {
			logDebugMsg(result.msg);
        	$('#cDatatable').DataTable().ajax.reload();
        	$("#newAddressModal").modal('hide');
			 $('#errorMessage').hide();
			 $('#sucessMessage').show();
            $('#sucessMessage').html("Address Updated successfully.");
        },
		error: function(jqXHR, ajaxOptions, thrownError) {
                  logDebugMsg(thrownError + "\r\n" + jqXHR.statusText + "\r\n" + jqXHR.responseText + "\r\n" + ajaxOptions.responseText);
                }
       
    });
});
var addId=0;			
function editAddress(add) {
	 $('#sucessMessage').hide();
	 $('#errorMessage').hide();
	 $('#sucessModel-edit').hide();
	 $('#errorModel-edit').hide();
    var data = cTable.row(add.parents('tr')).data();
	addId=data.id;
   $("#editAddForm").find('input[name="id"]').val(data.id);
    $("#editAddForm").find('input[name="contactName"]').val(data.contactName);
    $("#editAddForm").find('input[name="addressLine1"]').val(data.addressLine1);
    $("#editAddForm").find('input[name="addressLine2"]').val(data.addressLine2);
    $("#editAddForm").find('input[name="addressLine3"]').val(data.addressLine3);
    $("#editAddForm").find('input[name="city"]').val(data.city);
    $("#editAddForm").find('input[name="county"]').val(data.county);
    $("#editAddForm").find('input[name="postCode"]').val(data.postCode);
   // $("#editAddForm").find('input[name="country"]').val(data.country);
    $("#editAddForm").find('input[name="phoneNumber"]').val(data.phoneNumber);
		getsourcecountrylist(data.country);

	 $('#addressModal').modal('show');
}
function getsourcecountrylist(sourceCountry) {			
	$.ajax({
		type : 'GET',
		url : instanceurl_o+"/o/getmyparcel/country/source",
		dataType: 'json',
		type: "GET",
		cache : false,
		success : function (data) {
			  logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/o/country/source , data :: '+data);
			 $("#ecountry") .append($("<option></option>").attr("value",sourceCountry).text(sourceCountry)); 
					if(data){
						var count = 0;
						$.each(data.rows, function (key, entry) {                	
						$("#ecountry").append($('<option></option>').attr('value', entry.cell[1]).text(entry.cell[1]));
						count++;
						})
					   }
	           }
	
           });
          }
$("#submitEditAdd").click(function() {
data= $("#editAddForm").serialize();
 
	logDebugMsg(" Add ID :");
	logDebugMsg(addId);
/*var jsonData ={
	  "id" :addId,
	"contactName": $('#econtactName').val(),
	"addressLine1" :	$('#eaddressLine1').val(),
	 "addressLine2": $('#eaddressLine2').val(),
	 "addressLine3": $('#eaddressLine3').val(),
	 "city": $('#ecity').val(),
	 "county": $('#ecounty').val(),
	 "postCode": $('#epostCode').val(),
	 "country": $('#ecountry').val(),
	"phoneNumber": $('#ephoneNumber').val()
	}; */
	
	
	var contactName = $("#econtactName").val();
	var addressLine1 = $("#eaddressLine1").val();
	var adressLine2 = $('#eaddressLine2').val();
	var addressLine3 = $('#eaddressLine3').val();
	var city = $("#ecity").val();
	var postCode = $("#epostCode").val();
	var country = $("#country").val();
	var phoneNumber = $('#ecounty').val();
		var county = $('#ephoneNumber').val();
	 function validateEnterAddress() {
            var flag1 = true;
            if (contactName == "") {
			    $('#sucessMessage').hide();
				 $('#errorMessage').hide();
                $('#errorModel-edit').show();
                $('#errorModel-edit').html("Oops! your contact name is empty");
                flag1 = false;
                return flag1;
            } else if (addressLine1 == "") {
				$('#sucessMessage').hide();
				 $('#errorMessage').hide();
                $('#errorModel-edit').show();
                $('#errorModel-edit').html("Oops! your address line is empty");
                flag1 = false;
                return flag1;
            } else if (city == "") {
				$('#sucessMessage').hide();
				 $('#errorMessage').hide();
                $('#errorModel-edit').show();
                $('#errorModel-edit').html("Oops! your city is empty");
                flag1 = false;
                return flag1;
            } else if (postCode == "") {
				$('#sucessMessage').hide();
				 $('#errorMessage').hide();
                $('#errorModel-edit').show();
                $('#errorModel-edit').html("Oops! your postcode is empty");
                flag1 = false;
                return flag1;
            }  else {
                return flag1;
            }
        }
        var f = validateEnterAddress();

 if (f == true) {

	var jsonData ={
	   "id" :addId,
	"contactName": $('#econtactName').val(),
	"addressLine1" :	$('#eaddressLine1').val(),
	 "addressLine2": $('#eaddressLine2').val(),
	 "addressLine3": $('#eaddressLine3').val(),
	 "city": $('#ecity').val(),
	 "county": $('#ecounty').val(),
	 "postCode": $('#epostCode').val(),
	 "country": $('#ecountry').val(),
	"phoneNumber": $('#ephoneNumber').val()
	}
logDebugMsg(jsonData);  
        } else {
            return false;
        }
		
logDebugMsg(jsonData);
   $.ajax({
        type: 'POST',
        url: instanceurl_o+"/getmyparcel/address",
        data: JSON.stringify(jsonData), 
        success: function(result) {
			logDebugMsg(result);		
        	$('#cDatatable').DataTable().ajax.reload();
        	$("#addressModal").modal("hide");
			 $('#errorMessage').hide();
			 $('#sucessMessage').show();
            $('#sucessMessage').html("Address Updated successfully.");
			
        },
        error: function() {
			logDebugMsg("Failed to Add address :"+instanceurl_o+"/address")
            alert("error");
        }
    });
});

function updateAddressType(address,type) {
	
	var data = cTable.row(address.parents('tr')).data(); 
	var updateType = type;
	logDebugMsg("update addresstype: ");
	logDebugMsg(data.id);
	logDebugMsg(updateType);
	var txt;
	
		var r = confirm("Do you want to update your address ? ");
		if (r == true ){			
					var jsonData ={
					 	"id" : data.id,
		        	"addressType": updateType
					};
				logDebugMsg(jsonData);
				   $.ajax({
						type: 'POST',
						url: instanceurl_o+"/getmyparcel/addresstype",
						data: JSON.stringify(jsonData), 
						success: function(result) {
							logDebugMsg(result);		
							$('#cDatatable').DataTable().ajax.reload();
							
						},
						error: function() {
							logDebugMsg("Failed to Add address :"+instanceurl_o+"/getmyparcel/addresstype")
							alert("error");
						}
					});
		  
		}else{
		 	$('#cDatatable').DataTable().ajax.reload();
		}
	}
	
	

function deleteAddressType(address,type) {
	
	var data = cTable.row(address.parents('tr')).data(); 
	var updateType = type;
	var txt;
		var r = confirm("Do you want to update your address ? ");
		if (r == true ){
			$.post("deleteclientaddresstype.gmp",
		            { 
		        	
					addressId : data.id,
		        	addressType: updateType
		        	
		            },
		            function(data, success){
		            	$('#cDatatable').DataTable().ajax.reload();
		            });
		  
		}else{
		 	$('#cDatatable').DataTable().ajax.reload();
		}
		
	}
	
		
$(document).ready(function () {
	getBillingCountriesList();

});

function reloadadddatatable() {
	var dataUrl = "/getalladdressforclient.gmp";
	cTable.ajax.url(dataUrl).load();
}
				 
function getBillingCountriesList() {
    //get list of country
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: orderurl + '/o/getmyparcel/country/all',
        error: function(jqXHR, textStatus, errorThrown) {
            logDebugMsg("==>Error thrown while retrieving country list:" + errorThrown);
        },
        success: function(data) {
            logDebugMsg('==>> Success in calling url ::' + instanceurl_o + '/o/getmyparcel/country/all , data :: ' + data);
			logDebugMsg(data);
            if (data) {
                var count = 0;

                $.each(data.rows, function(key, entry) {
                  <!--  $("#billing_country").append($('<option></option>').attr('value', entry.cell[1]).text(entry.cell[1]));-->
					$("#country").append($('<option></option>').attr('value', entry.cell[1]).text(entry.cell[1]));

                    count++;
                })	
				
            }
        },

    });
}

</script>

	
  <?php  include 'includes/footerAx.php' ?>
</html>