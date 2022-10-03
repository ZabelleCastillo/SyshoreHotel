<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$name = htmlentities($_POST['name']);
				$email = htmlentities($_POST['email']);
				$subject = htmlentities($_POST['subject']);
				$message = htmlentities($_POST['message']);
				
				$con = mysql_connect('localhost','root','');
				if(!$con){
					die("No connection!");
				}
				$db = mysql_select_db('database',$con);
				if(!$db){
					die("No database!");
				}
				$sql = "INSERT INTO email (name, email, subject, message) VALUES ('$name','$email','$subject','$message')";
				$result = mysql_query($sql, $con);
				if(!$result){
					die("Syntax Error");
				}
				mysql_close($con);
				header('Location: Contact.php?sent=true');
			}
			else{
				header('Location: Contact.php?error_email=true');
			}
		}
		else if(!empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
			header('Location: Contact.php?error_name=true');
		}
		else if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['message'])){
			header('Location: Contact.php?error_subject=true');
		}
		else if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['subject'])){
			header('Location: Contact.php?error_message=true');
		}
		else if(!empty($_POST['message']) && !empty($_POST['name']) && !empty($_POST['subject'])){
			header('Location: Contact.php?error_email=true');
		}
		else if(!empty($_POST['subject']) && !empty($_POST['message'])){
			header('Location: Contact.php?error_name=true&error_email=true');
		}
		else if(!empty($_POST['subject']) && !empty($_POST['name'])){
			header('Location: Contact.php?error_email=true&error_message=true');
		}
		else if(!empty($_POST['subject']) && !empty($_POST['email'])){
			header('Location: Contact.php?error_name=true&error_message=true');
		}
		else if(!empty($_POST['message']) && !empty($_POST['name'])){
			header('Location: Contact.php?error_subject=true&error_email=true');
		}
		else if(!empty($_POST['message']) && !empty($_POST['email'])){
			header('Location: Contact.php?error_name=true&error_subject=true');
		}
		else if(!empty($_POST['name']) && !empty($_POST['email'])){
			header('Location: Contact.php?error_subject=true&error_message=true');
		}
		else if(!empty($_POST['message'])){
			header('Location: Contact.php?error_name=true&error_email=true&error_subject=true');
		}
		else if(!empty($_POST['name'])){
			header('Location: Contact.php?error_message=true&error_email=true&error_subject=true');
		}
		else if(!empty($_POST['email'])){
			header('Location: Contact.php?error_name=true&error_message=true&error_subject=true');
		}
		else if(!empty($_POST['subjects'])){
			header('Location: Contact.php?error_name=true&error_email=true&error_message=true');
		}
		else{
			header('Location: Contact.php?error_name=true&error_email=true&error_subject=true&error_message=true');
		}
	}	
	else{
		header('Location: Contact.php');
	}
?>