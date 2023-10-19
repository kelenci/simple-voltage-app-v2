<?php

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];

$path = isset($_SERVER['HTTP_X_ORIGINAL_PATH']) ? $_SERVER['HTTP_X_ORIGINAL_PATH'] : dirname($_SERVER['PHP_SELF']);

$baseUrl = rtrim($protocol . "://" . $host . $path, '/');
header("Location: " . $baseUrl . "/form.php");
exit;
