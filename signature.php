<script>
var canvas1 = document.getElementById('signature1');
var canvas2 = document.getElementById('signature2');
var ctx1 = canvas1.getContext("2d");
var ctx2 = canvas2.getContext("2d");
var drawing = false;
var prevX, prevY;
var currX, currY;
var signature1 = document.getElementsByName('signature1')[0];
var signature2 = document.getElementsByName('signature2')[0];

canvas1.addEventListener("mousemove", draw1);
canvas1.addEventListener("touchmove", draw1);
canvas1.addEventListener("mouseup", stop1);
canvas1.addEventListener("touchmove", stop1);
canvas1.addEventListener("mousedown", start);
canvas1.addEventListener("touchstop", start);

canvas2.addEventListener("mousemove", draw2);
canvas2.addEventListener("touchmove", draw2);
canvas2.addEventListener("mouseup", stop2);
canvas2.addEventListener("touchmove", stop2);
canvas2.addEventListener("mousedown", start);
canvas2.addEventListener("touchstop", start);

function start() {
  drawing = true;    
}

function stop1() {
  drawing = false;
  prevX = prevY = null;
  signature1.value = canvas1.toDataURL();  
}

function stop2() {
  drawing = false;
  prevX = prevY = null;
  signature2.value = canvas2.toDataURL();  
}

function draw1(e) {
  if (!drawing) {	
    return;
  }    
	const rect = canvas1.getBoundingClientRect();
	currX = e.clientX - rect.left;
  currY = e.clientY - rect.top;
  if (!prevX && !prevY) {
    prevX = currX;
    prevY = currY;
  }

  ctx1.beginPath();
  ctx1.moveTo(prevX, prevY);
  ctx1.lineTo(currX, currY);
  ctx1.strokeStyle = 'black';
  ctx1.lineWidth = 2;
  ctx1.stroke();
  ctx1.closePath();

  prevX = currX;
  prevY = currY;    
}

function draw2(e) {
  if (!drawing) {	
    return;
  }    
	const rect = canvas2.getBoundingClientRect();
	currX = e.clientX - rect.left;
  currY = e.clientY - rect.top;
  if (!prevX && !prevY) {
    prevX = currX;
    prevY = currY;
  }

  ctx2.beginPath();
  ctx2.moveTo(prevX, prevY);
  ctx2.lineTo(currX, currY);
  ctx2.strokeStyle = 'black';
  ctx2.lineWidth = 2;
  ctx2.stroke();
  ctx2.closePath();

  prevX = currX;
  prevY = currY;    
}

</script>	  

