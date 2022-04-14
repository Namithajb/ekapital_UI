<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="datepickr.css" />
<script type="text/javascript" src="datepickr.min.js"></script>
<title>Page 1</title>
</head>

<body>
<?php
//PREPARE CUSTOMER LIST
$con = mysqli_connect('dc2-mysql-05.kattare.com','ekapital','fkm-3xj$V','getmyparceltest');
$sql = "SELECT * FROM `customer`";
$result = mysqli_query($con,$sql);
?>
<h1 align="center">Generate Invoice </h1>
<form id="form1" name="form1" method="post" action="page2.php">
  <table border="1" align="center">
    <tr>
      <td>Customer Name</td>
      <td><select name="customer_id" id="customer_id">
        <?php 
		while($row = mysqli_fetch_assoc($result))
		{
			$customer_id = $row['customer_id'];
			$customer_name = $row['name'];
			echo "<option value=\"$customer_id\">$customer_name</option>";
		}
		?>
        
      </select></td>
    </tr>
    <tr>
      <td>From Date</td>
      <td><input type="text" name="from_date" id="from_date" readonly required placeholder="Click for Calendar"/></td>
    </tr>
    <tr>
      <td>To Date</td>
      <td><input type="text" name="to_date" id="to_date" readonly required placeholder="Click for Calendar"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="generate_invoice" id="generate_invoice" value="Generate Invoice" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>

<script type="text/javascript">
			new datepickr('from_date', {
				'dateFormat': 'Y-m-d'
			});
			new datepickr('to_date', {
				'dateFormat': 'Y-m-d'
			});
</script>

</body>
</html>