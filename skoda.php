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

	#vin {
	top: 420px;
	height: 72px;
    left: 304px;
    width: 884px;
	}


	#model {
    top: 502px;
    left: 304px;
    width: 884px;
	height: 72px;
	
	}
	#color {
    top: 585px;
    left: 304px;
    width: 884px;
	height: 59px;
	}
	/* .tab{

	} */

	.r1{
    top: 1715px;
    height: 81px;
	}
	.r2{
    top: 1804px;
    height: 82px;
	}
	.r3{
    top: 1894px;
    height: 82px;
	}
	.r4{
    top: 1984px;
    height: 83px;
	}
	.r5{
    top: 2075px;
    height: 82px;
	}
	.r6{
    top: 2165px;
    height: 80px;
	}

	#AM1,
	#AM2,
	#AM3,
	#AM4,
	#AM5,
	#AM6 {
	left: 304px;
	width: 166px;
	}
	#AD1,
	#AD2,
	#AD3,
	#AD4,
	#AD5,
	#AD6 {
    left: 479px;
    width: 168px;
	}
	#AR1,
	#AR2,
	#AR3,
	#AR4,
	#AR5,
	#AR6 {
    left: 656px;
    width: 177px;
	}
	#BM1,
	#BM2,
	#BM3,
	#BM4,
	#BM5,
	#BM6 {
    left: 847px;
    width: 165px;
	}
	#BD1,
	#BD2,
	#BD3,
	#BD4,
	#BD5,
	#BD6 {
    left: 1022px;
    width: 168px;
	}
	#BR1,
	#BR2,
	#BR3,
	#BR4,
	#BR5,
	#BR6 {
    left: 1199px;
    width: 177px;
	}
	#CM1,
	#CM2,
	#CM3,
	#CM4,
	#CM5,
	#CM6 {
    left: 1390px;
    width: 165px;
	}
	#CD1,
	#CD2,
	#CD3,
	#CD4,
	#CD5,
	#CD6 {
    left: 1565px;
    width: 165px;
	}
	#CR1,
	#CR2,
	#CR3,
	#CR4,
	#CR5,
	#CR6 {
    left: 1740px;
    width: 176px;
	}
	#DM1,
	#DM2,
	#DM3,
	#DM4,
	#DM5,
	#DM6 {
    left: 1930px;
    width: 166px;
	}
	#DD1,
	#DD2,
	#DD3,
	#DD4,
	#DD5,
	#DD6 {
    left: 2105px;
    width: 168px;
	}
	#DR1,
	#DR2,
	#DR3,
	#DR4,
	#DR5,
	#DR6 {
    left: 2283px;
    width: 176px;
	}

	#poznA {
	left: 304px;
    top: 2257px;
    width: 529px;
    height: 221px;
	}

	#locationA {
	left: 304px;
    top: 2666px;
    width: 529px;
    height: 64px;
	}
	#dateA {
	left: 304px;
    top: 2737px;
    width: 529px;
    height: 65px;
	}
	#giverA {
	left: 304px;
    top: 2814px;
    width: 529px;
    height: 100px;
	}
	#truckA {
	left: 304px;
    top: 2921px;
    width: 529px;
    height: 66px;
	}
	#gnameA {
	left: 304px;
    top: 2994px;
    width: 529px;
    height: 66px;
	}
	#receiverA {
	left: 304px;
    top: 3127px;
    width: 529px;
    height: 63px;
	}
	#rnameA {
	left: 304px;
    top: 3197px;
    width: 529px;
    height: 66px;
	}

	#poznB {
	left: 847px;
    top: 2257px;
    width: 529px;
    height: 221px;
	}
	#locationB {
	left: 847px;
    top: 2666px;
    width: 529px;
    height: 64px;
	}
	#dateB {
	left: 847px;
    top: 2737px;
    width: 529px;
    height: 65px;
	}
	#giverB {
	left: 847px;
    top: 2814px;
    width: 529px;
    height: 100px;
	}
	#truckB {
	left: 847px;
    top: 2921px;
    width: 529px;
    height: 66px;
	}
	#gnameB {
	left: 847px;
    top: 2994px;
    width: 529px;
    height: 66px;
	}
	#receiverB {
	left: 847px;
    top: 3127px;
    width: 529px;
    height: 63px;
	}
	#rnameB {
	left: 847px;
    top: 3197px;
    width: 529px;
    height: 66px;
	}

	#poznC {
	left: 1390px;
    top: 2257px;
    width: 526px;
    height: 221px;
	}
	#locationC {
	left: 1390px;
    top: 2666px;
    width: 526px;
    height: 64px;
	}
	#dateC {
	left: 1390px;
    top: 2737px;
    width: 526px;
    height: 65px;
	}
	#giverC {
	left: 1390px;
    top: 2814px;
    width: 526px;
    height: 100px;
	}
	#truckC {
	left: 1390px;
    top: 2921px;
    width: 526px;
    height: 66px;
	}
	#gnameC {
	left: 1390px;
    top: 2994px;
    width: 526px;
    height: 66px;
	}
	#receiverC {
	left: 1390px;
    top: 3127px;
    width: 526px;
    height: 63px;
	}
	#rnameC {
	left: 1390px;
    top: 3197px;
    width: 526px;
    height: 66px;
	}

	#poznD {
	left: 1930px;
    top: 2257px;
    width: 529px;
    height: 221px;
	}
	#locationD {
	left: 1930px;
    top: 2666px;
    width: 529px;
    height: 64px;
	}
	#dateD {
	left: 1930px;
    top: 2737px;
    width: 529px;
    height: 65px;
	}
	#giverD {
	left: 1930px;
    top: 2814px;
    width: 529px;
    height: 100px;
	}
	#truckD {
	left: 1930px;
    top: 2921px;
    width: 529px;
    height: 66px;
	}
	#gnameD {
	left: 1930px;
    top: 2994px;
    width: 529px;
    height: 66px;
	}
	#receiver {
	left: 1930px;
    top: 3127px;
    width: 529px;
    height: 63px;
	}
	#rnameD {
	left: 1930px;
    top: 3197px;
    width: 529px;
    height: 66px;
	}
	
</style>
<?php } ?>

<?php
	$path = './pictures/skoda-protocol.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>	
	<img src="<?php echo $base64?>">
  <div id="o-back">
    <form method="post">			
	<input name="model" type="text" id="model" value="<?php if (isset($_POST["model"])) echo $_POST["model"]; ?>" size="20" maxlength="20">
	<input name="color" type="text" id="color" value="<?php if (isset($_POST["color"])) echo $_POST["color"]; ?>" size="20" maxlength="20">
	<input name="vin" type="text" id="vin"  value="<?php if (isset($_POST["vin"])) echo  $_POST["vin"]; ?>" size="20" minlength="17" maxlength="17">
	<input name="AM1" type="text" class="r1" id="AM1" value="<?php if (isset($_POST["AM1"])) echo $_POST["AM1"]; ?>" size="4" maxlength="4">
	<input name="AM2" type="text" class="r2" id="AM2" value="<?php if (isset($_POST["AM2"])) echo $_POST["AM2"]; ?>" size="4" maxlength="4">
	<input name="AM3" type="text" class="r3" id="AM3" value="<?php if (isset($_POST["AM3"])) echo $_POST["AM3"]; ?>" size="4" maxlength="4">
	<input name="AM4" type="text" class="r4" id="AM4" value="<?php if (isset($_POST["AM4"])) echo $_POST["AM4"]; ?>" size="4" maxlength="4">
	<input name="AM5" type="text" class="r5" id="AM5" value="<?php if (isset($_POST["AM5"])) echo $_POST["AM5"]; ?>" size="4" maxlength="4">
	<input name="AM6" type="text" class="r6" id="AM6" value="<?php if (isset($_POST["AM6"])) echo $_POST["AM6"]; ?>" size="4" maxlength="4">
	
	<input name="AD1" type="text" class="r1" id="AD1" value="<?php if (isset($_POST["AD1"])) echo $_POST["AD1"]; ?>" size="4" maxlength="4">
	<input name="AD2" type="text" class="r2" id="AD2" value="<?php if (isset($_POST["AD2"])) echo $_POST["AD2"]; ?>" size="4" maxlength="4">
	<input name="AD3" type="text" class="r3" id="AD3" value="<?php if (isset($_POST["AD3"])) echo $_POST["AD3"]; ?>" size="4" maxlength="4">
	<input name="AD4" type="text" class="r4" id="AD4" value="<?php if (isset($_POST["AD4"])) echo $_POST["AD4"]; ?>" size="4" maxlength="4">
	<input name="AD5" type="text" class="r5" id="AD5" value="<?php if (isset($_POST["AD5"])) echo $_POST["AD5"]; ?>" size="4" maxlength="4">
	<input name="AD6" type="text" class="r6" id="AD6" value="<?php if (isset($_POST["AD6"])) echo $_POST["AD6"]; ?>" size="4" maxlength="4">

	<input name="AR1" type="text" class="r1" id="AR1" value="<?php if (isset($_POST["AR1"])) echo $_POST["AR1"]; ?>" size="4" maxlength="4">
	<input name="AR2" type="text" class="r2" id="AR2" value="<?php if (isset($_POST["AR2"])) echo $_POST["AR2"]; ?>" size="4" maxlength="4">
	<input name="AR3" type="text" class="r3" id="AR3" value="<?php if (isset($_POST["AR3"])) echo $_POST["AR3"]; ?>" size="4" maxlength="4">
	<input name="AR4" type="text" class="r4" id="AR4" value="<?php if (isset($_POST["AR4"])) echo $_POST["AR4"]; ?>" size="4" maxlength="4">
	<input name="AR5" type="text" class="r5" id="AR5" value="<?php if (isset($_POST["AR5"])) echo $_POST["AR5"]; ?>" size="4" maxlength="4">
	<input name="AR6" type="text" class="r6" id="AR6" value="<?php if (isset($_POST["AR6"])) echo $_POST["AR6"]; ?>" size="4" maxlength="4">

	<input name="BM1" type="text" class="r1" id="BM1" value="<?php if (isset($_POST["BM1"])) echo $_POST["BM1"]; ?>" size="4" maxlength="4">
	<input name="BM2" type="text" class="r2" id="BM2" value="<?php if (isset($_POST["BM2"])) echo $_POST["BM2"]; ?>" size="4" maxlength="4">
	<input name="BM3" type="text" class="r3" id="BM3" value="<?php if (isset($_POST["BM3"])) echo $_POST["BM3"]; ?>" size="4" maxlength="4">
	<input name="BM4" type="text" class="r4" id="BM4" value="<?php if (isset($_POST["BM4"])) echo $_POST["BM4"]; ?>" size="4" maxlength="4">
	<input name="BM5" type="text" class="r5" id="BM5" value="<?php if (isset($_POST["BM5"])) echo $_POST["BM5"]; ?>" size="4" maxlength="4">
	<input name="BM6" type="text" class="r6" id="BM6" value="<?php if (isset($_POST["BM6"])) echo $_POST["BM6"]; ?>" size="4" maxlength="4">

	<input name="BD1" type="text" class="r1" id="BD1" value="<?php if (isset($_POST["BD1"])) echo $_POST["BD1"]; ?>" size="4" maxlength="4">
	<input name="BD2" type="text" class="r2" id="BD2" value="<?php if (isset($_POST["BD2"])) echo $_POST["BD2"]; ?>" size="4" maxlength="4">
	<input name="BD3" type="text" class="r3" id="BD3" value="<?php if (isset($_POST["BD3"])) echo $_POST["BD3"]; ?>" size="4" maxlength="4">
	<input name="BD4" type="text" class="r4" id="BD4" value="<?php if (isset($_POST["BD4"])) echo $_POST["BD4"]; ?>" size="4" maxlength="4">
	<input name="BD5" type="text" class="r5" id="BD5" value="<?php if (isset($_POST["BD5"])) echo $_POST["BD5"]; ?>" size="4" maxlength="4">
	<input name="BD6" type="text" class="r6" id="BD6" value="<?php if (isset($_POST["BD6"])) echo $_POST["BD6"]; ?>" size="4" maxlength="4">

	<input name="BR1" type="text" class="r1" id="BR1" value="<?php if (isset($_POST["BR1"])) echo $_POST["BR1"]; ?>" size="4" maxlength="4">
	<input name="BR2" type="text" class="r2" id="BR2" value="<?php if (isset($_POST["BR2"])) echo $_POST["BR2"]; ?>" size="4" maxlength="4">
	<input name="BR3" type="text" class="r3" id="BR3" value="<?php if (isset($_POST["BR3"])) echo $_POST["BR3"]; ?>" size="4" maxlength="4">
	<input name="BR4" type="text" class="r4" id="BR4" value="<?php if (isset($_POST["BR4"])) echo $_POST["BR4"]; ?>" size="4" maxlength="4">
	<input name="BR5" type="text" class="r5" id="BR5" value="<?php if (isset($_POST["BR5"])) echo $_POST["BR5"]; ?>" size="4" maxlength="4">
	<input name="BR6" type="text" class="r6" id="BR6" value="<?php if (isset($_POST["BR6"])) echo $_POST["BR6"]; ?>" size="4" maxlength="4">

	<input name="CM1" type="text" class="r1" id="CM1" value="<?php if (isset($_POST["CM1"])) echo $_POST["CM1"]; ?>" size="4" maxlength="4">
	<input name="CM2" type="text" class="r2" id="CM2" value="<?php if (isset($_POST["CM2"])) echo $_POST["CM2"]; ?>" size="4" maxlength="4">
	<input name="CM3" type="text" class="r3" id="CM3" value="<?php if (isset($_POST["CM3"])) echo $_POST["CM3"]; ?>" size="4" maxlength="4">
	<input name="CM4" type="text" class="r4" id="CM4" value="<?php if (isset($_POST["CM4"])) echo $_POST["CM4"]; ?>" size="4" maxlength="4">
	<input name="CM5" type="text" class="r5" id="CM5" value="<?php if (isset($_POST["CM5"])) echo $_POST["CM5"]; ?>" size="4" maxlength="4">
	<input name="CM6" type="text" class="r6" id="CM6" value="<?php if (isset($_POST["CM6"])) echo $_POST["CM6"]; ?>" size="4" maxlength="4">

	<input name="CD1" type="text" class="r1" id="CD1" value="<?php if (isset($_POST["CD1"])) echo $_POST["CD1"]; ?>" size="4" maxlength="4">
	<input name="CD2" type="text" class="r2" id="CD2" value="<?php if (isset($_POST["CD2"])) echo $_POST["CD2"]; ?>" size="4" maxlength="4">
	<input name="CD3" type="text" class="r3" id="CD3" value="<?php if (isset($_POST["CD3"])) echo $_POST["CD3"]; ?>" size="4" maxlength="4">
	<input name="CD4" type="text" class="r4" id="CD4" value="<?php if (isset($_POST["CD4"])) echo $_POST["CD4"]; ?>" size="4" maxlength="4">
	<input name="CD5" type="text" class="r5" id="CD5" value="<?php if (isset($_POST["CD5"])) echo $_POST["CD5"]; ?>" size="4" maxlength="4">
	<input name="CD6" type="text" class="r6" id="CD6" value="<?php if (isset($_POST["CD6"])) echo $_POST["CD6"]; ?>" size="4" maxlength="4">

	<input name="CR1" type="text" class="r1" id="CR1" value="<?php if (isset($_POST["CR1"])) echo $_POST["CR1"]; ?>" size="4" maxlength="4">
	<input name="CR2" type="text" class="r2" id="CR2" value="<?php if (isset($_POST["CR2"])) echo $_POST["CR2"]; ?>" size="4" maxlength="4">
	<input name="CR3" type="text" class="r3" id="CR3" value="<?php if (isset($_POST["CR3"])) echo $_POST["CR3"]; ?>" size="4" maxlength="4">
	<input name="CR4" type="text" class="r4" id="CR4" value="<?php if (isset($_POST["CR4"])) echo $_POST["CR4"]; ?>" size="4" maxlength="4">
	<input name="CR5" type="text" class="r5" id="CR5" value="<?php if (isset($_POST["CR5"])) echo $_POST["CR5"]; ?>" size="4" maxlength="4">
	<input name="CR6" type="text" class="r6" id="CR6" value="<?php if (isset($_POST["CR6"])) echo $_POST["CR6"]; ?>" size="4" maxlength="4">

	<input name="DM1" type="text" class="r1" id="DM1" value="<?php if (isset($_POST["DM1"])) echo $_POST["DM1"]; ?>" size="4" maxlength="4">
	<input name="DM2" type="text" class="r2" id="DM2" value="<?php if (isset($_POST["DM2"])) echo $_POST["DM2"]; ?>" size="4" maxlength="4">
	<input name="DM3" type="text" class="r3" id="DM3" value="<?php if (isset($_POST["DM3"])) echo $_POST["DM3"]; ?>" size="4" maxlength="4">
	<input name="DM4" type="text" class="r4" id="DM4" value="<?php if (isset($_POST["DM4"])) echo $_POST["DM4"]; ?>" size="4" maxlength="4">
	<input name="DM5" type="text" class="r5" id="DM5" value="<?php if (isset($_POST["DM5"])) echo $_POST["DM5"]; ?>" size="4" maxlength="4">
	<input name="DM6" type="text" class="r6" id="DM6" value="<?php if (isset($_POST["DM6"])) echo $_POST["DM6"]; ?>" size="4" maxlength="4">

	<input name="DD1" type="text" class="r1" id="DD1" value="<?php if (isset($_POST["DD1"])) echo $_POST["DD1"]; ?>" size="4" maxlength="4">
	<input name="DD2" type="text" class="r2" id="DD2" value="<?php if (isset($_POST["DD2"])) echo $_POST["DD2"]; ?>" size="4" maxlength="4">
	<input name="DD3" type="text" class="r3" id="DD3" value="<?php if (isset($_POST["DD3"])) echo $_POST["DD3"]; ?>" size="4" maxlength="4">
	<input name="DD4" type="text" class="r4" id="DD4" value="<?php if (isset($_POST["DD4"])) echo $_POST["DD4"]; ?>" size="4" maxlength="4">
	<input name="DD5" type="text" class="r5" id="DD5" value="<?php if (isset($_POST["DD5"])) echo $_POST["DD5"]; ?>" size="4" maxlength="4">
	<input name="DD6" type="text" class="r6" id="DD6" value="<?php if (isset($_POST["DD6"])) echo $_POST["DD6"]; ?>" size="4" maxlength="4">
	
	<input name="DR1" type="text" class="r1" id="DR1" value="<?php if (isset($_POST["DR1"])) echo $_POST["DR1"]; ?>" size="4" maxlength="4">
	<input name="DR2" type="text" class="r2" id="DR2" value="<?php if (isset($_POST["DR2"])) echo $_POST["DR2"]; ?>" size="4" maxlength="4">
	<input name="DR3" type="text" class="r3" id="DR3" value="<?php if (isset($_POST["DR3"])) echo $_POST["DR3"]; ?>" size="4" maxlength="4">
	<input name="DR4" type="text" class="r4" id="DR4" value="<?php if (isset($_POST["DR4"])) echo $_POST["DR4"]; ?>" size="4" maxlength="4">
	<input name="DR5" type="text" class="r5" id="DR5" value="<?php if (isset($_POST["DR5"])) echo $_POST["DR5"]; ?>" size="4" maxlength="4">
	<input name="DR6" type="text" class="r6" id="DR6" value="<?php if (isset($_POST["DR6"])) echo $_POST["DR6"]; ?>" size="4" maxlength="4">
		
	<input name="poznA" type="text" id="poznA" value="<?php if (isset($_POST["poznA"])) echo $_POST["poznA"]; ?>" size="4" maxlength="50">
	<input name="poznB" type="text" id="poznB" value="<?php if (isset($_POST["poznB"])) echo $_POST["poznB"]; ?>" size="4" maxlength="50">
	<input name="poznC" type="text" id="poznC" value="<?php if (isset($_POST["poznC"])) echo $_POST["poznC"]; ?>" size="4" maxlength="50">
	<input name="poznD" type="text" id="poznD" value="<?php if (isset($_POST["poznD"])) echo $_POST["poznD"]; ?>" size="4" maxlength="50">

	<input name="locationA" type="text" id="locationA" value="<?php if (isset($_POST["locationA"])) echo $_POST["locationA"]; ?>" size="4" maxlength="50">
	<input name="locationB" type="text" id="locationB" value="<?php if (isset($_POST["locationB"])) echo $_POST["locationB"]; ?>" size="4" maxlength="50">
	<input name="locationC" type="text" id="locationC" value="<?php if (isset($_POST["locationC"])) echo $_POST["locationC"]; ?>" size="4" maxlength="50">
	<input name="locationD" type="text" id="locationD" value="<?php if (isset($_POST["locationD"])) echo $_POST["locationD"]; ?>" size="4" maxlength="50">

	<input name="dateA" type="text" id="dateA" value="<?php if (isset($_POST["dateA"])) echo $_POST["dateA"]; ?>" size="4" maxlength="50">
	<input name="dateB" type="text" id="dateB" value="<?php if (isset($_POST["dateB"])) echo $_POST["dateB"]; ?>" size="4" maxlength="50">
	<input name="dateC" type="text" id="dateC" value="<?php if (isset($_POST["dateC"])) echo $_POST["dateC"]; ?>" size="4" maxlength="50">
	<input name="dateD" type="text" id="dateD" value="<?php if (isset($_POST["dateD"])) echo $_POST["dateD"]; ?>" size="4" maxlength="50">

	<input name="giverA" type="text" id="giverA" value="<?php if (isset($_POST["giverA"])) echo $_POST["giverA"]; ?>" size="4" maxlength="50">
	<input name="giverB" type="text" id="giverB" value="<?php if (isset($_POST["giverB"])) echo $_POST["giverB"]; ?>" size="4" maxlength="50">
	<input name="giverC" type="text" id="giverC" value="<?php if (isset($_POST["giverC"])) echo $_POST["giverC"]; ?>" size="4" maxlength="50">
	<input name="giverD" type="text" id="giverD" value="<?php if (isset($_POST["giverD"])) echo $_POST["giverD"]; ?>" size="4" maxlength="50">

	<input name="truckA" type="text" id="truckA" value="<?php if (isset($_POST["truckA"])) echo $_POST["truckA"]; ?>" size="4" maxlength="50">
	<input name="truckB" type="text" id="truckB" value="<?php if (isset($_POST["truckB"])) echo $_POST["truckB"]; ?>" size="4" maxlength="50">
	<input name="truckC" type="text" id="truckC" value="<?php if (isset($_POST["truckC"])) echo $_POST["truckC"]; ?>" size="4" maxlength="50">
	<input name="truckD" type="text" id="truckD" value="<?php if (isset($_POST["truckD"])) echo $_POST["truckD"]; ?>" size="4" maxlength="50">

	<input name="gnameA" type="text" id="gnameA" value="<?php if (isset($_POST["gnameA"])) echo $_POST["gnameA"]; ?>" size="4" maxlength="50">
	<input name="gnameB" type="text" id="gnameB" value="<?php if (isset($_POST["gnameB"])) echo $_POST["gnameB"]; ?>" size="4" maxlength="50">
	<input name="gnameC" type="text" id="gnameC" value="<?php if (isset($_POST["gnameC"])) echo $_POST["gnameC"]; ?>" size="4" maxlength="50">
	<input name="gnameD" type="text" id="gnameD" value="<?php if (isset($_POST["gnameD"])) echo $_POST["gnameD"]; ?>" size="4" maxlength="50">
	
	<input name="receiverA" type="text" id="receiverA" value="<?php if (isset($_POST["receiverA"])) echo $_POST["receiverA"]; ?>" size="4" maxlength="50">
	<input name="receiverB" type="text" id="receiverB" value="<?php if (isset($_POST["receiverB"])) echo $_POST["receiverB"]; ?>" size="4" maxlength="50">
	<input name="receiverC" type="text" id="receiverC" value="<?php if (isset($_POST["receiverC"])) echo $_POST["receiverC"]; ?>" size="4" maxlength="50">
	<input name="receiverD" type="text" id="receiverD" value="<?php if (isset($_POST["receiverD"])) echo $_POST["receiverD"]; ?>" size="4" maxlength="50">

	<input name="rnameA" type="text" id="rnameA" value="<?php if (isset($_POST["rnameA"])) echo $_POST["rnameA"]; ?>" size="4" maxlength="50">
	<input name="rnameB" type="text" id="rnameB" value="<?php if (isset($_POST["rnameB"])) echo $_POST["rnameB"]; ?>" size="4" maxlength="50">
	<input name="rnameC" type="text" id="rnameC" value="<?php if (isset($_POST["rnameC"])) echo $_POST["rnameC"]; ?>" size="4" maxlength="50">
	<input name="rnameD" type="text" id="rnameD" value="<?php if (isset($_POST["rnameD"])) echo $_POST["rnameD"]; ?>" size="4" maxlength="50">
	
	
	<br>
	
<p><input name="submit" type="submit" id="submit" value="Download PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>