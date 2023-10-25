<?php

function decrypt($fieldname, $format, $data)
{
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
                    "fieldName": "' . $fieldname . '",
                    "format": "' . $format . '",
                    "data": ' . json_encode($data) . '
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
    $stringtoJSON = json_decode($api_result, True);
    return $stringtoJSON;
}
