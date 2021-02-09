<?php
session_start();
include('db.php');
include('funkcie.php');
header('Záznam protokolu');
?>

<section>
<?php
if (!isset($_SESSION["username"])) {
    echo "<p class='fail' >Na túto stránku nemáte prístup!</p>"; 
} else {

if (isset($_POST["upload"])) {
    fileToServer(isset($_FILES) ? $_FILES["photo1"] : '', "photo1");     
    fileToServer(isset($_FILES) ? $_FILES["photo2"] : '', "photo2");     
    fileToServer(isset($_FILES) ? $_FILES["photo3"] : '', "photo3");     
    include('upload.php');                                
}
else if (isset($_POST["submit"])) {
    convertToPDF(); 
    clearData(); 
    include('upload.php');
}
else if (isset($_GET['type']) && strcmp($_GET['type'], "jaguar") == 0) {
    include('jaguar.php');
}    
else if (isset($_GET['type']) && strcmp($_GET['type'], "opel") == 0) {
    include('opel.php');
}
else if (isset($_GET['type']) && strcmp($_GET['type'], "peugeot") == 0) {
    include('peugeot.php');
}
else if (isset($_GET['type']) && strcmp($_GET['type'], "renault") == 0) {
    include('renault.php');
}
else if (isset($_GET['type']) && strcmp($_GET['type'], "skoda") == 0) {
    include('skoda.php');
}
else if (isset($_POST["next"])) {
    include('upload.php');
}
if (!isset($_POST["submit"])) {
    echo '<div class="wrap"><a target="_blank" rel="SK preklad" href="help.php?type=' . $_GET["type"] . '">Pomôcka v SK jazyku</a></div>'; 
}    

?>
	
</section>


<?php include("signature.php"); }?>

<style>
.wrap {
    display: flex;
    justify-content: center;
}
a {
  background-color: #00538B;
  font-weight: bold;
  margin: 10px;
  padding: 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-decoration: none;
  color: white;
}

a:hover{
    background-color: #012a46;
}
.fail {
  font-size: 50px;
  color: #fc100d;
  font-weight: bold;
}
</style>