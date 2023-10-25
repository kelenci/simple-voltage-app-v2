<?php

include("../config.php");
include("checkvalidation_model.php");
include("encrypt_model.php");
include("decrypt_model.php");

if (isset($_POST['inserttodb'])) {

    $required = array('table_name', 'column_name', 'value', 'format');

    $result_check_validation = check_validation($required);

    if ($result_check_validation === "valid") {

        $table_name = $_POST['table_name'];
        $column_name = $_POST['column_name'];
        $value = array($_POST['value']);
        $format = $_POST['format'];

        if (isset($db)) {
            $result_encrypt = encrypt($column_name, $format, $value);
            if (!isset($result_encrypt['code'])) {
                $data_encrypt = $result_encrypt['fields'][0]['data'][0];
                $data_encrypt_to_array = explode(",", $data_encrypt);

                foreach ($data_encrypt_to_array as $value_encrypt) {
                    $clear_value_encrypt = str_replace('"', '', $value_encrypt);
                    $query = "INSERT INTO $table_name($column_name) values ('$clear_value_encrypt')";
                    $result = pg_query($db, $query);
                    if (!$result) {
                        $response = [
                            'success' => false,
                            'message' => pg_last_error($db),
                        ];
                        echo json_encode($response);
                        exit;
                    }
                }

                $response = [
                    'success' => true,
                    'table_encrypt' => $table_name,
                    'column_encrypt' => $column_name,
                    'data_encrypt' => $data_encrypt,
                    'message' => "Success insert into Database"
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
