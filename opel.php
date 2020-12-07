<style>
#o-back {		
	<?php
	$path = './opel/VLDR - OPEL-1.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	?>	
	background-image: url("<?php echo $base64?>"); 		
	height: 2337px; 
	
	width: 100%; 
}
#o-model {
	position: absolute; 
	top: 250px; 
	left: 160px; 
	width: 700px; 
	
}
#watermark { position: fixed; bottom: 0px; right: 0px; width: 200px; height: 200px; opacity: .1; }

</style>
<div id="watermark"><img src="obr.jpg" height="100%" width="100%"></div>

  <div id="o-back">
    <form method="post">
	
	<input name="model" type="text" id="o-model" value="" size="20" maxlength="20">	

	<br>
	
<p><input name="submit" type="submit" id="submit" value="OK"></p>
</form>
  </div>