<?php

include("../config.php");
include("checkvalidation_model.php");
include("encrypt_model.php");
include("decrypt_model.php");

if (isset($_POST['query_status'])) {
    if (isset($db)) {
        $query = $_POST['query'];
        $result = pg_query($db, $query);
        if ($result) {
            $result_from_db;
            while ($row = pg_fetch_assoc($result)) {
                $result_from_db[] = $row;
            }

            $response = [
                'success' => true,
                'result_from_db' => $result_from_db,
                'message' => "Berhasil menggunakan UDF",
            ];
            echo json_encode($response);
        } else {
            $error = pg_last_error($db);

            // you need to adapt this regex
            if (preg_match('/duplicate/i', $error)) {
                echo "this value already exists";
            }
            // you need to adapt this regex
            elseif (preg_match('/relation/i', $error)) {
                echo '<script language="javascript">';
                echo 'alert("message successfully sent")';
                echo '</script>';
            } else {
                // different error
            }
        }
    }
}
