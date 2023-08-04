<?php
$db = new SQLite3("stdData.db");
$cookie = $_COOKIE['a'];
	$res = $db->query("SELECT * from auth where cookie=\"$cookie\";");
	$datac = $res->fetchArray();
	if($datac){
		$g1 = ($_GET['g1'] == True)? 1:0;
		$g2 = ($_GET['g2'] == True)? 1:0;
		$g3 = ($_GET['g3'] == True)? 1:0;
		$g4 = ($_GET['g4'] == True)? 1:0;
		$g5 = ($_GET['g5'] == True)? 1:0;
		$g6 = ($_GET['g6'] == True)? 1:0;
		$g7 = ($_GET['g7'] == True)? 1:0;
		$g8 = ($_GET['g8'] == True)? 1:0;
		$c = $_GET['comments'];
		$ID = $datac[0];
		$db->exec("INSERT INTO gym values(\"$ID\", \"$g1\", \"$g2\", \"$g3\",\"$g4\",\"$g5\",\"$g6\",\"$g7\",\"$g8\", \"$c\");commit;");
	}
	else{
	header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
}
?>	