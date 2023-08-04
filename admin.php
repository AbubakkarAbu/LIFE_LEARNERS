<?php
$db = new SQLite3("stdData.db");
	$cookie = $_COOKIE['a'];
	$res = $db->query("SELECT * from auth where cookie=\"$cookie\" and name=\"admin\";");
	$datac = $res->fetchArray();
	if($datac){
		//
	}
	else{
		header("Location: http://127.0.0.1:8000/checkbox.html");
	}
?>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row p-3 m-2 bg-dark rounded">
			<button class="btn btn-success m-2" onclick="getGym('gym')">gym</button>			
			<button class="btn btn-success m-2 " onclick="getGym('mess')">mess</button>
			<button class="btn btn-success m-2 " onclick="getGym('outing')">outing</button>
			<button class="btn btn-success m-2 " onclick="getGym('enter')">ent</button>
			<button class="btn btn-success m-2 " onclick="getGym('collegebus')">bus</button>
			<button class="btn btn-success m-2 " onclick="getGym('canteen')">canteen</button>			
		</div>
		<div class="container">
			<a id="result"></a>
		</div>
	</div>
</body>
<script>
	function httpGet(data){
    	var xmlHttp = new XMLHttpRequest();
    	xmlHttp.open( "GET", "getalldata.php?data="+data, false ); // false for synchronous request
    	xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    	xmlHttp.send( );
    	return xmlHttp.responseText;
	}
	function getGym(data){
		document.getElementById('result').innerHTML = httpGet(data);
	}
</script>
</html>