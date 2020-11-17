<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbname = "modul3_crud";
    $dbpass= "";

    $conn = mysql_connect($dbhost,$dbuser,$dbpass,$dbname);
    if ($conn->connect_error) {
        die("connection failed:" . $conn->connect_error);
    }
?>
