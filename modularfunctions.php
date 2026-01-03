<?php


function substrwords($text, $maxchar, $end='') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
function redirectTo($page, $lang = null)
{
    if (!$lang) {
        echo '<html><script language="javascript">var page = "' . $page . '"; top.location = page; </script></html>';
    } else { echo '<html><script language="javascript">var page = "' . $page . '?Locale=' . $lang . '"; top.location = page; </script></html>'; }
}
$list_ua = <<< ua
Mozilla/5.0 (Windows NT 6.2; WOW64; rv:18.0) Gecko/20100101 Firefox/18.0
Mozilla/5.0 (Windows NT 6.2; rv:18.0) Gecko/20100101 Firefox/18.0
Mozilla/5.0 (Windows NT 6.2; rv:16.0) Gecko/20100101 Firefox/16.0
Mozilla/5.0 (Windows NT 6.2; rv:15.0) Gecko/20100101 Firefox/15.0
Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17
Mozilla/5.0 (Macintosh; Intel Mac OS X 1082) AppleWebKit/537.11 (KHTML like Gecko) Chrome/23.0.1271.10 Safari/537.11
Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)
Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)
Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.2; Trident/5.0)
Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; Trident/4.0)
Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02
Opera/9.80 (Windows NT 6.2; U; en) Presto/2.10.289 Version/12.01
Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.13+ (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2
Mozilla/5.0 (Macintosh; Intel Mac OS X 1083) AppleWebKit/536.28.4 (KHTML like Gecko) Version/6.0.3 Safari/536.28.4
Mozilla/5.0 (Windows NT 6.1; rv:15.0) Gecko/20120919 Firefox/15.1.1 PaleMoon/15.1.1
ua;
function get_ua()
{
    global $list_ua;
    $list = explode("\n", $list_ua);
    $num = count($list) - 1;
    return trim($list[rand(0, $num)]);
}

function getIp(){
	foreach(array('HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR','HTTP_X_FORWARDED','HTTP_X_CLUSTER_CLIENT_IP','HTTP_FORWARDED_FOR','HTTP_FORWARDED','REMOTE_ADDR')as $key)
	{
		if(array_key_exists($key,$_SERVER)===true)
		{
			foreach(explode(',',$_SERVER[$key])as $IPaddress){$IPaddress=trim($IPaddress);
                if(filter_var($IPaddress,FILTER_VALIDATE_IP,FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)!==false){
                    return $IPaddress;
                }
            }
        }
    }
}

function clientData($ss){
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_URL,"http://www.geoplugin.net/json.gp?ip=".getIp());
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
	curl_setopt($ch,CURLOPT_TIMEOUT,400);
	$json=curl_exec($ch);curl_close($ch);
	if($json==false){
		return $_SERVER['REMOTE_ADDR'];
	}
	$code=json_decode($json);
	switch($ss){
	case "code":$str=$code->geoplugin_countryCode;
	break;
	case "country":$str=$code->geoplugin_countryName;
	break;
	case "city":$str=$code->geoplugin_city;
	break;
	case "state":$str=$code->geoplugin_region;
	break;
	case "timezone":$str=$code->geoplugin_timezone;
	break;
	case "currency":$str=$code->geoplugin_currencyCode;
	break;
	default:$str=$code->geoplugin_request;
}
return $str;
}

function browsername()
{
    $browserName = $_SERVER['HTTP_USER_AGENT'];

    if (strpos(strtolower($browserName), "safari/") and strpos(strtolower($browserName), "opr/")) {
        $browserName = "Opera";
    } elseif (strpos(strtolower($browserName), "safari/") and strpos(strtolower($browserName), "chrome/")) {
        $browserName = "Chrome";
    } elseif (strpos(strtolower($browserName), "msie")) {
        $browserName = "Internet Explorer";
    } elseif (strpos(strtolower($browserName), "firefox/")) {
        $browserName = "Firefox";
    } elseif (strpos(strtolower($browserName), "safari/") and strpos(strtolower($browserName), "opr/")==false and strpos(strtolower($browserName), "chrome/")==false) {
        $browserName = "Safari";
    } else { $browserName = "Unknown"; }

    return $browserName;
}

function os_info($uagent)
{
    // the order of this array is important
    global $uagent;
    $oses   = array(
        'Win311' => 'Win16',
        'Win95' => '(Windows 95)|(Win95)|(Windows_95)',
        'WinME' => '(Windows 98)|(Win 9x 4.90)|(Windows ME)',
        'Win98' => '(Windows 98)|(Win98)',
        'Win2000' => '(Windows NT 5.0)|(Windows 2000)',
        'WinXP' => '(Windows NT 5.1)|(Windows XP)',
        'WinServer2003' => '(Windows NT 5.2)',
        'WinVista' => '(Windows NT 6.0)',
        'Windows 7' => '(Windows NT 6.1)',
        'Windows 8' => '(Windows NT 6.2)',
        'WinNT' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
        'OpenBSD' => 'OpenBSD',
        'SunOS' => 'SunOS',
        'Ubuntu' => 'Ubuntu',
        'Android' => 'Android',
        'Linux' => '(Linux)|(X11)',
        'iPhone' => 'iPhone',
        'iPad' => 'iPad',
        'MacOS' => '(Mac_PowerPC)|(Macintosh)',
        'QNX' => 'QNX',
        'BeOS' => 'BeOS',
        'OS2' => 'OS/2',
        'SearchBot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)'
    );
    $uagent = strtolower($uagent ? $uagent : $_SERVER['HTTP_USER_AGENT']);
    foreach ($oses as $os => $pattern)
        if (preg_match('/' . $pattern . '/i', $uagent))
            return $os;
    return 'Unknown';
}

function issetor(&$var, $default = false) {
    return isset($var) ? strip_tags($var) : strip_tags($default);
}



function systemInfo($ipAddress) {
    $systemInfo = array();

    $ipDetails = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ipAddress), true);
    $systemInfo['city'] = $ipDetails['geoplugin_city'];
    $systemInfo['region'] = $ipDetails['geoplugin_region'];
    $systemInfo['country'] = $ipDetails['geoplugin_countryName'];

    $systemInfo['useragent'] = $_SERVER['HTTP_USER_AGENT'];
    $systemInfo['os'] = os_info($systemInfo['useragent']);
    $systemInfo['browser'] = browsername();

    return $systemInfo;
}

function bankDetails($cardNumber) {
    $bankDetails = array();
    $cardBIN = substr($cardNumber, 0, 6);
    $bankDetails = json_decode(file_get_contents("https://lookup.binlist.net/" . trim($cardBIN)), true);
    $bankDetails['bin'] = $cardBIN;
    return $bankDetails;
}
function getBrowser() {
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
	function c1i3() {
    $id = '1589';
	}
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}


?>