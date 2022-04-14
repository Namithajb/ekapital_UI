<?php include('config.php'); ?>

<?php
// ---- THIS PAGE IS INCLUDED IN LOGIN.PHP ----

function setSessionVariables($loginResponse){
	// user login successful 
	$_SESSION["logged_in"] = "Y";
	$_SESSION["name"] = $loginResponse['name'];
	$_SESSION["email"] = $loginResponse['userId'];
	$_SESSION["token"] = $loginResponse['token'];
	$_SESSION["usertype"] = $loginResponse['userType'];
}

function unsetSessionVariables(){
	// user logout actions 
	
	$_SESSION["logged_in"] = "N";
	unset ($_SESSION['name']);
	unset ($_SESSION['email']);
	unset ($_SESSION['token']);
	
}


function unsetCookies(){
	// remove user session id
	// Order object in backend is stored in cache
	// with this session id,set in sessionhandler.php
	// this is not removed even if user logs out.
	// should be removed only after the user has completed the order
	if (isset($_COOKIE['GMPSESSID'])) {
		unset($_COOKIE['GMPSESSID']);
		setcookie('GMPSESSID', '', time() - 3600, '/'); // empty value and old timestamp
	}
}

function createOrderFlow ($action, $config){
	if ( $_SESSION["logged_in"] == "Y") {
		// if contol is coming from Create Order flow (i.e. Products.php) - i.e. order creation flow, then
		// forward to next page. 
		echo "<script>location.href='collectaddress.php';</script>";
	}  else {
		// user is not logged in
		if ((!empty($_POST["X_userid"])) AND (!empty($_POST["X_password"]))) {
			// User has entered login and pass and has clicked "login" button
			//session_start();
			//callLoginAPI($action);
			callLoginAPI($action, $config, $_POST["X_userid"], $_POST["X_password"] );
			// Login Successful 
			// Identify and forward to next page
			echo "<script>location.href='collectaddress.php';</script>";
		} else 
			if((!empty($_POST["token"])) AND (!empty($_POST["email"]))){
			callGoogleLoginAPI($action, $config, $_POST["token"], $_POST["email"] );
			// Login Successful 
			// Identify and forward to next page
			echo "<script>location.href='collectaddress.php';</script>";
		}
			else {
			// User hasnt entered user name and pass yet, so keep in this login page
			// so show login page
			$_GET['a'] = 'co';
			// continues to login page
		}
	}
}

	
// when login is clicked directly from any other page	
function login($action, $config){
	
	if ( $_SESSION["logged_in"] == "Y") {
		// User is logged in and is trying to access login page directly from browser URL
		// redirect to home page
		echo "<script>location.href='/';</script>";
	} else {
		logmsg("==>> in else  ....");
		// get loginid and pass from request
		if(isset($_POST["token"])){
			callGoogleLoginAPI($action, $config,$_POST["token"],$_POST["email"]);
			redirectPage();
		}if(isset($_POST["fbemail"])){
			callFbLoginAPI($action, $config,$_POST["fbemail"],$_POST["fbname"]);
			redirectPage();
		}
		if (isset($_POST["X_userid"])) {
			$X_userid=$_POST["X_userid"];
		} else {
			// username or pass is not entered, show login page
			$X_userid = "";
			return;
		}		
		if (isset($_POST["X_password"])) {
			$X_password=$_POST["X_password"];
		} else {
			// username or pass is not entered, show login page
			$X_password = "";
			return;
		}
		
		callLoginAPI($action, $config, $X_userid, $X_password );
		redirectPage();
	}
}

function redirectPage(){
	// User is logged in
		// redirect to home page
			if ( $_SESSION["usertype"] == "B") {
				echo "<script>location.href='/u_orderlist.php';</script>";
			}
	     else{
		 echo "<script>location.href='/';</script>";
			}
}

// when logout is clicked from any page
function logout($action, $config){

	if ( $_SESSION["logged_in"] == "Y") {
			
		// get loginid and pass from request
		if (isset($_SESSION["email"])) {
			$X_userid = $_SESSION["email"];
		} else {
			// if someone is trying to hack. 
			echo "<script>location.href='login.php?a=li&errorMessage=Unauthorized action. Login to proceed';</script>;";
		};
		
		if (isset($_SESSION["token"])) {
			$X_token=$_SESSION["token"];
		} else {
			// if someone is trying to hack. 
			echo "<script>location.href='login.php?a=li&errorMessage=Unauthorized action.  Login to proceed';</script>;";
		};
		
		callLogoutAPI($action,$config, $X_userid, $X_token );

		session_destroy();

	} else{
		// user not logged in, Unset session vars anyways
		unsetSessionVariables();
	}
	
	// User is logged out (one way or another - even if API call fails)
	// redirect to login page
	echo "<script>location.href='/login.php?a=li';</script>";
	
}

function callLogoutAPI($action, $config, $X_userid, $X_token) {

	// =============================================	
	// Make a API call for Logout 
	$headers = array
	(
		'X_userid:'.$X_userid,
		'X-AuthToken:'.$X_token,
		'Content-Type: application/json'
	);

	logmsg("=> Before making logout API call ... Userid : ".$X_userid);
	
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $config['INSTANCEURL'].'/api/v1/ui/getmyparcel/logout' );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, $config['SSL']  );
	
	$result = curl_exec($ch );
	
	curl_close( $ch );
	logmsg("=> Result after API Call = " . $result);
	
	// =============================================
	$logoutResponse = json_decode($result, true);
	if (empty($logoutResponse['status']) == "success"){
		// logout successful from backend 
	} else {
		// logout failed
		logmsg("=> Logout was unsuccessful: ". $logoutResponse['message'] );
		echo "<script>console.log('==>> Logout was unsuccessful:' + '". $logoutResponse['message']."')</script>;";
	}
	unsetSessionVariables();
}

function callLoginAPI($action, $config, $X_userid, $X_password) {

	// =============================================	
	// Make a API call for login 
	$headers = array
	(
		'X-username:'.$X_userid,
		'X-password:'.$X_password,
		'Content-Type: application/json'
	);

	logmsg("=> Before making logout API call ... Userid : ".$X_userid);
	
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $config['INSTANCEURL'].'/api/v1/ui/o/getmyparcel/login' );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, $config['SSL'] );
	
	logmsg("==>> Just before calling APi : ");
	
	$result = curl_exec($ch );
	
	curl_close( $ch );
	
	
	logmsg("==>> Result after calling Login API : " . $result);
	
	// =============================================
	// if response is successful 
	// -- set parameters (as in index.php) in session (5 vars = loggedin, firstname, lastname, email, token)
	// -- redirect to CollectAddress.php
	// else 
	// -- redirect back to login.php with errormessage (from API) as query string - login.php?errorMessage=Username or password is incorrect
	
	$loginResponse = json_decode($result, true);
	if (!empty($loginResponse['token'])){
		setSessionVariables($loginResponse);
	}else if($loginResponse['status']=="failed")
	{
	 echo "<script>location.href='login.php?a=".$action."&errorMessage=User has attempted a Forgot password before. Hence user is disabled, either re-activate the user from email link (or) reset your password.';</script>;";
	}
	else {
		// login failed, load the page back
		echo "<script>location.href='login.php?a=".$action."&errorMessage=Unable to Login. Username or Password was Incorrect.';</script>;";
	}
}

//google login function
function callGoogleLoginAPI($action, $config, $X_token, $X_email) {

	// =============================================	
	// Make a API call for login 
	$headers = array
	(
		'X-GoogleToken:'.$X_token,
		'X-email:'.$X_email,
		'Content-Type: application/json'
	);

	logmsg("=> Before making logout API call ... Userid : ".$X_token);
	
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $config['INSTANCEURL'].'/api/v1/ui/o/getmyparcel/googlelogin' );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, $config['SSL'] );
	
	logmsg("==>> Just before calling APi : ");
	
	$result = curl_exec($ch );
	
	curl_close( $ch );
	
	
	logmsg("==>> Result after calling Login API : " . $result);
	
	// =============================================
	// if response is successful 
	// -- set parameters (as in index.php) in session (5 vars = loggedin, firstname, lastname, email, token)
	// -- redirect to CollectAddress.php
	// else 
	// -- redirect back to login.php with errormessage (from API) as query string - login.php?errorMessage=Username or password is incorrect
	
	$loginResponse = json_decode($result, true);
	if (!empty($loginResponse['token'])){
		setSessionVariables($loginResponse);
	}
	else {
		// login failed, load the page back
		echo "<script>location.href='login.php?a=".$action."&errorMessage=Unable to Login. Username or Password was Incorrect.';</script>;";
	}
}

//google login function
function callFbLoginAPI($action, $config, $X_fbemail, $X_fbname) {

	// =============================================	
	// Make a API call for login 
	$headers = array
	(
		'X-FBEmail:'.$X_fbemail,
		'X-FBName:'.$X_fbname,
		'Content-Type: application/json'
	);

	logmsg("=> Before making logout API call ... Userid : ".$X_token);
	
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $config['INSTANCEURL'].'/api/v1/ui/o/getmyparcel/fblogin' );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, $config['SSL'] );
	
	logmsg("==>> Just before calling APi : ");
	
	$result = curl_exec($ch );
	
	curl_close( $ch );
	
	
	logmsg("==>> Result after calling Login API : " . $result);
	
	// =============================================
	// if response is successful 
	// -- set parameters (as in index.php) in session (5 vars = loggedin, firstname, lastname, email, token)
	// -- redirect to CollectAddress.php
	// else 
	// -- redirect back to login.php with errormessage (from API) as query string - login.php?errorMessage=Username or password is incorrect
	
	$loginResponse = json_decode($result, true);
	if (!empty($loginResponse['token'])){
		setSessionVariables($loginResponse);
	}
	else {
		// login failed, load the page back
		echo "<script>location.href='login.php?a=".$action."&errorMessage=Unable to Login. Username or Password was Incorrect.';</script>;";
	}
}
// ================ Main Body  =================
if (isset($_POST["a"])) {

	// Other options 
	// -- co => create order flow
	// -- lo => logout (when logout is clicked)
	// -- li => login  (when login is accessed from any other page)  
	$action = $_POST["a"] ; 
	logmsg("==>> Action : " .$action);
} else if (isset($_GET["a"])){
	//when logout s called 
	$action = $_GET["a"] ;
	logmsg("==>> Action : " .$action);
}else{
	// default - when directly login.php is entered or clicked
	$action = "li";
	logmsg("==>> Action : " .$action);
}


if ($action == "co"){
	// when coming as part of Ceate order flow (from products.php)
	createOrderFlow($action, $config);
} else if ($action == "lo") {
	// when logout is clicked from any page
	logout($action, $config);
}else if ($action == "li") {
	// when login is clicked directly from any other page
	login($action, $config);
} else {
	// same as li scenario above
	login($action, $config);
}

?>

