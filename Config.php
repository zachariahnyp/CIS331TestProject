<?php

/* Use to connect to dbstudent
 * with user/password
 */

$host = "localhost";
$username = "znyp1";
$password = "muffin1";
$db_name = "dbstudent";

$db = mysqli_connect($host, $username, $password, $db_name);

$connection_error = $db->connect_error;

if ($connection_error != null){
    echo "<p>Error connecting to database: $connection_error</p>";
    exit();
}

