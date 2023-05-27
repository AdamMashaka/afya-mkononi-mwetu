<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON What would you want to check \n";
    $response .= "1.  Jisajil \n";
    $response .= "2. My phone number";
     $response .="3. ingiza kiasi";
} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Choose account information you want to view \n";
    $response .= "1. Jisajili \n";

} else if ($text == "2") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = "END Your phone number is ".$phoneNumber;
  } else if ($text == "3") {
   // Business logic for first level response
   // This is a terminal request. Note how we start the response with END
 $response = "END Your phone number is ".$ingizaKiasi;
} else if($text == "1*1") { 
    // This is a second level response where the user selected 1 in the first instance
    $accountNumber  = "ACC1001";

    // This is a terminal request. Note how we start the response with END
    $response = "END Your account number is ".$phoneNumber;
}

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;
