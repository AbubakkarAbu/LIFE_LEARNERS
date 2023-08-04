<?php
$db = new SQLite3("stdData.db");
	$cookie = $_COOKIE['a'];
	$res = $db->query("SELECT * from auth where cookie=\"$cookie\";");
	$datac = $res->fetchArray();
	if($datac){
		$me1 = ($_GET['me1'] == True)? 1:0;
		$me2 = ($_GET['me2'] == True)? 1:0;
		$me3 = ($_GET['me3'] == True)? 1:0;
		$me4 = ($_GET['me4'] == True)? 1:0;
		$me5 = ($_GET['me5'] == True)? 1:0;
		$me6 = ($_GET['me6'] == True)? 1:0;
		$me7 = ($_GET['me7'] == True)? 1:0;
		$me8 = ($_GET['me8'] == True)? 1:0;
		$me9 = ($_GET['me9'] == True)? 1:0;
		$me10 = ($_GET['me10'] == True)? 1:0;
		$c = $_GET['comments'];
		$ID = $datac[0];
		$db->exec("INSERT INTO mess values(\"$ID\", \"$me1\", \"$me2\", \"$me3\",\"$me4\",\"$me5\",\"$me6\",\"$me7\",\"$me8\",\"$me9\",\"$me10\",\"$c\");commit;");
	}
	else{
	header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
}
?>	
