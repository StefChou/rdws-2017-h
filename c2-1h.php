<?php

$studenti = array(
	'Blazevski' => 'Stefan',
	'Stojkovski' => 'Stefan',
	'Danev' => 'Martin',
	'Postolovski' => 'Martin',
	'Dobrohotova' => 'Irina',
	);

$maxLenth = 0;
$maxName = '';
$minLenth = 50;
$minName = '';

foreach ($studenti as $prezime => $ime) {
	if (strlen($prezime .$ime) > $maxLenth){
		$maxLenth = strlen($prezime .$ime);
		$maxName = $prezime. ' ' .$ime;
	} elseif (strlen($prezime .$ime) < $minLenth){
		$minLenth = strlen($prezime .$ime);
		$minName = $prezime. ' ' .$ime;
	}
}

echo $maxName.' ima najgolemo ime i prezime so '.$maxLenth. ' bukvi, a ' .$minName. ' ima najkratko ime i prezime so ' .$minLenth. ' bukvi. ';

?>