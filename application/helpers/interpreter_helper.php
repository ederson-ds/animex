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
    $initialBold = false;
    $i = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == '*' && $initialBold) {
            if ($array[$i + 1] == '*') {
                $text .= '</b>';
                $initialBold = false;
            }
        } else if ($array[$i] == '*' && !$initialBold) {
            if ($array[$i + 1] == '*') {
                $text .= '<b>';
                $initialBold = true;
            }
        } else if ($array[$i] == '[') {
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

function generateDefaultText()
{
    return '""

{Summary}

{Powers and Stats}
**Tier**: 

**Powers and Abilities**:

**Attack Potency**:

**Speed**:

**Lifting Strength**:

**Striking Strength**:

**Durability**:

**Stamina**:

**Range**:

**Intelligence**:

**Weaknesses**:

**Key**:

{Gallery}';
}