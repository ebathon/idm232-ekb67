<?php
consoleMsg("database.php file LOADED!");

// Step 1: Create a Database Connection
$db_host = $APP_CONFIG ['database_host'];
$db_user = $APP_CONFIG ['database_user'];
$db_pass = $APP_CONFIG ['database_pass'];
$db_name = $APP_CONFIG ['database_name'];
$db_connection = @new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check the connection to make sure it is good
if ($db_connection->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
}
consoleMsg ('Success: A proper connection to MySQL was made.');
consoleMsg ('Host information: '.$mysqli->host_info);
consoleMsg ('Protocol version: '.$mysqli->protocol_version);

//$db_connection ->close();
?>
