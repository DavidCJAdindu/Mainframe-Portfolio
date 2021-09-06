<?php

include_once("root/index.html");
include_once("root/style.css");


$file = 'images/about-me.jpg';
$type = 'image/jpg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
readfile($file);

?>