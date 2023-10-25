<?php

include("checkvalidation_model.php");
include("../config.php");

if (isset($_POST['connect'])) {

    $required = array('host', 'dbname', 'username', 'password', 'jenis_db');
    $result_check_validation = check_validation($required);


    if ($result_check_validation === "is not valid") {
        $response = [
            'success' => true,
            'message' => "Silahkan lengkapi data.",
        ];
        echo json_encode($response);
    } else {

        $_SESSION['connect'] = $_POST['connect'];
        $_SESSION['host'] = $_POST['host'];
        $_SESSION['dbname'] = $_POST['dbname'];
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['jenis_db'] = $_POST['jenis_db'];

        header("refresh: 0; url = http://ws10-worker.lab.tmt/simple-voltage-app-v2/view/formconfig.php");
    }
} else if (isset($_POST['disconnect'])) {
    if (isset($db)) {
        if ($db) {
            session_unset();
            session_destroy();
            if (!isset($_SESSION['connect'])) {
                $response = [
                    'success' => true,
                    'message' => "Koneksi database sudah terputus",
                ];
                echo json_encode($response);
            }
        }
    } else {
        $response = [
            'success' => false,
            'message' => "Koneksi database tidak ada",
        ];
        echo json_encode($response);
    }
}
