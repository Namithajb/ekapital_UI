<?php
$con = mysqli_connect('dc2-mysql-05.kattare.com','ekapital','fkm-3xj$V','getmyparceltest');
$new_invoice_date = $_REQUEST['date_value'];
$invoice_number = substr($_REQUEST['invoice_number'],1);
$sql = "UPDATE `invoices` SET `invoice_date` = '$new_invoice_date' WHERE `invoice_number`= '$invoice_number'";
mysqli_query($con,$sql) or die (mysqli_error($con));
echo $new_invoice_date;


?>