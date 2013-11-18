<?php

   require_once  dirname(__FILE__).'/../../realtime/database/DatabaseManager.php';
   require_once  dirname(__FILE__).'/../../realtime/account/ActivationResultCode.php';
	
   function isContentDuplicate($contentInfoObj){
   
   $result = false;
   $dbManager = new DatabaseManager();
   $connection =$dbManager->getConnection();
   $db = $connection->learnnow;
   $uploads = $db->uploads;   
   $content = NULL;
   
   $content = $uploads->findOne(array('contentUrl' => $contentInfoObj->contentUrl));
    
	if($content != NULL){
	  $result = true;
	}
   
    $connection->close();
    return $result;
   }
   
   function getYoutubeThumbnailUrl($pUrl)
   {
      $thumbNailUrl = "http://localhost/learnnow/images/youtube.png";
      $path = parse_url($pUrl, PHP_URL_PATH);
	  $pathFragments = explode('/', $path);
      $end = end($pathFragments);
	 
	  $thumbNailUrl = "http://i3.ytimg.com/vi/$end/default.jpg";
	  error_log("Setting Youtube thumbnail now: ".$thumbNailUrl);
      
	  
	  return $thumbNailUrl;
   }
   
   
   error_log("Entering Content upload");
   $resultCode = new ActivationResultCode();
   $resultCode->setData("200","OK");   
   $contentInfo = $_POST['contentInfo'];
   $contentInfoObj =  json_decode($contentInfo);
  
   
   $dbManager = new DatabaseManager();
   $connection =$dbManager->getConnection(); 
   $db = $connection->learnnow;
   $uploads = $db->uploads;
   
   if(! isContentDuplicate($contentInfoObj)){
   
    if($contentInfoObj->xtype != "youtube"){
     $contentInfoObj->clipThumbnailUrl = "http://localhost/learnnow/images/youtube.png";
	 }
	 else
	 {
	    $contentInfoObj->clipThumbnailUrl = getYoutubeThumbnailUrl($contentInfoObj->contentUrl);
	 }
     $uploads->save($contentInfoObj);
	 error_log("Saving upload");
	 error_log("Saving upload".$contentInfoObj->xtype);
   }
   else {
   
     $resultCode->setData("409","Sorry, Content already exists");
	 error_log("Rejecting upload");
   }
   
   
   $connection->close();
   
   echo json_encode($resultCode);
  

 ?>