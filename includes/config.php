<?php 
// DB credentials.
define('DB_HOST','remotemysql.com');
define('DB_USER','8CIcE1JU9U');
define('DB_PASS','iM3TJxZKfY');
define('DB_NAME','8CIcE1JU9U');
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
