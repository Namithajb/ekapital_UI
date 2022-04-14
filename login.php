<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Login | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
 <?php include 'includes/headerAx.php' ?>
		<?php  include 'includes/include_chat_box.php' ?>
		<?php  include 'includes/google_tag_manager_head.php' ?>
        </head>
  
    <!-- added -->  
 <body>
		<?php include 'includes/google_tag_manager_body.php' ?>
  		<?php include 'includes/menuAx.php' ?>
		<?php include 'auth.php' ?>
		</header>
<?php
	$cdn=$config['CDNURL'];
	?>		
<style>
    #customBtn {
      display: inline-block;
      background: white;
      color: #444;
      width: 245px;
      border-radius: 5px;
      border: thin solid #888;
      box-shadow: 1px 1px 1px grey;
      white-space: nowrap;
    }
    #customBtn:hover {
      cursor: pointer;
    }
    span.label {
      font-family: serif;
      font-weight: normal;
    }
    span.icon {
      background: url('<?php echo $cdn;?>/img/btn_google_light_normal_ios.svg') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 42px;
      height: 42px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 42px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto', sans-serif;
</style>
  <main class="padded20">
      <div class="container">	 	
        <div class="box-intro text-center">
		<?php
			if (isset($_GET['name'])) {
				 ?> <div class="alert alert-success"><span class="pageSuccessText">
			    	<?php echo $_GET['name']; ?></span> </div><?php
			} 
		?>
          <h3 class="heading">Identify Yourself</h3>
        </div>

        <div class="row">
          <section class="col-sm-6 col-md-6 center">
            <div class="pull-center">
         
             <div id="gSignInWrapper">
				<div id="customBtn" class="customGPlusSignIn">
				  <span class="icon"></span>
				  <span class="buttonText">Continue with Google</span>
				</div>
			  </div>
			
			  <div id="name"></div>
  
    <br>
            <!-- <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false"  onlogin="checkLoginState();"></div>-->
<!--<fb:login-button size="xlarge" scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>-->

<div id="status">
</div>

              <div class="guestlogin " style="padding:10px;">
                Continue with your Order after logging in. You have a choice to either login with your existing account or continue with Social Login. You will be given an Option to create an account, if you wish. <br><br>
                We recommend that you create an account to be able to keep track of your Orders or to track them.
              </div>
              <div class="guestloginmobile" style="padding:10px;">
               <!-- -- OR -- -->
              </div>
            </div>
          </section>
          <section class="col-sm-6 col-md-6 center">
            <div class="panel panel-default01">
              <div class="panel-heading panel-heading01">
                <h3 class="panel-title"><i class="fa fa-user"></i> Sign In</h3>
              </div>
			  <form name="loginForm" action="login.php" method="post">
              <div class="panel-body text-justify">
                <hr>
                <div class="clearfix"></div>
                <div class="space10"></div>
                <?php if (isset($_GET["a"])){ ?>
				<input type="hidden" name="a" id="a" value="<?php echo $_GET["a"]?>">
				<?php } else {?>
				<input type="hidden" name="a" id="a" value="li">
				<?php } ?>
				<div id="errMsg" class="isa_error" style="background-color:red;padding: 5px 5px 5px 5px;margin-bottom:5 px;"></div>
				
                  <div class="form-group">
                    <label for="loginemail">Email / Username</label>
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                      <input type="text" name="X_userid" class="form-control" placeholder="Email address" autofocus="" id="X_userid">
                    </div>
                    <span class="errorText"></span>
                  </div>
                  <div class="form-group">
                    <label for="loginpass">Password</label>
                    <div class="input-group input-group-sm">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                      <input type="password" class="form-control" placeholder="******" id="X_password" name="X_password">
                    </div>
                    <span class="errorText"></span>
                  </div>
					
				
					
                  <a class="pull-left" target="_self" href="/forgotpw.php">Forgot Password?</a>
                  <div class="checkbox pull-left remember">
                    <label>
                      <input type="checkbox"> Remember Password?
                    </label>
                  </div>


                  <button class="btn btn-primary btn-lg btn-login pull-right" type="submit" id="btnLogin" >Login</button>

              </div>
			  </form>
			<!--
              <section class="social-login">
                <p class="text-center">Login with an existing account (Recommended) </p>
                <a href="#" class="social-fb" target="_blank">
                  <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </a>

                <a href="#" class="social-twitter">
                  <i class="fa fa-twitter-square" aria-hidden="true"></i>
                </a>

                <a href="#" class="social-linkedin">
                  <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>


              </section>-->
			
            </div>
			
			<div class="text-center">
				- OR - 
			</div>
			<br>
			 <form name="loginForm" action="register.php" method="post">
			    <?php if (isset($_GET["a"])){ ?>
				<input type="hidden" name="a" id="a" value="<?php echo $_GET["a"]?>">
				<?php } else {?>
				<input type="hidden" name="a" id="a" value="">
				<?php } ?>
			 <div class="panel panel-default01">
              <div class="panel-heading panel-heading01">
			  
                <h3 class="panel-title"><i class="fa fa-user"></i> Register New User</h3>
				
				
              </div>
			  <div class="panel-body text-justify">
			     <div class="form-group">
                    <span>If you do not have a id to login, do Register to continue. Do follow our <a href="privacy.php">privacy policy </a> on how we would be using your data</span>
				</div>
                  <button class="btn btn-primary btn-lg btn-login pull-right" type="submit" id="btnregister" >Register & Continue</button>
				 </div>
			 </div>
				</form>

          </section>
          
		 
          
		</div>



      </div>
      
		<form action="login.php" id = "signin" method="post">
		 <?php if (isset($_GET["a"])){ ?>
				<input type="hidden" name="a" id="a" value="<?php echo $_GET["a"]?>">
				<?php } else {?>
				<input type="hidden" name="a" id="a" value="li">
				<?php } ?>
	<input type="text" id = "token" name = "token" style="display: none">
	<input type="text" id = "email" name = "email"  style="display: none">
	
</form>
<form action="login.php" id = "signinfb" method="post">
		 <?php if (isset($_GET["a"])){ ?>
				<input type="hidden" name="a" id="a" value="<?php echo $_GET["a"]?>">
				<?php } else {?>
				<input type="hidden" name="a" id="a" value="li">
				<?php } ?>
	<input type="text" id = "fbname" name = "fbname" style="display: none">
	<input type="text" id = "fbemail" name = "fbemail"  style="display: none">
	
</form>
    </main>
	
     <!-- Footer -->
    <?php  include 'includes/footerAx.php' ?>
    
	<!-- Footer - End --> 


<script type="text/javascript" >
var beurl ="<?php echo  $config['INSTANCEURL'];?>";
var feurl ="<?php echo  $config['FRONTENDURL'];?>";
var instanceurl_o = beurl + "/api/v1/ui/o/getmyparcel";
var google_client_id = "<?php echo  $config['GOOGLE_CLIENTID'];?>";
var fb_app_id = "<?php echo  $config['FB_APP_ID'];?>";

window.onbeforeunload = function(e){
	//renderButton();
	  gapi.auth2.getAuthInstance().signOut();
	}; 

$( document ).ready(function() {
	//location.reload(true);
	if (window.performance) {
	  //console.info("window.performance works fine on this browser");
	}
	if (performance.navigation.type == 1) {
	  //gapi.auth2.getAuthInstance().signOut();
	//renderButton();
	} else {
	//  renderButton();
	}
		  
	// Check if there are any errors on page
	<?php if(!empty($_GET['errorMessage'])){ ?>
	var errorMessage = "<?php echo $_GET['errorMessage']; ?>";
	$('#errMsg').text(errorMessage);
	$('#errMsg').show();

	<?php
	} else {
	?>
	$('#errMsg').hide();
	<?php
	} 
	?>

});

	  var beurl ="<?php echo  $config['INSTANCEURL'];?>";
	  $("#btnLogin1").click(function(){
			var uid = $("#X_userid").val();
			var pass = $("#X_password").val();
			$.ajax({
				url: beurl+"/api/v1/ui/login",
				crossDomain: true,
				type:"POST",
				beforeSend: function(xhrObj){
					crossDomain: true;
					xhrObj.setRequestHeader("X_userid",uid);
					xhrObj.setRequestHeader("X_password",pass);
				},
				success:function(data)
				{	
					var d = JSON.parse(data);
					// Store
					sessionStorage.setItem("apikey",d.token);
					sessionStorage.setItem("userid",d.userId);
					window.location = feurl+"/collectaddress.php";
				},
				error: function (request, status, error) {
					var d = JSON.parse(request.responseText);
					if (d.statusCode == "401"){	
						$('#errMsg').text(d.message);
						$('#errMsg').show();
					} else {
						$('#errMsg').hide();
					}
					logDebugMsg('==> Login API call error : '+request.responseText);
				}
			});
	  });

	function validateCaptcha(){
		if($("#captchaAnswer").length > 0){
			$("#captchaError").html("");
			$.ajax({
				url:'/checklogincaptcha.gmp',
				data:'answer=' + $("#captchaAnswer").val(),
				dataType:'text',
				success: function(data){
					if(data == "success"){
						$("form#form1").unbind("submit").submit();
					} else {					
						d = new Date();
						$("#captchaImage").attr("src", "/simpleCaptcha.srv?"+d.getTime());
						$("#captchaError").html("<div class='alert alert-danger'>Code is wrong. Please try again.</div>");
					}
				}, 
				error:function(){
					alert("Error occured while processing request. Please try again later.");
					logDebugMsg("Processing error");
				}	
			});
				
		} else {
			$("form#form1").unbind("submit").submit();
		}
	}

function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
	    console.log('statusChangeCallback');
	    console.log(response);                   // The current login status of the person.
	    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
	      testAPI();  
	    } /*else {                                 // Not logged into your webpage or we are unable to tell.
	      document.getElementById('status').innerHTML = 'Please log ' +
	        'into this webpage.';
	    }*/
	  }


	  function checkLoginState() {               // Called when a person is finished with the Login Button.
	    FB.getLoginStatus(function(response) {   // See the onlogin handler
	      statusChangeCallback(response);
	    });
	  }


	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : fb_app_id,
	      cookie     : true,                     // Enable cookies to allow the server to access the session.
	      xfbml      : true,                     // Parse social plugins on this webpage.
	      version    : 'v13.0'           // Use this Graph API version for this call.
	    });


	    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
	      statusChangeCallback(response);        // Returns the login status.
	    });
	  };

	  
	  (function(d, s, id) {                      // Load the SDK asynchronously
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "https://connect.facebook.net/en_US/sdk.js";
	    fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));

	 
	  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
	    console.log('Welcome!  Fetching your information.... ');
	    FB.api('/me?fields=name,email', function(response) {
	      console.log('Successful login for: ' + response.name);
	    //  console.log('Successful login for: ' + response.id);
	      console.log('Successful login for: ' + response.email);
	      console.log('Successful login for: ' + response.email);
	    //  document.getElementById('status').innerHTML =
	     //   'Thanks for logging in, ' + response.name + '!';
		//	 $("#fbname").val(response.name);
          
         $("#fbemail").val(response.email);
         
         $('#signinfb').submit();
	    });
	  }


  
  
  var googleUser = {};
  var startApp = function() {
    gapi.load('auth2', function(){
      // Retrieve the singleton for the GoogleAuth library and set up the client.
      auth2 = gapi.auth2.init({
		 client_id: google_client_id,
        cookiepolicy: 'single_host_origin',
        // Request scopes in addition to 'profile' and 'email'
        //scope: 'additional_scope'
      });
      attachSignin(document.getElementById('customBtn'));
    });
  };

  function attachSignin(element) {
    logDebugMsg(element.id);
    auth2.attachClickHandler(element, {},
        function(googleUser) {
          
          var profile = googleUser.getBasicProfile();
          logDebugMsg(googleUser.getBasicProfile());
          logDebugMsg(googleUser.getAuthResponse());
          
          var id_token = googleUser.getAuthResponse().id_token;
          
          $("#token").val(id_token);
          
         //Send token ID to server 
          var email = profile.getEmail();
         
         $("#email").val(email);
         
         $('#signin').submit();
         
        }, function(error) {
          //alert(JSON.stringify(error, undefined, 2));
        });
  }
  
  startApp();


</script>

</body>
</html>
