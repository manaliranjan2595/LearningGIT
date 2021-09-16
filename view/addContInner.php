<?php


include_once('../controller/clsCont.php');

$objContr= new clsCont;
$id='0';
$flag='0';
$outMsg='';


if(isset($_REQUEST['btnSubmit']))
    
 {
        $result			= $objContr->addcontRegis($id);	
        $outMsg                 = $result['outmsg'];
        $flag                   = $result['flag'];
        $name                   = $result['Name'];
        $phn                    = $result['Phn'];
        $email                  = $result['Email'];
        $Msg                    = $result['Msg'];
        $url                    = 'http://localhost/contact_form/view/addCont.php'; 
         header('Location: '.$url);
        
 }
    
    
    


?>
