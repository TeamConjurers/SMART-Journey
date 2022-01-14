<?php 
// DB credentials.
define('DB_HOST','db4free.net');
define('DB_USER','teamconjurers');
define('DB_PASS','teamconjurers123');
define('DB_NAME','smartjourneydb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
