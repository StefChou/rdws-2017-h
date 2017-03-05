<?php

$predmeti = array(
	'Adobe Premier' => 'AdobePremier',
	'Implementacija na Veb Dizajn' => 'ImplementacijaNaVebDizjan',
	'Dizajn na veb strana' => 'DizajnNaVebStrana',
	'Razvoj na dinamicna veb strana' => 'RazvojNaDinamicnaVebStrana',
	'Swt' => 'swt',
	'Ui/Ux' => 'ui-ux',
	'Raspored' => 'raspored',
	);

?>

<!DOCTYPE html>
<html>
	<head>
		<style> ul{list-style-type: none;} </style>
	</head>
	<body>
	<ul>
		<?php foreach ($predmeti as $title => $value) { ?>
			<li>
				<a href="index.php?page=<?php echo $value; ?>"><?php echo $title; ?></a>
			</li>
		<?php 
			}
		?>
	</ul>
	
