<?php

// --- Logging ---- 
// Use the logmsg function throught the php pages to collect logs 
// so no need to remove these messages from the code before deploying
// These log message will be displayed if the debug param is set at the page
// Check -- "footerAx.php" - where this string is printed
// ----------------
//global $finalLog;
$finalLog ="";
function logmsg($logstr){
	$GLOBALS["finalLog"] = $GLOBALS["finalLog"].'<br>'.$logstr;
}

?>