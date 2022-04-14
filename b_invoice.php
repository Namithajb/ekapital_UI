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
    <style type="text/css">
      .input-group{
      padding-bottom: 10px;
      width: 100%;
      padding-right: 10px;
      },
      .ui-datepicker-calendar {
      display: none;
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
        <div class="box-intro text-center">
          <h3 class="heading">Your Invoices</h3>
        </div>
        <div class="row">
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Start Date</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="sdate" id="sdate" >
                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label>End Date</label>
                  <div class="input-group">
                    <input type="text" class="form-control" type="text"
                      name="edate" id="edate"  > <span
                      class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 text-left  margin20-top">
          <div class="form-group">
            <div class="input-group">
              <button type="button" name="showinvoice" id="showinvoice" value="Show invoice" onclick="loadgrid();"
                class="btn btn-warning" >
              <i class='fa fa-eye'></i> Show Invoices
              </button>
            </div>
          </div>
        </div>
        <div class="col-sm-12 text-center">
          <table id="invDatatable"
            class="table table-hover table-bordered display">
            <thead>
              <tr>
                <th>File Name</th>
                <th>Invoice Number</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Paid ?</th>
                <th>Download</th>
                <!--<th>Delete</th>
                  <th>Email</th>  -->
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="space20"></div>
      <hr>
    </main>
    <?php  include 'includes/footerAx.php' ?>
  <?php
	$cdn=$config['CDNURL'];
	?>
 <script type = "text/javascript"  src = "<?php echo $cdn;?>/js/datatables-checkboxes/dataTables.checkboxes.min.js" > </script> 
<script type = "text/javascript" >
var beurl = "<?php echo  $config['INSTANCEURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui";
var instanceurl = "<?php echo  $config['INSTANCEURL'];?>";
var furl = "<?php echo  $config['FRONTENDURL'];?>";
$('#client').select2();
$('#generating').css("display", "none");

function valButtons() {
    cid = $('#client').val();
    sdate = $('#sdate').val();
    edate = $('#edate').val();

    if ((cid > 0) && (sdate != '') && (edate != '')) {
        $('#showuninvoiced').removeAttr("disabled");
        $('#generate').removeAttr("disabled");
        return true;
    } else {
        $("#showuninvoiced").prop("disabled", true);
        $("#generate").prop("disabled", true);
        alert("Please choose:\n- Client Name\n - Start date and End date\n\n to proceed with showing Invoices");
        return false;
    }
}

var order;

function reloadUnInvGrid() {
    var dataUrl = "getAllUnInvoicedOrder.gmp?cid=" + $('#client').val() + "&sdate=" + $('#sdate').val() + " 00:00:00" + "&edate=" + $('#edate').val() + " 23:59:59";
    order.ajax.url(dataUrl).load();
}
$('#showuninvoiced').on('click', function() {
    if (order == null) {
        cid = $('#client').val();
        sdate = $('#sdate').val();
        edate = $('#edate').val();
        order = showorder(cid, sdate, edate);
    } else {
        reloadUnInvGrid();
    }

    //$('#orderDatatable').DataTable().ajax.reload();
});



/* $('#generate').ajaxStart(function(){
    $("#generating").css("display", "block");
    $("#generate").css("display", "none");
    
});
$('#generate').ajaxComplete(function(){
    $("#generating").css("display", "none");
    $("#generate").css("display", "block");
    
}); */


var rows;


Date.isLeapYear = function(year) {
    return (((year % 4 === 0) && (year % 100 !== 0)) || (year % 400 === 0));
};

Date.getDaysInMonth = function(year, month) {
    return [31, (Date.isLeapYear(year) ? 29 : 28), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][month];
};

Date.prototype.isLeapYear = function() {
    var y = this.getFullYear();
    return (((y % 4 === 0) && (y % 100 !== 0)) || (y % 400 === 0));
};

Date.prototype.getDaysInMonth = function() {
    return Date.getDaysInMonth(this.getFullYear(), this.getMonth());
};

Date.prototype.addMonths = function(value) {
    var n = this.getDate();
    this.setDate(1);
    this.setMonth(this.getMonth() + value);
    this.setDate(Math.min(n, this.getDaysInMonth()));
    return this;
};

var d = new Date();
d.setDate(d.getDate() - 30);
$('#sdate').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    todayHighlight: true
}).attr('readonly', 'readonly');
$('#edate').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    todayHighlight: true
}).attr('readonly', 'readonly');
$('#duedate').datepicker({
    format: "yyyy-mm-dd",
    autoclose: true,
    todayHighlight: true
}).attr('readonly', 'readonly');
$('#sdate').datepicker('update', d);
$('#edate').datepicker('update', new Date());

// ======================== INVOICE  ===============================
var invoice;
$(document).ready(function() {
function loadgrid() {
    var sdate = $('#sdate').val() + " 00:00:00";
    var edate = $('#edate').val() + " 23:59:59";
    invoice.ajax.url(instanceurl_o + "/getmyparcel/invoice/" + sdate + "/" + edate + "/").load();
}
var sdate = $('#sdate').val() + " 00:00:00";
var edate = $('#edate').val() + " 23:59:59";
invoice = jQuery("#invDatatable").DataTable({
	 responsive: true,
    "processing": true,
    "order": [
        [1, "desc"]
    ],
    "ajax": {
        "url": instanceurl_o + "/getmyparcel/invoice/" + sdate + "/" + edate + "/",
        "dataSrc": "",
		error: function(jqXHR, ajaxOptions, thrownError) {
					  $('#sucessMsg').hide();
                    $('#errorMsg').show();
                    $('#errorMsg').html("Oops! error while fetching invoices please contact admin");
                  logDebugMsg(thrownError + "\r\n" + jqXHR.statusText + "\r\n" + jqXHR.responseText + "\r\n" + ajaxOptions.responseText);
                }

    },

    order: [
        [1, 'desc']
    ],
    "columnDefs": [{
            "targets": [2, 3],
            "render": function(data) {
                return data.split(" ")[0];
            }
        },
        {
            "targets": 5,
            "render": function(data, type, row, meta) {
                var rec = "<a href=" + data + " target='_blank'> <i class='fa fa-cloud-download' style='font-size:36px;color:blue'></a>";
                return rec;
            }
        }, {
            "targets": 4,
            "defaultContent": "",
            "render": function(data, type, row, meta) {
                logDebugMsg(row);
                logDebugMsg("payStatus :" + data);
                logDebugMsg(row.invoicenum);
                var label_class;
                var payStatus;
                switch (data) {
                    case 'Y':
                        label_class = 'success';
                        payStatus = data;
                        return "<button   class='btn btn-" + label_class + "'>" + "   <i class='fa fa-check' aria-hidden='true'> </i>  Paid   " + "</button>";

                        break;
                    case 'N':
                        label_class = 'danger';
                        payStatus = data;
                        return "<button id='btnMakePayment' title='Click here to make payment' onclick='makePayment(" + row.invoicenum + ");' class='btn btn-" + label_class + "'>" +"<i class='fa fa-hand-o-right' aria-hidden='true'></i> Pay Now "+ "</button>";
                        break;
                }
            }
        },

    ],
    columns: [{
            data: "invoicefile"
        },
        {
            data: "invoicenum"
        },
        {
            data: "sDate"
        },
        {
            data: "eDate"
        },
        {
            data: "paid"
        },
        {
            data: "link"
        },
        //{data: null},
        //{data: null},
    ],

});
$.when(
       getPaymentProvider(),
    ).then(function() {
        logDebugMsg("==> payment provider ...");
    });

});
//var paymentGatewayProvider = getPaymentProvider();
var paymentProvider;

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
				logDebugMsg(d.provider);
               paymentProvider = d.provider;
            }
        },

    });
    return succeed;
}
function makePayment(invoicenum) {
    $.ajax({
        async: false,
        type: 'GET',
        dataType: 'json',
        url: instanceurl_o + '/getmyparcel/order/' + invoicenum + '/invoice',
        error: function(jqXHR, textStatus, errorThrown) {
            $('#errorMessage').show();
            $('#errorMessage').html("Oops! " + response.error.message);
            logDebugMsg("==>Error thrown :" + errorThrown);

        },
        success: function(data) {
            var d = data;
            if (d) {
                succeed = d;
                logDebugMsg(d);
				
				
				$.ajax({
					url: instanceurl_o + "/getmyparcel/invoice/alias",
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
					var url = new URL(furl + "/" + nextPage + ".php");
					
					url.searchParams.append('flow', 'invoice');
					url.searchParams.append('inv', invoicenum);
					window.location.href = url
				}

				});
				
				
				
				//window.location.href = furl+"/pay.php?inv="+invoicenum+"&flow=invoice";
               
            }
        },

    });

};


</script>
</html>