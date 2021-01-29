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


/*  toto je povodna pdf verzia */
    img {
		position: fixed; 
		width: 720px; 
		height: 1017px; 
		margin: 0px; 
		z-index: -1; 
		top: 10px; 
		left: 12px; 
	}
	#sig_img1 {
		position: fixed; 
		left: 177px; 
		top: 895px; 
		height: 25px;
		width: 164px;		
	}
	#sig_img2 {
		position: fixed; 
		left: 455px; 
		top: 895px; 
		height: 25px;
		width: 243px;		
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


    /* nove */
	img {
		position: absolute; 
		width: 720px; 
		height: 1017px; 
		margin: 0px; 
		z-index: -1; 
	}
	#model {
		position: absolute;  
		top: 180px; 		
		left: 120px; 
		width: 90px; 	
	}

	#origin {
		position: absolute;  
		top: 155px; 		
		left: 110px; 
		width: 100px; 	
	}

	#n {
		position: absolute;  
		top: 100px; 		
		left: 480px; 
		width: 200px; 	
	}

	#destination {
		position: absolute;  
		top: 155px; 		
		left: 290px; 
		width: 128px; 	
	}
	#transport {
		position: absolute;  
		top: 155px; 		
		left: 555px; 
		width: 140px; 	
	}

	#vin {
		position: absolute;  
		top: 180px; 		
		left: 345px; 
		letter-spacing: 13px;
		width: 345px; 	
	}

	#damages-a {
		position: absolute;  
		top: 212px; 		
		left: 190px; 
		width: 20px; 	
	}
	#damages-b {
		position: absolute;  
		top: 212px; 		
		left: 240px; 
		width: 20px; 	
	}
	#damages-c {
		position: absolute;  
		top: 212px; 		
		left: 290px; 
		width: 20px; 	
	}
	#km {
		position: absolute;  
		top: 250px; 		
		left: 93px; 
		width: 51px; 	
	}
	#order {
		position: absolute;  
		top: 250px; 		
		left: 205px; 
		width: 132px; 	
	}
	#reg {
		position: absolute;  
		top: 275px; 		
		left: 180px; 
		width: 88px; 	
	}
	#road {
		position: absolute;  
		top: 275px; 		
		left: 338px; 
		width: 59px; 	
	}
	#rail {
		position: absolute;  
		top: 275px; 		
		left: 398px; 
		width: 58px; 	
	}
	#sea {
		position: absolute;  
		top: 275px; 		
		left: 458px; 
		width: 50px; 	
	}
	#barge {
		position: absolute;  
		top: 275px; 		
		left: 509px; 
		width: 59px; 	
	}
	#compound {
		position: absolute;  
		top: 275px; 		
		left: 570px; 
		width: 66px; 	
	}
	#factory {
		position: absolute;  
		top: 275px; 		
		left: 638px; 
		width: 58px; 	
	}
	#loc-1 {
		position: absolute;  
		top: 547px; 		
		left: 63px; 
		width: 73px; 	
	}
	#nat-1 {
		position: absolute;  
		top: 547px; 		
		left: 137px; 
		width: 49px; 	
	}
	#sev-1 {
		position: absolute;  
		top: 547px; 		
		left: 188px; 
		width: 47px; 	
	}
	#ref-1 {
		position: absolute;  
		top: 547px; 		
		left: 236px; 
		width: 101px; 	
	}
	#add-1 {
		position: absolute;  
		top: 547px; 		
		left: 338px; 
		width: 360px; 	
	}

	#loc-2 {
		position: absolute;  
		top: 573px; 		
		left: 63px; 
		width: 73px; 	
	}
	#nat-2 {
		position: absolute;  
		top: 573px; 		
		left: 137px; 
		width: 49px; 	
	}
	#sev-2 {
		position: absolute;  
		top: 573px; 		
		left: 188px; 
		width: 47px; 	
	}
	#ref-2 {
		position: absolute;  
		top: 573px; 		
		left: 236px; 
		width: 101px; 	
	}
	#add-2 {
		position: absolute;  
		top: 573px; 		
		left: 338px; 
		width: 360px; 	
	}


	#loc-3 {
		position: absolute;  
		top: 598px; 		
		left: 63px; 
		width: 73px; 	
	}
	#nat-3 {
		position: absolute;  
		top: 598px; 		
		left: 137px; 
		width: 49px; 	
	}
	#sev-3 {
		position: absolute;  
		top: 598px; 		
		left: 188px; 
		width: 47px; 	
	}
	#ref-3 {
		position: absolute;  
		top: 598px; 		
		left: 236px; 
		width: 101px; 	
	}
	#add-3 {
		position: absolute;  
		top: 598px; 		
		left: 338px; 
		width: 360px; 	
	}

	#loc-4 {
		position: absolute;  
		top: 622px; 		
		left: 63px; 
		width: 73px; 	
	}
	#nat-4 {
		position: absolute;  
		top: 622px; 		
		left: 137px; 
		width: 49px; 	
	}
	#sev-4 {
		position: absolute;  
		top: 622px; 		
		left: 188px; 
		width: 47px; 	
	}
	#ref-4 {
		position: absolute;  
		top: 622px; 		
		left: 236px; 
		width: 101px; 	
	}
	#add-4 {
		position: absolute;  
		top: 622px; 		
		left: 338px; 
		width: 360px; 	
	}


	#loc-5 {
		position: absolute;  
		top: 647px; 		
		left: 63px; 
		width: 73px; 	
	}
	#nat-5 {
		position: absolute;  
		top: 647px; 		
		left: 137px; 
		width: 49px; 	
	}
	#sev-5 {
		position: absolute;  
		top: 647px; 		
		left: 188px; 
		width: 47px; 	
	}
	#ref-5 {
		position: absolute;  
		top: 647px; 		
		left: 236px; 
		width: 101px; 	
	}
	#add-5 {
		position: absolute;  
		top: 647px; 		
		left: 338px; 
		width: 360px; 	
	}
	#doc {
		position: absolute;  
		top: 672px; 		
		left: 57px; 
		width: 17px; 	
	}
	#yes {
		position: absolute;  
		top: 686px; 		
		left: 528px; 
		width: 17px; 	
	}
	#no {
		position: absolute;  
		top: 686px; 		
		left: 613px; 
		width: 17px; 	
	}
	#rem-1 {
		position: absolute;  
		top: 707px; 		
		left: 201px; 
		width: 474px; 	
	}
	#rem-2 {
		position: absolute;  
		top: 728px; 		
		left: 60px; 
		width: 615px; 	
	}
	#com-1 {
		position: absolute;  
		top: 800px; 		
		left: 177px; 
		width: 164px; 	
	}
	#com-2 {
		position: absolute;  
		top: 800px; 		
		left: 455px; 
		width: 243px; 	
	}
	#lorry-1 {
		position: absolute;  
		top: 825px; 		
		left: 173px; 
		width: 167px; 	
	}
	#lorry-2 {
		position: absolute;  
		top: 825px; 		
		left: 450px; 
		width: 247px; 	
	}
	#name-1 {
		position: absolute;  
		top: 870px; 		
		left: 95px; 
		width: 245px; 	
	}

	#name-2 {
		position: absolute;  
		top: 870px; 		
		left: 380px; 
		width: 317px; 	
	}

	#place {
		position: absolute;  
		top: 921px; 		
		left: 160px; 
		width: 120px; 	
	}
	#date {
		position: absolute;  
		top: 921px; 		
		left: 332px; 
		width: 107px; 	
	}
	#time {
		position: absolute;  
		top: 921px; 		
		left: 503px; 
		width: 150px; 	
	}
	#submit {
		position: absolute;  
		top: 970px; 		
		left: 470px; 
			
	}
	#next {
		position: absolute;  
		top: 970px; 		
		left: 600px; 
			
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

	#vin {
		position: absolute;  
		top: 420px; 		
		left: 783px; 
		letter-spacing: 40px;
		width: 790px; 	
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
	#com-1 {
		position: absolute;  
		top: 1850px; 		
		left: 400px; 
		width: 370px; 	
	}
	#com-2 {
		position: absolute;  
		top: 1850px; 		
		left: 1040px; 
		width: 550px; 	
	}
	#lorry-1 {
		position: absolute;  
		top: 1900px; 		
		left: 400px; 
		width: 370px; 	
	}
	#lorry-2 {
		position: absolute;  
		top: 1900px; 		
		left: 1040px; 
		width: 550px; 	
	}
	#name-1 {
		position: absolute;  
		top: 2007px; 		
		left: 210px; 
		width: 550px; 	
	}

	#name-2 {
		position: absolute;  
		top: 2007px; 		
		left: 860px; 
		width: 710px; 	
	}

	#place {
		position: absolute;  
		top: 2130px; 		
		left: 360px; 
		width: 165px; 	
	}
	#date {
		position: absolute;  
		top: 2130px; 		
		left: 760px; 
		width: 165px; 	
	}
	#time {
		position: absolute;  
		top: 2130px; 		
		left: 1150px; 
		width: 165px; 	
	}
	canvas#signature1 {
		position: absolute; 
  		border: 2px solid black;		  
		left: 400px; 
		top: 2040px; 		
	}
	canvas#signature2 {
		position: absolute; 
  		border: 2px solid black;		  
		left: 1040px; 
		top: 2040px; 		
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
    <input name="n" type="text" id="n" value="<?php if (isset($_POST["n"])) echo $_POST["n"]; ?>" size="15" maxlength="15">
	<input name="destination" type="text" id="destination" value="<?php if (isset($_POST["destination"])) echo $_POST["destination"]; ?>" size="20" maxlength="20">
	<input name="transport" type="text" id="transport" value="<?php if (isset($_POST["transport"])) echo $_POST["transport"]; ?>" size="23" maxlength="23">
	<input name="origin" type="text" id="origin" value="<?php if (isset($_POST["origin"])) echo $_POST["origin"]; ?>" size="12" maxlength="12">
	<input name="model" type="text" id="model" value="<?php if (isset($_POST["model"])) echo $_POST["model"]; ?>" size="10" maxlength="10">
	<input name="vin" type="text" id="vin" value="<?php if (isset($_POST["vin"])) echo $_POST["vin"]; ?>" size="17" maxlength="17">
	<input name="damages-a" type="text" id="damages-a" value="<?php if (isset($_POST["damages-a"])) echo $_POST["damages-a"]; ?>" size="1" maxlength="1">
	<input name="damages-b" type="text" id="damages-b" value="<?php if (isset($_POST["damages-b"])) echo $_POST["damages-b"]; ?>" size="1" maxlength="1">
	<input name="damages-c" type="text" id="damages-c" value="<?php if (isset($_POST["damages-c"])) echo $_POST["damages-c"]; ?>" size="1" maxlength="1">
	<input name="km" type="text" id="km" value="<?php if (isset($_POST["km"])) echo $_POST["km"]; ?>" size="6" maxlength="6">
	<input name="order" type="text" id="order" value="<?php if (isset($_POST["order"])) echo $_POST["order"]; ?>" size="22" maxlength="22">
	<input name="reg" type="text" id="reg" value="<?php if (isset($_POST["reg"])) echo $_POST["reg"]; ?>" size="13" maxlength="13">
	<input name="road" type="text" id="road" value="<?php if (isset($_POST["road"])) echo $_POST["road"]; ?>" size="5" maxlength="5">
	<input name="rail" type="text" id="rail" value="<?php if (isset($_POST["rail"])) echo $_POST["rail"]; ?>" size="5" maxlength="5">
	<input name="sea" type="text" id="sea" value="<?php if (isset($_POST["sea"])) echo $_POST["sea"]; ?>" size="5" maxlength="5">
	<input name="barge" type="text" id="barge" value="<?php if (isset($_POST["barge"])) echo $_POST["barge"]; ?>" size="5" maxlength="5">
	<input name="compound" type="text" id="compound" value="<?php if (isset($_POST["compound"])) echo $_POST["compound"]; ?>" size="5" maxlength="5">
	<input name="factory" type="text" id="factory" value="<?php if (isset($_POST["factory"])) echo $_POST["factory"]; ?>" size="5" maxlength="5">
	
	<!-- prostredna cast -->
	<input name="loc-1" type="text" id="loc-1" value="<?php if (isset($_POST["loc-1"])) echo $_POST["loc-1"]; ?>" size="11" maxlength="11">
	<input name="nat-1" type="text" id="nat-1" value="<?php if (isset($_POST["nat-1"])) echo $_POST["nat-1"]; ?>" size="6" maxlength="6">
	<input name="sev-1" type="text" id="sev-1" value="<?php if (isset($_POST["sev-1"])) echo $_POST["sev-1"]; ?>" size="6" maxlength="6">
	<input name="ref-1" type="text" id="ref-1" value="<?php if (isset($_POST["ref-1"])) echo $_POST["ref-1"]; ?>" size="15" maxlength="15">
	<input name="add-1" type="text" id="add-1" value="<?php if (isset($_POST["add-1"])) echo $_POST["add-1"]; ?>" size="50" maxlength="50">
	
	<input name="loc-2" type="text" id="loc-2" value="<?php if (isset($_POST["loc-2"])) echo $_POST["loc-2"]; ?>" size="11" maxlength="11">
	<input name="nat-2" type="text" id="nat-2" value="<?php if (isset($_POST["nat-2"])) echo $_POST["nat-2"]; ?>" size="6" maxlength="6">
	<input name="sev-2" type="text" id="sev-2" value="<?php if (isset($_POST["sev-2"])) echo $_POST["sev-2"]; ?>" size="6" maxlength="6">
	<input name="ref-2" type="text" id="ref-2" value="<?php if (isset($_POST["ref-2"])) echo $_POST["ref-2"]; ?>" size="15" maxlength="15">
	<input name="add-2" type="text" id="add-2" value="<?php if (isset($_POST["add-2"])) echo $_POST["add-2"]; ?>" size="50" maxlength="50">
	
	<input name="loc-3" type="text" id="loc-3" value="<?php if (isset($_POST["loc-3"])) echo $_POST["loc-3"]; ?>" size="11" maxlength="11">
	<input name="nat-3" type="text" id="nat-3" value="<?php if (isset($_POST["nat-3"])) echo $_POST["nat-3"]; ?>" size="6" maxlength="6">
	<input name="sev-3" type="text" id="sev-3" value="<?php if (isset($_POST["sev-3"])) echo $_POST["sev-3"]; ?>" size="6" maxlength="6">
	<input name="ref-3" type="text" id="ref-3" value="<?php if (isset($_POST["ref-3"])) echo $_POST["ref-3"]; ?>" size="15" maxlength="15">
	<input name="add-3" type="text" id="add-3" value="<?php if (isset($_POST["add-3"])) echo $_POST["add-3"]; ?>" size="50" maxlength="50">
	
	<input name="loc-4" type="text" id="loc-4" value="<?php if (isset($_POST["loc-4"])) echo $_POST["loc-4"]; ?>" size="11" maxlength="11">
	<input name="nat-4" type="text" id="nat-4" value="<?php if (isset($_POST["nat-4"])) echo $_POST["nat-4"]; ?>" size="6" maxlength="6">
	<input name="sev-4" type="text" id="sev-4" value="<?php if (isset($_POST["sev-4"])) echo $_POST["sev-4"]; ?>" size="6" maxlength="6">
	<input name="ref-4" type="text" id="ref-4" value="<?php if (isset($_POST["ref-4"])) echo $_POST["ref-4"]; ?>" size="15" maxlength="15">
	<input name="add-4" type="text" id="add-4" value="<?php if (isset($_POST["add-4"])) echo $_POST["add-4"]; ?>" size="50" maxlength="50">
	
	<input name="loc-5" type="text" id="loc-5" value="<?php if (isset($_POST["loc-5"])) echo $_POST["loc-5"]; ?>" size="11" maxlength="11">
	<input name="nat-5" type="text" id="nat-5" value="<?php if (isset($_POST["nat-5"])) echo $_POST["nat-5"]; ?>" size="6" maxlength="6">
	<input name="sev-5" type="text" id="sev-5" value="<?php if (isset($_POST["sev-5"])) echo $_POST["sev-5"]; ?>" size="6" maxlength="6">
	<input name="ref-5" type="text" id="ref-5" value="<?php if (isset($_POST["ref-5"])) echo $_POST["ref-5"]; ?>" size="15" maxlength="15">
	<input name="add-5" type="text" id="add-5" value="<?php if (isset($_POST["add-5"])) echo $_POST["add-5"]; ?>" size="50" maxlength="50">
	
	<input name="doc" type="text" id="doc" value="<?php if (isset($_POST["doc"])) echo $_POST["doc"]; ?>" size="1" maxlength="1">
	<input name="yes" type="text" id="yes" value="<?php if (isset($_POST["yes"])) echo $_POST["yes"]; ?>" size="1" maxlength="1">
	<input name="no" type="text" id="no" value="<?php if (isset($_POST["no"])) echo $_POST["no"]; ?>" size="1" maxlength="1">
	<input name="rem-1" type="text" id="rem-1" value="<?php if (isset($_POST["rem-1"])) echo $_POST["rem-1"]; ?>" size="70" maxlength="70">
	<input name="rem-2" type="text" id="rem-2" value="<?php if (isset($_POST["rem-2"])) echo $_POST["rem-2"]; ?>" size="90" maxlength="90">
	
	<!-- dolna cast -->
	<input name="com-1" type="text" id="com-1" value="<?php if (isset($_POST["com-1"])) echo $_POST["com-1"]; ?>" size="25" maxlength="25">
	<input name="com-2" type="text" id="com-2" value="<?php if (isset($_POST["com-2"])) echo $_POST["com-2"]; ?>" size="40" maxlength="40">
	
	<input name="lorry-1" type="text" id="lorry-1" value="<?php if (isset($_POST["lorry-1"])) echo $_POST["lorry-1"]; ?>" size="25" maxlength="25">
	<input name="lorry-2" type="text" id="lorry-2" value="<?php if (isset($_POST["lorry-2"])) echo $_POST["lorry-2"]; ?>" size="40" maxlength="40">
	
	<input name="name-1" type="text" id="name-1" value="<?php if (isset($_POST["name-1"])) echo $_POST["name-1"]; ?>" size="35" maxlength="35">
	<input name="name-2" type="text" id="name-2" value="<?php if (isset($_POST["name-2"])) echo $_POST["name-2"]; ?>" size="40" maxlength="40">
	
	<?php if (isset($_POST["submit"])) { ?>
		<img id="sig_img1" src="<?php echo $signature_img1?>">
		<img id="sig_img2" src="<?php echo $signature_img2?>">
	<?php } else { ?>
		<canvas id="signature1" width="370" height="60"></canvas>
		<input type="hidden" name="signature1" />
		<canvas id="signature2" width="550" height="60"></canvas>
		<input type="hidden" name="signature2" />
	<?php 
	 } ?>

	<input name="place" type="text" id="place" value="<?php if (isset($_POST["place"])) echo $_POST["place"]; ?>" size="20" maxlength="20">
	<input name="date" type="text" id="date" value="<?php if (isset($_POST["date"])) echo $_POST["date"]; ?>" size="20" maxlength="20">
	<input name="time" type="text" id="time" value="<?php if (isset($_POST["time"])) echo $_POST["time"]; ?>" size="20" maxlength="20">
	

	<br>
	
<p><input name="submit" type="submit" id="submit" value="Download PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>