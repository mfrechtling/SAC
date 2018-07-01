<?php 
include 'error.php';
/* Database credentials. Assuming you are running MySQL
* server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id649174_sacdbuser');
define('DB_PASSWORD', 'Fr3n0chy');
define('DB_NAME', 'id649174_sac');
 
/* Attempt to connect to MySQL database */
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
