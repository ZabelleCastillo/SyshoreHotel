<html>
	<head>
		<title>Delete | zabelle</title>
	</head>
	<body>
		<form action="comdelete.php?r=<?php echo $_GET['name']; ?>" method="post">
			<label>Do you want to delete this account? <?php echo $_GET['name']; ?></label>
			YES<input type="radio" value="YES" name="ans">
			NO<input type="radio" value="NO" name="ans">
			<input type="submit" name="confirm" value="Confirm">
		</form>
	</body>
</html>