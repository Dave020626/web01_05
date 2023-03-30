
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<style>
		.piros {color: red;}
		p {text-align: center;}
	</style>
	<body>
	<?php
		//szerver oldali ellenőrzés példa
		$ki = "Születési dátum: {$_POST['szulev']}.{$_POST['szulho']}.{$_POST['szulnap']}.<br>";
		
		$re1='/^[A-Za-z]{8,20}$/';
		$ki .= "Név: {$_POST['nev']}";
		if (!isset($_POST['nev'])||!preg_match($re1,$_POST['nev'])) {
			$ki .= '<span class="piros"> Hiba: Hiányzó vagy helytelen név!';
		}
		$ki .= '<br>';
	
		echo $ki;
	?>
	<p><a href="../index.php">Kattintson ide további regisztrációk rögzítéséhez!</a></p>
	</body>
</html>
