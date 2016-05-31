<?php



//URL FORMATTER

function urlFormat($str) {
    //Strip all white Space
    $str = preg_replace('/\s*/', '', $str);
    //Convert the string to all lowercase
    $str = strtolower($str);
    $str = urlencode($str);
    return $str;
}


function formatDate($date) {
    $date = date("F j, Y, g:i a", strtotime($date));
    return $date;
}