<?php

require_once 'vendor/autoload.php';
use Office365\Runtime\Auth\ClientCredential;
use Office365\SharePoint\FileCreationInformation;
use Office365\SharePoint\ClientContext;
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
}
else if (isset($_POST["upload"])) {
    fileToServer(isset($_FILES) ? $_FILES["photo1"] : '');     
        
    
}
else if (isset($_POST["send"])) {
    //pack to zip file
    $zip = new ZipArchive();
    $filename = "result.zip";

    if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
        exit("cannot open <$filename>\n");
    }
        
    $zip->addFile("index.php");    
    echo "status:" . $zip->status . "\n";
    $zip->close();

    //uploadToSharepoint
    try {
        $clientId = "964c908f-f1b6-4a7f-a8e3-f17b0aa02529";
        $clientSecret = "kLTFoKc8BM/u87YQ9wQjxhspK7pSGj2NqJcwlz9lL7Y=";
	    $webUrl = "https://liveuniba.sharepoint.com/sites/MartinKristak/";
        $credentials = new ClientCredential($clientId, $clientSecret);
        $ctx = (new ClientContext($webUrl))->withCredentials($credentials);
        $targetFolderUrl = "Shared%20Documents";
        $localPath = "result.zip";
        $fileName = basename($localPath);
        $fileCreationInformation = new FileCreationInformation();
        $fileCreationInformation->Content = file_get_contents($localPath);
        $fileCreationInformation->Url = $fileName;
        $uploadFile = $ctx->getWeb()->getFolderByServerRelativeUrl($targetFolderUrl)->getFiles()->add($fileCreationInformation);
        $ctx->executeQuery();
        print "File has been uploaded\r\n";
    }
    catch (Exception $e) {
        echo 'Error: ',  $e->getMessage(), "\n";
    }
}
else if (isset($_POST["next"])) {
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
