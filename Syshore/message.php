<?php
$con = mysql_connect("localhost","root");

mysql_select_db("database");
$result = mysql_query("SELECT * FROM email");
echo "<table border = '1'>
<tr><th>Visitor Id</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
<th>Delete</th></tr>";
while($row = mysql_fetch_array($result))
{       

  echo "<tr>";
 
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['subject'] . "</td>";
  echo "<td>" . $row['message'] . "</td>";
  echo "<td>" . "<a href='remove.php?r=".$row['name']."'>Delete</a> ". "</td>";
  echo "</tr>";

}
echo "</table>";
mysql_close($con);
header('location: adminhome.php');
}

?>
