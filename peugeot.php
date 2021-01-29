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

/* PDF verzia*/

    img {
		position: absolute;
		left: 12px;
		top: 10px; 
		width: 720px; 
		height: 1017px; 
		margin: 0px; 
		z-index: -1; 
	}
	#sig_img1 {
		position: fixed; 
		left: 200px; 
		top: 942px; 
		height: 20px;
		width: 510px;		
		outline: 3px solid red;
	}
	#sig_img2 {
		position: fixed; 
		left: 200px; 
		top: 990px; 
		height: 20px;
		width: 510px;	
		outline: 3px solid red;	
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

	#vin{
		position: absolute;
		height: 15px;
		top: 57px;
		left: 50px;
		width: 230px;
		letter-spacing: 1px;
		font-size: 8px;
	}

	#e-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 25px;
		width: 30px;
		font-size: 8px;
	}
	#a-cd-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 56px;
		width: 34px;
		font-size: 8px;
	}
	#a-ld-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 92px;
		width: 34px;
		font-size: 8px;
	}
	#a-t-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 128px;
		width: 57px;
		font-size: 8px;
	}
	#b-cd-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 187px;
		width: 34px;
		font-size: 8px;
	}
	#b-ld-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 223px;
		width: 34px;
		font-size: 8px;
	}
	#b-t-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 259px;
		width: 57px;
		font-size: 8px;
	}
	#c-cd-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 317px;
		width: 34px;
		font-size: 8px;
	}
	#c-ld-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 353px;
		width: 34px;
		font-size: 8px;
	}
	#c-t-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 390px;
		width: 57px;
		font-size: 8px;
	}
	#d-cd-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 448px;
		width: 34px;
		font-size: 8px;
	}
	#d-ld-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 484px;
		width: 34px;
		font-size: 8px;
	}
	#d-t-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 520px;
		width: 57px;
		font-size: 8px;
	}
	#e-cd-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 578px;
		width: 34px;
		font-size: 8px;
	}
	#e-ld-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 615px;
		width: 34px;
		font-size: 8px;
	}
	#e-t-1{
		position: absolute;
		height: 17px;
		top: 385px;
		left: 650px;
		width: 57px;
		font-size: 8px;
	}





	#e-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 25px;
		width: 30px;
		font-size: 8px;
	}
	#a-cd-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 56px;
		width: 34px;
		font-size: 8px;
	}
	#a-ld-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 92px;
		width: 34px;
		font-size: 8px;
	}
	#a-t-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 128px;
		width: 57px;
		font-size: 8px;
	}
	#b-cd-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 187px;
		width: 34px;
		font-size: 8px;
	}
	#b-ld-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 223px;
		width: 34px;
		font-size: 8px;
	}
	#b-t-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 259px;
		width: 57px;
		font-size: 8px;
	}
	#c-cd-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 317px;
		width: 34px;
		font-size: 8px;
	}
	#c-ld-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 353px;
		width: 34px;
		font-size: 8px;
	}
	#c-t-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 390px;
		width: 57px;
		font-size: 8px;
	}
	#d-cd-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 448px;
		width: 34px;
		font-size: 8px;
	}
	#d-ld-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 484px;
		width: 34px;
		font-size: 8px;
	}
	#d-t-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 520px;
		width: 57px;
		font-size: 8px;
	}
	#e-cd-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 578px;
		width: 34px;
		font-size: 8px;
	}
	#e-ld-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 615px;
		width: 34px;
		font-size: 8px;
	}
	#e-t-2{
		position: absolute;
		height: 17px;
		top: 404px;
		left: 650px;
		width: 57px;
		font-size: 8px;
	}



	#e-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 25px;
		width: 30px;
		font-size: 8px;
	}
	#a-cd-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 56px;
		width: 34px;
		font-size: 8px;
	}
	#a-ld-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 92px;
		width: 34px;
		font-size: 8px;
	}
	#a-t-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 128px;
		width: 57px;
		font-size: 8px;
	}
	#b-cd-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 187px;
		width: 34px;
		font-size: 8px;
	}
	#b-ld-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 223px;
		width: 34px;
		font-size: 8px;
	}
	#b-t-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 259px;
		width: 57px;
		font-size: 8px;
	}
	#c-cd-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 317px;
		width: 34px;
		font-size: 8px;
	}
	#c-ld-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 353px;
		width: 34px;
		font-size: 8px;
	}
	#c-t-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 390px;
		width: 57px;
		font-size: 8px;
	}
	#d-cd-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 448px;
		width: 34px;
		font-size: 8px;
	}
	#d-ld-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 484px;
		width: 34px;
		font-size: 8px;
	}
	#d-t-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 520px;
		width: 57px;
		font-size: 8px;
	}
	#e-cd-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 578px;
		width: 34px;
		font-size: 8px;
	}
	#e-ld-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 615px;
		width: 34px;
		font-size: 8px;
	}
	#e-t-3{
		position: absolute;
		height: 17px;
		top: 423px;
		left: 650px;
		width: 57px;
		font-size: 8px;
	}


	#e-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 25px;
		width: 30px;
		font-size: 8px;
	}
	#a-cd-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 56px;
		width: 34px;
		font-size: 8px;
	}
	#a-ld-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 92px;
		width: 34px;
		font-size: 8px;
	}
	#a-t-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 128px;
		width: 57px;
		font-size: 8px;
	}
	#b-cd-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 187px;
		width: 34px;
		font-size: 8px;
	}
	#b-ld-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 223px;
		width: 34px;
		font-size: 8px;
	}
	#b-t-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 259px;
		width: 57px;
		font-size: 8px;
	}
	#c-cd-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 317px;
		width: 34px;
		font-size: 8px;
	}
	#c-ld-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 353px;
		width: 34px;
		font-size: 8px;
	}
	#c-t-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 390px;
		width: 57px;
		font-size: 8px;
	}
	#d-cd-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 448px;
		width: 34px;
		font-size: 8px;
	}
	#d-ld-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 484px;
		width: 34px;
		font-size: 8px;
	}
	#d-t-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 520px;
		width: 57px;
		font-size: 8px;
	}
	#e-cd-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 578px;
		width: 34px;
		font-size: 8px;
	}
	#e-ld-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 615px;
		width: 34px;
		font-size: 8px;
	}
	#e-t-4{
		position: absolute;
		height: 17px;
		top: 443px;
		left: 650px;
		width: 57px;
		font-size: 8px;
	}


	#e-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 25px;
		width: 30px;
		font-size: 8px;
	}
	#a-cd-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 56px;
		width: 34px;
		font-size: 8px;
	}
	#a-ld-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 92px;
		width: 34px;
		font-size: 8px;
	}
	#a-t-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 128px;
		width: 57px;
		font-size: 8px;
	}
	#b-cd-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 187px;
		width: 34px;
		font-size: 8px;
	}
	#b-ld-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 223px;
		width: 34px;
		font-size: 8px;
	}
	#b-t-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 259px;
		width: 57px;
		font-size: 8px;
	}
	#c-cd-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 317px;
		width: 34px;
		font-size: 8px;
	}
	#c-ld-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 353px;
		width: 34px;
		font-size: 8px;
	}
	#c-t-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 390px;
		width: 57px;
		font-size: 8px;
	}
	#d-cd-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 448px;
		width: 34px;
		font-size: 8px;
	}
	#d-ld-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 484px;
		width: 34px;
		font-size: 8px;
	}
	#d-t-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 520px;
		width: 57px;
		font-size: 8px;
	}
	#e-cd-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 578px;
		width: 34px;
		font-size: 8px;
	}
	#e-ld-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 615px;
		width: 34px;
		font-size: 8px;
	}
	#e-t-5{
		position: absolute;
		height: 17px;
		top: 463px;
		left: 650px;
		width: 57px;
		font-size: 8px;
	}


	#e-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 25px;
		width: 30px;
		font-size: 8px;
	}
	#a-cd-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 56px;
		width: 34px;
		font-size: 8px;
	}
	#a-ld-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 92px;
		width: 34px;
		font-size: 8px;
	}
	#a-t-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 128px;
		width: 57px;
		font-size: 8px;
	}
	#b-cd-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 187px;
		width: 34px;
		font-size: 8px;
	}
	#b-ld-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 223px;
		width: 34px;
		font-size: 8px;
	}
	#b-t-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 259px;
		width: 57px;
		font-size: 8px;
	}
	#c-cd-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 317px;
		width: 34px;
		font-size: 8px;
	}
	#c-ld-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 353px;
		width: 34px;
		font-size: 8px;
	}
	#c-t-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 390px;
		width: 57px;
		font-size: 8px;
	}
	#d-cd-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 448px;
		width: 34px;
		font-size: 8px;
	}
	#d-ld-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 484px;
		width: 34px;
		font-size: 8px;
	}
	#d-t-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 520px;
		width: 57px;
		font-size: 8px;
	}
	#e-cd-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 578px;
		width: 34px;
		font-size: 8px;
	}
	#e-ld-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 615px;
		width: 34px;
		font-size: 8px;
	}
	#e-t-6{
		position: absolute;
		height: 17px;
		top: 483px;
		left: 650px;
		width: 57px;
		font-size: 8px;
	}



	#e-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 25px;
		width: 30px;
		font-size: 8px;
	}
	#a-cd-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 56px;
		width: 34px;
		font-size: 8px;
	}
	#a-ld-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 92px;
		width: 34px;
		font-size: 8px;
	}
	#a-t-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 128px;
		width: 57px;
		font-size: 8px;
	}
	#b-cd-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 187px;
		width: 34px;
		font-size: 8px;
	}
	#b-ld-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 223px;
		width: 34px;
		font-size: 8px;
	}
	#b-t-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 259px;
		width: 57px;
		font-size: 8px;
	}
	#c-cd-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 317px;
		width: 34px;
		font-size: 8px;
	}
	#c-ld-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 353px;
		width: 34px;
		font-size: 8px;
	}
	#c-t-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 390px;
		width: 57px;
		font-size: 8px;
	}
	#d-cd-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 448px;
		width: 34px;
		font-size: 8px;
	}
	#d-ld-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 484px;
		width: 34px;
		font-size: 8px;
	}
	#d-t-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 520px;
		width: 57px;
		font-size: 8px;
	}
	#e-cd-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 578px;
		width: 34px;
		font-size: 8px;
	}
	#e-ld-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 615px;
		width: 34px;
		font-size: 8px;
	}
	#e-t-7{
		position: absolute;
		height: 17px;
		top: 502px;
		left: 650px;
		width: 57px;
		font-size: 8px;
	}



	#e-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 25px;
		width: 30px;
		font-size: 8px;
	}
	#a-cd-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 56px;
		width: 34px;
		font-size: 8px;
	}
	#a-ld-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 92px;
		width: 34px;
		font-size: 8px;
	}
	#a-t-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 128px;
		width: 57px;
		font-size: 8px;
	}
	#b-cd-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 187px;
		width: 34px;
		font-size: 8px;
	}
	#b-ld-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 223px;
		width: 34px;
		font-size: 8px;
	}
	#b-t-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 259px;
		width: 57px;
		font-size: 8px;
	}
	#c-cd-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 317px;
		width: 34px;
		font-size: 8px;
	}
	#c-ld-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 353px;
		width: 34px;
		font-size: 8px;
	}
	#c-t-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 390px;
		width: 57px;
		font-size: 8px;
	}
	#d-cd-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 448px;
		width: 34px;
		font-size: 8px;
	}
	#d-ld-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 484px;
		width: 34px;
		font-size: 8px;
	}
	#d-t-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 520px;
		width: 57px;
		font-size: 8px;
	}
	#e-cd-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 578px;
		width: 34px;
		font-size: 8px;
	}
	#e-ld-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 615px;
		width: 34px;
		font-size: 8px;
	}
	#e-t-8{
		position: absolute;
		height: 17px;
		top: 522px;
		left: 650px;
		width: 57px;
		font-size: 8px;
	}



	#e-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 25px;
		width: 30px;
		font-size: 8px;
	}
	#a-cd-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 56px;
		width: 34px;
		font-size: 8px;
	}
	#a-ld-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 92px;
		width: 34px;
		font-size: 8px;
	}
	#a-t-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 128px;
		width: 57px;
		font-size: 8px;
	}
	#b-cd-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 187px;
		width: 34px;
		font-size: 8px;
	}
	#b-ld-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 223px;
		width: 34px;
		font-size: 8px;
	}
	#b-t-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 259px;
		width: 57px;
		font-size: 8px;
	}
	#c-cd-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 317px;
		width: 34px;
		font-size: 8px;
	}
	#c-ld-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 353px;
		width: 34px;
		font-size: 8px;
	}
	#c-t-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 390px;
		width: 57px;
		font-size: 8px;
	}
	#d-cd-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 448px;
		width: 34px;
		font-size: 8px;
	}
	#d-ld-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 484px;
		width: 34px;
		font-size: 8px;
	}
	#d-t-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 520px;
		width: 57px;
		font-size: 8px;
	}
	#e-cd-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 578px;
		width: 34px;
		font-size: 8px;
	}
	#e-ld-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 615px;
		width: 34px;
		font-size: 8px;
	}
	#e-t-9{
		position: absolute;
		height: 17px;
		top: 542px;
		left: 650px;
		width: 57px;
		font-size: 8px;
	}


	#a{
		position: absolute;
		height: 17px;
		top: 579px;
		left: 104px;
		width: 50px;
		font-size: 8px;
	}
	#b{
		position: absolute;
		height: 17px;
		top: 579px;
		left: 236px;
		width: 50px;
		font-size: 8px;
	}
	#c{
		position: absolute;
		height: 17px;
		top: 579px;
		left: 369px;
		width: 50px;
		font-size: 8px;
	}
	#d{
		position: absolute;
		height: 17px;
		top: 579px;
		left: 502px;
		width: 50px;
		font-size: 8px;
	}
	#e{
		position: absolute;
		height: 17px;
		top: 579px;
		left: 634px;
		width: 50px;
		font-size: 8px;
	}


	#a-r{
		position: absolute;
		height: 17px;
		top: 603px;
		left: 146px;
		width: 565px;
		font-size: 8px;
	}
	#b-r{
		position: absolute;
		height: 17px;
		top: 621px;
		left: 40px;
		width: 670px;
		font-size: 8px;
	}
	#c-r{
		position: absolute;
		height: 17px;
		top: 639px;
		left: 40px;
		width: 670px;
		font-size: 8px;
	}
	#d-r{
		position: absolute;
		height: 17px;
		top: 656px;
		left: 40px;
		width: 670px;
		font-size: 8px;
	}
	#e-r{
		position: absolute;
		height: 17px;
		top: 674px;
		left: 40px;
		width: 670px;
		font-size: 8px;
	}

	#loading-a{
		position: absolute;
		height: 10px;
		top: 704px;
		left: 220px;
		width: 13px;
		font-size: 8px;
	}
	#unloading-a{
		position: absolute;
		height: 10px;
		top: 718px;
		left: 220px;
		width: 13px;
		font-size: 8px;
	}
	#loading-b{
		position: absolute;
		height: 10px;
		top: 703px;
		left: 325px;
		width: 13px;
		font-size: 8px;
	}
	#unloading-b{
		position: absolute;
		height: 10px;
		top: 718px;
		left: 325px;
		width: 13px;
		font-size: 8px;
	}
	#loading-c{
		position: absolute;
		height: 10px;
		top: 705px;
		left: 427px;
		width: 13px;
		font-size: 8px;
	}
	#unloading-c{
		position: absolute;
		height: 10px;
		top: 720px;
		left: 427px;
		width: 13px;
		font-size: 8px;
	}
	#loading-d{
		position: absolute;
		height: 10px;
		top: 705px;
		left: 530px;
		width: 13px;
		font-size: 8px;
	}
	#unloading-d{
		position: absolute;
		height: 10px;
		top: 720px;
		left: 530px;
		width: 13px;
		font-size: 8px;
	}
	#loading-e{
		position: absolute;
		height: 10px;
		top: 703px;
		left: 633px;
		width: 13px;
		font-size: 8px;
	}
	#unloading-e{
		position: absolute;
		height: 10px;
		top: 718px;
		left: 633px;
		width: 13px;
		font-size: 8px;
	}


	#factory-a{
		position: absolute;
		height: 10px;
		top: 737px;
		left: 283px;
		width: 13px;
		font-size: 8px;
	}
	#compound-a{
		position: absolute;
		height: 10px;
		top: 750px;
		left: 283px;
		width: 13px;
		font-size: 8px;
	}
	#dealer-a{
		position: absolute;
		height: 10px;
		top: 763px;
		left: 283px;
		width: 13px;
		font-size: 8px;
	}
	#production-a{
		position: absolute;
		height: 10px;
		top: 775px;
		left: 283px;
		width: 13px;
		font-size: 8px;
	}
	#transport-a{
		position: absolute;
		height: 10px;
		top: 791px;
		left: 283px;
		width: 13px;
		font-size: 8px;
	}
	#l-a{
		position: absolute;
		height: 10px;
		top: 801px;
		left: 283px;
		width: 13px;
		font-size: 8px;
	}
	#u-a{
		position: absolute;
		height: 10px;
		top: 812px;
		left: 283px;
		width: 13px;
		font-size: 8px;
	}



	#factory-b{
		position: absolute;
		height: 10px;
		top: 738px;
		left: 387px;
		width: 13px;
		font-size: 8px;
	}
	#compound-b{
		position: absolute;
		height: 10px;
		top: 750px;
		left: 387px;
		width: 13px;
		font-size: 8px;
	}
	#dealer-b{
		position: absolute;
		height: 10px;
		top: 762px;
		left: 387px;
		width: 13px;
		font-size: 8px;
	}
	#production-b{
		position: absolute;
		height: 10px;
		top: 775px;
		left: 387px;
		width: 13px;
		font-size: 8px;
	}
	#transport-b{
		position: absolute;
		height: 10px;
		top: 791px;
		left: 387px;
		width: 13px;
		font-size: 8px;
	}
	#l-b{
		position: absolute;
		height: 10px;
		top: 801px;
		left: 387px;
		width: 13px;
		font-size: 8px;
	}
	#u-b{
		position: absolute;
		height: 10px;
		top: 812px;
		left: 387px;
		width: 13px;
		font-size: 8px;
	}


	#factory-c{
		position: absolute;
		height: 10px;
		top: 738px;
		left: 490px;
		width: 13px;
		font-size: 8px;
	}
	#compound-c{
		position: absolute;
		height: 10px;
		top: 750px;
		left: 490px;
		width: 13px;
		font-size: 8px;
	}
	#dealer-c{
		position: absolute;
		height: 10px;
		top: 762px;
		left: 490px;
		width: 13px;
		font-size: 8px;
	}
	#production-c{
		position: absolute;
		height: 10px;
		top: 776px;
		left: 490px;
		width: 13px;
		font-size: 8px;
	}
	#transport-c{
		position: absolute;
		height: 10px;
		top: 791px;
		left: 490px;
		width: 13px;
		font-size: 8px;
	}
	#l-c{
		position: absolute;
		height: 10px;
		top: 801px;
		left: 490px;
		width: 13px;
		font-size: 8px;
	}
	#u-c{
		position: absolute;
		height: 10px;
		top: 812px;
		left: 490px;
		width: 13px;
		font-size: 8px;
	}



	#factory-d{
		position: absolute;
		height: 10px;
		top: 738px;
		left: 593px;
		width: 13px;
		font-size: 8px;
	}
	#compound-d{
		position: absolute;
		height: 10px;
		top: 749px;
		left: 593px;
		width: 13px;
		font-size: 8px;
	}
	#dealer-d{
		position: absolute;
		height: 10px;
		top: 762px;
		left: 593px;
		width: 13px;
		font-size: 8px;
	}
	#production-d{
		position: absolute;
		height: 10px;
		top: 776px;
		left: 593px;
		width: 13px;
		font-size: 8px;
	}
	#transport-d{
		position: absolute;
		height: 10px;
		top: 791px;
		left: 593px;
		width: 13px;
		font-size: 8px;
	}
	#l-d{
		position: absolute;
		height: 10px;
		top: 801px;
		left: 593px;
		width: 13px;
		font-size: 8px;
	}
	#u-d{
		position: absolute;
		height: 10px;
		top: 812px;
		left: 593px;
		width: 13px;
		font-size: 8px;
	}


	#factory-e{
		position: absolute;
		height: 10px;
		top: 738px;
		left: 695px;
		width: 13px;
		font-size: 8px;
	}
	#compound-e{
		position: absolute;
		height: 10px;
		top: 750px;
		left: 695px;
		width: 13px;
		font-size: 8px;
	}
	#dealer-e{
		position: absolute;
		height: 10px;
		top: 762px;
		left: 695px;
		width: 13px;
		font-size: 8px;
	}
	#production-e{
		position: absolute;
		height: 10px;
		top: 776px;
		left: 695px;
		width: 13px;
		font-size: 8px;
	}
	#transport-e{
		position: absolute;
		height: 10px;
		top: 790px;
		left: 695px;
		width: 13px;
		font-size: 8px;
	}
	#l-e{
		position: absolute;
		height: 10px;
		top: 800px;
		left: 695px;
		width: 13px;
		font-size: 8px;
	}
	#u-e{
		position: absolute;
		height: 10px;
		top: 812px;
		left: 695px;
		width: 13px;
		font-size: 8px;
	}



	#date-a{
		position: absolute;
		height: 12px;
		top: 830px;
		left: 192px;
		width: 103px;
		font-size: 9px;
	}
	#date-b{
		position: absolute;
		height: 12px;
		top: 830px;
		left: 296px;
		width: 102px;
		font-size: 9px;
	}
	#date-c{
		position: absolute;
		height: 12px;
		top: 830px;
		left: 399px;
		width: 102px;
		font-size: 9px;
	}
	#date-d{
		position: absolute;
		height: 12px;
		top: 830px;
		left: 503px;
		width: 102px;
		font-size: 9px;
	}
	#date-e{
		position: absolute;
		height: 12px;
		top: 830px;
		left: 606px;
		width: 102px;
		font-size: 9px;
	}


	#loc-a{
		position: absolute;
		height: 12px;
		top: 850px;
		left: 192px;
		width: 103px;
		font-size: 9px;
	}
	#loc-b{
		position: absolute;
		height: 12px;
		top: 850px;
		left: 296px;
		width: 102px;
		font-size: 9px;
	}
	#loc-c{
		position: absolute;
		height: 12px;
		top: 850px;
		left: 399px;
		width: 102px;
		font-size: 9px;
	}
	#loc-d{
		position: absolute;
		height: 12px;
		top: 850px;
		left: 503px;
		width: 102px;
		font-size: 9px;
	}
	#loc-e{
		position: absolute;
		height: 12px;
		top: 850px;
		left: 606px;
		width: 102px;
		font-size: 9px;
	}


	#truck-a{
		position: absolute;
		height: 12px;
		top: 870px;
		left: 192px;
		width: 103px;
		font-size: 9px;
	}
	#truck-b{
		position: absolute;
		height: 12px;
		top: 870px;
		left: 296px;
		width: 102px;
		font-size: 9px;
	}
	#truck-c{
		position: absolute;
		height: 12px;
		top: 870px;
		left: 399px;
		width: 102px;
		font-size: 9px;
	}
	#truck-d{
		position: absolute;
		height: 12px;
		top: 870px;
		left: 503px;
		width: 102px;
		font-size: 9px;
	}
	#truck-e{
		position: absolute;
		height: 12px;
		top: 870px;
		left: 606px;
		width: 102px;
		font-size: 9px;
	}


	#del-a{
		position: absolute;
		height: 12px;
		top: 895px;
		left: 192px;
		width: 103px;
		font-size: 9px;
	}
	#del-b{
		position: absolute;
		height: 12px;
		top: 895px;
		left: 296px;
		width: 102px;
		font-size: 9px;
	}
	#del-c{
		position: absolute;
		height: 12px;
		top: 895px;
		left: 399px;
		width: 102px;
		font-size: 9px;
	}
	#del-d{
		position: absolute;
		height: 12px;
		top: 895px;
		left: 503px;
		width: 102px;
		font-size: 9px;
	}
	#del-e{
		position: absolute;
		height: 12px;
		top: 895px;
		left: 606px;
		width: 102px;
		font-size: 9px;
	}


	#giver-a{
		position: absolute;
		height: 12px;
		top: 920px;
		left: 192px;
		width: 103px;
		font-size: 9px;
	}
	#giver-b{
		position: absolute;
		height: 12px;
		top: 920px;
		left: 296px;
		width: 102px;
		font-size: 9px;
	}
	#giver-c{
		position: absolute;
		height: 12px;
		top: 920px;
		left: 399px;
		width: 102px;
		font-size: 9px;
	}
	#giver-d{
		position: absolute;
		height: 12px;
		top: 920px;
		left: 503px;
		width: 102px;
		font-size: 9px;
	}
	#giver-e{
		position: absolute;
		height: 12px;
		top: 920px;
		left: 606px;
		width: 102px;
		font-size: 9px;
	}


	#receiver-a{
		position: absolute;
		height: 12px;
		top: 968px;
		left: 192px;
		width: 103px;
		font-size: 9px;
	}
	#receiver-b{
		position: absolute;
		height: 12px;
		top: 968px;
		left: 296px;
		width: 102px;
		font-size: 9px;
	}
	#receiver-c{
		position: absolute;
		height: 12px;
		top: 968px;
		left: 399px;
		width: 102px;
		font-size: 9px;
	}
	#receiver-d{
		position: absolute;
		height: 12px;
		top: 968px;
		left: 503px;
		width: 102px;
		font-size: 9px;
	}
	#receiver-e{
		position: absolute;
		height: 12px;
		top: 968px;
		left: 606px;
		width: 102px;
		font-size: 9px;
	}
	





</style>
<?php } else { ?>
<style>


	#submit {
		position: absolute;
		top: 2340px;
		left: 50px;
	}
	#next {
		position: absolute;
		top: 2340px;
		left: 200px;
	}
	#model {
		position: absolute;
		top: 185px;
		left: 205px;
		width: 385px;
	}
	#colour {
		position: absolute;
		top: 220px;
		left: 198px;
		width: 400px;
	}
	#point {
		position: absolute;
		top: 195px;
		left: 960px;
		width: 250px;
	}  
	#vin {
		position: absolute;
		top: 145px;
		left: 105px;
		letter-spacing: 20px;
		text-align: center;
		width: 532px;
	}


    #e-1{
		position: absolute;
		top: 885px;
		left: 45px;
		width: 71px;
	}
	#a-cd-1{
		position: absolute;
		top: 885px;
		left: 118px;
		width: 80px;
	}
	#a-ld-1{
		position: absolute;
		top: 885px;
		left: 200px;
		width: 82px;
	}
	#a-t-1{
		position: absolute;
		top: 885px;
		left: 285px;
		width: 130px;
	}
	#b-cd-1{
		position: absolute;
		top: 885px;
		left: 418px;
		width: 80px;
	}
	#b-ld-1{
		position: absolute;
		top: 885px;
		left: 500px;
		width: 82px;
	}
	#b-t-1{
		position: absolute;
		top: 885px;
		left: 585px;
		width: 130px;
	}
	#c-cd-1{
		position: absolute;
		top: 885px;
		left: 717px;
		width: 80px;
	}
	#c-ld-1{
		position: absolute;
		top: 885px;
		left: 800px;
		width: 82px;
	}
	#c-t-1{
		position: absolute;
		top: 885px;
		left: 885px;
		width: 130px;
	}
	#d-cd-1{
		position: absolute;
		top: 885px;
		left: 1017px;
		width: 80px;
	}
	#d-ld-1{
		position: absolute;
		top: 885px;
		left: 1099px;
		width: 82px;
	}
	#d-t-1{
		position: absolute;
		top: 885px;
		left: 1184px;
		width: 130px;
	}
	#e-cd-1{
		position: absolute;
		top: 885px;
		left: 1316px;
		width: 80px;
	}
	#e-ld-1{
		position: absolute;
		top: 885px;
		left: 1399px;
		width: 82px;
	}
	#e-t-1{
		position: absolute;
		top: 885px;
		left: 1484px;
		width: 130px;
	}


	#e-2{
		position: absolute;
		top: 930px;
		left: 45px;
		width: 71px;
	}
	#a-cd-2{
		position: absolute;
		top: 930px;
		left: 118px;
		width: 80px;
	}
	#a-ld-2{
		position: absolute;
		top: 930px;
		left: 200px;
		width: 82px;
	}
	#a-t-2{
		position: absolute;
		top: 930px;
		left: 285px;
		width: 130px;
	}
	#b-cd-2{
		position: absolute;
		top: 930px;
		left: 418px;
		width: 80px;
	}
	#b-ld-2{
		position: absolute;
		top: 930px;
		left: 500px;
		width: 82px;
	}
	#b-t-2{
		position: absolute;
		top: 930px;
		left: 585px;
		width: 130px;
	}
	#c-cd-2{
		position: absolute;
		top: 930px;
		left: 717px;
		width: 80px;
	}
	#c-ld-2{
		position: absolute;
		top: 930px;
		left: 800px;
		width: 82px;
	}
	#c-t-2{
		position: absolute;
		top: 930px;
		left: 885px;
		width: 130px;
	}
	#d-cd-2{
		position: absolute;
		top: 930px;
		left: 1017px;
		width: 80px;
	}
	#d-ld-2{
		position: absolute;
		top: 930px;
		left: 1099px;
		width: 82px;
	}
	#d-t-2{
		position: absolute;
		top: 930px;
		left: 1184px;
		width: 130px;
	}
	#e-cd-2{
		position: absolute;
		top: 930px;
		left: 1316px;
		width: 80px;
	}
	#e-ld-2{
		position: absolute;
		top: 930px;
		left: 1399px;
		width: 82px;
	}
	#e-t-2{
		position: absolute;
		top: 930px;
		left: 1484px;
		width: 130px;
	}


	#e-3{
		position: absolute;
		top: 970px;
		left: 45px;
		width: 71px;
	}
	#a-cd-3{
		position: absolute;
		top: 970px;
		left: 118px;
		width: 80px;
	}
	#a-ld-3{
		position: absolute;
		top: 970px;
		left: 200px;
		width: 82px;
	}
	#a-t-3{
		position: absolute;
		top: 970px;
		left: 285px;
		width: 130px;
	}
	#b-cd-3{
		position: absolute;
		top: 970px;
		left: 418px;
		width: 80px;
	}
	#b-ld-3{
		position: absolute;
		top: 970px;
		left: 500px;
		width: 82px;
	}
	#b-t-3{
		position: absolute;
		top: 970px;
		left: 585px;
		width: 130px;
	}
	#c-cd-3{
		position: absolute;
		top: 970px;
		left: 717px;
		width: 80px;
	}
	#c-ld-3{
		position: absolute;
		top: 970px;
		left: 800px;
		width: 82px;
	}
	#c-t-3{
		position: absolute;
		top: 970px;
		left: 885px;
		width: 130px;
	}
	#d-cd-3{
		position: absolute;
		top: 970px;
		left: 1017px;
		width: 80px;
	}
	#d-ld-3{
		position: absolute;
		top: 970px;
		left: 1099px;
		width: 82px;
	}
	#d-t-3{
		position: absolute;
		top: 970px;
		left: 1184px;
		width: 130px;
	}
	#e-cd-3{
		position: absolute;
		top: 970px;
		left: 1316px;
		width: 80px;
	}
	#e-ld-3{
		position: absolute;
		top: 970px;
		left: 1399px;
		width: 82px;
	}
	#e-t-3{
		position: absolute;
		top: 970px;
		left: 1484px;
		width: 130px;
	}



	#e-4{
		position: absolute;
		top: 1015px;
		left: 45px;
		width: 71px;
	}
	#a-cd-4{
		position: absolute;
		top: 1015px;
		left: 118px;
		width: 80px;
	}
	#a-ld-4{
		position: absolute;
		top: 1015px;
		left: 200px;
		width: 82px;
	}
	#a-t-4{
		position: absolute;
		top: 1015px;
		left: 285px;
		width: 130px;
	}
	#b-cd-4{
		position: absolute;
		top: 1015px;
		left: 418px;
		width: 80px;
	}
	#b-ld-4{
		position: absolute;
		top: 1015px;
		left: 500px;
		width: 82px;
	}
	#b-t-4{
		position: absolute;
		top: 1015px;
		left: 585px;
		width: 130px;
	}
	#c-cd-4{
		position: absolute;
		top: 1015px;
		left: 717px;
		width: 80px;
	}
	#c-ld-4{
		position: absolute;
		top: 1015px;
		left: 800px;
		width: 82px;
	}
	#c-t-4{
		position: absolute;
		top: 1015px;
		left: 885px;
		width: 130px;
	}
	#d-cd-4{
		position: absolute;
		top: 1015px;
		left: 1017px;
		width: 80px;
	}
	#d-ld-4{
		position: absolute;
		top: 1015px;
		left: 1099px;
		width: 82px;
	}
	#d-t-4{
		position: absolute;
		top: 1015px;
		left: 1184px;
		width: 130px;
	}
	#e-cd-4{
		position: absolute;
		top: 1015px;
		left: 1316px;
		width: 80px;
	}
	#e-ld-4{
		position: absolute;
		top: 1015px;
		left: 1399px;
		width: 82px;
	}
	#e-t-4{
		position: absolute;
		top: 1015px;
		left: 1484px;
		width: 130px;
	}


	#e-5{
		position: absolute;
		top: 1060px;
		left: 45px;
		width: 71px;
	}
	#a-cd-5{
		position: absolute;
		top: 1060px;
		left: 118px;
		width: 80px;
	}
	#a-ld-5{
		position: absolute;
		top: 1060px;
		left: 200px;
		width: 82px;
	}
	#a-t-5{
		position: absolute;
		top: 1060px;
		left: 285px;
		width: 130px;
	}
	#b-cd-5{
		position: absolute;
		top: 1060px;
		left: 418px;
		width: 80px;
	}
	#b-ld-5{
		position: absolute;
		top: 1060px;
		left: 500px;
		width: 82px;
	}
	#b-t-5{
		position: absolute;
		top: 1060px;
		left: 585px;
		width: 130px;
	}
	#c-cd-5{
		position: absolute;
		top: 1060px;
		left: 717px;
		width: 80px;
	}
	#c-ld-5{
		position: absolute;
		top: 1060px;
		left: 800px;
		width: 82px;
	}
	#c-t-5{
		position: absolute;
		top: 1060px;
		left: 885px;
		width: 130px;
	}
	#d-cd-5{
		position: absolute;
		top: 1060px;
		left: 1017px;
		width: 80px;
	}
	#d-ld-5{
		position: absolute;
		top: 1060px;
		left: 1099px;
		width: 82px;
	}
	#d-t-5{
		position: absolute;
		top: 1060px;
		left: 1184px;
		width: 130px;
	}
	#e-cd-5{
		position: absolute;
		top: 1060px;
		left: 1316px;
		width: 80px;
	}
	#e-ld-5{
		position: absolute;
		top: 1060px;
		left: 1399px;
		width: 82px;
	}
	#e-t-5{
		position: absolute;
		top: 1060px;
		left: 1484px;
		width: 130px;
	}



	#e-6{
		position: absolute;
		top: 1105px;
		left: 45px;
		width: 71px;
	}
	#a-cd-6{
		position: absolute;
		top: 1105px;
		left: 118px;
		width: 80px;
	}
	#a-ld-6{
		position: absolute;
		top: 1105px;
		left: 200px;
		width: 82px;
	}
	#a-t-6{
		position: absolute;
		top: 1105px;
		left: 285px;
		width: 130px;
	}
	#b-cd-6{
		position: absolute;
		top: 1105px;
		left: 418px;
		width: 80px;
	}
	#b-ld-6{
		position: absolute;
		top: 1105px;
		left: 500px;
		width: 82px;
	}
	#b-t-6{
		position: absolute;
		top: 1105px;
		left: 585px;
		width: 130px;
	}
	#c-cd-6{
		position: absolute;
		top: 1105px;
		left: 717px;
		width: 80px;
	}
	#c-ld-6{
		position: absolute;
		top: 1105px;
		left: 800px;
		width: 82px;
	}
	#c-t-6{
		position: absolute;
		top: 1105px;
		left: 885px;
		width: 130px;
	}
	#d-cd-6{
		position: absolute;
		top: 1105px;
		left: 1017px;
		width: 80px;
	}
	#d-ld-6{
		position: absolute;
		top: 1105px;
		left: 1099px;
		width: 82px;
	}
	#d-t-6{
		position: absolute;
		top: 1105px;
		left: 1184px;
		width: 130px;
	}
	#e-cd-6{
		position: absolute;
		top: 1105px;
		left: 1316px;
		width: 80px;
	}
	#e-ld-6{
		position: absolute;
		top: 1105px;
		left: 1399px;
		width: 82px;
	}
	#e-t-6{
		position: absolute;
		top: 1105px;
		left: 1484px;
		width: 130px;
	}




	#e-7{
		position: absolute;
		top: 1150px;
		left: 45px;
		width: 71px;
	}
	#a-cd-7{
		position: absolute;
		top: 1150px;
		left: 118px;
		width: 80px;
	}
	#a-ld-7{
		position: absolute;
		top: 1150px;
		left: 200px;
		width: 82px;
	}
	#a-t-7{
		position: absolute;
		top: 1150px;
		left: 285px;
		width: 130px;
	}
	#b-cd-7{
		position: absolute;
		top: 1150px;
		left: 418px;
		width: 80px;
	}
	#b-ld-7{
		position: absolute;
		top: 1150px;
		left: 500px;
		width: 82px;
	}
	#b-t-7{
		position: absolute;
		top: 1150px;
		left: 585px;
		width: 130px;
	}
	#c-cd-7{
		position: absolute;
		top: 1150px;
		left: 717px;
		width: 80px;
	}
	#c-ld-7{
		position: absolute;
		top: 1150px;
		left: 800px;
		width: 82px;
	}
	#c-t-7{
		position: absolute;
		top: 1150px;
		left: 885px;
		width: 130px;
	}
	#d-cd-7{
		position: absolute;
		top: 1150px;
		left: 1017px;
		width: 80px;
	}
	#d-ld-7{
		position: absolute;
		top: 1150px;
		left: 1099px;
		width: 82px;
	}
	#d-t-7{
		position: absolute;
		top: 1150px;
		left: 1184px;
		width: 130px;
	}
	#e-cd-7{
		position: absolute;
		top: 1150px;
		left: 1316px;
		width: 80px;
	}
	#e-ld-7{
		position: absolute;
		top: 1150px;
		left: 1399px;
		width: 82px;
	}
	#e-t-7{
		position: absolute;
		top: 1150px;
		left: 1484px;
		width: 130px;
	}



	#e-8{
		position: absolute;
		top: 1195px;
		left: 45px;
		width: 71px;
	}
	#a-cd-8{
		position: absolute;
		top: 1195px;
		left: 118px;
		width: 80px;
	}
	#a-ld-8{
		position: absolute;
		top: 1195px;
		left: 200px;
		width: 82px;
	}
	#a-t-8{
		position: absolute;
		top: 1195px;
		left: 285px;
		width: 130px;
	}
	#b-cd-8{
		position: absolute;
		top: 1195px;
		left: 418px;
		width: 80px;
	}
	#b-ld-8{
		position: absolute;
		top: 1195px;
		left: 500px;
		width: 82px;
	}
	#b-t-8{
		position: absolute;
		top: 1195px;
		left: 585px;
		width: 130px;
	}
	#c-cd-8{
		position: absolute;
		top: 1195px;
		left: 717px;
		width: 80px;
	}
	#c-ld-8{
		position: absolute;
		top: 1195px;
		left: 800px;
		width: 82px;
	}
	#c-t-8{
		position: absolute;
		top: 1195px;
		left: 885px;
		width: 130px;
	}
	#d-cd-8{
		position: absolute;
		top: 1195px;
		left: 1017px;
		width: 80px;
	}
	#d-ld-8{
		position: absolute;
		top: 1195px;
		left: 1099px;
		width: 82px;
	}
	#d-t-8{
		position: absolute;
		top: 1195px;
		left: 1184px;
		width: 130px;
	}
	#e-cd-8{
		position: absolute;
		top: 1195px;
		left: 1316px;
		width: 80px;
	}
	#e-ld-8{
		position: absolute;
		top: 1195px;
		left: 1399px;
		width: 82px;
	}
	#e-t-8{
		position: absolute;
		top: 1195px;
		left: 1484px;
		width: 130px;
	}



	#e-9{
		position: absolute;
		top: 1240px;
		left: 45px;
		width: 71px;
	}
	#a-cd-9{
		position: absolute;
		top: 1240px;
		left: 118px;
		width: 80px;
	}
	#a-ld-9{
		position: absolute;
		top: 1240px;
		left: 200px;
		width: 82px;
	}
	#a-t-9{
		position: absolute;
		top: 1240px;
		left: 285px;
		width: 130px;
	}
	#b-cd-9{
		position: absolute;
		top: 1240px;
		left: 418px;
		width: 80px;
	}
	#b-ld-9{
		position: absolute;
		top: 1240px;
		left: 500px;
		width: 82px;
	}
	#b-t-9{
		position: absolute;
		top: 1240px;
		left: 585px;
		width: 130px;
	}
	#c-cd-9{
		position: absolute;
		top: 1240px;
		left: 717px;
		width: 80px;
	}
	#c-ld-9{
		position: absolute;
		top: 1240px;
		left: 800px;
		width: 82px;
	}
	#c-t-9{
		position: absolute;
		top: 1240px;
		left: 885px;
		width: 130px;
	}
	#d-cd-9{
		position: absolute;
		top: 1240px;
		left: 1017px;
		width: 80px;
	}
	#d-ld-9{
		position: absolute;
		top: 1240px;
		left: 1099px;
		width: 82px;
	}
	#d-t-9{
		position: absolute;
		top: 1240px;
		left: 1184px;
		width: 130px;
	}
	#e-cd-9{
		position: absolute;
		top: 1240px;
		left: 1316px;
		width: 80px;
	}
	#e-ld-9{
		position: absolute;
		top: 1240px;
		left: 1399px;
		width: 82px;
	}
	#e-t-9{
		position: absolute;
		top: 1240px;
		left: 1484px;
		width: 130px;
	}


	#a{
		position: absolute;
		top: 1330px;
		left: 229px;
		width: 113px;
	}
	#b{
		position: absolute;
		top: 1330px;
		left: 534px;
		width: 112px;
	}
	#c{
		position: absolute;
		top: 1330px;
		left: 838px;
		width: 112px;
	}
	#d{
		position: absolute;
		top: 1330px;
		left: 1143px;
		width: 112px;
	}
	#e{
		position: absolute;
		top: 1330px;
		left: 1446px;
		width: 112px;
	}




	#a-r{
		position: absolute;
		top: 1395px;
		left: 83px;
		width: 1535px;
	}
	#b-r{
		position: absolute;
		top: 1425px;
		left: 83px;
		width: 1535px;
	}
	#c-r{
		position: absolute;
		top: 1465px;
		left: 83px;
		width: 1535px;
	}
	#d-r{
		position: absolute;
		top: 1510px;
		left: 83px;
		width: 1535px;
	}
	#e-r{
		position: absolute;
		top: 1550px;
		left: 83px;
		width: 1535px;
	}




	#loading-a{
		position: absolute;
		top: 1609px;
		left: 502px;
		width: 18px;
	}
	#unloading-a{
		position: absolute;
		top: 1643px;
		left: 502px;
		width: 18px;
	}
	#loading-b{
		position: absolute;
		top: 1607px;
		left: 739px;
		width: 18px;
	}
	#unloading-b{
		position: absolute;
		top: 1642px;
		left: 739px;
		width: 18px;
	}
	#loading-c{
		position: absolute;
		top: 1611px;
		left: 979px;
		width: 18px;
	}
	#unloading-c{
		position: absolute;
		top: 1645px;
		left: 979px;
		width: 18px;
	}
	#loading-d{
		position: absolute;
		top: 1611px;
		left: 1211px;
		width: 18px;
	}
	#unloading-d{
		position: absolute;
		top: 1645px;
		left: 1211px;
		width: 18px;
	}
	#loading-e{
		position: absolute;
		top: 1609px;
		left: 1449px;
		width: 18px;
	}
	#unloading-e{
		position: absolute;
		top: 1644px;
		left: 1449px;
		width: 18px;
	}


	#factory-a{
		position: absolute;
		top: 1687px;
		left: 645px;
		width: 18px;
	}
	#compound-a{
		position: absolute;
		top: 1715px;
		left: 645px;
		width: 18px;
	}
	#dealer-a{
		position: absolute;
		top: 1744px;
		left: 645px;
		width: 18px;
	}
	#production-a{
		position: absolute;
		top: 1775px;
		left: 646px;
		width: 18px;
	}
	#transport-a{
		position: absolute;
		top: 1810px;
		left: 646px;
		width: 18px;
	}
	#l-a{
		position: absolute;
		top: 1835px;
		left: 646px;
		width: 18px;
	}
	#u-a{
		position: absolute;
		top: 1858px;
		left: 646px;
		width: 18px;
	}



	#factory-b{
		position: absolute;
		top: 1688px;
		left: 883px;
		width: 18px;
	}
	#compound-b{
		position: absolute;
		top: 1714px;
		left: 883px;
		width: 18px;
	}
	#dealer-b{
		position: absolute;
		top: 1743px;
		left: 883px;
		width: 18px;
	}
	#production-b{
		position: absolute;
		top: 1774px;
		left: 882px;
		width: 18px;
	}
	#transport-b{
		position: absolute;
		top: 1808px;
		left: 882px;
		width: 18px;
	}
	#l-b{
		position: absolute;
		top: 1834px;
		left: 882px;
		width: 18px;
	}
	#u-b{
		position: absolute;
		top: 1858px;
		left: 882px;
		width: 18px;
	}


	#factory-c{
		position: absolute;
		top: 1688px;
		left: 1120px;
		width: 18px;
	}
	#compound-c{
		position: absolute;
		top: 1715px;
		left: 1120px;
		width: 18px;
	}
	#dealer-c{
		position: absolute;
		top: 1743px;
		left: 1120px;
		width: 18px;
	}
	#production-c{
		position: absolute;
		top: 1776px;
		left: 1120px;
		width: 18px;
	}
	#transport-c{
		position: absolute;
		top: 1808px;
		left: 1120px;
		width: 18px;
	}
	#l-c{
		position: absolute;
		top: 1834px;
		left: 1120px;
		width: 18px;
	}
	#u-c{
		position: absolute;
		top: 1858px;
		left: 1120px;
		width: 18px;
	}



	#factory-d{
		position: absolute;
		top: 1688px;
		left: 1358px;
		width: 18px;
	}
	#compound-d{
		position: absolute;
		top: 1713px;
		left: 1358px;
		width: 18px;
	}
	#dealer-d{
		position: absolute;
		top: 1740px;
		left: 1358px;
		width: 18px;
	}
	#production-d{
		position: absolute;
		top: 1775px;
		left: 1357px;
		width: 18px;
	}
	#transport-d{
		position: absolute;
		top: 1809px;
		left: 1356px;
		width: 18px;
	}
	#l-d{
		position: absolute;
		top: 1834px;
		left: 1357px;
		width: 18px;
	}
	#u-d{
		position: absolute;
		top: 1858px;
		left: 1356px;
		width: 18px;
	}


	#factory-e{
		position: absolute;
		top: 1688px;
		left: 1591px;
		width: 18px;
	}
	#compound-e{
		position: absolute;
		top: 1716px;
		left: 1592px;
		width: 18px;
	}
	#dealer-e{
		position: absolute;
		top: 1744px;
		left: 1592px;
		width: 18px;
	}
	#production-e{
		position: absolute;
		top: 1775px;
		left: 1592px;
		width: 18px;
	}
	#transport-e{
		position: absolute;
		top: 1806px;
		left: 1592px;
		width: 18px;
	}
	#l-e{
		position: absolute;
		top: 1830px;
		left: 1592px;
		width: 18px;
	}
	#u-e{
		position: absolute;
		top: 1856px;
		left: 1592px;
		width: 18px;
	}



	#date-a{
		position: absolute;
		top: 1900px;
		left: 432px;
		width: 235px;
	}
	#date-b{
		position: absolute;
		top: 1900px;
		left: 669px;
		width: 235px;
	}
	#date-c{
		position: absolute;
		top: 1900px;
		left: 906px;
		width: 235px;
	}
	#date-d{
		position: absolute;
		top: 1900px;
		left: 1144px;
		width: 235px;
	}
	#date-e{
		position: absolute;
		top: 1900px;
		left: 1380px;
		width: 235px;
	}


	#loc-a{
		position: absolute;
		top: 1950px;
		left: 432px;
		width: 235px;
	}
	#loc-b{
		position: absolute;
		top: 1950px;
		left: 669px;
		width: 235px;
	}
	#loc-c{
		position: absolute;
		top: 1950px;
		left: 906px;
		width: 235px;
	}
	#loc-d{
		position: absolute;
		top: 1950px;
		left: 1144px;
		width: 235px;
	}
	#loc-e{
		position: absolute;
		top: 1950px;
		left: 1380px;
		width: 235px;
	}


	#truck-a{
		position: absolute;
		top: 2000px;
		left: 432px;
		width: 235px;
	}
	#truck-b{
		position: absolute;
		top: 2000px;
		left: 669px;
		width: 235px;
	}
	#truck-c{
		position: absolute;
		top: 2000px;
		left: 906px;
		width: 235px;
	}
	#truck-d{
		position: absolute;
		top: 2000px;
		left: 1144px;
		width: 235px;
	}
	#truck-e{
		position: absolute;
		top: 2000px;
		left: 1380px;
		width: 235px;
	}


	#del-a{
		position: absolute;
		top: 2055px;
		left: 432px;
		width: 235px;
	}
	#del-b{
		position: absolute;
		top: 2055px;
		left: 669px;
		width: 235px;
	}
	#del-c{
		position: absolute;
		top: 2055px;
		left: 906px;
		width: 235px;
	}
	#del-d{
		position: absolute;
		top: 2055px;
		left: 1144px;
		width: 235px;
	}
	#del-e{
		position: absolute;
		top: 2055px;
		left: 1380px;
		width: 235px;
	}


	#giver-a{
		position: absolute;
		top: 2110px;
		left: 432px;
		width: 235px;
	}
	#giver-b{
		position: absolute;
		top: 2110px;
		left: 669px;
		width: 235px;
	}
	#giver-c{
		position: absolute;
		top: 2110px;
		left: 906px;
		width: 235px;
	}
	#giver-d{
		position: absolute;
		top: 2110px;
		left: 1144px;
		width: 235px;
	}
	#giver-e{
		position: absolute;
		top: 2110px;
		left: 1380px;
		width: 235px;
	}


	#receiver-a{
		position: absolute;
		top: 2220px;
		left: 432px;
		width: 235px;
	}
	#receiver-b{
		position: absolute;
		top: 2220px;
		left: 669px;
		width: 235px;
	}
	#receiver-c{
		position: absolute;
		top: 2220px;
		left: 906px;
		width: 235px;
	}
	#receiver-d{
		position: absolute;
		top: 2220px;
		left: 1144px;
		width: 235px;
	}
	#receiver-e{
		position: absolute;
		top: 2220px;
		left: 1380px;
		width: 234px;
	}

	canvas#signature1 {
		position: absolute; 
  		border: 2px solid black;		  
		left: 432px; 
		top: 2145px; 		
	}
	canvas#signature2 {
		position: absolute; 
  		border: 2px solid black;		  
		left: 432px; 
		top: 2250px; 		
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
	<input name="vin" type="text" id="vin" value="<?php if (isset($_POST["vin"])) echo $_POST["vin"]; ?>" size="17" maxlength="17">
	<input name="e-1" type="text" id="e-1" value="<?php if (isset($_POST["e-1"])) echo $_POST["e-1"]; ?>" size="4" maxlength="4">
	<input name="a-cd-1" type="text" id="a-cd-1" value="<?php if (isset($_POST["a-cd-1"])) echo $_POST["a-cd-1"]; ?>" size="5" maxlength="5">
	<input name="a-ld-1" type="text" id="a-ld-1" value="<?php if (isset($_POST["a-ld-1"])) echo $_POST["a-ld-1"]; ?>" size="5" maxlength="5">
	<input name="a-t-1" type="text" id="a-t-1" value="<?php if (isset($_POST["a-t-1"])) echo $_POST["a-t-1"]; ?>" size="10" maxlength="10">
	<input name="b-cd-1" type="text" id="b-cd-1" value="<?php if (isset($_POST["b-cd-1"])) echo $_POST["b-cd-1"]; ?>" size="5" maxlength="5">
	<input name="b-ld-1" type="text" id="b-ld-1" value="<?php if (isset($_POST["b-ld-1"])) echo $_POST["b-ld-1"]; ?>" size="5" maxlength="5">
	<input name="b-t-1" type="text" id="b-t-1" value="<?php if (isset($_POST["b-t-1"])) echo $_POST["b-t-1"]; ?>" size="10" maxlength="10">
	<input name="c-cd-1" type="text" id="c-cd-1" value="<?php if (isset($_POST["c-cd-1"])) echo $_POST["c-cd-1"]; ?>" size="5" maxlength="5">
	<input name="c-ld-1" type="text" id="c-ld-1" value="<?php if (isset($_POST["c-ld-1"])) echo $_POST["c-ld-1"]; ?>" size="5" maxlength="5">
	<input name="c-t-1" type="text" id="c-t-1" value="<?php if (isset($_POST["c-t-1"])) echo $_POST["c-t-1"]; ?>" size="10" maxlength="10">
	<input name="d-cd-1" type="text" id="d-cd-1" value="<?php if (isset($_POST["d-cd-1"])) echo $_POST["d-cd-1"]; ?>" size="5" maxlength="5">
	<input name="d-ld-1" type="text" id="d-ld-1" value="<?php if (isset($_POST["d-ld-1"])) echo $_POST["d-ld-1"]; ?>" size="5" maxlength="5">
	<input name="d-t-1" type="text" id="d-t-1" value="<?php if (isset($_POST["d-t-1"])) echo $_POST["d-t-1"]; ?>" size="10" maxlength="10">
	<input name="e-cd-1" type="text" id="e-cd-1" value="<?php if (isset($_POST["e-cd-1"])) echo $_POST["e-cd-1"]; ?>" size="5" maxlength="5">
	<input name="e-ld-1" type="text" id="e-ld-1" value="<?php if (isset($_POST["e-ld-1"])) echo $_POST["e-ld-1"]; ?>" size="5" maxlength="5">
	<input name="e-t-1" type="text" id="e-t-1" value="<?php if (isset($_POST["e-t-1"])) echo $_POST["e-t-1"]; ?>" size="10" maxlength="10">

	<input name="e-2" type="text" id="e-2" value="<?php if (isset($_POST["e-2"])) echo $_POST["e-2"]; ?>" size="4" maxlength="4">
	<input name="a-cd-2" type="text" id="a-cd-2" value="<?php if (isset($_POST["a-cd-2"])) echo $_POST["a-cd-2"]; ?>" size="5" maxlength="5">
	<input name="a-ld-2" type="text" id="a-ld-2" value="<?php if (isset($_POST["a-ld-2"])) echo $_POST["a-ld-2"]; ?>" size="5" maxlength="5">
	<input name="a-t-2" type="text" id="a-t-2" value="<?php if (isset($_POST["a-t-2"])) echo $_POST["a-t-2"]; ?>" size="10" maxlength="10">
	<input name="b-cd-2" type="text" id="b-cd-2" value="<?php if (isset($_POST["b-cd-2"])) echo $_POST["b-cd-2"]; ?>" size="5" maxlength="5">
	<input name="b-ld-2" type="text" id="b-ld-2" value="<?php if (isset($_POST["b-ld-2"])) echo $_POST["b-ld-2"]; ?>" size="5" maxlength="5">
	<input name="b-t-2" type="text" id="b-t-2" value="<?php if (isset($_POST["b-t-2"])) echo $_POST["b-t-2"]; ?>" size="10" maxlength="10">
	<input name="c-cd-2" type="text" id="c-cd-2" value="<?php if (isset($_POST["c-cd-2"])) echo $_POST["c-cd-2"]; ?>" size="5" maxlength="5">
	<input name="c-ld-2" type="text" id="c-ld-2" value="<?php if (isset($_POST["c-ld-2"])) echo $_POST["c-ld-2"]; ?>" size="5" maxlength="5">
	<input name="c-t-2" type="text" id="c-t-2" value="<?php if (isset($_POST["c-t-2"])) echo $_POST["c-t-2"]; ?>" size="10" maxlength="10">
	<input name="d-cd-2" type="text" id="d-cd-2" value="<?php if (isset($_POST["d-cd-2"])) echo $_POST["d-cd-2"]; ?>" size="5" maxlength="5">
	<input name="d-ld-2" type="text" id="d-ld-2" value="<?php if (isset($_POST["d-ld-2"])) echo $_POST["d-ld-2"]; ?>" size="5" maxlength="5">
	<input name="d-t-2" type="text" id="d-t-2" value="<?php if (isset($_POST["d-t-2"])) echo $_POST["d-t-2"]; ?>" size="10" maxlength="10">
	<input name="e-cd-2" type="text" id="e-cd-2" value="<?php if (isset($_POST["e-cd-2"])) echo $_POST["e-cd-2"]; ?>" size="5" maxlength="5">
	<input name="e-ld-2" type="text" id="e-ld-2" value="<?php if (isset($_POST["e-ld-2"])) echo $_POST["e-ld-2"]; ?>" size="5" maxlength="5">
	<input name="e-t-2" type="text" id="e-t-2" value="<?php if (isset($_POST["e-t-2"])) echo $_POST["e-t-2"]; ?>" size="10" maxlength="10">

	<input name="e-3" type="text" id="e-3" value="<?php if (isset($_POST["e-3"])) echo $_POST["e-3"]; ?>" size="4" maxlength="4">
	<input name="a-cd-3" type="text" id="a-cd-3" value="<?php if (isset($_POST["a-cd-3"])) echo $_POST["a-cd-3"]; ?>" size="5" maxlength="5">
	<input name="a-ld-3" type="text" id="a-ld-3" value="<?php if (isset($_POST["a-ld-3"])) echo $_POST["a-ld-3"]; ?>" size="5" maxlength="5">
	<input name="a-t-3" type="text" id="a-t-3" value="<?php if (isset($_POST["a-t-3"])) echo $_POST["a-t-3"]; ?>" size="10" maxlength="10">
	<input name="b-cd-3" type="text" id="b-cd-3" value="<?php if (isset($_POST["b-cd-3"])) echo $_POST["b-cd-3"]; ?>" size="5" maxlength="5">
	<input name="b-ld-3" type="text" id="b-ld-3" value="<?php if (isset($_POST["b-ld-3"])) echo $_POST["b-ld-3"]; ?>" size="5" maxlength="5">
	<input name="b-t-3" type="text" id="b-t-3" value="<?php if (isset($_POST["b-t-3"])) echo $_POST["b-t-3"]; ?>" size="10" maxlength="10">
	<input name="c-cd-3" type="text" id="c-cd-3" value="<?php if (isset($_POST["c-cd-3"])) echo $_POST["c-cd-3"]; ?>" size="5" maxlength="5">
	<input name="c-ld-3" type="text" id="c-ld-3" value="<?php if (isset($_POST["c-ld-3"])) echo $_POST["c-ld-3"]; ?>" size="5" maxlength="5">
	<input name="c-t-3" type="text" id="c-t-3" value="<?php if (isset($_POST["c-t-3"])) echo $_POST["c-t-3"]; ?>" size="10" maxlength="10">
	<input name="d-cd-3" type="text" id="d-cd-3" value="<?php if (isset($_POST["d-cd-3"])) echo $_POST["d-cd-3"]; ?>" size="5" maxlength="5">
	<input name="d-ld-3" type="text" id="d-ld-3" value="<?php if (isset($_POST["d-ld-3"])) echo $_POST["d-ld-3"]; ?>" size="5" maxlength="5">
	<input name="d-t-3" type="text" id="d-t-3" value="<?php if (isset($_POST["d-t-3"])) echo $_POST["d-t-3"]; ?>" size="10" maxlength="10">
	<input name="e-cd-3" type="text" id="e-cd-3" value="<?php if (isset($_POST["e-cd-3"])) echo $_POST["e-cd-3"]; ?>" size="5" maxlength="5">
	<input name="e-ld-3" type="text" id="e-ld-3" value="<?php if (isset($_POST["e-ld-3"])) echo $_POST["e-ld-3"]; ?>" size="5" maxlength="5">
	<input name="e-t-3" type="text" id="e-t-3" value="<?php if (isset($_POST["e-t-3"])) echo $_POST["e-t-3"]; ?>" size="10" maxlength="10">

	<input name="e-4" type="text" id="e-4" value="<?php if (isset($_POST["e-4"])) echo $_POST["e-4"]; ?>" size="4" maxlength="4">
	<input name="a-cd-4" type="text" id="a-cd-4" value="<?php if (isset($_POST["a-cd-4"])) echo $_POST["a-cd-4"]; ?>" size="5" maxlength="5">
	<input name="a-ld-4" type="text" id="a-ld-4" value="<?php if (isset($_POST["a-ld-4"])) echo $_POST["a-ld-4"]; ?>" size="5" maxlength="5">
	<input name="a-t-4" type="text" id="a-t-4" value="<?php if (isset($_POST["a-t-4"])) echo $_POST["a-t-4"]; ?>" size="10" maxlength="10">
	<input name="b-cd-4" type="text" id="b-cd-4" value="<?php if (isset($_POST["b-cd-4"])) echo $_POST["b-cd-4"]; ?>" size="5" maxlength="5">
	<input name="b-ld-4" type="text" id="b-ld-4" value="<?php if (isset($_POST["b-ld-4"])) echo $_POST["b-ld-4"]; ?>" size="5" maxlength="5">
	<input name="b-t-4" type="text" id="b-t-4" value="<?php if (isset($_POST["b-t-4"])) echo $_POST["b-t-4"]; ?>" size="10" maxlength="10">
	<input name="c-cd-4" type="text" id="c-cd-4" value="<?php if (isset($_POST["c-cd-4"])) echo $_POST["c-cd-4"]; ?>" size="5" maxlength="5">
	<input name="c-ld-4" type="text" id="c-ld-4" value="<?php if (isset($_POST["c-ld-4"])) echo $_POST["c-ld-4"]; ?>" size="5" maxlength="5">
	<input name="c-t-4" type="text" id="c-t-4" value="<?php if (isset($_POST["c-t-4"])) echo $_POST["c-t-4"]; ?>" size="10" maxlength="10">
	<input name="d-cd-4" type="text" id="d-cd-4" value="<?php if (isset($_POST["d-cd-4"])) echo $_POST["d-cd-4"]; ?>" size="5" maxlength="5">
	<input name="d-ld-4" type="text" id="d-ld-4" value="<?php if (isset($_POST["d-ld-4"])) echo $_POST["d-ld-4"]; ?>" size="5" maxlength="5">
	<input name="d-t-4" type="text" id="d-t-4" value="<?php if (isset($_POST["d-t-4"])) echo $_POST["d-t-4"]; ?>" size="10" maxlength="10">
	<input name="e-cd-4" type="text" id="e-cd-4" value="<?php if (isset($_POST["e-cd-4"])) echo $_POST["e-cd-4"]; ?>" size="5" maxlength="5">
	<input name="e-ld-4" type="text" id="e-ld-4" value="<?php if (isset($_POST["e-ld-4"])) echo $_POST["e-ld-4"]; ?>" size="5" maxlength="5">
	<input name="e-t-4" type="text" id="e-t-4" value="<?php if (isset($_POST["e-t-4"])) echo $_POST["e-t-4"]; ?>" size="10" maxlength="10">

	<input name="e-5" type="text" id="e-5" value="<?php if (isset($_POST["e-5"])) echo $_POST["e-5"]; ?>" size="4" maxlength="4">
	<input name="a-cd-5" type="text" id="a-cd-5" value="<?php if (isset($_POST["a-cd-5"])) echo $_POST["a-cd-5"]; ?>" size="5" maxlength="5">
	<input name="a-ld-5" type="text" id="a-ld-5" value="<?php if (isset($_POST["a-ld-5"])) echo $_POST["a-ld-5"]; ?>" size="5" maxlength="5">
	<input name="a-t-5" type="text" id="a-t-5" value="<?php if (isset($_POST["a-t-5"])) echo $_POST["a-t-5"]; ?>" size="10" maxlength="10">
	<input name="b-cd-5" type="text" id="b-cd-5" value="<?php if (isset($_POST["b-cd-5"])) echo $_POST["b-cd-5"]; ?>" size="5" maxlength="5">
	<input name="b-ld-5" type="text" id="b-ld-5" value="<?php if (isset($_POST["b-ld-5"])) echo $_POST["b-ld-5"]; ?>" size="5" maxlength="5">
	<input name="b-t-5" type="text" id="b-t-5" value="<?php if (isset($_POST["b-t-5"])) echo $_POST["b-t-5"]; ?>" size="10" maxlength="10">
	<input name="c-cd-5" type="text" id="c-cd-5" value="<?php if (isset($_POST["c-cd-5"])) echo $_POST["c-cd-5"]; ?>" size="5" maxlength="5">
	<input name="c-ld-5" type="text" id="c-ld-5" value="<?php if (isset($_POST["c-ld-5"])) echo $_POST["c-ld-5"]; ?>" size="5" maxlength="5">
	<input name="c-t-5" type="text" id="c-t-5" value="<?php if (isset($_POST["c-t-5"])) echo $_POST["c-t-5"]; ?>" size="10" maxlength="10">
	<input name="d-cd-5" type="text" id="d-cd-5" value="<?php if (isset($_POST["d-cd-5"])) echo $_POST["d-cd-5"]; ?>" size="5" maxlength="5">
	<input name="d-ld-5" type="text" id="d-ld-5" value="<?php if (isset($_POST["d-ld-5"])) echo $_POST["d-ld-5"]; ?>" size="5" maxlength="5">
	<input name="d-t-5" type="text" id="d-t-5" value="<?php if (isset($_POST["d-t-5"])) echo $_POST["d-t-5"]; ?>" size="10" maxlength="10">
	<input name="e-cd-5" type="text" id="e-cd-5" value="<?php if (isset($_POST["e-cd-5"])) echo $_POST["e-cd-5"]; ?>" size="5" maxlength="5">
	<input name="e-ld-5" type="text" id="e-ld-5" value="<?php if (isset($_POST["e-ld-5"])) echo $_POST["e-ld-5"]; ?>" size="5" maxlength="5">
	<input name="e-t-5" type="text" id="e-t-5" value="<?php if (isset($_POST["e-t-5"])) echo $_POST["e-t-5"]; ?>" size="10" maxlength="10">

	<input name="e-6" type="text" id="e-6" value="<?php if (isset($_POST["e-6"])) echo $_POST["e-6"]; ?>" size="4" maxlength="4">
	<input name="a-cd-6" type="text" id="a-cd-6" value="<?php if (isset($_POST["a-cd-6"])) echo $_POST["a-cd-6"]; ?>" size="5" maxlength="5">
	<input name="a-ld-6" type="text" id="a-ld-6" value="<?php if (isset($_POST["a-ld-6"])) echo $_POST["a-ld-6"]; ?>" size="5" maxlength="5">
	<input name="a-t-6" type="text" id="a-t-6" value="<?php if (isset($_POST["a-t-6"])) echo $_POST["a-t-6"]; ?>" size="10" maxlength="10">
	<input name="b-cd-6" type="text" id="b-cd-6" value="<?php if (isset($_POST["b-cd-6"])) echo $_POST["b-cd-6"]; ?>" size="5" maxlength="5">
	<input name="b-ld-6" type="text" id="b-ld-6" value="<?php if (isset($_POST["b-ld-6"])) echo $_POST["b-ld-6"]; ?>" size="5" maxlength="5">
	<input name="b-t-6" type="text" id="b-t-6" value="<?php if (isset($_POST["b-t-6"])) echo $_POST["b-t-6"]; ?>" size="10" maxlength="10">
	<input name="c-cd-6" type="text" id="c-cd-6" value="<?php if (isset($_POST["c-cd-6"])) echo $_POST["c-cd-6"]; ?>" size="5" maxlength="5">
	<input name="c-ld-6" type="text" id="c-ld-6" value="<?php if (isset($_POST["c-ld-6"])) echo $_POST["c-ld-6"]; ?>" size="5" maxlength="5">
	<input name="c-t-6" type="text" id="c-t-6" value="<?php if (isset($_POST["c-t-6"])) echo $_POST["c-t-6"]; ?>" size="10" maxlength="10">
	<input name="d-cd-6" type="text" id="d-cd-6" value="<?php if (isset($_POST["d-cd-6"])) echo $_POST["d-cd-6"]; ?>" size="5" maxlength="5">
	<input name="d-ld-6" type="text" id="d-ld-6" value="<?php if (isset($_POST["d-ld-6"])) echo $_POST["d-ld-6"]; ?>" size="5" maxlength="5">
	<input name="d-t-6" type="text" id="d-t-6" value="<?php if (isset($_POST["d-t-6"])) echo $_POST["d-t-6"]; ?>" size="10" maxlength="10">
	<input name="e-cd-6" type="text" id="e-cd-6" value="<?php if (isset($_POST["e-cd-6"])) echo $_POST["e-cd-6"]; ?>" size="5" maxlength="5">
	<input name="e-ld-6" type="text" id="e-ld-6" value="<?php if (isset($_POST["e-ld-6"])) echo $_POST["e-ld-6"]; ?>" size="5" maxlength="5">
	<input name="e-t-6" type="text" id="e-t-6" value="<?php if (isset($_POST["e-t-6"])) echo $_POST["e-t-6"]; ?>" size="10" maxlength="10">

	<input name="e-7" type="text" id="e-7" value="<?php if (isset($_POST["e-7"])) echo $_POST["e-7"]; ?>" size="4" maxlength="4">
	<input name="a-cd-7" type="text" id="a-cd-7" value="<?php if (isset($_POST["a-cd-7"])) echo $_POST["a-cd-7"]; ?>" size="5" maxlength="5">
	<input name="a-ld-7" type="text" id="a-ld-7" value="<?php if (isset($_POST["a-ld-7"])) echo $_POST["a-ld-7"]; ?>" size="5" maxlength="5">
	<input name="a-t-7" type="text" id="a-t-7" value="<?php if (isset($_POST["a-t-7"])) echo $_POST["a-t-7"]; ?>" size="10" maxlength="10">
	<input name="b-cd-7" type="text" id="b-cd-7" value="<?php if (isset($_POST["b-cd-7"])) echo $_POST["b-cd-7"]; ?>" size="5" maxlength="5">
	<input name="b-ld-7" type="text" id="b-ld-7" value="<?php if (isset($_POST["b-ld-7"])) echo $_POST["b-ld-7"]; ?>" size="5" maxlength="5">
	<input name="b-t-7" type="text" id="b-t-7" value="<?php if (isset($_POST["b-t-7"])) echo $_POST["b-t-7"]; ?>" size="10" maxlength="10">
	<input name="c-cd-7" type="text" id="c-cd-7" value="<?php if (isset($_POST["c-cd-7"])) echo $_POST["c-cd-7"]; ?>" size="5" maxlength="5">
	<input name="c-ld-7" type="text" id="c-ld-7" value="<?php if (isset($_POST["c-ld-7"])) echo $_POST["c-ld-7"]; ?>" size="5" maxlength="5">
	<input name="c-t-7" type="text" id="c-t-7" value="<?php if (isset($_POST["c-t-7"])) echo $_POST["c-t-7"]; ?>" size="10" maxlength="10">
	<input name="d-cd-7" type="text" id="d-cd-7" value="<?php if (isset($_POST["d-cd-7"])) echo $_POST["d-cd-7"]; ?>" size="5" maxlength="5">
	<input name="d-ld-7" type="text" id="d-ld-7" value="<?php if (isset($_POST["d-ld-7"])) echo $_POST["d-ld-7"]; ?>" size="5" maxlength="5">
	<input name="d-t-7" type="text" id="d-t-7" value="<?php if (isset($_POST["d-t-7"])) echo $_POST["d-t-7"]; ?>" size="10" maxlength="10">
	<input name="e-cd-7" type="text" id="e-cd-7" value="<?php if (isset($_POST["e-cd-7"])) echo $_POST["e-cd-7"]; ?>" size="5" maxlength="5">
	<input name="e-ld-7" type="text" id="e-ld-7" value="<?php if (isset($_POST["e-ld-7"])) echo $_POST["e-ld-7"]; ?>" size="5" maxlength="5">
	<input name="e-t-7" type="text" id="e-t-7" value="<?php if (isset($_POST["e-t-7"])) echo $_POST["e-t-7"]; ?>" size="10" maxlength="10">

	<input name="e-8" type="text" id="e-8" value="<?php if (isset($_POST["e-8"])) echo $_POST["e-8"]; ?>" size="4" maxlength="4">
	<input name="a-cd-8" type="text" id="a-cd-8" value="<?php if (isset($_POST["a-cd-8"])) echo $_POST["a-cd-8"]; ?>" size="5" maxlength="5">
	<input name="a-ld-8" type="text" id="a-ld-8" value="<?php if (isset($_POST["a-ld-8"])) echo $_POST["a-ld-8"]; ?>" size="5" maxlength="5">
	<input name="a-t-8" type="text" id="a-t-8" value="<?php if (isset($_POST["a-t-8"])) echo $_POST["a-t-8"]; ?>" size="10" maxlength="10">
	<input name="b-cd-8" type="text" id="b-cd-8" value="<?php if (isset($_POST["b-cd-8"])) echo $_POST["b-cd-8"]; ?>" size="5" maxlength="5">
	<input name="b-ld-8" type="text" id="b-ld-8" value="<?php if (isset($_POST["b-ld-8"])) echo $_POST["b-ld-8"]; ?>" size="5" maxlength="5">
	<input name="b-t-8" type="text" id="b-t-8" value="<?php if (isset($_POST["b-t-8"])) echo $_POST["b-t-8"]; ?>" size="10" maxlength="10">
	<input name="c-cd-8" type="text" id="c-cd-8" value="<?php if (isset($_POST["c-cd-8"])) echo $_POST["c-cd-8"]; ?>" size="5" maxlength="5">
	<input name="c-ld-8" type="text" id="c-ld-8" value="<?php if (isset($_POST["c-ld-8"])) echo $_POST["c-ld-8"]; ?>" size="5" maxlength="5">
	<input name="c-t-8" type="text" id="c-t-8" value="<?php if (isset($_POST["c-t-8"])) echo $_POST["c-t-8"]; ?>" size="10" maxlength="10">
	<input name="d-cd-8" type="text" id="d-cd-8" value="<?php if (isset($_POST["d-cd-8"])) echo $_POST["d-cd-8"]; ?>" size="5" maxlength="5">
	<input name="d-ld-8" type="text" id="d-ld-8" value="<?php if (isset($_POST["d-ld-8"])) echo $_POST["d-ld-8"]; ?>" size="5" maxlength="5">
	<input name="d-t-8" type="text" id="d-t-8" value="<?php if (isset($_POST["d-t-8"])) echo $_POST["d-t-8"]; ?>" size="10" maxlength="10">
	<input name="e-cd-8" type="text" id="e-cd-8" value="<?php if (isset($_POST["e-cd-8"])) echo $_POST["e-cd-8"]; ?>" size="5" maxlength="5">
	<input name="e-ld-8" type="text" id="e-ld-8" value="<?php if (isset($_POST["e-ld-8"])) echo $_POST["e-ld-8"]; ?>" size="5" maxlength="5">
	<input name="e-t-8" type="text" id="e-t-8" value="<?php if (isset($_POST["e-t-8"])) echo $_POST["e-t-8"]; ?>" size="10" maxlength="10">

	<input name="e-9" type="text" id="e-9" value="<?php if (isset($_POST["e-9"])) echo $_POST["e-9"]; ?>" size="4" maxlength="4">
	<input name="a-cd-9" type="text" id="a-cd-9" value="<?php if (isset($_POST["a-cd-9"])) echo $_POST["a-cd-9"]; ?>" size="5" maxlength="5">
	<input name="a-ld-9" type="text" id="a-ld-9" value="<?php if (isset($_POST["a-ld-9"])) echo $_POST["a-ld-9"]; ?>" size="5" maxlength="5">
	<input name="a-t-9" type="text" id="a-t-9" value="<?php if (isset($_POST["a-t-9"])) echo $_POST["a-t-9"]; ?>" size="10" maxlength="10">
	<input name="b-cd-9" type="text" id="b-cd-9" value="<?php if (isset($_POST["b-cd-9"])) echo $_POST["b-cd-9"]; ?>" size="5" maxlength="5">
	<input name="b-ld-9" type="text" id="b-ld-9" value="<?php if (isset($_POST["b-ld-9"])) echo $_POST["b-ld-9"]; ?>" size="5" maxlength="5">
	<input name="b-t-9" type="text" id="b-t-9" value="<?php if (isset($_POST["b-t-9"])) echo $_POST["b-t-9"]; ?>" size="10" maxlength="10">
	<input name="c-cd-9" type="text" id="c-cd-9" value="<?php if (isset($_POST["c-cd-9"])) echo $_POST["c-cd-9"]; ?>" size="5" maxlength="5">
	<input name="c-ld-9" type="text" id="c-ld-9" value="<?php if (isset($_POST["c-ld-9"])) echo $_POST["c-ld-9"]; ?>" size="5" maxlength="5">
	<input name="c-t-9" type="text" id="c-t-9" value="<?php if (isset($_POST["c-t-9"])) echo $_POST["c-t-9"]; ?>" size="10" maxlength="10">
	<input name="d-cd-9" type="text" id="d-cd-9" value="<?php if (isset($_POST["d-cd-9"])) echo $_POST["d-cd-9"]; ?>" size="5" maxlength="5">
	<input name="d-ld-9" type="text" id="d-ld-9" value="<?php if (isset($_POST["d-ld-9"])) echo $_POST["d-ld-9"]; ?>" size="5" maxlength="5">
	<input name="d-t-9" type="text" id="d-t-9" value="<?php if (isset($_POST["d-t-9"])) echo $_POST["d-t-9"]; ?>" size="10" maxlength="10">
	<input name="e-cd-9" type="text" id="e-cd-9" value="<?php if (isset($_POST["e-cd-9"])) echo $_POST["e-cd-9"]; ?>" size="5" maxlength="5">
	<input name="e-ld-9" type="text" id="e-ld-9" value="<?php if (isset($_POST["e-ld-9"])) echo $_POST["e-ld-9"]; ?>" size="5" maxlength="5">
	<input name="e-t-9" type="text" id="e-t-9" value="<?php if (isset($_POST["e-t-9"])) echo $_POST["e-t-9"]; ?>" size="10" maxlength="10">

	<input name="a" type="text" id="a" value="<?php if (isset($_POST["a"])) echo $_POST["a"]; ?>" size="8" maxlength="8">
	<input name="b" type="text" id="b" value="<?php if (isset($_POST["b"])) echo $_POST["b"]; ?>" size="8" maxlength="8">
	<input name="c" type="text" id="c" value="<?php if (isset($_POST["c"])) echo $_POST["c"]; ?>" size="8" maxlength="8">
	<input name="d" type="text" id="d" value="<?php if (isset($_POST["d"])) echo $_POST["d"]; ?>" size="8" maxlength="8">
	<input name="e" type="text" id="e" value="<?php if (isset($_POST["e"])) echo $_POST["e"]; ?>" size="8" maxlength="8">

	<input name="a-r" type="text" id="a-r" value="<?php if (isset($_POST["a-r"])) echo $_POST["a-r"]; ?>" size="100" maxlength="100">
	<input name="b-r" type="text" id="b-r" value="<?php if (isset($_POST["b-r"])) echo $_POST["b-r"]; ?>" size="100" maxlength="100">
	<input name="c-r" type="text" id="c-r" value="<?php if (isset($_POST["c-r"])) echo $_POST["c-r"]; ?>" size="100" maxlength="100">
	<input name="d-r" type="text" id="d-r" value="<?php if (isset($_POST["d-r"])) echo $_POST["d-r"]; ?>" size="100" maxlength="100">
	<input name="e-r" type="text" id="e-r" value="<?php if (isset($_POST["e-r"])) echo $_POST["e-r"]; ?>" size="100" maxlength="100">

	<input name="loading-a" type="text" id="loading-a" value="<?php if (isset($_POST["loading-a"])) echo $_POST["loading-a"]; ?>" size="1" maxlength="1">
	<input name="unloading-a" type="text" id="unloading-a" value="<?php if (isset($_POST["unloading-a"])) echo $_POST["unloading-a"]; ?>" size="1" maxlength="1">
	<input name="loading-b" type="text" id="loading-b" value="<?php if (isset($_POST["loading-b"])) echo $_POST["loading-b"]; ?>" size="1" maxlength="1">
	<input name="unloading-b" type="text" id="unloading-b" value="<?php if (isset($_POST["unloading-b"])) echo $_POST["unloading-b"]; ?>" size="1" maxlength="1">
	<input name="loading-" type="text" id="loading-c" value="<?php if (isset($_POST["loading-c"])) echo $_POST["loading-c"]; ?>" size="1" maxlength="1">
	<input name="unloading-c" type="text" id="unloading-c" value="<?php if (isset($_POST["unloading-c"])) echo $_POST["unloading-c"]; ?>" size="1" maxlength="1">
	<input name="loading-d" type="text" id="loading-d" value="<?php if (isset($_POST["loading-d"])) echo $_POST["loading-d"]; ?>" size="1" maxlength="1">
	<input name="unloading-d" type="text" id="unloading-d" value="<?php if (isset($_POST["unloading-d"])) echo $_POST["unloading-d"]; ?>" size="1" maxlength="1">
	<input name="loading-e" type="text" id="loading-e" value="<?php if (isset($_POST["loading-e"])) echo $_POST["loading-e"]; ?>" size="1" maxlength="1">
	<input name="unloading-e" type="text" id="unloading-e" value="<?php if (isset($_POST["unloading-e"])) echo $_POST["unloading-e"]; ?>" size="1" maxlength="1">

	<input name="factory-a" type="text" id="factory-a" value="<?php if (isset($_POST["factory-a"])) echo $_POST["factory-a"]; ?>" size="1" maxlength="1">
	<input name="compound-a" type="text" id="compound-a" value="<?php if (isset($_POST["compound-a"])) echo $_POST["compound-a"]; ?>" size="1" maxlength="1">
	<input name="dealer-a" type="text" id="dealer-a" value="<?php if (isset($_POST["dealer-a"])) echo $_POST["dealer-a"]; ?>" size="1" maxlength="1">
	<input name="production-a" type="text" id="production-a" value="<?php if (isset($_POST["production-a"])) echo $_POST["production-a"]; ?>" size="1" maxlength="1">
	<input name="transport-a" type="text" id="transport-a" value="<?php if (isset($_POST["transport-a"])) echo $_POST["transport-a"]; ?>" size="1" maxlength="1">
	<input name="l-a" type="text" id="l-a" value="<?php if (isset($_POST["l-a"])) echo $_POST["l-a"]; ?>" size="1" maxlength="1">
	<input name="u-a" type="text" id="u-a" value="<?php if (isset($_POST["u-a"])) echo $_POST["u-a"]; ?>" size="1" maxlength="1">

	<input name="factory-b" type="text" id="factory-b" value="<?php if (isset($_POST["factory-b"])) echo $_POST["factory-b"]; ?>" size="1" maxlength="1">
	<input name="compound-b" type="text" id="compound-b" value="<?php if (isset($_POST["compound-b"])) echo $_POST["compound-b"]; ?>" size="1" maxlength="1">
	<input name="dealer-b" type="text" id="dealer-b" value="<?php if (isset($_POST["dealer-b"])) echo $_POST["dealer-b"]; ?>" size="1" maxlength="1">
	<input name="production-b" type="text" id="production-b" value="<?php if (isset($_POST["production-b"])) echo $_POST["production-b"]; ?>" size="1" maxlength="1">
	<input name="transport-b" type="text" id="transport-b" value="<?php if (isset($_POST["transport-b"])) echo $_POST["transport-b"]; ?>" size="1" maxlength="1">
	<input name="l-b" type="text" id="l-b" value="<?php if (isset($_POST["l-b"])) echo $_POST["l-b"]; ?>" size="1" maxlength="1">
	<input name="u-b" type="text" id="u-b" value="<?php if (isset($_POST["u-b"])) echo $_POST["u-b"]; ?>" size="1" maxlength="1">

	<input name="factory-c" type="text" id="factory-c" value="<?php if (isset($_POST["factory-c"])) echo $_POST["factory-c"]; ?>" size="1" maxlength="1">
	<input name="compound-c" type="text" id="compound-c" value="<?php if (isset($_POST["compound-c"])) echo $_POST["compound-c"]; ?>" size="1" maxlength="1">
	<input name="dealer-c" type="text" id="dealer-c" value="<?php if (isset($_POST["dealer-c"])) echo $_POST["dealer-c"]; ?>" size="1" maxlength="1">
	<input name="production-c" type="text" id="production-c" value="<?php if (isset($_POST["production-c"])) echo $_POST["production-c"]; ?>" size="1" maxlength="1">
	<input name="transport-c" type="text" id="transport-c" value="<?php if (isset($_POST["transport-c"])) echo $_POST["transport-c"]; ?>" size="1" maxlength="1">
	<input name="l-c" type="text" id="l-c" value="<?php if (isset($_POST["l-c"])) echo $_POST["l-c"]; ?>" size="1" maxlength="1">
	<input name="u-c" type="text" id="u-c" value="<?php if (isset($_POST["u-c"])) echo $_POST["u-c"]; ?>" size="1" maxlength="1">

	<input name="factory-d" type="text" id="factory-d" value="<?php if (isset($_POST["factory-d"])) echo $_POST["factory-d"]; ?>" size="1" maxlength="1">
	<input name="compound-d" type="text" id="compound-d" value="<?php if (isset($_POST["compound-d"])) echo $_POST["compound-d"]; ?>" size="1" maxlength="1">
	<input name="dealer-d" type="text" id="dealer-d" value="<?php if (isset($_POST["dealer-d"])) echo $_POST["dealer-d"]; ?>" size="1" maxlength="1">
	<input name="production-d" type="text" id="production-d" value="<?php if (isset($_POST["production-d"])) echo $_POST["production-d"]; ?>" size="1" maxlength="1">
	<input name="transport-d" type="text" id="transport-d" value="<?php if (isset($_POST["transport-d"])) echo $_POST["transport-d"]; ?>" size="1" maxlength="1">
	<input name="l-d" type="text" id="l-d" value="<?php if (isset($_POST["l-d"])) echo $_POST["l-d"]; ?>" size="1" maxlength="1">
	<input name="u-d" type="text" id="u-d" value="<?php if (isset($_POST["u-d"])) echo $_POST["u-d"]; ?>" size="1" maxlength="1">

	<input name="factory-e" type="text" id="factory-e" value="<?php if (isset($_POST["factory-e"])) echo $_POST["factory-e"]; ?>" size="1" maxlength="1">
	<input name="compound-e" type="text" id="compound-e" value="<?php if (isset($_POST["compound-e"])) echo $_POST["compound-e"]; ?>" size="1" maxlength="1">
	<input name="dealer-e" type="text" id="dealer-e" value="<?php if (isset($_POST["dealer-e"])) echo $_POST["dealer-e"]; ?>" size="1" maxlength="1">
	<input name="production-e" type="text" id="production-e" value="<?php if (isset($_POST["production-e"])) echo $_POST["production-e"]; ?>" size="1" maxlength="1">
	<input name="transport-e" type="text" id="transport-e" value="<?php if (isset($_POST["transport-e"])) echo $_POST["transport-e"]; ?>" size="1" maxlength="1">
	<input name="l-e" type="text" id="l-e" value="<?php if (isset($_POST["l-e"])) echo $_POST["l-e"]; ?>" size="1" maxlength="1">
	<input name="u-e" type="text" id="u-e" value="<?php if (isset($_POST["u-e"])) echo $_POST["u-e"]; ?>" size="1" maxlength="1">

	<input name="date-a" type="text" id="date-a" value="<?php if (isset($_POST["date-a"])) echo $_POST["date-a"]; ?>" size="25" maxlength="25">
	<input name="date-b" type="text" id="date-b" value="<?php if (isset($_POST["date-b"])) echo $_POST["date-b"]; ?>" size="25" maxlength="25">
	<input name="date-c" type="text" id="date-c" value="<?php if (isset($_POST["date-c"])) echo $_POST["date-c"]; ?>" size="25" maxlength="25">
	<input name="date-d" type="text" id="date-d" value="<?php if (isset($_POST["date-d"])) echo $_POST["date-d"]; ?>" size="25" maxlength="25">
	<input name="date-e" type="text" id="date-e" value="<?php if (isset($_POST["date-e"])) echo $_POST["date-e"]; ?>" size="25" maxlength="25">

	<input name="loc-a" type="text" id="loc-a" value="<?php if (isset($_POST["loc-a"])) echo $_POST["loc-a"]; ?>" size="25" maxlength="25">
	<input name="loc-b" type="text" id="loc-b" value="<?php if (isset($_POST["loc-b"])) echo $_POST["loc-b"]; ?>" size="25" maxlength="25">
	<input name="loc-c" type="text" id="loc-c" value="<?php if (isset($_POST["loc-c"])) echo $_POST["loc-c"]; ?>" size="25" maxlength="25">
	<input name="loc-d" type="text" id="loc-d" value="<?php if (isset($_POST["loc-d"])) echo $_POST["loc-d"]; ?>" size="25" maxlength="25">
	<input name="loc-e" type="text" id="loc-e" value="<?php if (isset($_POST["loc-e"])) echo $_POST["loc-e"]; ?>" size="25" maxlength="25">

	<input name="truck-a" type="text" id="truck-a" value="<?php if (isset($_POST["truck-a"])) echo $_POST["truck-a"]; ?>" size="25" maxlength="25">
	<input name="truck-b" type="text" id="truck-b" value="<?php if (isset($_POST["truck-b"])) echo $_POST["truck-b"]; ?>" size="25" maxlength="25">
	<input name="truck-c" type="text" id="truck-c" value="<?php if (isset($_POST["truck-c"])) echo $_POST["truck-c"]; ?>" size="25" maxlength="25">
	<input name="truck-d" type="text" id="truck-d" value="<?php if (isset($_POST["truck-d"])) echo $_POST["truck-d"]; ?>" size="25" maxlength="25">
	<input name="truck-e" type="text" id="truck-e" value="<?php if (isset($_POST["truck-e"])) echo $_POST["truck-e"]; ?>" size="25" maxlength="25">

	<input name="del-a" type="text" id="del-a" value="<?php if (isset($_POST["del-a"])) echo $_POST["del-a"]; ?>" size="25" maxlength="25">
	<input name="del-b" type="text" id="del-b" value="<?php if (isset($_POST["del-b"])) echo $_POST["del-b"]; ?>" size="25" maxlength="25">
	<input name="del-c" type="text" id="del-c" value="<?php if (isset($_POST["del-c"])) echo $_POST["del-c"]; ?>" size="25" maxlength="25">
	<input name="del-d" type="text" id="del-d" value="<?php if (isset($_POST["del-d"])) echo $_POST["del-d"]; ?>" size="25" maxlength="25">
	<input name="del-e" type="text" id="del-e" value="<?php if (isset($_POST["del-e"])) echo $_POST["del-e"]; ?>" size="25" maxlength="25">

	<input name="giver-a" type="text" id="giver-a" value="<?php if (isset($_POST["giver-a"])) echo $_POST["giver-a"]; ?>" size="25" maxlength="25">
	<input name="giver-b" type="text" id="giver-b" value="<?php if (isset($_POST["giver-b"])) echo $_POST["giver-b"]; ?>" size="25" maxlength="25">
	<input name="giver-c" type="text" id="giver-c" value="<?php if (isset($_POST["giver-c"])) echo $_POST["giver-c"]; ?>" size="25" maxlength="25">
	<input name="giver-d" type="text" id="giver-d" value="<?php if (isset($_POST["giver-d"])) echo $_POST["giver-d"]; ?>" size="25" maxlength="25">
	<input name="giver-e" type="text" id="giver-e" value="<?php if (isset($_POST["giver-e"])) echo $_POST["giver-e"]; ?>" size="25" maxlength="25">

	<input name="receiver-a" type="text" id="receiver-a" value="<?php if (isset($_POST["receiver-a"])) echo $_POST["receiver-a"]; ?>" size="25" maxlength="25">
	<input name="receiver-b" type="text" id="receiver-b" value="<?php if (isset($_POST["receiver-b"])) echo $_POST["receiver-b"]; ?>" size="25" maxlength="25">
	<input name="receiver-c" type="text" id="receiver-c" value="<?php if (isset($_POST["receiver-c"])) echo $_POST["receiver-c"]; ?>" size="25" maxlength="25">
	<input name="receiver-d" type="text" id="receiver-d" value="<?php if (isset($_POST["receiver-d"])) echo $_POST["receiver-d"]; ?>" size="25" maxlength="25">
	<input name="receiver-e" type="text" id="receiver-e" value="<?php if (isset($_POST["receiver-e"])) echo $_POST["receiver-e"]; ?>" size="25" maxlength="25">

	<?php if (isset($_POST["submit"])) { ?>
		<img id="sig_img1" src="<?php echo $signature_img1?>">
		<img id="sig_img2" src="<?php echo $signature_img2?>">
	<?php } else { ?>
		<canvas id="signature1" width="1180" height="55"></canvas>
		<input type="hidden" name="signature1" />
		<canvas id="signature2" width="1180" height="58"></canvas>
		<input type="hidden" name="signature2" />
	<?php 
	 } ?>

	<br>
	
<p><input name="submit" type="submit" id="submit" value="Download PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>