<?php

#########################################################################
#
# INSTANCEURL = Backend tomcat URL, for e.g. localhost:8080
#
# FRONTENDURL = Front end URL for the Apache / or / Nginx e.g. localhost or getmyparcel
#
# ADDRESSKEY = Key for ?
# ADDRESSLOOKUPAPIKEY = Key for getAddress.io Service address lookup key
#
# RECAPTCHAV3_SITEKEY = Google Recaptcha v3 lookup key                                                       
# RECAPTCHAV3_SECRETKEY = Google Recaptcha V3 lookup Secret key
#
# SSL = true | false - will be used in Php curl calls
#
# LOGGING = true | false - will determine if logging is enabled or not
#
# ########################################################################

global $config;
$config=array(

    'INSTANCEURL'=>'http://localhost:8080',
    'ADDRESSKEY'=> 'lkNQde8BO02REpRnyOC5-A28372',
    'FRONTENDURL'=> 'http://localhost',
    'INSTANCEAPITOKEN'=> '12345678901234567890',
	'ADDRESSLOOKUPAPIKEY'=>'KT1mEUmOq0a9LKWqUwqhQQ14704',
	'RECAPTCHAV3_SITEKEY'=>'6LcJoj4aAAAAAChELmxHSvJ-C0fPtNtxmOoIKa0g',
	'RECAPTCHAV3_SECRETKEY'=>'6LcJoj4aAAAAADl7vAJIlxetC5cfL_tn4YgiybO_',
    'STRIPE_SECRET_KEY'=> 'sk_test_51ILmyEGfVwtozgozVoH8i8Y7owFqNVwI87OrWTgVpVS150JOBt5IoeX568m5VZayYUOe6JbDYegm10Lyu16TMhzD00DiAltVqG',
	'STRIPE_PUBLISHABLE_KEY'=> 'pk_test_51ILmyEGfVwtozgozybZHEyLv4OBDBCxf6wesspGvbT09xid0WHVdu9cYKwixiO2C5Rfe02j0cjcpUn93QcU2gYLu005iccxvIf',
	'LOGGING'=>'true',
	'SSL'=>'false',
	'CDNURL'=>'http://localhost/resources',
	'GOOGLE_CLIENTID'=>'123925531797-rad7f5mp8r99si01hhmni6ul8no8t1ta.apps.googleusercontent.com',
	'FB_APP_ID'=>'1269200853588720'
);

?>
