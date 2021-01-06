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

    img {
		position: absolute; 
		width: 720px; 
		height: 1017px; 
		margin: 0px; 
		z-index: -1; 
	}
	#model {
		position: absolute;  
		top: 250px; 		
		left: 160px; 
		width: 700px; 	
	}
	form {
		font-size: 0.5em; 
	}
	#submit {
		position: absolute;
		top: 1050px;
	}
	#next {
		position: absolute;
		top: 1050px;
		left: 190px;
	}
	#model {
		position: absolute;
		height: 15px;
		top: 80px;
		left: 93px;
		width: 180px;
		font-size: 8px;
	}
	#colour {
		position: absolute;
		height: 15px;
		top: 96px;
		left: 93px;
		width: 180px;
		font-size: 8px;
	}
	#point {
		position: absolute;
		height: 15px;
		top: 83px;
		left: 425px;
		width: 110px;
		font-size: 8px;
	}
	#v-1 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 50px;
		width: 13px;
		font-size: 8px;
	}
	#v-2 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 64px;
		width: 13px;
		font-size: 8px;
	}
	#v-3 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 78px;
		width: 12px;
		font-size: 8px;
	}
	#v-4 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 92px;
		width: 12px;
		font-size: 8px;
	}
	#v-5 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 105px;
		width: 13px;
		font-size: 8px;
	}
	#v-6 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 119px;
		width: 13px;
		font-size: 8px;
	}
	#v-7 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 133px;
		width: 12px;
		font-size: 8px;
	}
	#v-8 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 146px;
		width: 13px;
		font-size: 8px;
	}
	#v-9 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 160px;
		width: 12px;
		font-size: 8px;
	}
	#v-10 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 173px;
		width: 13px;
		font-size: 8px;
	}
	#v-11 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 187px;
		width: 13px;
		font-size: 8px;
	}
	#v-12 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 201px;
		width: 12px;
		font-size: 8px;
	}
	#v-13 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 214px;
		width: 13px;
		font-size: 8px;
	}
	#v-14 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 228px;
		width: 13px;
		font-size: 8px;
	}
	#v-15 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 242px;
		width: 12px;
		font-size: 8px;
	}
	#v-16 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 255px;
		width: 13px;
		font-size: 8px;
	}
	#v-17 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 269px;
		width: 13px;
		font-size: 8px;
	}



</style>
<?php } ?>

<?php
	$path = './pictures/peugeot-protocol.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>	
	<img src="<?php echo $base64?>">
  <div id="o-back">
    <form method="post">			
	<input name="model" type="text" id="model" value="<?php if (isset($_POST["model"])) echo $_POST["model"]; ?>" size="45" maxlength="45">
	<input name="colour" type="text" id="colour" value="<?php if (isset($_POST["colour"])) echo $_POST["colour"]; ?>" size="45" maxlength="45">
	<input name="point" type="text" id="point" value="<?php if (isset($_POST["point"])) echo $_POST["point"]; ?>" size="25" maxlength="25">
	<input name="v-1" type="text" id="v-1" value="<?php if (isset($_POST["v-1"])) echo $_POST["v-1"]; ?>" size="1" maxlength="1">
	<input name="v-2" type="text" id="v-2" value="<?php if (isset($_POST["v-2"])) echo $_POST["v-2"]; ?>" size="1" maxlength="1">
	<input name="v-3" type="text" id="v-3" value="<?php if (isset($_POST["v-3"])) echo $_POST["v-3"]; ?>" size="1" maxlength="1">
	<input name="v-4" type="text" id="v-4" value="<?php if (isset($_POST["v-4"])) echo $_POST["v-4"]; ?>" size="1" maxlength="1">
	<input name="v-5" type="text" id="v-5" value="<?php if (isset($_POST["v-5"])) echo $_POST["v-5"]; ?>" size="1" maxlength="1">
	<input name="v-6" type="text" id="v-6" value="<?php if (isset($_POST["v-6"])) echo $_POST["v-6"]; ?>" size="1" maxlength="1">
	<input name="v-7" type="text" id="v-7" value="<?php if (isset($_POST["v-7"])) echo $_POST["v-7"]; ?>" size="1" maxlength="1">
	<input name="v-8" type="text" id="v-8" value="<?php if (isset($_POST["v-8"])) echo $_POST["v-8"]; ?>" size="1" maxlength="1">
	<input name="v-9" type="text" id="v-9" value="<?php if (isset($_POST["v-9"])) echo $_POST["v-9"]; ?>" size="1" maxlength="1">
	<input name="v-10" type="text" id="v-10" value="<?php if (isset($_POST["v-10"])) echo $_POST["v-10"]; ?>" size="1" maxlength="1">
	<input name="v-11" type="text" id="v-11" value="<?php if (isset($_POST["v-11"])) echo $_POST["v-11"]; ?>" size="1" maxlength="1">
	<input name="v-12" type="text" id="v-12" value="<?php if (isset($_POST["v-12"])) echo $_POST["v-12"]; ?>" size="1" maxlength="1">
	<input name="v-13" type="text" id="v-13" value="<?php if (isset($_POST["v-13"])) echo $_POST["v-13"]; ?>" size="1" maxlength="1">
	<input name="v-14" type="text" id="v-14" value="<?php if (isset($_POST["v-14"])) echo $_POST["v-14"]; ?>" size="1" maxlength="1">
	<input name="v-15" type="text" id="v-15" value="<?php if (isset($_POST["v-15"])) echo $_POST["v-15"]; ?>" size="1" maxlength="1">
	<input name="v-16" type="text" id="v-16" value="<?php if (isset($_POST["v-16"])) echo $_POST["v-16"]; ?>" size="1" maxlength="1">
	<input name="v-17" type="text" id="v-17" value="<?php if (isset($_POST["v-17"])) echo $_POST["v-17"]; ?>" size="1" maxlength="1">




	<br>
	
<p><input name="submit" type="submit" id="submit" value="Download PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>