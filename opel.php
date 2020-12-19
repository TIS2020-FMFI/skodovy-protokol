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
	#model {
		position: absolute;  
		top: 250px; 		
		left: 165px; /* upravene */
		width: 775px; /* upravene */	
	}
/* pridany kod zaciatok */
	#truckno {
		position: absolute;  
		top: 390px; 		
		left: 165px; 
		width: 775px; 	
	}
	#waybill {
		position: absolute;  
		top: 460px; 		
		left: 165px; 
		width: 775px; 	
	}
	#remarks {
		position: absolute;  
		top: 1670px; 		
		left: 165px; 
		width: 775px; 	
	}
	#remarkss {
		position: absolute;  
		top: 1720px; 		
		left: 165px; 
		width: 775px; 	
	}
	#chassis1 {
		position: absolute;  
		top: 330px; 		
		left: 166px; 
		width: 50px; 	
	}
	#chassis2 {
		position: absolute;  
		top: 330px; 		
		left: 218px; 
		width: 50px; 	
	}
	#chassis3 {
		position: absolute;  
		top: 330px; 		
		left: 270px; 
		width: 50px; 	
	}
	#chassis4 {
		position: absolute;  
		top: 330px; 		
		left: 323px; 
		width: 50px; 	
	}
	#chassis5 {
		position: absolute;  
		top: 330px; 		
		left: 375px; 
		width: 50px; 	
	}
	#chassis6 {
		position: absolute;  
		top: 330px; 		
		left: 427px; 
		width: 50px; 	
	}
	#chassis7 {
		position: absolute;  
		top: 330px; 		
		left: 479px; 
		width: 50px; 	
	}
	#chassis8 {
		position: absolute;  
		top: 330px; 		
		left: 531px; 
		width: 50px; 	
	}
	#chassis9 {
		position: absolute;  
		top: 330px; 		
		left: 584px; 
		width: 50px; 	
	}
	#chassis10 {
		position: absolute;  
		top: 330px; 		
		left: 636px; 
		width: 50px; 	
	}
	#chassis11 {
		position: absolute;  
		top: 330px; 		
		left: 688px; 
		width: 50px; 	
	}
	#chassis12 {
		position: absolute;  
		top: 330px; 		
		left: 740px; 
		width: 50px; 	
	}
	#chassis13 {
		position: absolute;  
		top: 330px; 		
		left: 792px; 
		width: 50px; 	
	}
	#chassis14 {
		position: absolute;  
		top: 330px; 		
		left: 845px; 
		width: 50px; 	
	}
	#chassis15 {
		position: absolute;  
		top: 330px; 		
		left: 897px; 
		width: 50px; 	
	}
	








/* pridany kod koniec */
</style>
<?php } ?>

<?php
	$path = './pictures/opel-protocol.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>	
	<img src="<?php echo $base64?>">
  <div id="o-back">
    <form method="post">			
	<input name="model" type="text" id="model" value="<?php if (isset($_POST["model"])) echo $_POST["model"]; ?>" size="20" maxlength="60"> <!-- upravene -->
	

	<br>


<!-- pridany kod zaciatok -->

<!-- zakladne info -->
<input name="truckno" type="text" id="truckno" value="<?php if (isset($_POST["truckno"])) echo $_POST["truckno"]; ?>" size="20" maxlength="60">
<input name="waybill" type="text" id="waybill" value="<?php if (isset($_POST["waybill"])) echo $_POST["waybill"]; ?>" size="20" maxlength="60">
<input name="remarks" type="text" id="remarks" value="<?php if (isset($_POST["remarks"])) echo $_POST["remarks"]; ?>" size="20" maxlength="60">
<input name="remarkss" type="text" id="remarkss" value="<?php if (isset($_POST["remarkss"])) echo $_POST["remarkss"]; ?>" size="20" maxlength="60">
<input name="chassis1" type="text" id="chassis1" value="<?php if (isset($_POST["chassis1"])) echo $_POST["chassis1"]; ?>" size="3" maxlength="3">
<input name="chassis2" type="text" id="chassis2" value="<?php if (isset($_POST["chassis2"])) echo $_POST["chassis2"]; ?>" size="3" maxlength="3">
<input name="chassis3" type="text" id="chassis3" value="<?php if (isset($_POST["chassis3"])) echo $_POST["chassis3"]; ?>" size="3" maxlength="3">
<input name="chassis4" type="text" id="chassis4" value="<?php if (isset($_POST["chassis4"])) echo $_POST["chassis4"]; ?>" size="3" maxlength="3">
<input name="chassis5" type="text" id="chassis5" value="<?php if (isset($_POST["chassis5"])) echo $_POST["chassis5"]; ?>" size="3" maxlength="3">
<input name="chassis6" type="text" id="chassis6" value="<?php if (isset($_POST["chassis6"])) echo $_POST["chassis6"]; ?>" size="3" maxlength="3">
<input name="chassis7" type="text" id="chassis7" value="<?php if (isset($_POST["chassis7"])) echo $_POST["chassis7"]; ?>" size="3" maxlength="3">
<input name="chassis8" type="text" id="chassis8" value="<?php if (isset($_POST["chassis8"])) echo $_POST["chassis8"]; ?>" size="3" maxlength="3">
<input name="chassis9" type="text" id="chassis9" value="<?php if (isset($_POST["chassis9"])) echo $_POST["chassis9"]; ?>" size="3" maxlength="3">
<input name="chassis10" type="text" id="chassis10" value="<?php if (isset($_POST["chassis10"])) echo $_POST["chassis10"]; ?>" size="3" maxlength="3">
<input name="chassis11" type="text" id="chassis11" value="<?php if (isset($_POST["chassis11"])) echo $_POST["chassis11"]; ?>" size="3" maxlength="3">
<input name="chassis12" type="text" id="chassis12" value="<?php if (isset($_POST["chassis12"])) echo $_POST["chassis12"]; ?>" size="3" maxlength="3">
<input name="chassis13" type="text" id="chassis13" value="<?php if (isset($_POST["chassis13"])) echo $_POST["chassis13"]; ?>" size="3" maxlength="3">
<input name="chassis14" type="text" id="chassis14" value="<?php if (isset($_POST["chassis14"])) echo $_POST["chassis14"]; ?>" size="3" maxlength="3">
<input name="chassis15" type="text" id="chassis15" value="<?php if (isset($_POST["chassis15"])) echo $_POST["chassis15"]; ?>" size="3" maxlength="3">
	



<!-- tabulka napravo -->

<!-- transportation section dole -->

<!-- pridany kod koniec -->
	
<p><input name="submit" type="submit" id="submit" value="Download PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>