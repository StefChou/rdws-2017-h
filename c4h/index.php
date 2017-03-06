<?php

if (isset($_GET['username']) && preg_match('/^[A-Za-z0-9]{6,10}$/', $_GET['username'])) {
	echo 'Valid username';
} else {
	echo 'Forbiden character in use';
}

echo '<hr/>';

if (isset($_GET['password']) && preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$#])[A-Za-z\d$@$!%*#?&]{6,10}$/', $_GET['password'])) {
	echo 'Password pass';
} else {
	echo 'Password fail';
}

echo '<hr/>';

if (isset($_GET['pin1']) && is_numeric($_GET['pin1']) && strlen($_GET['pin1']) === 4 && isset($_GET['pin2']) && is_numeric($_GET['pin2']) && strlen($_GET['pin2']) === 4){
	if ($_GET['pin1'] == $_GET['pin2']) {
		echo 'Valid & same PINs<br/>';
	} else {
		echo 'Valid but diferent PINs<br/>';
	}
} else {
	echo 'Invalid PIN<br/>';
}

echo '<hr/>';

if (isset($_GET['pol'])) {
	echo 'Selected '.$_GET['pol'];
} else {
	echo 'Not selected gender';
}

echo '<br/><br/>';
echo '<a href="index_html.php">Back</a>';

?>