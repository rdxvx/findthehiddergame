<?php
error_reporting(0);
// Desarrollado por Lobo (@l0b0z)
// Creador único de está clase

 function getStr($string, $start, $end){
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
    }
	
	function find_text($text, $in){
$k2HjS9_09 = explode($text, $in);
$k2HjS9_08 = $k2HjS9_09[1];

if($k2HjS9_08 != ''){
return 1;
} else {
return 0;
}

}
 class l0b0z {
	 
	 
	 function kLmns4v3($akrlilvuo, $pote3x4t){
		 
		 if ( empty ($akrlilvuo && $pote3x4t) ) {
			 
			 return 0;
			 
		 } else {
			 
			 $klp0Dap = fopen($akrlilvuo , 'a+'); 
			 fwrite($klp0Dap, "".$pote3x4t."");
			 fclose($klp0Dap);
			 
		 } 
		 
	 }
	 
	 
	 
	 function l0b0z_security($only, $only2, $cloudflare){
		 if($cloudflare == ''){
		 $KjkYGuhUu8yg = $_SERVER['REMOTE_ADDR'];
		 } else {
	     $KjkYGuhUu8yg = $_SERVER["HTTP_CF_CONNECTING_IP"];
		 }
		 $KjkYGuhUu8y3 = $_SERVER['HTTP_USER_AGENT'];
		 
		 if ( empty ($KjkYGuhUu8yg && $KjkYGuhUu8y3) ) {
			 
			 return 0;
			 
		 } else {
			 
			 if ($only2 == ''){
				 
				 $obtener = @file_get_contents('http://ip-api.com/php/'.$KjkYGuhUu8yg.'');
				 
				 $country = getStr($obtener, '"country";s:8:"','"');
				 
				 if($country == $only){
					return 1; 
				 } else {
					return 0;
				 }
			 } else {
				 $obtener = @file_get_contents('http://ip-api.com/php/'.$KjkYGuhUu8yg.'');
				 
				 $country = getStr($obtener, '"country";s:8:"','"');
				 
				 if($country == $only or $country == $only2) {
					 return 1;
				 } else {
					 return 0;
				 }
				 
				 
			 }
			 
			 
			 
			 
			 
		 }
		 
		 
		 
		 
	 }
	 
	 
	 
 }


?>