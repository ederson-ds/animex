<?php

function verifyLocalhost()
{
    if ($_SERVER['DOCUMENT_ROOT'] == 'C:/xampp/htdocs') {
        return '/animex/';
    }
    return '';
}

function getPersonaImage($id)
{
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . verifyLocalhost() . '/uploads/' . $id . '.png')) {
        return base_url() . 'uploads/' . $id . '.png';
    }
    return base_url() . 'uploads/' . $id . '.jpg';
}

function getSerieImage($id)
{
    if (file_exists($_SERVER['DOCUMENT_ROOT'] . verifyLocalhost() . '/uploads/series/' . $id . '.png')) {
        return base_url() . 'uploads/series/' . $id . '.png';
    }
    return base_url() . 'uploads/series/' . $id . '.jpg';
}
