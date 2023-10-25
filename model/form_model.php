<?php

include("checkvalidation_model.php");
include("encrypt_model.php");
include("decrypt_model.php");

if (isset($_POST['encrypt'])) {

    $required = array('fieldname_encrypt', 'format_encrypt', 'data_encrypt');
    $result_check_validation = check_validation($required);

    if ($result_check_validation === "valid") {

        $fieldname_encrypt = $_POST['fieldname_encrypt'];
        $format_encrypt = $_POST['format_encrypt'];
        $data_encrypt = $_POST['data_encrypt'];

        $result_encrypt = encrypt($fieldname_encrypt, $format_encrypt, $data_encrypt);
        if (!isset($result_encrypt['code'])) {
            $data_encrypt = $result_encrypt['fields'][0]['data'];
            $response = [
                'success' => true,
                'fieldName' => $fieldname_encrypt,
                'data' => $data_encrypt
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
            'message' => "Silahkan lengkapi data.",
        ];
        echo json_encode($response);
    }
} else if (isset($_POST['decrypt'])) {

    $required = array('fieldname_decrypt', 'format_decrypt', 'data_decrypt');
    $result_check_validation = check_validation($required);

    if ($result_check_validation === "valid") {

        $fieldname_decrypt = $_POST['fieldname_decrypt'];
        $format_decrypt = $_POST['format_decrypt'];
        $data_decrypt = $_POST['data_decrypt'];

        $result_encrypt = decrypt($fieldname_decrypt, $format_decrypt, $data_decrypt);
        if (!isset($result_encrypt['code'])) {
            $data_decrypt = $result_encrypt['fields'][0]['data'];
            $response = [
                'success' => true,
                'fieldName' => $fieldname_decrypt,
                'data' => $data_decrypt
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
            'message' => "Silahkan lengkapi data.",
        ];
        echo json_encode($response);
    }
}
