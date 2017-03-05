<?php

$godini = ['55', '54', '32', '28'];
$sum = 0;

foreach ($godini as $value) {
	$sum = $value + $sum;
}

$res = $sum / count($godini);

echo 'Prosek ' .$res;
echo '<hr/>';

switch ((int)($res / 10)) {
	case 3:
		echo 'Sreden prosek na godini ';
		break;
	case 4:
		echo 'Sredno-visok prosek na godini ';
		break;
	
	default:
		echo 'Mlad prosek na godini';
		break;
}

?>