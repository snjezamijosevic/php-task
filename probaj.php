<?php
	require_once("mrezaspajanje.php");
	$greska=false;
	$tekst="";
	$link="";
	$logiran=false;
	foreach($_POST as $kljuc=> $vrijednost)
	{
		if(empty($vrijednost)){
			$greska=true;
			$tekst=$tekst."Niste unijeli ".$kljuc.". ";
		}
	}
	
	if ($greska===false){
		$sql="SELECT lozinka FROM osoba WHERE ID=".$_POST["ID"];
		$result=db_select2($sql);
		$redak=$result[0]["lozinka"];
		if(md5($_POST["sifra"])==$redak)
		{
			$tekst="Logirali ste se. Link na sadržaj za registrirane korisnike je ";
			$link= "<a href='registrirani.php' style='font-weight:bold;'>ovdje</a>.<br> <a href='mojprofil.php'>Profil</a><form action='' method='post'>
	<input type='submit' id='logoff' value='odjava' name='submit'/>
	</form>";
			$logiran=true;
			session_start();
			$_SESSION["b"]=$_POST["ID"];
			$_SESSION["logiran"]=$logiran;
		}
		else{
			$tekst="Ne mogu se logirati.";
		}
	}

	$vrati=array("greske"=>$greska, "tekst"=>$tekst, "linko"=>$link);
	echo json_encode($vrati);


?>