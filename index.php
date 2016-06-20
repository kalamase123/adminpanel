<?php
	if(isset($_POST['username']) && isset($_POST['password'])){
		if($_POST['password'] != "" && $_POST['username'] != ""){
			$mysqli = new mysqli('localhost', 'root', 'toor', 'adminPanel');
			if ($mysqli->connect_errno) {
    			$message = "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			} else {
				//do the query and verifications
			}
		} else {
			$message = "The username or password is missing.";
		}
	} 
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Minecraft | Admin Panel</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="style/index.css">
	</head>
	<body>
		<div id="connection" class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2">
			<h1 class="h1">Admin Panel</h1>
			<form method="post" action="index.php">
				<input class="form-control" type="text" name="username" placeholder="username"><br>
				<input class="form-control" type="password" name="password" placeholder="password"><br>
				<input class="btn btn-primary btn-block" type="submit" name="submit" value="Connect">
			</form>
			<?php
				if(isset($message)){
					echo '<p id="error">'. $message. '</p>';
				}
			?>
		</div>
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>