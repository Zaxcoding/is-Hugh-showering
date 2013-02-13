<?
$username="censored";
$password="censored";
$database="censored";

mysql_connect(localhost,$username,$password);

@mysql_select_db($database) or die( "Unable to select database");

$name=$_POST['name'];
$number=$_POST['number'];

$query = "INSERT INTO Numbers VALUES ('','$name', '$number')";
mysql_query($query);

mysql_close();

echo "Successfully added your number, $name. <br><br>Return to <a href=http://www.ishughshowering.com>Is Hugh Showering?</a>";
?>