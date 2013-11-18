<?php
 
 
  require_once  dirname(__FILE__).'/../database/DatabaseManager.php';


  class ContentManager{

  
  function ContentManager(){

  }	  

  function findContent($pContentId){

    $clip=null;
	error_log("Entering findConetent with ".$pContentId);
    $dbManager = new DatabaseManager();
    $conn = $dbManager->getConnection();
    $db= $conn->learnnow;
    $result = $db->uploads->findOne(array("_id" => new MongoId($pContentId)) );
   
    if($result != null){
     $clip = $result;
    } 
	else
	{
	 error_log("Could not find clip with ID: ".$pContentId);
	}

    $conn->close();
    return $clip;
  }
  
  function findGroupsFedWithContent($pContentId,$pCompanyDomain){
     
	$groups = null; 
    error_log("Entering findGroupsFedWithContent with ".$pContentId."  ".$pCompanyDomain);
    $dbManager = new DatabaseManager();
    $conn = $dbManager->getConnection();
    $db= $conn->learnnow;
    $result = $db->feeds->find(array("contentId" => $pContentId,"companyDomain" => $pCompanyDomain),array("companyGroup" => 1,"_id" => 0) );
    $conn->close();
   
     if($result != null){
     $groups = iterator_to_array($result);
	 $groups = array_values($groups);
	 }
	 else{
	 $groups = array(); 
	 }
	 
	 return $groups;
  }
  
  

   function findFeedForGroup($pDomain,$pGroup){
   
    $clips=null;
	error_log("Entering findFeedForGroup with ".$pDomain."  ".$pGroup);
    $dbManager = new DatabaseManager();
    $conn = $dbManager->getConnection();
    $db= $conn->learnnow;
    $result = $db->feeds->find(array("companyDomain" => $pDomain,"companyGroup" => $pGroup) )->sort(array('publishDate' => -1));
   
    if($result != null){
     $clips = iterator_to_array($result);
	 
	 //$clips = array_values($clips);
	 
    } 
	else
	{
	 error_log("Could not find clip with ID: ".$pContentId);
	}

    $conn->close();
    return $clips;
  
  }
  
   function getLatestUploadedContent(){
  
    $clips=null;
	error_log("Entering getLatestContent ");
    $dbManager = new DatabaseManager();
    $conn = $dbManager->getConnection();
    $db= $conn->learnnow;
    $result = $db->uploads->find(array())->sort(array('uploadDate' => -1));
   
    if($result != null){
     $clips = iterator_to_array($result);
	 $clips = array_values($clips);
	
    } 
	else
	{
	 error_log("Could not find clip with ID: ".$pContentId);
	}

    $conn->close();
    return $clips;
  
  }
 
  
  }

    
?>
