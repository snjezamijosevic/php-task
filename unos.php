<?php
	/*echo "<pre>";
	print_r($_POST);
	echo "</pre>"; */
	$con=mysqli_connect("localhost","root", "", "mojaproba");
	mysqli_set_charset($con, "UTF8");
	$ID=mysqli_num_rows(mysqli_query($con,"SELECT *  FROM osoba"));
	$ID+=1;
	echo "Tvoj ID za login je ".$ID;
	echo "<div>";
	echo "<h1>Ime: ".$_POST["ime"]."</h1>";
	echo "<h1>Prezime: ".$_POST["prezime"]."</h1>";
	$hobiji="";
	foreach($_POST["hobi"] as $broj=>$hobi){
		echo"<p> Hobi broj ".($broj+1).": ".$hobi."</p>";
		$hobiji=$hobiji." ".$hobi;
	}
	echo "<h6>Poruka: ".$_POST["poruka"]."</h6>";
	echo "<p>Omiljena boja: ".$_POST["boja"]."</p>";
	if($_POST["spol"]=="male"){
		echo "muškarac";
	}
	else if ($_POST["spol"]=="female"){
		echo "žena";
	}
	else{
		echo "Niste odabrali spol.";
	}
	echo "<p>Datoteka: ".$_POST["datoteka"]."</p>";
	echo "<p>E-mail: ".$_POST["email"]."</p>";
	echo "<p>Lozinka: ".md5($_POST["lozinka"])."</p>";
	echo "<p>Smjer: ".$_POST["smjer"]."</p>";
	echo "</div>";

	
	$ime=$_POST["ime"];
	$prezime=$_POST["prezime"];
	$poruka=$_POST["poruka"];
	$boja=$_POST["boja"];
	$spol=$_POST["spol"];
	$datoteka=$_POST["datoteka"];
	$email=$_POST["email"];
	$lozinka=md5($_POST["lozinka"]);
	$smjer=$_POST["smjer"];

	$upis="INSERT INTO osoba VALUES('', '$ime', '$prezime', '$hobiji', '$poruka', '$spol', '$boja',  '$datoteka', '$email', '$lozinka', '$smjer')";
	echo $upis;
	mysqli_query($con, $upis);
	//mysqli_close($con);
	
	echo "<br>Sad se morate logirati na <a href='prijava.php'>linku</a>";

		?>