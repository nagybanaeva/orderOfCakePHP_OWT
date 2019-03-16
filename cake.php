<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>PHP Order of Cake</title>
</head>
<body>
	<form method="post">
		<label>Hány szeletes tortát szeretne?</label><br/>
		
		<input type="radio" name="szelet" value="6300"> 12
		<input type="radio" name="szelet" value="8500"> 18
		<input type="radio" name="szelet" value="11200"> 24
		<input type="radio" name="szelet" value="14300"> 32
		<br/><br/>
		
		<label>Milyen extra feltéteket szeretne?</label><br/>
		
		<input type="checkbox" name="extra[]" value="690"> marcipán
		<input type="checkbox" name="extra[]" value="120"> számgyertya
		<input type="checkbox" name="extra[]" value="990"> hőszigetelő doboz
		<input type="checkbox" name="extra[]" value="550"> üdvözlő felirat
		<br/><br/>
		<input type="submit" name="calculation" value="Ár kiszámítása">
	</form>
	
	<?php

	if (isset($_POST['calculation'])){
	
	$szelet  = $_POST['szelet'];
		if (isset($_POST['extra'])){
			$extra = $_POST['extra'];
			$extrasum = array_sum($extra);
		}
	$summa = $szelet + $extrasum;
	echo 'A torta ára: ' . $summa . ' Ft';
	}
	
	?>
	
</body>
</html>