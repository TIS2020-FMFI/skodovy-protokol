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
	img {
		position: fixed; 
		width: 720px; 
		height: 1017px; 
		margin: 0px; 
		z-index: -1; 
	}

	#sig_img1 {
		position: fixed; 
		left: 220px; 
		top: 808px; 
		height: 16px;
		width: 44px;		
	}

	#sig_img2 {
		position: fixed; 
		left: 300px; 
		top: 808px; 
		height: 16px;
		width: 44px;		
	}

	input[type='text']{
		position: absolute;
		font-size: 0.5em;
	}

	#vdc {
	top: 117px;
    left: 62px;
    width: 196px;
    height: 11px;
}

	
	#model {
		top: 141px; 		
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
    left: 204px;
    width: 108px;
    height: 21px;
}
#portexit {
	top: 387px;
    left: 319px;
    width: 108px;
    height: 21px;
}
#portentry {
	top: 387px;
    left: 435px;
    width: 108px;
    height: 21px;
}
#finaldest {
	top: 387px;
    left: 550px;
    width: 108px;
    height: 21px;
}

.r1,.r2,.r3,.r4,.r2,.r6,.r7{
	height: 25px;
}

.r1 {
	top: 436px;
}

.r2 {
	top: 457px;
}

.r3 {
	top: 478px;
}

.r4 {
	top: 499px;
}

.r5 {
	top: 520px;
	height: 40px;
}

.r6 {
	top: 541px;
}

.r7 {
	top: 562px;
	height: 50px;
}

.pposc{
	left: 204px;
    width: 24px;
} 

.pdamc{
    left: 234px;
    width: 24px;
}

.psevc{
    left: 264px;
    width: 48px;
}

.xposc{
    left: 319px;
    width: 24px;
}
.xdamc{
    left: 349px;
    width: 24px;
}
.xsevc{
    left: 379px;
    width: 48px;
}

.nposc{
    left: 434px;
    width: 24px;
}
.ndamc{
    left: 464px;
    width: 24px;
}
.nsevc{
    left: 494px;
    width: 48px;
}

.fposc{
    left: 550px;
    width: 24px;
}
.fdamc{
    left: 580px;
    width: 24px;
}
.fsevc{
    left: 610px;
    width: 48px;
}

#plantremarks {
	top: 592px;
    left: 204px;
    width: 108px;
    height: 56px;
}
#exitremarks {
	top: 592px;
    left: 319px;
    width: 108px;
    height: 56px;
}
#entremarks {
	top: 592px;
    left: 435px;
    width: 108px;
    height: 56px;
}
#finalremarks {
	top: 592px;
    left: 550px;
    width: 108px;
    height: 56px;
}

.arrival{
	top: 670px;
	height: 10px;
}

#pa1 {
    left: 204px;
    width: 24px;
}#pa2 {
    left: 234px;
    width: 23px;
}#pa3 {
    left: 264px;
    width: 21px;
}#pa4 {
    left: 292px;
    width: 20px;
}

#xa1 {
    left: 319px;
    width: 24px;
}#xa2 {
    left: 349px;
    width: 24px;
}#xa3 {
    left: 379px;
    width: 21px;
}#xa4 {
    left: 407px;
    width: 21px;
}

#na1 {
    left: 435px;
    width: 24px;
}#na2 {
    left: 465px;
    width: 24px;
}#na3 {
    left: 495px;
    width: 21px;
}#na4 {
    left: 522px;
    width: 21px;
}

#fa1 {
    left: 550px;
    width: 24px;
}#fa2 {
    left: 580px;
    width: 24px;
}#fa3 {
    left: 610px;
    width: 21px;
}#fa4 {
    left: 637px;
    width: 22px;
}

.vyssirp,
.vyssirx,
.vyssirn,
.vyssirf {
	width: 108px;
    height: 13px;
}
.vyssirp {
	left: 204px;
}

.vyssirx {
	left: 319px;
}

.vyssirn {
	left: 435px;
}

.vyssirf {
	left: 550px;
}

.deliv {
	top: 687px;
}
.truckno {
	top: 706px;
}
.name {
	top: 746px;
}
.recname {
	top: 766px;
}
.ins {
	top: 786px;
}
.date {
	top: 825px;
	height: 10px;
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

.loc {
	top: 902px;
	height: 62px;
}

#plant {
    left: 481px;
    width: 263px;
}
#portexit {
    left: 746px;
    width: 263px;
}
#portentry {
    left: 1011px;
    width: 263px;
}
#finaldest {
    left: 1276px;
    width: 263px;
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

.pposc{
	left: 481px;
    width: 68px;
} 

.pdamc{
    left: 551px;
    width: 68px;
}
.psevc{
    left: 620px;
    width: 124px;
}

.xposc{
    left: 746px;
    width: 68px;
}
.xdamc{
    left: 815px;
    width: 68px;
}
.xsevc{
    left: 885px;
    width: 124px;
}

.nposc{
    left: 1011px;
    width: 68px;
}
.ndamc{
    left: 1080px;
    width: 68px;
}
.nsevc{
    left: 1149px;
    width: 124px;
}

.fposc{
    left: 1276px;
    width: 68px;
}
.fdamc{
    left: 1345px;
    width: 68px;
}
.fsevc{
    left: 1414px;
    width: 124px;
}

.rem {
	top: 1374px;
	height: 141px;
}

#plantremarks {
    left: 481px;
    width: 263px;
}
#exitremarks {
    left: 746px;
    width: 263px;
}
#entremarks {
    left: 1011px;
    width: 263px;
}
#finalremarks {
    left: 1276px;
    width: 263px;
}
.arrival {
	top: 1553px;
	width: 68px;
}

#pa1 {
    left: 481px;
    width: 68px;
}#pa2 {
    left: 550px;
    width: 69px;
}#pa3 {
    left: 620px;
    width: 61px;
}#pa4 {
    left: 683px;
    width: 60px;
}
#xa1 {
    left: 746px;
    width: 68px;
}#xa2 {
    left: 815px;
    width: 69px;
}#xa3 {
    left: 885px;
    width: 61px;
}#xa4 {
    left: 948px;
    width: 60px;
}
#na1 {
    left: 1011px;
    width: 68px;
}#na2 {
    left: 1080px;
    width: 69px;
}#na3 {
    left: 1150px;
    width: 61px;
}#na4 {
    left: 1213px;
    width: 60px;
}

#fa1 {
    left: 1276px;
    width: 68px;
}#fa2 {
    left: 1345px;
    width: 69px;
}#fa3 {
    left: 1415px;
    width: 61px;
}#fa4 {
    left: 1478px;
    width: 60px;
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

.deliv {
	top: 1592px;
}
.truckno {
	top: 1637px;
}
.name {
	top: 1728px;
}
.recname {
	top: 1774px;
}
.ins {
	top: 1820px;
}
.date {
	top: 1910px;
	height: 36px;
}
canvas#signature1 {
		position: absolute; 
  		border: 2px solid black;		  
		left: 510px; 
		top: 1865px; 		
	}
	canvas#signature2 {
		position: absolute; 
  		border: 2px solid black;		  
		left: 650px; 
		top: 1865px; 
		
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
	
	<input name="plant" type="text" class="loc" id="plant" value="<?php if (isset($_POST["plant"])) echo $_POST["plant"]; ?>" size="20" maxlength="20">
	<input name="portexit" type="text" class="loc" id="portexit" value="<?php if (isset($_POST["portexit"])) echo $_POST["portexit"]; ?>" size="20" maxlength="20"> 
	<input name="portentry" type="text" class="loc" id="portentry" value="<?php if (isset($_POST["portentry"])) echo $_POST["portentry"]; ?>" size="20" maxlength="20">
	<input name="finaldest" type="text" class="loc" id="finaldest" value="<?php if (isset($_POST["finaldest"])) echo $_POST["finaldest"]; ?>" size="20" maxlength="20">

	<input name="pposc1" class="r1 pposc" type="text" id="pposc1" value="<?php if (isset($_POST["pposc1"])) echo $_POST["pposc1"]; ?>" size="2" maxlength="2">
	<input name="pdamc1" class="r1 pdamc" type="text" id="pdamc1" value="<?php if (isset($_POST["pdamc1"])) echo $_POST["pdamc1"]; ?>" size="1" maxlength="1">
	<input name="psevc1" class="r1 psevc" type="text" id="psevc1" value="<?php if (isset($_POST["psevc1"])) echo $_POST["psevc1"]; ?>" size="1" maxlength="1">
	<input name="xposc1" class="r1 xposc" type="text" id="xposc1" value="<?php if (isset($_POST["xposc1"])) echo $_POST["xposc1"]; ?>" size="2" maxlength="2">
	<input name="xdamc1" class="r1 xdamc" type="text" id="xdamc1" value="<?php if (isset($_POST["xdamc1"])) echo $_POST["xdamc1"]; ?>" size="1" maxlength="1">
	<input name="xsevc1" class="r1 xsevc" type="text" id="xsevc1" value="<?php if (isset($_POST["xsevc1"])) echo $_POST["xsevc1"]; ?>" size="1" maxlength="1">
	<input name="nposc1" class="r1 nposc" type="text" id="nposc1" value="<?php if (isset($_POST["nposc1"])) echo $_POST["nposc1"]; ?>" size="2" maxlength="2">
	<input name="ndamc1" class="r1 ndamc" type="text" id="ndamc1" value="<?php if (isset($_POST["ndamc1"])) echo $_POST["ndamc1"]; ?>" size="1" maxlength="1">
	<input name="nsevc1" class="r1 nsevc" type="text" id="nsevc1" value="<?php if (isset($_POST["nsevc1"])) echo $_POST["nsevc1"]; ?>" size="1" maxlength="1">
	<input name="fposc1" class="r1 fposc" type="text" id="fposc1" value="<?php if (isset($_POST["fposc1"])) echo $_POST["fposc1"]; ?>" size="2" maxlength="2">
	<input name="fdamc1" class="r1 fdamc" type="text" id="fdamc1" value="<?php if (isset($_POST["fdamc1"])) echo $_POST["fdamc1"]; ?>" size="1" maxlength="1">
	<input name="fsevc1" class="r1 fsevc" type="text" id="fsevc1" value="<?php if (isset($_POST["fsevc1"])) echo $_POST["fsevc1"]; ?>" size="1" maxlength="1">
	<input name="pposc2" class="r2 pposc" type="text" id="pposc2" value="<?php if (isset($_POST["pposc2"])) echo $_POST["pposc2"]; ?>" size="2" maxlength="2">
	<input name="pdamc2" class="r2 pdamc" type="text" id="pdamc2" value="<?php if (isset($_POST["pdamc2"])) echo $_POST["pdamc2"]; ?>" size="1" maxlength="1">
	<input name="psevc2" class="r2 psevc" type="text" id="psevc2" value="<?php if (isset($_POST["psevc2"])) echo $_POST["psevc2"]; ?>" size="1" maxlength="1">
	<input name="xposc2" class="r2 xposc" type="text" id="xposc2" value="<?php if (isset($_POST["xposc2"])) echo $_POST["xposc2"]; ?>" size="2" maxlength="2">
	<input name="xdamc2" class="r2 xdamc" type="text" id="xdamc2" value="<?php if (isset($_POST["xdamc2"])) echo $_POST["xdamc2"]; ?>" size="1" maxlength="1">
	<input name="xsevc2" class="r2 xsevc" type="text" id="xsevc2" value="<?php if (isset($_POST["xsevc2"])) echo $_POST["xsevc2"]; ?>" size="1" maxlength="1">
	<input name="nposc2" class="r2 nposc" type="text" id="nposc2" value="<?php if (isset($_POST["nposc2"])) echo $_POST["nposc2"]; ?>" size="2" maxlength="2">
	<input name="ndamc2" class="r2 ndamc" type="text" id="ndamc2" value="<?php if (isset($_POST["ndamc2"])) echo $_POST["ndamc2"]; ?>" size="1" maxlength="1">
	<input name="nsevc2" class="r2 nsevc" type="text" id="nsevc2" value="<?php if (isset($_POST["nsevc2"])) echo $_POST["nsevc2"]; ?>" size="1" maxlength="1">
	<input name="fposc2" class="r2 fposc" type="text" id="fposc2" value="<?php if (isset($_POST["fposc2"])) echo $_POST["fposc2"]; ?>" size="2" maxlength="2">
	<input name="fdamc2" class="r2 fdamc" type="text" id="fdamc2" value="<?php if (isset($_POST["fdamc2"])) echo $_POST["fdamc2"]; ?>" size="1" maxlength="1">
	<input name="fsevc2" class="r2 fsevc" type="text" id="fsevc2" value="<?php if (isset($_POST["fsevc2"])) echo $_POST["fsevc2"]; ?>" size="1" maxlength="1">
	<input name="pposc3" class="r3 pposc" type="text" id="pposc3" value="<?php if (isset($_POST["pposc3"])) echo $_POST["pposc3"]; ?>" size="2" maxlength="2">
	<input name="pdamc3" class="r3 pdamc" type="text" id="pdamc3" value="<?php if (isset($_POST["pdamc3"])) echo $_POST["pdamc3"]; ?>" size="1" maxlength="1">
	<input name="psevc3" class="r3 psevc" type="text" id="psevc3" value="<?php if (isset($_POST["psevc3"])) echo $_POST["psevc3"]; ?>" size="1" maxlength="1">
	<input name="xposc3" class="r3 xposc" type="text" id="xposc3" value="<?php if (isset($_POST["xposc3"])) echo $_POST["xposc3"]; ?>" size="2" maxlength="2">
	<input name="xdamc3" class="r3 xdamc" type="text" id="xdamc3" value="<?php if (isset($_POST["xdamc3"])) echo $_POST["xdamc3"]; ?>" size="1" maxlength="1">
	<input name="xsevc3" class="r3 xsevc" type="text" id="xsevc3" value="<?php if (isset($_POST["xsevc3"])) echo $_POST["xsevc3"]; ?>" size="1" maxlength="1">
	<input name="nposc3" class="r3 nposc" type="text" id="nposc3" value="<?php if (isset($_POST["nposc3"])) echo $_POST["nposc3"]; ?>" size="2" maxlength="2">
	<input name="ndamc3" class="r3 ndamc" type="text" id="ndamc3" value="<?php if (isset($_POST["ndamc3"])) echo $_POST["ndamc3"]; ?>" size="1" maxlength="1">
	<input name="nsevc3" class="r3 nsevc" type="text" id="nsevc3" value="<?php if (isset($_POST["nsevc3"])) echo $_POST["nsevc3"]; ?>" size="1" maxlength="1">
	<input name="fposc3" class="r3 fposc" type="text" id="fposc3" value="<?php if (isset($_POST["fposc3"])) echo $_POST["fposc3"]; ?>" size="2" maxlength="2">
	<input name="fdamc3" class="r3 fdamc" type="text" id="fdamc3" value="<?php if (isset($_POST["fdamc3"])) echo $_POST["fdamc3"]; ?>" size="1" maxlength="1">
	<input name="fsevc3" class="r3 fsevc" type="text" id="fsevc3" value="<?php if (isset($_POST["fsevc3"])) echo $_POST["fsevc3"]; ?>" size="1" maxlength="1">
	<input name="pposc4" class="r4 pposc" type="text" id="pposc4" value="<?php if (isset($_POST["pposc4"])) echo $_POST["pposc4"]; ?>" size="2" maxlength="2">
	<input name="pdamc4" class="r4 pdamc" type="text" id="pdamc4" value="<?php if (isset($_POST["pdamc4"])) echo $_POST["pdamc4"]; ?>" size="1" maxlength="1">
	<input name="psevc4" class="r4 psevc" type="text" id="psevc4" value="<?php if (isset($_POST["psevc4"])) echo $_POST["psevc4"]; ?>" size="1" maxlength="1">
	<input name="xposc4" class="r4 xposc" type="text" id="xposc4" value="<?php if (isset($_POST["xposc4"])) echo $_POST["xposc4"]; ?>" size="2" maxlength="2">
	<input name="xdamc4" class="r4 xdamc" type="text" id="xdamc4" value="<?php if (isset($_POST["xdamc4"])) echo $_POST["xdamc4"]; ?>" size="1" maxlength="1">
	<input name="xsevc4" class="r4 xsevc" type="text" id="xsevc4" value="<?php if (isset($_POST["xsevc4"])) echo $_POST["xsevc4"]; ?>" size="1" maxlength="1">
	<input name="nposc4" class="r4 nposc" type="text" id="nposc4" value="<?php if (isset($_POST["nposc4"])) echo $_POST["nposc4"]; ?>" size="2" maxlength="2">
	<input name="ndamc4" class="r4 ndamc" type="text" id="ndamc4" value="<?php if (isset($_POST["ndamc4"])) echo $_POST["ndamc4"]; ?>" size="1" maxlength="1">
	<input name="nsevc4" class="r4 nsevc" type="text" id="nsevc4" value="<?php if (isset($_POST["nsevc4"])) echo $_POST["nsevc4"]; ?>" size="1" maxlength="1">
	<input name="fposc4" class="r4 fposc" type="text" id="fposc4" value="<?php if (isset($_POST["fposc4"])) echo $_POST["fposc4"]; ?>" size="2" maxlength="2">
	<input name="fdamc4" class="r4 fdamc" type="text" id="fdamc4" value="<?php if (isset($_POST["fdamc4"])) echo $_POST["fdamc4"]; ?>" size="1" maxlength="1">
	<input name="fsevc4" class="r4 fsevc" type="text" id="fsevc4" value="<?php if (isset($_POST["fsevc4"])) echo $_POST["fsevc4"]; ?>" size="1" maxlength="1">
	<input name="pposc5" class="r5 pposc" type="text" id="pposc5" value="<?php if (isset($_POST["pposc5"])) echo $_POST["pposc5"]; ?>" size="2" maxlength="2">
	<input name="pdamc5" class="r5 pdamc" type="text" id="pdamc5" value="<?php if (isset($_POST["pdamc5"])) echo $_POST["pdamc5"]; ?>" size="1" maxlength="1">
	<input name="psevc5" class="r5 psevc" type="text" id="psevc5" value="<?php if (isset($_POST["psevc5"])) echo $_POST["psevc5"]; ?>" size="1" maxlength="1">
	<input name="xposc5" class="r5 xposc" type="text" id="xposc5" value="<?php if (isset($_POST["xposc5"])) echo $_POST["xposc5"]; ?>" size="2" maxlength="2">
	<input name="xdamc5" class="r5 xdamc" type="text" id="xdamc5" value="<?php if (isset($_POST["xdamc5"])) echo $_POST["xdamc5"]; ?>" size="1" maxlength="1">
	<input name="xsevc5" class="r5 xsevc" type="text" id="xsevc5" value="<?php if (isset($_POST["xsevc5"])) echo $_POST["xsevc5"]; ?>" size="1" maxlength="1">
	<input name="nposc5" class="r5 nposc" type="text" id="nposc5" value="<?php if (isset($_POST["nposc5"])) echo $_POST["nposc5"]; ?>" size="2" maxlength="2">
	<input name="ndamc5" class="r5 ndamc" type="text" id="ndamc5" value="<?php if (isset($_POST["ndamc5"])) echo $_POST["ndamc5"]; ?>" size="1" maxlength="1">
	<input name="nsevc5" class="r5 nsevc" type="text" id="nsevc5" value="<?php if (isset($_POST["nsevc5"])) echo $_POST["nsevc5"]; ?>" size="1" maxlength="1">
	<input name="fposc5" class="r5 fposc" type="text" id="fposc5" value="<?php if (isset($_POST["fposc5"])) echo $_POST["fposc5"]; ?>" size="2" maxlength="2">
	<input name="fdamc5" class="r5 fdamc" type="text" id="fdamc5" value="<?php if (isset($_POST["fdamc5"])) echo $_POST["fdamc5"]; ?>" size="1" maxlength="1">
	<input name="fsevc5" class="r5 fsevc" type="text" id="fsevc5" value="<?php if (isset($_POST["fsevc5"])) echo $_POST["fsevc5"]; ?>" size="1" maxlength="1">
	<input name="pposc6" class="r6 pposc" type="text" id="pposc6" value="<?php if (isset($_POST["pposc6"])) echo $_POST["pposc6"]; ?>" size="2" maxlength="2">
	<input name="pdamc6" class="r6 pdamc" type="text" id="pdamc6" value="<?php if (isset($_POST["pdamc6"])) echo $_POST["pdamc6"]; ?>" size="1" maxlength="1">
	<input name="psevc6" class="r6 psevc" type="text" id="psevc6" value="<?php if (isset($_POST["psevc6"])) echo $_POST["psevc6"]; ?>" size="1" maxlength="1">
	<input name="xposc6" class="r6 xposc" type="text" id="xposc6" value="<?php if (isset($_POST["xposc6"])) echo $_POST["xposc6"]; ?>" size="2" maxlength="2">
	<input name="xdamc6" class="r6 xdamc" type="text" id="xdamc6" value="<?php if (isset($_POST["xdamc6"])) echo $_POST["xdamc6"]; ?>" size="1" maxlength="1">
	<input name="xsevc6" class="r6 xsevc" type="text" id="xsevc6" value="<?php if (isset($_POST["xsevc6"])) echo $_POST["xsevc6"]; ?>" size="1" maxlength="1">
	<input name="nposc6" class="r6 nposc" type="text" id="nposc6" value="<?php if (isset($_POST["nposc6"])) echo $_POST["nposc6"]; ?>" size="2" maxlength="2">
	<input name="ndamc6" class="r6 ndamc" type="text" id="ndamc6" value="<?php if (isset($_POST["ndamc6"])) echo $_POST["ndamc6"]; ?>" size="1" maxlength="1">
	<input name="nsevc6" class="r6 nsevc" type="text" id="nsevc6" value="<?php if (isset($_POST["nsevc6"])) echo $_POST["nsevc6"]; ?>" size="1" maxlength="1">
	<input name="fposc6" class="r6 fposc" type="text" id="fposc6" value="<?php if (isset($_POST["fposc6"])) echo $_POST["fposc6"]; ?>" size="2" maxlength="2">
	<input name="fdamc6" class="r6 fdamc" type="text" id="fdamc6" value="<?php if (isset($_POST["fdamc6"])) echo $_POST["fdamc6"]; ?>" size="1" maxlength="1">
	<input name="fsevc6" class="r6 fsevc" type="text" id="fsevc6" value="<?php if (isset($_POST["fsevc6"])) echo $_POST["fsevc6"]; ?>" size="1" maxlength="1">
	<input name="pposc7" class="r7 pposc" type="text" id="pposc7" value="<?php if (isset($_POST["pposc7"])) echo $_POST["pposc7"]; ?>" size="2" maxlength="2">
	<input name="pdamc7" class="r7 pdamc" type="text" id="pdamc7" value="<?php if (isset($_POST["pdamc7"])) echo $_POST["pdamc7"]; ?>" size="1" maxlength="1">
	<input name="psevc7" class="r7 psevc" type="text" id="psevc7" value="<?php if (isset($_POST["psevc7"])) echo $_POST["psevc7"]; ?>" size="1" maxlength="1">
	<input name="xposc7" class="r7 xposc" type="text" id="xposc7" value="<?php if (isset($_POST["xposc7"])) echo $_POST["xposc7"]; ?>" size="2" maxlength="2">
	<input name="xdamc7" class="r7 xdamc" type="text" id="xdamc7" value="<?php if (isset($_POST["xdamc7"])) echo $_POST["xdamc7"]; ?>" size="1" maxlength="1">
	<input name="xsevc7" class="r7 xsevc" type="text" id="xsevc7" value="<?php if (isset($_POST["xsevc7"])) echo $_POST["xsevc7"]; ?>" size="1" maxlength="1">
	<input name="nposc7" class="r7 nposc" type="text" id="nposc7" value="<?php if (isset($_POST["nposc7"])) echo $_POST["nposc7"]; ?>" size="2" maxlength="2">
	<input name="ndamc7" class="r7 ndamc" type="text" id="ndamc7" value="<?php if (isset($_POST["ndamc7"])) echo $_POST["ndamc7"]; ?>" size="1" maxlength="1">
	<input name="nsevc7" class="r7 nsevc" type="text" id="nsevc7" value="<?php if (isset($_POST["nsevc7"])) echo $_POST["nsevc7"]; ?>" size="1" maxlength="1">
	<input name="fposc7" class="r7 fposc" type="text" id="fposc7" value="<?php if (isset($_POST["fposc7"])) echo $_POST["fposc7"]; ?>" size="2" maxlength="2">
	<input name="fdamc7" class="r7 fdamc" type="text" id="fdamc7" value="<?php if (isset($_POST["fdamc7"])) echo $_POST["fdamc7"]; ?>" size="1" maxlength="1">
	<input name="fsevc7" class="r7 fsevc" type="text" id="fsevc7" value="<?php if (isset($_POST["fsevc7"])) echo $_POST["fsevc7"]; ?>" size="1" maxlength="1">

	<input name="plantremarks" type="text" class="rem" id="plantremarks" value="<?php if (isset($_POST["plantremarks"])) echo $_POST["plantremarks"]; ?>" size="20" maxlength="20">
	<input name="exitremarks" type="text" class="rem" id="exitremarks" value="<?php if (isset($_POST["exitremarks"])) echo $_POST["exitremarks"]; ?>" size="20" maxlength="20">
	<input name="entremarks" type="text" class="rem" id="entremarks" value="<?php if (isset($_POST["entremarks"])) echo $_POST["entremarks"]; ?>" size="20" maxlength="20">
	<input name="finalremarks" type="text" class="rem" id="finalremarks" value="<?php if (isset($_POST["finalremarks"])) echo $_POST["finalremarks"]; ?>" size="20" maxlength="20">

	<input name="pa1" type="text" id="pa1" class="arrival" value="<?php if (isset($_POST["pa1"])) echo $_POST["pa1"]; ?>" size="1" maxlength="1">
	<input name="pa2" type="text" id="pa2" class="arrival" value="<?php if (isset($_POST["pa2"])) echo $_POST["pa2"]; ?>" size="1" maxlength="1">
	<input name="pa3" type="text" id="pa3" class="arrival" value="<?php if (isset($_POST["pa3"])) echo $_POST["pa3"]; ?>" size="1" maxlength="1">
	<input name="pa4" type="text" id="pa4" class="arrival" value="<?php if (isset($_POST["pa4"])) echo $_POST["pa4"]; ?>" size="1" maxlength="1">
	<input name="xa1" type="text" id="xa1" class="arrival" value="<?php if (isset($_POST["xa1"])) echo $_POST["xa1"]; ?>" size="1" maxlength="1">
	<input name="xa2" type="text" id="xa2" class="arrival" value="<?php if (isset($_POST["xa2"])) echo $_POST["xa2"]; ?>" size="1" maxlength="1">
	<input name="xa3" type="text" id="xa3" class="arrival" value="<?php if (isset($_POST["xa3"])) echo $_POST["xa3"]; ?>" size="1" maxlength="1">
	<input name="xa4" type="text" id="xa4" class="arrival" value="<?php if (isset($_POST["xa4"])) echo $_POST["xa4"]; ?>" size="1" maxlength="1">
	<input name="na1" type="text" id="na1" class="arrival" value="<?php if (isset($_POST["na1"])) echo $_POST["na1"]; ?>" size="1" maxlength="1">
	<input name="na2" type="text" id="na2" class="arrival" value="<?php if (isset($_POST["na2"])) echo $_POST["na2"]; ?>" size="1" maxlength="1">
	<input name="na3" type="text" id="na3" class="arrival" value="<?php if (isset($_POST["na3"])) echo $_POST["na3"]; ?>" size="1" maxlength="1">
	<input name="na4" type="text" id="na4" class="arrival" value="<?php if (isset($_POST["na4"])) echo $_POST["na4"]; ?>" size="1" maxlength="1">
	<input name="fa1" type="text" id="fa1" class="arrival" value="<?php if (isset($_POST["fa1"])) echo $_POST["fa1"]; ?>" size="1" maxlength="1">
	<input name="fa2" type="text" id="fa2" class="arrival" value="<?php if (isset($_POST["fa2"])) echo $_POST["fa2"]; ?>" size="1" maxlength="1">
	<input name="fa3" type="text" id="fa3" class="arrival" value="<?php if (isset($_POST["fa3"])) echo $_POST["fa3"]; ?>" size="1" maxlength="1">
	<input name="fa4" type="text" id="fa4" class="arrival" value="<?php if (isset($_POST["fa4"])) echo $_POST["fa4"]; ?>" size="1" maxlength="1"> 

	<input name="pdeliv" type="text" class="vyssirp deliv" id="pdeliv" value="<?php if (isset($_POST["pdeliv"])) echo $_POST["pdeliv"]; ?>" size="20" maxlength="20">
	<input name="ptruckno" type="text" class="vyssirp truckno" id="ptruckno" value="<?php if (isset($_POST["ptruckno"])) echo $_POST["ptruckno"]; ?>" size="20" maxlength="20">
	<input name="pname" type="text" class="vyssirp name" id="pname" value="<?php if (isset($_POST["pname"])) echo $_POST["pname"]; ?>" size="20" maxlength="20">
	<input name="precname" type="text" class="vyssirp recname" id="precname" value="<?php if (isset($_POST["precname"])) echo $_POST["precname"]; ?>" size="20" maxlength="20">
	<input name="pins" type="text" class="vyssirp ins" id="pins" value="<?php if (isset($_POST["pins"])) echo $_POST["pins"]; ?>" size="20" maxlength="20">
	<input name="pdate" type="text" class="vyssirp date" id="pdate" value="<?php if (isset($_POST["pdate"])) echo $_POST["pdate"]; ?>" size="20" maxlength="20">

	<input name="xdeliv" type="text" class="vyssirx deliv" id="xdeliv" value="<?php if (isset($_POST["xdeliv"])) echo $_POST["xdeliv"]; ?>" size="20" maxlength="20">
	<input name="xtruckno" type="text" class="vyssirx truckno" id="xtruckno" value="<?php if (isset($_POST["xtruckno"])) echo $_POST["ptruckno"]; ?>" size="20" maxlength="20">
	<input name="xname" type="text" class="vyssirx name" id="xname" value="<?php if (isset($_POST["xname"])) echo $_POST["xname"]; ?>" size="20" maxlength="20">
	<input name="xrecname" type="text" class="vyssirx recname" id="xrecname" value="<?php if (isset($_POST["xrecname"])) echo $_POST["xrecname"]; ?>" size="20" maxlength="20">
	<input name="xins" type="text" class="vyssirx ins" id="xins" value="<?php if (isset($_POST["xins"])) echo $_POST["xins"]; ?>" size="20" maxlength="20">
	<input name="xdate" type="text" class="vyssirx date" id="xdate" value="<?php if (isset($_POST["xdate"])) echo $_POST["xdate"]; ?>" size="20" maxlength="20">

	<input name="ndeliv" type="text" class="vyssirn deliv" id="ndeliv" value="<?php if (isset($_POST["ndeliv"])) echo $_POST["ndeliv"]; ?>" size="20" maxlength="20">
	<input name="ntruckno" type="text" class="vyssirn truckno" id="ntruckno" value="<?php if (isset($_POST["ntruckno"])) echo $_POST["ntruckno"]; ?>" size="20" maxlength="20">
	<input name="nname" type="text" class="vyssirn name" id="nname" value="<?php if (isset($_POST["nname"])) echo $_POST["nname"]; ?>" size="20" maxlength="20">
	<input name="nrecname" type="text" class="vyssirn recname" id="nrecname" value="<?php if (isset($_POST["nrecname"])) echo $_POST["nrecname"]; ?>" size="20" maxlength="20">
	<input name="nins" type="text" class="vyssirn ins" id="nins" value="<?php if (isset($_POST["nins"])) echo $_POST["nins"]; ?>" size="20" maxlength="20">
	<input name="ndate" type="text" class="vyssirn date" id="ndate" value="<?php if (isset($_POST["ndate"])) echo $_POST["ndate"]; ?>" size="20" maxlength="20">

	<input name="fdeliv" type="text" class="vyssirf deliv" id="fdeliv" value="<?php if (isset($_POST["fdeliv"])) echo $_POST["fdeliv"]; ?>" size="20" maxlength="20">
	<input name="ftruckno" type="text" class="vyssirf truckno" id="ftruckno" value="<?php if (isset($_POST["ftruckno"])) echo $_POST["ftruckno"]; ?>" size="20" maxlength="20">
	<input name="fname" type="text" class="vyssirf name" id="fname" value="<?php if (isset($_POST["fname"])) echo $_POST["fname"]; ?>" size="20" maxlength="20">
	<input name="frecname" type="text" class="vyssirf recname" id="frecname" value="<?php if (isset($_POST["frecname"])) echo $_POST["frecname"]; ?>" size="20" maxlength="20">
	<input name="fins" type="text" class="vyssirf ins" id="fins" value="<?php if (isset($_POST["fins"])) echo $_POST["fins"]; ?>" size="20" maxlength="20">
	<input name="fdate" type="text" class="vyssirf date" id="fdate" value="<?php if (isset($_POST["fdate"])) echo $_POST["fdate"]; ?>" size="20" maxlength="20">
	<br> 
	<?php if (isset($_POST["submit"])) { ?>
		<img id="sig_img1" src="<?php echo $signature_img1?>">
		<img id="sig_img2" src="<?php echo $signature_img2?>">
	<?php } else { ?>
		<canvas id="signature1" width="200" height="40"></canvas>
		<input type="hidden" name="signature1" />
		<canvas id="signature2" width="200" height="40"></canvas>
		<input type="hidden" name="signature2" />
	<?php 
	 } ?>
<p><input name="submit" type="submit" id="submit" value="Dowland PDF" <?php if (isset($_POST['submit'])) echo 'style="display: none;"'; ?>></p>
<p><input name="next" type="submit" id="next" value="Next" <?php if (isset($_POST['submit'])) echo 'style="display: none;"'; ?>></p>
</form>
  </div>

