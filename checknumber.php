<?php

// Include the Twilio-PHP library from http://twilio.com/docs/libraries
// Once downloaded move it into the folder containing this file.
require "Services/Twilio.php";

// Set your AccountSid and AuthToken here.
// Each can be found at http://www.twilio.com/user/account
$Sid = "ACb27d81099aaf00022b5d45cb1e272056";
$Token = "d5f628da026be3aef1e44c9aa2418dad";


$client = new Lookups_Services_Twilio($sid, $token);

// Make a call to the Lookup API
$number = $client->phone_numbers->get("0421472182");

// Print the nationally formatted phone number
echo $number->national_format . "\r\n"; // => (510) 867-5309
?>