<form method="post" enctype="multipart/form-data">			
		<?php 
		for ($x = 1; $x <= 3; $x++) {
			$name = "photo" . $x; 	?>
			<p><label for="<?php echo $name; ?>">Fotografia č. <?php echo $x; ?>:</label>
			<input type="file" name="<?php echo $name; ?>" id="<?php echo $name; ?>" onchange="submitForm();" style="display: none;" accept=".jpg, .png">
			<input type="button" value="Browse..." onclick="document.getElementById('<?php echo $name; ?>').click();" />
			<?php 
			if (file_exists("protocol_data/" . $name . ".jpg")) {
				echo '<img src="protocol_data/' . $name . '.jpg" alt="Photo1" width="42" height="42">'; 				
			} ?>
		</p>
		<?php } ?>
		
		
	<br>
	
<p><input name="upload" type="submit" id="upload" value="upload" style="display: none;"></p>
<p><input name="send" type="submit" id="send" value="Send to Sharepoint" formaction="index.php"></p>
</form>

<script type="text/javascript">
    function submitForm() {
        // However you need to submit the form
        document.getElementById("upload").click(); // Or whatever
    }
</script>