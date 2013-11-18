<?php

   require_once  dirname(__FILE__).'/../../realtime/database/DatabaseManager.php';
   require_once  dirname(__FILE__).'/../../realtime/account/ActivationResultCode.php';

   error_log("Entering Content Composed Post");
   $resultCode = new ActivationResultCode();
   $resultCode->setData("200","OK");   
   $contentInfo = $_POST['content'];
   $contentInfoObj =  $contentInfo;
  
   
   $dbManager = new DatabaseManager();
   $connection =$dbManager->getConnection(); 
   $db = $connection->learnnow;
   $composed = $db->composed;
   
   
   $composed->save($contentInfoObj);
   error_log("Saving upload");
   error_log("Saving upload".$contentInfoObj["xtype"]);
  
      
   $connection->close();
   
   echo json_encode($resultCode);
  

 ?>