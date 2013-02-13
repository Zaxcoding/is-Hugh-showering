<?php
$username="censored";
$password="censored";
$database="censored";

mysql_connect(localhost,$username,$password);

@mysql_select_db($database) or die( "Unable to select database");

$name=$_POST['name'];
$number=$_POST['number'];
$carrier = $_POST['carrier'];
$message = $_POST['message'];

if ((empty($name)) || (empty($number))) {
echo "Please include name and phone number.";
}

else if ($carrier == "verizon") {
$formatted_number = $number."@vtext.com";
mail("$formatted_number", "Is Hugh Showering?", "$message"); 

echo "Successfully added your number, $name. <br><br>Return to <a href=http://www.ishughshowering.com>Is Hugh Showering?</a>";
}

else if ($carrier == "tmobile") {
$formatted_number = $number."@tomomail.net";
mail("$formatted_number", "Is Hugh Showering?", "$message"); 

echo "Successfully added your number, $name. <br><br>Return to <a href=http://www.ishughshowering.com>Is Hugh Showering?</a>";
}

else if ($carrier == "sprint") {
$formatted_number = $number."@messaging.sprintpcs.com";
mail("$formatted_number", "Is Hugh Showering?", "$message"); 

echo "Successfully added your number, $name. <br><br>Return to <a href=http://www.ishughshowering.com>Is Hugh Showering?</a>";
}

else if ($carrier == "att") {
$formatted_number = $number."@txt.att.net";
mail("$formatted_number", "Is Hugh Showering?", "$message"); 

echo "Successfully added your number, $name. <br><br>Return to <a href=http://www.ishughshowering.com>Is Hugh Showering?</a>";
}

else if ($carrier == "virgin") {
$formatted_number = $number."@vmobl.com";
mmail("$formatted_number", "Is Hugh Showering?", "$message"); 

echo "Successfully added your number, $name. <br><br>Return to <a href=http://www.ishughshowering.com>Is Hugh Showering?</a>";
}



$query = "INSERT INTO Numbers VALUES ('','$name', '$number', '$formatted_number')";
mysql_query($query);



mysql_close();

?>