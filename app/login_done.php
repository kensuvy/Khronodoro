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
			$sent_password = $_POST['password']

			$mydb = new mysqli('localhost', 'root', '', 'Khronodoro');
			$sql = "SELECT * FROM Users password
			       	WHERE username IS $username";

			$result = $mydb->query($sql);
			$saved_password = $result['password'];

			if($sent_password==$saved_password)
			{
				echo "Login successful.....<p/>Redirecting now....";
				header("Location: home.php");
			}
			else
			{
				echo "<b>Error</b>: Login failed. Please <a href='login.php'>try</a> again or contact the admin.";
			}	
			?>
			<p/>
	
		</div>
	</body>
</html>	

