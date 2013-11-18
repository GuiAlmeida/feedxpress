<?php

  include 'Account.php';
  include 'AccountStatus.php';

  require_once('../Services/Twilio.php'); // Loads the library

  //post parameters
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobile = $_POST['mobile'];


  
 
  // Your Account Sid and Auth Token from twilio.com/user/account

  $sid = "ACb671440773136ed1c7a05611e00a5ac7"; 
  $token = "c24f7de5251f8f31a08d52cfddd18851"; 

  $client = new Services_Twilio($sid, $token);
 
  $account = $client->accounts->create(array(
        "FriendlyName" => $email
    ));

  /*Get an activation code to send*/
  $activationCode = "6215";

  $acct = new Account();
  $acct->setData($email,$password,$mobile,AccountStatus::WAITING_ACTIVATION, $activationCode);
  $acct->setSpId($account->sid);

  //connect to db and persist
  $connection = new MongoClient(); // connects to localhost:27017
  $db = $connection->phonemate;

  // select a collection:
  $collection = $db->accounts;
  $collection->insert(json_encode($acct));

  $connection->close()
  

       
  header('Content-type: application/json');
  echo json_encode($acct);

?>

