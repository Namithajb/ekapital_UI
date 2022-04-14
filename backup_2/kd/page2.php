<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="datepickr.css" />
<script type="text/javascript" src="datepickr.min.js"></script>
<script type="text/javascript" src="jquery_1.3.2_jquery.min.js"></script>
<script type="text/javascript" src="jquery.jeditable.mini.js"></script>
<title>Page 2</title>
</head>

<body>
<?php
//PREPARE CUSTOMER LIST
$con = mysqli_connect('dc2-mysql-05.kattare.com','ekapital','fkm-3xj$V','getmyparceltest');
$customer_id = $_REQUEST['customer_id'];
$from_date = $_REQUEST['from_date'];
$to_date = $_REQUEST['to_date'];

$sql1 = "SELECT * FROM `customer` WHERE `customer_id` = '$customer_id'";

//TOTAL AMOUNT CALCULATION FOR INVOICE TABLE UPDATE
$sql_amount = "
SELECT SUM(vat + amount) as 'total_amount' 
FROM `orders` 
WHERE `customer_id` = '$customer_id' and `order_date` >= '$from_date' and `order_date` <= '$to_date'";
$result = mysqli_query($con,$sql_amount) or die (mysqli_error($con));
$row = mysqli_fetch_assoc($result);
$total_amount = round($row['total_amount'],2);

//ADD to INVOICE TABLE
$invoice_date = date('Y-m-d');
$sql3 = "INSERT INTO `invoices` (`invoice_date`,`total_amount`,`customer_id`) VALUES ('$invoice_date','$total_amount','$customer_id')";
$result = mysqli_query($con,$sql3) or die (mysqli_error($con));

//FIND OUT THE INVOICE NUMBER
$sql4 = "SELECT `invoice_number` FROM `invoices` 
WHERE `customer_id` = '$customer_id' and `invoice_date` = '$invoice_date'";
$result = mysqli_query($con,$sql4) or die (mysqli_error($con));
$row = mysqli_fetch_assoc($result);
$invoice_number = $row['invoice_number'];
$current_url =  $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']  ;
?>
<table width="95%" border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td width="45%"><img src="sample_logo.jpg" width="208" height="119" alt="company_logo" /></td>
    <td colspan="2">&nbsp;</td>
    <td width="21%">&nbsp;</td>
  </tr>
  <tr>
    <td>
    <!-- CUSTOMER DETAILS -->
    <?php
	$result = mysqli_query($con,$sql1) or die (mysqli_error($con));;
	$row = mysqli_fetch_assoc($result);
	
	echo $row['name'].'<br>'.$row['addr_line1'].'<br>'.$row['addr_line2'];
	?>
    
    &nbsp;</td>
    <td colspan="2">
    <table border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td>Invoice No. : <br /></td>
    <td> <?php echo $invoice_number?></td>
  </tr>
  <tr>
    <td>Invoice Date : </td>
    <td> <div class="edit" id="i<?php echo $invoice_number?>"><?php echo $invoice_date?></div></td>
  </tr>
  <tr>
    <td>      VAT No. : </td>
    <td> XXX</td>
  </tr>
</table></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Invoice Terms</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>From  : <?php echo $from_date?><br />
      To  : <?php echo $to_date?><br />
      Total number of days : <?php 
	  $start_date = strtotime($from_date);
	  $end_date = strtotime($to_date);
      $number_of_days = ($end_date - $start_date) / (60*60*24) ;
      echo $number_of_days+1;
	  ?> Days</td>
    <td colspan="2">Due date : <?php echo date('Y-m-d', strtotime($invoice_date. ' + 30 days'));?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">Invoice Detail<br />
      <table width="80%" border="1" cellpadding="4" cellspacing="0">
        <tr>
          <td bgcolor="#CCCCCC"><strong>Date</strong></td>
          <td bgcolor="#CCCCCC"><strong>Order ID</strong></td>
          <td bgcolor="#CCCCCC"><strong>VAT (&pound;)</strong></td>
          <td bgcolor="#CCCCCC"><strong>Amount (&pound;)</strong></td>
          <td bgcolor="#CCCCCC"><strong>Total (&pound;)</strong></td>
        </tr>
        
        <?php
		//FIND OUT THE ORDER WITH CUSTOMER ID and FROM_DATE & TO_DATE information
		$sql2 = "SELECT * FROM `orders` WHERE `customer_id` = '$customer_id' and `order_date` >= '$from_date' and `order_date` <= '$to_date'";
		$result = mysqli_query($con,$sql2) or die (mysqli_error($con));;
		$total_vat = 0;
		$total_amount = 0;
		while($row = mysqli_fetch_assoc($result))
		{
		?>
        <tr>
          <td><?php echo $row['order_date']?></td>
          <td><?php echo $row['order_id']?></td>
          <td><?php $total_vat += $row['vat']; echo $row['vat']?></td>
          <td><?php $total_amount += $row['amount']; echo $row['amount']?></td>
          <td><?php echo $row['vat']+$row['amount']?></td>
        </tr>
        <?php 
		}
		?>
        <tr>
          <td colspan="2" align="center"><strong>Total</strong></td>
          <td><strong><?php echo $total_vat?></strong></td>
          <td><strong><?php echo $total_amount?></strong></td>
          <td><strong><?php echo $total_vat+$total_amount?></strong></td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bank Details    <br />
    Bank Name    <br />
    Bank Sort Code    <br />
    Bank Account Number</td>
    <td colspan="2">&nbsp;</td>
    <td><table width="100%" border="1" cellpadding="2" cellspacing="0">
      <tr>
        <td bgcolor="#CCCCCC"><strong>Sub Total : &pound; <?php echo $total_amount?></strong></td>
        </tr>
      <tr>
        <td bgcolor="#CCCCCC"><strong>VAT Total :&pound;<?php echo $total_vat?></strong></td>
        </tr>
      <tr>
        <td bgcolor="#CCCCCC"><strong>Total Amount Payable : &pound; <?php echo $total_vat+$total_amount?></strong></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="4" align="center">Company Address Line #1<br />
      Company Address #2<br />
      Registration No : #</td>
  </tr>
</table>
<script type="text/javascript">
 $(document).ready(function() {
     $('.edit').editable('http://localhost/KD/save.php', {
         id   : 'invoice_number',
         name : 'date_value'
     });
 });
</script>
</body>
</html>