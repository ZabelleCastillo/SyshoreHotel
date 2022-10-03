<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty($_POST['name']) && !empty($_POST['comment'])){
			$name = htmlentities($_POST['name']);
			$comment = htmlentities($_POST['comment']);
			
			$con = mysql_connect('localhost','root','');
			if(!$con){
				die("No connection!");
			}
			$db = mysql_select_db('database',$con);
			if(!$db){
				die("No database!");
			}
			$sql = "INSERT INTO comments (name, comment) VALUES ('$name','$comment')";
			$result = mysql_query($sql, $con);
			if(!$result){
				die("Syntax Error");
			}
			mysql_close($con);
			header('Location: Comments.php?sent=true');
		}
		else if(!empty($_POST['name'])){
			header('Location: Comments.php?error_name=true');
		}
		else if(!empty($_POST['message'])){
			header('Location: Comments.php?error_name=true');
		}
		else{
			header('Location: Comments.php?error_name=true&error_message=true');
		}
	}
	else{
		header('Location: Comments.php');
	}
?>