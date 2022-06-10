<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_EMAIL', 'root');
define('DB_PASSWORD', '');
define('DB_FNAME', 'demo');
define('DB_LNAME', 'demo');
/* Attempt to connect to MySQL database */
$link = mysqli_connect("db.soic.indiana.edu","i494f17_team44","my+sql=i494f17_team44",  "i494f17_team44");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>