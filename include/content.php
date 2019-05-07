<?php

$content = glob('./include/*.inc.php');
var_dump($content);

$page = isset($_GET['page']) ? $_GET['page'] : "";
$page ='./include/' . $page . '.php';
$page = in_array($page, $content) ? $page : './include/home.php';

require $page;