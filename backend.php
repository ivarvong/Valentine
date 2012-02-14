<?php 

if (!function_exists('apc_exists')) {
        function apc_exists($key) { return (boolean)apc_fetch($key); }
}
    
function genRandomString() {
    $length = 6;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $string = '';    
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters))];
    }
    return $string;
}

$file = 'log.txt'; 
$arr= $_POST; 

if ($_POST["method"] == "set") {

	$foundNewKey = false;
	while ($foundNewKey == false) {
		$newKey = genRandomString();
		if (!apc_exists($newKey)) {	
			$foundNewKey = true;
		}
	}
	apc_store($newKey, $_POST["data"]);
	echo $newKey;

} 

if ($_POST["method"] == "get") {
	$k = $_POST["key"];
	if (apc_exists($k)) {
		echo apc_fetch($k);
	} else {
		echo "invalid key";
	}
} 
