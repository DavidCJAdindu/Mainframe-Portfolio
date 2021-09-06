<?php

include_once("root/index.html");
include_once("root/style.css");
include_once("root/script.js");


$file = 'images/about-me.jpg';
$type = 'image/jpg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
header("Content-type: text/css");
header("Content-type: text/js");
readfile($file);

?>
