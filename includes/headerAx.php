    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta charset="UTF-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    
    <?php include 'includes/headerspecific.php' ?>
	<?php include 'includes/util.php' ?>
	<?php include 'includes/sessionHandler.php' ?>
	<?php include 'config.php' ?>
	<?php
	$cdn=$config['CDNURL'];
	$fbID=$config['FB_APP_ID'];
	?>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
   
    <script src="<?php echo $cdn;?>/js/jquery/jquery-1.12.2.min.js" type="text/javascript"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<script src="<?php echo $cdn;?>/js/jquery-ui-1.10.4.custom/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
	<script src="<?php echo $cdn;?>/js/application.js" type="text/javascript"></script>
    <script src="<?php echo $cdn;?>/js/application.min.js"></script>
	<script src="<?php echo $cdn;?>/js/timepicker/jquery.timepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo $cdn;?>/js/jquery.print/jquery.print.js" type="text/javascript"></script>
    <script src="<?php echo $cdn;?>/js/messageResource.min.js"></script>
    <link href="<?php echo $cdn;?>/css/style.min.css" rel="stylesheet" />
    <link href="<?php echo $cdn;?>/css/custom.css?v=1.1" rel="stylesheet" media="screen" />
    <!--[if lt IE 9]> <script src="/resources/js_new/ie.min.js"></script><![endif]-->

   <!-- <c:set var="req" value="${pageContext.request}" />
	<c:set var="uri" value="${req.requestURI}" />
    -->
    <link href="<?php echo $cdn;?>/js/jquerycharm/jquery-radiocharm.css" rel="stylesheet">
    <script src="<?php echo $cdn;?>/js/jquerycharm/jquery-radiocharm.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo $cdn;?>/css/datatable.min.css"/>
    <script type="text/javascript" src="<?php echo $cdn;?>/js/jquery/datatable.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo $cdn;?>/css/bootstrap-datepicker.css"/>
     <script src="<?php echo $cdn;?>/js/jquery/bootstrap-datepicker.js" type="text/javascript"></script>
		
    <link href="<?php echo $cdn;?>/css/baz-style.css" rel="stylesheet" />
    <script src="<?php echo $cdn;?>/js/FileSaver.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $cdn;?>/js/timepicker/jquery.timepicker.min.css" />
	<script src="https://apis.google.com/js/api:client.js"></script>
	 <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0&appId=<?php echo $fbID;?>&autoLogAppEvents=1"></script>
    <script type="text/javascript">
	
var shouldLogMsg = <?php echo $config['LOGGING'];?>;

//checking logging is true or false 
//if  true prints the logs in console
function logDebugMsg(logmsg ) {
if (shouldLogMsg) {
 console.log(logmsg);
}
}
    	// validation framework
		function validateEmpty(fieldName, errorMessage, confirmatinJsp){
			var status = true;
			if (!($(fieldName).val()) 
				|| $(fieldName).val() == '') {
					$(fieldName).addClass("error");
					
					if(typeof confirmatinJsp != undefined && confirmatinJsp)
						showErrorDivForConfirmationPage(fieldName,errorMessage);
					else
						showErrorDiv(errorMessage);
					
					status = false;
					
			} else  {
				$(fieldName).removeClass("error");
				hideErrorDiv();
			}
			return status;
		}

		function validateIfChecked(fieldName, errorMessage, confirmatinJsp){
			var status = true;
			if ($(fieldName).is(':checked') ) {
				hideErrorDiv();
			} else  {
				
				if(typeof confirmatinJsp != undefined && confirmatinJsp)
					showErrorDivForConfirmationPage('#term_condition',errorMessage);
				else
					showErrorDiv(errorMessage);
				status = false;
			}
			return status;
		}

		function validateHasPostiveValue(fieldName, errorMessage){		
			if (jQuery.isNumeric($(fieldName).val()))
			{
				// numeric
				if (parseFloat($(fieldName).val()) > 0) {
					// has value greater than 0
					hideErrorDiv();
					return true; 
				}
			} else {
				// invalid. reject.
				showErrorDiv(errorMessage);
				return false; 
			}
		}
		
		function validateUnallowedValue(fieldName, unAllowedValue, errorMessage){
			var status = true;
			if ($(fieldName).val() == unAllowedValue ) {
				showErrorDiv(errorMessage);
				status = false;
			} else  {
				hideErrorDiv();
			}
			return status;
		}

		function validateConsidredWeightLessThan(fieldName, allowedValue,  errorMessage){
			var status = true;
			if (jQuery.isNumeric($(fieldName).val())) {
				if (parseFloat($(fieldName).val()) > allowedValue ) {
					showErrorDiv(errorMessage);
					status = false;
				} else  {
					hideErrorDiv();
					status = true;
				}
			} else {
				showErrorDiv(errorMessage);
				status = false;
			}
			return status;
		}
		
		//validation for index page with 2 tabs
		
		function validateEmptyWithName(divName,fieldName, errorMessage, confirmatinJsp){
			var status = true;
			if (!($(fieldName).val()) 
				|| $(fieldName).val() == '') {
					$(fieldName).addClass("error");
					
					if(typeof confirmatinJsp != undefined && confirmatinJsp)
						showErrorDivForConfirmationPage(fieldName,errorMessage);
					else
						showErrorDivWithName(divName,errorMessage);
					
					status = false;
					
			} else  {
				$(fieldName).removeClass("error");
				hideErrorDivWithName(divName);
			}
			return status;
		}

		function validateHasPostiveValueWithName(divName,fieldName, errorMessage){		
			if (jQuery.isNumeric($(fieldName).val()))
			{
				// numeric
				if (parseFloat($(fieldName).val()) > 0) {
					// has value greater than 0
					hideErrorDivWithName(divName);
					return true; 
				}
			} else {
				// invalid. reject.
				showErrorDivWithName(divName,errorMessage);
				return false; 
			}
		}
		
		function validateUnallowedValueWithName(divName,fieldName, unAllowedValue, errorMessage){
			var status = true;
			if ($(fieldName).val() == unAllowedValue ) {
				showErrorDivWithName(divName,errorMessage);
				status = false;
			} else  {
				hideErrorDivWithName(divName);
			}
			return status;
		}

		function validateConsidredWeightLessThanWithName(divName,fieldName, allowedValue,  errorMessage){
			var status = true;
			if (jQuery.isNumeric($(fieldName).val())) {
				if (parseFloat($(fieldName).val()) > allowedValue ) {
					showErrorDivWithName(divName,errorMessage);
					status = false;
				} else  {
					hideErrorDivWithName(divName);
					status = true;
				}
			} else {
				showErrorDivWithName(divName,errorMessage);
				status = false;
			}
			return status;
		}
		
	function validatePhoneNumber(number,errorMessage){
	 var status=true;
	 var phoneno = /^([0-9\(\)\/\+ \-]*)$/;
       if($(number).val().match(phoneno))
        {
      hideErrorDiv(errorMessage);
        }
      else
        {
	   showErrorDiv(errorMessage);
       status = false;
        }
		return status;
		}


		function showErrorDiv(strMsg){
			$('#errMsg').empty();
			$('#errMsg').append(strMsg);
			$('#errMsg').show();	
			$('html, body').animate({ scrollTop: $('#errMsg').offset().top }, 'slow');
		}
		function showErrorDivWithName(divName, strMsg){
			$('#' + divName).empty();
			$('#' + divName).append(strMsg);
			$('#' + divName).show();	
			$('html, body').animate({ scrollTop: $('#' + divName).offset().top }, 'slow');
		}
		
		function fadeErrorDiv(timeToFade){
			$('#errMsg').fadeOut(timeToFade); // e.g. 15 secs
		}

		function hideErrorDiv(){
			$('#errMsg').empty();
			$('#errMsg').hide();	
		}
		
		function hideErrorDivWithName(divName){
			$('#' + divName).empty();
			$('#' + divName).hide();	
		}

		function showSuccessDiv(strMsg){
			$('#successMsg').empty();
			$('#successMsg').append(strMsg);
			$('#successMsg').show();	
		}
		function fadeSuccessDiv(timeToFade){
			$('#successMsg').fadeOut(timeToFade); // e.g. 15 secs
		}

		function hideSuccessDiv(){
			$('#successMsg').empty();
			$('#successMsg').hide();	
		}
		
		function showErrorDivForConfirmationPage(fieldName,strMsg){
			$("div[id^='errMsg']").empty();
			//$('#errMsg').empty();
			$(fieldName).closest('.form-group').find('#errMsg').empty();
			$(fieldName).closest('.form-group').find('#errMsg').append(strMsg);
			$(fieldName).closest('.form-group').find('#errMsg').show();	
			//$('html, body').animate({ scrollTop: $(fieldName).parent().find('errMsg').offset().top }, 'slow');
		}

		/*
		This function replaces the contents of a button with a new text, with or without loading icon
		
		- btnName = name of the button 
		- strMsg = Message to show in button. For e.g. Loading...
		- showLoadingIcon = true or false
		
		for e.g.
		showAlternateBtnText ('btnMakePayment','Attempting payment...', true);
		showAlternateBtnText ('btnLoadOrders','Loading Orders...', true);
		
		*/
		function showAlternateBtnText(btnName, strMsg, showLoadingIcon){
			$("button[id^=" + btnName +"]").text('');
			
			if (showLoadingIcon){
			$("button[id^=" + btnName +"]").append(strMsg +"<img src="+'<?php echo $cdn;?>/img/ajax-loader.gif'+" />");
			}
		}
		
		$.ajaxSetup({
			crossDomain: true,
			beforeSend: function (xhr) {
				crossDomain: true;
				
				var currSessionId = '<?php if(isset($_COOKIE["GMPSESSID"])){ echo $_COOKIE["GMPSESSID"]; } ?>';
                  if(currSessionId==''){
					 currSessionId=document.cookie.split('; ').find(row => row.startsWith('GMPSESSID=')).split('=')[1];
				  }
				<?php
				if ( $_SESSION["logged_in"] == "Y") { ?>
					var sessionapikey = '<?php echo $_SESSION["token"] ; ?>';
					var sessionuserid = '<?php echo $_SESSION["email"] ; ?>';
				<?php 
				} else {
				?>
					var sessionapikey = '';
					var sessionuserid = '';
				<?php
				} 
				?>
					xhr.setRequestHeader("X-AuthToken", sessionapikey);
					//xhr.setRequestHeader("X_userid", sessionuserid);
					xhr.setRequestHeader("Content-Type", "application/json");
					xhr.setRequestHeader("Set-Cookie", "JSESSIONID=" + currSessionId);
				}
		});
	</script>	
	

	
	<style type="text/css">
	
	.ui-datepicker-trigger{cursor:pointer}
	
	.errorMsg{	
		padding: 10px;
		color:#222;
		background: #F78181;
		border: solid thin 1px #FE2E2E;
	}
	
	.successMsg{
		padding: 10px;
		color:#222;
		background: #A9F5BC;
		border: solid thin 1px ##58FA82;
	}
	
		.outer-sec{	
		padding: 10px;
		color:#222;
		background: #FFFFFF;
		border: solid thin 1px #FE2E2E;
	}
	</style>
