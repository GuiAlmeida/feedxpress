<?php
    class ActivationResultCode{
        
	public $code;
	public $statusDesc;



	public function __construct() {

	   $this->code = "100";
           $this->statusDesc= "neet init"; 	   
	}

        public function setData($code,$statusDesc) {
		$this->code = $code;
		$this->statusDesc = $statusDesc;
	}
        

  }
?>