
<?php
session_start();
include('db.php');
include('funkcie.php');
head('Škodový protokol');

		
if (isset($_POST["send"])) {        
	$vin = ""; 
	$type = $_POST["type"];
	if (isset($_POST["vin"])) $vin = substr($_POST["vin"], 9);
	if ($vin)
		$name = "data/" .  $type . "_" . $vin . ".zip"; 
	else
		$name = "data/" . $type . "_" . date("Y-m-d--H-i-s") . ".zip";
	packToZIP($name); 
	/*uploadToSharepoint($name); 
	if (file_exists($name))
        unlink($name); */
}	
	if (isset($_POST["username"]) && isset($_POST["password"]) && $user = user_right($mysqli, $_POST["username"], $_POST["password"])) {
		$_SESSION['user_id'] = $user['user_id'];
		$_SESSION['username'] = $user['username'];				 
		
	} elseif (isset($_POST['logout'])) { 
		session_unset();
		session_destroy();
		echo "<h1>Prihlásiť sa</h1>"; 
	}  elseif (!(isset($_SESSION['username']))) {
		echo "<h1>Prihlásiť sa</h1>"; 
	}
	?>
<section>
<?php

if (isset($_SESSION['username'])) {
	
?>
	
<form method="post"> 
  <p> 
    <input name="logout" type="submit" id="logout" value="Odhlásiť sa"> 
  </p> 
  <div class="wrapper">
<input class="cislo" name="cislo" type="text" size="17" placeholder="Výrobné číslo auta" maxlength="17" id="cislo"/> 
 
    <input name="hladat" type="submit" id="hladat" value="Hľadať"> 
	</div>
</form> 
<?php if (isset($_POST["hladat"])) {
	$vin = ""; 
	if (isset($_POST["cislo"])) $vin = $_POST["cislo"];
	print_models($mysqli, $vin); 
}   ?>
<ul> 
<li><a href="protocol.php?type=jaguar">Jaguar / Land Rover</a> </li> 
<li><a href="protocol.php?type=opel">Opel</a> </li> 
<li><a href="protocol.php?type=peugeot">PSA / Peugeot / Citroën</a> </li> 
<li><a href="protocol.php?type=renault">Renault</a> </li> 
<li><a href="protocol.php?type=skoda">Škoda</a> </li> 
</ul>
<?php
	/*if ((!isset($_POST["send"])) && (!isset($_POST["hladat"]))) 
		include("mail-script.php"); */
}  else {
?>

	<form method="post">
		<p><label for="username">Prihlasovacie meno</label></p>
		<input class="spodok" name="username" type="text" size="30" maxlength="30" id="username" placeholder="meno" value="<?php if (isset($_POST["username"])) echo $_POST["username"]; ?>" />
		<p><label for="password">Prihlasovacie heslo</label> </p>
		<input class="spodok" name="password" type="password" size="30" placeholder="heslo" maxlength="30" id="password"/> 
		<p>
			<input name="login" type="submit" id="login" value="Prihlásiť sa">
		</p>
	</form>
<?php
}

?>
</section>
</body>
</html>