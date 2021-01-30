<?php if (isset($_POST["submit"])) {
	$img = $_POST['signature1'];
	$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img));
	file_put_contents('protocol_data/signature1.png', $data); 
	$path = './protocol_data/signature1.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$signature_img1 = 'data:image/' . $type . ';base64,' . base64_encode($data); 
	$img = $_POST['signature2'];
	$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img));
	file_put_contents('protocol_data/signature2.png', $data); 
	$path = './protocol_data/signature2.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$signature_img2 = 'data:image/' . $type . ';base64,' . base64_encode($data); ?> 
<style>
	#bckground {
		position: fixed; 
		width: 720px; 
		height: 1017px; 
		margin: 0px; 
		z-index: -1; 
	}
	#sig_img1 {
		position: fixed; 
		left: 88px; 
		top: 905px; 
		height: 15px;
		width: 630px;
	}
	#sig_img2 {
		position: fixed; 
		left: 88px; 
		top: 965px; 
		height: 45px;
		width: 630px;		
	}
	input[type='text']{
		position: absolute;
		font-size: 0.5em;
	}

	#vin {
		top: 120px;
		left: 84px;
		width: 256px;		
	}

	#model {
		top: 146px;
		left: 84px;
		width: 256px;
		height: 16px;	
	}

	#color{
		top: 168px;
		left: 84px;
		width: 256px;
		height: 14px;
	}

	.r1{
    top: 502px;
    height: 19px;
	}
	.r2{
    top: 528px;
    height: 20px;
	}
	.r3{
    top: 555px;
    height: 20px;
	}
	.r4{
    top: 581px;
    height: 20px;
	}
	.r5{
    top: 608px;
    height: 20px;
	}
	.r6{
    top: 635px;
    height: 19px;
	}

	.am {
	left: 84px;
	width: 45px;
	}

	.ad {
    left: 136px;
    width: 45px;
	}
	.ar {
    left: 188px;
    width: 47px;
	}
	.bm {
    left: 244px;
    width: 44px;
	}
	.bd {
    left: 295px;
    width: 45px;
	}
	.br {
    left: 347px;
    width: 47px;
	}
	.cm {
    left: 403px;
    width: 44px;
	}
	.cd {
    left: 454px;
    width: 45px;
	}
	.cr {
    left: 505px;
    width: 47px;
	}
	.dm {
    left: 561px;
    width: 44px;
	}
	.dd {
    left: 612px;
    width: 45px;
	}
	.dr {
    left: 665px;
    width: 47px;
	}

	.classA {
		left: 84px;
		width: 151px;
	}

	
	.classB {
		left: 244px;
		width: 151px;
	}


	.classC {
		left: 403px;
		width: 151px;
	}


	.classD {
		left: 561px;
		width: 151px;
	}

	.pozn {
		top: 662px;
		height: 61px;
	}

	.location {
    top: 783px;
    height: 14px;	
	}
	.date {
    top: 804px;
    height: 15px;	
	}
	.giver {
    top: 826px;
    height: 25px;
	}
	.truck {
    top: 858px;
    height: 15px;	
	}
	.gname {
    top: 880px;
    height: 15px;	
	}
	.receiver {
    top: 919px;
    height: 15px;	
	}
	.rname {
    top: 940px;
    height: 15px;	
	}

</style>
<?php } else { ?>
<style>


	input[type='text']{
		position: absolute;
		font-size:40px;
		text-align:center;
	}

	#vin {
	top: 420px;
	height: 78px;
    left: 304px;
    width: 891px;
	}


	#model {
    top: 502px;
    left: 304px;
    width: 891px;
	height: 78px;
	
	}
	#color {
    top: 585px;
    left: 304px;
    width: 891px;
	height: 65px;
	}

	.r1{
    top: 1715px;
    height: 86px;
	}
	.r2{
    top: 1804px;
    height: 87px;
	}
	.r3{
    top: 1894px;
    height: 88px;
	}
	.r4{
    top: 1984px;
    height: 89px;
	}
	.r5{
    top: 2075px;
    height: 89px;
	}
	.r6{
    top: 2165px;
    height: 86px;
	}

	.am {
	left: 304px;
	width: 173px;
	}
	.ad {
    left: 479px;
    width: 175px;
	}
	.ar {
    left: 656px;
    width: 183px;
	}
	.bm {
    left: 847px;
    width: 173px;
	}
	.bd {
    left: 1022px;
    width: 175px;
	}
	.br {
    left: 1199px;
    width: 183px;
	}
	.cm {
    left: 1390px;
    width: 173px;
	}
	.cd {
    left: 1565px;
    width: 175px;
	}
	.cr {
    left: 1740px;
    width: 183px;
	}
	.dm {
    left: 1930px;
    width: 173px;
	}
	.dd {
    left: 2105px;
    width: 175px;
	}
	.dr {
    left: 2283px;
    width: 182px;
	}

	.classA {
		left: 304px;
		width: 536px;
	}

	
	.classB {
		left: 847px;
		width: 536px;
	}


	.classC {
		left: 1390px;
		width: 533px;
	}


	.classD {
		left: 1930px;
		width: 535px;
	}



	.pozn {
    top: 2257px;
    height: 228px;
	}

	.location {
    top: 2666px;
    height: 69px;
	}
	.date {
    top: 2737px;
    height: 72px;
	}
	.giver {
    top: 2814px;
    height: 106px;
	}
	.truck {
    top: 2921px;
    height: 72px;
	}
	.gname {
    top: 2994px;
    height: 72px;
	}
	.receiver {
    top: 3127px;
    height: 68px;
	}
	.rname {
    top: 3197px;
    height: 72px;
	}
	canvas#signature1 {
		position: absolute; 
  		border: 2px solid black;		  
		left: 300px; 
		top: 3068px; 
		
	}
	canvas#signature2 {
		position: absolute; 
  		border: 2px solid black;		  
		left: 300px; 
		top: 3270px; 
		
	}
	
	.wrap {
    display: flex;
	justify-content: center;
	font-family: Verdana, Geneva, Tahoma, sans-serif;
}

	#next {
  background-color: #f85f6a;
  font-weight: bold;
  margin: 10px;
  padding: 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
  color: white;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
}
</style>
<?php } ?>

<?php
	$path = './pictures/skoda-protocol.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>	
	<img id="bckground" src="<?php echo $base64?>">
  <div id="o-back">
    <form method="post">			
	<input name="model" type="text" id="model" value="<?php if (isset($_POST["model"])) echo $_POST["model"]; ?>" size="20" maxlength="20">
	<input name="color" type="text" id="color" value="<?php if (isset($_POST["color"])) echo $_POST["color"]; ?>" size="20" maxlength="20">
	<input name="vin" type="text" id="vin"  value="<?php if (isset($_POST["vin"])) echo  $_POST["vin"]; ?>" size="20" minlength="17" maxlength="17">
	<input name="AM1" type="text" class="r1 am" id="AM1" value="<?php if (isset($_POST["AM1"])) echo $_POST["AM1"]; ?>" size="4" maxlength="4">
	<input name="AM2" type="text" class="r2 am" id="AM2" value="<?php if (isset($_POST["AM2"])) echo $_POST["AM2"]; ?>" size="4" maxlength="4">
	<input name="AM3" type="text" class="r3 am" id="AM3" value="<?php if (isset($_POST["AM3"])) echo $_POST["AM3"]; ?>" size="4" maxlength="4">
	<input name="AM4" type="text" class="r4 am" id="AM4" value="<?php if (isset($_POST["AM4"])) echo $_POST["AM4"]; ?>" size="4" maxlength="4">
	<input name="AM5" type="text" class="r5 am" id="AM5" value="<?php if (isset($_POST["AM5"])) echo $_POST["AM5"]; ?>" size="4" maxlength="4">
	<input name="AM6" type="text" class="r6 am" id="AM6" value="<?php if (isset($_POST["AM6"])) echo $_POST["AM6"]; ?>" size="4" maxlength="4">
	
	<input name="AD1" type="text" class="r1 ad" id="AD1" value="<?php if (isset($_POST["AD1"])) echo $_POST["AD1"]; ?>" size="4" maxlength="4">
	<input name="AD2" type="text" class="r2 ad" id="AD2" value="<?php if (isset($_POST["AD2"])) echo $_POST["AD2"]; ?>" size="4" maxlength="4">
	<input name="AD3" type="text" class="r3 ad" id="AD3" value="<?php if (isset($_POST["AD3"])) echo $_POST["AD3"]; ?>" size="4" maxlength="4">
	<input name="AD4" type="text" class="r4 ad" id="AD4" value="<?php if (isset($_POST["AD4"])) echo $_POST["AD4"]; ?>" size="4" maxlength="4">
	<input name="AD5" type="text" class="r5 ad" id="AD5" value="<?php if (isset($_POST["AD5"])) echo $_POST["AD5"]; ?>" size="4" maxlength="4">
	<input name="AD6" type="text" class="r6 ad" id="AD6" value="<?php if (isset($_POST["AD6"])) echo $_POST["AD6"]; ?>" size="4" maxlength="4">

	<input name="AR1" type="text" class="r1 ar" id="AR1" value="<?php if (isset($_POST["AR1"])) echo $_POST["AR1"]; ?>" size="4" maxlength="4">
	<input name="AR2" type="text" class="r2 ar" id="AR2" value="<?php if (isset($_POST["AR2"])) echo $_POST["AR2"]; ?>" size="4" maxlength="4">
	<input name="AR3" type="text" class="r3 ar" id="AR3" value="<?php if (isset($_POST["AR3"])) echo $_POST["AR3"]; ?>" size="4" maxlength="4">
	<input name="AR4" type="text" class="r4 ar" id="AR4" value="<?php if (isset($_POST["AR4"])) echo $_POST["AR4"]; ?>" size="4" maxlength="4">
	<input name="AR5" type="text" class="r5 ar" id="AR5" value="<?php if (isset($_POST["AR5"])) echo $_POST["AR5"]; ?>" size="4" maxlength="4">
	<input name="AR6" type="text" class="r6 ar" id="AR6" value="<?php if (isset($_POST["AR6"])) echo $_POST["AR6"]; ?>" size="4" maxlength="4">

	<input name="BM1" type="text" class="r1 bm" id="BM1" value="<?php if (isset($_POST["BM1"])) echo $_POST["BM1"]; ?>" size="4" maxlength="4">
	<input name="BM2" type="text" class="r2 bm" id="BM2" value="<?php if (isset($_POST["BM2"])) echo $_POST["BM2"]; ?>" size="4" maxlength="4">
	<input name="BM3" type="text" class="r3 bm" id="BM3" value="<?php if (isset($_POST["BM3"])) echo $_POST["BM3"]; ?>" size="4" maxlength="4">
	<input name="BM4" type="text" class="r4 bm" id="BM4" value="<?php if (isset($_POST["BM4"])) echo $_POST["BM4"]; ?>" size="4" maxlength="4">
	<input name="BM5" type="text" class="r5 bm" id="BM5" value="<?php if (isset($_POST["BM5"])) echo $_POST["BM5"]; ?>" size="4" maxlength="4">
	<input name="BM6" type="text" class="r6 bm" id="BM6" value="<?php if (isset($_POST["BM6"])) echo $_POST["BM6"]; ?>" size="4" maxlength="4">

	<input name="BD1" type="text" class="r1 bd" id="BD1" value="<?php if (isset($_POST["BD1"])) echo $_POST["BD1"]; ?>" size="4" maxlength="4">
	<input name="BD2" type="text" class="r2 bd" id="BD2" value="<?php if (isset($_POST["BD2"])) echo $_POST["BD2"]; ?>" size="4" maxlength="4">
	<input name="BD3" type="text" class="r3 bd" id="BD3" value="<?php if (isset($_POST["BD3"])) echo $_POST["BD3"]; ?>" size="4" maxlength="4">
	<input name="BD4" type="text" class="r4 bd" id="BD4" value="<?php if (isset($_POST["BD4"])) echo $_POST["BD4"]; ?>" size="4" maxlength="4">
	<input name="BD5" type="text" class="r5 bd" id="BD5" value="<?php if (isset($_POST["BD5"])) echo $_POST["BD5"]; ?>" size="4" maxlength="4">
	<input name="BD6" type="text" class="r6 bd" id="BD6" value="<?php if (isset($_POST["BD6"])) echo $_POST["BD6"]; ?>" size="4" maxlength="4">

	<input name="BR1" type="text" class="r1 br" id="BR1" value="<?php if (isset($_POST["BR1"])) echo $_POST["BR1"]; ?>" size="4" maxlength="4">
	<input name="BR2" type="text" class="r2 br" id="BR2" value="<?php if (isset($_POST["BR2"])) echo $_POST["BR2"]; ?>" size="4" maxlength="4">
	<input name="BR3" type="text" class="r3 br" id="BR3" value="<?php if (isset($_POST["BR3"])) echo $_POST["BR3"]; ?>" size="4" maxlength="4">
	<input name="BR4" type="text" class="r4 br" id="BR4" value="<?php if (isset($_POST["BR4"])) echo $_POST["BR4"]; ?>" size="4" maxlength="4">
	<input name="BR5" type="text" class="r5 br" id="BR5" value="<?php if (isset($_POST["BR5"])) echo $_POST["BR5"]; ?>" size="4" maxlength="4">
	<input name="BR6" type="text" class="r6 br" id="BR6" value="<?php if (isset($_POST["BR6"])) echo $_POST["BR6"]; ?>" size="4" maxlength="4">

	<input name="CM1" type="text" class="r1 cm" id="CM1" value="<?php if (isset($_POST["CM1"])) echo $_POST["CM1"]; ?>" size="4" maxlength="4">
	<input name="CM2" type="text" class="r2 cm" id="CM2" value="<?php if (isset($_POST["CM2"])) echo $_POST["CM2"]; ?>" size="4" maxlength="4">
	<input name="CM3" type="text" class="r3 cm" id="CM3" value="<?php if (isset($_POST["CM3"])) echo $_POST["CM3"]; ?>" size="4" maxlength="4">
	<input name="CM4" type="text" class="r4 cm" id="CM4" value="<?php if (isset($_POST["CM4"])) echo $_POST["CM4"]; ?>" size="4" maxlength="4">
	<input name="CM5" type="text" class="r5 cm" id="CM5" value="<?php if (isset($_POST["CM5"])) echo $_POST["CM5"]; ?>" size="4" maxlength="4">
	<input name="CM6" type="text" class="r6 cm" id="CM6" value="<?php if (isset($_POST["CM6"])) echo $_POST["CM6"]; ?>" size="4" maxlength="4">

	<input name="CD1" type="text" class="r1 cd" id="CD1" value="<?php if (isset($_POST["CD1"])) echo $_POST["CD1"]; ?>" size="4" maxlength="4">
	<input name="CD2" type="text" class="r2 cd" id="CD2" value="<?php if (isset($_POST["CD2"])) echo $_POST["CD2"]; ?>" size="4" maxlength="4">
	<input name="CD3" type="text" class="r3 cd" id="CD3" value="<?php if (isset($_POST["CD3"])) echo $_POST["CD3"]; ?>" size="4" maxlength="4">
	<input name="CD4" type="text" class="r4 cd" id="CD4" value="<?php if (isset($_POST["CD4"])) echo $_POST["CD4"]; ?>" size="4" maxlength="4">
	<input name="CD5" type="text" class="r5 cd" id="CD5" value="<?php if (isset($_POST["CD5"])) echo $_POST["CD5"]; ?>" size="4" maxlength="4">
	<input name="CD6" type="text" class="r6 cd" id="CD6" value="<?php if (isset($_POST["CD6"])) echo $_POST["CD6"]; ?>" size="4" maxlength="4">

	<input name="CR1" type="text" class="r1 cr" id="CR1" value="<?php if (isset($_POST["CR1"])) echo $_POST["CR1"]; ?>" size="4" maxlength="4">
	<input name="CR2" type="text" class="r2 cr" id="CR2" value="<?php if (isset($_POST["CR2"])) echo $_POST["CR2"]; ?>" size="4" maxlength="4">
	<input name="CR3" type="text" class="r3 cr" id="CR3" value="<?php if (isset($_POST["CR3"])) echo $_POST["CR3"]; ?>" size="4" maxlength="4">
	<input name="CR4" type="text" class="r4 cr" id="CR4" value="<?php if (isset($_POST["CR4"])) echo $_POST["CR4"]; ?>" size="4" maxlength="4">
	<input name="CR5" type="text" class="r5 cr" id="CR5" value="<?php if (isset($_POST["CR5"])) echo $_POST["CR5"]; ?>" size="4" maxlength="4">
	<input name="CR6" type="text" class="r6 cr" id="CR6" value="<?php if (isset($_POST["CR6"])) echo $_POST["CR6"]; ?>" size="4" maxlength="4">

	<input name="DM1" type="text" class="r1 dm" id="DM1" value="<?php if (isset($_POST["DM1"])) echo $_POST["DM1"]; ?>" size="4" maxlength="4">
	<input name="DM2" type="text" class="r2 dm" id="DM2" value="<?php if (isset($_POST["DM2"])) echo $_POST["DM2"]; ?>" size="4" maxlength="4">
	<input name="DM3" type="text" class="r3 dm" id="DM3" value="<?php if (isset($_POST["DM3"])) echo $_POST["DM3"]; ?>" size="4" maxlength="4">
	<input name="DM4" type="text" class="r4 dm" id="DM4" value="<?php if (isset($_POST["DM4"])) echo $_POST["DM4"]; ?>" size="4" maxlength="4">
	<input name="DM5" type="text" class="r5 dm" id="DM5" value="<?php if (isset($_POST["DM5"])) echo $_POST["DM5"]; ?>" size="4" maxlength="4">
	<input name="DM6" type="text" class="r6 dm" id="DM6" value="<?php if (isset($_POST["DM6"])) echo $_POST["DM6"]; ?>" size="4" maxlength="4">

	<input name="DD1" type="text" class="r1 dd" id="DD1" value="<?php if (isset($_POST["DD1"])) echo $_POST["DD1"]; ?>" size="4" maxlength="4">
	<input name="DD2" type="text" class="r2 dd" id="DD2" value="<?php if (isset($_POST["DD2"])) echo $_POST["DD2"]; ?>" size="4" maxlength="4">
	<input name="DD3" type="text" class="r3 dd" id="DD3" value="<?php if (isset($_POST["DD3"])) echo $_POST["DD3"]; ?>" size="4" maxlength="4">
	<input name="DD4" type="text" class="r4 dd" id="DD4" value="<?php if (isset($_POST["DD4"])) echo $_POST["DD4"]; ?>" size="4" maxlength="4">
	<input name="DD5" type="text" class="r5 dd" id="DD5" value="<?php if (isset($_POST["DD5"])) echo $_POST["DD5"]; ?>" size="4" maxlength="4">
	<input name="DD6" type="text" class="r6 dd" id="DD6" value="<?php if (isset($_POST["DD6"])) echo $_POST["DD6"]; ?>" size="4" maxlength="4">
	
	<input name="DR1" type="text" class="r1 dr" id="DR1" value="<?php if (isset($_POST["DR1"])) echo $_POST["DR1"]; ?>" size="4" maxlength="4">
	<input name="DR2" type="text" class="r2 dr" id="DR2" value="<?php if (isset($_POST["DR2"])) echo $_POST["DR2"]; ?>" size="4" maxlength="4">
	<input name="DR3" type="text" class="r3 dr" id="DR3" value="<?php if (isset($_POST["DR3"])) echo $_POST["DR3"]; ?>" size="4" maxlength="4">
	<input name="DR4" type="text" class="r4 dr" id="DR4" value="<?php if (isset($_POST["DR4"])) echo $_POST["DR4"]; ?>" size="4" maxlength="4">
	<input name="DR5" type="text" class="r5 dr" id="DR5" value="<?php if (isset($_POST["DR5"])) echo $_POST["DR5"]; ?>" size="4" maxlength="4">
	<input name="DR6" type="text" class="r6 dr" id="DR6" value="<?php if (isset($_POST["DR6"])) echo $_POST["DR6"]; ?>" size="4" maxlength="4">
		
	<input name="poznA" type="text" class="classA pozn" id="poznA" value="<?php if (isset($_POST["poznA"])) echo $_POST["poznA"]; ?>" size="4" maxlength="50">
	<input name="poznB" type="text" class="classB pozn" id="poznB" value="<?php if (isset($_POST["poznB"])) echo $_POST["poznB"]; ?>" size="4" maxlength="50">
	<input name="poznC" type="text" class="classC pozn" id="poznC" value="<?php if (isset($_POST["poznC"])) echo $_POST["poznC"]; ?>" size="4" maxlength="50">
	<input name="poznD" type="text" class="classD pozn" id="poznD" value="<?php if (isset($_POST["poznD"])) echo $_POST["poznD"]; ?>" size="4" maxlength="50">

	<input name="locationA" type="text" class="classA location" id="locationA" value="<?php if (isset($_POST["locationA"])) echo $_POST["locationA"]; ?>" size="4" maxlength="50">
	<input name="locationB" type="text" class="classB location" id="locationB" value="<?php if (isset($_POST["locationB"])) echo $_POST["locationB"]; ?>" size="4" maxlength="50">
	<input name="locationC" type="text" class="classC location" id="locationC" value="<?php if (isset($_POST["locationC"])) echo $_POST["locationC"]; ?>" size="4" maxlength="50">
	<input name="locationD" type="text" class="classD location" id="locationD" value="<?php if (isset($_POST["locationD"])) echo $_POST["locationD"]; ?>" size="4" maxlength="50">

	<input name="dateA" type="text" class="classA date" id="dateA" value="<?php if (isset($_POST["dateA"])) echo $_POST["dateA"]; ?>" size="4" maxlength="50">
	<input name="dateB" type="text" class="classB date" id="dateB" value="<?php if (isset($_POST["dateB"])) echo $_POST["dateB"]; ?>" size="4" maxlength="50">
	<input name="dateC" type="text" class="classC date" id="dateC" value="<?php if (isset($_POST["dateC"])) echo $_POST["dateC"]; ?>" size="4" maxlength="50">
	<input name="dateD" type="text" class="classD date" id="dateD" value="<?php if (isset($_POST["dateD"])) echo $_POST["dateD"]; ?>" size="4" maxlength="50">

	<input name="giverA" type="text" class="classA giver" id="giverA" value="<?php if (isset($_POST["giverA"])) echo $_POST["giverA"]; ?>" size="4" maxlength="50">
	<input name="giverB" type="text" class="classB giver" id="giverB" value="<?php if (isset($_POST["giverB"])) echo $_POST["giverB"]; ?>" size="4" maxlength="50">
	<input name="giverC" type="text" class="classC giver" id="giverC" value="<?php if (isset($_POST["giverC"])) echo $_POST["giverC"]; ?>" size="4" maxlength="50">
	<input name="giverD" type="text" class="classD giver" id="giverD" value="<?php if (isset($_POST["giverD"])) echo $_POST["giverD"]; ?>" size="4" maxlength="50">

	<input name="truckA" type="text" class="classA truck" id="truckA" value="<?php if (isset($_POST["truckA"])) echo $_POST["truckA"]; ?>" size="4" maxlength="50">
	<input name="truckB" type="text" class="classB truck" id="truckB" value="<?php if (isset($_POST["truckB"])) echo $_POST["truckB"]; ?>" size="4" maxlength="50">
	<input name="truckC" type="text" class="classC truck" id="truckC" value="<?php if (isset($_POST["truckC"])) echo $_POST["truckC"]; ?>" size="4" maxlength="50">
	<input name="truckD" type="text" class="classD truck" id="truckD" value="<?php if (isset($_POST["truckD"])) echo $_POST["truckD"]; ?>" size="4" maxlength="50">

	<input name="gnameA" type="text" class="classA gname" id="gnameA" value="<?php if (isset($_POST["gnameA"])) echo $_POST["gnameA"]; ?>" size="4" maxlength="50">
	<input name="gnameB" type="text" class="classB gname" id="gnameB" value="<?php if (isset($_POST["gnameB"])) echo $_POST["gnameB"]; ?>" size="4" maxlength="50">
	<input name="gnameC" type="text" class="classC gname" id="gnameC" value="<?php if (isset($_POST["gnameC"])) echo $_POST["gnameC"]; ?>" size="4" maxlength="50">
	<input name="gnameD" type="text" class="classD gname" id="gnameD" value="<?php if (isset($_POST["gnameD"])) echo $_POST["gnameD"]; ?>" size="4" maxlength="50">
	
	<input name="receiverA" type="text" class="classA receiver" id="receiverA" value="<?php if (isset($_POST["receiverA"])) echo $_POST["receiverA"]; ?>" size="4" maxlength="50">
	<input name="receiverB" type="text" class="classB receiver" id="receiverB" value="<?php if (isset($_POST["receiverB"])) echo $_POST["receiverB"]; ?>" size="4" maxlength="50">
	<input name="receiverC" type="text" class="classC receiver" id="receiverC" value="<?php if (isset($_POST["receiverC"])) echo $_POST["receiverC"]; ?>" size="4" maxlength="50">
	<input name="receiverD" type="text" class="classD receiver" id="receiverD" value="<?php if (isset($_POST["receiverD"])) echo $_POST["receiverD"]; ?>" size="4" maxlength="50">

	<input name="rnameA" type="text" class="classA rname" id="rnameA" value="<?php if (isset($_POST["rnameA"])) echo $_POST["rnameA"]; ?>" size="4" maxlength="50">
	<input name="rnameB" type="text" class="classB rname" id="rnameB" value="<?php if (isset($_POST["rnameB"])) echo $_POST["rnameB"]; ?>" size="4" maxlength="50">
	<input name="rnameC" type="text" class="classC rname" id="rnameC" value="<?php if (isset($_POST["rnameC"])) echo $_POST["rnameC"]; ?>" size="4" maxlength="50">
	<input name="rnameD" type="text" class="classD rname" id="rnameD" value="<?php if (isset($_POST["rnameD"])) echo $_POST["rnameD"]; ?>" size="4" maxlength="50">
	
	<?php if (isset($_POST["submit"])) { ?>
		<img id="sig_img1" src="<?php echo $signature_img1?>">
		<img id="sig_img2" src="<?php echo $signature_img2?>">
	<?php } else { ?>
		<canvas id="signature1" width="2162" height="49"></canvas>
		<input type="hidden" name="signature1" />
		<canvas id="signature2" width="2162" height="170"></canvas>
		<input type="hidden" name="signature2" />
	<?php 
	 } ?>
	<br>	

<p class="wrap"><input name="submit" type="submit" id="next" value="Next" <?php if (isset($_POST['submit'])) echo 'style="display: none;"'; ?>></p>
</form>
