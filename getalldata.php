<!DOCTYPE html>
<html>
<head>
<style>
	table,th{
  border: 1px solid black;
  border-radius: 10px;
  width: 1200px;
}
td,th{
	width: 100px;
	height: 30px;
}
</style>
</head>
<body>
</body>
</html>
<table>
	<tead>
  <tr>
    <th>Id</th>
    <th>Rules_are_Strict</th>
    <th>Ac_Problem</th>
    <th>Limited_Equipment</th>
    <th>Cleaning_Problem</th>
    <th>Sort_Circuit</th>
    <th>Work_time_is_Limited</th>
    <th>Improper_Guidence</th>
    <th>Partiallity_Issue</th>
    <th>Comments</th>
  </tr>
</tead>
  <tr>
</table>
<?php
	$db = new SQLite3("stdData.db");
	$cookie = $_COOKIE['a'];
	$tn = $_GET['data'];
	$res = $db->query("SELECT * from $tn;");
	while($r = $res->fetchArray()) {
	echo "<table><tr>	
		<td>".$r["id"]."</td>
    	<td>".$r["rs"]."</td>
    	<td>".$r["ac"]."</td>
    	<td>".$r["le"]."</td>
    	<td>".$r["clean"]."</td>
    	<td>".$r["sort"]."</td>
    	<td>".$r["time"]."</td>
    	<td>".$r["im"]."</td>
    	<td>".$r["par"]."</td>
    	<td>".$r["c"]."</td>
    </tr>
    </table>";
	}
?>	