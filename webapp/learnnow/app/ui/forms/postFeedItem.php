<?php
   
   session_start();

   require_once dirname(__FILE__).'/../../realtime/database/DatabaseManager.php';
   require_once dirname(__FILE__).'/../../realtime/content/ContentManager.php';
   require_once dirname(__FILE__).'/../../realtime/content/FeedItem.php';
   require_once dirname(__FILE__).'/../../realtime/account/ActivationResultCode.php';

   $contentId = $_POST['contentId'];
   $groups = $_POST['groups'];
   $canLike = false;
   $canComment = false;
   $feedItem = null;
   $feeds = null; 
   
   $contentMgr = new ContentManager();
   $content = $contentMgr->findContent($contentId);
   
   if($content != null){
   
    error_log(json_encode($content));
   
   

   if(isset($_POST['canLike']))
   {
	 $canLike = true;
   }

   if(isset($_POST['canComment']))
   {
	 $canComment = true;
   }

   $dbManager = new DatabaseManager();
   $connection =$dbManager->getConnection(); 
   $db = $connection->learnnow;
   $feeds = $db->feeds;

   foreach ($groups as $group) {

	$feedItem = new FeedItem();
    $feedItem->setData($contentId,$_SESSION['domain'],$group,$canLike,$canComment);
	$feedItem->setContent($content);
    $feeds->save($feedItem);
   }

   $connection->close();
   } 
   $resultCode = new ActivationResultCode(); 
   $resultCode->setData("200","OK");
   sleep(1);
   echo json_encode($resultCode);





?>
