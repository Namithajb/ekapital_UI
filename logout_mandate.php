<?php 
	// ----------------------------
	// This page is to be used when user is saying forget password but he is login
	// then redirect to login page .
	// ----------------------------
	if ( $_SESSION["logged_in"] == "Y") {
		echo "<script>location.href='login.php?a=li';</script>";
	} else {
		// User is not logged in. Get back to  forget password
	}

?>