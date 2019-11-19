<?php

function verifyLocalhost()
{
    if ($_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs') {
        return '/animex/';
    }
    return '';
}
