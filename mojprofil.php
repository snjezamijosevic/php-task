<?php
	require_once('mrezaspajanje.php');
?>
<html>
<head>
	<title>Moj profil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/profil.css"/>
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
<div id="naslov">
	<h1>Moj profil</h1>
	<?php
		session_start();
		$ID=$_SESSION["b"];
		$sql="SELECT * FROM osoba WHERE ID=".$ID;
		$rez=db_select2($sql);
		foreach($rez as $redak){
			if ($redak['ID']==$ID){
		$boja=$redak['boja'];

		echo "<p id='mojid' style='color:".$boja.";'>".$redak["ID"]."</p>";
		echo "<p id='imeprezime' style='color:".$boja.";'>".$redak['ime']." ".$redak['prezime']."</p>";
		echo "<p id='spol' style='color:".$boja.";'>".$redak['spol'];
		echo "<p id='hobiji'style='color:".$boja.";'>Hobiji: ".$redak['hobiji']."</p>";
		echo "<p id='poruka' style='color:".$boja.";'>Poruka: ".$redak['poruka']."</p>";
		echo "<p id='e-mail' style='color:".$boja.";'>E-mail: ".$redak['email']."</p>";
		echo "<p id='smjer' style='color:".$boja.";'>Smjer: ".$redak['smjer']."</p>";

		}
	}
	?>
	
	<form action="" method="post">
	<input type="submit" id="logoff" value="odjava" name="submit"/>
	</form>
	<?php

		if(isset($_POST['submit'])){
			session_unset();
			session_destroy();
			$ID=0;
			header("Location: prijava.php");
		}
	?>
</div>
</body>
</html>