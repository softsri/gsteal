<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gang-Steal :: Search Result</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
</head>
<body>
<?php 
include("dbconn.php");
?>

<?php
if (isset($_POST['search'])) {

	$item = $_POST['srchitem'];
	$results = $db->getProducts($item);
		
}

?>

<div class="wrap">
 <?php include("header.php"); ?>
	<!--  main content -->
    <div style="height:500px;">
			
       <div class="clear"></div>
	   <?php 
		  foreach ($results as $row) {
			echo '<div class="prod" style="float:left;">';
			echo '<div><a href="detail.php?pid='.$row['id'].'">'.$row['productName'].'</a></div>';
			echo '<div><a href="detail.php?pid='.$row['id'].'"><img src="'.$row['thumpImg'].'"></a></div>';
			echo '<div>';
		  }
	   ?>
	   
    </div>
  <!--End of main_content-->
</div>
<!--End of wrap-->

<?php include("footer.php"); ?>

</body>
</html>
