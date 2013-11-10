<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]><script type="text/javascript" src="unitpngfix.js"></script><![endif]-->
<!--<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>-->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>

 <div class="header">
    <div class="logo"><a href="#">Gang-Steal</a></div>
    <div id="menu">
      <ul>
        <li class="selected"><a href="index.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
  
  <!--End of header-->
  <!-- search box -->
  <div>
	<form name="searchfrm" action="searchresult.php" method="post">
		<div><input class="input" type="text" name="srchitem" onclick="this.value=''" value="search item"></div>
		<div><input class="input" type="text" name="srchlocation" onclick="this.value=''" value="location"></div>
		<div><input class="subscribe" name="search" id="Search" type="submit" value="Search"></div>
	</form>	
   <!-- search box end -->	