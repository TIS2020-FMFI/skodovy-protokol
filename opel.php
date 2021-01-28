<?php if (isset($_POST["submit"])) { ?>
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
	#chassis {
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


</style>
<?php } else { ?>
<style>

    /* pdf verzia*/
    img {
		position: absolute; 
		width: 720px; 
		height: 1017px; 
		margin: 0px; 
		z-index: -1; 
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
	#chassis {
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
		height: 20px;
		top: 820px; 		
		left: 219px; 
		width: 94px; 
		font-size: 8px;		
	}
	#trucknoB {
		position: absolute;  
		height: 20px;
		top: 820px; 		
		left: 313px; 
		width: 94px; 
		font-size: 8px;	
	}
	#trucknoC {
		position: absolute;  
		height: 20px;
		top: 820px; 		
		left: 407px; 
		width: 93px; 
		font-size: 8px;		
	}
	#trucknoD {
		position: absolute;  
		height: 20px;
		top: 820px; 		
		left: 500px; 
		width: 94px; 
		font-size: 8px;		
	}
	#trucknoE {
		position: absolute;  
		height: 20px;
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
		height: 20px;
		top: 902px; 		
		left: 219px; 
		width: 94px; 
		font-size: 8px;		
	}
	#nameofinspectorB {
		position: absolute;  
		height: 20px;
		top: 902px; 		
		left: 313px; 
		width: 94px; 
		font-size: 8px;	
	}
	#nameofinspectorC {
		position: absolute;  
		height: 20px;
		top: 902px; 		
		left: 407px; 
		width: 93px; 
		font-size: 8px;		
	}
	#nameofinspectorD {
		position: absolute;  
		height: 20px;
		top: 902px; 		
		left: 500px; 
		width: 94px; 
		font-size: 8px;	
	}
	#nameofinspectorE {
		position: absolute;  
		height: 20px;
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
<input name="chassis" type="text" id="chassis" value="<?php if (isset($_POST["chassis"])) echo $_POST["chassis"]; ?>" size="15" maxlength="15">
	

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

<!-- pridany kod koniec -->
	
<p><input name="submit" type="submit" id="submit" value="Download PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>