<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple App Voltage V.2</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<?php

include("../config.php");

if (isset($db)) {
    if ($db) {
        echo "Opened database successfully\n";
        echo "<br>";
        echo "Server : " . $_SESSION['host'];
        echo "<br>";
        echo " DBName : " . $_SESSION['dbname'];
    }
} else {
    echo "Error : Unable to open database\n";
}

?>