<?php

// Starting session, if not already exists
session_start();

// Verifying whether a session id cookie is set or not
if(isset($_COOKIE["GMPSESSID"])){
    // do nothing, for now. 
	// this will be used in all ajax calls, in $.ajaxsetup
	logmsg("==> Current Session id is = " . $_COOKIE["GMPSESSID"]);
} else{
    // first time user on browser
	// set the cookie for max of 3 hours, after which the order 
	// info is lost for the user.
	setcookie("GMPSESSID", session_id(), time()+3*60*60);
}

// Initialize Session variables
if(!isset($_SESSION["logged_in"])){
	$_SESSION["logged_in"] = "N";
}
?>

