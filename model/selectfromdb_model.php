<?php

include("../config.php");
include("checkvalidation_model.php");
include("encrypt_model.php");
include("decrypt_model.php");

if (isset($_POST['execute'])) {

    $required = array('select', 'from');

    $result_check_validation = check_validation($required);

    if ($result_check_validation === "valid") {

        $select = $_POST['select'];
        $from = $_POST['from'];

        $limit = $_POST['limit'];
        if (empty($limit)) {
            $limit = 5;
        } else {
            $limit = $_POST['limit'];
        }

        $format = $_POST['format'];

        $dataROW = '' . $select . '';

        if (isset($db)) {
            $query = "SELECT $select FROM $from LIMIT $limit";
            $result = pg_query($db, $query);
            if (!$result) {
                $response = [
                    'success' => false,
                    'message' => pg_last_error($db),
                ];
                echo json_encode($response);
            }

            $result_from_db;
            while ($row = pg_fetch_assoc($result)) {
                $result_from_db[] = $row[$dataROW];
            }

            $result_encrypt = encrypt($select, $format, $result_from_db);
            $data_encrypt = $result_encrypt['fields'][0]['data'];

            $result_decrypt = decrypt($select, $format, $data_encrypt);
            $data_decrypt = $result_decrypt['fields'][0]['data'];

            $response = [
                'success' => true,
                'result_from_db' => $result_from_db,
                'result_encrypt' => $data_encrypt,
                'result_decrypt' => $data_decrypt,
            ];
            echo json_encode($response);
        } else {
            $response = [
                'success' => false,
                'message' => "Error : Unable to open database\n",
            ];
            echo json_encode($response);
        }
    } else {
        $response = [
            'success' => false,
            'message' => "Silahkan lengkapi data.",
        ];
        echo json_encode($response);
    }
}
