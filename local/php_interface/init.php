<?php

define("DEFAULT_TEMPLATE_PATH", '/local/templates/.default');

//Функция обрезки строк
function cutStr($str, $lenght=50, $postfix='...')
{
    if (strlen($str) <= $lenght)
        return $str;

    $temp = substr($str, 0, $lenght);
    return substr($temp, 0, strrpos($temp, ' ')) . $postfix;
}

//Функция обрезки строк
function mbCutString($str, $lenght, $postfix = '...', $encoding = 'UTF-8')
{
    if (mb_strlen($str, $encoding) <= $lenght){
        return $str;
    }

    $tmp = mb_substr($str, 0, $lenght, $encoding);
    return mb_substr($tmp, 0, mb_strripos($tmp, ' ', 0, $encoding), $encoding) . $postfix;
}