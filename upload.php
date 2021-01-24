<div class="wrapper">
	<form method="post" enctype="multipart/form-data">			
			<?php 
			for ($x = 1; $x <= 3; $x++) {
				$name = "photo" . $x; 	?>
				<p><label for="<?php echo $name; ?>">Fotografia č. <?php echo $x; ?>:</label>
				<input type="file" name="<?php echo $name; ?>" id="<?php echo $name; ?>" onchange="submitForm();" style="display: none;" accept=".jpg, .png">
				<input type="button" value="Browse..." onclick="document.getElementById('<?php echo $name; ?>').click();" />
				<?php 
				if (file_exists("protocol_data/" . $name . ".jpg")) {
					echo '<img src="protocol_data/' . $name . '.jpg" alt="Photo1" width="100" height="100">'; 				
				}
				else if (file_exists("protocol_data/" . $name . ".png")) {
					echo '<img src="protocol_data/' . $name . '.png" alt="Photo1" width="100" height="100">'; 				
				} ?>
			</p>
			<?php } ?>
			
			
		<br>
		
	<p><input name="upload" type="submit" id="upload" value="upload" style="display: none;"></p>
	<p><input name="send" type="submit" id="send" value="Send to Sharepoint" formaction="index.php"></p>
	</form>
</div>	
<style>
	* {
		/* outline: 3px solid black; */
	}

	.wrapper {
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
		margin:0;
	}
	form {
		text-align: center;
		width: 50%;
		height: 50%;
	}

	input[type="submit"] {
		background-color: #f85f6a;
		color: white;
		font-weight: bold;
		padding: 20px;
		margin: 10px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
}
input[type="submit"]:hover{
  background-color: #c54b53;
}

img {
	outline: 5px solid red;
}
</style>

<script type="text/javascript">
    function submitForm() {
        // However you need to submit the form
        document.getElementById("upload").click(); 
    }
</script>