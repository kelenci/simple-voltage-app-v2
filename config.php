<?php

session_start();

if (isset($_SESSION['connect'])) {
    $host        = "host = " . $_SESSION['host'];
    $port        = "port = 5432";
    $dbname      = "dbname = " . $_SESSION['dbname'];
    $credentials = "user = " . $_SESSION['username'] . " password= " . $_SESSION['password'];

    $db = pg_connect("$host $port $dbname $credentials");
}
