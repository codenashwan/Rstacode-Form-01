<?php
ob_start();
error_reporting(0);
$CurrentDate= date("Y-m-d H:m:s");
$db = mysqli_connect('localhost' , 'root' , '' , 'college');
$db->query("SET NAMES 'utf8'");
$db->query("SET CHARACTER SET utf8");
ini_set('default_charset','UTF-8'); 
if(!$db){
    exit("Error Connect To Database");
}

// secure variables
function x($data){
    global $db;
    $data = mysqli_real_escape_string($db , htmlspecialchars($data));
    return $data;
}


?>