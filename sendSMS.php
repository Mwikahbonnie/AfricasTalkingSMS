<?php
require_once ('AfricasTalkingGateway.php');

// Set your app credentials
$username   = "mwikah";
$apikey     = "8af0ac854fe4f728d42f02faf290af0dcdd86f483b6163e2c611409e28706f97";


// Set the numbers you want to send to in international format
$recipients = "+254706922019, +254706959881, +254791205989";

// Set your message
$message    = "Mwikah wishes you a merry Christmas and a happy new year";

//Create a new Instance 
$gateway  = new AfricasTalkingGateway($username, $apikey);

try
{
    $results = $gateway->sendMessage($recipients, $message);

    foreach ($results as $result){

    echo "Number:" .$result->number ;
    echo "Status:" .$result->status ;
    echo "Messageid:" .$result->messageId ;
    echo "Cost:" .$result->cost."\n";

  }
}

catch (AfricasTalkingGatewayException $e)
{
    echo "Error Sending the message: ".$e->getMessage();
}