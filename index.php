<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gang-Steal :: Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
</head>
<body>
<div class="wrap">
	<?php 
		include("dbconn.php"); 
		include("header.php"); 
	?>
	<?php
		$latestProds = $db->getLatestProducts();
	?>
	<!--  main content -->
    
		<div class="clear"></div>
			<?php 
				foreach ($latestProds as $row) {
				
					echo '<div id="prod-desc" class="prod">';
					echo '<div><a href="detail.php?pid='.$row['id'].'">'.$row['productName'].'</a></div>';
					echo '<div><a href="detail.php?pid='.$row['id'].'"><img src="'.$row['thumpImg'].'" width="75px" height="75px"></a></div>';
					echo '</div>';
				}
			?>	
		   
		</div>
  <!--End of main_content-->
</div>
<!--End of wrap-->

<?php include("footer.php"); ?>

</body>
</html>
