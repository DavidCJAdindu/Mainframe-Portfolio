<?php

include_once("index.html");


$file = 'about-me.jpg';
$type = 'image/jpg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
readfile($file);

?>