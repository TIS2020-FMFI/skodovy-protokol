<?php

// Include autoloader 
require_once 'dompdf/autoload.inc.php';  
// Reference the Dompdf namespace 
use Dompdf\Dompdf; 
// Instantiate and use the dompdf class 
$dompdf = new Dompdf();

session_start();
include('db.php');
include('funkcie.php');
header('Záznam protokolu');
?>

<section>
<?php
if (isset($_POST["submit"])) {
    // Load HTML content 
    ob_start();
    if (isset($_GET['type']) && strcmp($_GET['type'], "jaguar") == 0) {
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
    $html = ob_get_clean();
    $dompdf->loadHtml($html);  
    // (Optional) Setup the paper size and orientation 
    //$dompdf->setPaper('A4', 'landscape');  
    // Render the HTML as PDF 
    $dompdf->render();  
    // Output the ge    nerated PDF to Browser 
    $dompdf->stream();
    /*save a document
    $output = $dompdf->output();
    file_put_contents('protocol_data/protocol.pdf', $output);
    */
}
else if (isset($_POST["upload"])) {
    fileToServer(isset($_FILES) ? $_FILES["photo1"] : '', "photo1");     
    fileToServer(isset($_FILES) ? $_FILES["photo2"] : '', "photo2");     
    fileToServer(isset($_FILES) ? $_FILES["photo3"] : '', "photo3");     
    include('upload.php');                                
}
else if (isset($_POST["send"])) {        
    packToZIP(); 
    uploadToSharepoint(); 
}
else if (isset($_POST["next"])) {
    for ($x = 1; $x <= 3; $x++) {
        $name = "protocol_data/photo" . $x . ".jpg"; 
        if (file_exists($name))
            unlink($name); 
    }
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


?>
	
</section>