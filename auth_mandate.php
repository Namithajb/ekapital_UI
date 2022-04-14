<?php 
	// ----------------------------
	// This page is to be used on pages which can only be accessed after logging in.
	// if the user is not logged in, and these pages are accessed directly via browser
	// then redirect to login page for users to login
	// ----------------------------
	if ( $_SESSION["logged_in"] == "Y") {
		// Yes, user is logged in, continue to page
	} else {
		// User is not logged in. Get back to login page
		echo "<script>location.href='login.php?a=li';</script>";
	}

?>