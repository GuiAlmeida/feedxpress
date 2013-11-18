<?php

   class AccountSettings{

   	   
     public $email;
     public $mobile;
     public $mode;

     function AccountSettings(){

     }

     function setData($pEmail,$pMobile,$pMode){

	     $this->email = $pEmail;
	     $this->mobile = $pMobile;
	     $this->mode = $pMode;

     }

      
 

   }

?>
