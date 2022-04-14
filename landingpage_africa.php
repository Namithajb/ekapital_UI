<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ taglib prefix="security" uri="http://www.springframework.org/security/tags" %>
<!DOCTYPE html>
<html lang="en">
  <head>
 
    <%@ include file="google_tag_manager_head.jsp" %>
    <%@ include file="/WEB-INF/jsp/includes.jsp" %>
    <%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
	<%@taglib prefix="fn" uri="http://java.sun.com/jsp/jstl/functions" %>
    <?php include 'config.php' ?>
	<?php
	$cdn=$config['CDNURL'];
	?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
    <meta name="description" content="Getmyparcel is an online cheapest parcel and courier service with worldwide delivery through world’s best courier partners like UPS, DPD, Parcel force and others. Helping customer and business to save money." />
    <meta name="keywords" content="parcel, parcel delivery, courier, discount courier, cheap courier, worldwide ,UPS Parcelforce, DPD, DHL, TNT, Aramex, express import, save money, free collection and free delivery, logistic solutions, international  delivery" />
    <meta name="author" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta charset="UTF-8" />
	
    <link rel="shortcut icon" type="image/ico" href="<?php echo $cdn;?>/images/favicon.ico" title="GetMyParcel"/>
    <link href="<?php echo $cdn;?>/plugins/twitter-bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    
    <link href="<?php echo $cdn;?>/css/style.css" rel="stylesheet" media="screen" />
	<link href="<?php echo $cdn;?>/css/cookiecuttr.css" rel="stylesheet" media="screen" />

    <!--[if lt IE 9]>
    <script src="<?php echo $cdn;?>/plugins/html5shiv/html5shiv.min.js"></script>
    <script src="<?php echo $cdn;?>/plugins/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="<?php echo $cdn;?>/js/matchMedia.min.js"></script>
    <![endif]-->

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $cdn;?>/js/jqgrid-4.6/ui.jqgrid.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $cdn;?>/js/jquery-ui-1.10.4.custom/blitzer/jquery-ui-1.10.4.custom.min.css" />
		
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $cdn;?>/js/bubbletip/bubbletip.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $cdn;?>/js/bubbletip/bubbletip-IE.css" />
	
	<script src="<?php echo $cdn;?>/js/jquery/jquery-1.12.2.min.js" type="text/javascript"></script>
	
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo $cdn;?>/js/jquery-ui-1.10.4.custom/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
	
	<script src="<?php echo $cdn;?>/js/jqgrid-4.6/grid.locale-en.js" type="text/javascript"></script>
	<script src="<?php echo $cdn;?>/js/jqgrid-4.6/jquery.jqGrid.min.js" type="text/javascript"></script>
	
	<script src="<?php echo $cdn;?>/js/cookiecuttr/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?php echo $cdn;?>/js/cookiecuttr/jquery.cookiecuttr.js" type="text/javascript"></script>
	
	<script src="<?php echo $cdn;?>/plugins/twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo $cdn;?>/js/application.js" type="text/javascript"></script>
	
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $cdn;?>/plugins/timepicker/jquery.timepicker.min.css" />
	<script src="<?php echo $cdn;?>/plugins/timepicker/jquery.timepicker.min.js" type="text/javascript"></script>
	
	<script src="<?php echo $cdn;?>/js/bubbletip/jQuery.bubbletip-1.0.6.js" type="text/javascript"></script>
	
	<script src="<?php echo $cdn;?>/js/jquery.print/jquery.print.js" type="text/javascript"></script>
	
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/bs-3.3.6/b-1.1.2,kt-2.1.1,r-2.0.2,se-1.1.2/datatables.min.css"/> -->
	<!-- <script type="text/javascript" src="https://cdn.datatables.net/t/bs-3.3.6/b-1.1.2,kt-2.1.1,r-2.0.2,se-1.1.2/datatables.min.js"></script> -->
	<c:set var="req" value="${pageContext.request}" />
	<c:set var="uri" value="${req.requestURI}" />
	
	<c:if test="${fn:contains(uri, 'b_orderlist.jsp') || fn:contains(uri, 'a_orderlist.jsp') || fn:contains(uri, 's_orderlist.jsp') || fn:contains(uri, 'a_collectaddresses.jsp')}">
        
		<link rel="stylesheet" type="text/css" href="<?php echo $cdn;?>/css/datatable.min.css"/>
		
		<script type="text/javascript" src="<?php echo $cdn;?>/js/jquery/datatable.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="<?php echo $cdn;?>/css/bootstrap-datepicker.css"/>
		<script src="<?php echo $cdn;?>/js/jquery/bootstrap-datepicker.js" type="text/javascript"></script>
		
    </c:if>	

	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $cdn;?>/css/gmp.css" />
	
	<!-- dropzone file upload library -->
	<script src="<?php echo $cdn;?>/plugins/dropzone/dropzone.js" type="text/javascript"></script>
	
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.getmyparcel.com/css/datatable.min.css"/>
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.getmyparcel.com/css/gmp.css" />
	<script type="text/javascript" src="https://cdn.getmyparcel.com/js/jquery/datatable.min.js"></script>
	
	dropzone file upload library
	<script src="https://cdn.getmyparcel.com/plugins/dropzone/dropzone.js" type="text/javascript"></script>-->
	
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.getmyparcel.com/css/bootstrap-datepicker.css"/>
	<script src="https://cdn.getmyparcel.com/js/jquery/bootstrap-datepicker.js" type="text/javascript"></script>  -->
	
	<!-- <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.getmyparcel.com/css/themes/redmond/jquery-ui-1.8.2.custom.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.getmyparcel.com/css/themes/ui.jqgrid.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.getmyparcel.com/css/themes/ui.multiselect.css" /> -->

	<style media="screen">
		.panel { min-height: 230px; }
		main {padding-top: 2px;}
		.dataTables_processing{min-height: 0px !important;}		
	</style>
	<style type="text/css" media="print"> 
		* { font-family: calibri !important;}	
		.dl-horizontal dd {float: right; width: 50%; display:inline-block; }	
		 .dl-horizontal hr{display: block; width: 100%;}
		 .dl-horizontal dt{display: inline-block;width: 50%;}
		 .form-group.outer-sec{margin-bottom:10px;}
	</style>
	
	<style>
	th.ui-th-column div{
		white-space:normal !important;
		height:auto !important;
		padding:2px;
	}

	
	/* Column Headers */
	.ui-th-column, .ui-jqgrid .ui-jqgrid-htable th.ui-th-column {
		border-bottom: 0 none;
		border-top: 0 none;
		overflow: hidden;
		text-align: center;
		white-space: nowrap;
		//background: #0b3e6f url('<?php echo $cdn;?>/images/bg.png') 50% 50% repeat-x;
		//color:white;
		height:40px;
	}
	
	div.ui-jqgrid-hdiv {
		border-bottom: 0 none;
		border-top: 0 none;
		overflow: hidden;
		text-align: center;
		white-space: nowrap;
		//background: #0b3e6f url('<?php echo $cdn;?>/images/bg.png') 50% 50% repeat-x;
		//color:white;
	}
	
	 .ui-accordion .ui-accordion-header {
		display: block;
		cursor: pointer;
		position: relative;
		margin-top: 2px;
		padding: .5em .5em .5em .7em;
		min-height: 0;
		font-size: 14px;
		font-family: inherit;
		font-weight: bold;
	  }

	 /* background overlay color for a popup jquery ui dialog */
	.ui-widget-overlay {
	   /*background: #AAA url('<?php echo $cdn;?>/images/ui-bg_diagonals-thick_15_0b3e6f_40x40.png') 50% 50% repeat-x;*/
	   opacity: .70;
	   filter: Alpha(Opacity=70);
	}  
	
	table.borderlessTable {
		border-width: 0px;
	}
	
	table.dialogTable {
		border-width: 1px;
		border-spacing: 2px;
		border-style: outset;
		border-color: gray;
		border-collapse: collapse;
		background-color: white;
	}
	table.dialogTable th {
		border-width: 1px;
		padding: 4px;
		border-style: solid;
		border-color: gray;
		background-color: grey;
		color: white;
		-moz-border-radius: ;
	}
	table.dialogTable td {
		border-width: 1px;
		padding: 4px;
		border-style: solid;
		border-color: gray;
		background-color: white;
		-moz-border-radius: ;
	}
	
	.ui-datepicker-trigger{cursor:pointer}
	
	.ui-autocomplete {
		background: #E0ECF8;
		border-radius: 0px;
		border: 1px #FE2E2E solid;
	}
	.ui-autocomplete:hover {
		background: #E0ECF8;
		border: 1px #FE2E2E dotted;		
	}

	/* Set row height to a fixed value  */
	.ui-jqgrid tr.jqgrow td {
		white-space:nowrap;
	}

	/* jqgrid popups size fixed*/ 
	.ui-jqdialog {
		display: none;
		width: 450px;
		position: absolute;
		padding: .2em;
		font-size: 11px;
		overflow: visible;
		left: 30% !important;
		top: 10% !important;
	}	
	
	@media (max-width: 767px ) {
		#home-banner{
			display: none; 
		}
	}
	
	.errorText .error {
	  	background-color: #f2dede;
	    border-color: #ebccd1;
	    color: #a94442;
	    border-radius: 4px;
	    margin-bottom: 10px;
	    margin-top: 10px;
	    padding: 10px;
	    display: inline-block;
	  }	
	  
	.error{
	    border-color: #FF0500;
    	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    	box-shadow: inset 0 0px 1px #FF0500;
	} 
	#expandingDescription {
		height: 70px;
		text-align:left;
		overflow:hidden;
	}
	#expandingSplInstructions {
		height: 70px;
		text-align:left;
		overflow:hidden;
	}
	
	</style>

		
	<script type="text/javascript">
		$.jgrid.no_legacy_api = true;
		$.jgrid.useJSON = true;
	
	</script>
	
	
   <body>
        <%@ include file="google_tag_manager_body.jsp" %>
	<security:authorize access="hasAnyRole('ROLE_USER', 'ROLE_ANONYMOUS','ROLE_SUPPLIER_AGENT','ROLE_ADMIN', 'ROLE_BUSN', 'ROLE_MANAGER')">
 	<style>
		.kycbgcolor{background-color: #fffff;}
 	</style>
      <section id="top-bar">

	      <div class="container">
	        <div class="row">

	          <ul class="list-inline text-right hidden-sm hidden-xs">

	            <li class="pull-left hidden-sm">
	              <a href="mailto:info@getmyparcel.com">
	                <i class="fa fa-envelope-o" aria-hidden="true"></i> info@getmyparcel.com
	              </a>
	            </li>
	            <security:authorize access="hasRole('ROLE_ANONYMOUS')">
				<li>
				  <a href="/register.gmp">
					<i class="fa fa-user"></i> Register
				  </a>
				</li>
				<li >
				  <a href="/login.gmp">
					<i class="glyphicon glyphicon-log-in"></i> Login
				  </a>
				</li>
	            </security:authorize>
	            

				
              	<security:authorize access="hasAnyRole('ROLE_USER', 'ROLE_BUSN', 'ROLE_SUPPLIER_AGENT')">
	              	<li class="list-icone">
	              	
		              	<div class="dropdown welcome-btn">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Welcome <c:out value="${sessionScope['scopedTarget.userBean'].name}"/> <i class="caret"></i>
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="/profile.gmp"><i class="fa fa-gear"></i>&nbsp;Your Profile</a>
							<a class="dropdown-item" href="/changepassword.gmp">Change Password</a>
						   </div>
						</div>

	              	</li>
	              	<li class="list-icone">
		                <a href="/logout.gmp">
		                  <i class="glyphicon glyphicon-log-out"></i> Logout
		                </a>
	              	</li>
              	</security:authorize>

	          </ul>
	        </div>
	      </div>
		</section>

		<header id="header">

   		<div class="container">
     			<nav class="navbar navbar-inverse">
	          <div class="container-fluid">
	            <div class="navbar-header">
	              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	              </button>
	              <a class="navbar-brand" href="/xhome.gmp">
	                <img src="<?php echo $cdn;?>/img/logo.png" alt="GetMyParcel Logo" /> GetMyParcel
	                <!-- <img src="<?php echo $cdn;?>/img/favicon.png" alt="" class="img-responsive visible-xs"/> -->
	              </a>
	            </div>
	        </nav>
     		</div>
     		
     		<c:set var="req" value="${pageContext.request}" />
			<c:set var="uri" value="${req.requestURI}" />
	
	   </header>
				

	
    <div class="container ">
	   <div class="row">
	    <section class="col-sm-12 printable">
			
			
			<div class="row">
			<br/><br/>
			<div class="col-sm-8" >
				<h2>Send Couriers / Parcel to Africa at Great Prices</h2>
				<p>
				<h3>
					<ul>
						<li> Collection from your home or office
						<li> Excellent customer support.
						<li> Door to Door  delivery services available
						<li> Protection cover available
						<li> Delivery within 2 to 3 days to main cities in Africa.
						<li> Delivery from &pound;20 available.
						<li> Relocation package/ transfer of residence available.
						<li> Insurance available on request.
					</ul>
				</p>
				
			</div>
			<div class="col-sm-3">
				<h2>Interested ?</h2>
				<p>It could be your <b>Gifts</b> to Parents or Relatives, or may be <b>Documents for Visa</b> ! Simply login and book courier with Service of your choice.<br/><br/> <a href="/contactUs.gmp"><button class="btn btn-info btn-lg">Contact Us Today!</button></a></p>
			</div>
			
			
			<div class="col-sm-8">
				<h2>Our Service to Africa</h2>
				<p></p>
<p>
					Africa is one of the fastest growing economies in the world. With our strategic alliance coupled with the extensive knowledge in the courier industry, GetMyParcel can provide excellent service at economical rates in delivering parcel to Africa.
</p><p>
We understand the importance and urgency of documents, such as visa application, bank statements and are quite experienced in delivering them. For the past several years we have been handling the courier shipments many African expats from the UK to Africa and other countries. GetMyParcel are sure if given an opportunity, we will be able to provide you with our excellent service.
</p><p>
The up to date status of the shipments sent through us can be tracked on our website. We can arrange collection from your office at a mutually convenient time.
</p><p>
We will offer a tailor made service for your parcel detail. Since non-document parcel to Africa requires customs paper and KYC documents, we can help with information regarding customs paper works required.

 </p><p>

We regularly update with Customs procedure and latest regulation in different countries in Africa. However it is the receiver's responsibility to deal with customs duties when delivering goods there. 

With our alliance with worlds best courier services we can offer a premium service at an economy rate.

For an instant quote please click, we will able to help with your heavier parcel with special quote.
</p><p>
Please the link below for parcel restrictions to Africa.

				
				
				<p>&nbsp;</p>
			</div>
			<div class="col-sm-4">
				<h2>Get a Quote Now !!</h2>
				
				<p>
				Simply do search and generate a quote. Once you are happy with the service, raise an order. We will get in touch with you shortly to confirm and advice further.
				<br/><br/>
				<a href="/xhome.gmp"><button class="btn btn-success btn-lg">Generate a Quote</button></a></p>
			</div>
			
			<div class="col-sm-8">
				<h4>Terms and Conditions</h4>
				
				<p>All Couriers are subject to <a href="/prohibiteditemstandc.gmp" target="_blank">Prohibited Items Terms and Conditions</a></p>
				<br/><br/><br/>
			</div>
			
			
			
			</div>
			
				
		</section>
       



  </div>
 </div>
 
	</security:authorize>
</body>
</html>