<?php
 
 
  require_once  dirname(__FILE__).'/../database/DatabaseManager.php';


  class FeedItem{
  
   public  $_id;
   public $contentId; // pointer to actual content

   //character of the content as published to this Group
   public $canLike;
   public $canComment;

   public $companyDomain;
   public $companyGroup;
   public $content;
   
   public $publishDate;

  
  function FeedItem(){

    $this->_id= new MongoId();
    error_log("New Feed Id is :".(string)$this->_id);
    $this->canLike = FALSE;
    $this->canComment = FALSE;
  }	  

  function setData($pContentId,$pCompanyDomain,$pCompanyGroup,$pCanLike,$pCanComment){

    $this->canLike = $pCanLike;
    $this->canComment = $pCanComment;    
    $this->contentId = $pContentId;
    $this->companyDomain = $pCompanyDomain;
    $this->companyGroup = $pCompanyGroup;
	date_default_timezone_set('Australia/Melbourne');
    $this->publishDate = $date = date('m/d/Y h:i:s a', time());	

  }
  
  function setContent($pContentObj){
  
    $this->content = $pContentObj;	
  
  }


  }

    
?>
