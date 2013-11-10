<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gang-Steal :: User Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]><script type="text/javascript" src="unitpngfix.js"></script><![endif]-->


</head>
<?php 
include("dbconn.php");

if (isset($_POST)) {
	
	
	$fname  = $_POST['first_name'];
	$lname  = $_POST['last_name'];
	$gender = $_POST['gender'];
	$email  = $_POST['email_address'];
	$pass   = md5($_POST['password']);
	$phone  = $_POST['phone_number'];
	$addr1  = $_POST['address'];
	$addr2  = $_POST['address1'];
	$city   = $_POST['cityPlace'];
	$state  = $_POST['state'];
	$pin    = $_POST['zipcode'];
	$agency = $_POST['agency'];
	
	if ($_POST['usertype'] == 'user') {
		$params = array($fname, $lname, $gender, $pass, $addr1, $addr2, $city, $state, $pin, $phone, $email, date('Y-m-d'));
		$db->addUser($params);
		$msg = "User Registered Successfully";
	} else{		
		$params = array($fname, $lname, $agency, $gender, $pass, $addr1, $addr2, $city, $state, $pin, $phone, $email, date('Y-m-d'));
		$db->addDealer($params);
		$msg = "Dealer Registered Successfully";
	}
	
	
	
}

?>
<style>
#agencydiv {display:none;}
</style>
<body>

<div class="wrap">
 <?php include("header.php"); ?>
  <!--  main content -->
	<div style="clear:both;">
        
      <?php echo $msg; ?>
        
    </div>
  <!--End of main_content-->
</div>
<!--End of wrap-->

<?php include("footer.php"); ?>

</body>

</html>
