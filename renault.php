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
		top: 430px; 		
		left: 240px; 
		width: 235px; 	
	}

	#origin {
		position: absolute;  
		top: 355px; 		
		left: 240px; 
		width: 235px; 	
	}

	#n {
		position: absolute;  
		top: 200px; 		
		left: 1100px; 
		width: 450px; 	
	}

	#destination {
		position: absolute;  
		top: 340px; 		
		left: 655px; 
		width: 290px; 	
	}
	#transport {
		position: absolute;  
		top: 340px; 		
		left: 1270px; 
		width: 300px; 	
	}

	#chassis-1 {
		position: absolute;  
		top: 420px; 		
		left: 783px; 
		width: 45px; 	
	}
	#chassis-2 {
		position: absolute;  
		top: 420px; 		
		left: 830px; 
		width: 44px; 	
	}
	#chassis-3 {
		position: absolute;  
		top: 420px; 		
		left: 876px; 
		width: 45px; 	
	}
	#chassis-4 {
		position: absolute;  
		top: 420px; 		
		left: 923px; 
		width: 44px; 	
	}
	#chassis-5 {
		position: absolute;  
		top: 420px; 		
		left: 969px; 
		width: 45px; 	
	}
	#chassis-6 {
		position: absolute;  
		top: 420px; 		
		left: 1016px; 
		width: 45px; 	
	}
	#chassis-7 {
		position: absolute;  
		top: 420px; 		
		left: 1062px; 
		width: 45px; 	
	}
	#chassis-8 {
		position: absolute;  
		top: 420px; 		
		left: 1109px; 
		width: 45px; 	
	}
	#chassis-9 {
		position: absolute;  
		top: 420px; 		
		left: 1155px; 
		width: 45px; 	
	}
	#chassis-10 {
		position: absolute;  
		top: 420px; 		
		left: 1202px; 
		width: 45px; 	
	}
	#chassis-11 {
		position: absolute;  
		top: 420px; 		
		left: 1248px; 
		width: 45px; 	
	}
	#chassis-12 {
		position: absolute;  
		top: 420px; 		
		left: 1295px; 
		width: 45px; 	
	}
	#chassis-13 {
		position: absolute;  
		top: 420px; 		
		left: 1341px; 
		width: 45px; 	
	}
	#chassis-14 {
		position: absolute;  
		top: 420px; 		
		left: 1388px; 
		width: 45px; 	
	}
	#chassis-15 {
		position: absolute;  
		top: 420px; 		
		left: 1435px; 
		width: 44px; 	
	}
	#chassis-16 {
		position: absolute;  
		top: 420px; 		
		left: 1481px; 
		width: 45px; 	
	}
	#chassis-17 {
		position: absolute;  
		top: 420px; 		
		left: 1528px; 
		width: 45px; 	
	}
	#damages-a {
		position: absolute;  
		top: 493px; 		
		left: 438px; 
		width: 20px; 	
	}
	#damages-b {
		position: absolute;  
		top: 493px; 		
		left: 557px; 
		width: 20px; 	
	}
	#damages-c {
		position: absolute;  
		top: 493px; 		
		left: 665px; 
		width: 20px; 	
	}
	#km {
		position: absolute;  
		top: 575px; 		
		left: 210px; 
		width: 100px; 	
	}
	#order {
		position: absolute;  
		top: 575px; 		
		left: 460px; 
		width: 300px; 	
	}
	#reg {
		position: absolute;  
		top: 640px; 		
		left: 410px; 
		width: 190px; 	
	}
	#road {
		position: absolute;  
		top: 640px; 		
		left: 765px; 
		width: 136px; 	
	}
	#rail {
		position: absolute;  
		top: 640px; 		
		left: 903px; 
		width: 136px; 	
	}
	#sea {
		position: absolute;  
		top: 640px; 		
		left: 1040px; 
		width: 117px; 	
	}
	#barge {
		position: absolute;  
		top: 640px; 		
		left: 1159px; 
		width: 136px; 	
	}
	#compound {
		position: absolute;  
		top: 640px; 		
		left: 1297px; 
		width: 156px; 	
	}
	#factory {
		position: absolute;  
		top: 640px; 		
		left: 1455px; 
		width: 135px; 	
	}
	#loc-1 {
		position: absolute;  
		top: 1250px; 		
		left: 135px; 
		width: 167px; 	
	}
	#nat-1 {
		position: absolute;  
		top: 1250px; 		
		left: 304px; 
		width: 114px; 	
	}
	#sev-1 {
		position: absolute;  
		top: 1250px; 		
		left: 420px; 
		width: 110px; 	
	}
	#ref-1 {
		position: absolute;  
		top: 1250px; 		
		left: 532px; 
		width: 232px; 	
	}
	#add-1 {
		position: absolute;  
		top: 1250px; 		
		left: 766px; 
		width: 826px; 	
	}

	#loc-2 {
		position: absolute;  
		top: 1310px; 		
		left: 135px; 
		width: 167px; 	
	}
	#nat-2 {
		position: absolute;  
		top: 1310px; 		
		left: 304px; 
		width: 114px; 	
	}
	#sev-2 {
		position: absolute;  
		top: 1310px; 		
		left: 420px; 
		width: 110px; 	
	}
	#ref-2 {
		position: absolute;  
		top: 1310px; 		
		left: 532px; 
		width: 232px; 	
	}
	#add-2 {
		position: absolute;  
		top: 1310px; 		
		left: 766px; 
		width: 826px; 	
	}


	#loc-3 {
		position: absolute;  
		top: 1380px; 		
		left: 135px; 
		width: 167px; 	
	}
	#nat-3 {
		position: absolute;  
		top: 1380px; 		
		left: 304px; 
		width: 114px; 	
	}
	#sev-3 {
		position: absolute;  
		top: 1380px; 		
		left: 420px; 
		width: 110px; 	
	}
	#ref-3 {
		position: absolute;  
		top: 1380px; 		
		left: 532px; 
		width: 232px; 	
	}
	#add-3 {
		position: absolute;  
		top: 1380px; 		
		left: 766px; 
		width: 826px; 	
	}

	#loc-4 {
		position: absolute;  
		top: 1440px; 		
		left: 135px; 
		width: 167px; 	
	}
	#nat-4 {
		position: absolute;  
		top: 1440px; 		
		left: 304px; 
		width: 114px; 	
	}
	#sev-4 {
		position: absolute;  
		top: 1440px; 		
		left: 420px; 
		width: 110px; 	
	}
	#ref-4 {
		position: absolute;  
		top: 1440px; 		
		left: 532px; 
		width: 232px; 	
	}
	#add-4 {
		position: absolute;  
		top: 1440px; 		
		left: 766px; 
		width: 826px; 	
	}


	#loc-5 {
		position: absolute;  
		top: 1490px; 		
		left: 135px; 
		width: 167px; 	
	}
	#nat-5 {
		position: absolute;  
		top: 1490px; 		
		left: 304px; 
		width: 114px; 	
	}
	#sev-5 {
		position: absolute;  
		top: 1490px; 		
		left: 420px; 
		width: 110px; 	
	}
	#ref-5 {
		position: absolute;  
		top: 1490px; 		
		left: 532px; 
		width: 232px; 	
	}
	#add-5 {
		position: absolute;  
		top: 1490px; 		
		left: 766px; 
		width: 826px; 	
	}
	#doc {
		position: absolute;  
		top: 1550px; 		
		left: 133px; 
		width: 20px; 	
	}
	#yes {
		position: absolute;  
		top: 1593px; 		
		left: 1218px; 
		width: 20px; 	
	}
	#no {
		position: absolute;  
		top: 1593px; 		
		left: 1415px; 
		width: 20px; 	
	}
	#rem-1 {
		position: absolute;  
		top: 1635px; 		
		left: 450px; 
		width: 1090px; 	
	}
	#rem-2 {
		position: absolute;  
		top: 1680px; 		
		left: 130px; 
		width: 1410px; 	
	}

</style>
<?php } ?>

<?php
	$path = './pictures/renault-protocol.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>	
	<img src="<?php echo $base64?>">
  <div id="o-back">
    <form method="post">

<!-- horna cast -->
    <input name="n" type="text" id="n" value="<?php if (isset($_POST["n"])) echo $_POST["n"]; ?>" size="30" maxlength="30">
	<input name="destination" type="text" id="destination" value="<?php if (isset($_POST["destination"])) echo $_POST["destination"]; ?>" size="20" maxlength="20">
	<input name="transport" type="text" id="transport" value="<?php if (isset($_POST["transport"])) echo $_POST["transport"]; ?>" size="20" maxlength="20">
	<input name="origin" type="text" id="origin" value="<?php if (isset($_POST["origin"])) echo $_POST["origin"]; ?>" size="17" maxlength="17">
	<input name="model" type="text" id="model" value="<?php if (isset($_POST["model"])) echo $_POST["model"]; ?>" size="17" maxlength="17">
	<input name="chassis-1" type="text" id="chassis-1" value="<?php if (isset($_POST["chassis-1"])) echo $_POST["chassis-1"]; ?>" size="3" maxlength="3">
	<input name="chassis-2" type="text" id="chassis-2" value="<?php if (isset($_POST["chassis-2"])) echo $_POST["chassis-2"]; ?>" size="3" maxlength="3">
	<input name="chassis-3" type="text" id="chassis-3" value="<?php if (isset($_POST["chassis-3"])) echo $_POST["chassis-3"]; ?>" size="3" maxlength="3">
	<input name="chassis-4" type="text" id="chassis-4" value="<?php if (isset($_POST["chassis-4"])) echo $_POST["chassis-4"]; ?>" size="3" maxlength="3">
	<input name="chassis-5" type="text" id="chassis-5" value="<?php if (isset($_POST["chassis-5"])) echo $_POST["chassis-5"]; ?>" size="3" maxlength="3">
	<input name="chassis-6" type="text" id="chassis-6" value="<?php if (isset($_POST["chassis-6"])) echo $_POST["chassis-6"]; ?>" size="3" maxlength="3">
	<input name="chassis-7" type="text" id="chassis-7" value="<?php if (isset($_POST["chassis-7"])) echo $_POST["chassis-7"]; ?>" size="3" maxlength="3">
	<input name="chassis-8" type="text" id="chassis-8" value="<?php if (isset($_POST["chassis-8"])) echo $_POST["chassis-8"]; ?>" size="3" maxlength="3">
	<input name="chassis-9" type="text" id="chassis-9" value="<?php if (isset($_POST["chassis-9"])) echo $_POST["chassis-9"]; ?>" size="3" maxlength="3">
	<input name="chassis-10" type="text" id="chassis-10" value="<?php if (isset($_POST["chassis-10"])) echo $_POST["chassis-10"]; ?>" size="3" maxlength="3">
	<input name="chassis-11" type="text" id="chassis-11" value="<?php if (isset($_POST["chassis-11"])) echo $_POST["chassis-11"]; ?>" size="3" maxlength="3">
	<input name="chassis-12" type="text" id="chassis-12" value="<?php if (isset($_POST["chassis-12"])) echo $_POST["chassis-12"]; ?>" size="3" maxlength="3">
	<input name="chassis-13" type="text" id="chassis-13" value="<?php if (isset($_POST["chassis-13"])) echo $_POST["chassis-13"]; ?>" size="3" maxlength="3">
	<input name="chassis-14" type="text" id="chassis-14" value="<?php if (isset($_POST["chassis-14"])) echo $_POST["chassis-14"]; ?>" size="3" maxlength="3">
	<input name="chassis-15" type="text" id="chassis-15" value="<?php if (isset($_POST["chassis-15"])) echo $_POST["chassis-15"]; ?>" size="3" maxlength="3">
	<input name="chassis-16" type="text" id="chassis-16" value="<?php if (isset($_POST["chassis-16"])) echo $_POST["chassis-16"]; ?>" size="3" maxlength="3">
	<input name="chassis-17" type="text" id="chassis-17" value="<?php if (isset($_POST["chassis-17"])) echo $_POST["chassis-17"]; ?>" size="3" maxlength="3">
	<input name="damages-a" type="text" id="damages-a" value="<?php if (isset($_POST["damages-a"])) echo $_POST["damages-a"]; ?>" size="1" maxlength="1">
	<input name="damages-b" type="text" id="damages-b" value="<?php if (isset($_POST["damages-b"])) echo $_POST["damages-b"]; ?>" size="1" maxlength="1">
	<input name="damages-c" type="text" id="damages-c" value="<?php if (isset($_POST["damages-c"])) echo $_POST["damages-c"]; ?>" size="1" maxlength="1">
	<input name="km" type="text" id="km" value="<?php if (isset($_POST["km"])) echo $_POST["km"]; ?>" size="10" maxlength="10">
	<input name="order" type="text" id="order" value="<?php if (isset($_POST["order"])) echo $_POST["order"]; ?>" size="25" maxlength="25">
	<input name="reg" type="text" id="reg" value="<?php if (isset($_POST["reg"])) echo $_POST["reg"]; ?>" size="15" maxlength="15">
	<input name="road" type="text" id="road" value="<?php if (isset($_POST["road"])) echo $_POST["road"]; ?>" size="10" maxlength="10">
	<input name="rail" type="text" id="rail" value="<?php if (isset($_POST["rail"])) echo $_POST["rail"]; ?>" size="10" maxlength="10">
	<input name="sea" type="text" id="sea" value="<?php if (isset($_POST["sea"])) echo $_POST["sea"]; ?>" size="8" maxlength="8">
	<input name="barge" type="text" id="barge" value="<?php if (isset($_POST["barge"])) echo $_POST["barge"]; ?>" size="9" maxlength="9">
	<input name="compound" type="text" id="compound" value="<?php if (isset($_POST["compound"])) echo $_POST["compound"]; ?>" size="10" maxlength="10">
	<input name="factory" type="text" id="factory" value="<?php if (isset($_POST["factory"])) echo $_POST["factory"]; ?>" size="8" maxlength="8">
	
	<!-- prostredna cast -->
	<input name="loc-1" type="text" id="loc-1" value="<?php if (isset($_POST["loc-1"])) echo $_POST["loc-1"]; ?>" size="15" maxlength="15">
	<input name="nat-1" type="text" id="nat-1" value="<?php if (isset($_POST["nat-1"])) echo $_POST["nat-1"]; ?>" size="8" maxlength="8">
	<input name="sev-1" type="text" id="sev-1" value="<?php if (isset($_POST["sev-1"])) echo $_POST["sev-1"]; ?>" size="8" maxlength="8">
	<input name="ref-1" type="text" id="ref-1" value="<?php if (isset($_POST["ref-1"])) echo $_POST["ref-1"]; ?>" size="18" maxlength="18">
	<input name="add-1" type="text" id="add-1" value="<?php if (isset($_POST["add-1"])) echo $_POST["add-1"]; ?>" size="65" maxlength="65">
	
	<input name="loc-2" type="text" id="loc-2" value="<?php if (isset($_POST["loc-2"])) echo $_POST["loc-2"]; ?>" size="15" maxlength="15">
	<input name="nat-2" type="text" id="nat-2" value="<?php if (isset($_POST["nat-2"])) echo $_POST["nat-2"]; ?>" size="8" maxlength="8">
	<input name="sev-2" type="text" id="sev-2" value="<?php if (isset($_POST["sev-2"])) echo $_POST["sev-2"]; ?>" size="8" maxlength="8">
	<input name="ref-2" type="text" id="ref-2" value="<?php if (isset($_POST["ref-2"])) echo $_POST["ref-2"]; ?>" size="18" maxlength="18">
	<input name="add-2" type="text" id="add-2" value="<?php if (isset($_POST["add-2"])) echo $_POST["add-2"]; ?>" size="65" maxlength="65">
	
	<input name="loc-3" type="text" id="loc-3" value="<?php if (isset($_POST["loc-3"])) echo $_POST["loc-3"]; ?>" size="15" maxlength="15">
	<input name="nat-3" type="text" id="nat-3" value="<?php if (isset($_POST["nat-3"])) echo $_POST["nat-3"]; ?>" size="8" maxlength="8">
	<input name="sev-3" type="text" id="sev-3" value="<?php if (isset($_POST["sev-3"])) echo $_POST["sev-3"]; ?>" size="8" maxlength="8">
	<input name="ref-3" type="text" id="ref-3" value="<?php if (isset($_POST["ref-3"])) echo $_POST["ref-3"]; ?>" size="18" maxlength="18">
	<input name="add-3" type="text" id="add-3" value="<?php if (isset($_POST["add-3"])) echo $_POST["add-3"]; ?>" size="65" maxlength="65">
	
	<input name="loc-4" type="text" id="loc-4" value="<?php if (isset($_POST["loc-4"])) echo $_POST["loc-4"]; ?>" size="15" maxlength="15">
	<input name="nat-4" type="text" id="nat-4" value="<?php if (isset($_POST["nat-4"])) echo $_POST["nat-4"]; ?>" size="8" maxlength="8">
	<input name="sev-4" type="text" id="sev-4" value="<?php if (isset($_POST["sev-4"])) echo $_POST["sev-4"]; ?>" size="8" maxlength="8">
	<input name="ref-4" type="text" id="ref-4" value="<?php if (isset($_POST["ref-4"])) echo $_POST["ref-4"]; ?>" size="18" maxlength="18">
	<input name="add-4" type="text" id="add-4" value="<?php if (isset($_POST["add-4"])) echo $_POST["add-4"]; ?>" size="65" maxlength="65">
	
	<input name="loc-5" type="text" id="loc-5" value="<?php if (isset($_POST["loc-5"])) echo $_POST["loc-5"]; ?>" size="15" maxlength="15">
	<input name="nat-5" type="text" id="nat-5" value="<?php if (isset($_POST["nat-5"])) echo $_POST["nat-5"]; ?>" size="8" maxlength="8">
	<input name="sev-5" type="text" id="sev-5" value="<?php if (isset($_POST["sev-5"])) echo $_POST["sev-5"]; ?>" size="8" maxlength="8">
	<input name="ref-5" type="text" id="ref-5" value="<?php if (isset($_POST["ref-5"])) echo $_POST["ref-5"]; ?>" size="18" maxlength="18">
	<input name="add-5" type="text" id="add-5" value="<?php if (isset($_POST["add-5"])) echo $_POST["add-5"]; ?>" size="65" maxlength="65">
	
	<input name="doc" type="text" id="doc" value="<?php if (isset($_POST["doc"])) echo $_POST["doc"]; ?>" size="1" maxlength="1">
	<input name="yes" type="text" id="yes" value="<?php if (isset($_POST["yes"])) echo $_POST["yes"]; ?>" size="1" maxlength="1">
	<input name="no" type="text" id="no" value="<?php if (isset($_POST["no"])) echo $_POST["no"]; ?>" size="1" maxlength="1">
	<input name="rem-1" type="text" id="rem-1" value="<?php if (isset($_POST["rem-1"])) echo $_POST["rem-1"]; ?>" size="90" maxlength="90">
	<input name="rem-2" type="text" id="rem-2" value="<?php if (isset($_POST["rem-2"])) echo $_POST["rem-2"]; ?>" size="100" maxlength="100">
	



	<!-- dolna cast -->

	<br>
	
<p><input name="submit" type="submit" id="submit" value="Download PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>