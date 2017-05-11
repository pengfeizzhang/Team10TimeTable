<?php
session_start();
if (!isset ($_SESSION["adminPassword"])){
	$_SESSION["adminPassword"] = "Admin";
}
?>
<!DOCTYPE html>
<html>
	<head><title>Team 10 Scheduler Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
	<h1>Team 10 Scheduler Login</h1>
	<div class="login">

		<div class="loginName">
			<h2>Admin</h2>

			<form action="login.php" method="post">
			Password:  <input type="text" name="passwordAdmin"><br>
			<input type="submit">

			</form>
		</div>
	</div>
	<div class="login">

		<div class="loginName">
			<h2>User 1</h2>

			<form action="login.php" method="post">
			Enter Password:  <input type="text" name="passwordUser1"><br>
		<?php if($_SESSION["adminPass"]) { ?>
    		New Password: <input type="text" name="newPasswordUser1"><br>
		<?php } ?>
			<input type="submit">

			</form>
		</div>
	</div>
	<div class="login">

		<div class="loginName">
			<h2>User 2</h2>

			<form action="login.php" method="post">
			Enter Password:  <input type="text" name="passwordUser2"><br>
		<?php if($_SESSION["adminPass"]) { ?>
    		New Password: <input type="text" name="newPasswordUser2"><br>
		<?php } ?>
			<input type="submit">

			</form>
		</div>

	</div>

	<?php

	if(!empty($_POST["passwordAdmin"])) { 
   		if(($_POST["passwordAdmin"]) ==  $_SESSION["adminPassword"]) {
   			$_SESSION["adminPass"] = true;
   			header("Location: login.php");
    	}
    	else {
    		$_SESSION["adminPass"] = false;
        	echo "Wrong Password";
    	}
	}

	if(!empty($_POST["newPasswordUser1"])) { 
   		$_SESSION["user1Password"] = $_POST["newPasswordUser1"];
	}

	if(!empty($_POST["newPasswordUser2"])) { 
   		$_SESSION["user2Password"] = $_POST["newPasswordUser2"];
	}

	if(!empty($_POST["passwordUser1"])) { 
   			if(($_POST["passwordUser1"]) ==  $_SESSION["user1Password"]) {
    		header("Location: Team10User1.php");
    	}
    	else {
        	echo "Wrong Password";
    	}
	}

	if(!empty($_POST["passwordUser2"])) { 
   			if(($_POST["passwordUser2"]) ==  $_SESSION["user2Password"]) {
    		header("Location: Team10User2.php");
    	}
    	else {
        	echo "Wrong Password";
    	}
	}

	?>

</body>
</html>