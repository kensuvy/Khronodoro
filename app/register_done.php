<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/main.css">

	</head>
	<body>
		<header id="banner">
			<h1><a href="#" id="webname">Khronodoro</a></h1>
		</header>
		<p/>
		<div id="navbar">
			<ul>
				<li><a href="login.php">Login</a></li>
			</ul>
		</div>
		<p/>
		<div id="desc">
			<?php
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			$mydb = new mysqli('localhost', 'root', '', 'Khronodoro');
			$sql = "INSERT INTO Users (username, email, password)
			VALUES ('$username', '$email', '$password')";

			if($mydb->query($sql) == TRUE)
			{
				echo "Your account has been successfully created.<p/>
				Username: <b>".$username."</b><br/>
				Email: <b>".$email."</b><br/>
				Password: <b>".$password."</b><br/>";
			}
			else
			{
				echo "<b>Account creation failed.</b> Please <a href='register.php'> 
				try again </a> or contact the admin.";
			}	
			?>
			<p/>
			Continue to <a href="login">login</a> with your new account.
	
		</div>
	</body>
</html>	

