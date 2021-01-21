<?php 
if (isset($_GET['type']) && strcmp($_GET['type'], "jaguar") == 0) {
    echo '<img src="pictures/jaguar-help.jpg">'; 
}    
else if (isset($_GET['type']) && strcmp($_GET['type'], "opel") == 0) {
    echo '<img src="pictures/opel-help.jpg">'; 
}
else if (isset($_GET['type']) && strcmp($_GET['type'], "peugeot") == 0) {
    echo '<img src="pictures/peugeot-help.jpg">'; 
}
else if (isset($_GET['type']) && strcmp($_GET['type'], "renault") == 0) {
    echo '<img src="pictures/renault-help.jpg">'; 
}
else if (isset($_GET['type']) && strcmp($_GET['type'], "skoda") == 0) {
    echo '<img src="pictures/skoda-help.jpg">'; 
}

?>