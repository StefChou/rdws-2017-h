<?php

$predmet = [
	'predmet' => 'Adobe Premier',
	'profesor' => 'Miroslav Klampfer',
	'vreme' => '30 chasa',
	'semestar' => 'Vtor',
];

?>

<table border="1">
	<?php foreach ($predmet as $title => $value){ ?>
		<tr>
			<th><?php echo $title?></th>
			<td><?php echo $value?></td>
		</tr>
		<?php } ?>
</table>