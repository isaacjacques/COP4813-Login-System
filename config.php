<?php
$db_host = 'localhost';
$db_name = 'cop4813_assignment5';
$db_user = 'root';
$db_pass = 'Passw0rd!369';

function get_db_connection() {
    global $db_host, $db_user, $db_pass, $db_name;
    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if ($mysqli->connect_errno) {
        die('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
    return $mysqli;
}

?>