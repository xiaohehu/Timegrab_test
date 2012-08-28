<?php

$con = mysql_connect("localhost","root","123456");
// if connection to the database fails an error is thrown
if (!$con){
die('Could not connect: ' . mysql_error());
}
// selecting the database for the connection created
mysql_select_db("timegrab_test", $con);
// storing the query in a variable called $query

?>

