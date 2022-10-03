<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da-dk" lang="da-dk" >
<head>
	<title> Home | SyshoreBeachFront Hotel</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Slider, Slider Image, Ui Slider" />	
	<!-- Start Slider HEAD section -->
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />	
	<!-- End Slider HEAD section -->
		<link href="css/iconic.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
	<!-- header bar --> 
	<div class="container">			          
		<div class="codrops-top">              
			<a href="https://login.yahoo.com/config/login_verify2?&.src=ym&.intl=us" target="_blank">                  
			<strong>&laquo; You may also message in our yahoo: </strong> SyshoreBeachFrontHotel@yahoo.com    
			</a> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		
		<?php
		// Prints the day, date, month, year, time, AM or PM
		echo date("l jS \of F Y ");	
		?>
			<span class="right"> 			
			<a href="https://www.facebook.com/syshore.beachfronthotel?fref=ts" target="_blank">                       
			<strong>Like Us on Facebook &nbsp;</strong>                 
			</a>
			</span>          
	</div>
	<!--/ end header bar -->	
	
	<!-- start of main Div-->
	<div id="mainDiv">
			 <a name="img/logo/banner.jpg"> <img src="img/logo/banner.jpg" id="banner" > </a> <img src="img/logo/new.jpg" id="logo" align=""> <br>
		
		<!--beg. of navigation bar -->	
		<nav>
		<ul class="bar">
			<li><a href="index.php" title="Return to the SyshoreBeachFront Hotel home page"><span class="iconic home"></span> Home</a>
				<ul>
					<li><a href="admin.php" title="Standard Rooms"><span class="iconic phone"></span>Admin</a></li>
				</ul>
			</li>
			<li><a href="About.php" title="Want to know more about us?"><span class="iconic user"></span> About Us</a>
				<ul>
					<li><a href="Location.php" title="How to get here!"><span class="iconic map-pin"></span> Getting Here</a>
					<li><a href="Services.php" title=""><span class="iconic magnifying-glass"></span> Our Services</a>
				</ul>
			</li>
			<li><a href="Accomodations.php" title="Accomadations"><span class="iconic book"></span> Accomodations</a>
				<ul>
					<li><a href="StandardRoom.php" title="Standard Rooms"><span class="iconic tag"></span>Standard Rooms</a></li>
					<li><a href="SuperiorRoom.php" title="Superior Rooms"><span class="iconic tag"></span>Superior Rooms</a></li>
					<li><a href="ExecutivePatioRoom.php" title="Executive Patio Rooms"><span class="iconic tag"></span>Executive Patio Rooms</a></li>
					<li><a href="ElitePatioRoom.php" title="Elite Patio Rooms"><span class="iconic tag"></span>Elite Patio Rooms</a></li>
					<li><a href="StudioSuiteRoom.php" title="Studio Suite Rooms"><span class="iconic tag"></span>Studio Suite Rooms</a></li>
				</ul> 
			</li>
					<li><a href="Amenities.php" title="Amenities & Activities"><span class="iconic star"></span> Amenities & Activities</a></li>
					<li><a href="Gallery.php" title="Gallery"><span class="iconic sun"></span> Gallery</a></li>
					<li><a href="Contact.php" title="Contact Us"><span class="iconic mail"></span> Contact Us</a></li>
					<li>	
						<a href="Comments.php" title="Comment Us"><span class="iconic lightbulb"></span> Comment Us</a></li>
					</li> 
					</ul>
					<div class="clearfix"></div>
		</nav>
		<!--end. of navigation bar -->			
			
<?php
mysql_connect("localhost","root","");
mysql_select_db("syshoredb");
    if(isset($_POST['send'])){
        $usser=$_POST['usser'];
        $pass=$_POST['pass'];
        $send=$_POST['send'];

$dbLink = mysql_connect("localhost","root","");
   
if($send)
{
if($usser&&$pass)
{
session_start();

$sql= "select * from security where usser = '$usser' and usser = '$pass';";

$qry = mysql_query($sql);

$num_rows = mysql_num_rows($qry);

if ($num_rows <= 0)
 {

echo '<center><h1><br/>'."INVALID ACCOUNT!".'</center></h1><br/><br/>'. "";

exit;
}
 else
{
header("location:adminhome.php");
// It is the page where you want to redirect user after login.
}
}
}
?>
<?php
}
?>

		<div id="mainInner">     				
						<div id="login">
						<h1><span class="iconic key"></span>Admin Login</h1>
						<form action="admin.php" method="post">
							<input type="text" name="usser" required placeholder="             Enter Username" autocomplete="off">
							<input type="password" name="pass" required placeholder="             Enter Password" autocomplete="off">
							<input type="submit" name="send" value="Log-in">
						</form>
						</div>
		 </div>    
		   <br/><br/><br/>
</body>
</html>