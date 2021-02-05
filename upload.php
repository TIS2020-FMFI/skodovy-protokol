<?php
session_start();
if (!isset($_SESSION["username"])) {
    echo "<p class='fail' >Na túto stránku nemáte prístup!</p>"; 
} else { ?>

<div class="wrapper">
	<form method="post" enctype="multipart/form-data">	
		<input name="type" type="text" id="type"  value="<?php echo  $_GET["type"]; ?>" size="20" style="display: none;">
		<input name="vin" type="text" id="vin"  value="<?php if (isset($_POST["vin"])) echo  $_POST["vin"]; ?>" style="display: none;">
	<h1>Sem vložte fotografie</h1>		
			<?php 
			for ($x = 1; $x <= 3; $x++) {
				$name = "photo" . $x; 	?>
				
				<p><input type="file" class="rad" name="<?php echo $name; ?>" id="<?php echo $name; ?>" onchange="submitForm();" style="display: none;" accept=".jpg, .png">
				<input type="button" class="rad" value="Fotografia <?php echo $x;?>" onclick="document.getElementById('<?php echo $name; ?>').click();" />
				<?php 
				if (file_exists("protocol_data/" . $name . ".jpg")) {
					echo '<img src="protocol_data/' . $name . '.jpg" alt="Photo1" class="rad" width="100" height="100">'; 				
				}
				else if (file_exists("protocol_data/" . $name . ".png")) {
					echo '<img src="protocol_data/' . $name . '.png" alt="Photo1" class="rad" width="100" height="100">'; 				
				} ?>
			</p>
			<?php } ?>
			
			
		<br>
		
	<p><input name="upload" type="submit" id="upload" value="upload" style="display: none;"></p>
	<p><input name="send" type="submit" id="send" value="Send to Server" formaction="index.php"></p>
	</form>
</div>	

<script type="text/javascript">
    function submitForm() {
        // However you need to submit the form
        document.getElementById("upload").click(); 
    }
</script>
<?php } ?>

<style>

	.wrapper {
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	.rad {
		margin: 5px;
	}
	form {
		text-align: center;
		width: 50%;
		height: 50%;
		display:flex;
		flex-direction: column;
	}

	form p {
		display:flex;
		flex-direction: row;
		align-items: center;
		justify-content: center;
		margin: 10px;
	}

	input[type="submit"], input[type="button"] {
		background-color: #f85f6a;
		color: white;
		font-weight: bold;
		padding: 20px;
		margin: 10px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
}
input[type="submit"]:hover, input[type="button"]:hover{
  background-color: #c54b53;
}
.fail {
  font-size: 50px;
  color: #fc100d;
  font-weight: bold;
}
</style>