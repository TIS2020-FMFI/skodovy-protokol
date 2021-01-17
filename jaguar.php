<?php if (isset($_POST["submit"])) { ?>
<style>
	img {
		position: fixed; 
		width: 720px; 
		height: 1017px; 
		margin: 0px; 
		z-index: -1; 
	}
	#model {
		position: fixed;  
		top: 140px; 		
		left: 60ani px; 
		width: 700px; 	
	}
	form {
		font-size: 0.5em; 
	}
</style>
<?php } else { ?>
<style>
	input[type='text']{
		position: absolute;
		font-size:40px;
		text-align:center;
	}

	#model {
	top: 337px;
    left: 225px;
    width: 394px;
    height: 70px;
}
#vin {
	top: 408px;
    left: 225px;
    width: 394px;
    height: 71px;
}
	}
</style>
<?php } ?>

<?php
	$path = './pictures/jaguar-protocol.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>	
	<img src="<?php echo $base64?>">
  <div id="o-back">
    <form method="post">			
	<input name="model" type="text" id="model" value="<?php if (isset($_POST["model"])) echo $_POST["model"]; ?>" size="20" maxlength="20">
	<input name="vin" type="text" id="vin"  value="<?php if (isset($_POST["vin"])) echo  $_POST["vin"]; ?>" size="20" minlength="17" maxlength="17">

	<br>
	
<p><input name="submit" type="submit" id="submit" value="Dowland PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>