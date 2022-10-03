
<?php
 $con = mysql_connect("localhost","root");

mysql_select_db("database");
if(isset($_GET['r'])){
$q="delete from comments where name ='".$_GET['r']."'";
mysql_query($q);
mysql_error();
header('location: adminhome.php');
}