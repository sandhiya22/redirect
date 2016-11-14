<?php 

$url = $_GET['url'];
header("HTTP/1.1 301 Moved Permanently"); 
header("Location: $url"); 

?>