<?php
	$db = new SQLite3("stdData.db");
	$cookie = $_COOKIE['a'];
	$RAN = md5(rand());
	$db->exec("UPDATE auth set cookie=\"$RAN\" WHERE cookie=\"$cookie\";");
	header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
?>