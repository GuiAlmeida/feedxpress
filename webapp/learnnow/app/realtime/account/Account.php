<?php
   class Account{

   
     public $email;
     public $password;
     public $mobile;

   
     public $state;

     //trial or paid
     public $mode;
     public $activationCode;

     public $groups;

     function Account(){

      $this->_id= new MongoId();
      error_log("New Acocunt Id is :".(string)$this->_id);
      $this->groups = array();      
     }

     function setData($pEmail,$pPassword,$pMobile,$pState,$pActivationCode){

	     $this->email = $pEmail;
	     $this->password = $pPassword;
	     $this->state = $pState;
	     $this->activationCode = $pActivationCode;
	     $this->mobile = $pMobile;
	     $this->sp_id=""; 
	     $this->phoneNumbers = array();
	     $this->mode = "trial";

     }

      
    function setMode($pMode){

	    $this->mode = $pMode;    

     }

   }
?>
