<?php

include_once("root/index.html");
include_once("root/style.css");
include_once("root/script.js");


$file = 'images/about-me.jpg';
$type = 'image/jpg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
header("Content-type: text/css; charset: UTF-8");
header("Content-type: text/js; charset: UTF-8");
readfile($file);

?>