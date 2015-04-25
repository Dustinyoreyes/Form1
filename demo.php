<?php

//CONTSTANT: define(name, value, case-insensitive)
define('DB_NAME', 'forms1');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

//We store our connection into a variable so we can test if it is working. 
//Conecting to your database, like logging onto the computer.
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
if (!$link) {
	die('Could not connect:'. mysql_error());
}
//Select the database you're going to work with. 
$db_selected = mysql_select_db (DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': '. mysql_error());
}
echo 'Connected successfully';

//POST is a query used to retrieve a value. 
$value = $_POST ['input1'];
$value2 = $_POST ['input2'];
//$value = $_POST ['lastName'];

//These are MySQL commands.
$sql = "INSERT INTO demo (input1, input2) VALUES ('$value', '$value2')";

if(!mysql_query($sql)) {
	die('Error: ' . mysql_error());
	}

mysql_close();

?>