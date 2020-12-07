<?php

$mysqli = new mysqli('localhost', 'wa1', 'wa1', 'protokolydb');
if ($mysqli->connect_errno) {
	echo '<p class="mistake">ConnectionDB error!</p>';
} else {
	$mysqli->query("SET CHARACTER SET 'utf8'");
}

?>