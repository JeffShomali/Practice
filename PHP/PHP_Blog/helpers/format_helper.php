<?php

/**
 * [formatDate function is responsible for display date with different order]
 * @param  [$date variable]
 * @return [date object ]
 */
function formatDate($date){

     return date('F j, Y, g:i a', strtotime($date));
}

/**
 * [shortenText function is responsible to shows post summery]
 * @param  [text]    [passing by admin]
 * @param  integer   [passing by admin]
 * @return [text]    [description]
 */
function shortenText($text, $chars = 450) { // if didnt pass integer 450 word shows by default
     $text = $text." ";
     $text = substr($text, 0, $chars); //return part of string
     $text = substr($text, 0,  strrpos($text, ' '));
     $text = $text."...";
     return $text;
}
