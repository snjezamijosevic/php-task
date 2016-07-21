<html>
<head>
<meta charset="utf-8">
<script
			  src="https://code.jquery.com/jquery-3.1.0.min.js"
			  integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
			  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/stilprijave.css">
</head>
<body>
<form method="post" action="probaj.php" id="prva">
		<input type="text" name="ID" placeholder="ID" id="ID"/>
		<input type="password" name="sifra" placeholder="sifra" id="sifra"/>
		<input type="submit" name="submit" id="submit" value="prijava"/> 
	</form>
	<form method="post" action="" id="druga">
		<input type="submit" name="novi" value="novi korisnik"/>
	</form>
	
	<p id="informacija" style="display:none;"></p>

	<div id="sadrzaj">
		Da biste vidjeli sadržaj, morate se logirati. Pristup je moguć samo registriranim korisnicima.
	</div>
	<script>
		$(function(){
			$("#prva").on("submit", function(e){
				e.preventDefault();
				$.post(this.action, $(this).serialize(), function(data){
					var podaci=JSON.parse(data);
					$("#informacija").text(podaci.tekst).fadeIn();
					document.getElementById('informacija').innerHTML+=podaci.linko;
				});
			});
		});
	</script>
	<?php	
	if(isset($_POST['novi'])){
		header('Location: unos.html');
	}
	?>
	
	
	<div id="footer">
		All Rights Reserved. <?php echo date("d.m.Y.")?><br/>Snježana Mijošević
	</div>
</body>
</html>