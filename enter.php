<?php
	$db = new SQLite3("stdData.db");
	$cookie = $_COOKIE['a'];
	$res = $db->query("SELECT * from auth where cookie=\"$cookie\";");
	$datac = $res->fetchArray();
	if($datac){
		$e1 = ($_GET['e1'] == True)? 1:0;
		$e2 = ($_GET['e2'] == True)? 1:0;
		$e3 = ($_GET['e3'] == True)? 1:0;
		$e4 = ($_GET['e4'] == True)? 1:0;
		$e5 = ($_GET['e5'] == True)? 1:0;
		$ID = $datac[0];
		$c = $_GET['comments'];
		$db->exec("INSERT INTO enter values(\"$ID\", \"$e1\", \"$e2\", \"$e3\",\"$e4\",\"$e5\",\"$c\");commit;");
	}
	else{
		header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
	}
?>	
