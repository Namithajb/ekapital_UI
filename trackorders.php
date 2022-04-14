<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title>
   
    </title>
  <title>Tracking | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
  <?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
		<?php include 'includes/headerAx.php' ?>
		<?php  include 'includes/include_chat_box.php' ?>
		<?php  include 'includes/google_tag_manager_head.php' ?>
		<?php include 'includes/google_tag_manager_body.php' ?>
		<?php include 'includes/menuAx.php' ?>	
		<?php
		$cdn=$config['CDNURL'];
		?>
   <style>
	
 body{
	font-size: 120%;
	 }
	.wrapper {
    text-align: center;
}
.button {
    position: absolute;
    top: 50%;
}

#trackingnumber {
    font-size: 15pt;
    height: 40px;
    width : 300px;
	color:black;
}

	</style>

  		</head>
    <!-- Main Content -->
  	<main class="padded20" style="background-color:#fff">
      <div class="bg-clr02" >
        <div class="container">
          <ol  class="breadcrumb">
            <li><a href="/index.php">Home</a></li>
            <li class="active">Tracking</li>
          </ol>
        </div>
      </div>
      <div class="container">

		
        <div class="box-intro text-center" id="track">
          <h1 class="heading">Parcel Tracking</h1>
        </div>

        <div class="row">
          <section class="col-sm-8 col-md-offset-2">
            <div class="panel panel-default b0">


              <div class="panel-body b1">
                <p class="text-center"style="color:black;"> We provide real-time tracking updates for all Get My Parcel deliveries. If you want to track your parcel, simply enter one or more tracking numbers in the parcel tracking box below to see where your parcel is and its current delivery status.</p>

                <p class="text-center" style="color:black;font-size:15px;"><b>Enter your parcel tracking number in the box below and click 'Track my parcel':</b></p>
                <div id="errMsgTrackIdApply" class="errorMsg col-md-12"></div>
				<div class="wrapper" align="left">
				<input type="text" id="trackingnumber" name="trackingnumber" size="40" ><br>
				</div>
                <br/>
				<div class="wrapper">
                <button class="btn btn-primary btn-login01" type="submit" href="trackorders.php" id="trackorder">TRACK MY PARCEL</button>
				</div>

              </div>
						<br>
						<div class="outer-sec" id="shipmentUpdates">
							<div class="orderinfo">
								<h2>Delivery info</h2>
								<h3 id="deliveryInfo"><span id="deliInfo"></span></h3>
								<div class="orderstatus">
								<div class="order_pl_start">
									<img src="<?php echo $cdn;?>/img/check.png">
									<p class="ordertitle">Order placed </p>
									<p class="orderdate"><span id="orderDate"></span></p>
								</div>
								<div class="order_sh">
									<img src="<?php echo $cdn;?>/img/roundempity.png" class="roundtc">
									<img src="<?php echo $cdn;?>/img/check.png" class="checktick">
									<p class="ordertitle">Collected </p>
									<p class="orderdate"><span id="shipDate"></span></p>
								</div>
								<div class="order_pl">
									<img src="<?php echo $cdn;?>/img/roundempity.png" class="roundtc">
									<img src="<?php echo $cdn;?>/img/check.png" class="checktick">
									<p class="ordertitle">In transit </p>
									<p class="orderdate"><span id="transitDate"></span></p>
								</div>
								<div class="order_dl">
								<img src="<?php echo $cdn;?>/img/roundempity.png" class="roundtc">
									<img src="<?php echo $cdn;?>/img/check.png" class="checktick">
									<p class="ordertitle">Delivered </p>
									<p class="orderdate"><span id="deliDate"></span></p>
								</div>
								</div>
							</div>
						
						
						<div class="shipmentdetail_wrap">
							<h3 class="accordion">Parcel Details</h3>
							 <div class="shippanel">
							 	<h2><span id="sourceCountry"></span> <span><img src="<?php echo $cdn;?>/img/right-arrow.png"></span> <span id="destCountry"></span></h2>
							 	<p class="parcelinf"><strong>Shipment Date :</strong> <span id="prefColDate"></span></p>
							 	<p class="parcelinf"><span id="proName"></span> | <strong>Carrier : <span id="supplierName"></span></strong></p>
							 	<p class="parcelinf" id="deliverydate"><strong>Estimated Delivery Time :</strong> <span id="estdeldate"></span></p>

							 </div>
						</div>
						
						<div class="shipmentdetail_wrap">
						 <h3 class="accordion">All Shipment Updates</h3>
						 <div class="shippanel" id="shippane">
						</div>
						</div>
						</div>
          </section>
		
		
		</div>
        </div>

      </div>

      <div class="icone-clr">

        <div class="container">
          <h1 class="heading"><span aria-hidden="true" class="glyphicon glyphicon-question-sign"></span> FAQ about Parcel Tracking</h1>
          <div class="row">
            <section class="col-sm-5 text-left">
              <h3 class="heading"> How to Track Your Parcel </h3>
              <p> Get My Parcel partners with the world's best couriers to deliver our parcels so whether you need to use our DPD tracking service, DHL or UPS tracking, you can track your package direct from this page. From collection to final delivery, we provide regular scan updates. Scans tell you where your parcel is and its current status.</p>
            </section>
            <section class="col-sm-7 text-left">
              <div class="left-line">
                <p><b>Here is a quick guide to status terms and what they mean:</b></p>

                <ul class="text-left">
                  <li> <span class="text-info"> Billing info received: </span> booking is completed and your parcel is scheduled for collection</li>
                  <li><span class="text-info">In Transit:</span> your parcel has been collected and is on its way</li>
                  <li><span class="text-info">Exception: </span>there is a delay with your shipment. Check the scan info for further info</li>
                  <li><span class="text-info">Delivered:</span> Your parcel has arrived and been signed for by the recipient</li>
                </ul>
              </div>
            </section>
          </div>
        </div>
        <br/>
        <hr class="seprater"/>

        <div class="container">

          <div class="row">
            <section class="col-sm-5 text-left">
              <h3 class="heading"> What to do if Your Parcel Tracking Shows 'Exception'</h3>
              <p> If your parcel's status is shown as 'exception', this means there is a potential delay or issue with your delivery. This could be for a number of different reasons so please check the scan information and contact the Get My Parcel customer service team if you need further advice.</p>
            </section>
            <section class="col-sm-7 text-left">
              <div class="left-line">
                <p><b>These are the main reasons a shipment could get an exception scan:</b></p>

                <ul class="text-left">
                  <li>  The recipient was not there to accept the delivery</li>
                  <li> There has been a problem with transportation and your parcel is temporarily delayed</li>
                  <li>Your parcel is being held at customs. This applies to non-EU shipments only.</li>
                  <li> Shipment is travelling to a remote area location and the transit time is longer than expected</li>
                  <li>Your package has been sent to a different sorting facility and has incurred a 24 hour delay</li>
                  <li>  The sender of the parcel has provided incorrect address details</li>
                </ul>

              </div>
            </section>
          </div>
          <br/>
        </div>
      </div>
      <br/>
      <div class="container">



        <h1 class="heading text-center"><span aria-hidden="true" class="glyphicon glyphicon-globe"></span> International Parcel Delivery</h1>
        <br/>
        <article class="text-center">
          <p > International deliveries have a greater risk of being delayed as they have to travel through customs. When you track your international parcel you will see it has a lot more scans than a UK parcel as it will undergo more transit and handling stages before arriving in the delivery country. The most likely delay when sending an international delivery is your package being held at customs. In this event, Get My Parcel will always provide the latest tracking status and help with a swift resolution.</p>

          <p>

            If you are tracking your package and discover that your shipment has been delayed in customs, it is generally the receiver that the carrier will want to contact so they can either verify the receiver's details or arrange payment of any applicable duties and taxes before releasing the package. Get My Parcel customer services can offer advice here but you can help resolve this by asking your parcel's recipient to make contact with the courier to resolve the delay.
          </p>

          <p>As soon as the shipment is in transit again, the tracking status will change from 'Exception' to 'In-transit' and your parcel should be cleared for final delivery within 24 hours.</p>
          <p> Whether you want to track a parcel from China or track a UK package, Get My Parcel's advanced tracking tools provide real time visibility from door to door.</p>
        </article>

      </div>

    </main>
  <!-- Main Content -->
	 <!-- Footer -->
    <?php  include 'includes/footerAx.php' ?>
	<!-- Footer - End --> 
	
	<script type="text/javascript">
	
	var beurl ="<?php echo  $config['INSTANCEURL'];?>";
	var instanceurl_o = beurl + "/api/v1/ui/o/getmyparcel";
	$("#shipmentUpdates").hide();
	$("#errMsgTrackIdApply").hide();
	var days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
	var monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
	var url_string = window.location.href
    var url = new URL(url_string);
	
	$(function(){	
	  if(url.searchParams.get("trackingId")!=null){
		  $("#trackingnumber").val(url.searchParams.get("trackingId"));
		  getTrackingInfo(url.searchParams.get("trackingId"));
	  }
	});
	
	function getTrackingInfo(trackingId){
			  $.ajax({
	        url: instanceurl_o + "/track/status/"+trackingId,
	        type: "GET",
			dataType: 'json',
			cache:"false",
	        success: function(d){
				if(d.status==0 || d.status==1){
			  $("#errMsgTrackIdApply").append(d.message);
			  $("#errMsgTrackIdApply").show();
				}else{
				buildOrderDetails(d);
				buildTrackingDetails(d);
				}
	        },
	        error: function(){
	            alert("There was an error please contact the System Admin");
	        }
			
	    })
	}

	$("#trackorder").on("click", function(){
		 
		$("#shipmentUpdates").hide();
		$(".orderinfo").load(location.href + " .orderinfo");
		$("#errMsgTrackIdApply").empty();		
		
		var bReturn = validateTrackingNo();
	if (bReturn == false){
		return bReturn; // invalid cant proceed
	} 
	  var href = $(this).attr('href');
		var   newHref = href + '?trackingId=' + $("#trackingnumber").val();
		     window.location.href = newHref;
	//window.location.href=url+"?="+$("#trackingnumber").val();
	//getTrackingInfo($("#trackingnumber").val());
	});
	
	function validateTrackingNo(){
		  var status = true;
	  if (status) status = validateEmptyWithName('errMsgTrackIdApply','#trackingnumber', 'Please enter a Tracking Id');
	    if (!status) {
	    return false;
	  } 
	}
	//build shipment updates
	function buildTrackingDetails(trackResponse){
		var shipmentEvent = trackResponse.shipmentEvents;
		var content="";
		if( (shipmentEvent!=null) && (shipmentEvent.length !=0) ){
			var date=shipmentEvent[0].date;
			var count = shipmentEvent.length-1;
			logDebugMsg("===>>>length.."+shipmentEvent.length );
			if(shipmentEvent[count].eventCode=="OK" || shipmentEvent[count].status.toUpperCase().includes("DELIVERED")){
				$("#deliverydate").hide();
				$("#deliveryInfo").hide();
				$(".order_dl").addClass("order_delivered");			
				$('#deliDate').html(new Date(shipmentEvent[count].date).getDate() +'&nbsp;'+ monthNames[new Date(shipmentEvent[count].date).getMonth()] );	
				content = buildShipmentEventDelivered(shipmentEvent[count]);
			}else{
				$(".order_dl order_delivered").hide();
				if(trackResponse.deliveryDate!=undefined){
				$('#deliInfo').html("Arriving by &nbsp;" +new Date(trackResponse.deliveryDate).toDateString());	
				}
			if(shipmentEvent[count].date==date)
					{
						content = buildFirstShipmentEvent(shipmentEvent[count]);
					}else{
					//different dates
					content = buildShipmentEvent(shipmentEvent[count]);
					}
			}
			count--;
			content = iterateShipmentEvent(shipmentEvent,content);
			var div = document.getElementById("shippane");
			$('#shippane').empty();
			 div.innerHTML += content;
					$("#shipmentUpdates").show();
		
		}else{
			 $("#errMsgTrackIdApply").append("No Details found for the specified Tracking Id. Please try again.");
			  $("#errMsgTrackIdApply").show();
		}
	}
	function iterateShipmentEvent(shipmentEvent,content){
		var count = shipmentEvent.length-2;
		var date=shipmentEvent[0].date;
			$.each( shipmentEvent, function( key, value ) {
				  if(count == -1) {
				return false; // breaks
				}
				if(shipmentEvent[count].status.includes("transit") || shipmentEvent[count].status.includes("Departed")){
					$(".order_pl").addClass("order_delivered");
					$('#transitDate').html(new Date(shipmentEvent[1].date).getDate() +'&nbsp;'+ monthNames[new Date(shipmentEvent[1].date).getMonth()] );	
				}
				if(shipmentEvent[count+1].date==shipmentEvent[count].date){
					//same date
					content+= buildShipmentEventWhenEqual(shipmentEvent[count]);
				}else{
					if(shipmentEvent[count].date==date)
					{	//build first date
						contentDiv = buildFirstShipmentEvent(shipmentEvent[count]);
					}else{
					//different dates
					contentDiv = buildShipmentEvent(shipmentEvent[count]);
					}
					content+=contentDiv;					
				}		
						count--;
					
						});
		
		return content;
		
	}
	//building parcel details
	function buildOrderDetails(trackResponse){
		if(trackResponse.deliveryDate){
		calculateDeliveryDate(trackResponse.deliveryDate);
		}else{
			$("#deliverydate").hide();
		}
		calculateShipmentDate(trackResponse.shipmentDate);
		calculateOrderDate(trackResponse.orderDate,trackResponse.shipmentDate);
	$("#sourceArea").text(trackResponse.originServiceArea);
	$("#sourceCountry").text(trackResponse.sourceCountryName);
	$("#destArea").text(trackResponse.destinationServiceArea);
	$("#destCountry").text(trackResponse.destinationCountryName);
	$("#proName").text(trackResponse.productName);
	$("#supplierName").text(trackResponse.supplierName);
	}
	
	function calculateDeliveryDate(DeliveryDate){
	$('#estdeldate').html(new Date(DeliveryDate).toDateString());
	$("#deliverydate").show();
	}
	
	function calculateShipmentDate(collectionDate){
	$('#prefColDate').html(new Date(collectionDate).toDateString());
	}
	
	function calculateOrderDate(orderDate,shipmentDate){
	
			var d=new Date(orderDate);
			var d1=new Date(shipmentDate);
			if(d>d1)
			orderDate=shipmentDate;
		$('#orderDate').html(new Date(orderDate).getDate()+'&nbsp;'+ monthNames[new Date(orderDate).getMonth()]);
		$('#shipDate').html(new Date(shipmentDate).getDate() +'&nbsp;'+ monthNames[new Date(shipmentDate).getMonth()] );
		$(".order_sh").addClass("order_delivered");	
	}
	
	function buildShipmentEvent(shipmentEvent){
		return '</div><div class="ship_prev"><p class="day_prev">'+days[ new Date(shipmentEvent.date).getDay() ]+'</p><p class="date_prev">'+ shipmentEvent.date +'</p><div class="scountry_p"><strong><span class="localtime">'+shipmentEvent.time+' Local Time |</span><span>'+shipmentEvent.status+'</span></strong><p class="areap">'+shipmentEvent.regionArea+'</p></div>';
	}
	
	function buildShipmentEventWhenEqual(shipmentEvent){
		return '<div class="scountry_p"><strong><span class="localtime">'+shipmentEvent.time+' Local Time | </span><span>'+shipmentEvent.status+'</span></strong><p class="areap">'+shipmentEvent.regionArea+'</p></div>';
	}
	function buildShipmentEventDelivered(shipmentEvent){
		return '</div><div class="ship_today"><p class="day_deliver">'+days[ new Date(shipmentEvent.date).getDay() ]+'</p><p class="date_deliver">'+ shipmentEvent.date +'</p><div class="scountry"><strong><span class="localtime">'+shipmentEvent.time+' Local Time |</span><span>'+shipmentEvent.status+'</span></strong><p class="areap">'+shipmentEvent.regionArea+'</p></div>';
	}
		function buildFirstShipmentEvent(shipmentEvent){
		return '</div><div class="ship_deliver"><p class="day_deliver">'+days[ new Date(shipmentEvent.date).getDay() ]+'</p><p class="date_prev">'+ shipmentEvent.date +'</p><div class="scountry_p"><strong><span class="localtime">'+shipmentEvent.time+' Local Time |</span><span>'+shipmentEvent.status+'</span></strong><p class="areap">'+shipmentEvent.regionArea+'</p></div>';
	}
	</script>
	<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</body>
</html>