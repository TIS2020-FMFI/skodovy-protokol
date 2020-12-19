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
	#deliveringA {
		position: absolute;  
		top: 1830px; 		
		left: 500px; 
		width: 207px; 	
	}
	#deliveringB {
		position: absolute;  
		top: 1830px; 		
		left: 715px; 
		width: 207px; 	
	}
	#deliveringC {
		position: absolute;  
		top: 1830px; 		
		left: 930px; 
		width: 207px; 	
	}
	#deliveringD {
		position: absolute;  
		top: 1830px; 		
		left: 1145px; 
		width: 207px; 	
	}
	#deliveringE {
		position: absolute;  
		top: 1830px; 		
		left: 1360px; 
		width: 207px; 	
	}
	#trucknoA {
		position: absolute;  
		top: 1880px; 		
		left: 500px; 
		width: 207px;	
	}
	#trucknoB {
		position: absolute;  
		top: 1880px; 		
		left: 715px; 
		width: 207px;	
	}
	#trucknoC {
		position: absolute;  
		top: 1880px; 		
		left: 930px; 
		width: 207px;	
	}
	#trucknoD {
		position: absolute;  
		top: 1880px; 		
		left: 1145px; 
		width: 207px;	
	}
	#trucknoE {
		position: absolute;  
		top: 1880px; 		
		left: 1360px; 
		width: 207px;	
	}
	#nameA {
		position: absolute;  
		top: 1970px; 		
		left: 500px; 
		width: 207px;	
	}
	#nameB {
		position: absolute;  
		top: 1970px; 		
		left: 715px; 
		width: 207px;	
	}
	#nameC {
		position: absolute;  
		top: 1970px; 		
		left: 930px; 
		width: 207px;	
	}
	#nameD {
		position: absolute;  
		top: 1970px; 		
		left: 1145px; 
		width: 207px;	
	}
	#nameE {
		position: absolute;  
		top: 1970px; 		
		left: 1360px; 
		width: 207px;	
	}
	#recievingA {
		position: absolute;  
		top: 2020px; 		
		left: 500px; 
		width: 207px;	
	}
	#recievingB {
		position: absolute;  
		top: 2020px; 		
		left: 715px; 
		width: 207px;	
	}
	#recievingC {
		position: absolute;  
		top: 2020px; 		
		left: 930px; 
		width: 207px;	
	}
	#recievingD {
		position: absolute;  
		top: 2020px; 		
		left: 1145px; 
		width: 207px;	
	}
	#recievingE {
		position: absolute;  
		top: 2020px; 		
		left: 1360px; 
		width: 207px;	
	}
	#nameofinspectorA {
		position: absolute;  
		top: 2070px; 		
		left: 500px; 
		width: 207px;	
	}
	#nameofinspectorB {
		position: absolute;  
		top: 2070px; 		
		left: 715px; 
		width: 207px;	
	}
	#nameofinspectorC {
		position: absolute;  
		top: 2070px; 		
		left: 930px; 
		width: 207px;	
	}
	#nameofinspectorD {
		position: absolute;  
		top: 2070px; 		
		left: 1145px; 
		width: 207px;	
	}
	#nameofinspectorE {
		position: absolute;  
		top: 2070px; 		
		left: 1360px; 
		width: 207px;	
	}
	#dateA {
		position: absolute;  
		top: 2160px; 		
		left: 500px; 
		width: 207px;	
	}
	#dateB {
		position: absolute;  
		top: 2160px; 		
		left: 715px; 
		width: 207px;	
	}
	#dateC {
		position: absolute;  
		top: 2160px; 		
		left: 930px; 
		width: 207px;	
	}
	#dateD {
		position: absolute;  
		top: 2160px; 		
		left: 1145px; 
		width: 207px;	
	}
	#dateE {
		position: absolute;  
		top: 2160px; 		
		left: 1360px; 
		width: 207px;	
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
<input name="deliveringA" type="text" id="deliveringA" value="<?php if (isset($_POST["deliveringA"])) echo $_POST["deliveringA"]; ?>" size="25" maxlength="25">
<input name="deliveringB" type="text" id="deliveringB" value="<?php if (isset($_POST["deliveringB"])) echo $_POST["deliveringB"]; ?>" size="25" maxlength="25">
<input name="deliveringC" type="text" id="deliveringC" value="<?php if (isset($_POST["deliveringC"])) echo $_POST["deliveringC"]; ?>" size="25" maxlength="25">
<input name="deliveringD" type="text" id="deliveringD" value="<?php if (isset($_POST["deliveringD"])) echo $_POST["deliveringD"]; ?>" size="25" maxlength="25">
<input name="deliveringE" type="text" id="deliveringE" value="<?php if (isset($_POST["deliveringE"])) echo $_POST["deliveringE"]; ?>" size="25" maxlength="25">

<input name="trucknoA" type="text" id="trucknoA" value="<?php if (isset($_POST["trucknoA"])) echo $_POST["trucknoA"]; ?>" size="25" maxlength="25">
<input name="trucknoB" type="text" id="trucknoB" value="<?php if (isset($_POST["trucknoB"])) echo $_POST["trucknoB"]; ?>" size="25" maxlength="25">
<input name="trucknoC" type="text" id="trucknoC" value="<?php if (isset($_POST["trucknoC"])) echo $_POST["trucknoC"]; ?>" size="25" maxlength="25">
<input name="trucknoD" type="text" id="trucknoD" value="<?php if (isset($_POST["trucknoD"])) echo $_POST["trucknoD"]; ?>" size="25" maxlength="25">
<input name="trucknoE" type="text" id="trucknoE" value="<?php if (isset($_POST["trucknoE"])) echo $_POST["trucknoE"]; ?>" size="25" maxlength="25">

<input name="nameA" type="text" id="nameA" value="<?php if (isset($_POST["nameA"])) echo $_POST["nameA"]; ?>" size="25" maxlength="25">
<input name="nameB" type="text" id="nameB" value="<?php if (isset($_POST["nameB"])) echo $_POST["nameB"]; ?>" size="25" maxlength="25">
<input name="nameC" type="text" id="nameC" value="<?php if (isset($_POST["nameC"])) echo $_POST["nameC"]; ?>" size="25" maxlength="25">
<input name="nameD" type="text" id="nameD" value="<?php if (isset($_POST["nameD"])) echo $_POST["nameD"]; ?>" size="25" maxlength="25">
<input name="nameE" type="text" id="nameE" value="<?php if (isset($_POST["nameE"])) echo $_POST["nameE"]; ?>" size="25" maxlength="25">

<input name="recievingA" type="text" id="recievingA" value="<?php if (isset($_POST["recievingA"])) echo $_POST["recievingA"]; ?>" size="25" maxlength="25">
<input name="recievingB" type="text" id="recievingB" value="<?php if (isset($_POST["recievingB"])) echo $_POST["recievingB"]; ?>" size="25" maxlength="25">
<input name="recievingC" type="text" id="recievingC" value="<?php if (isset($_POST["recievingC"])) echo $_POST["recievingC"]; ?>" size="25" maxlength="25">
<input name="recievingD" type="text" id="recievingD" value="<?php if (isset($_POST["recievingD"])) echo $_POST["recievingD"]; ?>" size="25" maxlength="25">
<input name="recievingE" type="text" id="recievingE" value="<?php if (isset($_POST["recievingE"])) echo $_POST["recievingE"]; ?>" size="25" maxlength="25">

<input name="nameofinspectorA" type="text" id="nameofinspectorA" value="<?php if (isset($_POST["nameofinspectorA"])) echo $_POST["nameofinspectorA"]; ?>" size="25" maxlength="25">
<input name="nameofinspectorB" type="text" id="nameofinspectorB" value="<?php if (isset($_POST["nameofinspectorB"])) echo $_POST["nameofinspectorB"]; ?>" size="25" maxlength="25">
<input name="nameofinspectorC" type="text" id="nameofinspectorC" value="<?php if (isset($_POST["nameofinspectorC"])) echo $_POST["nameofinspectorC"]; ?>" size="25" maxlength="25">
<input name="nameofinspectorD" type="text" id="nameofinspectorD" value="<?php if (isset($_POST["nameofinspectorD"])) echo $_POST["nameofinspectorD"]; ?>" size="25" maxlength="25">
<input name="nameofinspectorE" type="text" id="nameofinspectorE" value="<?php if (isset($_POST["nameofinspectorE"])) echo $_POST["nameofinspectorE"]; ?>" size="25" maxlength="25">

<input name="dateA" type="text" id="dateA" value="<?php if (isset($_POST["dateA"])) echo $_POST["dateA"]; ?>" size="25" maxlength="25">
<input name="dateB" type="text" id="dateB" value="<?php if (isset($_POST["dateB"])) echo $_POST["dateB"]; ?>" size="25" maxlength="25">
<input name="dateC" type="text" id="dateC" value="<?php if (isset($_POST["dateC"])) echo $_POST["dateC"]; ?>" size="25" maxlength="25">
<input name="dateD" type="text" id="dateD" value="<?php if (isset($_POST["dateD"])) echo $_POST["dateD"]; ?>" size="25" maxlength="25">
<input name="dateE" type="text" id="dateE" value="<?php if (isset($_POST["dateE"])) echo $_POST["dateE"]; ?>" size="25" maxlength="25">





<!-- pridany kod koniec -->
	
<p><input name="submit" type="submit" id="submit" value="Download PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>