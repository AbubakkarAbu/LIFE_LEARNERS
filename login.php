<?php
$user = $_GET['mail'];
$pass = $_GET['pass'];

if($user == "" or $pass == ""){
	header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
	die();
}

$db = new SQLite3('stdData.db');
$res = $db->query("SELECT * from auth where name=\"$user\" and pass=\"$pass\";");
$row = $res->fetchArray();
if($row){
	$cv = (rand());
	setcookie("a", $cv);
	$db->exec("UPDATE auth set cookie=\"$cv\" WHERE name=\"$user\" and pass=\"$pass\";commit;");
	$db->close();
	header("Location: http://127.0.0.1:8000/checkbox.html");
	die();
}else{
	header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
	echo "<script>alert(\"Invalid UserName OR Password\");</script>";
}

/*
if ($file = fopen("user/$user", "r")) {
			$pass1 = fgets($file);
			fclose($file);
			if($pass1 == "$pass\n"){
				//echo "Login correct";
				setcookie("up", $user);
				header("Location: http://127.0.0.1:8000/checkbox.html");
				die();
			}else{
				 //window.onload = function () { alert("Invalid"); }
				header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
				echo "<script>alert(\"Invalid UserName OR Password\");</script>";
			}
}else{
	echo "<script>alert(\"Invalid UserName OR Password\")</script>";
		header("Location: http://127.0.0.1:8000/Compalin%20Management%20system.html");
}
echo "hi";*/
?> 
