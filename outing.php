<?php
	$db = new SQLite3("stdData.db");
	$cookie = $_COOKIE['a'];
	$res = $db->query("SELECT * from auth where cookie=\"$cookie\";");
	$datac = $res->fetchArray();
	if($datac){
		$o1 = ($_GET['o1'] == True)? 1:0;
		$o2 = ($_GET['o2'] == True)? 1:0;
		$o3 = $_GET['o3'];
		$ID = $datac[0];
		$db->exec("INSERT INTO outing values(\"$ID\", \"$o1\", \"$o2\", \"$o3\");commit;");
	}
	else{
		header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
	}
?>	
