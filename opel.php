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


    /* pdf verzia*/
    img {
		position: absolute; 
		width: 720px; 
		height: 1017px; 
		left: 12px;
		top: 10px;
		margin: 0px; 
		z-index: -1; 
	}
	#sig_img1 {
		position: fixed; 
		left: 224px; 
		top: 845px; 
		height: 15px;
		width: 470px;		
	}
	#sig_img2 {
		position: fixed; 
		left: 224px; 
		top: 928px; 
		height: 15px;
		width: 470px;		
	}
    #submit {
		position: absolute; 
		top: 1020px; 		
		left: 77px; 
    }
	#next {
		position: absolute; 
		top: 1020px; 		
		left: 190px; 
    }

	#model {
		position: absolute;
		height: 18px;  
		top: 111px; 		
		left: 77px; 
		width: 340px; 
		font-size: 7px;	
	}

	#truckno {
		position: absolute;
		height: 18px;  
		top: 169px; 		
		left: 77px; 
		width: 340px; 
		font-size: 7px;		
	}
	#waybill {
		position: absolute;
		height: 18px;  
		top: 204px; 		
		left: 77px; 
		width: 340px; 
		font-size: 7px;		
	}
	#remarks {
		position: absolute;
		height: 18px;  
		top: 725px; 		
		left: 77px; 
		width: 340px; 
		font-size: 7px;		
	}
	#remarkss {
		position: absolute;
		height: 18px;  
		top: 748px; 		
		left: 77px; 
		width: 340px; 
		font-size: 7px;	 	
	}
	#vin {
		position: absolute;
		height: 17px;  
		top: 140px; 		
		left: 77px; 
		width: 340px; 
		font-size: 7px;	
		letter-spacing: 19px;	
	}



	#deliveringA {
		position: absolute;  
		height: 20px;
		top: 799px; 		
		left: 219px; 
		width: 94px; 
		font-size: 8px;	
	}
	#deliveringB {
		position: absolute;  
		height: 20px;
		top: 799px; 		
		left: 313px; 
		width: 94px; 
		font-size: 8px;	 	
	}
	#deliveringC {
		position: absolute;  
		height: 20px;
		top: 799px; 		
		left: 407px; 
		width: 93px; 
		font-size: 8px;		
	}
	#deliveringD {
		position: absolute;  
		height: 20px;
		top: 799px; 		
		left: 500px; 
		width: 94px; 
		font-size: 8px;	 	
	}
	#deliveringE {
		position: absolute;  
		height: 20px;
		top: 799px; 		
		left: 594px; 
		width: 94px; 
		font-size: 8px;		
	}
	#trucknoA {
		position: absolute;  
		height: 15px;
		top: 820px; 		
		left: 219px; 
		width: 94px; 
		font-size: 8px;		
	}
	#trucknoB {
		position: absolute;  
		height: 15px;
		top: 820px; 		
		left: 313px; 
		width: 94px; 
		font-size: 8px;	
	}
	#trucknoC {
		position: absolute;  
		height: 15px;
		top: 820px; 		
		left: 407px; 
		width: 93px; 
		font-size: 8px;		
	}
	#trucknoD {
		position: absolute;  
		height: 15px;
		top: 820px; 		
		left: 500px; 
		width: 94px; 
		font-size: 8px;		
	}
	#trucknoE {
		position: absolute;  
		height: 15px;
		top: 820px; 		
		left: 594px; 
		width: 94px; 
		font-size: 8px;	
	}
	#nameA {
		position: absolute;  
		height: 20px;
		top: 860px; 		
		left: 219px; 
		width: 94px; 
		font-size: 8px;		
	}
	#nameB {
		position: absolute;  
		height: 20px;
		top: 860px; 		
		left: 313px; 
		width: 94px; 
		font-size: 8px;	
	}
	#nameC {
		position: absolute;  
		height: 20px;
		top: 860px; 		
		left: 407px; 
		width: 93px; 
		font-size: 8px;		
	}
	#nameD {
		position: absolute;  
		height: 20px;
		top: 860px; 		
		left: 500px; 
		width: 94px; 
		font-size: 8px;	
	}
	#nameE {
		position: absolute;  
		height: 20px;
		top: 860px; 		
		left: 594px; 
		width: 94px; 
		font-size: 8px;		
	}
	#recievingA {
		position: absolute;  
		height: 20px;
		top: 881px; 		
		left: 219px; 
		width: 94px; 
		font-size: 8px;		
	}
	#recievingB {
		position: absolute;  
		height: 20px;
		top: 881px; 		
		left: 313px; 
		width: 94px; 
		font-size: 8px;	
	}
	#recievingC {
		position: absolute;  
		height: 20px;
		top: 881px; 		
		left: 407px; 
		width: 93px; 
		font-size: 8px;	
	}
	#recievingD {
		position: absolute;  
		height: 20px;
		top: 881px; 		
		left: 500px; 
		width: 94px; 
		font-size: 8px;		
	}
	#recievingE {
		position: absolute;  
		height: 20px;
		top: 881px; 		
		left: 594px; 
		width: 94px; 
		font-size: 8px;		
	}
	#nameofinspectorA {
		position: absolute;  
		height: 15px;
		top: 902px; 		
		left: 219px; 
		width: 94px; 
		font-size: 8px;		
	}
	#nameofinspectorB {
		position: absolute;  
		height: 15px;
		top: 902px; 		
		left: 313px; 
		width: 94px; 
		font-size: 8px;	
	}
	#nameofinspectorC {
		position: absolute;  
		height: 15px;
		top: 902px; 		
		left: 407px; 
		width: 93px; 
		font-size: 8px;		
	}
	#nameofinspectorD {
		position: absolute;  
		height: 15px;
		top: 902px; 		
		left: 500px; 
		width: 94px; 
		font-size: 8px;	
	}
	#nameofinspectorE {
		position: absolute;  
		height: 15px;
		top: 902px; 		
		left: 594px; 
		width: 94px; 
		font-size: 8px;	
	}
	#dateA {
		position: absolute;  
		height: 20px;
		top: 943px; 		
		left: 219px; 
		width: 94px; 
		font-size: 8px;		
	}
	#dateB {
		position: absolute;  
		height: 20px;
		top: 943px; 		
		left: 313px; 
		width: 94px; 
		font-size: 8px;	
	}
	#dateC {
		position: absolute;  
		height: 20px;
		top: 943px; 		
		left: 407px; 
		width: 93px; 
		font-size: 8px;		
	}
	#dateD {
		position: absolute;  
		height: 20px;
		top: 943px; 		
		left: 500px; 
		width: 94px; 
		font-size: 8px;		
	}
	#dateE {
		position: absolute;  
		height: 20px;
		top: 943px; 		
		left: 594px; 
		width: 94px; 
		font-size: 8px;	
	}



	#area68 {
		position: absolute;
		height: 10px;
		top: 609px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;	
	}
	#area69 {
		position: absolute;
		height: 10px;
		top: 623px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}
	#area70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}
	#area71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}
	#area72 {
		position: absolute;
		height: 10px;
		top: 663px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}
	#area73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}
	#area74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}
	#area75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}
	#area76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}
	#area77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}
	#area78 {
		position: absolute;
		height: 10px;
		top: 744px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}
	#area79 {
		position: absolute;
		height: 10px;
		top: 757px; 		
		left: 428px; 
		width: 18px;
		font-size: 6px;		
	}




	#A-D-03 {
		position: absolute;
		height: 10px;
		top: 151px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-03 {
		position: absolute;
		height: 10px;
		top: 151px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-03 {
		position: absolute;
		height: 10px;
		top: 151px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-03 {
		position: absolute;
		height: 10px;
		top: 151px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-03 {
		position: absolute;
		height: 10px;
		top: 151px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-03 {
		position: absolute;
		height: 10px;
		top: 151px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-03 {
		position: absolute;
		height: 10px;
		top: 151px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-03 {
		position: absolute;
		height: 10px;
		top: 151px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-03 {
		position: absolute;
		height: 10px;
		top: 151px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-03 {
		position: absolute;
		height: 10px;
		top: 151px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-04 {
		position: absolute;
		height: 10px;
		top: 165px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-04 {
		position: absolute;
		height: 10px;
		top: 165px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-04 {
		position: absolute;
		height: 10px;
		top: 165px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-04 {
		position: absolute;
		height: 10px;
		top: 165px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-04 {
		position: absolute;
		height: 10px;
		top: 165px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-04 {
		position: absolute;
		height: 10px;
		top: 165px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-04 {
		position: absolute;
		height: 10px;
		top: 165px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-04 {
		position: absolute;
		height: 10px;
		top: 165px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-04 {
		position: absolute;
		height: 10px;
		top: 165px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-04 {
		position: absolute;
		height: 10px;
		top: 165px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-10 {
		position: absolute;
		height: 10px;
		top: 178px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-10 {
		position: absolute;
		height: 10px;
		top: 178px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-10 {
		position: absolute;
		height: 10px;
		top: 178px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-10 {
		position: absolute;
		height: 10px;
		top: 178px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-10 {
		position: absolute;
		height: 10px;
		top: 178px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-10 {
		position: absolute;
		height: 10px;
		top: 178px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-10 {
		position: absolute;
		height: 10px;
		top: 178px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-10 {
		position: absolute;
		height: 10px;
		top: 178px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-10 {
		position: absolute;
		height: 10px;
		top: 178px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-10 {
		position: absolute;
		height: 10px;
		top: 178px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}



	#A-D-11 {
		position: absolute;
		height: 10px;
		top: 192px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-11 {
		position: absolute;
		height: 10px;
		top: 192px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-11 {
		position: absolute;
		height: 10px;
		top: 192px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-11 {
		position: absolute;
		height: 10px;
		top: 192px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-11 {
		position: absolute;
		height: 10px;
		top: 192px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-11 {
		position: absolute;
		height: 10px;
		top: 192px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-11 {
		position: absolute;
		height: 10px;
		top: 192px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-11 {
		position: absolute;
		height: 10px;
		top: 192px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-11 {
		position: absolute;
		height: 10px;
		top: 192px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-11 {
		position: absolute;
		height: 10px;
		top: 192px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-12 {
		position: absolute;
		height: 10px;
		top: 205px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-12 {
		position: absolute;
		height: 10px;
		top: 205px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-12 {
		position: absolute;
		height: 10px;
		top: 205px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-12 {
		position: absolute;
		height: 10px;
		top: 205px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-12 {
		position: absolute;
		height: 10px;
		top: 205px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-12 {
		position: absolute;
		height: 10px;
		top: 205px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-12 {
		position: absolute;
		height: 10px;
		top: 205px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-12 {
		position: absolute;
		height: 10px;
		top: 205px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-12 {
		position: absolute;
		height: 10px;
		top: 205px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-12 {
		position: absolute;
		height: 10px;
		top: 205px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}
	


	#A-D-13 {
		position: absolute;
		height: 10px;
		top: 219px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-13 {
		position: absolute;
		height: 10px;
		top: 219px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-13 {
		position: absolute;
		height: 10px;
		top: 219px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-13 {
		position: absolute;
		height: 10px;
		top: 219px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-13 {
		position: absolute;
		height: 10px;
		top: 219px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-13 {
		position: absolute;
		height: 10px;
		top: 219px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-13 {
		position: absolute;
		height: 10px;
		top: 219px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-13 {
		position: absolute;
		height: 10px;
		top: 219px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-13 {
		position: absolute;
		height: 10px;
		top: 219px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-13 {
		position: absolute;
		height: 10px;
		top: 219px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-14 {
		position: absolute;
		height: 10px;
		top: 232px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-14 {
		position: absolute;
		height: 10px;
		top: 232px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-14 {
		position: absolute;
		height: 10px;
		top: 232px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-14 {
		position: absolute;
		height: 10px;
		top: 232px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-14 {
		position: absolute;
		height: 10px;
		top: 232px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-14 {
		position: absolute;
		height: 10px;
		top: 232px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-14 {
		position: absolute;
		height: 10px;
		top: 232px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-14 {
		position: absolute;
		height: 10px;
		top: 232px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-14 {
		position: absolute;
		height: 10px;
		top: 232px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-14 {
		position: absolute;
		height: 10px;
		top: 232px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-15 {
		position: absolute;
		height: 10px;
		top: 246px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-15 {
		position: absolute;
		height: 10px;
		top: 246px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-15 {
		position: absolute;
		height: 10px;
		top: 246px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-15 {
		position: absolute;
		height: 10px;
		top: 246px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-15 {
		position: absolute;
		height: 10px;
		top: 246px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-15 {
		position: absolute;
		height: 10px;
		top: 246px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-15 {
		position: absolute;
		height: 10px;
		top: 246px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-15 {
		position: absolute;
		height: 10px;
		top: 246px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-15 {
		position: absolute;
		height: 10px;
		top: 246px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-15 {
		position: absolute;
		height: 10px;
		top: 246px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-16 {
		position: absolute;
		height: 10px;
		top: 259px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-16 {
		position: absolute;
		height: 10px;
		top: 259px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-16 {
		position: absolute;
		height: 10px;
		top: 259px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-16 {
		position: absolute;
		height: 10px;
		top: 259px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-16 {
		position: absolute;
		height: 10px;
		top: 259px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-16 {
		position: absolute;
		height: 10px;
		top: 259px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-16 {
		position: absolute;
		height: 10px;
		top: 259px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-16 {
		position: absolute;
		height: 10px;
		top: 259px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-16 {
		position: absolute;
		height: 10px;
		top: 259px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-16 {
		position: absolute;
		height: 10px;
		top: 259px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	
	#A-D-17 {
		position: absolute;
		height: 10px;
		top: 273px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-17 {
		position: absolute;
		height: 10px;
		top: 273px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-17 {
		position: absolute;
		height: 10px;
		top: 273px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-17 {
		position: absolute;
		height: 10px;
		top: 273px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-17 {
		position: absolute;
		height: 10px;
		top: 273px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-17 {
		position: absolute;
		height: 10px;
		top: 273px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-17 {
		position: absolute;
		height: 10px;
		top: 273px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-17 {
		position: absolute;
		height: 10px;
		top: 273px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-17 {
		position: absolute;
		height: 10px;
		top: 273px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-17 {
		position: absolute;
		height: 10px;
		top: 273px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-20 {
		position: absolute;
		height: 10px;
		top: 286px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-20 {
		position: absolute;
		height: 10px;
		top: 286px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-20 {
		position: absolute;
		height: 10px;
		top: 286px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-20 {
		position: absolute;
		height: 10px;
		top: 286px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-20 {
		position: absolute;
		height: 10px;
		top: 286px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-20 {
		position: absolute;
		height: 10px;
		top: 286px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-20 {
		position: absolute;
		height: 10px;
		top: 286px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-20 {
		position: absolute;
		height: 10px;
		top: 286px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-20 {
		position: absolute;
		height: 10px;
		top: 286px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-20 {
		position: absolute;
		height: 10px;
		top: 286px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-21 {
		position: absolute;
		height: 10px;
		top: 300px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-21 {
		position: absolute;
		height: 10px;
		top: 300px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-21 {
		position: absolute;
		height: 10px;
		top: 300px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-21 {
		position: absolute;
		height: 10px;
		top: 300px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-21 {
		position: absolute;
		height: 10px;
		top: 300px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-21 {
		position: absolute;
		height: 10px;
		top: 300px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-21 {
		position: absolute;
		height: 10px;
		top: 300px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-21 {
		position: absolute;
		height: 10px;
		top: 300px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-21 {
		position: absolute;
		height: 10px;
		top: 300px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-21 {
		position: absolute;
		height: 10px;
		top: 300px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-22 {
		position: absolute;
		height: 10px;
		top: 313px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-22 {
		position: absolute;
		height: 10px;
		top: 313px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-22 {
		position: absolute;
		height: 10px;
		top: 313px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-22 {
		position: absolute;
		height: 10px;
		top: 313px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-22 {
		position: absolute;
		height: 10px;
		top: 313px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-22 {
		position: absolute;
		height: 10px;
		top: 313px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-22 {
		position: absolute;
		height: 10px;
		top: 313px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-22 {
		position: absolute;
		height: 10px;
		top: 313px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-22 {
		position: absolute;
		height: 10px;
		top: 313px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-22 {
		position: absolute;
		height: 10px;
		top: 313px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-24 {
		position: absolute;
		height: 10px;
		top: 327px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-24 {
		position: absolute;
		height: 10px;
		top: 327px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-24 {
		position: absolute;
		height: 10px;
		top: 327px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-24 {
		position: absolute;
		height: 10px;
		top: 327px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-24 {
		position: absolute;
		height: 10px;
		top: 327px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-24 {
		position: absolute;
		height: 10px;
		top: 327px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-24 {
		position: absolute;
		height: 10px;
		top: 327px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-24 {
		position: absolute;
		height: 10px;
		top: 327px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-24 {
		position: absolute;
		height: 10px;
		top: 327px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-24 {
		position: absolute;
		height: 10px;
		top: 327px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-25 {
		position: absolute;
		height: 10px;
		top: 340px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-25 {
		position: absolute;
		height: 10px;
		top: 340px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-25 {
		position: absolute;
		height: 10px;
		top: 340px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-25 {
		position: absolute;
		height: 10px;
		top: 340px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-25 {
		position: absolute;
		height: 10px;
		top: 340px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-25 {
		position: absolute;
		height: 10px;
		top: 340px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-25 {
		position: absolute;
		height: 10px;
		top: 340px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-25 {
		position: absolute;
		height: 10px;
		top: 340px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-25 {
		position: absolute;
		height: 10px;
		top: 340px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-25 {
		position: absolute;
		height: 10px;
		top: 340px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-27 {
		position: absolute;
		height: 10px;
		top: 354px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-27 {
		position: absolute;
		height: 10px;
		top: 354px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-27 {
		position: absolute;
		height: 10px;
		top: 354px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-27 {
		position: absolute;
		height: 10px;
		top: 354px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-27 {
		position: absolute;
		height: 10px;
		top: 354px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-27 {
		position: absolute;
		height: 10px;
		top: 354px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-27 {
		position: absolute;
		height: 10px;
		top: 354px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-27 {
		position: absolute;
		height: 10px;
		top: 354px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-27 {
		position: absolute;
		height: 10px;
		top: 354px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-27 {
		position: absolute;
		height: 10px;
		top: 354px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-28 {
		position: absolute;
		height: 10px;
		top: 367px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-28 {
		position: absolute;
		height: 10px;
		top: 367px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-28 {
		position: absolute;
		height: 10px;
		top: 367px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-28 {
		position: absolute;
		height: 10px;
		top: 367px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-28 {
		position: absolute;
		height: 10px;
		top: 367px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-28 {
		position: absolute;
		height: 10px;
		top: 367px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-28 {
		position: absolute;
		height: 10px;
		top: 367px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-28 {
		position: absolute;
		height: 10px;
		top: 367px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-28 {
		position: absolute;
		height: 10px;
		top: 367px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-28 {
		position: absolute;
		height: 10px;
		top: 367px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-30 {
		position: absolute;
		height: 10px;
		top: 381px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-30 {
		position: absolute;
		height: 10px;
		top: 381px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-30 {
		position: absolute;
		height: 10px;
		top: 381px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-30 {
		position: absolute;
		height: 10px;
		top: 381px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-30 {
		position: absolute;
		height: 10px;
		top: 381px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-30 {
		position: absolute;
		height: 10px;
		top: 381px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-30 {
		position: absolute;
		height: 10px;
		top: 381px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-30 {
		position: absolute;
		height: 10px;
		top: 381px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-30 {
		position: absolute;
		height: 10px;
		top: 381px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-30 {
		position: absolute;
		height: 10px;
		top: 381px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-31 {
		position: absolute;
		height: 10px;
		top: 394px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-31 {
		position: absolute;
		height: 10px;
		top: 394px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-31 {
		position: absolute;
		height: 10px;
		top: 394px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-31 {
		position: absolute;
		height: 10px;
		top: 394px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-31 {
		position: absolute;
		height: 10px;
		top: 394px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-31 {
		position: absolute;
		height: 10px;
		top: 394px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-31 {
		position: absolute;
		height: 10px;
		top: 394px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-31 {
		position: absolute;
		height: 10px;
		top: 394px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-31 {
		position: absolute;
		height: 10px;
		top: 394px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-31 {
		position: absolute;
		height: 10px;
		top: 394px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-33 {
		position: absolute;
		height: 10px;
		top: 408px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-33 {
		position: absolute;
		height: 10px;
		top: 408px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-33 {
		position: absolute;
		height: 10px;
		top: 408px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-33 {
		position: absolute;
		height: 10px;
		top: 408px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-33 {
		position: absolute;
		height: 10px;
		top: 408px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-33 {
		position: absolute;
		height: 10px;
		top: 408px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-33 {
		position: absolute;
		height: 10px;
		top: 408px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-33 {
		position: absolute;
		height: 10px;
		top: 408px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-33 {
		position: absolute;
		height: 10px;
		top: 408px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-33 {
		position: absolute;
		height: 10px;
		top: 408px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-34 {
		position: absolute;
		height: 10px;
		top: 421px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-34 {
		position: absolute;
		height: 10px;
		top: 421px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-34 {
		position: absolute;
		height: 10px;
		top: 421px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-34 {
		position: absolute;
		height: 10px;
		top: 421px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-34 {
		position: absolute;
		height: 10px;
		top: 421px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-34 {
		position: absolute;
		height: 10px;
		top: 421px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-34 {
		position: absolute;
		height: 10px;
		top: 421px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-34 {
		position: absolute;
		height: 10px;
		top: 421px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-34 {
		position: absolute;
		height: 10px;
		top: 421px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-34 {
		position: absolute;
		height: 10px;
		top: 421px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-35 {
		position: absolute;
		height: 10px;
		top: 435px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-35 {
		position: absolute;
		height: 10px;
		top: 435px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-35 {
		position: absolute;
		height: 10px;
		top: 435px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-35 {
		position: absolute;
		height: 10px;
		top: 435px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-35 {
		position: absolute;
		height: 10px;
		top: 435px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-35 {
		position: absolute;
		height: 10px;
		top: 435px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-35 {
		position: absolute;
		height: 10px;
		top: 435px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-35 {
		position: absolute;
		height: 10px;
		top: 435px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-35 {
		position: absolute;
		height: 10px;
		top: 435px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-35 {
		position: absolute;
		height: 10px;
		top: 435px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-36 {
		position: absolute;
		height: 10px;
		top: 448px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-36 {
		position: absolute;
		height: 10px;
		top: 448px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-36 {
		position: absolute;
		height: 10px;
		top: 448px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-36 {
		position: absolute;
		height: 10px;
		top: 448px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-36 {
		position: absolute;
		height: 10px;
		top: 448px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-36 {
		position: absolute;
		height: 10px;
		top: 448px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-36 {
		position: absolute;
		height: 10px;
		top: 448px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-36 {
		position: absolute;
		height: 10px;
		top: 448px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-36 {
		position: absolute;
		height: 10px;
		top: 448px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-36 {
		position: absolute;
		height: 10px;
		top: 448px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-37 {
		position: absolute;
		height: 10px;
		top: 462px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-37 {
		position: absolute;
		height: 10px;
		top: 462px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-37 {
		position: absolute;
		height: 10px;
		top: 462px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-37 {
		position: absolute;
		height: 10px;
		top: 462px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-37 {
		position: absolute;
		height: 10px;
		top: 462px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-37 {
		position: absolute;
		height: 10px;
		top: 462px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-37 {
		position: absolute;
		height: 10px;
		top: 462px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-37 {
		position: absolute;
		height: 10px;
		top: 462px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-37 {
		position: absolute;
		height: 10px;
		top: 462px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-37 {
		position: absolute;
		height: 10px;
		top: 462px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	
	#A-D-38 {
		position: absolute;
		height: 10px;
		top: 475px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-38 {
		position: absolute;
		height: 10px;
		top: 475px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-38 {
		position: absolute;
		height: 10px;
		top: 475px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-38 {
		position: absolute;
		height: 10px;
		top: 475px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-38 {
		position: absolute;
		height: 10px;
		top: 475px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-38 {
		position: absolute;
		height: 10px;
		top: 475px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-38 {
		position: absolute;
		height: 10px;
		top: 475px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-38 {
		position: absolute;
		height: 10px;
		top: 475px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-38 {
		position: absolute;
		height: 10px;
		top: 475px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-38 {
		position: absolute;
		height: 10px;
		top: 475px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	
	#A-D-39 {
		position: absolute;
		height: 10px;
		top: 489px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-39 {
		position: absolute;
		height: 10px;
		top: 489px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-39 {
		position: absolute;
		height: 10px;
		top: 489px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-39 {
		position: absolute;
		height: 10px;
		top: 489px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-39 {
		position: absolute;
		height: 10px;
		top: 489px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-39 {
		position: absolute;
		height: 10px;
		top: 489px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-39 {
		position: absolute;
		height: 10px;
		top: 489px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-39 {
		position: absolute;
		height: 10px;
		top: 489px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-39 {
		position: absolute;
		height: 10px;
		top: 489px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-39 {
		position: absolute;
		height: 10px;
		top: 489px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-40 {
		position: absolute;
		height: 10px;
		top: 502px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-40 {
		position: absolute;
		height: 10px;
		top: 502px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-40 {
		position: absolute;
		height: 10px;
		top: 502px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-40 {
		position: absolute;
		height: 10px;
		top: 502px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-40 {
		position: absolute;
		height: 10px;
		top: 502px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-40 {
		position: absolute;
		height: 10px;
		top: 502px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-40 {
		position: absolute;
		height: 10px;
		top: 502px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-40 {
		position: absolute;
		height: 10px;
		top: 502px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-40 {
		position: absolute;
		height: 10px;
		top: 502px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-40 {
		position: absolute;
		height: 10px;
		top: 502px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-45 {
		position: absolute;
		height: 10px;
		top: 516px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-45 {
		position: absolute;
		height: 10px;
		top: 516px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-45 {
		position: absolute;
		height: 10px;
		top: 516px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-45 {
		position: absolute;
		height: 10px;
		top: 516px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-45 {
		position: absolute;
		height: 10px;
		top: 516px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-45 {
		position: absolute;
		height: 10px;
		top: 516px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-45 {
		position: absolute;
		height: 10px;
		top: 516px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-45 {
		position: absolute;
		height: 10px;
		top: 516px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-45 {
		position: absolute;
		height: 10px;
		top: 516px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-45 {
		position: absolute;
		height: 10px;
		top: 516px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-47 {
		position: absolute;
		height: 10px;
		top: 529px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-47 {
		position: absolute;
		height: 10px;
		top: 529px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-47 {
		position: absolute;
		height: 10px;
		top: 529px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-47 {
		position: absolute;
		height: 10px;
		top: 529px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-47 {
		position: absolute;
		height: 10px;
		top: 529px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-47 {
		position: absolute;
		height: 10px;
		top: 529px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-47 {
		position: absolute;
		height: 10px;
		top: 529px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-47 {
		position: absolute;
		height: 10px;
		top: 529px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-47 {
		position: absolute;
		height: 10px;
		top: 529px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-47 {
		position: absolute;
		height: 10px;
		top: 529px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-52 {
		position: absolute;
		height: 10px;
		top: 543px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-52 {
		position: absolute;
		height: 10px;
		top: 543px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-52 {
		position: absolute;
		height: 10px;
		top: 543px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-52 {
		position: absolute;
		height: 10px;
		top: 543px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-52 {
		position: absolute;
		height: 10px;
		top: 543px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-52 {
		position: absolute;
		height: 10px;
		top: 543px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-52 {
		position: absolute;
		height: 10px;
		top: 543px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-52 {
		position: absolute;
		height: 10px;
		top: 543px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-52 {
		position: absolute;
		height: 10px;
		top: 543px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-52 {
		position: absolute;
		height: 10px;
		top: 543px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-53 {
		position: absolute;
		height: 10px;
		top: 556px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-53 {
		position: absolute;
		height: 10px;
		top: 556px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-53 {
		position: absolute;
		height: 10px;
		top: 556px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-53 {
		position: absolute;
		height: 10px;
		top: 556px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-53 {
		position: absolute;
		height: 10px;
		top: 556px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-53 {
		position: absolute;
		height: 10px;
		top: 556px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-53 {
		position: absolute;
		height: 10px;
		top: 556px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-53 {
		position: absolute;
		height: 10px;
		top: 556px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-53 {
		position: absolute;
		height: 10px;
		top: 556px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-53 {
		position: absolute;
		height: 10px;
		top: 556px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-57 {
		position: absolute;
		height: 10px;
		top: 570px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-57 {
		position: absolute;
		height: 10px;
		top: 570px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-57 {
		position: absolute;
		height: 10px;
		top: 570px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-57 {
		position: absolute;
		height: 10px;
		top: 570px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-57 {
		position: absolute;
		height: 10px;
		top: 570px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-57 {
		position: absolute;
		height: 10px;
		top: 570px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-57 {
		position: absolute;
		height: 10px;
		top: 570px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-57 {
		position: absolute;
		height: 10px;
		top: 570px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-57 {
		position: absolute;
		height: 10px;
		top: 570px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-57 {
		position: absolute;
		height: 10px;
		top: 570px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}
	
	#A-D-59 {
		position: absolute;
		height: 10px;
		top: 583px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-59 {
		position: absolute;
		height: 10px;
		top: 583px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-59 {
		position: absolute;
		height: 10px;
		top: 583px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-59 {
		position: absolute;
		height: 10px;
		top: 583px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-59 {
		position: absolute;
		height: 10px;
		top: 583px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-59 {
		position: absolute;
		height: 10px;
		top: 583px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-59 {
		position: absolute;
		height: 10px;
		top: 583px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-59 {
		position: absolute;
		height: 10px;
		top: 583px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-59 {
		position: absolute;
		height: 10px;
		top: 583px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-59 {
		position: absolute;
		height: 10px;
		top: 583px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-67 {
		position: absolute;
		height: 10px;
		top: 597px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-67 {
		position: absolute;
		height: 10px;
		top: 597px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-67 {
		position: absolute;
		height: 10px;
		top: 597px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-67 {
		position: absolute;
		height: 10px;
		top: 597px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-67 {
		position: absolute;
		height: 10px;
		top: 597px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-67 {
		position: absolute;
		height: 10px;
		top: 597px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-67 {
		position: absolute;
		height: 10px;
		top: 597px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-67 {
		position: absolute;
		height: 10px;
		top: 597px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-67 {
		position: absolute;
		height: 10px;
		top: 597px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-67 {
		position: absolute;
		height: 10px;
		top: 597px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-68 {
		position: absolute;
		height: 10px;
		top: 610px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-68 {
		position: absolute;
		height: 10px;
		top: 610px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-68 {
		position: absolute;
		height: 10px;
		top: 610px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-68 {
		position: absolute;
		height: 10px;
		top: 610px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-68 {
		position: absolute;
		height: 10px;
		top: 610px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-68 {
		position: absolute;
		height: 10px;
		top: 610px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-68 {
		position: absolute;
		height: 10px;
		top: 610px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-68 {
		position: absolute;
		height: 10px;
		top: 610px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-68 {
		position: absolute;
		height: 10px;
		top: 610px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-68 {
		position: absolute;
		height: 10px;
		top: 610px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-69 {
		position: absolute;
		height: 10px;
		top: 624px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-69 {
		position: absolute;
		height: 10px;
		top: 624px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-69 {
		position: absolute;
		height: 10px;
		top: 624px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-69 {
		position: absolute;
		height: 10px;
		top: 624px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-69 {
		position: absolute;
		height: 10px;
		top: 624px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-69 {
		position: absolute;
		height: 10px;
		top: 624px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-69 {
		position: absolute;
		height: 10px;
		top: 624px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-69 {
		position: absolute;
		height: 10px;
		top: 624px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-69 {
		position: absolute;
		height: 10px;
		top: 624px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-69 {
		position: absolute;
		height: 10px;
		top: 624px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-70 {
		position: absolute;
		height: 10px;
		top: 637px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-71 {
		position: absolute;
		height: 10px;
		top: 650px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-72 {
		position: absolute;
		height: 10px;
		top: 664px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-72 {
		position: absolute;
		height: 10px;
		top: 664px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-72 {
		position: absolute;
		height: 10px;
		top: 664px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-72 {
		position: absolute;
		height: 10px;
		top: 664px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-72 {
		position: absolute;
		height: 10px;
		top: 664px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-72 {
		position: absolute;
		height: 10px;
		top: 664px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-72 {
		position: absolute;
		height: 10px;
		top: 664px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-72 {
		position: absolute;
		height: 10px;
		top: 664px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-72 {
		position: absolute;
		height: 10px;
		top: 664px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-72 {
		position: absolute;
		height: 10px;
		top: 664px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-73 {
		position: absolute;
		height: 10px;
		top: 677px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-74 {
		position: absolute;
		height: 10px;
		top: 691px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-75 {
		position: absolute;
		height: 10px;
		top: 704px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-76 {
		position: absolute;
		height: 10px;
		top: 718px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}

	#A-D-77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-77 {
		position: absolute;
		height: 10px;
		top: 731px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-78 {
		position: absolute;
		height: 10px;
		top: 745px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-78 {
		position: absolute;
		height: 10px;
		top: 745px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-78 {
		position: absolute;
		height: 10px;
		top: 745px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-78 {
		position: absolute;
		height: 10px;
		top: 745px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-78 {
		position: absolute;
		height: 10px;
		top: 745px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-78 {
		position: absolute;
		height: 10px;
		top: 745px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-78 {
		position: absolute;
		height: 10px;
		top: 745px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-78 {
		position: absolute;
		height: 10px;
		top: 745px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-78 {
		position: absolute;
		height: 10px;
		top: 745px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-78 {
		position: absolute;
		height: 10px;
		top: 745px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}


	#A-D-79 {
		position: absolute;
		height: 10px;
		top: 758px; 		
		left: 447px; 
		width: 22px;
		font-size: 6px;		
	}
	#A-S-79 {
		position: absolute;
		height: 10px;
		top: 758px; 		
		left: 470px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-D-79 {
		position: absolute;
		height: 10px;
		top: 758px; 		
		left: 495px; 
		width: 22px;
		font-size: 6px;	
	}
	#B-S-79 {
		position: absolute;
		height: 10px;
		top: 758px; 		
		left: 518px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-D-79 {
		position: absolute;
		height: 10px;
		top: 758px; 		
		left: 544px; 
		width: 22px;
		font-size: 6px;	
	}
	#C-S-79 {
		position: absolute;
		height: 10px;
		top: 758px; 		
		left: 567px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-D-79 {
		position: absolute;
		height: 10px;
		top: 758px; 		
		left: 593px; 
		width: 22px;
		font-size: 6px;	
	}
	#D-S-79 {
		position: absolute;
		height: 10px;
		top: 758px; 		
		left: 616px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-D-79 {
		position: absolute;
		height: 10px;
		top: 758px; 		
		left: 642px; 
		width: 22px;
		font-size: 6px;	
	}
	#E-S-79 {
		position: absolute;
		height: 10px;
		top: 758px; 		
		left: 665px; 
		width: 22px;
		font-size: 6px;	
	}







    

</style>
<?php } else { ?>
<style>



    /* web verzia */
    #model {
		position: absolute;  
		top: 250px; 		
		left: 165px; 
		width: 775px; 	
	}
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
	#vin {
		position: absolute;  
		top: 330px; 		
		left: 166px; 
		width: 778px; 
		letter-spacing: 46px;	
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
	#area68 {
		position: absolute;  
		top: 1392px; 		
		left: 975px; 
		width: 32px;	
	}
	#area69 {
		position: absolute;  
		top: 1423px; 		
		left: 975px; 
		width: 32px;	
	}#area70 {
		position: absolute;  
		top: 1454px; 		
		left: 975px; 
		width: 32px;	
	}#area71 {
		position: absolute;  
		top: 1485px; 		
		left: 975px; 
		width: 32px;	
	}#area72 {
		position: absolute;  
		top: 1516px; 		
		left: 975px; 
		width: 32px;	
	}#area73 {
		position: absolute;  
		top: 1547px; 		
		left: 975px; 
		width: 32px;	
	}#area74 {
		position: absolute;  
		top: 1578px; 		
		left: 975px; 
		width: 32px;	
	}#area75 {
		position: absolute;  
		top: 1609px; 		
		left: 975px; 
		width: 32px;	
	}#area76 {
		position: absolute;  
		top: 1641px; 		
		left: 975px; 
		width: 32px;	
	}#area77 {
		position: absolute;  
		top: 1669px; 		
		left: 975px; 
		width: 32px;	
	}#area78 {
		position: absolute;  
		top: 1700px; 		
		left: 975px; 
		width: 32px;	
	}
	#area79 {
		position: absolute;  
		top: 1731px; 		
		left: 975px; 
		width: 32px;	
	}
	#A-D-03 {
		position: absolute;  
		top: 338px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-03 {
		position: absolute;  
		top: 338px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-03 {
		position: absolute;  
		top: 338px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-03 {
		position: absolute;  
		top: 338px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-03 {
		position: absolute;  
		top: 338px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-03 {
		position: absolute;  
		top: 338px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-03 {
		position: absolute;  
		top: 338px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-03 {
		position: absolute;  
		top: 338px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-03 {
		position: absolute;  
		top: 338px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-03 {
		position: absolute;  
		top: 338px; 		
		left: 1516px; 
		width: 50px;	
	}
	


	#A-D-04 {
		position: absolute;  
		top: 369px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-04 {
		position: absolute;  
		top: 369px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-04 {
		position: absolute;  
		top: 369px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-04 {
		position: absolute;  
		top: 369px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-04 {
		position: absolute;  
		top: 369px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-04 {
		position: absolute;  
		top: 369px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-04 {
		position: absolute;  
		top: 369px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-04 {
		position: absolute;  
		top: 369px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-04 {
		position: absolute;  
		top: 369px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-04 {
		position: absolute;  
		top: 369px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-10 {
		position: absolute;  
		top: 400px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-10 {
		position: absolute;  
		top: 400px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-10 {
		position: absolute;  
		top: 400px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-10 {
		position: absolute;  
		top: 400px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-10 {
		position: absolute;  
		top: 400px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-10 {
		position: absolute;  
		top: 400px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-10 {
		position: absolute;  
		top: 400px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-10{
		position: absolute;  
		top: 400px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-10 {
		position: absolute;  
		top: 400px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-10 {
		position: absolute;  
		top: 400px; 		
		left: 1516px; 
		width: 50px;	
	}

	#A-D-11 {
		position: absolute;  
		top: 431px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-11 {
		position: absolute;  
		top: 431px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-11 {
		position: absolute;  
		top: 431px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-11 {
		position: absolute;  
		top: 431px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-11 {
		position: absolute;  
		top: 431px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-11 {
		position: absolute;  
		top: 431px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-11 {
		position: absolute;  
		top: 431px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-11{
		position: absolute;  
		top: 431px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-11 {
		position: absolute;  
		top: 431px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-11 {
		position: absolute;  
		top: 431px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-12 {
		position: absolute;  
		top: 462px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-12 {
		position: absolute;  
		top: 462px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-12 {
		position: absolute;  
		top: 462px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-12 {
		position: absolute;  
		top: 462px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-12 {
		position: absolute;  
		top: 462px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-12 {
		position: absolute;  
		top: 462px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-12 {
		position: absolute;  
		top: 462px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-12{
		position: absolute;  
		top: 462px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-12 {
		position: absolute;  
		top: 462px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-12 {
		position: absolute;  
		top: 462px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-13 {
		position: absolute;  
		top: 493px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-13 {
		position: absolute;  
		top: 493px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-13 {
		position: absolute;  
		top: 493px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-13 {
		position: absolute;  
		top: 493px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-13 {
		position: absolute;  
		top: 493px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-13 {
		position: absolute;  
		top: 493px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-13 {
		position: absolute;  
		top: 493px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-13 {
		position: absolute;  
		top: 493px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-13 {
		position: absolute;  
		top: 493px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-13 {
		position: absolute;  
		top: 493px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-14 {
		position: absolute;  
		top: 524px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-14 {
		position: absolute;  
		top: 524px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-14 {
		position: absolute;  
		top: 524px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-14 {
		position: absolute;  
		top: 524px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-14 {
		position: absolute;  
		top: 524px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-14 {
		position: absolute;  
		top: 524px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-14 {
		position: absolute;  
		top: 524px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-14 {
		position: absolute;  
		top: 524px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-14 {
		position: absolute;  
		top: 524px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-14 {
		position: absolute;  
		top: 524px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-15 {
		position: absolute;  
		top: 555px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-15 {
		position: absolute;  
		top: 555px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-15 {
		position: absolute;  
		top: 555px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-15 {
		position: absolute;  
		top: 555px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-15 {
		position: absolute;  
		top: 555px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-15 {
		position: absolute;  
		top: 555px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-15 {
		position: absolute;  
		top: 555px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-15 {
		position: absolute;  
		top: 555px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-15 {
		position: absolute;  
		top: 555px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-15 {
		position: absolute;  
		top: 555px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-16 {
		position: absolute;  
		top: 586px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-16 {
		position: absolute;  
		top: 586px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-16 {
		position: absolute;  
		top: 586px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-16 {
		position: absolute;  
		top: 586px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-16 {
		position: absolute;  
		top: 586px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-16 {
		position: absolute;  
		top: 586px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-16 {
		position: absolute;  
		top: 586px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-16 {
		position: absolute;  
		top: 586px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-16 {
		position: absolute;  
		top: 586px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-16 {
		position: absolute;  
		top: 586px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-17 {
		position: absolute;  
		top: 617px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-17 {
		position: absolute;  
		top: 617px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-17 {
		position: absolute;  
		top: 617px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-17 {
		position: absolute;  
		top: 617px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-17 {
		position: absolute;  
		top: 617px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-17 {
		position: absolute;  
		top: 617px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-17 {
		position: absolute;  
		top: 617px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-17 {
		position: absolute;  
		top: 617px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-17 {
		position: absolute;  
		top: 617px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-17 {
		position: absolute;  
		top: 617px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-20 {
		position: absolute;  
		top: 648px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-20 {
		position: absolute;  
		top: 648px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-20 {
		position: absolute;  
		top: 648px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-20 {
		position: absolute;  
		top: 648px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-20{
		position: absolute;  
		top: 648px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-20 {
		position: absolute;  
		top: 648px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-20 {
		position: absolute;  
		top: 648px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-20 {
		position: absolute;  
		top: 648px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-20 {
		position: absolute;  
		top: 648px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-20 {
		position: absolute;  
		top: 648px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-21 {
		position: absolute;  
		top: 679px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-21 {
		position: absolute;  
		top: 679px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-21 {
		position: absolute;  
		top: 679px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-21 {
		position: absolute;  
		top: 679px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-21{
		position: absolute;  
		top: 679px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-21 {
		position: absolute;  
		top: 679px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-21 {
		position: absolute;  
		top: 679px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-21 {
		position: absolute;  
		top: 679px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-21 {
		position: absolute;  
		top: 679px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-21 {
		position: absolute;  
		top: 679px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-22 {
		position: absolute;  
		top: 710px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-22 {
		position: absolute;  
		top: 710px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-22 {
		position: absolute;  
		top: 710px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-22 {
		position: absolute;  
		top: 710px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-22{
		position: absolute;  
		top: 710px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-22 {
		position: absolute;  
		top: 710px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-22 {
		position: absolute;  
		top: 710px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-22 {
		position: absolute;  
		top: 710px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-22 {
		position: absolute;  
		top: 710px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-22 {
		position: absolute;  
		top: 710px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-24 {
		position: absolute;  
		top: 741px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-24 {
		position: absolute;  
		top: 741px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-24 {
		position: absolute;  
		top: 741px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-24 {
		position: absolute;  
		top: 741px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-24 {
		position: absolute;  
		top: 741px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-24 {
		position: absolute;  
		top: 741px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-24 {
		position: absolute;  
		top: 741px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-24 {
		position: absolute;  
		top: 741px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-24 {
		position: absolute;  
		top: 741px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-24 {
		position: absolute;  
		top: 741px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-25 {
		position: absolute;  
		top: 772px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-25 {
		position: absolute;  
		top: 772px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-25 {
		position: absolute;  
		top: 772px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-25 {
		position: absolute;  
		top: 772px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-25 {
		position: absolute;  
		top: 772px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-25 {
		position: absolute;  
		top: 772px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-25 {
		position: absolute;  
		top: 772px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-25 {
		position: absolute;  
		top: 772px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-25 {
		position: absolute;  
		top: 772px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-25 {
		position: absolute;  
		top: 772px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-27 {
		position: absolute;  
		top: 803px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-27 {
		position: absolute;  
		top: 803px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-27 {
		position: absolute;  
		top: 803px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-27 {
		position: absolute;  
		top: 803px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-27 {
		position: absolute;  
		top: 803px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-27 {
		position: absolute;  
		top: 803px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-27 {
		position: absolute;  
		top: 803px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-27 {
		position: absolute;  
		top: 803px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-27 {
		position: absolute;  
		top: 803px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-27 {
		position: absolute;  
		top: 803px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-28 {
		position: absolute;  
		top: 834px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-28 {
		position: absolute;  
		top: 834px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-28 {
		position: absolute;  
		top: 834px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-28 {
		position: absolute;  
		top: 834px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-28 {
		position: absolute;  
		top: 834px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-28 {
		position: absolute;  
		top: 834px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-28 {
		position: absolute;  
		top: 834px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-28 {
		position: absolute;  
		top: 834px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-28 {
		position: absolute;  
		top: 834px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-28 {
		position: absolute;  
		top: 834px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-30 {
		position: absolute;  
		top: 865px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-30 {
		position: absolute;  
		top: 865px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-30 {
		position: absolute;  
		top: 865px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-30 {
		position: absolute;  
		top: 865px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-30 {
		position: absolute;  
		top: 865px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-30 {
		position: absolute;  
		top: 865px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-30 {
		position: absolute;  
		top: 865px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-30 {
		position: absolute;  
		top: 865px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-30 {
		position: absolute;  
		top: 865px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-30 {
		position: absolute;  
		top: 865px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-31 {
		position: absolute;  
		top: 896px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-31 {
		position: absolute;  
		top: 896px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-31 {
		position: absolute;  
		top: 896px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-31 {
		position: absolute;  
		top: 896px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-31 {
		position: absolute;  
		top: 896px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-31 {
		position: absolute;  
		top: 896px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-31 {
		position: absolute;  
		top: 896px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-31 {
		position: absolute;  
		top: 896px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-31 {
		position: absolute;  
		top: 896px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-31 {
		position: absolute;  
		top: 896px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-33 {
		position: absolute;  
		top: 927px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-33 {
		position: absolute;  
		top: 927px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-33 {
		position: absolute;  
		top: 927px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-33 {
		position: absolute;  
		top: 927px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-33 {
		position: absolute;  
		top: 927px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-33 {
		position: absolute;  
		top: 927px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-33 {
		position: absolute;  
		top: 927px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-33 {
		position: absolute;  
		top: 927px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-33 {
		position: absolute;  
		top: 927px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-33 {
		position: absolute;  
		top: 927px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-34 {
		position: absolute;  
		top: 958px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-34 {
		position: absolute;  
		top: 958px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-34 {
		position: absolute;  
		top: 958px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-34 {
		position: absolute;  
		top: 958px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-34 {
		position: absolute;  
		top: 958px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-34 {
		position: absolute;  
		top: 958px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-34 {
		position: absolute;  
		top: 958px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-34 {
		position: absolute;  
		top: 958px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-34 {
		position: absolute;  
		top: 958px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-34 {
		position: absolute;  
		top: 958px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-35 {
		position: absolute;  
		top: 989px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-35 {
		position: absolute;  
		top: 989px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-35 {
		position: absolute;  
		top: 989px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-35 {
		position: absolute;  
		top: 989px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-35 {
		position: absolute;  
		top: 989px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-35 {
		position: absolute;  
		top: 989px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-35 {
		position: absolute;  
		top: 989px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-35 {
		position: absolute;  
		top: 989px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-35 {
		position: absolute;  
		top: 989px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-35 {
		position: absolute;  
		top: 989px; 		
		left: 1516px; 
		width: 50px;	
	}

	#A-D-36 {
		position: absolute;  
		top: 1020px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-36 {
		position: absolute;  
		top: 1020px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-36 {
		position: absolute;  
		top: 1020px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-36 {
		position: absolute;  
		top: 1020px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-36 {
		position: absolute;  
		top: 1020px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-36 {
		position: absolute;  
		top: 1020px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-36 {
		position: absolute;  
		top: 1020px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-36 {
		position: absolute;  
		top: 1020px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-36 {
		position: absolute;  
		top: 1020px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-36 {
		position: absolute;  
		top: 1020px; 		
		left: 1516px; 
		width: 50px;	
	}

	#A-D-37 {
		position: absolute;  
		top: 1051px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-37 {
		position: absolute;  
		top: 1051px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-37 {
		position: absolute;  
		top: 1051px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-37 {
		position: absolute;  
		top: 1051px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-37 {
		position: absolute;  
		top: 1051px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-37 {
		position: absolute;  
		top: 1051px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-37 {
		position: absolute;  
		top: 1051px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-37 {
		position: absolute;  
		top: 1051px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-37 {
		position: absolute;  
		top: 1051px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-37 {
		position: absolute;  
		top: 1051px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-38 {
		position: absolute;  
		top: 1082px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-38 {
		position: absolute;  
		top: 1082px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-38 {
		position: absolute;  
		top: 1082px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-38 {
		position: absolute;  
		top: 1082px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-38 {
		position: absolute;  
		top: 1082px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-38 {
		position: absolute;  
		top: 1082px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-38 {
		position: absolute;  
		top: 1082px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-38 {
		position: absolute;  
		top: 1082px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-38 {
		position: absolute;  
		top: 1082px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-38 {
		position: absolute;  
		top: 1082px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-39 {
		position: absolute;  
		top: 1113px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-39 {
		position: absolute;  
		top: 1113px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-39 {
		position: absolute;  
		top: 1113px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-39 {
		position: absolute;  
		top: 1113px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-39 {
		position: absolute;  
		top: 1113px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-39 {
		position: absolute;  
		top: 1113px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-39 {
		position: absolute;  
		top: 1113px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-39 {
		position: absolute;  
		top: 1113px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-39 {
		position: absolute;  
		top: 1113px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-39 {
		position: absolute;  
		top: 1113px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-40 {
		position: absolute;  
		top: 1144px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-40 {
		position: absolute;  
		top: 1144px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-40 {
		position: absolute;  
		top: 1144px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-40 {
		position: absolute;  
		top: 1144px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-40 {
		position: absolute;  
		top: 1144px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-40 {
		position: absolute;  
		top: 1144px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-40 {
		position: absolute;  
		top: 1144px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-40 {
		position: absolute;  
		top: 1144px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-40 {
		position: absolute;  
		top: 1144px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-40 {
		position: absolute;  
		top: 1144px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-45 {
		position: absolute;  
		top: 1175px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-45 {
		position: absolute;  
		top: 1175px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-45 {
		position: absolute;  
		top: 1175px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-45 {
		position: absolute;  
		top: 1175px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-45 {
		position: absolute;  
		top: 1175px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-45 {
		position: absolute;  
		top: 1175px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-45 {
		position: absolute;  
		top: 1175px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-45 {
		position: absolute;  
		top: 1175px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-45 {
		position: absolute;  
		top: 1175px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-45 {
		position: absolute;  
		top: 1175px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-47 {
		position: absolute;  
		top: 1206px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-47 {
		position: absolute;  
		top: 1206px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-47 {
		position: absolute;  
		top: 1206px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-47 {
		position: absolute;  
		top: 1206px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-47 {
		position: absolute;  
		top: 1206px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-47 {
		position: absolute;  
		top: 1206px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-47 {
		position: absolute;  
		top: 1206px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-47 {
		position: absolute;  
		top: 1206px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-47 {
		position: absolute;  
		top: 1206px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-47 {
		position: absolute;  
		top: 1206px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-52 {
		position: absolute;  
		top: 1237px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-52 {
		position: absolute;  
		top: 1237px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-52 {
		position: absolute;  
		top: 1237px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-52 {
		position: absolute;  
		top: 1237px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-52 {
		position: absolute;  
		top: 1237px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-52 {
		position: absolute;  
		top: 1237px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-52 {
		position: absolute;  
		top: 1237px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-52 {
		position: absolute;  
		top: 1237px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-52 {
		position: absolute;  
		top: 1237px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-52 {
		position: absolute;  
		top: 1237px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-53 {
		position: absolute;  
		top: 1268px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-53 {
		position: absolute;  
		top: 1268px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-53 {
		position: absolute;  
		top: 1268px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-53 {
		position: absolute;  
		top: 1268px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-53 {
		position: absolute;  
		top: 1268px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-53 {
		position: absolute;  
		top: 1268px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-53 {
		position: absolute;  
		top: 1268px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-53 {
		position: absolute;  
		top: 1268px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-53 {
		position: absolute;  
		top: 1268px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-53 {
		position: absolute;  
		top: 1268px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-57 {
		position: absolute;  
		top: 1299px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-57 {
		position: absolute;  
		top: 1299px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-57 {
		position: absolute;  
		top: 1299px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-57 {
		position: absolute;  
		top: 1299px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-57 {
		position: absolute;  
		top: 1299px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-57 {
		position: absolute;  
		top: 1299px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-57 {
		position: absolute;  
		top: 1299px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-57 {
		position: absolute;  
		top: 1299px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-57 {
		position: absolute;  
		top: 1299px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-57 {
		position: absolute;  
		top: 1299px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-59 {
		position: absolute;  
		top: 1330px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-59 {
		position: absolute;  
		top: 1330px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-59 {
		position: absolute;  
		top: 1330px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-59 {
		position: absolute;  
		top: 1330px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-59 {
		position: absolute;  
		top: 1330px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-59 {
		position: absolute;  
		top: 1330px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-59 {
		position: absolute;  
		top: 1330px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-59 {
		position: absolute;  
		top: 1330px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-59 {
		position: absolute;  
		top: 1330px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-59 {
		position: absolute;  
		top: 1330px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-67 {
		position: absolute;  
		top: 1361px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-67 {
		position: absolute;  
		top: 1361px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-67 {
		position: absolute;  
		top: 1361px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-67 {
		position: absolute;  
		top: 1361px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-67 {
		position: absolute;  
		top: 1361px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-67 {
		position: absolute;  
		top: 1361px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-67 {
		position: absolute;  
		top: 1361px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-67 {
		position: absolute;  
		top: 1361px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-67 {
		position: absolute;  
		top: 1361px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-67 {
		position: absolute;  
		top: 1361px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-68 {
		position: absolute;  
		top: 1392px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-68 {
		position: absolute;  
		top: 1392px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-68 {
		position: absolute;  
		top: 1392px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-68 {
		position: absolute;  
		top: 1392px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-68 {
		position: absolute;  
		top: 1392px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-68 {
		position: absolute;  
		top: 1392px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-68 {
		position: absolute;  
		top: 1392px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-68 {
		position: absolute;  
		top: 1392px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-68 {
		position: absolute;  
		top: 1392px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-68 {
		position: absolute;  
		top: 1392px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-69 {
		position: absolute;  
		top: 1423px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-69 {
		position: absolute;  
		top: 1423px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-69 {
		position: absolute;  
		top: 1423px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-69 {
		position: absolute;  
		top: 1423px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-69 {
		position: absolute;  
		top: 1423px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-69 {
		position: absolute;  
		top: 1423px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-69 {
		position: absolute;  
		top: 1423px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-69 {
		position: absolute;  
		top: 1423px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-69 {
		position: absolute;  
		top: 1423px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-69 {
		position: absolute;  
		top: 1423px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-70 {
		position: absolute;  
		top: 1454px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-70 {
		position: absolute;  
		top: 1454px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-70 {
		position: absolute;  
		top: 1454px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-70 {
		position: absolute;  
		top: 1454px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-70 {
		position: absolute;  
		top: 1454px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-70 {
		position: absolute;  
		top: 1454px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-70 {
		position: absolute;  
		top: 1454px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-70 {
		position: absolute;  
		top: 1454px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-70 {
		position: absolute;  
		top: 1454px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-70 {
		position: absolute;  
		top: 1454px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-71 {
		position: absolute;  
		top: 1485px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-71 {
		position: absolute;  
		top: 1485px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-71 {
		position: absolute;  
		top: 1485px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-71 {
		position: absolute;  
		top: 1485px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-71 {
		position: absolute;  
		top: 1485px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-71 {
		position: absolute;  
		top: 1485px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-71 {
		position: absolute;  
		top: 1485px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-71 {
		position: absolute;  
		top: 1485px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-71 {
		position: absolute;  
		top: 1485px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-71 {
		position: absolute;  
		top: 1485px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-72 {
		position: absolute;  
		top: 1516px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-72 {
		position: absolute;  
		top: 1516px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-72 {
		position: absolute;  
		top: 1516px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-72 {
		position: absolute;  
		top: 1516px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-72 {
		position: absolute;  
		top: 1516px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-72 {
		position: absolute;  
		top: 1516px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-72 {
		position: absolute;  
		top: 1516px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-72 {
		position: absolute;  
		top: 1516px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-72 {
		position: absolute;  
		top: 1516px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-72 {
		position: absolute;  
		top: 1516px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-73 {
		position: absolute;  
		top: 1547px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-73 {
		position: absolute;  
		top: 1547px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-73 {
		position: absolute;  
		top: 1547px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-73 {
		position: absolute;  
		top: 1547px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-73 {
		position: absolute;  
		top: 1547px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-73 {
		position: absolute;  
		top: 1547px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-73 {
		position: absolute;  
		top: 1547px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-73 {
		position: absolute;  
		top: 1547px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-73 {
		position: absolute;  
		top: 1547px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-73 {
		position: absolute;  
		top: 1547px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-74 {
		position: absolute;  
		top: 1578px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-74 {
		position: absolute;  
		top: 1578px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-74 {
		position: absolute;  
		top: 1578px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-74 {
		position: absolute;  
		top: 1578px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-74 {
		position: absolute;  
		top: 1578px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-74 {
		position: absolute;  
		top: 1578px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-74 {
		position: absolute;  
		top: 1578px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-74 {
		position: absolute;  
		top: 1578px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-74 {
		position: absolute;  
		top: 1578px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-74 {
		position: absolute;  
		top: 1578px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-75 {
		position: absolute;  
		top: 1609px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-75 {
		position: absolute;  
		top: 1609px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-75 {
		position: absolute;  
		top: 1609px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-75 {
		position: absolute;  
		top: 1609px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-75 {
		position: absolute;  
		top: 1609px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-75 {
		position: absolute;  
		top: 1609px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-75 {
		position: absolute;  
		top: 1609px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-75 {
		position: absolute;  
		top: 1609px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-75 {
		position: absolute;  
		top: 1609px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-75 {
		position: absolute;  
		top: 1609px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-76 {
		position: absolute;  
		top: 1640px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-76 {
		position: absolute;  
		top: 1640px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-76 {
		position: absolute;  
		top: 1640px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-76 {
		position: absolute;  
		top: 1640px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-76 {
		position: absolute;  
		top: 1640px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-76 {
		position: absolute;  
		top: 1640px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-76 {
		position: absolute;  
		top: 1640px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-76 {
		position: absolute;  
		top: 1640px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-76 {
		position: absolute;  
		top: 1640px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-76 {
		position: absolute;  
		top: 1640px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-77 {
		position: absolute;  
		top: 1671px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-77 {
		position: absolute;  
		top: 1671px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-77 {
		position: absolute;  
		top: 1671px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-77 {
		position: absolute;  
		top: 1671px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-77 {
		position: absolute;  
		top: 1671px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-77 {
		position: absolute;  
		top: 1671px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-77 {
		position: absolute;  
		top: 1671px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-77 {
		position: absolute;  
		top: 1671px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-77 {
		position: absolute;  
		top: 1671px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-77 {
		position: absolute;  
		top: 1671px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-78 {
		position: absolute;  
		top: 1702px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-78 {
		position: absolute;  
		top: 1702px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-78 {
		position: absolute;  
		top: 1702px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-78 {
		position: absolute;  
		top: 1702px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-78 {
		position: absolute;  
		top: 1702px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-78 {
		position: absolute;  
		top: 1702px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-78 {
		position: absolute;  
		top: 1702px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-78 {
		position: absolute;  
		top: 1702px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-78 {
		position: absolute;  
		top: 1702px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-78 {
		position: absolute;  
		top: 1702px; 		
		left: 1516px; 
		width: 50px;	
	}


	#A-D-79 {
		position: absolute;  
		top: 1733px; 		
		left: 1017px; 
		width: 49px;	
	}
	#A-S-79 {
		position: absolute;  
		top: 1733px; 		
		left: 1068px; 
		width: 50px;	
	}
	#B-D-79 {
		position: absolute;  
		top: 1733px; 		
		left: 1129px; 
		width: 49px;	
	}
	#B-S-79 {
		position: absolute;  
		top: 1733px; 		
		left: 1180px; 
		width: 50px;	
	}
	#C-D-79 {
		position: absolute;  
		top: 1733px; 		
		left: 1241px; 
		width: 49px;	
	}
	#C-S-79 {
		position: absolute;  
		top: 1733px; 		
		left: 1292px; 
		width: 50px;	
	}
	#D-D-79 {
		position: absolute;  
		top: 1733px; 		
		left: 1353px; 
		width: 49px;	
	}
	#D-S-79 {
		position: absolute;  
		top: 1733px; 		
		left: 1404px; 
		width: 50px;	
	}
	#E-D-79 {
		position: absolute;  
		top: 1733px; 		
		left: 1465px; 
		width: 49px;	
	}
	#E-S-79 {
		position: absolute;  
		top: 1733px; 		
		left: 1516px; 
		width: 50px;	
	}
	canvas#signature1 {
		position: absolute; 
  		border: 2px solid black;		  
		left: 500px; 
		top: 1920px; 		
	}
	canvas#signature2 {
		position: absolute; 
  		border: 2px solid black;		  
		left: 500px; 
		top: 2110px; 		
	}
	.wrap {
    display: flex;
	justify-content: center;
	font-family: Verdana, Geneva, Tahoma, sans-serif;
}

	#next {
  font-weight: bold;
  margin: 10px;
  padding: 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
  color: white;
  font-family: Verdana, Geneva, Tahoma, sans-serif;
  background-color: #00538b;
}

#next:hover {
	background-color: #012a46;
}

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
	<input name="model" type="text" id="model" value="<?php if (isset($_POST["model"])) echo $_POST["model"]; else if (isset($_GET["model"])) echo $_GET["model"]; ?>" size="20" maxlength="60"> <!-- upravene -->
	

	<br>




<!-- zakladne info -->
<input name="truckno" type="text" id="truckno" value="<?php if (isset($_POST["truckno"])) echo $_POST["truckno"]; ?>" size="20" maxlength="60">
<input name="waybill" type="text" id="waybill" value="<?php if (isset($_POST["waybill"])) echo $_POST["waybill"]; ?>" size="20" maxlength="60">
<input name="remarks" type="text" id="remarks" value="<?php if (isset($_POST["remarks"])) echo $_POST["remarks"]; ?>" size="20" maxlength="60">
<input name="remarkss" type="text" id="remarkss" value="<?php if (isset($_POST["remarkss"])) echo $_POST["remarkss"]; ?>" size="20" maxlength="60">
<input name="vin" type="text" id="vin" value="<?php if (isset($_POST["vin"])) echo $_POST["vin"]; else if (isset($_GET["vin"])) echo $_GET["vin"]; ?>" size="15" maxlength="15">
	

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


<!-- tabulka napravo -->

<input name="area68" type="text" id="area68" value="<?php if (isset($_POST["area68"])) echo $_POST["area68"]; ?>" size="3" maxlength="3">
<input name="area69" type="text" id="area69" value="<?php if (isset($_POST["area69"])) echo $_POST["area69"]; ?>" size="3" maxlength="3">
<input name="area70" type="text" id="area70" value="<?php if (isset($_POST["area70"])) echo $_POST["area70"]; ?>" size="3" maxlength="3">
<input name="area71" type="text" id="area71" value="<?php if (isset($_POST["area71"])) echo $_POST["area71"]; ?>" size="3" maxlength="3">
<input name="area72" type="text" id="area72" value="<?php if (isset($_POST["area72"])) echo $_POST["area72"]; ?>" size="3" maxlength="3">
<input name="area73" type="text" id="area73" value="<?php if (isset($_POST["area73"])) echo $_POST["area73"]; ?>" size="3" maxlength="3">
<input name="area74" type="text" id="area74" value="<?php if (isset($_POST["area74"])) echo $_POST["area74"]; ?>" size="3" maxlength="3">
<input name="area75" type="text" id="area75" value="<?php if (isset($_POST["area75"])) echo $_POST["area75"]; ?>" size="3" maxlength="3">
<input name="area76" type="text" id="area76" value="<?php if (isset($_POST["area76"])) echo $_POST["area76"]; ?>" size="3" maxlength="3">
<input name="area77" type="text" id="area77" value="<?php if (isset($_POST["area77"])) echo $_POST["area77"]; ?>" size="3" maxlength="3">
<input name="area78" type="text" id="area78" value="<?php if (isset($_POST["area78"])) echo $_POST["area78"]; ?>" size="3" maxlength="3">
<input name="area79" type="text" id="area79" value="<?php if (isset($_POST["area79"])) echo $_POST["area79"]; ?>" size="3" maxlength="3">

<input name="A-D-03" type="text" id="A-D-03" value="<?php if (isset($_POST["A-D-03"])) echo $_POST["A-D-03"]; ?>" size="4" maxlength="4">
<input name="A-S-03" type="text" id="A-S-03" value="<?php if (isset($_POST["A-S-03"])) echo $_POST["A-S-03"]; ?>" size="4" maxlength="4">
<input name="B-D-03" type="text" id="B-D-03" value="<?php if (isset($_POST["B-D-03"])) echo $_POST["B-D-03"]; ?>" size="4" maxlength="4">
<input name="B-S-03" type="text" id="B-S-03" value="<?php if (isset($_POST["B-S-03"])) echo $_POST["B-S-03"]; ?>" size="4" maxlength="4">
<input name="C-D-03" type="text" id="C-D-03" value="<?php if (isset($_POST["C-D-03"])) echo $_POST["C-D-03"]; ?>" size="4" maxlength="4">
<input name="C-S-03" type="text" id="C-S-03" value="<?php if (isset($_POST["C-S-03"])) echo $_POST["C-S-03"]; ?>" size="4" maxlength="4">
<input name="D-D-03" type="text" id="D-D-03" value="<?php if (isset($_POST["D-D-03"])) echo $_POST["D-D-03"]; ?>" size="4" maxlength="4">
<input name="D-S-03" type="text" id="D-S-03" value="<?php if (isset($_POST["D-S-03"])) echo $_POST["D-S-03"]; ?>" size="4" maxlength="4">
<input name="E-D-03" type="text" id="E-D-03" value="<?php if (isset($_POST["E-D-03"])) echo $_POST["E-D-03"]; ?>" size="4" maxlength="4">
<input name="E-S-03" type="text" id="E-S-03" value="<?php if (isset($_POST["E-S-03"])) echo $_POST["E-S-03"]; ?>" size="4" maxlength="4">

<input name="A-D-04" type="text" id="A-D-04" value="<?php if (isset($_POST["A-D-04"])) echo $_POST["A-D-04"]; ?>" size="4" maxlength="4">
<input name="A-S-04" type="text" id="A-S-04" value="<?php if (isset($_POST["A-S-04"])) echo $_POST["A-S-04"]; ?>" size="4" maxlength="4">
<input name="B-D-04" type="text" id="B-D-04" value="<?php if (isset($_POST["B-D-04"])) echo $_POST["B-D-04"]; ?>" size="4" maxlength="4">
<input name="B-S-04" type="text" id="B-S-04" value="<?php if (isset($_POST["B-S-04"])) echo $_POST["B-S-04"]; ?>" size="4" maxlength="4">
<input name="C-D-04" type="text" id="C-D-04" value="<?php if (isset($_POST["C-D-04"])) echo $_POST["C-D-04"]; ?>" size="4" maxlength="4">
<input name="C-S-04" type="text" id="C-S-04" value="<?php if (isset($_POST["C-S-04"])) echo $_POST["C-S-04"]; ?>" size="4" maxlength="4">
<input name="D-D-04" type="text" id="D-D-04" value="<?php if (isset($_POST["D-D-04"])) echo $_POST["D-D-04"]; ?>" size="4" maxlength="4">
<input name="D-S-04" type="text" id="D-S-04" value="<?php if (isset($_POST["D-S-04"])) echo $_POST["D-S-04"]; ?>" size="4" maxlength="4">
<input name="E-D-04" type="text" id="E-D-04" value="<?php if (isset($_POST["E-D-04"])) echo $_POST["E-D-04"]; ?>" size="4" maxlength="4">
<input name="E-S-04" type="text" id="E-S-04" value="<?php if (isset($_POST["E-S-04"])) echo $_POST["E-S-04"]; ?>" size="4" maxlength="4">

<input name="A-D-10" type="text" id="A-D-10" value="<?php if (isset($_POST["A-D-10"])) echo $_POST["A-D-10"]; ?>" size="4" maxlength="4">
<input name="A-S-10" type="text" id="A-S-10" value="<?php if (isset($_POST["A-S-10"])) echo $_POST["A-S-10"]; ?>" size="4" maxlength="4">
<input name="B-D-10" type="text" id="B-D-10" value="<?php if (isset($_POST["B-D-10"])) echo $_POST["B-D-10"]; ?>" size="4" maxlength="4">
<input name="B-S-10" type="text" id="B-S-10" value="<?php if (isset($_POST["B-S-10"])) echo $_POST["B-S-10"]; ?>" size="4" maxlength="4">
<input name="C-D-10" type="text" id="C-D-10" value="<?php if (isset($_POST["C-D-10"])) echo $_POST["C-D-10"]; ?>" size="4" maxlength="4">
<input name="C-S-10" type="text" id="C-S-10" value="<?php if (isset($_POST["C-S-10"])) echo $_POST["C-S-10"]; ?>" size="4" maxlength="4">
<input name="D-D-10" type="text" id="D-D-10" value="<?php if (isset($_POST["D-D-10"])) echo $_POST["D-D-10"]; ?>" size="4" maxlength="4">
<input name="D-S-10" type="text" id="D-S-10" value="<?php if (isset($_POST["D-S-10"])) echo $_POST["D-S-10"]; ?>" size="4" maxlength="4">
<input name="E-D-10" type="text" id="E-D-10" value="<?php if (isset($_POST["E-D-10"])) echo $_POST["E-D-10"]; ?>" size="4" maxlength="4">
<input name="E-S-10" type="text" id="E-S-10" value="<?php if (isset($_POST["E-S-10"])) echo $_POST["E-S-10"]; ?>" size="4" maxlength="4">

<input name="A-D-11" type="text" id="A-D-11" value="<?php if (isset($_POST["A-D-11"])) echo $_POST["A-D-11"]; ?>" size="4" maxlength="4">
<input name="A-S-11" type="text" id="A-S-11" value="<?php if (isset($_POST["A-S-11"])) echo $_POST["A-S-11"]; ?>" size="4" maxlength="4">
<input name="B-D-11" type="text" id="B-D-11" value="<?php if (isset($_POST["B-D-11"])) echo $_POST["B-D-11"]; ?>" size="4" maxlength="4">
<input name="B-S-11" type="text" id="B-S-11" value="<?php if (isset($_POST["B-S-11"])) echo $_POST["B-S-11"]; ?>" size="4" maxlength="4">
<input name="C-D-11" type="text" id="C-D-11" value="<?php if (isset($_POST["C-D-11"])) echo $_POST["C-D-11"]; ?>" size="4" maxlength="4">
<input name="C-S-11" type="text" id="C-S-11" value="<?php if (isset($_POST["C-S-11"])) echo $_POST["C-S-11"]; ?>" size="4" maxlength="4">
<input name="D-D-11" type="text" id="D-D-11" value="<?php if (isset($_POST["D-D-11"])) echo $_POST["D-D-11"]; ?>" size="4" maxlength="4">
<input name="D-S-11" type="text" id="D-S-11" value="<?php if (isset($_POST["D-S-11"])) echo $_POST["D-S-11"]; ?>" size="4" maxlength="4">
<input name="E-D-11" type="text" id="E-D-11" value="<?php if (isset($_POST["E-D-11"])) echo $_POST["E-D-11"]; ?>" size="4" maxlength="4">
<input name="E-S-11" type="text" id="E-S-11" value="<?php if (isset($_POST["E-S-11"])) echo $_POST["E-S-11"]; ?>" size="4" maxlength="4">

<input name="A-D-12" type="text" id="A-D-12" value="<?php if (isset($_POST["A-D-12"])) echo $_POST["A-D-12"]; ?>" size="4" maxlength="4">
<input name="A-S-12" type="text" id="A-S-12" value="<?php if (isset($_POST["A-S-12"])) echo $_POST["A-S-12"]; ?>" size="4" maxlength="4">
<input name="B-D-12" type="text" id="B-D-12" value="<?php if (isset($_POST["B-D-12"])) echo $_POST["B-D-12"]; ?>" size="4" maxlength="4">
<input name="B-S-12" type="text" id="B-S-12" value="<?php if (isset($_POST["B-S-12"])) echo $_POST["B-S-12"]; ?>" size="4" maxlength="4">
<input name="C-D-12" type="text" id="C-D-12" value="<?php if (isset($_POST["C-D-12"])) echo $_POST["C-D-12"]; ?>" size="4" maxlength="4">
<input name="C-S-12" type="text" id="C-S-12" value="<?php if (isset($_POST["C-S-12"])) echo $_POST["C-S-12"]; ?>" size="4" maxlength="4">
<input name="D-D-12" type="text" id="D-D-12" value="<?php if (isset($_POST["D-D-12"])) echo $_POST["D-D-12"]; ?>" size="4" maxlength="4">
<input name="D-S-12" type="text" id="D-S-12" value="<?php if (isset($_POST["D-S-12"])) echo $_POST["D-S-12"]; ?>" size="4" maxlength="4">
<input name="E-D-12" type="text" id="E-D-12" value="<?php if (isset($_POST["E-D-12"])) echo $_POST["E-D-12"]; ?>" size="4" maxlength="4">
<input name="E-S-12" type="text" id="E-S-12" value="<?php if (isset($_POST["E-S-12"])) echo $_POST["E-S-12"]; ?>" size="4" maxlength="4">

<input name="A-D-13" type="text" id="A-D-13" value="<?php if (isset($_POST["A-D-13"])) echo $_POST["A-D-13"]; ?>" size="4" maxlength="4">
<input name="A-S-13" type="text" id="A-S-13" value="<?php if (isset($_POST["A-S-13"])) echo $_POST["A-S-13"]; ?>" size="4" maxlength="4">
<input name="B-D-13" type="text" id="B-D-13" value="<?php if (isset($_POST["B-D-13"])) echo $_POST["B-D-13"]; ?>" size="4" maxlength="4">
<input name="B-S-13" type="text" id="B-S-13" value="<?php if (isset($_POST["B-S-13"])) echo $_POST["B-S-13"]; ?>" size="4" maxlength="4">
<input name="C-D-13" type="text" id="C-D-13" value="<?php if (isset($_POST["C-D-13"])) echo $_POST["C-D-13"]; ?>" size="4" maxlength="4">
<input name="C-S-13" type="text" id="C-S-13" value="<?php if (isset($_POST["C-S-13"])) echo $_POST["C-S-13"]; ?>" size="4" maxlength="4">
<input name="D-D-13" type="text" id="D-D-13" value="<?php if (isset($_POST["D-D-13"])) echo $_POST["D-D-13"]; ?>" size="4" maxlength="4">
<input name="D-S-13" type="text" id="D-S-13" value="<?php if (isset($_POST["D-S-13"])) echo $_POST["D-S-13"]; ?>" size="4" maxlength="4">
<input name="E-D-13" type="text" id="E-D-13" value="<?php if (isset($_POST["E-D-13"])) echo $_POST["E-D-13"]; ?>" size="4" maxlength="4">
<input name="E-S-13" type="text" id="E-S-13" value="<?php if (isset($_POST["E-S-13"])) echo $_POST["E-S-13"]; ?>" size="4" maxlength="4">

<input name="A-D-14" type="text" id="A-D-14" value="<?php if (isset($_POST["A-D-14"])) echo $_POST["A-D-14"]; ?>" size="4" maxlength="4">
<input name="A-S-14" type="text" id="A-S-14" value="<?php if (isset($_POST["A-S-14"])) echo $_POST["A-S-14"]; ?>" size="4" maxlength="4">
<input name="B-D-14" type="text" id="B-D-14" value="<?php if (isset($_POST["B-D-14"])) echo $_POST["B-D-14"]; ?>" size="4" maxlength="4">
<input name="B-S-14" type="text" id="B-S-14" value="<?php if (isset($_POST["B-S-14"])) echo $_POST["B-S-14"]; ?>" size="4" maxlength="4">
<input name="C-D-14" type="text" id="C-D-14" value="<?php if (isset($_POST["C-D-14"])) echo $_POST["C-D-14"]; ?>" size="4" maxlength="4">
<input name="C-S-14" type="text" id="C-S-14" value="<?php if (isset($_POST["C-S-14"])) echo $_POST["C-S-14"]; ?>" size="4" maxlength="4">
<input name="D-D-14" type="text" id="D-D-14" value="<?php if (isset($_POST["D-D-14"])) echo $_POST["D-D-14"]; ?>" size="4" maxlength="4">
<input name="D-S-14" type="text" id="D-S-14" value="<?php if (isset($_POST["D-S-14"])) echo $_POST["D-S-14"]; ?>" size="4" maxlength="4">
<input name="E-D-14" type="text" id="E-D-14" value="<?php if (isset($_POST["E-D-14"])) echo $_POST["E-D-14"]; ?>" size="4" maxlength="4">
<input name="E-S-14" type="text" id="E-S-14" value="<?php if (isset($_POST["E-S-14"])) echo $_POST["E-S-14"]; ?>" size="4" maxlength="4">

<input name="A-D-15" type="text" id="A-D-15" value="<?php if (isset($_POST["A-D-15"])) echo $_POST["A-D-15"]; ?>" size="4" maxlength="4">
<input name="A-S-15" type="text" id="A-S-15" value="<?php if (isset($_POST["A-S-15"])) echo $_POST["A-S-15"]; ?>" size="4" maxlength="4">
<input name="B-D-15" type="text" id="B-D-15" value="<?php if (isset($_POST["B-D-15"])) echo $_POST["B-D-15"]; ?>" size="4" maxlength="4">
<input name="B-S-15" type="text" id="B-S-15" value="<?php if (isset($_POST["B-S-15"])) echo $_POST["B-S-15"]; ?>" size="4" maxlength="4">
<input name="C-D-15" type="text" id="C-D-15" value="<?php if (isset($_POST["C-D-15"])) echo $_POST["C-D-15"]; ?>" size="4" maxlength="4">
<input name="C-S-15" type="text" id="C-S-15" value="<?php if (isset($_POST["C-S-15"])) echo $_POST["C-S-15"]; ?>" size="4" maxlength="4">
<input name="D-D-15" type="text" id="D-D-15" value="<?php if (isset($_POST["D-D-15"])) echo $_POST["D-D-15"]; ?>" size="4" maxlength="4">
<input name="D-S-15" type="text" id="D-S-15" value="<?php if (isset($_POST["D-S-15"])) echo $_POST["D-S-15"]; ?>" size="4" maxlength="4">
<input name="E-D-15" type="text" id="E-D-15" value="<?php if (isset($_POST["E-D-15"])) echo $_POST["E-D-15"]; ?>" size="4" maxlength="4">
<input name="E-S-15" type="text" id="E-S-15" value="<?php if (isset($_POST["E-S-15"])) echo $_POST["E-S-15"]; ?>" size="4" maxlength="4">

<input name="A-D-16" type="text" id="A-D-16" value="<?php if (isset($_POST["A-D-16"])) echo $_POST["A-D-16"]; ?>" size="4" maxlength="4">
<input name="A-S-16" type="text" id="A-S-16" value="<?php if (isset($_POST["A-S-16"])) echo $_POST["A-S-16"]; ?>" size="4" maxlength="4">
<input name="B-D-16" type="text" id="B-D-16" value="<?php if (isset($_POST["B-D-16"])) echo $_POST["B-D-16"]; ?>" size="4" maxlength="4">
<input name="B-S-16" type="text" id="B-S-16" value="<?php if (isset($_POST["B-S-16"])) echo $_POST["B-S-16"]; ?>" size="4" maxlength="4">
<input name="C-D-16" type="text" id="C-D-16" value="<?php if (isset($_POST["C-D-16"])) echo $_POST["C-D-16"]; ?>" size="4" maxlength="4">
<input name="C-S-16" type="text" id="C-S-16" value="<?php if (isset($_POST["C-S-16"])) echo $_POST["C-S-16"]; ?>" size="4" maxlength="4">
<input name="D-D-16" type="text" id="D-D-16" value="<?php if (isset($_POST["D-D-16"])) echo $_POST["D-D-16"]; ?>" size="4" maxlength="4">
<input name="D-S-16" type="text" id="D-S-16" value="<?php if (isset($_POST["D-S-16"])) echo $_POST["D-S-16"]; ?>" size="4" maxlength="4">
<input name="E-D-16" type="text" id="E-D-16" value="<?php if (isset($_POST["E-D-16"])) echo $_POST["E-D-16"]; ?>" size="4" maxlength="4">
<input name="E-S-16" type="text" id="E-S-16" value="<?php if (isset($_POST["E-S-16"])) echo $_POST["E-S-16"]; ?>" size="4" maxlength="4">

<input name="A-D-17" type="text" id="A-D-17" value="<?php if (isset($_POST["A-D-17"])) echo $_POST["A-D-17"]; ?>" size="4" maxlength="4">
<input name="A-S-17" type="text" id="A-S-17" value="<?php if (isset($_POST["A-S-17"])) echo $_POST["A-S-17"]; ?>" size="4" maxlength="4">
<input name="B-D-17" type="text" id="B-D-17" value="<?php if (isset($_POST["B-D-17"])) echo $_POST["B-D-17"]; ?>" size="4" maxlength="4">
<input name="B-S-17" type="text" id="B-S-17" value="<?php if (isset($_POST["B-S-17"])) echo $_POST["B-S-17"]; ?>" size="4" maxlength="4">
<input name="C-D-17" type="text" id="C-D-17" value="<?php if (isset($_POST["C-D-17"])) echo $_POST["C-D-17"]; ?>" size="4" maxlength="4">
<input name="C-S-17" type="text" id="C-S-17" value="<?php if (isset($_POST["C-S-17"])) echo $_POST["C-S-17"]; ?>" size="4" maxlength="4">
<input name="D-D-17" type="text" id="D-D-17" value="<?php if (isset($_POST["D-D-17"])) echo $_POST["D-D-17"]; ?>" size="4" maxlength="4">
<input name="D-S-17" type="text" id="D-S-17" value="<?php if (isset($_POST["D-S-17"])) echo $_POST["D-S-17"]; ?>" size="4" maxlength="4">
<input name="E-D-17" type="text" id="E-D-17" value="<?php if (isset($_POST["E-D-17"])) echo $_POST["E-D-17"]; ?>" size="4" maxlength="4">
<input name="E-S-17" type="text" id="E-S-17" value="<?php if (isset($_POST["E-S-17"])) echo $_POST["E-S-17"]; ?>" size="4" maxlength="4">

<input name="A-D-20" type="text" id="A-D-20" value="<?php if (isset($_POST["A-D-20"])) echo $_POST["A-D-20"]; ?>" size="4" maxlength="4">
<input name="A-S-20" type="text" id="A-S-20" value="<?php if (isset($_POST["A-S-20"])) echo $_POST["A-S-20"]; ?>" size="4" maxlength="4">
<input name="B-D-20" type="text" id="B-D-20" value="<?php if (isset($_POST["B-D-20"])) echo $_POST["B-D-20"]; ?>" size="4" maxlength="4">
<input name="B-S-20" type="text" id="B-S-20" value="<?php if (isset($_POST["B-S-20"])) echo $_POST["B-S-20"]; ?>" size="4" maxlength="4">
<input name="C-D-20" type="text" id="C-D-20" value="<?php if (isset($_POST["C-D-20"])) echo $_POST["C-D-20"]; ?>" size="4" maxlength="4">
<input name="C-S-20" type="text" id="C-S-20" value="<?php if (isset($_POST["C-S-20"])) echo $_POST["C-S-20"]; ?>" size="4" maxlength="4">
<input name="D-D-20" type="text" id="D-D-20" value="<?php if (isset($_POST["D-D-20"])) echo $_POST["D-D-20"]; ?>" size="4" maxlength="4">
<input name="D-S-20" type="text" id="D-S-20" value="<?php if (isset($_POST["D-S-20"])) echo $_POST["D-S-20"]; ?>" size="4" maxlength="4">
<input name="E-D-20" type="text" id="E-D-20" value="<?php if (isset($_POST["E-D-20"])) echo $_POST["E-D-20"]; ?>" size="4" maxlength="4">
<input name="E-S-20" type="text" id="E-S-20" value="<?php if (isset($_POST["E-S-20"])) echo $_POST["E-S-20"]; ?>" size="4" maxlength="4">

<input name="A-D-21" type="text" id="A-D-21" value="<?php if (isset($_POST["A-D-21"])) echo $_POST["A-D-21"]; ?>" size="4" maxlength="4">
<input name="A-S-21" type="text" id="A-S-21" value="<?php if (isset($_POST["A-S-21"])) echo $_POST["A-S-21"]; ?>" size="4" maxlength="4">
<input name="B-D-21" type="text" id="B-D-21" value="<?php if (isset($_POST["B-D-21"])) echo $_POST["B-D-21"]; ?>" size="4" maxlength="4">
<input name="B-S-21" type="text" id="B-S-21" value="<?php if (isset($_POST["B-S-21"])) echo $_POST["B-S-21"]; ?>" size="4" maxlength="4">
<input name="C-D-21" type="text" id="C-D-21" value="<?php if (isset($_POST["C-D-21"])) echo $_POST["C-D-21"]; ?>" size="4" maxlength="4">
<input name="C-S-21" type="text" id="C-S-21" value="<?php if (isset($_POST["C-S-21"])) echo $_POST["C-S-21"]; ?>" size="4" maxlength="4">
<input name="D-D-21" type="text" id="D-D-21" value="<?php if (isset($_POST["D-D-21"])) echo $_POST["D-D-21"]; ?>" size="4" maxlength="4">
<input name="D-S-21" type="text" id="D-S-21" value="<?php if (isset($_POST["D-S-21"])) echo $_POST["D-S-21"]; ?>" size="4" maxlength="4">
<input name="E-D-21" type="text" id="E-D-21" value="<?php if (isset($_POST["E-D-21"])) echo $_POST["E-D-21"]; ?>" size="4" maxlength="4">
<input name="E-S-21" type="text" id="E-S-21" value="<?php if (isset($_POST["E-S-21"])) echo $_POST["E-S-21"]; ?>" size="4" maxlength="4">

<input name="A-D-22" type="text" id="A-D-22" value="<?php if (isset($_POST["A-D-22"])) echo $_POST["A-D-22"]; ?>" size="4" maxlength="4">
<input name="A-S-22" type="text" id="A-S-22" value="<?php if (isset($_POST["A-S-22"])) echo $_POST["A-S-22"]; ?>" size="4" maxlength="4">
<input name="B-D-22" type="text" id="B-D-22" value="<?php if (isset($_POST["B-D-22"])) echo $_POST["B-D-22"]; ?>" size="4" maxlength="4">
<input name="B-S-22" type="text" id="B-S-22" value="<?php if (isset($_POST["B-S-22"])) echo $_POST["B-S-22"]; ?>" size="4" maxlength="4">
<input name="C-D-22" type="text" id="C-D-22" value="<?php if (isset($_POST["C-D-22"])) echo $_POST["C-D-22"]; ?>" size="4" maxlength="4">
<input name="C-S-22" type="text" id="C-S-22" value="<?php if (isset($_POST["C-S-22"])) echo $_POST["C-S-22"]; ?>" size="4" maxlength="4">
<input name="D-D-22" type="text" id="D-D-22" value="<?php if (isset($_POST["D-D-22"])) echo $_POST["D-D-22"]; ?>" size="4" maxlength="4">
<input name="D-S-22" type="text" id="D-S-22" value="<?php if (isset($_POST["D-S-22"])) echo $_POST["D-S-22"]; ?>" size="4" maxlength="4">
<input name="E-D-22" type="text" id="E-D-22" value="<?php if (isset($_POST["E-D-22"])) echo $_POST["E-D-22"]; ?>" size="4" maxlength="4">
<input name="E-S-22" type="text" id="E-S-22" value="<?php if (isset($_POST["E-S-22"])) echo $_POST["E-S-22"]; ?>" size="4" maxlength="4">

<input name="A-D-24" type="text" id="A-D-24" value="<?php if (isset($_POST["A-D-24"])) echo $_POST["A-D-24"]; ?>" size="4" maxlength="4">
<input name="A-S-24" type="text" id="A-S-24" value="<?php if (isset($_POST["A-S-24"])) echo $_POST["A-S-24"]; ?>" size="4" maxlength="4">
<input name="B-D-24" type="text" id="B-D-24" value="<?php if (isset($_POST["B-D-24"])) echo $_POST["B-D-24"]; ?>" size="4" maxlength="4">
<input name="B-S-24" type="text" id="B-S-24" value="<?php if (isset($_POST["B-S-24"])) echo $_POST["B-S-24"]; ?>" size="4" maxlength="4">
<input name="C-D-24" type="text" id="C-D-24" value="<?php if (isset($_POST["C-D-24"])) echo $_POST["C-D-24"]; ?>" size="4" maxlength="4">
<input name="C-S-24" type="text" id="C-S-24" value="<?php if (isset($_POST["C-S-24"])) echo $_POST["C-S-24"]; ?>" size="4" maxlength="4">
<input name="D-D-24" type="text" id="D-D-24" value="<?php if (isset($_POST["D-D-24"])) echo $_POST["D-D-24"]; ?>" size="4" maxlength="4">
<input name="D-S-24" type="text" id="D-S-24" value="<?php if (isset($_POST["D-S-24"])) echo $_POST["D-S-24"]; ?>" size="4" maxlength="4">
<input name="E-D-24" type="text" id="E-D-24" value="<?php if (isset($_POST["E-D-24"])) echo $_POST["E-D-24"]; ?>" size="4" maxlength="4">
<input name="E-S-24" type="text" id="E-S-24" value="<?php if (isset($_POST["E-S-24"])) echo $_POST["E-S-24"]; ?>" size="4" maxlength="4">

<input name="A-D-25" type="text" id="A-D-25" value="<?php if (isset($_POST["A-D-25"])) echo $_POST["A-D-25"]; ?>" size="4" maxlength="4">
<input name="A-S-25" type="text" id="A-S-25" value="<?php if (isset($_POST["A-S-25"])) echo $_POST["A-S-25"]; ?>" size="4" maxlength="4">
<input name="B-D-25" type="text" id="B-D-25" value="<?php if (isset($_POST["B-D-25"])) echo $_POST["B-D-25"]; ?>" size="4" maxlength="4">
<input name="B-S-25" type="text" id="B-S-25" value="<?php if (isset($_POST["B-S-25"])) echo $_POST["B-S-25"]; ?>" size="4" maxlength="4">
<input name="C-D-25" type="text" id="C-D-25" value="<?php if (isset($_POST["C-D-25"])) echo $_POST["C-D-25"]; ?>" size="4" maxlength="4">
<input name="C-S-25" type="text" id="C-S-25" value="<?php if (isset($_POST["C-S-25"])) echo $_POST["C-S-25"]; ?>" size="4" maxlength="4">
<input name="D-D-25" type="text" id="D-D-25" value="<?php if (isset($_POST["D-D-25"])) echo $_POST["D-D-25"]; ?>" size="4" maxlength="4">
<input name="D-S-25" type="text" id="D-S-25" value="<?php if (isset($_POST["D-S-25"])) echo $_POST["D-S-25"]; ?>" size="4" maxlength="4">
<input name="E-D-25" type="text" id="E-D-25" value="<?php if (isset($_POST["E-D-25"])) echo $_POST["E-D-25"]; ?>" size="4" maxlength="4">
<input name="E-S-25" type="text" id="E-S-25" value="<?php if (isset($_POST["E-S-25"])) echo $_POST["E-S-25"]; ?>" size="4" maxlength="4">

<input name="A-D-27" type="text" id="A-D-27" value="<?php if (isset($_POST["A-D-27"])) echo $_POST["A-D-27"]; ?>" size="4" maxlength="4">
<input name="A-S-27" type="text" id="A-S-27" value="<?php if (isset($_POST["A-S-27"])) echo $_POST["A-S-27"]; ?>" size="4" maxlength="4">
<input name="B-D-27" type="text" id="B-D-27" value="<?php if (isset($_POST["B-D-27"])) echo $_POST["B-D-27"]; ?>" size="4" maxlength="4">
<input name="B-S-27" type="text" id="B-S-27" value="<?php if (isset($_POST["B-S-27"])) echo $_POST["B-S-27"]; ?>" size="4" maxlength="4">
<input name="C-D-27" type="text" id="C-D-27" value="<?php if (isset($_POST["C-D-27"])) echo $_POST["C-D-27"]; ?>" size="4" maxlength="4">
<input name="C-S-27" type="text" id="C-S-27" value="<?php if (isset($_POST["C-S-27"])) echo $_POST["C-S-27"]; ?>" size="4" maxlength="4">
<input name="D-D-27" type="text" id="D-D-27" value="<?php if (isset($_POST["D-D-27"])) echo $_POST["D-D-27"]; ?>" size="4" maxlength="4">
<input name="D-S-27" type="text" id="D-S-27" value="<?php if (isset($_POST["D-S-27"])) echo $_POST["D-S-27"]; ?>" size="4" maxlength="4">
<input name="E-D-27" type="text" id="E-D-27" value="<?php if (isset($_POST["E-D-27"])) echo $_POST["E-D-27"]; ?>" size="4" maxlength="4">
<input name="E-S-27" type="text" id="E-S-27" value="<?php if (isset($_POST["E-S-27"])) echo $_POST["E-S-27"]; ?>" size="4" maxlength="4">

<input name="A-D-28" type="text" id="A-D-28" value="<?php if (isset($_POST["A-D-28"])) echo $_POST["A-D-28"]; ?>" size="4" maxlength="4">
<input name="A-S-28" type="text" id="A-S-28" value="<?php if (isset($_POST["A-S-28"])) echo $_POST["A-S-28"]; ?>" size="4" maxlength="4">
<input name="B-D-28" type="text" id="B-D-28" value="<?php if (isset($_POST["B-D-28"])) echo $_POST["B-D-28"]; ?>" size="4" maxlength="4">
<input name="B-S-28" type="text" id="B-S-28" value="<?php if (isset($_POST["B-S-28"])) echo $_POST["B-S-28"]; ?>" size="4" maxlength="4">
<input name="C-D-28" type="text" id="C-D-28" value="<?php if (isset($_POST["C-D-28"])) echo $_POST["C-D-28"]; ?>" size="4" maxlength="4">
<input name="C-S-28" type="text" id="C-S-28" value="<?php if (isset($_POST["C-S-28"])) echo $_POST["C-S-28"]; ?>" size="4" maxlength="4">
<input name="D-D-28" type="text" id="D-D-28" value="<?php if (isset($_POST["D-D-28"])) echo $_POST["D-D-28"]; ?>" size="4" maxlength="4">
<input name="D-S-28" type="text" id="D-S-28" value="<?php if (isset($_POST["D-S-28"])) echo $_POST["D-S-28"]; ?>" size="4" maxlength="4">
<input name="E-D-28" type="text" id="E-D-28" value="<?php if (isset($_POST["E-D-28"])) echo $_POST["E-D-28"]; ?>" size="4" maxlength="4">
<input name="E-S-28" type="text" id="E-S-28" value="<?php if (isset($_POST["E-S-28"])) echo $_POST["E-S-28"]; ?>" size="4" maxlength="4">

<input name="A-D-30" type="text" id="A-D-30" value="<?php if (isset($_POST["A-D-30"])) echo $_POST["A-D-30"]; ?>" size="4" maxlength="4">
<input name="A-S-30" type="text" id="A-S-30" value="<?php if (isset($_POST["A-S-30"])) echo $_POST["A-S-30"]; ?>" size="4" maxlength="4">
<input name="B-D-30" type="text" id="B-D-30" value="<?php if (isset($_POST["B-D-30"])) echo $_POST["B-D-30"]; ?>" size="4" maxlength="4">
<input name="B-S-30" type="text" id="B-S-30" value="<?php if (isset($_POST["B-S-30"])) echo $_POST["B-S-30"]; ?>" size="4" maxlength="4">
<input name="C-D-30" type="text" id="C-D-30" value="<?php if (isset($_POST["C-D-30"])) echo $_POST["C-D-30"]; ?>" size="4" maxlength="4">
<input name="C-S-30" type="text" id="C-S-30" value="<?php if (isset($_POST["C-S-30"])) echo $_POST["C-S-30"]; ?>" size="4" maxlength="4">
<input name="D-D-30" type="text" id="D-D-30" value="<?php if (isset($_POST["D-D-30"])) echo $_POST["D-D-30"]; ?>" size="4" maxlength="4">
<input name="D-S-30" type="text" id="D-S-30" value="<?php if (isset($_POST["D-S-30"])) echo $_POST["D-S-30"]; ?>" size="4" maxlength="4">
<input name="E-D-30" type="text" id="E-D-30" value="<?php if (isset($_POST["E-D-30"])) echo $_POST["E-D-30"]; ?>" size="4" maxlength="4">
<input name="E-S-30" type="text" id="E-S-30" value="<?php if (isset($_POST["E-S-30"])) echo $_POST["E-S-30"]; ?>" size="4" maxlength="4">

<input name="A-D-31" type="text" id="A-D-31" value="<?php if (isset($_POST["A-D-31"])) echo $_POST["A-D-31"]; ?>" size="4" maxlength="4">
<input name="A-S-31" type="text" id="A-S-31" value="<?php if (isset($_POST["A-S-31"])) echo $_POST["A-S-31"]; ?>" size="4" maxlength="4">
<input name="B-D-31" type="text" id="B-D-31" value="<?php if (isset($_POST["B-D-31"])) echo $_POST["B-D-31"]; ?>" size="4" maxlength="4">
<input name="B-S-31" type="text" id="B-S-31" value="<?php if (isset($_POST["B-S-31"])) echo $_POST["B-S-31"]; ?>" size="4" maxlength="4">
<input name="C-D-31" type="text" id="C-D-31" value="<?php if (isset($_POST["C-D-31"])) echo $_POST["C-D-31"]; ?>" size="4" maxlength="4">
<input name="C-S-31" type="text" id="C-S-31" value="<?php if (isset($_POST["C-S-31"])) echo $_POST["C-S-31"]; ?>" size="4" maxlength="4">
<input name="D-D-31" type="text" id="D-D-31" value="<?php if (isset($_POST["D-D-31"])) echo $_POST["D-D-31"]; ?>" size="4" maxlength="4">
<input name="D-S-31" type="text" id="D-S-31" value="<?php if (isset($_POST["D-S-31"])) echo $_POST["D-S-31"]; ?>" size="4" maxlength="4">
<input name="E-D-31" type="text" id="E-D-31" value="<?php if (isset($_POST["E-D-31"])) echo $_POST["E-D-31"]; ?>" size="4" maxlength="4">
<input name="E-S-31" type="text" id="E-S-31" value="<?php if (isset($_POST["E-S-31"])) echo $_POST["E-S-31"]; ?>" size="4" maxlength="4">

<input name="A-D-33" type="text" id="A-D-33" value="<?php if (isset($_POST["A-D-33"])) echo $_POST["A-D-33"]; ?>" size="4" maxlength="4">
<input name="A-S-33" type="text" id="A-S-33" value="<?php if (isset($_POST["A-S-33"])) echo $_POST["A-S-33"]; ?>" size="4" maxlength="4">
<input name="B-D-33" type="text" id="B-D-33" value="<?php if (isset($_POST["B-D-33"])) echo $_POST["B-D-33"]; ?>" size="4" maxlength="4">
<input name="B-S-33" type="text" id="B-S-33" value="<?php if (isset($_POST["B-S-33"])) echo $_POST["B-S-33"]; ?>" size="4" maxlength="4">
<input name="C-D-33" type="text" id="C-D-33" value="<?php if (isset($_POST["C-D-33"])) echo $_POST["C-D-33"]; ?>" size="4" maxlength="4">
<input name="C-S-33" type="text" id="C-S-33" value="<?php if (isset($_POST["C-S-33"])) echo $_POST["C-S-33"]; ?>" size="4" maxlength="4">
<input name="D-D-33" type="text" id="D-D-33" value="<?php if (isset($_POST["D-D-33"])) echo $_POST["D-D-33"]; ?>" size="4" maxlength="4">
<input name="D-S-33" type="text" id="D-S-33" value="<?php if (isset($_POST["D-S-33"])) echo $_POST["D-S-33"]; ?>" size="4" maxlength="4">
<input name="E-D-33" type="text" id="E-D-33" value="<?php if (isset($_POST["E-D-33"])) echo $_POST["E-D-33"]; ?>" size="4" maxlength="4">
<input name="E-S-33" type="text" id="E-S-33" value="<?php if (isset($_POST["E-S-33"])) echo $_POST["E-S-33"]; ?>" size="4" maxlength="4">

<input name="A-D-34" type="text" id="A-D-34" value="<?php if (isset($_POST["A-D-34"])) echo $_POST["A-D-34"]; ?>" size="4" maxlength="4">
<input name="A-S-34" type="text" id="A-S-34" value="<?php if (isset($_POST["A-S-34"])) echo $_POST["A-S-34"]; ?>" size="4" maxlength="4">
<input name="B-D-34" type="text" id="B-D-34" value="<?php if (isset($_POST["B-D-34"])) echo $_POST["B-D-34"]; ?>" size="4" maxlength="4">
<input name="B-S-34" type="text" id="B-S-34" value="<?php if (isset($_POST["B-S-34"])) echo $_POST["B-S-34"]; ?>" size="4" maxlength="4">
<input name="C-D-34" type="text" id="C-D-34" value="<?php if (isset($_POST["C-D-34"])) echo $_POST["C-D-34"]; ?>" size="4" maxlength="4">
<input name="C-S-34" type="text" id="C-S-34" value="<?php if (isset($_POST["C-S-34"])) echo $_POST["C-S-34"]; ?>" size="4" maxlength="4">
<input name="D-D-34" type="text" id="D-D-34" value="<?php if (isset($_POST["D-D-34"])) echo $_POST["D-D-34"]; ?>" size="4" maxlength="4">
<input name="D-S-34" type="text" id="D-S-34" value="<?php if (isset($_POST["D-S-34"])) echo $_POST["D-S-34"]; ?>" size="4" maxlength="4">
<input name="E-D-34" type="text" id="E-D-34" value="<?php if (isset($_POST["E-D-34"])) echo $_POST["E-D-34"]; ?>" size="4" maxlength="4">
<input name="E-S-34" type="text" id="E-S-34" value="<?php if (isset($_POST["E-S-34"])) echo $_POST["E-S-34"]; ?>" size="4" maxlength="4">

<input name="A-D-35" type="text" id="A-D-35" value="<?php if (isset($_POST["A-D-35"])) echo $_POST["A-D-35"]; ?>" size="4" maxlength="4">
<input name="A-S-35" type="text" id="A-S-35" value="<?php if (isset($_POST["A-S-35"])) echo $_POST["A-S-35"]; ?>" size="4" maxlength="4">
<input name="B-D-35" type="text" id="B-D-35" value="<?php if (isset($_POST["B-D-35"])) echo $_POST["B-D-35"]; ?>" size="4" maxlength="4">
<input name="B-S-35" type="text" id="B-S-35" value="<?php if (isset($_POST["B-S-35"])) echo $_POST["B-S-35"]; ?>" size="4" maxlength="4">
<input name="C-D-35" type="text" id="C-D-35" value="<?php if (isset($_POST["C-D-35"])) echo $_POST["C-D-35"]; ?>" size="4" maxlength="4">
<input name="C-S-35" type="text" id="C-S-35" value="<?php if (isset($_POST["C-S-35"])) echo $_POST["C-S-3ť"]; ?>" size="4" maxlength="4">
<input name="D-D-35" type="text" id="D-D-35" value="<?php if (isset($_POST["D-D-35"])) echo $_POST["D-D-35"]; ?>" size="4" maxlength="4">
<input name="D-S-35" type="text" id="D-S-35" value="<?php if (isset($_POST["D-S-35"])) echo $_POST["D-S-35"]; ?>" size="4" maxlength="4">
<input name="E-D-35" type="text" id="E-D-35" value="<?php if (isset($_POST["E-D-35"])) echo $_POST["E-D-35"]; ?>" size="4" maxlength="4">
<input name="E-S-35" type="text" id="E-S-35" value="<?php if (isset($_POST["E-S-35"])) echo $_POST["E-S-35"]; ?>" size="4" maxlength="4">

<input name="A-D-36" type="text" id="A-D-36" value="<?php if (isset($_POST["A-D-36"])) echo $_POST["A-D-36"]; ?>" size="4" maxlength="4">
<input name="A-S-36" type="text" id="A-S-36" value="<?php if (isset($_POST["A-S-36"])) echo $_POST["A-S-36"]; ?>" size="4" maxlength="4">
<input name="B-D-36" type="text" id="B-D-36" value="<?php if (isset($_POST["B-D-36"])) echo $_POST["B-D-36"]; ?>" size="4" maxlength="4">
<input name="B-S-36" type="text" id="B-S-36" value="<?php if (isset($_POST["B-S-36"])) echo $_POST["B-S-36"]; ?>" size="4" maxlength="4">
<input name="C-D-36" type="text" id="C-D-36" value="<?php if (isset($_POST["C-D-36"])) echo $_POST["C-D-36"]; ?>" size="4" maxlength="4">
<input name="C-S-36" type="text" id="C-S-36" value="<?php if (isset($_POST["C-S-36"])) echo $_POST["C-S-36"]; ?>" size="4" maxlength="4">
<input name="D-D-36" type="text" id="D-D-36" value="<?php if (isset($_POST["D-D-36"])) echo $_POST["D-D-36"]; ?>" size="4" maxlength="4">
<input name="D-S-36" type="text" id="D-S-36" value="<?php if (isset($_POST["D-S-36"])) echo $_POST["D-S-36"]; ?>" size="4" maxlength="4">
<input name="E-D-36" type="text" id="E-D-36" value="<?php if (isset($_POST["E-D-36"])) echo $_POST["E-D-36"]; ?>" size="4" maxlength="4">
<input name="E-S-36" type="text" id="E-S-36" value="<?php if (isset($_POST["E-S-36"])) echo $_POST["E-S-36"]; ?>" size="4" maxlength="4">

<input name="A-D-37" type="text" id="A-D-37" value="<?php if (isset($_POST["A-D-37"])) echo $_POST["A-D-37"]; ?>" size="4" maxlength="4">
<input name="A-S-37" type="text" id="A-S-37" value="<?php if (isset($_POST["A-S-37"])) echo $_POST["A-S-37"]; ?>" size="4" maxlength="4">
<input name="B-D-37" type="text" id="B-D-37" value="<?php if (isset($_POST["B-D-37"])) echo $_POST["B-D-37"]; ?>" size="4" maxlength="4">
<input name="B-S-37" type="text" id="B-S-37" value="<?php if (isset($_POST["B-S-37"])) echo $_POST["B-S-37"]; ?>" size="4" maxlength="4">
<input name="C-D-37" type="text" id="C-D-37" value="<?php if (isset($_POST["C-D-37"])) echo $_POST["C-D-37"]; ?>" size="4" maxlength="4">
<input name="C-S-37" type="text" id="C-S-37" value="<?php if (isset($_POST["C-S-37"])) echo $_POST["C-S-37"]; ?>" size="4" maxlength="4">
<input name="D-D-37" type="text" id="D-D-37" value="<?php if (isset($_POST["D-D-37"])) echo $_POST["D-D-37"]; ?>" size="4" maxlength="4">
<input name="D-S-37" type="text" id="D-S-37" value="<?php if (isset($_POST["D-S-37"])) echo $_POST["D-S-37"]; ?>" size="4" maxlength="4">
<input name="E-D-37" type="text" id="E-D-37" value="<?php if (isset($_POST["E-D-37"])) echo $_POST["E-D-37"]; ?>" size="4" maxlength="4">
<input name="E-S-37" type="text" id="E-S-37" value="<?php if (isset($_POST["E-S-37"])) echo $_POST["E-S-37"]; ?>" size="4" maxlength="4">

<input name="A-D-38" type="text" id="A-D-38" value="<?php if (isset($_POST["A-D-38"])) echo $_POST["A-D-38"]; ?>" size="4" maxlength="4">
<input name="A-S-38" type="text" id="A-S-38" value="<?php if (isset($_POST["A-S-38"])) echo $_POST["A-S-38"]; ?>" size="4" maxlength="4">
<input name="B-D-38" type="text" id="B-D-38" value="<?php if (isset($_POST["B-D-38"])) echo $_POST["B-D-38"]; ?>" size="4" maxlength="4">
<input name="B-S-38" type="text" id="B-S-38" value="<?php if (isset($_POST["B-S-38"])) echo $_POST["B-S-38"]; ?>" size="4" maxlength="4">
<input name="C-D-38" type="text" id="C-D-38" value="<?php if (isset($_POST["C-D-38"])) echo $_POST["C-D-38"]; ?>" size="4" maxlength="4">
<input name="C-S-38" type="text" id="C-S-38" value="<?php if (isset($_POST["C-S-38"])) echo $_POST["C-S-38"]; ?>" size="4" maxlength="4">
<input name="D-D-38" type="text" id="D-D-38" value="<?php if (isset($_POST["D-D-38"])) echo $_POST["D-D-38"]; ?>" size="4" maxlength="4">
<input name="D-S-38" type="text" id="D-S-38" value="<?php if (isset($_POST["D-S-38"])) echo $_POST["D-S-38"]; ?>" size="4" maxlength="4">
<input name="E-D-38" type="text" id="E-D-38" value="<?php if (isset($_POST["E-D-38"])) echo $_POST["E-D-38"]; ?>" size="4" maxlength="4">
<input name="E-S-38" type="text" id="E-S-38" value="<?php if (isset($_POST["E-S-38"])) echo $_POST["E-S-38"]; ?>" size="4" maxlength="4">

<input name="A-D-39" type="text" id="A-D-39" value="<?php if (isset($_POST["A-D-39"])) echo $_POST["A-D-39"]; ?>" size="4" maxlength="4">
<input name="A-S-39" type="text" id="A-S-39" value="<?php if (isset($_POST["A-S-39"])) echo $_POST["A-S-39"]; ?>" size="4" maxlength="4">
<input name="B-D-39" type="text" id="B-D-39" value="<?php if (isset($_POST["B-D-39"])) echo $_POST["B-D-39"]; ?>" size="4" maxlength="4">
<input name="B-S-39" type="text" id="B-S-39" value="<?php if (isset($_POST["B-S-39"])) echo $_POST["B-S-39"]; ?>" size="4" maxlength="4">
<input name="C-D-39" type="text" id="C-D-39" value="<?php if (isset($_POST["C-D-39"])) echo $_POST["C-D-39"]; ?>" size="4" maxlength="4">
<input name="C-S-39" type="text" id="C-S-39" value="<?php if (isset($_POST["C-S-39"])) echo $_POST["C-S-39"]; ?>" size="4" maxlength="4">
<input name="D-D-39" type="text" id="D-D-39" value="<?php if (isset($_POST["D-D-39"])) echo $_POST["D-D-39"]; ?>" size="4" maxlength="4">
<input name="D-S-39" type="text" id="D-S-39" value="<?php if (isset($_POST["D-S-39"])) echo $_POST["D-S-39"]; ?>" size="4" maxlength="4">
<input name="E-D-39" type="text" id="E-D-39" value="<?php if (isset($_POST["E-D-39"])) echo $_POST["E-D-39"]; ?>" size="4" maxlength="4">
<input name="E-S-39" type="text" id="E-S-39" value="<?php if (isset($_POST["E-S-39"])) echo $_POST["E-S-39"]; ?>" size="4" maxlength="4">

<input name="A-D-40" type="text" id="A-D-40" value="<?php if (isset($_POST["A-D-40"])) echo $_POST["A-D-40"]; ?>" size="4" maxlength="4">
<input name="A-S-40" type="text" id="A-S-40" value="<?php if (isset($_POST["A-S-40"])) echo $_POST["A-S-40"]; ?>" size="4" maxlength="4">
<input name="B-D-40" type="text" id="B-D-40" value="<?php if (isset($_POST["B-D-40"])) echo $_POST["B-D-40"]; ?>" size="4" maxlength="4">
<input name="B-S-40" type="text" id="B-S-40" value="<?php if (isset($_POST["B-S-40"])) echo $_POST["B-S-40"]; ?>" size="4" maxlength="4">
<input name="C-D-40" type="text" id="C-D-40" value="<?php if (isset($_POST["C-D-40"])) echo $_POST["C-D-40"]; ?>" size="4" maxlength="4">
<input name="C-S-40" type="text" id="C-S-40" value="<?php if (isset($_POST["C-S-40"])) echo $_POST["C-S-40"]; ?>" size="4" maxlength="4">
<input name="D-D-40" type="text" id="D-D-40" value="<?php if (isset($_POST["D-D-40"])) echo $_POST["D-D-40"]; ?>" size="4" maxlength="4">
<input name="D-S-40" type="text" id="D-S-40" value="<?php if (isset($_POST["D-S-40"])) echo $_POST["D-S-40"]; ?>" size="4" maxlength="4">
<input name="E-D-40" type="text" id="E-D-40" value="<?php if (isset($_POST["E-D-40"])) echo $_POST["E-D-40"]; ?>" size="4" maxlength="4">
<input name="E-S-40" type="text" id="E-S-40" value="<?php if (isset($_POST["E-S-40"])) echo $_POST["E-S-40"]; ?>" size="4" maxlength="4">

<input name="A-D-45" type="text" id="A-D-45" value="<?php if (isset($_POST["A-D-45"])) echo $_POST["A-D-45"]; ?>" size="4" maxlength="4">
<input name="A-S-45" type="text" id="A-S-45" value="<?php if (isset($_POST["A-S-45"])) echo $_POST["A-S-45"]; ?>" size="4" maxlength="4">
<input name="B-D-45" type="text" id="B-D-45" value="<?php if (isset($_POST["B-D-45"])) echo $_POST["B-D-45"]; ?>" size="4" maxlength="4">
<input name="B-S-45" type="text" id="B-S-45" value="<?php if (isset($_POST["B-S-45"])) echo $_POST["B-S-45"]; ?>" size="4" maxlength="4">
<input name="C-D-45" type="text" id="C-D-45" value="<?php if (isset($_POST["C-D-45"])) echo $_POST["C-D-45"]; ?>" size="4" maxlength="4">
<input name="C-S-45" type="text" id="C-S-45" value="<?php if (isset($_POST["C-S-45"])) echo $_POST["C-S-45"]; ?>" size="4" maxlength="4">
<input name="D-D-45" type="text" id="D-D-45" value="<?php if (isset($_POST["D-D-45"])) echo $_POST["D-D-45"]; ?>" size="4" maxlength="4">
<input name="D-S-45" type="text" id="D-S-45" value="<?php if (isset($_POST["D-S-45"])) echo $_POST["D-S-45"]; ?>" size="4" maxlength="4">
<input name="E-D-45" type="text" id="E-D-45" value="<?php if (isset($_POST["E-D-45"])) echo $_POST["E-D-45"]; ?>" size="4" maxlength="4">
<input name="E-S-45" type="text" id="E-S-45" value="<?php if (isset($_POST["E-S-45"])) echo $_POST["E-S-45"]; ?>" size="4" maxlength="4">

<input name="A-D-47" type="text" id="A-D-47" value="<?php if (isset($_POST["A-D-47"])) echo $_POST["A-D-47"]; ?>" size="4" maxlength="4">
<input name="A-S-47" type="text" id="A-S-47" value="<?php if (isset($_POST["A-S-47"])) echo $_POST["A-S-47"]; ?>" size="4" maxlength="4">
<input name="B-D-47" type="text" id="B-D-47" value="<?php if (isset($_POST["B-D-47"])) echo $_POST["B-D-47"]; ?>" size="4" maxlength="4">
<input name="B-S-47" type="text" id="B-S-47" value="<?php if (isset($_POST["B-S-47"])) echo $_POST["B-S-47"]; ?>" size="4" maxlength="4">
<input name="C-D-47" type="text" id="C-D-47" value="<?php if (isset($_POST["C-D-47"])) echo $_POST["C-D-47"]; ?>" size="4" maxlength="4">
<input name="C-S-47" type="text" id="C-S-47" value="<?php if (isset($_POST["C-S-47"])) echo $_POST["C-S-47"]; ?>" size="4" maxlength="4">
<input name="D-D-47" type="text" id="D-D-47" value="<?php if (isset($_POST["D-D-47"])) echo $_POST["D-D-47"]; ?>" size="4" maxlength="4">
<input name="D-S-47" type="text" id="D-S-47" value="<?php if (isset($_POST["D-S-47"])) echo $_POST["D-S-47"]; ?>" size="4" maxlength="4">
<input name="E-D-47" type="text" id="E-D-47" value="<?php if (isset($_POST["E-D-47"])) echo $_POST["E-D-47"]; ?>" size="4" maxlength="4">
<input name="E-S-47" type="text" id="E-S-47" value="<?php if (isset($_POST["E-S-47"])) echo $_POST["E-S-47"]; ?>" size="4" maxlength="4">

<input name="A-D-52" type="text" id="A-D-52" value="<?php if (isset($_POST["A-D-52"])) echo $_POST["A-D-52"]; ?>" size="4" maxlength="4">
<input name="A-S-52" type="text" id="A-S-52" value="<?php if (isset($_POST["A-S-52"])) echo $_POST["A-S-52"]; ?>" size="4" maxlength="4">
<input name="B-D-52" type="text" id="B-D-52" value="<?php if (isset($_POST["B-D-52"])) echo $_POST["B-D-52"]; ?>" size="4" maxlength="4">
<input name="B-S-52" type="text" id="B-S-52" value="<?php if (isset($_POST["B-S-52"])) echo $_POST["B-S-52"]; ?>" size="4" maxlength="4">
<input name="C-D-52" type="text" id="C-D-52" value="<?php if (isset($_POST["C-D-52"])) echo $_POST["C-D-52"]; ?>" size="4" maxlength="4">
<input name="C-S-52" type="text" id="C-S-52" value="<?php if (isset($_POST["C-S-52"])) echo $_POST["C-S-52"]; ?>" size="4" maxlength="4">
<input name="D-D-52" type="text" id="D-D-52" value="<?php if (isset($_POST["D-D-52"])) echo $_POST["D-D-52"]; ?>" size="4" maxlength="4">
<input name="D-S-52" type="text" id="D-S-52" value="<?php if (isset($_POST["D-S-52"])) echo $_POST["D-S-52"]; ?>" size="4" maxlength="4">
<input name="E-D-52" type="text" id="E-D-52" value="<?php if (isset($_POST["E-D-52"])) echo $_POST["E-D-52"]; ?>" size="4" maxlength="4">
<input name="E-S-52" type="text" id="E-S-52" value="<?php if (isset($_POST["E-S-52"])) echo $_POST["E-S-52"]; ?>" size="4" maxlength="4">

<input name="A-D-53" type="text" id="A-D-53" value="<?php if (isset($_POST["A-D-53"])) echo $_POST["A-D-53"]; ?>" size="4" maxlength="4">
<input name="A-S-53" type="text" id="A-S-53" value="<?php if (isset($_POST["A-S-53"])) echo $_POST["A-S-53"]; ?>" size="4" maxlength="4">
<input name="B-D-53" type="text" id="B-D-53" value="<?php if (isset($_POST["B-D-53"])) echo $_POST["B-D-53"]; ?>" size="4" maxlength="4">
<input name="B-S-53" type="text" id="B-S-53" value="<?php if (isset($_POST["B-S-53"])) echo $_POST["B-S-53"]; ?>" size="4" maxlength="4">
<input name="C-D-53" type="text" id="C-D-53" value="<?php if (isset($_POST["C-D-53"])) echo $_POST["C-D-53"]; ?>" size="4" maxlength="4">
<input name="C-S-53" type="text" id="C-S-53" value="<?php if (isset($_POST["C-S-53"])) echo $_POST["C-S-53"]; ?>" size="4" maxlength="4">
<input name="D-D-53" type="text" id="D-D-53" value="<?php if (isset($_POST["D-D-53"])) echo $_POST["D-D-53"]; ?>" size="4" maxlength="4">
<input name="D-S-53" type="text" id="D-S-53" value="<?php if (isset($_POST["D-S-53"])) echo $_POST["D-S-53"]; ?>" size="4" maxlength="4">
<input name="E-D-53" type="text" id="E-D-53" value="<?php if (isset($_POST["E-D-53"])) echo $_POST["E-D-53"]; ?>" size="4" maxlength="4">
<input name="E-S-53" type="text" id="E-S-53" value="<?php if (isset($_POST["E-S-53"])) echo $_POST["E-S-53"]; ?>" size="4" maxlength="4">

<input name="A-D-57" type="text" id="A-D-57" value="<?php if (isset($_POST["A-D-57"])) echo $_POST["A-D-57"]; ?>" size="4" maxlength="4">
<input name="A-S-57" type="text" id="A-S-57" value="<?php if (isset($_POST["A-S-57"])) echo $_POST["A-S-57"]; ?>" size="4" maxlength="4">
<input name="B-D-57" type="text" id="B-D-57" value="<?php if (isset($_POST["B-D-57"])) echo $_POST["B-D-57"]; ?>" size="4" maxlength="4">
<input name="B-S-57" type="text" id="B-S-57" value="<?php if (isset($_POST["B-S-57"])) echo $_POST["B-S-57"]; ?>" size="4" maxlength="4">
<input name="C-D-57" type="text" id="C-D-57" value="<?php if (isset($_POST["C-D-57"])) echo $_POST["C-D-57"]; ?>" size="4" maxlength="4">
<input name="C-S-57" type="text" id="C-S-57" value="<?php if (isset($_POST["C-S-57"])) echo $_POST["C-S-57"]; ?>" size="4" maxlength="4">
<input name="D-D-57" type="text" id="D-D-57" value="<?php if (isset($_POST["D-D-57"])) echo $_POST["D-D-57"]; ?>" size="4" maxlength="4">
<input name="D-S-57" type="text" id="D-S-57" value="<?php if (isset($_POST["D-S-57"])) echo $_POST["D-S-57"]; ?>" size="4" maxlength="4">
<input name="E-D-57" type="text" id="E-D-57" value="<?php if (isset($_POST["E-D-57"])) echo $_POST["E-D-57"]; ?>" size="4" maxlength="4">
<input name="E-S-57" type="text" id="E-S-57" value="<?php if (isset($_POST["E-S-57"])) echo $_POST["E-S-57"]; ?>" size="4" maxlength="4">

<input name="A-D-59" type="text" id="A-D-59" value="<?php if (isset($_POST["A-D-59"])) echo $_POST["A-D-59"]; ?>" size="4" maxlength="4">
<input name="A-S-59" type="text" id="A-S-59" value="<?php if (isset($_POST["A-S-59"])) echo $_POST["A-S-59"]; ?>" size="4" maxlength="4">
<input name="B-D-59" type="text" id="B-D-59" value="<?php if (isset($_POST["B-D-59"])) echo $_POST["B-D-59"]; ?>" size="4" maxlength="4">
<input name="B-S-59" type="text" id="B-S-59" value="<?php if (isset($_POST["B-S-59"])) echo $_POST["B-S-59"]; ?>" size="4" maxlength="4">
<input name="C-D-59" type="text" id="C-D-59" value="<?php if (isset($_POST["C-D-59"])) echo $_POST["C-D-59"]; ?>" size="4" maxlength="4">
<input name="C-S-59" type="text" id="C-S-59" value="<?php if (isset($_POST["C-S-59"])) echo $_POST["C-S-59"]; ?>" size="4" maxlength="4">
<input name="D-D-59" type="text" id="D-D-59" value="<?php if (isset($_POST["D-D-59"])) echo $_POST["D-D-59"]; ?>" size="4" maxlength="4">
<input name="D-S-59" type="text" id="D-S-59" value="<?php if (isset($_POST["D-S-59"])) echo $_POST["D-S-59"]; ?>" size="4" maxlength="4">
<input name="E-D-59" type="text" id="E-D-59" value="<?php if (isset($_POST["E-D-59"])) echo $_POST["E-D-59"]; ?>" size="4" maxlength="4">
<input name="E-S-59" type="text" id="E-S-59" value="<?php if (isset($_POST["E-S-59"])) echo $_POST["E-S-59"]; ?>" size="4" maxlength="4">

<input name="A-D-67" type="text" id="A-D-67" value="<?php if (isset($_POST["A-D-67"])) echo $_POST["A-D-67"]; ?>" size="4" maxlength="4">
<input name="A-S-67" type="text" id="A-S-67" value="<?php if (isset($_POST["A-S-67"])) echo $_POST["A-S-67"]; ?>" size="4" maxlength="4">
<input name="B-D-67" type="text" id="B-D-67" value="<?php if (isset($_POST["B-D-67"])) echo $_POST["B-D-67"]; ?>" size="4" maxlength="4">
<input name="B-S-67" type="text" id="B-S-67" value="<?php if (isset($_POST["B-S-67"])) echo $_POST["B-S-67"]; ?>" size="4" maxlength="4">
<input name="C-D-67" type="text" id="C-D-67" value="<?php if (isset($_POST["C-D-67"])) echo $_POST["C-D-67"]; ?>" size="4" maxlength="4">
<input name="C-S-67" type="text" id="C-S-67" value="<?php if (isset($_POST["C-S-67"])) echo $_POST["C-S-67"]; ?>" size="4" maxlength="4">
<input name="D-D-67" type="text" id="D-D-67" value="<?php if (isset($_POST["D-D-67"])) echo $_POST["D-D-67"]; ?>" size="4" maxlength="4">
<input name="D-S-67" type="text" id="D-S-67" value="<?php if (isset($_POST["D-S-67"])) echo $_POST["D-S-67"]; ?>" size="4" maxlength="4">
<input name="E-D-67" type="text" id="E-D-67" value="<?php if (isset($_POST["E-D-67"])) echo $_POST["E-D-67"]; ?>" size="4" maxlength="4">
<input name="E-S-67" type="text" id="E-S-67" value="<?php if (isset($_POST["E-S-67"])) echo $_POST["E-S-67"]; ?>" size="4" maxlength="4">

<input name="A-D-68" type="text" id="A-D-68" value="<?php if (isset($_POST["A-D-68"])) echo $_POST["A-D-68"]; ?>" size="4" maxlength="4">
<input name="A-S-68" type="text" id="A-S-68" value="<?php if (isset($_POST["A-S-68"])) echo $_POST["A-S-68"]; ?>" size="4" maxlength="4">
<input name="B-D-68" type="text" id="B-D-68" value="<?php if (isset($_POST["B-D-68"])) echo $_POST["B-D-68"]; ?>" size="4" maxlength="4">
<input name="B-S-68" type="text" id="B-S-68" value="<?php if (isset($_POST["B-S-68"])) echo $_POST["B-S-68"]; ?>" size="4" maxlength="4">
<input name="C-D-68" type="text" id="C-D-68" value="<?php if (isset($_POST["C-D-68"])) echo $_POST["C-D-68"]; ?>" size="4" maxlength="4">
<input name="C-S-68" type="text" id="C-S-68" value="<?php if (isset($_POST["C-S-68"])) echo $_POST["C-S-68"]; ?>" size="4" maxlength="4">
<input name="D-D-68" type="text" id="D-D-68" value="<?php if (isset($_POST["D-D-68"])) echo $_POST["D-D-68"]; ?>" size="4" maxlength="4">
<input name="D-S-68" type="text" id="D-S-68" value="<?php if (isset($_POST["D-S-68"])) echo $_POST["D-S-68"]; ?>" size="4" maxlength="4">
<input name="E-D-68" type="text" id="E-D-68" value="<?php if (isset($_POST["E-D-68"])) echo $_POST["E-D-68"]; ?>" size="4" maxlength="4">
<input name="E-S-68" type="text" id="E-S-68" value="<?php if (isset($_POST["E-S-68"])) echo $_POST["E-S-68"]; ?>" size="4" maxlength="4">

<input name="A-D-69" type="text" id="A-D-69" value="<?php if (isset($_POST["A-D-69"])) echo $_POST["A-D-69"]; ?>" size="4" maxlength="4">
<input name="A-S-69" type="text" id="A-S-69" value="<?php if (isset($_POST["A-S-69"])) echo $_POST["A-S-69"]; ?>" size="4" maxlength="4">
<input name="B-D-69" type="text" id="B-D-69" value="<?php if (isset($_POST["B-D-69"])) echo $_POST["B-D-69"]; ?>" size="4" maxlength="4">
<input name="B-S-69" type="text" id="B-S-69" value="<?php if (isset($_POST["B-S-69"])) echo $_POST["B-S-69"]; ?>" size="4" maxlength="4">
<input name="C-D-69" type="text" id="C-D-69" value="<?php if (isset($_POST["C-D-69"])) echo $_POST["C-D-69"]; ?>" size="4" maxlength="4">
<input name="C-S-69" type="text" id="C-S-69" value="<?php if (isset($_POST["C-S-69"])) echo $_POST["C-S-69"]; ?>" size="4" maxlength="4">
<input name="D-D-69" type="text" id="D-D-69" value="<?php if (isset($_POST["D-D-69"])) echo $_POST["D-D-69"]; ?>" size="4" maxlength="4">
<input name="D-S-69" type="text" id="D-S-69" value="<?php if (isset($_POST["D-S-69"])) echo $_POST["D-S-69"]; ?>" size="4" maxlength="4">
<input name="E-D-69" type="text" id="E-D-69" value="<?php if (isset($_POST["E-D-69"])) echo $_POST["E-D-69"]; ?>" size="4" maxlength="4">
<input name="E-S-69" type="text" id="E-S-69" value="<?php if (isset($_POST["E-S-69"])) echo $_POST["E-S-69"]; ?>" size="4" maxlength="4">

<input name="A-D-70" type="text" id="A-D-70" value="<?php if (isset($_POST["A-D-70"])) echo $_POST["A-D-70"]; ?>" size="4" maxlength="4">
<input name="A-S-70" type="text" id="A-S-70" value="<?php if (isset($_POST["A-S-70"])) echo $_POST["A-S-70"]; ?>" size="4" maxlength="4">
<input name="B-D-70" type="text" id="B-D-70" value="<?php if (isset($_POST["B-D-70"])) echo $_POST["B-D-70"]; ?>" size="4" maxlength="4">
<input name="B-S-70" type="text" id="B-S-70" value="<?php if (isset($_POST["B-S-70"])) echo $_POST["B-S-70"]; ?>" size="4" maxlength="4">
<input name="C-D-70" type="text" id="C-D-70" value="<?php if (isset($_POST["C-D-70"])) echo $_POST["C-D-70"]; ?>" size="4" maxlength="4">
<input name="C-S-70" type="text" id="C-S-70" value="<?php if (isset($_POST["C-S-70"])) echo $_POST["C-S-70"]; ?>" size="4" maxlength="4">
<input name="D-D-70" type="text" id="D-D-70" value="<?php if (isset($_POST["D-D-70"])) echo $_POST["D-D-70"]; ?>" size="4" maxlength="4">
<input name="D-S-70" type="text" id="D-S-70" value="<?php if (isset($_POST["D-S-70"])) echo $_POST["D-S-70"]; ?>" size="4" maxlength="4">
<input name="E-D-70" type="text" id="E-D-70" value="<?php if (isset($_POST["E-D-70"])) echo $_POST["E-D-70"]; ?>" size="4" maxlength="4">
<input name="E-S-70" type="text" id="E-S-70" value="<?php if (isset($_POST["E-S-70"])) echo $_POST["E-S-70"]; ?>" size="4" maxlength="4">

<input name="A-D-71" type="text" id="A-D-71" value="<?php if (isset($_POST["A-D-71"])) echo $_POST["A-D-71"]; ?>" size="4" maxlength="4">
<input name="A-S-71" type="text" id="A-S-71" value="<?php if (isset($_POST["A-S-71"])) echo $_POST["A-S-71"]; ?>" size="4" maxlength="4">
<input name="B-D-71" type="text" id="B-D-71" value="<?php if (isset($_POST["B-D-71"])) echo $_POST["B-D-71"]; ?>" size="4" maxlength="4">
<input name="B-S-71" type="text" id="B-S-71" value="<?php if (isset($_POST["B-S-71"])) echo $_POST["B-S-71"]; ?>" size="4" maxlength="4">
<input name="C-D-71" type="text" id="C-D-71" value="<?php if (isset($_POST["C-D-71"])) echo $_POST["C-D-71"]; ?>" size="4" maxlength="4">
<input name="C-S-71" type="text" id="C-S-71" value="<?php if (isset($_POST["C-S-71"])) echo $_POST["C-S-71"]; ?>" size="4" maxlength="4">
<input name="D-D-71" type="text" id="D-D-71" value="<?php if (isset($_POST["D-D-71"])) echo $_POST["D-D-71"]; ?>" size="4" maxlength="4">
<input name="D-S-71" type="text" id="D-S-71" value="<?php if (isset($_POST["D-S-71"])) echo $_POST["D-S-71"]; ?>" size="4" maxlength="4">
<input name="E-D-71" type="text" id="E-D-71" value="<?php if (isset($_POST["E-D-71"])) echo $_POST["E-D-71"]; ?>" size="4" maxlength="4">
<input name="E-S-71" type="text" id="E-S-71" value="<?php if (isset($_POST["E-S-71"])) echo $_POST["E-S-71"]; ?>" size="4" maxlength="4">

<input name="A-D-72" type="text" id="A-D-72" value="<?php if (isset($_POST["A-D-72"])) echo $_POST["A-D-72"]; ?>" size="4" maxlength="4">
<input name="A-S-72" type="text" id="A-S-72" value="<?php if (isset($_POST["A-S-72"])) echo $_POST["A-S-72"]; ?>" size="4" maxlength="4">
<input name="B-D-72" type="text" id="B-D-72" value="<?php if (isset($_POST["B-D-72"])) echo $_POST["B-D-72"]; ?>" size="4" maxlength="4">
<input name="B-S-72" type="text" id="B-S-72" value="<?php if (isset($_POST["B-S-72"])) echo $_POST["B-S-72"]; ?>" size="4" maxlength="4">
<input name="C-D-72" type="text" id="C-D-72" value="<?php if (isset($_POST["C-D-72"])) echo $_POST["C-D-72"]; ?>" size="4" maxlength="4">
<input name="C-S-72" type="text" id="C-S-72" value="<?php if (isset($_POST["C-S-72"])) echo $_POST["C-S-72"]; ?>" size="4" maxlength="4">
<input name="D-D-72" type="text" id="D-D-72" value="<?php if (isset($_POST["D-D-72"])) echo $_POST["D-D-72"]; ?>" size="4" maxlength="4">
<input name="D-S-72" type="text" id="D-S-72" value="<?php if (isset($_POST["D-S-72"])) echo $_POST["D-S-72"]; ?>" size="4" maxlength="4">
<input name="E-D-72" type="text" id="E-D-72" value="<?php if (isset($_POST["E-D-72"])) echo $_POST["E-D-72"]; ?>" size="4" maxlength="4">
<input name="E-S-72" type="text" id="E-S-72" value="<?php if (isset($_POST["E-S-72"])) echo $_POST["E-S-72"]; ?>" size="4" maxlength="4">

<input name="A-D-73" type="text" id="A-D-73" value="<?php if (isset($_POST["A-D-73"])) echo $_POST["A-D-73"]; ?>" size="4" maxlength="4">
<input name="A-S-73" type="text" id="A-S-73" value="<?php if (isset($_POST["A-S-73"])) echo $_POST["A-S-73"]; ?>" size="4" maxlength="4">
<input name="B-D-73" type="text" id="B-D-73" value="<?php if (isset($_POST["B-D-73"])) echo $_POST["B-D-73"]; ?>" size="4" maxlength="4">
<input name="B-S-73" type="text" id="B-S-73" value="<?php if (isset($_POST["B-S-73"])) echo $_POST["B-S-73"]; ?>" size="4" maxlength="4">
<input name="C-D-73" type="text" id="C-D-73" value="<?php if (isset($_POST["C-D-73"])) echo $_POST["C-D-73"]; ?>" size="4" maxlength="4">
<input name="C-S-73" type="text" id="C-S-73" value="<?php if (isset($_POST["C-S-73"])) echo $_POST["C-S-73"]; ?>" size="4" maxlength="4">
<input name="D-D-73" type="text" id="D-D-73" value="<?php if (isset($_POST["D-D-73"])) echo $_POST["D-D-73"]; ?>" size="4" maxlength="4">
<input name="D-S-73" type="text" id="D-S-73" value="<?php if (isset($_POST["D-S-73"])) echo $_POST["D-S-73"]; ?>" size="4" maxlength="4">
<input name="E-D-73" type="text" id="E-D-73" value="<?php if (isset($_POST["E-D-73"])) echo $_POST["E-D-73"]; ?>" size="4" maxlength="4">
<input name="E-S-73" type="text" id="E-S-73" value="<?php if (isset($_POST["E-S-73"])) echo $_POST["E-S-73"]; ?>" size="4" maxlength="4">

<input name="A-D-74" type="text" id="A-D-74" value="<?php if (isset($_POST["A-D-74"])) echo $_POST["A-D-74"]; ?>" size="4" maxlength="4">
<input name="A-S-74" type="text" id="A-S-74" value="<?php if (isset($_POST["A-S-74"])) echo $_POST["A-S-74"]; ?>" size="4" maxlength="4">
<input name="B-D-74" type="text" id="B-D-74" value="<?php if (isset($_POST["B-D-74"])) echo $_POST["B-D-74"]; ?>" size="4" maxlength="4">
<input name="B-S-74" type="text" id="B-S-74" value="<?php if (isset($_POST["B-S-74"])) echo $_POST["B-S-74"]; ?>" size="4" maxlength="4">
<input name="C-D-74" type="text" id="C-D-74" value="<?php if (isset($_POST["C-D-74"])) echo $_POST["C-D-74"]; ?>" size="4" maxlength="4">
<input name="C-S-74" type="text" id="C-S-74" value="<?php if (isset($_POST["C-S-74"])) echo $_POST["C-S-74"]; ?>" size="4" maxlength="4">
<input name="D-D-74" type="text" id="D-D-74" value="<?php if (isset($_POST["D-D-74"])) echo $_POST["D-D-74"]; ?>" size="4" maxlength="4">
<input name="D-S-74" type="text" id="D-S-74" value="<?php if (isset($_POST["D-S-74"])) echo $_POST["D-S-74"]; ?>" size="4" maxlength="4">
<input name="E-D-74" type="text" id="E-D-74" value="<?php if (isset($_POST["E-D-74"])) echo $_POST["E-D-74"]; ?>" size="4" maxlength="4">
<input name="E-S-74" type="text" id="E-S-74" value="<?php if (isset($_POST["E-S-74"])) echo $_POST["E-S-74"]; ?>" size="4" maxlength="4">

<input name="A-D-75" type="text" id="A-D-75" value="<?php if (isset($_POST["A-D-75"])) echo $_POST["A-D-75"]; ?>" size="4" maxlength="4">
<input name="A-S-75" type="text" id="A-S-75" value="<?php if (isset($_POST["A-S-75"])) echo $_POST["A-S-75"]; ?>" size="4" maxlength="4">
<input name="B-D-75" type="text" id="B-D-75" value="<?php if (isset($_POST["B-D-75"])) echo $_POST["B-D-75"]; ?>" size="4" maxlength="4">
<input name="B-S-75" type="text" id="B-S-75" value="<?php if (isset($_POST["B-S-75"])) echo $_POST["B-S-75"]; ?>" size="4" maxlength="4">
<input name="C-D-75" type="text" id="C-D-75" value="<?php if (isset($_POST["C-D-75"])) echo $_POST["C-D-75"]; ?>" size="4" maxlength="4">
<input name="C-S-75" type="text" id="C-S-75" value="<?php if (isset($_POST["C-S-75"])) echo $_POST["C-S-75"]; ?>" size="4" maxlength="4">
<input name="D-D-75" type="text" id="D-D-75" value="<?php if (isset($_POST["D-D-75"])) echo $_POST["D-D-75"]; ?>" size="4" maxlength="4">
<input name="D-S-75" type="text" id="D-S-75" value="<?php if (isset($_POST["D-S-75"])) echo $_POST["D-S-75"]; ?>" size="4" maxlength="4">
<input name="E-D-75" type="text" id="E-D-75" value="<?php if (isset($_POST["E-D-75"])) echo $_POST["E-D-75"]; ?>" size="4" maxlength="4">
<input name="E-S-75" type="text" id="E-S-75" value="<?php if (isset($_POST["E-S-75"])) echo $_POST["E-S-75"]; ?>" size="4" maxlength="4">

<input name="A-D-76" type="text" id="A-D-76" value="<?php if (isset($_POST["A-D-76"])) echo $_POST["A-D-76"]; ?>" size="4" maxlength="4">
<input name="A-S-76" type="text" id="A-S-76" value="<?php if (isset($_POST["A-S-76"])) echo $_POST["A-S-76"]; ?>" size="4" maxlength="4">
<input name="B-D-76" type="text" id="B-D-76" value="<?php if (isset($_POST["B-D-76"])) echo $_POST["B-D-76"]; ?>" size="4" maxlength="4">
<input name="B-S-76" type="text" id="B-S-76" value="<?php if (isset($_POST["B-S-76"])) echo $_POST["B-S-76"]; ?>" size="4" maxlength="4">
<input name="C-D-76" type="text" id="C-D-76" value="<?php if (isset($_POST["C-D-76"])) echo $_POST["C-D-76"]; ?>" size="4" maxlength="4">
<input name="C-S-76" type="text" id="C-S-76" value="<?php if (isset($_POST["C-S-76"])) echo $_POST["C-S-76"]; ?>" size="4" maxlength="4">
<input name="D-D-76" type="text" id="D-D-76" value="<?php if (isset($_POST["D-D-76"])) echo $_POST["D-D-76"]; ?>" size="4" maxlength="4">
<input name="D-S-76" type="text" id="D-S-76" value="<?php if (isset($_POST["D-S-76"])) echo $_POST["D-S-76"]; ?>" size="4" maxlength="4">
<input name="E-D-76" type="text" id="E-D-76" value="<?php if (isset($_POST["E-D-76"])) echo $_POST["E-D-76"]; ?>" size="4" maxlength="4">
<input name="E-S-76" type="text" id="E-S-76" value="<?php if (isset($_POST["E-S-76"])) echo $_POST["E-S-76"]; ?>" size="4" maxlength="4">

<input name="A-D-77" type="text" id="A-D-77" value="<?php if (isset($_POST["A-D-77"])) echo $_POST["A-D-77"]; ?>" size="4" maxlength="4">
<input name="A-S-77" type="text" id="A-S-77" value="<?php if (isset($_POST["A-S-77"])) echo $_POST["A-S-77"]; ?>" size="4" maxlength="4">
<input name="B-D-77" type="text" id="B-D-77" value="<?php if (isset($_POST["B-D-77"])) echo $_POST["B-D-77"]; ?>" size="4" maxlength="4">
<input name="B-S-77" type="text" id="B-S-77" value="<?php if (isset($_POST["B-S-77"])) echo $_POST["B-S-77"]; ?>" size="4" maxlength="4">
<input name="C-D-77" type="text" id="C-D-77" value="<?php if (isset($_POST["C-D-77"])) echo $_POST["C-D-77"]; ?>" size="4" maxlength="4">
<input name="C-S-77" type="text" id="C-S-77" value="<?php if (isset($_POST["C-S-77"])) echo $_POST["C-S-77"]; ?>" size="4" maxlength="4">
<input name="D-D-77" type="text" id="D-D-77" value="<?php if (isset($_POST["D-D-77"])) echo $_POST["D-D-77"]; ?>" size="4" maxlength="4">
<input name="D-S-77" type="text" id="D-S-77" value="<?php if (isset($_POST["D-S-77"])) echo $_POST["D-S-77"]; ?>" size="4" maxlength="4">
<input name="E-D-77" type="text" id="E-D-77" value="<?php if (isset($_POST["E-D-77"])) echo $_POST["E-D-77"]; ?>" size="4" maxlength="4">
<input name="E-S-77" type="text" id="E-S-77" value="<?php if (isset($_POST["E-S-77"])) echo $_POST["E-S-77"]; ?>" size="4" maxlength="4">

<input name="A-D-78" type="text" id="A-D-78" value="<?php if (isset($_POST["A-D-78"])) echo $_POST["A-D-78"]; ?>" size="4" maxlength="4">
<input name="A-S-78" type="text" id="A-S-78" value="<?php if (isset($_POST["A-S-78"])) echo $_POST["A-S-78"]; ?>" size="4" maxlength="4">
<input name="B-D-78" type="text" id="B-D-78" value="<?php if (isset($_POST["B-D-78"])) echo $_POST["B-D-78"]; ?>" size="4" maxlength="4">
<input name="B-S-78" type="text" id="B-S-78" value="<?php if (isset($_POST["B-S-78"])) echo $_POST["B-S-78"]; ?>" size="4" maxlength="4">
<input name="C-D-78" type="text" id="C-D-78" value="<?php if (isset($_POST["C-D-78"])) echo $_POST["C-D-78"]; ?>" size="4" maxlength="4">
<input name="C-S-78" type="text" id="C-S-78" value="<?php if (isset($_POST["C-S-78"])) echo $_POST["C-S-78"]; ?>" size="4" maxlength="4">
<input name="D-D-78" type="text" id="D-D-78" value="<?php if (isset($_POST["D-D-78"])) echo $_POST["D-D-78"]; ?>" size="4" maxlength="4">
<input name="D-S-78" type="text" id="D-S-78" value="<?php if (isset($_POST["D-S-78"])) echo $_POST["D-S-78"]; ?>" size="4" maxlength="4">
<input name="E-D-78" type="text" id="E-D-78" value="<?php if (isset($_POST["E-D-78"])) echo $_POST["E-D-78"]; ?>" size="4" maxlength="4">
<input name="E-S-78" type="text" id="E-S-78" value="<?php if (isset($_POST["E-S-78"])) echo $_POST["E-S-78"]; ?>" size="4" maxlength="4">

<input name="A-D-79" type="text" id="A-D-79" value="<?php if (isset($_POST["A-D-79"])) echo $_POST["A-D-79"]; ?>" size="4" maxlength="4">
<input name="A-S-79" type="text" id="A-S-79" value="<?php if (isset($_POST["A-S-79"])) echo $_POST["A-S-79"]; ?>" size="4" maxlength="4">
<input name="B-D-79" type="text" id="B-D-79" value="<?php if (isset($_POST["B-D-79"])) echo $_POST["B-D-79"]; ?>" size="4" maxlength="4">
<input name="B-S-79" type="text" id="B-S-79" value="<?php if (isset($_POST["B-S-79"])) echo $_POST["B-S-79"]; ?>" size="4" maxlength="4">
<input name="C-D-79" type="text" id="C-D-79" value="<?php if (isset($_POST["C-D-79"])) echo $_POST["C-D-79"]; ?>" size="4" maxlength="4">
<input name="C-S-79" type="text" id="C-S-79" value="<?php if (isset($_POST["C-S-79"])) echo $_POST["C-S-79"]; ?>" size="4" maxlength="4">
<input name="D-D-79" type="text" id="D-D-79" value="<?php if (isset($_POST["D-D-79"])) echo $_POST["D-D-79"]; ?>" size="4" maxlength="4">
<input name="D-S-79" type="text" id="D-S-79" value="<?php if (isset($_POST["D-S-79"])) echo $_POST["D-S-79"]; ?>" size="4" maxlength="4">
<input name="E-D-79" type="text" id="E-D-79" value="<?php if (isset($_POST["E-D-79"])) echo $_POST["E-D-79"]; ?>" size="4" maxlength="4">
<input name="E-S-79" type="text" id="E-S-79" value="<?php if (isset($_POST["E-S-79"])) echo $_POST["E-S-79"]; ?>" size="4" maxlength="4">

<?php if (isset($_POST["submit"])) { ?>
		<img id="sig_img1" src="<?php echo $signature_img1?>">
		<img id="sig_img2" src="<?php echo $signature_img2?>">
	<?php } else { ?>
		<canvas id="signature1" width="1065" height="45"></canvas>
		<input type="hidden" name="signature1" />
		<canvas id="signature2" width="1065" height="45"></canvas>
		<input type="hidden" name="signature2" />
	<?php 
	 } ?>

<p class="wrap"><input name="submit" type="submit" id="next" value="Next" <?php if (isset($_POST['submit'])) echo 'style="display: none;"'; ?>></p>
</form>
  </div>