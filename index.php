

<?php
session_start();
include('db.php');
include('funkcie.php');
header('Index');
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Škodový protokol</title>
</head>

<body>
	<?php
	if (isset($_POST["username"]) && isset($_POST["password"]) && $user = user_right($mysqli, $_POST["username"], $_POST["password"])) {
		$_SESSION['user_id'] = $user['user_id'];
		$_SESSION['username'] = $user['username'];				
		echo "<h1>Prihlásenie prebehlo úspešne</h1>"; 
		
	} elseif (isset($_POST['logout'])) { 
		session_unset();
		session_destroy();
		echo "<h1>Odhlásenie prebehlo úspešne</h1>"; 
	} else {
		echo "<h1>Prihlásiť sa</h1>"; 
	}
	?>
<section>
<?php

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
		<p><label for="username">Prihlasovacie meno</label></p>
		<input class="spodok" name="username" type="text" size="30" maxlength="30" id="username" placeholder="username" value="<?php if (isset($_POST["username"])) echo $_POST["username"]; ?>" />
		<p><label for="password">Prihlasovacie heslo</label> </p>
		<input class="spodok" name="password" type="password" size="30" placeholder="password" maxlength="30" id="password"/> 
		<p><a href="zmen_heslo.php">Zabudol som heslo</a></p>
		<p>
			<input name="login" type="submit" id="login" value="Log in">
		</p>
	</form>
<?php
}

?>
</section>
</body>
</html>