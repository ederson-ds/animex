<?php

function generateText($description)
{
    $text = '';
    $arr = preg_split("/\r\n|\n|\r/", $description);
    foreach ($arr as $value) {
        $text .= $value . '<br>';
    }

    $array = str_split($text);
    $text = '';
    $i = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == '[') {
            if ($array[$i + 1] == '[') {
                $text .= '<b>';
            } else if ($array[$i - 1] != '[') {
                $text .= '<i>';
            }
        } else if ($array[$i] == ']') {
            if ($array[$i + 1] == ']') {
                $text .= '</b>';
            } else if ($array[$i - 1] != ']') {
                $text .= '</i>';
            }
        } else if ($array[$i] == '{') {
            $text .= '<div class="header">';
        } else if ($array[$i] == '}') {
            $text .= '</div>';
        } else {
            $text .= $array[$i];
        }
    }

    return $text;
}
