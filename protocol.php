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
header('Index');
?>

<section>
<?php
if (isset($_POST["submit"])) {
    // Load HTML content 
    ob_start();
    include('opel.php');
    $html = ob_get_clean();
    $dompdf->loadHtml($html);  
    // (Optional) Setup the paper size and orientation 
    //$dompdf->setPaper('A4', 'landscape');  
    // Render the HTML as PDF 
    $dompdf->render();  
    // Output the generated PDF to Browser 
    $dompdf->stream();
}
if (isset($_GET['type']) && strcmp($_GET['type'], "opel") == 0) {
    include('opel.php');
}
?>
	
</section>
