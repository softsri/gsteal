<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gang-Steal :: Product Detail</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]><script type="text/javascript" src="unitpngfix.js"></script><![endif]-->


</head>
<?php 
include("dbconn.php");

if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];
} else {
	header('location: index.php');
}
$details = $db->getProductDetails($pid);
?>

<body>
<div class="wrap">
 <?php include("header.php"); ?>
	<!--  main content -->
    <div style="height:500px; padding-top:20px;">
			
       <div class="clear"></div>
	   
	    <div id="tabs">
			<ul>
				<li><a href="#tabs-1">Product Detail</a></li>
				<li><a href="#tabs-2">Price</a></li>
				<li><a href="#tabs-3">Info</a></li>
				<li><a href="#tabs-4">Review</a></li>
				<li><a href="#tabs-5">Gallery</a></li>
			</ul>
			<div id="tabs-1">
				<div class="prod">
					<div><?php echo $details[0]['productName']; ?> </div>
					<div style="float:left; margin-right:20px;"><img src="<?php echo $details[0]['thumpImg']; ?>" width="75px" height="75px"> </div>
					<div>
						<p>Product Description</p>
						<span>
							<?php echo $details[0]['description']; ?>
						</span>						
					</div>
				</div>
			</div>
			<div id="tabs-2">
				<p><?php echo 'Rs. '.$details[0]['price']; ?></p>
			</div>
			<div id="tabs-3">
				<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
				<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
			</div>
			<div id="tabs-4">
				<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
			</div>
			<div id="tabs-5">
				<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
				<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
			</div>
		</div>

		   
	    <div class="clear"></div>
    </div>
  <!--End of main_content-->
</div>
<!--End of wrap-->

<?php include("footer.php"); ?>

</body>

<script type="text/javascript">
function hideall() {
	$("#tab").hide();
	$("#tab1").hide();
	$("#tab2").hide();
	$("#tab3").hide();
	$("#tab4").hide();			
}
$(document).ready(function(){

	$( "#tabs" ).tabs();

	$("#icon1").mouseover(function () {
		hideall();
		$("#tab1").css("display","block");     
	});

	$("#icon2").mouseover(function () {
		hideall();
		$("#tab2").css("display","block");     
	});

	$("#icon3").mouseover(function () {
		hideall();
		$("#tab3").css("display","block");     
	});  

	hideall();
	$("#tab").show();       

});
</script>
</html>
