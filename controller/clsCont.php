<?php


include('../model/customModel.php');


class clsCont extends Model{
  
  
    public function manageaddcont($action,$id,$name,$email,$phn,$msg,$vchattr1,$vchattr2,$intattr3,$intattr4){

    $addSql = "CALL USP_CONT_REGISTER('$action',$id,'$name','$email','$phn','$msg','$vchattr1','$vchattr2',$intattr3,$intattr4);";
   

 //echo $addSql;exit;
  
   $addRegis = Model::executeQry($addSql);
   
      return $addRegis;
   
 }
    
    
  
  public function addcontRegis($id){
 
       
        $name        = $_POST['vchName'];
        
$phn         = $_POST['vchPhn'];
      
  $email       = $_POST['vchEmail'];
        $msg         = $_POST['vchMsg'];
        $outMsg      = '';
        $errFlag                =  0;
        $flag			= ($id!=0)?1:0;
	$action			= ($id==0)?'A':'U';
        
        $to='manali.ranjan@csmpl.com';
        $html='Name:-'.$name;
        $html.='Phone No:-'.$phn;
        $html.='Email ID:-'.$email;
        $html.=' Message:-'.$msg;
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


        $headers .= 'From: <webmaster@example.com>' . "\r\n";
        $headers .= 'Cc: myboss@example.com' . "\r\n";
         
//        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

//                $errFlag         = 1;
//   
             $outMsg       = 'Enter a valid email';
//     
           
//            } 
        
  
     // if($errFlag==0){
       
 $result			= $this->manageaddcont($action,$id,$name,$email, $phn,$msg,'','',0,0);
     
   if($result)
      

  $outMsg		        = ($action=='A')?'Registration Details added successfully':'Registration Details updated successfully';
        
        mail($to, "Contact-Form for new students", $html, $headers);
        //} 
        $strName		=  $flag==1?$name:'';
        $strPhn 		=  $flag==1?$phn:'';
        $strEmail		=  $flag==1?$email:'';
        $strMsg 		=  $flag==1?$msg:'';
        
        $arrResult	= array('outmsg'=>$outMsg, 'flag'=>$flag,'Name'=>$strName,'Phn'=>$strPhn, 'Email'=>$strEmail, 'Msg'=>$strMsg);
		return $arrResult;
    }
    
       
      public function viewRegistration(){
        
         $result=$this->manageaddcont('V',0,'','','','','','',0,0);
         return $result;
       }
}


?>