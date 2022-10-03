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
		
			<style>

        table
        {
          position:relative;
          border:1px solid black;
          width:500px;
        }
        th,td
        {
          padding:9px 5px;
		  border:1px solid black; <!--brdr sa tble, sud nya txt-->
        }

	.border
        {
         background:#FFFFC9;
         border:1px solid black;
         margin-left:50px;
         margin-right:50px;
        }
        p.out
        {
         float:right;
         margin-right:10px;
        }
        p.one
        {
         float:left;
         margin-left:10px;
		
        }
 .bars li {
	float: left;
	text-indent:25px;
	position: relative;	
	line-height: 24px;
	z-index: 9999;	
}

.bars li a {
	color: #000000;
	display: block;
	font-size: 13px;
	line-height: 18px;
	padding: 6px 9px;
	margin: 8px 2px;
	vertical-align: center;
	text-decoration: none;
	/* boxbox-shadow: 1px 0px 2px rgba(0,0,0,0.8); */
}
.bars li a:hover {
	background: -webkit-gradient(linear, center top, center bottom, from(#BDB76B), to(#FF8C00));
	border-radius: 12px;
	box-shadow: inset 0px 0px 1px 1px rgba(0,0,0,0.1);
	color: #222;
}

/* Dropdown with styles and size */

.bars ul {
	position: absolute;
	left: -9999px;
	list-style: none;
	transition: opacity 2s ease;
	width: 180px;
	opacity: 0; /* Dropdown slow */

}

.bar ul li {	
	float: none;
}

.bars ul a {
	white-space: nowrap;
}

/*dropdown with hover and color */
.bars li:hover ul {
	background: -webkit-gradient(linear, center top, center bottom, from(#FFE4C4), to(#FF7F50));
	border-radius: 0 0 6px 6px;
	box-shadow: inset 0px 2px 4px rgba(0,0,0,0.4);
	left: 5px;
	opacity: 1;
}

/* mouse hover and dropdown with color */
.bars li:hover a {
	/*  background: -webkit-gradient(linear, center top, center bottom, from(#F0FFFF), to(#BDB76B));*/	
	border-radius: 8px;
	box-shadow: inset 0px 0px 1px 1px rgba(0,0,0,0.1);
	color: #222;
}

.bars li:hover ul a {
	background: none;
	border-radius: 0;
	box-shadow: none;
	
}

.bars li:hover ul li a:hover {
	background: -webkit-gradient(linear, center top, center bottom, from(#BDB76B), to(#FF8C00));	
	border-radius: 12px;
	margin: 2%; /* moving hover */
	width: 145px;
	box-shadow: inset 0px 0px 4px 2px rgba(0,0,0,0.3);
}
        </style>
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
                                  <div class = "border">
                                            <br/><br/>
                                            <h1 class = "indent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Admin Home</h1>
                                            <p class = "out"><a href = "index.php">Log-out</a></p>
                                  <br/>
                                  <hr/>
                                  <br/>
								  
                                  <form action="adminhome.php" method="POST">
								 
                                  <p class = "one"><input class = "submit" type="submit" name="message" value="Messages" /> </p>  
								<br/><br/><br/><br/>
                                  <p class = "one"><input class = "submit" type="submit" name="comment" value="Comments" /> </p>
                                  <br/>
								  
                                  </form>
								 
                                  <br/><br/><br/>
      <center>                           
<?php
if(isset($_POST['message']))
{
$message=$_POST['message'];

  $con = mysql_connect("localhost","root");
  if($message)
{
mysql_select_db("syshoredb");
$result = mysql_query("SELECT * FROM email");
echo "<table border = 1>

<th align = center>Name</th>
<th align = center>Email</th>
<th align = center>Subject</th>
<th align = center>Message</th>
<th align = center>Delete</th></tr>";
while($row = mysql_fetch_array($result))
{       

  echo "<tr>";
  
  echo "<td align = center>" . $row['name'] . "</td>";
  echo "<td align = center>" . $row['email'] . "</td>";
  echo "<td align = center>" . $row['subject'] . "</td>";
  echo "<td align = center>" . $row['message'] . "</td>";
  echo "<td align = center>" . "<a href='remove.php?r=".$row['name']."'><u>Delete </u></a> ". "</td>";
  echo "</tr>";

}
echo "</table>";
mysql_close($con);
}
}
?>

<?php
if(isset($_POST['comment']))
{
$comment=$_POST['comment'];

  $con = mysql_connect("localhost","root");
  if($comment)
{
mysql_select_db("syshoredb");
$result = mysql_query("SELECT * FROM comments");
echo "<table border = 1>

<th align = center>Name</th>
<th align = center>Comments</th>
<th align = center>Remove</th></tr>";
while($row = mysql_fetch_array($result))
{

  echo "<tr>";
 
  echo "<td align = center>" . $row['name'] . "</td>";
  echo "<td align = center>" . $row['comment'] . "</td>";
  echo "<td align = center>" . "<a href='comdelete.php?r=".$row['name']."'><u>Remove</u></a> ". "</td>";
  echo "</tr>";

}
echo "</table>";
mysql_close($con);
}
}
?>
  </center>
                                    <br/><br><br>
                                    
                                    </div>







            </div>
                     <br/><br/><br/>

     
</body>
</html>