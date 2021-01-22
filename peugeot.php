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

 /* PDF verzia*/

    img {
		position: absolute; 
		width: 720px; 
		height: 1017px; 
		margin: 0px; 
		z-index: -1; 
	}
	#model {
		position: absolute;  
		top: 250px; 		
		left: 160px; 
		width: 700px; 	
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
	#v-1 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 50px;
		width: 13px;
		font-size: 8px;
	}
	#v-2 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 64px;
		width: 13px;
		font-size: 8px;
	}
	#v-3 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 78px;
		width: 12px;
		font-size: 8px;
	}
	#v-4 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 92px;
		width: 12px;
		font-size: 8px;
	}
	#v-5 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 105px;
		width: 13px;
		font-size: 8px;
	}
	#v-6 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 119px;
		width: 13px;
		font-size: 8px;
	}
	#v-7 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 133px;
		width: 12px;
		font-size: 8px;
	}
	#v-8 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 146px;
		width: 13px;
		font-size: 8px;
	}
	#v-9 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 160px;
		width: 12px;
		font-size: 8px;
	}
	#v-10 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 173px;
		width: 13px;
		font-size: 8px;
	}
	#v-11 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 187px;
		width: 13px;
		font-size: 8px;
	}
	#v-12 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 201px;
		width: 12px;
		font-size: 8px;
	}
	#v-13 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 214px;
		width: 13px;
		font-size: 8px;
	}
	#v-14 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 228px;
		width: 13px;
		font-size: 8px;
	}
	#v-15 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 242px;
		width: 12px;
		font-size: 8px;
	}
	#v-16 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 255px;
		width: 13px;
		font-size: 8px;
	}
	#v-17 {
		position: absolute;
		height: 15px;
		top: 62px;
		left: 269px;
		width: 13px;
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
		left: 237px;
		width: 50px;
		font-size: 8px;
	}
	#c{
		position: absolute;
		height: 17px;
		top: 579px;
		left: 370px;
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
	<input name="v-1" type="text" id="v-1" value="<?php if (isset($_POST["v-1"])) echo $_POST["v-1"]; ?>" size="1" maxlength="1">
	<input name="v-2" type="text" id="v-2" value="<?php if (isset($_POST["v-2"])) echo $_POST["v-2"]; ?>" size="1" maxlength="1">
	<input name="v-3" type="text" id="v-3" value="<?php if (isset($_POST["v-3"])) echo $_POST["v-3"]; ?>" size="1" maxlength="1">
	<input name="v-4" type="text" id="v-4" value="<?php if (isset($_POST["v-4"])) echo $_POST["v-4"]; ?>" size="1" maxlength="1">
	<input name="v-5" type="text" id="v-5" value="<?php if (isset($_POST["v-5"])) echo $_POST["v-5"]; ?>" size="1" maxlength="1">
	<input name="v-6" type="text" id="v-6" value="<?php if (isset($_POST["v-6"])) echo $_POST["v-6"]; ?>" size="1" maxlength="1">
	<input name="v-7" type="text" id="v-7" value="<?php if (isset($_POST["v-7"])) echo $_POST["v-7"]; ?>" size="1" maxlength="1">
	<input name="v-8" type="text" id="v-8" value="<?php if (isset($_POST["v-8"])) echo $_POST["v-8"]; ?>" size="1" maxlength="1">
	<input name="v-9" type="text" id="v-9" value="<?php if (isset($_POST["v-9"])) echo $_POST["v-9"]; ?>" size="1" maxlength="1">
	<input name="v-10" type="text" id="v-10" value="<?php if (isset($_POST["v-10"])) echo $_POST["v-10"]; ?>" size="1" maxlength="1">
	<input name="v-11" type="text" id="v-11" value="<?php if (isset($_POST["v-11"])) echo $_POST["v-11"]; ?>" size="1" maxlength="1">
	<input name="v-12" type="text" id="v-12" value="<?php if (isset($_POST["v-12"])) echo $_POST["v-12"]; ?>" size="1" maxlength="1">
	<input name="v-13" type="text" id="v-13" value="<?php if (isset($_POST["v-13"])) echo $_POST["v-13"]; ?>" size="1" maxlength="1">
	<input name="v-14" type="text" id="v-14" value="<?php if (isset($_POST["v-14"])) echo $_POST["v-14"]; ?>" size="1" maxlength="1">
	<input name="v-15" type="text" id="v-15" value="<?php if (isset($_POST["v-15"])) echo $_POST["v-15"]; ?>" size="1" maxlength="1">
	<input name="v-16" type="text" id="v-16" value="<?php if (isset($_POST["v-16"])) echo $_POST["v-16"]; ?>" size="1" maxlength="1">
	<input name="v-17" type="text" id="v-17" value="<?php if (isset($_POST["v-17"])) echo $_POST["v-17"]; ?>" size="1" maxlength="1">

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



	<br>
	
<p><input name="submit" type="submit" id="submit" value="Download PDF"></p>
<p><input name="next" type="submit" id="next" value="Next"></p>
</form>
  </div>