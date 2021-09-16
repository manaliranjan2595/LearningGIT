<?php

include_once('../config.php');


class Model {
  
  
  public function createConnection(){
 
                       
        $this->db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);
  

      if($this->db->connect_errno){
  
          echo 'Filed to connect database';

            exit(); 
      
  }
    
   } 
   
  public function executeQry($sql) {
  
       
         $this->createConnection();
  
       $result=$this->db->query($sql) or die(mysqli_error($this->db));

         $this->db->close();
         return $result;
     }  
        
  }

?>