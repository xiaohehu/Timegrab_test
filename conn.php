<?php

$con = mysql_connect("instance25358.db.xeround.com:8734","xiaohehu","19881103");
// if connection to the database fails an error is thrown
if (!$con){
die('Could not connect: ' . mysql_error());
}
// selecting the database for the connection created
mysql_select_db("Timegrab_test", $con);
// storing the query in a variable called $query

?>

