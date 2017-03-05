<?php

$broj1 = 15766;
$broj2 = 4;
$broj3 = 3664;

if (!is_int($broj1) && !is_float($broj1)){
	echo 'Neveliden Broj!';
	exit;
} 
if (!is_int($broj2) && !is_float($broj2)){
	echo 'Neveliden Broj!';
	exit;
}
if (!is_int($broj3) && !is_float($broj3)){
	echo 'Neveliden Broj!';
	exit;
}

// if ($broj3 > $broj1){
// 	if($broj3 >= $broj2){
// 		echo 'Najgolem broj e brojot '.$broj3;
// 	} else {
// 		echo 'Najgolem broj e brojot '.$broj2;
// 	}
// } else {
// 	if ($broj1 >= $broj2){
// 		echo 'Najgolem broj e brojot '.$broj1;
// 	} else {
// 		echo 'Najgolem broj e brojot '.$broj2;
// 	}
// }

$brmax = ($broj3 > $broj1) ? ( ($broj3 >= $broj2) ? $broj3 : $broj2 ) : ( ($broj1 >= $broj2) ? $broj1 : $broj2 );

echo $brmax;

?>