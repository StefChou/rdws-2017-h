<?php

$predmet = [
	'predmet' => 'Implementacija na veb dizjan',
	'profesor' => 'Dimitar Atanasov',
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