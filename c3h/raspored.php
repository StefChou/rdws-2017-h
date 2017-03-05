<?php

$saati = array('09:00 - 10:30', '11:00 - 12:30');
$predmeti = array(
	'Monday' => array(
		'09:00 - 10:30' => array('predmet' => 'Adobe Premier', 'profesor' => 'Miroslav Klampfer'),
		'11:00 - 12:30' => array('predmet' => 'Adobe Premier', 'profesor' => 'Miroslav Klampfer'),
	),
	'Tuesday' => array(
		'09:00 - 10:30' => array('predmet' => 'Implementacija na veb dizajn', 'profesor' => 'Dimitar Atanasov'),
		'11:00 - 12:30' => array('predmet' => 'Implementacija na veb dizajn', 'profesor' => 'Dimitar Atanasov'),
	),
	'Wednesday' => array(
		'09:00 - 10:30' => array('predmet' => 'Dizajn na veb strana', 'profesor' => 'Aleksandar Peshevski'),
		'11:00 - 12:30' => array('predmet' => 'Razvoj na dinamicna veb strana', 'profesor' => 'Gorjan Ilievski'),
	),
	'Thursday' => array(
		'09:00 - 10:30' => array('predmet' => 'SWT', 'profesor' => 'Bojan Gavrvoski'),
		'11:00 - 12:30' => array('predmet' => 'SWT', 'profesor' => 'Bojan Gavrvoski'),
	),
	'Friday' => array(
		'09:00 - 10:30' => array('predmet' => 'UI/UX', 'profesor' => 'Andreja Jarcevski'),
		'11:00 - 12:30' => array('predmet' => 'UI/UX', 'profesor' => 'Andreja Jarcevski'),
	),
	
	);

?>

<table border="1">
	<tr>
		<th></th>
		<th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
	</tr>
	<?php foreach($saati as $saat) { ?>
		<tr>
			<td><?php echo $saat ?></td>
			<td><?php 
				if (isset($predmeti['Monday'][$saat])) {
					echo $predmeti['Monday'][$saat]['predmet'];
					echo '<br/>';
					echo $predmeti['Monday'][$saat]['profesor'];
				}
			?></td>
			
			<td><?php 
				if (isset($predmeti['Tuesday'][$saat])) {
					echo $predmeti['Tuesday'][$saat]['predmet'];
					echo '<br/>';
					echo $predmeti['Tuesday'][$saat]['profesor'];
				}
			?></td>

			<td><?php 
				if (isset($predmeti['Wednesday'][$saat])) {
					echo $predmeti['Wednesday'][$saat]['predmet'];
					echo '<br/>';
					echo $predmeti['Wednesday'][$saat]['profesor'];
				}
			?></td>

			<td><?php 
				if (isset($predmeti['Thursday'][$saat])) {
					echo $predmeti['Thursday'][$saat]['predmet'];
					echo '<br/>';
					echo $predmeti['Thursday'][$saat]['profesor'];
				}
			?></td>

			<td><?php 
				if (isset($predmeti['Friday'][$saat])) {
					echo $predmeti['Friday'][$saat]['predmet'];
					echo '<br/>';
					echo $predmeti['Friday'][$saat]['profesor'];
				}
			?></td>


		</tr>

	<?php } ?>
</table>