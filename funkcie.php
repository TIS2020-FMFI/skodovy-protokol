<?php
date_default_timezone_set('Europe/Bratislava');
require_once 'vendor/autoload.php';
use Office365\Runtime\Auth\ClientCredential;
use Office365\SharePoint\FileCreationInformation;
use Office365\SharePoint\ClientContext;
	
function head($tittle) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">	
	<title><?php echo $tittle; ?></title>
</head>

<body>

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

function fileToServer($file, $newName) {
	$new_name = '';	
	if (!empty($file) && !empty($file['name'])) {				
		if ($file['error'] == UPLOAD_ERR_OK) {
			if (is_uploaded_file($file['tmp_name'])) {
				$new_name = 'protocol_data/' . $newName . fileFormat($file['name']);								
				$ok = move_uploaded_file($file['tmp_name'], $new_name);
				/*if ($ok) {
					echo '<p>Súbor bol nahratý na server.</p>';
				} else {
					echo '<p>Súbor NEbol nahratý na server.</p>';
					$new_name = ''; 
				}*/
			} else {
				echo '<p>Súbor je podvrh.</p>';
			}
		} else { 
			// nastane, ak bol uploadovaný súbor väcší ako upload_max_filesize (chyba 2)
			// nastane aj vtedy, ak bol uploadovaný súbor väcší ako post_max_size (chyba 2)
			echo '<p class="chyba">Nastal problém pri uploadovaní súboru ' . $subor['name'] . ' - ' . $subor['error'] . '</p>';
		}
	}	
}

function fileFormat($filename) {
	$result = ''; 
	$add = false; 
	foreach (str_split($filename) as $s) {
		if ($s == '.')
			$add = true; 
		if ($add) 
			$result = $result . $s; 
	}
	return $result; 
}

function packToZIP($filename) {
	$zip = new ZipArchive();	
	if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
		exit("cannot open <$filename>\n");
	}
	$zip->addFile("protocol_data/protocol.pdf");        
	for ($x = 1; $x <= 3; $x++) {
		$name = "protocol_data/photo" . $x . ".jpg"; 
		if (file_exists($name))
			$zip->addFile($name);            
	}    
	$zip->close();
}

function uploadToSharepoint($filename) {
	try {
		$clientId = "964c908f-f1b6-4a7f-a8e3-f17b0aa02529";
		$clientSecret = "kLTFoKc8BM/u87YQ9wQjxhspK7pSGj2NqJcwlz9lL7Y=";
		$webUrl = "https://liveuniba.sharepoint.com/sites/MartinKristak/";
		$credentials = new ClientCredential($clientId, $clientSecret);
		$ctx = (new ClientContext($webUrl))->withCredentials($credentials);
		$targetFolderUrl = "Shared%20Documents";
		$localPath = $filename; 
		$fileName = basename($localPath);
		$fileCreationInformation = new FileCreationInformation();
		$fileCreationInformation->Content = file_get_contents($localPath);
		$fileCreationInformation->Url = $fileName;
		$uploadFile = $ctx->getWeb()->getFolderByServerRelativeUrl($targetFolderUrl)->getFiles()->add($fileCreationInformation);
		$ctx->executeQuery();
		print "File has been uploaded\r\n";
	}
	catch (Exception $e) {
		echo 'Error: ',  $e->getMessage(), "\n";
	}
}


?>
