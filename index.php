<?php

$version = '7';
$message = '<h1>Je fais du php' . $version . '</h1>';
echo $message;

$result = '<ul>';
for ($i = -1222328; $i <= 23456; $i +=7) {
    if ($i % 5 ==0) {
        $result .= '<li>' . $i . '</li>';
    }
}

$result .= '</ul>';
echo $result;
