<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
	a{
		display:inline-block;
		color:white;
		background-color:black;
		padding:1%;
		border-radius: 5px;
		text-decoration: none;
		font-weight: bold;
		margin-bottom: 2%;
	}	
	</style>
</head>
<body>
<a href="mojprofil.php">Moj profil</a>
<br>
	<?php

		if(isset($_POST['submit'])){
			session_unset();
			session_destroy();
			$ID=0;
			header("Location: prijava.php");
		}
	echo "It works!";
?>
	<form action="" method="post">
	<input type="submit" id="logoff" value="odjava" name="submit"/>
	</form>
</body>
</html>