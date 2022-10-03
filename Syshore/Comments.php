<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="da-dk" lang="da-dk" >
<head>
	<title> Comment Us | SyshoreBeachFront Hotel</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
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
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
					<li><a href="admin.php" title="Standard Rooms"><span class="iconic key"></span>Admin</a></li>
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

		<div id="mainInner"> 
			<div id="Inside-Contactus">
				<div id="contactus">                        
					<form action="send.php" method="post">
					<center> <h2 id="h2_contact"><?php if(isset($_GET['sent'])) { echo "Your comment has been posted.";} ?></h2> </center> <br>
						<h1>Comment Us</h1>
						<ul>
							<li>
								<label for="name">Your Name(required)<span id="error"><?php if(isset($_GET['error_name'])) { echo "**"; } ?><span></label>
								<input type="text" required placeholder="What's your name?" name="name" value="">
							</li>

							<li>
								<label>Your Comment<span id="error"><?php if(isset($_GET['error_message'])) { echo "**"; } ?><span></label>
								<textarea name="comment"></textarea>
							</li>
							<li>
								<input type="submit" name="submit" value="Send"> 
							
							</li>
						</ul>
					</form>
			</div> </div>
			

		<div id="comments">
						<div id="comments2">
							Comments:
							</div>
			
						<?php
							$con = mysql_connect('localhost','root','');
							
							if(!$con){
								die("No connection!");
							}
							$db = mysql_select_db('database',$con);
							if(!$db){
								die("No database!");
							}
							$sql = "SELECT * FROM comments";
							$result = mysql_query($sql, $con);
							if(!$result){
								die("Syntax Error");
							}
							while($row = mysql_fetch_array($result)){
						?>
						
						
							<div id="icon">						
								<img src="img/logo/picture.jpg" style="width: 100px; height: 100px;">
							</div>
								<div id="info">			
								<h2><?php echo $row[0] ?></h2>
								<em><?php echo $row[2] ?></em>
								<p><?php echo $row[1] ?><p>							
							</div>
						
					
						<?php
							}
							mysql_close($con);
						?>	
					</div>

			<table border="2" id="tble" align="center">	
			<tr>
				<td colspan="3" cellspacing="10%" cellpadding="20%">  <hr width="100%" height="50%" color="blue"> </hr> <br> </td>
			</tr>
			
			<tr>
				<td width="30%">
					 <p id="text2"> Our Services </p> 
					<hr width="80%" height="50%" color="blue" align="left"> </hr>
					<ul id="text3">
						<li> - Internet Wi-Fi gratis </li><br>
						<li> - Air conditioning  </li><br>
						<li> - Baggage room </li><br>
						<li> - Smoking rooms with balcony </li><br>
					</ul>
				</td>
				<td width="30%">
					 <p id="text2"> How to reach us </p>
					<hr width="80%" height="50%" color="blue" align="left"> </hr>
					<ul id="text3">
						<li> - By plane </li><br>
						<li> - By ship  </li>
					</ul>
				<!--Google Map-->					
					<iframe width="200" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.ph/maps?f=d&amp;source=s_d&amp;saddr=SeaShore+Resort&amp;daddr=&amp;geocode=FUhkngAdDvdyByEwkLbXlYMctil5t26twREHMzEwkLbXlYMctg&amp;aq=&amp;sll=10.380768,124.975748&amp;sspn=0.008432,0.009645&amp;hl=en&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=10.380778,124.975748&amp;spn=0.003799,0.004292&amp;z=16&amp;output=embed"></iframe><br /><small>  
					<br>
						<center> <a href="Location.php" id="a" style="text-color: black;">  Click Here to View </a></small> </center>
					
					</td>
				<td width="30%">
					 <p id="text2"> Request Availability </p>
					<hr width="80%" height="50%" color="blue" align="left"> </hr>
					<ul id="text3">
						<li> - For information please send an email to  </li> <br>
						<li> SyshoreBeachFronHotel@yahoo.com </li><br>
						<li> or call us 09994122026  </li><br>
					</ul>
					<center> <img src="img/tblepix/phone.png" width="60%" height="30%"> </center>
					<!---<center> <a href="Contact.html" id="a" style="text-shadow: 1px 1px 1px black;"> Go </a> </center> --->
				</td>
			</tr>
				<tr>
				<td colspan="3">
						<hr width="100%" height="50%" color="blue" align="left"> </hr>
				</td>
				</tr>
			</table>
		</div>	
			
		<div id="mainInner2">
			<table border="2" id="tble" align="center">
				<tr>
				<td width="30%">
					 <p id="text4"> IN THE ROOMS </p> 
					<br>
					<ul>
						<li id="text5">  Internet Wi-Fi  <hr> </hr> </li>
						<li id="text5">  Air conditioning <hr> </hr> </li>
						<li id="text5">  Baggage room <hr> </hr> </li>
						<li id="text5">  Smoking rooms with balcony <hr> </hr> </li>
						<li id="text5">  TV-LCD <hr> </hr> </li>


					</ul>
				</td>
				<td width="30%">
					 <p id="text4"> LINKS </p>
					<br>
					<ul>
						<li id="text5"> <a href="http://www1.philippineairlines.com/" style="text-shadow: black;" target="_blank">  Philippine Airline </a>  <hr> </hr> </li>  <!--id="a" style="text-shadow: 1px 1px 1px black;"-->
						<li id="text5"> <a href="http://www.cebupacificair.com/Pages/default.aspx"  style="text-shadow:  black;" target="_blank">  Cebu Pacific </a> <hr> </hr> </li>
						<li id="text5"> <a href="http://schedule.ph/boat/from/Cebu-City/to/Leyte"  style="text-shadow:  black;" target="_blank">  SuperFerry </a><hr> </hr> </li>
					</ul>
				</td>
				<td width="30%">
					<p id="text4"> CONTACT US </p> <br><br>
					<center><img src="img/tblepix/contact.png" width="70%" height="45%"> </center>
					
							<center> <form action="Contact.php">
							<input type="submit" class="submit" name="Form Contact" value="Form Contact" title="">
							</form> </center>
					
				</td>
				</tr>
				<tr>
					<td width="30" colspan="3">
					<div id="link">
					<a href="https://www.facebook.com/syshore.beachfronthotel?fref=ts" title="facebook" target="_blank"> <img src="img/links/facebook.png" alt="facebook"/> </a>				
					<a href="http://www.Yahoomail.com/" title="Email" target="_blank"> <img src="img/links/email.png" alt="Email"/> </a>
					</div>
					</td>
				</tr>		
			</table>
		</div>	
	</div>
	<!--end of div-->

	<!-- footer bar --> 
		<div class="container">			          
		<div class="codrops-top"> 
			<a href="#img/logo/banner.jpg">                  
			<strong>&laquo;  </strong>Return to top of page            
			</a>  
			
			<span class="right">                   
			<a>      
			<strong> Copyright &copy;2013 · SyshoreBeachFront Hotel · All Rights Reserved.</strong>  
			</a>
			</span>          
	</div>
	<!--/ end footer bar -->			
</body>
</html>