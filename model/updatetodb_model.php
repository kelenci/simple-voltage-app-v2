<?php

include("../config.php");
include("checkvalidation_model.php");
include("encrypt_model.php");
include("decrypt_model.php");

if (isset($_POST['updateencrypttodb'])) {

    $required = array('table_name', 'column_name', 'where_conditional', 'format');
    $result_check_validation = check_validation($required);

    if ($result_check_validation === "valid") {

        $table_name = $_POST['table_name'];
        $column_name = $_POST['column_name'];
        $where_conditional = $_POST['where_conditional'];
        $format = $_POST['format'];

        if (isset($db)) {

            $query = "SELECT $column_name FROM $table_name WHERE $where_conditional";
            $result = pg_query($db, $query);
            if (!$result) {
                $response = [
                    'success' => false,
                    'message' => pg_last_error($db),
                ];
                echo json_encode($response);
                exit;
            }

            $result_from_db;
            while ($row = pg_fetch_assoc($result)) {
                $result_from_db[] = $row['' . $column_name . ''];
            }

            $result_encrypt = encrypt($column_name, $format, $result_from_db);
            if (!isset($result_encrypt['code'])) {
                $data_encrypt = $result_encrypt['fields'][0]['data'][0];
                $query = "UPDATE $table_name SET $column_name = '$data_encrypt' WHERE $where_conditional";
                $result = pg_query($db, $query);
                if (!$result) {
                    $response = [
                        'success' => false,
                        'message' => pg_last_error($db),
                    ];
                    echo json_encode($response);
                }

                $response = [
                    'success' => true,
                    'before_encrypt' => $result_from_db[0],
                    'after_encrypt' => $data_encrypt,
                    'message' => "Success update data to encrypt"
                ];
                echo json_encode($response);
            } else {
                $response = [
                    'success' => false,
                    'message' => $result_encrypt['message'],
                ];
                echo json_encode($response);
            }
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
} else if (isset($_POST['updatedecrypttodb'])) {

    $required = array('table_name_decrypt', 'column_name_decrypt', 'where_conditional_decrypt', 'format_decrypt');
    $result_check_validation = check_validation($required);

    if ($result_check_validation === "valid") {

        $table_name = $_POST['table_name_decrypt'];
        $column_name =  $_POST['column_name_decrypt'];
        $where_conditional = $_POST['where_conditional_decrypt'];
        $format =  $_POST['format_decrypt'];

        if (isset($db)) {

            $query = "SELECT $column_name FROM $table_name WHERE $where_conditional";
            $result = pg_query($db, $query);
            if (!$result) {
                $response = [
                    'success' => false,
                    'message' => pg_last_error($db),
                ];
                echo json_encode($response);
                exit;
            }

            $result_from_db;
            while ($row = pg_fetch_assoc($result)) {
                $result_from_db[] = $row['' . $column_name . ''];
            }

            $result_decrypt = decrypt($column_name, $format, $result_from_db);
            if (!isset($result_decrypt['code'])) {
                $data_decrypt = $result_decrypt['fields'][0]['data'][0];
                $query = "UPDATE $table_name SET $column_name = '$data_decrypt' WHERE $where_conditional";
                $result = pg_query($db, $query);
                if (!$result) {
                    $response = [
                        'success' => false,
                        'message' => pg_last_error($db),
                    ];
                    echo json_encode($response);
                }

                $response = [
                    'success' => true,
                    'before_decrypt' => $result_from_db[0],
                    'after_decrypt' => $data_decrypt,
                    'message' => "Success update data to decrypt"
                ];
                echo json_encode($response);
            } else {
                $response = [
                    'success' => false,
                    'message' => $result_encrypt['message'],
                ];
                echo json_encode($response);
            }
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
