<?php

define('DB_SERVER', 'ec2-34-200-72-77.compute-1.amazonaws.com');
define('DB_USERNAME', 'mscadanwunvapm');
define('DB_PASSWORD', 'c61a80cb7559f9f131577c427abca1c218470de15f12ac8a82c2cd8b10a1f4bb');
define('DB_NAME', 'dec6cnnpb551m6');
 
/* Attempt to connect to PostgreSQL database */
$conn = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
or die('Could not connect1: ' . pg_last_error());

?>
