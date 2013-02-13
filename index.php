<?php

$username="censored";
$password="censored";
$database="censored";

mysql_connect(localhost,$username,$password);

@mysql_select_db($database) or die( "Unable to select database");

$query="SELECT * FROM Showering";
$result=mysql_query($query);

$rows=mysql_numrows($result);

$yesno=mysql_result($result, $rows-1, "showering");

if ($yesno)
	include("yes.html");
else
	include("no.html");
?>