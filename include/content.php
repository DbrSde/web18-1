<?php

$content = glob('./include/*.inc.php');

$page = isset($_GET['page']) ? $_GET['page'] : "";
$page ='./include/' . $page . '.inc.php';
$page = in_array($page, $content) ? $page : './include/home.inc.php';

require $page;