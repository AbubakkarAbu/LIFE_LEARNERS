<?php
$db = new SQLite3("stdData.db");
	$cookie = $_COOKIE['a'];
	$res = $db->query("SELECT * from auth where cookie=\"$cookie\";");
	$datac = $res->fetchArray();
	if($datac){
		$m1 = ($_GET['m1'] == True)? 1:0;
		$m2 = ($_GET['m2'] == True)? 1:0;
		$m3 = ($_GET['m3'] == True)? 1:0;
		$m4 = ($_GET['m4'] == True)? 1:0;
		$m5 = ($_GET['m5'] == True)? 1:0;
		$m6 = ($_GET['m6'] == True)? 1:0;
		$m7 = ($_GET['m7'] == True)? 1:0;
		$m8 = ($_GET['m8'] == True)? 1:0;
		$m9 = ($_GET['m9'] == True)? 1:0;
		$ID = $datac[0];
		$c = $_GET['comments'];
		$db->exec("INSERT INTO canteen values(\"$ID\", \"$m1\", \"$m2\", \"$m3\",\"$m4\",\"$m5\",\"$m6\",\"$m7\",\"$m8\",\"m9\",\"$c\");commit;");
	}
	else{
		header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
	}
?>	
