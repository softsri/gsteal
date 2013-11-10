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
?>
<style>
#agencydiv {display:none;}
</style>
<body>
<div class="wrap">
 <?php include("header.php"); ?>
  <!--  main content -->
	<div style="clear:both;">
        
        <h4>Registration</h4>
		
        <div id="contact_form">
        
            <form method="post" id="signupForm" action="success.php" class="jqtransform">
			<table width="100%" cellpadding="4" cellspacing="3">
				
				<tr>
					<td width="50%">First Name : </td>
					<td width="50%"><input type="text" id="first_name" name="first_name" class="required input_field" /></td>
				</tr>
				<tr>
					<td width="50%">Last Name : </td>
					<td width="50%"><input type="text" id="last_name" name="last_name" class="required input_field" /></td>
				</tr>
				<tr>
					<td width="50%"> Gender : </td>
					<td width="50%">
						<input type="radio" id="gender" name="gender" value="male" checked="checked" /> <label>Male</label> &nbsp; 
						<input type="radio" id="gender" name="gender" value="female" /> <label>Female</label>
					</td>
				</tr>
				<tr>
					<td width="50%"> Email : </td>
					<td width="50%"><input type="text" id="email_address" name="email_address" class="required input_field" /></td>
				</tr>
				<tr>
					<td width="50%"> Password : </td>
					<td width="50%"><input type="password" id="password_text" name="password" class="required input_field" /></td>
				</tr>
				<tr>
					<td width="50%"> Re-Type Password : </td>
					<td width="50%"><input type="password" id="re_password_text" name="re_password" class="required input_field" /></td>
				</tr>				
				<tr>
					<td width="50%"> Phone : </td>
					<td width="50%"><input type="text" id="phone_number" name="phone_number" class="required input_field" /></td>
				</tr>
				<tr>
					<td width="50%"> Address : </td>
					<td width="50%"><input type="text" id="address" name="address" class="required input_field" size="30" /></td>
				</tr>
				<tr>
					<td width="50%"> Address1 : </td>
					<td width="50%"><input type="text" id="address1" name="address1" class="required input_field" size="30" /></td>
				</tr>
				<tr>
					<td width="50%"> State : </td>
					<td width="50%">	
						<input type="text" id="state" name="state" class="required input_field" size="30" />					
						<!--<select name="state">						
						<?php foreach($states_list as $key=>$value) { ?>
							<option value="<?php echo $value->city_state;?>"><?php echo $value->city_state;?></option>
						<?php } ?>
						</select>-->
					</td>
				</tr>		
				<tr>
					<td width="50%"> City : </td>
					<td width="50%" id="cityPlace">	
						<input type="text" id="cityPlace" name="cityPlace" class="required input_field" size="30" />										
						<!--<select name="city" id="city">
							<option value="0" selected="selected">Select</option>
							<?php foreach($cities_list as $key=>$value) { ?>
								<option value="<?php echo $value;?>"><?php echo $value;?></option>
							<?php } ?>							
						</select>	-->				
					</td>
				</tr>
				<tr>
					<td width="50%"> Zipcode : </td>
					<td width="50%">						
					<input type="text" id="zipcode" name="zipcode" class="required input_field" size="30" />
					</td>
				</tr>	
				<tr>
					<td width="50%"> User Type : </td>
					<td width="50%">
						<input type="radio" id="usertype" name="usertype" value="user" checked="checked" onclick="javascript:showdiv(0)" /> <label>User</label> &nbsp; 
						<input type="radio" id="usertype" name="usertype" value="dealer" onclick="javascript:showdiv(1)" /> <label>Dealer</label>
					</td>
				</tr>
				<tr id="agencydiv">
					<td width="50%"> Agency Name : </td>
					<td width="50%">						
					<input type="text" id="agency" name="agency" class="required input_field" size="30" />
					</td>
				</tr>
				
				<tr><td width="50%">   </td><td width="50%"> </td></tr>				
				<tr>
					<td width="100%" colspan="2" align="center">
						<input style="font-weight: bold;" type="submit" name="doSignup" id="doSignup" value="Submit " /> &nbsp; &nbsp; 	
						<input style="font-weight: bold;" type="button" name="doCancel" id="doCancel" value="Cancel " />  	
					</td>
				</tr>
				
			</table>
            
            </form>
            
                
    </div>
  <!--End of main_content-->
</div>
<!--End of wrap-->

<?php include("footer.php"); ?>

</body>

<script>
function showdiv(val) {
	if (val ==1) {
		$("#agencydiv").show();
	}else {
		$("#agencydiv").hide();
	} 
}
</script>
</html>
