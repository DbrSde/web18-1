<?php
$locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
if ($locale =="")
    $locale = 'fr-FR';
$locale = substr($locale, 0, 2);
?>
<!DOCTYPE html>
<html lang=<?=$locale?>  dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">