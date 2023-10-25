<?php

function check_validation($required)
{
    $error = false;
    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            $error = true;
        }
    }

    if ($error) {
        return "is not valid";
    } else {
        return "valid";
    }
}
