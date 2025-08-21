<?php




########################
#								         	           # 
# TelgeramID : Xderagon	              #
# Made BY Xderagon		                   # 
#													             # 
#TelgeramID : Xderagon	                       #
# Made BY Xderagon							       # 
#												                        # 
#												                            # 
################################

class XDeragon {
	
	public function sendMessage($text) : bool {
		$res = file_get_contents("https://api.telegram.org/bot".API_KEY."/SendMessage?chat_id=".CHAT_ID."&parse_mode=html&text=".urlencode($text)."&reply_markup=".json_encode(['inline_keyboard' =>[ [["text" =>"𝙊𝙬𝙣𝙚𝙧 🧑‍💻 ", "url"=>"https://t.me/DeragonTM"]], ], "resize_keyboard" =>true]));
		if($res === false) {
            return false;
          } else {
           return true;
         }
	}
    public function deviceinfo() : string {
    	return rtrim(explode(' ',$_SERVER["HTTP_USER_AGENT"])[4],')');
	}
    public  function ipinfo() : array {
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	    $remote  = $_SERVER['REMOTE_ADDR'];
	     if(filter_var($client, FILTER_VALIDATE_IP)){
			$ip = $client;
		   }else if(filter_var($forward, FILTER_VALIDATE_IP)){
		     $ip = $forward;
		   }else{
	  	   $ip = $remote;
			 }
			$ch = curl_init() ;
   		 curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/".$ip) ;
  	      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ;
		    $get = json_decode(curl_exec($ch), true);
		     if($get["status"] =="success") {
		     $city = $get["city"] ;
			 $country = $get["country"] ;
			  } else {
			     $city ="Unknown" ;
	         } 
   			 return array($ip,$country,$city) ;
     } 
	
} 
	
	
########################
#								         	           # 
# TelgeramID : Xderagon	              #
# Made BY Xderagon		                   # 
#													             # 
#TelgeramID : Xderagon	                       #
# Made BY Xderagon							       # 
#												                        # 
#												                            # 
################################



?>