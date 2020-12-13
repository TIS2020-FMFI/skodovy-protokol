<?php
session_start();
include('db.php');
include('funkcie.php');
header('Index');
?>

<section>
<?php
if (isset($_POST["username"]) && isset($_POST["password"]) && $user = user_right($mysqli, $_POST["username"], $_POST["password"])) {
	$_SESSION['user_id'] = $user['user_id'];
	$_SESSION['username'] = $user['username'];				
	echo "OK"; 
	
} elseif (isset($_POST['logout'])) { 
	session_unset();
	session_destroy();
	echo "OK2"; 
}

if (isset($_SESSION['username'])) {
	
?>
<p>User <strong><?php echo $_SESSION['username'] ?></strong>.</p>
<p>Ak chceš, môžeš si <a href="zmen_heslo.php">zmeniť heslo</a>.</p>
	
<form method="post"> 
  <p> 
    <input name="logout" type="submit" id="logout" value="Log out"> 
  </p> 
</form> 
<ul> 
<li><a href="protocol.php?type=jaguar">Jaguar</a> </li> 
<li><a href="protocol.php?type=opel">Opel</a> </li> 
<li><a href="protocol.php?type=peugeot">Peugeot</a> </li> 
<li><a href="protocol.php?type=renault">Renault</a> </li> 
<li><a href="protocol.php?type=skoda">Škoda</a> </li> 
</ul>
<?php

}  else {
?>
	<form method="post">
		<p><label for="username">Prihlasovacie meno:</label> 
		<input name="username" type="text" size="30" maxlength="30" id="username" value="<?php if (isset($_POST["username"])) echo $_POST["username"]; ?>" ><br>
		<label for="password">Heslo:</label> 
		<input name="password" type="password" size="30" maxlength="30" id="password"> 
		</p>
		<p>
			<input name="submit" type="submit" id="submit" value="Log in">
		</p>
	</form>
<?php
}

?>
</section>
