<?php
date_default_timezone_set('Europe/Bratislava');
	
function head($tittle) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $tittle; ?></title>
<link href="styly.css" rel="stylesheet">
</head>

<body>

<header>
<h1><?php echo $tittle; ?></h1>
</header>
<?php
}

//mozno sa zide - je to kôli zabezpecovaniu SQLinjection
function osetri($w) {
	return trim(strip_tags($w));
}



function vypis_tovar_uprav_zrus($mysqli) {
?>
	<p><a href="pridaj.php">pridaj tovar</a></p>
<?php
	if (!$mysqli->connect_errno) {
		$sql = "SELECT * FROM elektro_tovar ORDER BY nazov ASC";
		if ($result = $mysqli->query($sql)) {  // vykonaj dopyt
			// dopyt sa podarilo vykonať
			echo '<form method="post">';
			echo '<p>'; 
			while ($row = $result->fetch_assoc()) {
    		echo "<input type='checkbox' name='tovar[]' value='{$row['kod']}' id='tovar{$row['kod']}'>
			<label for='tovar{$row['kod']}'><a href='uprav.php?kod={$row['kod']}'>{$row['nazov']}</a></label><br>\n";
			} 
			echo '</p>'; 
  		echo '<p><input type="submit" name="zrus" value="Zruš tovary"></p>';
  		echo '</form>';
			$result->free();
  	} else {
			// NEpodarilo sa vykonať dopyt!
    	echo '<p class="chyba">Nastala chyba pri získavaní údajov z DB.</p>' . "\n";
    }
	}
}



// vrati udaje pouzivatela ako asociativne pole, ak existuje pouzivatel $username s heslom $pass, inak vrati FALSE
function user_right($mysqli, $username, $pass) {
	if (!$mysqli->connect_errno) {		
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$pass'";  		
//		echo "sql = $sql <br>";
		// echo "OK3"; 
		if (($result = $mysqli->query($sql)) && ($result->num_rows > 0)) {  						
			$row = $result->fetch_assoc();
			$result->free();						
			return $row;
		} else {			
			return false;
		}
	} else {		
		return false;
	}
}

function fileToServer($subor) {
	$novy_nazov = '';
	// spracuj uploadovaný súbor 
	if (!empty($subor) && !empty($subor['name'])) {
		//echo 'nieco sa odosiela';
		
		if ($subor['error'] == UPLOAD_ERR_OK) {
			if (is_uploaded_file($subor['tmp_name'])) {
				$novy_nazov = 'photos/' . $subor['name'];
				$ok = move_uploaded_file($subor['tmp_name'], $novy_nazov);
				if ($ok) {
					echo '<p>Súbor bol nahratý na server.</p>';
				} else {
					echo '<p>Súbor NEbol nahratý na server.</p>';
					$novy_nazov = '';
				}
			} else {
				echo '<p>Súbor je podvrh.</p>';
			}
		} else { 
			// nastane, ak bol uploadovaný súbor väcší ako upload_max_filesize (chyba 2)
			// nastane aj vtedy, ak bol uploadovaný súbor väcší ako post_max_size (chyba 2)
			echo '<p class="chyba">Nastal problém pri uploadovaní súboru ' . $subor['name'] . ' - ' . $subor['error'] . '</p>';
		}
	}
	else {
		echo '<p>Súbor je prázdny</p>';
	}
}



?>
