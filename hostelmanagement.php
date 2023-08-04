<?php
$db = new SQLite3("stdData.db");
	$cookie = $_COOKIE['a'];
	$res = $db->query("SELECT * from auth where cookie=\"$cookie\";");
	$datac = $res->fetchArray();
	if($datac){
		$hm1 = ($_GET['hm1'] == True)? 1:0;
		$hm2 = ($_GET['hm2'] == True)? 1:0;
		$hm3 = ($_GET['hm3'] == True)? 1:0;
		$hm4 = ($_GET['hm4'] == True)? 1:0;
		$hm5 = ($_GET['hm5'] == True)? 1:0;
		$hm6 = ($_GET['hm6'] == True)? 1:0;
		$hm7 = ($_GET['hm7'] == True)? 1:0;
		$hm8 = ($_GET['hm8'] == True)? 1:0;
		$hm9 = ($_GET['hm9'] == True)? 1:0;
		$ID = $datac[0];
		$c = $_GET['comments'];
		$db->exec("INSERT INTO hostel values(\"$ID\", \"$hm1\", \"$hm2\", \"$hm3\",\"$hm4\",\"$hm5\",\"$hm6\",\"$hm7\",\"$hm8\",\"$hm9\",\"$c\");commit;");
	}
	else{
		header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
	}
?>	
