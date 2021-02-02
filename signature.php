<script type="text/javascript">    
    var canvas1, canvas2, ctx1, ctx2;    
    var mouseX,mouseY,mouseDown=0;    
    var prevX, prevY;
    var touchX,touchY;    
    var signature1 = document.getElementsByName('signature1')[0];
    var signature2 = document.getElementsByName('signature2')[0];

    canvas1 = document.getElementById('signature1');        
    if (canvas1.getContext)
        ctx1 = canvas1.getContext('2d');        
    if (ctx1) {            
        canvas1.addEventListener('mousedown', sketchpad_mouseDown, false);
        canvas1.addEventListener('mousemove', sketchpad_mouseMove1, false);
        window.addEventListener('mouseup', sketchpad_mouseUp, false);
        canvas1.addEventListener('touchstart', sketchpad_touchStart, false);
        canvas1.addEventListener('touchmove', sketchpad_touchMove1, false);
        window.addEventListener('touchend', sketchpad_mouseUp, false);
    }  

    canvas2 = document.getElementById('signature2');        
    if (canvas2.getContext)
        ctx2 = canvas2.getContext('2d');        
    if (ctx2) {            
        canvas2.addEventListener('mousedown', sketchpad_mouseDown, false);
        canvas2.addEventListener('mousemove', sketchpad_mouseMove2, false);
        window.addEventListener('mouseup', sketchpad_mouseUp, false);
        canvas2.addEventListener('touchstart', sketchpad_touchStart, false);
        canvas2.addEventListener('touchmove', sketchpad_touchMove2, false);
        window.addEventListener('touchend', sketchpad_mouseUp, false);
    }      

    function draw(ctx,x,y) {                
        if (!prevX && !prevY) {
              prevX = x;
              prevY = y;
        }
        ctx.beginPath();
        ctx.moveTo(prevX, prevY);
        ctx.lineTo(x, y);
        ctx.strokeStyle = 'black';
        ctx.lineWidth = 2;
        ctx.stroke();
        ctx.closePath();
    } 

    function sketchpad_mouseDown() {
        mouseDown=1;        
    }
    
    function sketchpad_mouseUp() {
        mouseDown=0;
        prevX = prevY = 0; 
        signature1.value = canvas1.toDataURL();  
        signature2.value = canvas2.toDataURL();  
    }
    
    function sketchpad_mouseMove1(e) {         
        getMousePos(e);      
        if (mouseDown==1) {
            draw(ctx1,mouseX,mouseY);
        }
        prevX = mouseX; 
        prevY = mouseY; 
    }

    function sketchpad_mouseMove2(e) {         
        getMousePos(e);      
        if (mouseDown==1) {
            draw(ctx2,mouseX,mouseY);
        }
        prevX = mouseX; 
        prevY = mouseY; 
    }

    function getMousePos(e) {
        if (!e)
            var e = event;

        if (e.offsetX) {
            mouseX = e.offsetX;
            mouseY = e.offsetY;
        }
        else if (e.layerX) {
            mouseX = e.layerX;
            mouseY = e.layerY;
        }
     }
    
    function sketchpad_touchStart() {        
        getTouchPos();                
        event.preventDefault();
    }
    
    function sketchpad_touchMove1(e) {         
        getTouchPos(e);        
        draw(ctx1,touchX,touchY);         
        //event.preventDefault();
        prevX = touchX; 
        prevY = touchY; 
    }

    function sketchpad_touchMove2(e) {         
        getTouchPos(e);        
        draw(ctx2,touchX,touchY);         
        //event.preventDefault();
        prevX = touchX; 
        prevY = touchY; 
    }
    
    function getTouchPos(e) {
        if (!e)
            var e = event;

        if(e.touches) {
            if (e.touches.length == 1) { // Only deal with one finger
                var touch = e.touches[0]; // Get the information for finger #1
                touchX=touch.pageX-touch.target.offsetLeft;
                touchY=touch.pageY-touch.target.offsetTop;
                if (!prevX && !prevY) {
                    prevX = touchX;
                    prevY = touchY;
                }
            }
        }
    }        
</script>
