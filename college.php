
<?php
$db = new SQLite3("stdData.db");
	$cookie = $_COOKIE['a'];
	$res = $db->query("SELECT * from auth where cookie=\"$cookie\";");
	$datac = $res->fetchArray();
	if($datac){
		$c1 = ($_GET['c1'] == True)? 1:0;
		$c2 = ($_GET['c2'] == True)? 1:0;
		$c3 = ($_GET['c3'] == True)? 1:0;
		$c4 = ($_GET['c4'] == True)? 1:0;
		$c5 = ($_GET['c5'] == True)? 1:0;
		$c6 = ($_GET['c6'] == True)? 1:0;
		$ID = $datac[0];
		$c = $_GET['comments'];
		$db->exec("INSERT INTO collegebus values(\"$ID\", \"$c1\", \"$c2\", \"$c3\",\"$c4\",\"c5\",\"c6\",\"$c\");commit;");
	}
	else{
		header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
	}
?>	
