<?php if (isset($_POST["submit"])) { ?>
<style>
	img {
		position: fixed; 
		width: 720px; 
		height: 1017px; 
		margin: 0px; 
		z-index: -1; 
	}

	input[type='text']{
		position: absolute;
	}
	
	#model {
		top: 143px; 		
		left: 92px; 
		width: 166px; 
		height: 24px;
	}

	#vin {
		top: 172px; 		
		left: 92px; 
		width: 166px; 
		height: 24px;
	}

	#plant {
	top: 387px;
    left: 203px;
    width: 110px;
    height: 21px;
}
#portexit {
	top: 387px;
    left: 318px;
    width: 110px;
    height: 21px;
}
#portentry {
	top: 387px;
    left: 434px;
    width: 110px;
    height: 21px;
}

#finaldest {
	top: 387px;
    left: 550px;
    width: 110px;
    height: 21px;
}

	form {
		font-size: 0.5em; 
	}
</style>
<?php } else { ?>
<style>
	input[type='text']{
		position: absolute;
		font-size:25px;
		text-align:center;
	}

#vdc {
	top: 277px;
    left: 155px;
    width: 463px;
    height: 39px;
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
#plant {
	top: 902px;
    left: 481px;
    width: 263px;
    height: 62px;
}
#portexit {
	top: 902px;
    left: 746px;
    width: 263px;
    height: 62px;
}
#portentry {
	top: 902px;
    left: 1011px;
    width: 263px;
    height: 62px;
}
#finaldest {
	top: 902px;
    left: 1276px;
    width: 263px;
    height: 62px;
}

.r1,.r2,.r3,.r4,.r2,.r6,.r7{
	height: 47px;
}

.r1 {
	top: 1015px;
}

.r2 {
	top: 1063px;
}

.r3 {
	top: 1111px;
}

.r4 {
	top: 1160px;
}

.r5 {
	top: 1208px;
	height: 51px;
}

.r6 {
	top: 1260px;
}

.r7 {
	top: 1307px;
	height: 65px;
}

#pposc1, #pposc2, #pposc3, #pposc4, #pposc5, #pposc6, #pposc7{
	left: 481px;
    width: 68px;
} 

#pdamc1, #pdamc2, #pdamc3, #pdamc4, #pdamc5, #pdamc6, #pdamc7{
    left: 551px;
    width: 68px;
}
#psevc1, #psevc2, #psevc3, #psevc4, #psevc5, #psevc6, #psevc7{
    left: 620px;
    width: 124px;
}

#xposc1, #xposc2, #xposc3, #xposc4, #xposc5, #xposc6, #xposc7{
    left: 746px;
    width: 68px;
}
#xdamc1, #xdamc2, #xdamc3, #xdamc4, #xdamc5, #xdamc6, #xdamc7{
    left: 815px;
    width: 68px;
}
#xsevc1, #xsevc2, #xsevc3, #xsevc4, #xsevc5, #xsevc6, #xsevc7{
    left: 885px;
    width: 124px;
}

#nposc1, #nposc2, #nposc3, #nposc4, #nposc5, #nposc6, #nposc7{
    left: 1011px;
    width: 68px;
}
#ndamc1, #ndamc2, #ndamc3, #ndamc4, #ndamc5, #ndamc6, #ndamc7{
    left: 1080px;
    width: 68px;
}
#nsevc1, #nsevc2, #nsevc3, #nsevc4, #nsevc5, #nsevc6, #nsevc7{
    left: 1149px;
    width: 124px;
}

#fposc1, #fposc2, #fposc3, #fposc4, #fposc5, #fposc6, #fposc7{
    left: 1276px;
    width: 68px;
}
#fdamc1, #fdamc2, #fdamc3, #fdamc4, #fdamc5, #fdamc6, #fdamc7{
    left: 1345px;
    width: 68px;
}
#fsevc1, #fsevc2, #fsevc3, #fsevc4, #fsevc5, #fsevc6, #fsevc7{
    left: 1414px;
    width: 124px;
}


#plantremarks {
	top: 1374px;
    left: 481px;
    width: 263px;
    height: 141px;
}
#exitremarks {
	top: 1374px;
    left: 746px;
    width: 263px;
    height: 141;
}
#entremarks {
	top: 1374px;
    left: 1011px;
    width: 263px;
    height: 141;
}
#finalremarks {
	top: 1374px;
    left: 1276px;
    width: 263px;
    height: 141px;
}

#pa1 {
	top: 1553px;
    left: 481px;
    width: 68px;
    height: 37px;
}#pa2 {
	top: 1553px;
    left: 550px;
    width: 69px;
    height: 37px;
}#pa3 {
	top: 1553px;
    left: 620px;
    width: 61px;
    height: 37px;
}#pa4 {
	top: 1553px;
    left: 683px;
    width: 60px;
    height: 37px;
}

#xa1 {
	top: 1553px;
    left: 746px;
    width: 68px;
    height: 37px;
}#xa2 {
	top: 1553px;
    left: 815px;
    width: 69px;
    height: 37px;
}#xa3 {
	top: 1553px;
    left: 885px;
    width: 61px;
    height: 37px;
}#xa4 {
	top: 1553px;
    left: 948px;
    width: 60px;
    height: 37px;
}

#na1 {
	top: 1553px;
    left: 1011px;
    width: 68px;
    height: 37px;
}#na2 {
	top: 1553px;
    left: 1080px;
    width: 69px;
    height: 37px;
}#na3 {
	top: 1553px;
    left: 1150px;
    width: 61px;
    height: 37px;
}#na4 {
	top: 1553px;
    left: 1213px;
    width: 60px;
    height: 37px;
}

#fa1 {
	top: 1553px;
    left: 1276px;
    width: 68px;
    height: 37px;
}#fa2 {
	top: 1553px;
    left: 1345px;
    width: 69px;
    height: 37px;
}#fa3 {
	top: 1553px;
    left: 1415px;
    width: 61px;
    height: 37px;
}#fa4 {
	top: 1553px;
    left: 1478px;
    width: 60px;
    height: 37px;
}

.vyssirp,
.vyssirx,
.vyssirn,
.vyssirf {
	width: 263px;
    height: 43px;
}
.vyssirp {
	left: 481px;
}

.vyssirx {
	left: 746px;
}

.vyssirn {
	left: 1011px;
}

.vyssirf {
	left: 1276px;
}

#pdeliv {
	top: 1592px;
}
#ptruckno {
	top: 1637px;
}
#pname {
	top: 1728px;
}
#precname {
	top: 1774px;
}
#pins {
	top: 1820px;
}
#pdate {
	top: 1910px;
	height: 36px;
}

#xdeliv {
	top: 1592px;
}
#xtruckno {
	top: 1637px;
}
#xname {
	top: 1728px;
}
#xrecname {
	top: 1774px;
}
#xins {
	top: 1820px;
}
#xdate {
	top: 1910px;
	height: 36px;
}

#ndeliv {
	top: 1592px;
}
#ntruckno {
	top: 1637px;
}
#nname {
	top: 1728px;
}
#nrecname {
	top: 1774px;
}
#nins {
	top: 1820px;
}
#ndate {
	top: 1910px;
	height: 36px;
}

#fdeliv {
	top: 1592px;
}
#ftruckno {
	top: 1637px;
}
#fname {
	top: 1728px;
}
#frecname {
	top: 1774px;
}
#fins {
	top: 1820px;
}
#fdate {
	top: 1910px;
	height: 36px;
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
	<input name="vdc" type="text" id="vdc" value="<?php if (isset($_POST["vdc"])) echo $_POST["vdc"]; ?>" size="20" maxlength="20">
	<input name="model" type="text" id="model" value="<?php if (isset($_POST["model"])) echo $_POST["model"]; ?>" size="20" maxlength="20">
	<input name="vin" type="text" id="vin"  value="<?php if (isset($_POST["vin"])) echo  $_POST["vin"]; ?>" size="20" minlength="17" maxlength="17">
	<input name="plant" type="text" id="plant" value="<?php if (isset($_POST["plant"])) echo $_POST["plant"]; ?>" size="20" maxlength="20">
	<input name="portexit" type="text" id="portexit" value="<?php if (isset($_POST["portexit"])) echo $_POST["portexit"]; ?>" size="20" maxlength="20">
	<input name="portentry" type="text" id="portentry" value="<?php if (isset($_POST["portentry"])) echo $_POST["portentry"]; ?>" size="20" maxlength="20">
	<input name="finaldest" type="text" id="finaldest" value="<?php if (isset($_POST["finaldest"])) echo $_POST["finaldest"]; ?>" size="20" maxlength="20">

	<input name="pposc1" class="r1" type="text" id="pposc1" value="<?php if (isset($_POST["pposc1"])) echo $_POST["pposc1"]; ?>" size="2" maxlength="2">
	<input name="pdamc1" class="r1" type="text" id="pdamc1" value="<?php if (isset($_POST["pdamc1"])) echo $_POST["pdamc1"]; ?>" size="1" maxlength="1">
	<input name="psevc1" class="r1" type="text" id="psevc1" value="<?php if (isset($_POST["psevc1"])) echo $_POST["psevc1"]; ?>" size="1" maxlength="1">
	<input name="xposc1" class="r1" type="text" id="xposc1" value="<?php if (isset($_POST["xposc1"])) echo $_POST["xposc1"]; ?>" size="2" maxlength="2">
	<input name="xdamc1" class="r1" type="text" id="xdamc1" value="<?php if (isset($_POST["xdamc1"])) echo $_POST["xdamc1"]; ?>" size="1" maxlength="1">
	<input name="xsevc1" class="r1" type="text" id="xsevc1" value="<?php if (isset($_POST["xsevc1"])) echo $_POST["xsevc1"]; ?>" size="1" maxlength="1">
	<input name="nposc1" class="r1" type="text" id="nposc1" value="<?php if (isset($_POST["nposc1"])) echo $_POST["nposc1"]; ?>" size="2" maxlength="2">
	<input name="ndamc1" class="r1" type="text" id="ndamc1" value="<?php if (isset($_POST["ndamc1"])) echo $_POST["ndamc1"]; ?>" size="1" maxlength="1">
	<input name="nsevc1" class="r1" type="text" id="nsevc1" value="<?php if (isset($_POST["nsevc1"])) echo $_POST["nsevc1"]; ?>" size="1" maxlength="1">
	<input name="fposc1" class="r1" type="text" id="fposc1" value="<?php if (isset($_POST["fposc1"])) echo $_POST["fposc1"]; ?>" size="2" maxlength="2">
	<input name="fdamc1" class="r1" type="text" id="fdamc1" value="<?php if (isset($_POST["fdamc1"])) echo $_POST["fdamc1"]; ?>" size="1" maxlength="1">
	<input name="fsevc1" class="r1" type="text" id="fsevc1" value="<?php if (isset($_POST["fsevc1"])) echo $_POST["fsevc1"]; ?>" size="1" maxlength="1">

	<input name="pposc2" class="r2" type="text" id="pposc2" value="<?php if (isset($_POST["pposc2"])) echo $_POST["pposc2"]; ?>" size="2" maxlength="2">
	<input name="pdamc2" class="r2" type="text" id="pdamc2" value="<?php if (isset($_POST["pdamc2"])) echo $_POST["pdamc2"]; ?>" size="1" maxlength="1">
	<input name="psevc2" class="r2" type="text" id="psevc2" value="<?php if (isset($_POST["psevc2"])) echo $_POST["psevc2"]; ?>" size="1" maxlength="1">
	<input name="xposc2" class="r2" type="text" id="xposc2" value="<?php if (isset($_POST["xposc2"])) echo $_POST["xposc2"]; ?>" size="2" maxlength="2">
	<input name="xdamc2" class="r2" type="text" id="xdamc2" value="<?php if (isset($_POST["xdamc2"])) echo $_POST["xdamc2"]; ?>" size="1" maxlength="1">
	<input name="xsevc2" class="r2" type="text" id="xsevc2" value="<?php if (isset($_POST["xsevc2"])) echo $_POST["xsevc2"]; ?>" size="1" maxlength="1">
	<input name="nposc2" class="r2" type="text" id="nposc2" value="<?php if (isset($_POST["nposc2"])) echo $_POST["nposc2"]; ?>" size="2" maxlength="2">
	<input name="ndamc2" class="r2" type="text" id="ndamc2" value="<?php if (isset($_POST["ndamc2"])) echo $_POST["ndamc2"]; ?>" size="1" maxlength="1">
	<input name="nsevc2" class="r2" type="text" id="nsevc2" value="<?php if (isset($_POST["nsevc2"])) echo $_POST["nsevc2"]; ?>" size="1" maxlength="1">
	<input name="fposc2" class="r2" type="text" id="fposc2" value="<?php if (isset($_POST["fposc2"])) echo $_POST["fposc2"]; ?>" size="2" maxlength="2">
	<input name="fdamc2" class="r2" type="text" id="fdamc2" value="<?php if (isset($_POST["fdamc2"])) echo $_POST["fdamc2"]; ?>" size="1" maxlength="1">
	<input name="fsevc2" class="r2" type="text" id="fsevc2" value="<?php if (isset($_POST["fsevc2"])) echo $_POST["fsevc2"]; ?>" size="1" maxlength="1">

	<input name="pposc3" class="r3" type="text" id="pposc3" value="<?php if (isset($_POST["pposc3"])) echo $_POST["pposc3"]; ?>" size="2" maxlength="2">
	<input name="pdamc3" class="r3" type="text" id="pdamc3" value="<?php if (isset($_POST["pdamc3"])) echo $_POST["pdamc3"]; ?>" size="1" maxlength="1">
	<input name="psevc3" class="r3" type="text" id="psevc3" value="<?php if (isset($_POST["psevc3"])) echo $_POST["psevc3"]; ?>" size="1" maxlength="1">
	<input name="xposc3" class="r3" type="text" id="xposc3" value="<?php if (isset($_POST["xposc3"])) echo $_POST["xposc3"]; ?>" size="2" maxlength="2">
	<input name="xdamc3" class="r3" type="text" id="xdamc3" value="<?php if (isset($_POST["xdamc3"])) echo $_POST["xdamc3"]; ?>" size="1" maxlength="1">
	<input name="xsevc3" class="r3" type="text" id="xsevc3" value="<?php if (isset($_POST["xsevc3"])) echo $_POST["xsevc3"]; ?>" size="1" maxlength="1">
	<input name="nposc3" class="r3" type="text" id="nposc3" value="<?php if (isset($_POST["nposc3"])) echo $_POST["nposc3"]; ?>" size="2" maxlength="2">
	<input name="ndamc3" class="r3" type="text" id="ndamc3" value="<?php if (isset($_POST["ndamc3"])) echo $_POST["ndamc3"]; ?>" size="1" maxlength="1">
	<input name="nsevc3" class="r3" type="text" id="nsevc3" value="<?php if (isset($_POST["nsevc3"])) echo $_POST["nsevc3"]; ?>" size="1" maxlength="1">
	<input name="fposc3" class="r3" type="text" id="fposc3" value="<?php if (isset($_POST["fposc3"])) echo $_POST["fposc3"]; ?>" size="2" maxlength="2">
	<input name="fdamc3" class="r3" type="text" id="fdamc3" value="<?php if (isset($_POST["fdamc3"])) echo $_POST["fdamc3"]; ?>" size="1" maxlength="1">
	<input name="fsevc3" class="r3" type="text" id="fsevc3" value="<?php if (isset($_POST["fsevc3"])) echo $_POST["fsevc3"]; ?>" size="1" maxlength="1">

	<input name="pposc4" class="r4" type="text" id="pposc4" value="<?php if (isset($_POST["pposc4"])) echo $_POST["pposc4"]; ?>" size="2" maxlength="2">
	<input name="pdamc4" class="r4" type="text" id="pdamc4" value="<?php if (isset($_POST["pdamc4"])) echo $_POST["pdamc4"]; ?>" size="1" maxlength="1">
	<input name="psevc4" class="r4" type="text" id="psevc4" value="<?php if (isset($_POST["psevc4"])) echo $_POST["psevc4"]; ?>" size="1" maxlength="1">
	<input name="xposc4" class="r4" type="text" id="xposc4" value="<?php if (isset($_POST["xposc4"])) echo $_POST["xposc4"]; ?>" size="2" maxlength="2">
	<input name="xdamc4" class="r4" type="text" id="xdamc4" value="<?php if (isset($_POST["xdamc4"])) echo $_POST["xdamc4"]; ?>" size="1" maxlength="1">
	<input name="xsevc4" class="r4" type="text" id="xsevc4" value="<?php if (isset($_POST["xsevc4"])) echo $_POST["xsevc4"]; ?>" size="1" maxlength="1">
	<input name="nposc4" class="r4" type="text" id="nposc4" value="<?php if (isset($_POST["nposc4"])) echo $_POST["nposc4"]; ?>" size="2" maxlength="2">
	<input name="ndamc4" class="r4" type="text" id="ndamc4" value="<?php if (isset($_POST["ndamc4"])) echo $_POST["ndamc4"]; ?>" size="1" maxlength="1">
	<input name="nsevc4" class="r4" type="text" id="nsevc4" value="<?php if (isset($_POST["nsevc4"])) echo $_POST["nsevc4"]; ?>" size="1" maxlength="1">
	<input name="fposc4" class="r4" type="text" id="fposc4" value="<?php if (isset($_POST["fposc4"])) echo $_POST["fposc4"]; ?>" size="2" maxlength="2">
	<input name="fdamc4" class="r4" type="text" id="fdamc4" value="<?php if (isset($_POST["fdamc4"])) echo $_POST["fdamc4"]; ?>" size="1" maxlength="1">
	<input name="fsevc4" class="r4" type="text" id="fsevc4" value="<?php if (isset($_POST["fsevc4"])) echo $_POST["fsevc4"]; ?>" size="1" maxlength="1">

	<input name="pposc5" class="r5" type="text" id="pposc5" value="<?php if (isset($_POST["pposc5"])) echo $_POST["pposc5"]; ?>" size="2" maxlength="2">
	<input name="pdamc5" class="r5" type="text" id="pdamc5" value="<?php if (isset($_POST["pdamc5"])) echo $_POST["pdamc5"]; ?>" size="1" maxlength="1">
	<input name="psevc5" class="r5" type="text" id="psevc5" value="<?php if (isset($_POST["psevc5"])) echo $_POST["psevc5"]; ?>" size="1" maxlength="1">
	<input name="xposc5" class="r5" type="text" id="xposc5" value="<?php if (isset($_POST["xposc5"])) echo $_POST["xposc5"]; ?>" size="2" maxlength="2">
	<input name="xdamc5" class="r5" type="text" id="xdamc5" value="<?php if (isset($_POST["xdamc5"])) echo $_POST["xdamc5"]; ?>" size="1" maxlength="1">
	<input name="xsevc5" class="r5" type="text" id="xsevc5" value="<?php if (isset($_POST["xsevc5"])) echo $_POST["xsevc5"]; ?>" size="1" maxlength="1">
	<input name="nposc5" class="r5" type="text" id="nposc5" value="<?php if (isset($_POST["nposc5"])) echo $_POST["nposc5"]; ?>" size="2" maxlength="2">
	<input name="ndamc5" class="r5" type="text" id="ndamc5" value="<?php if (isset($_POST["ndamc5"])) echo $_POST["ndamc5"]; ?>" size="1" maxlength="1">
	<input name="nsevc5" class="r5" type="text" id="nsevc5" value="<?php if (isset($_POST["nsevc5"])) echo $_POST["nsevc5"]; ?>" size="1" maxlength="1">
	<input name="fposc5" class="r5" type="text" id="fposc5" value="<?php if (isset($_POST["fposc5"])) echo $_POST["fposc5"]; ?>" size="2" maxlength="2">
	<input name="fdamc5" class="r5" type="text" id="fdamc5" value="<?php if (isset($_POST["fdamc5"])) echo $_POST["fdamc5"]; ?>" size="1" maxlength="1">
	<input name="fsevc5" class="r5" type="text" id="fsevc5" value="<?php if (isset($_POST["fsevc5"])) echo $_POST["fsevc5"]; ?>" size="1" maxlength="1">

	<input name="pposc6" class="r6" type="text" id="pposc6" value="<?php if (isset($_POST["pposc6"])) echo $_POST["pposc6"]; ?>" size="2" maxlength="2">
	<input name="pdamc6" class="r6" type="text" id="pdamc6" value="<?php if (isset($_POST["pdamc6"])) echo $_POST["pdamc6"]; ?>" size="1" maxlength="1">
	<input name="psevc6" class="r6" type="text" id="psevc6" value="<?php if (isset($_POST["psevc6"])) echo $_POST["psevc6"]; ?>" size="1" maxlength="1">
	<input name="xposc6" class="r6" type="text" id="xposc6" value="<?php if (isset($_POST["xposc6"])) echo $_POST["xposc6"]; ?>" size="2" maxlength="2">
	<input name="xdamc6" class="r6" type="text" id="xdamc6" value="<?php if (isset($_POST["xdamc6"])) echo $_POST["xdamc6"]; ?>" size="1" maxlength="1">
	<input name="xsevc6" class="r6" type="text" id="xsevc6" value="<?php if (isset($_POST["xsevc6"])) echo $_POST["xsevc6"]; ?>" size="1" maxlength="1">
	<input name="nposc6" class="r6" type="text" id="nposc6" value="<?php if (isset($_POST["nposc6"])) echo $_POST["nposc6"]; ?>" size="2" maxlength="2">
	<input name="ndamc6" class="r6" type="text" id="ndamc6" value="<?php if (isset($_POST["ndamc6"])) echo $_POST["ndamc6"]; ?>" size="1" maxlength="1">
	<input name="nsevc6" class="r6" type="text" id="nsevc6" value="<?php if (isset($_POST["nsevc6"])) echo $_POST["nsevc6"]; ?>" size="1" maxlength="1">
	<input name="fposc6" class="r6" type="text" id="fposc6" value="<?php if (isset($_POST["fposc6"])) echo $_POST["fposc6"]; ?>" size="2" maxlength="2">
	<input name="fdamc6" class="r6" type="text" id="fdamc6" value="<?php if (isset($_POST["fdamc6"])) echo $_POST["fdamc6"]; ?>" size="1" maxlength="1">
	<input name="fsevc6" class="r6" type="text" id="fsevc6" value="<?php if (isset($_POST["fsevc6"])) echo $_POST["fsevc6"]; ?>" size="1" maxlength="1">

	<input name="pposc7" class="r7" type="text" id="pposc7" value="<?php if (isset($_POST["pposc7"])) echo $_POST["pposc7"]; ?>" size="2" maxlength="2">
	<input name="pdamc7" class="r7" type="text" id="pdamc7" value="<?php if (isset($_POST["pdamc7"])) echo $_POST["pdamc7"]; ?>" size="1" maxlength="1">
	<input name="psevc7" class="r7" type="text" id="psevc7" value="<?php if (isset($_POST["psevc7"])) echo $_POST["psevc7"]; ?>" size="1" maxlength="1">
	<input name="xposc7" class="r7" type="text" id="xposc7" value="<?php if (isset($_POST["xposc7"])) echo $_POST["xposc7"]; ?>" size="2" maxlength="2">
	<input name="xdamc7" class="r7" type="text" id="xdamc7" value="<?php if (isset($_POST["xdamc7"])) echo $_POST["xdamc7"]; ?>" size="1" maxlength="1">
	<input name="xsevc7" class="r7" type="text" id="xsevc7" value="<?php if (isset($_POST["xsevc7"])) echo $_POST["xsevc7"]; ?>" size="1" maxlength="1">
	<input name="nposc7" class="r7" type="text" id="nposc7" value="<?php if (isset($_POST["nposc7"])) echo $_POST["nposc7"]; ?>" size="2" maxlength="2">
	<input name="ndamc7" class="r7" type="text" id="ndamc7" value="<?php if (isset($_POST["ndamc7"])) echo $_POST["ndamc7"]; ?>" size="1" maxlength="1">
	<input name="nsevc7" class="r7" type="text" id="nsevc7" value="<?php if (isset($_POST["nsevc7"])) echo $_POST["nsevc7"]; ?>" size="1" maxlength="1">
	<input name="fposc7" class="r7" type="text" id="fposc7" value="<?php if (isset($_POST["fposc7"])) echo $_POST["fposc7"]; ?>" size="2" maxlength="2">
	<input name="fdamc7" class="r7" type="text" id="fdamc7" value="<?php if (isset($_POST["fdamc7"])) echo $_POST["fdamc7"]; ?>" size="1" maxlength="1">
	<input name="fsevc7" class="r7" type="text" id="fsevc7" value="<?php if (isset($_POST["fsevc7"])) echo $_POST["fsevc7"]; ?>" size="1" maxlength="1">

	<input name="plantremarks" type="text" id="plantremarks" value="<?php if (isset($_POST["plantremarks"])) echo $_POST["plantremarks"]; ?>" size="20" maxlength="20">
	<input name="exitremarks" type="text" id="exitremarks" value="<?php if (isset($_POST["exitremarks"])) echo $_POST["exitremarks"]; ?>" size="20" maxlength="20">
	<input name="entremarks" type="text" id="entremarks" value="<?php if (isset($_POST["entremarks"])) echo $_POST["entremarks"]; ?>" size="20" maxlength="20">
	<input name="finalremarks" type="text" id="finalremarks" value="<?php if (isset($_POST["finalremarks"])) echo $_POST["finalremarks"]; ?>" size="20" maxlength="20">

	<input name="pa1" type="text" id="pa1" value="<?php if (isset($_POST["pa1"])) echo $_POST["pa1"]; ?>" size="1" maxlength="1">
	<input name="pa2" type="text" id="pa2" value="<?php if (isset($_POST["pa2"])) echo $_POST["pa2"]; ?>" size="1" maxlength="1">
	<input name="pa3" type="text" id="pa3" value="<?php if (isset($_POST["pa3"])) echo $_POST["pa3"]; ?>" size="1" maxlength="1">
	<input name="pa4" type="text" id="pa4" value="<?php if (isset($_POST["pa4"])) echo $_POST["pa4"]; ?>" size="1" maxlength="1">

	<input name="xa1" type="text" id="xa1" value="<?php if (isset($_POST["xa1"])) echo $_POST["xa1"]; ?>" size="1" maxlength="1">
	<input name="xa2" type="text" id="xa2" value="<?php if (isset($_POST["xa2"])) echo $_POST["xa2"]; ?>" size="1" maxlength="1">
	<input name="xa3" type="text" id="xa3" value="<?php if (isset($_POST["xa3"])) echo $_POST["xa3"]; ?>" size="1" maxlength="1">
	<input name="xa4" type="text" id="xa4" value="<?php if (isset($_POST["xa4"])) echo $_POST["xa4"]; ?>" size="1" maxlength="1">

	<input name="na1" type="text" id="na1" value="<?php if (isset($_POST["na1"])) echo $_POST["na1"]; ?>" size="1" maxlength="1">
	<input name="na2" type="text" id="na2" value="<?php if (isset($_POST["na2"])) echo $_POST["na2"]; ?>" size="1" maxlength="1">
	<input name="na3" type="text" id="na3" value="<?php if (isset($_POST["na3"])) echo $_POST["na3"]; ?>" size="1" maxlength="1">
	<input name="na4" type="text" id="na4" value="<?php if (isset($_POST["na4"])) echo $_POST["na4"]; ?>" size="1" maxlength="1">

	<input name="fa1" type="text" id="fa1" value="<?php if (isset($_POST["fa1"])) echo $_POST["fa1"]; ?>" size="1" maxlength="1">
	<input name="fa2" type="text" id="fa2" value="<?php if (isset($_POST["fa2"])) echo $_POST["fa2"]; ?>" size="1" maxlength="1">
	<input name="fa3" type="text" id="fa3" value="<?php if (isset($_POST["fa3"])) echo $_POST["fa3"]; ?>" size="1" maxlength="1">
	<input name="fa4" type="text" id="fa4" value="<?php if (isset($_POST["fa4"])) echo $_POST["fa4"]; ?>" size="1" maxlength="1">

	<input name="pdeliv" type="text" class="vyssirp" id="pdeliv" value="<?php if (isset($_POST["pdeliv"])) echo $_POST["pdeliv"]; ?>" size="20" maxlength="20">
	<input name="ptruckno" type="text" class="vyssirp" id="ptruckno" value="<?php if (isset($_POST["ptruckno"])) echo $_POST["ptruckno"]; ?>" size="20" maxlength="20">
	<input name="pname" type="text" class="vyssirp" id="pname" value="<?php if (isset($_POST["pname"])) echo $_POST["pname"]; ?>" size="20" maxlength="20">
	<input name="precname" type="text" class="vyssirp" id="precname" value="<?php if (isset($_POST["precname"])) echo $_POST["precname"]; ?>" size="20" maxlength="20">
	<input name="pins" type="text" class="vyssirp" id="pins" value="<?php if (isset($_POST["pins"])) echo $_POST["pins"]; ?>" size="20" maxlength="20">
	<input name="pdate" type="text" class="vyssirp" id="pdate" value="<?php if (isset($_POST["pdate"])) echo $_POST["pdate"]; ?>" size="20" maxlength="20">

	<input name="xdeliv" type="text" class="vyssirx" id="xdeliv" value="<?php if (isset($_POST["xdeliv"])) echo $_POST["xdeliv"]; ?>" size="20" maxlength="20">
	<input name="xtruckno" type="text" class="vyssirx" id="xtruckno" value="<?php if (isset($_POST["xtruckno"])) echo $_POST["ptruckno"]; ?>" size="20" maxlength="20">
	<input name="xname" type="text" class="vyssirx" id="xname" value="<?php if (isset($_POST["xname"])) echo $_POST["xname"]; ?>" size="20" maxlength="20">
	<input name="xrecname" type="text" class="vyssirx" id="xrecname" value="<?php if (isset($_POST["xrecname"])) echo $_POST["xrecname"]; ?>" size="20" maxlength="20">
	<input name="xins" type="text" class="vyssirx" id="xins" value="<?php if (isset($_POST["xins"])) echo $_POST["xins"]; ?>" size="20" maxlength="20">
	<input name="xdate" type="text" class="vyssirx" id="xdate" value="<?php if (isset($_POST["xdate"])) echo $_POST["xdate"]; ?>" size="20" maxlength="20">

	<input name="ndeliv" type="text" class="vyssirn" id="ndeliv" value="<?php if (isset($_POST["ndeliv"])) echo $_POST["ndeliv"]; ?>" size="20" maxlength="20">
	<input name="ntruckno" type="text" class="vyssirn" id="ntruckno" value="<?php if (isset($_POST["ntruckno"])) echo $_POST["ntruckno"]; ?>" size="20" maxlength="20">
	<input name="nname" type="text" class="vyssirn" id="nname" value="<?php if (isset($_POST["nname"])) echo $_POST["nname"]; ?>" size="20" maxlength="20">
	<input name="nrecname" type="text" class="vyssirn" id="nrecname" value="<?php if (isset($_POST["nrecname"])) echo $_POST["nrecname"]; ?>" size="20" maxlength="20">
	<input name="nins" type="text" class="vyssirn" id="nins" value="<?php if (isset($_POST["nins"])) echo $_POST["nins"]; ?>" size="20" maxlength="20">
	<input name="ndate" type="text" class="vyssirn" id="ndate" value="<?php if (isset($_POST["ndate"])) echo $_POST["ndate"]; ?>" size="20" maxlength="20">

	<input name="fdeliv" type="text" class="vyssirf" id="fdeliv" value="<?php if (isset($_POST["fdeliv"])) echo $_POST["fdeliv"]; ?>" size="20" maxlength="20">
	<input name="ftruckno" type="text" class="vyssirf" id="ftruckno" value="<?php if (isset($_POST["ftruckno"])) echo $_POST["ftruckno"]; ?>" size="20" maxlength="20">
	<input name="fname" type="text" class="vyssirf" id="fname" value="<?php if (isset($_POST["fname"])) echo $_POST["fname"]; ?>" size="20" maxlength="20">
	<input name="frecname" type="text" class="vyssirf" id="frecname" value="<?php if (isset($_POST["frecname"])) echo $_POST["frecname"]; ?>" size="20" maxlength="20">
	<input name="fins" type="text" class="vyssirf" id="fins" value="<?php if (isset($_POST["fins"])) echo $_POST["fins"]; ?>" size="20" maxlength="20">
	<input name="fdate" type="text" class="vyssirf" id="fdate" value="<?php if (isset($_POST["fdate"])) echo $_POST["fdate"]; ?>" size="20" maxlength="20">
	<br>
	
<p><input name="submit" type="submit" id="submit" value="Dowland PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>