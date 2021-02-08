<?php
require_once 'vendor/autoload.php';
/*include("db.php"); 
include("funkcie.php"); */
set_time_limit(3000); 

/* do mailu prihlasovanie */
$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = '---@gmail.com'; 
$password = '---';

/* pripojenie */
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

$emails = imap_search($inbox, 'FROM "---@gmail.com"');

/* if any emails found, iterate through each email */
if($emails) {

    $count = 1;

    /* put the newest emails on top */
    rsort($emails);

    /* for every email... */
    foreach($emails as $email_number) 
    {

        /* get information specific to this email */
        $overview = imap_fetch_overview($inbox,$email_number,0);

        $message = imap_fetchbody($inbox,$email_number,2);

        /* get mail structure */
        $structure = imap_fetchstructure($inbox, $email_number);

        $attachments = array();

        /* if any attachments found... */
        if(isset($structure->parts) && count($structure->parts)) 
        {
            for($i = 0; $i < count($structure->parts); $i++) 
            {
                $attachments[$i] = array(
                    'is_attachment' => false,
                    'filename' => '',
                    'name' => '',
                    'attachment' => ''
                );

                if($structure->parts[$i]->ifdparameters) 
                {
                    foreach($structure->parts[$i]->dparameters as $object) 
                    {
                        if(strtolower($object->attribute) == 'filename') 
                        {
                            $attachments[$i]['is_attachment'] = true;
                            $attachments[$i]['filename'] = $object->value;
                        }
                    }
                }

                if($structure->parts[$i]->ifparameters) 
                {
                    foreach($structure->parts[$i]->parameters as $object) 
                    {
                        if(strtolower($object->attribute) == 'name') 
                        {
                            $attachments[$i]['is_attachment'] = true;
                            $attachments[$i]['name'] = $object->value;
                        }
                    }
                }

                if($attachments[$i]['is_attachment']) 
                {
                    $attachments[$i]['attachment'] = imap_fetchbody($inbox, $email_number, $i+1);

                    /* 3 = BASE64 encoding */
                    if($structure->parts[$i]->encoding == 3) 
                    { 
                        $attachments[$i]['attachment'] = base64_decode($attachments[$i]['attachment']);
                    }
                    /* 4 = QUOTED-PRINTABLE encoding */
                    elseif($structure->parts[$i]->encoding == 4) 
                    { 
                        $attachments[$i]['attachment'] = quoted_printable_decode($attachments[$i]['attachment']);
                    }
                }
            }
        }

        /* iterate through each attachment and save it */
        foreach($attachments as $attachment)
        {
            if($attachment['is_attachment'] == 1)
            {
                $filename = $attachment['name'];
                if(empty($filename)) $filename = $attachment['filename'];

                if(empty($filename)) $filename = time() . ".dat";
                $folder = "attachment";
                if(!is_dir($folder))
                {
                     mkdir($folder);
                }
                $fp = fopen("./". $folder ."/". $email_number . "-" . $filename, "w+");
                fwrite($fp, $attachment['attachment']);
                fclose($fp);
                $file = fopen("./". $folder ."/". $email_number . "-" . $filename, "r");
                $row = 0; 
                while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {                                                                            
                    if ($row == 0) {
                        $row++; 
                        continue; 
                    }
                    $arr = explode(";", $data[0]); 
                    $vin = "";                    
                    $manufacturer = "";
                    $model = "";
                    $storageConsignee = "";
                    $entryDate = "";
                    $row++;
                    for ($i=0; $i < count($arr); $i++) {
                        if ($i == 0) 
                            $vin = $arr[0];                                                     
                        if ($i == 1) 
                            $manufacturer = $arr[1];                         
                        if ($i == 2) 
                            $model = $arr[2]; 
                        if ($i == 3) 
                            $storageConsignee = $arr[3]; 
                        if ($i == 4) 
                            $entryDate = $arr[4]; 
                    }                                                                                                                                                                                                                            
                    add_model($mysqli, $vin, $manufacturer, $model, $storageConsignee, $entryDate); 
                    
                }
            }
            
        }
        imap_delete($inbox, $email_number);        

    }
} 

/* close the connection */
imap_close($inbox);

//echo "all attachment in DB!";

?>
