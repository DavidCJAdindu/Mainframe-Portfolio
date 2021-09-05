<?php

include_once("index.html");


$file = 'about-me.jpg';
$type = 'images/jpeg';
header('Content-Type:'.$type);
header('Content-Length: ' . filesize($file));
readfile($file);

?>