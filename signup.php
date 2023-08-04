
<?php
$user = $_GET['user'];
$pass1 = $_GET['pass1'];
$pass2 = $_GET['pass2'];
$mail = "test@mail.com";

if($pass1 == $pass2){
	$DB = new SQLite3('stdData.db');
	if ($file = fopen("user/$user", "r")) {
		echo "User alerady exiest";
	}else{
		$file = fopen("user/$user", "w");
		fwrite($file, $pass1);
		fclose($file);
		$val = md5(rand());
		$DB->exec("INSERT INTO auth values(\"$val\", \"$user\", \"$mail\", \"$pass1\", \"\");");


		header("Location: http://127.0.0.1:8000/Compalin Management system.html");
		die();
	}
}else{
	echo "Password miss match !";
}
?>
