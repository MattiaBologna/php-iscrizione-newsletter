<?php

function emailIsValid($email) {

    $isValid = null;


        if (str_contains($email, '@') && str_contains($email, '.')) {
            $isValid = true;
        } else {
            $isValid = false;
        }


    return $isValid;
}

?>