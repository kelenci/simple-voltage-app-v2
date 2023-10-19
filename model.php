<?php

if (isset($_POST['encrypt'])) {

    $fieldname_encrypt = $_POST['fieldname_encrypt'];
    $format_encrypt = $_POST['format_encrypt'];
    $data_encrypt = $_POST['data_encrypt'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://voltage-pp-0000.lab.tmt/vibesimple/rest/v1/protect-fields',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POSTFIELDS => '{
        "fields": [
                {
                    "fieldName": "' . $fieldname_encrypt . '",
                    "format": "' . $format_encrypt . '",
                    "data": ' . json_encode($data_encrypt) . '
                }
            ]
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: VSAuth vsauth_method="sharedSecret",vsauth_data="bGludXgxMjM=",vsauth_identity_ascii="user@mailserver.lab.tmt",vsauth_version="200"'
        ),
    ));

    $api_result = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($api_result);

    if (isset($result->code)) {
        $response = [
            'success' => false,
            'message' => $result->message,
        ];
        echo json_encode($response);
    } else {
        $fields = $result->fields[0];
        $response = [
            'success' => true,
            'fieldName' => $fields->fieldName,
            'data' => $fields->data
        ];
        echo json_encode($response);
    }
} else if (isset($_POST['decrypt'])) {

    $fieldname_decrypt = $_POST['fieldname_decrypt'];
    $format_decrypt = $_POST['format_decrypt'];
    $data_decrypt = $_POST['data_decrypt'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://voltage-pp-0000.lab.tmt/vibesimple/rest/v1/access-fields',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POSTFIELDS => '{
        "fields": [
                {
                    "fieldName": "' . $fieldname_decrypt . '",
                    "format": "' . $format_decrypt . '",
                    "data": ' . json_encode($data_decrypt) . '
                }
            ]
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: VSAuth vsauth_method="sharedSecret",vsauth_data="bGludXgxMjM=",vsauth_identity_ascii="user@mailserver.lab.tmt",vsauth_version="200"'
        ),
    ));

    $api_result = curl_exec($curl);
    curl_close($curl);

    $result = json_decode($api_result);

    if (isset($result->code)) {
        $response = [
            'success' => false,
            'message' => $result->message,
        ];
        echo json_encode($response);
    } else {
        $fields = $result->fields[0];
        $response = [
            'success' => true,
            'fieldName' => $fields->fieldName,
            'data' => $fields->data
        ];
        echo json_encode($response);
    }
}
