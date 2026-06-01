<?php

function sanitizeInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateInput($data)
{
    if (empty($data)) {
        return false;
    }
    return true;
}

?>