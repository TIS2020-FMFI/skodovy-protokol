<script>
var canvas = document.getElementById('signature');
var ctx = canvas.getContext("2d");
var drawing = false;
var prevX, prevY;
var currX, currY;
var signature = document.getElementsByName('signature')[0];

canvas.addEventListener("mousemove", draw);
canvas.addEventListener("touchmove", draw);
canvas.addEventListener("mouseup", stop);
canvas.addEventListener("touchmove", stop);
canvas.addEventListener("mousedown", start);
canvas.addEventListener("touchstop", start);

function start() {
  drawing = true;    
}

function stop() {
  drawing = false;
  prevX = prevY = null;
  signature.value = canvas.toDataURL();  
}

function draw(e) {
  if (!drawing) {	
    return;
  }    
	const rect = canvas.getBoundingClientRect();
	currX = e.clientX - rect.left;
    currY = e.clientY - rect.top;
  if (!prevX && !prevY) {
    prevX = currX;
    prevY = currY;
  }

  ctx.beginPath();
  ctx.moveTo(prevX, prevY);
  ctx.lineTo(currX, currY);
  ctx.strokeStyle = 'black';
  ctx.lineWidth = 2;
  ctx.stroke();
  ctx.closePath();

  prevX = currX;
  prevY = currY;    
}

</script>	  

