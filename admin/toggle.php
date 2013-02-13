<?PHP
$username="censored";
$password="censored";
$database="censored";

mysql_connect(localhost,$username,$password);

@mysql_select_db($database) or die( "Unable to select database");


$query="SELECT * FROM Numbers";
$result=mysql_query($query);

$rows=mysql_numrows($result);

if (isset($_POST['Submit1'])) {

$selected_radio = $_POST['showering'];

if ($selected_radio == 'YES') {

$showering = 'YES';
$query = "INSERT INTO Showering (showering) VALUES ('1')";
mysql_query($query);

mysql_close();

$message = 'Hugh is showering!';
}


else if ($selected_radio == 'NO') {

$showering = 'NO';	
$query = "INSERT INTO Showering (showering) VALUES ('0')";
mysql_query($query);

mysql_close();


$message = 'Hugh is finished showering!';
}

$i=0;
while ($i < $rows)
{
	$formatted_number = mysql_result($result, $i, "Formatted Number");
 	mail("$formatted_number", "", "$message");
	$i++;
}

}

echo "Back to <a href=http://www.ishughshowering.com>Is Hugh Showering?</a>";

?>