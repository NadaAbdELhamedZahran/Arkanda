<?php
include "config.php";
$fileName = $_GET['doc'];
$file_url = "uploaded_doc/" . $fileName;  
header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: utf-8");   
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
readfile($file_url);   