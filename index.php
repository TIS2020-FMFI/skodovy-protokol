
<?php
session_start();
include('db.php');
include('funkcie.php');
head('Škodový protokol');

		
if (isset($_POST["send"])) {        
	$name = "protocol_" . date("Y-m-d--H-i-s") . ".zip";
	packToZIP($name); 
	uploadToSharepoint($name); 
	if (file_exists($name))
        unlink($name); 
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
<input class="cislo" name="cislo" type="text" size="30" placeholder="Výrobné číslo auta" maxlength="30" id="cislo"/> 
 
    <input name="hladat" type="submit" id="hladat" value="Hľadať"> 
  
</form> 
<ul> 
<li><a href="protocol.php?type=jaguar">Jaguar</a> </li> 
<li><a href="protocol.php?type=opel">Opel</a> </li> 
<li><a href="protocol.php?type=peugeot">Peugeot</a> </li> 
<li><a href="protocol.php?type=renault">Renault</a> </li> 
<li><a href="protocol.php?type=skoda">Škoda</a> </li> 
<li><a href="protocol.php">Protokol</a> </li>
</ul>
<?php

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