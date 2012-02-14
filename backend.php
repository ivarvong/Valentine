<?php 
include("db.php");
$con = mysql_connect("localhost",$dbuser,$dbpass);
mysql_select_db("valentine", $con);    
    
function db_get($k) {
	$sql = "SELECT * FROM lookup WHERE k = '$k'";
	$result = mysql_query($sql);
	if (!$result) { die($message); }
	$row = mysql_fetch_assoc($result);
	if ($row["data"]) {
		return $row["data"];
	} else {
		return "error";
	}
}

function db_key_exists($k) {
	$sql = "SELECT * FROM lookup WHERE k = '$k'";
	$result = mysql_query($sql);
	if (mysql_num_rows($result) == 0) {
		return false;
	} else {	
		return true;
	}
}

function genRandomString() {
    $length = 6;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = '';    
    for ($p=0; $p<$length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters))];
    }
    return $string;
}

$file = 'log.txt';

if ($_POST["method"] == "set") {

	$foundNewKey = false;
	while ($foundNewKey == false) {
		$newKey = genRandomString();
		if (!db_key_exists($newKey)) {	
			$foundNewKey = true;
		}
	}

	$data = mysql_real_escape_string($_POST["data"]);

	$sql="INSERT INTO lookup (k, data) VALUES ('$newKey', '$data')";
	$result = mysql_query($sql);
	if (!$result) { die($message); }

	echo $newKey;
	
	$fp = fopen("log.txt", 'a');  
	fwrite($fp, date("Y,m,d,H,i,s,")."$newKey\n");
	fclose($fp); 

} 

if ($_POST["method"] == "get") {
	$k = mysql_real_escape_string($_POST["key"]);
	echo db_get($k);
} 
