<?php 
header ("Access-Control-Allow-Origin: *");
header ('Access-Control-Allow-Origin: true');
header ("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header ("Access-Control-Allow-Header: Origin, X-Requested-Width, Content-Type,Accept");
header ("Content-Type: application/json; charsez=UTF-8");

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'heroes');

function connect(){
    $connect = mysqli_connect(DB_Host, DB_USER, DB_PASS, DB_NAME); 

    if(mysqli_connect_errno($connect)){
        die("Failed".mysqli_connect_errno()); 
    }

    mysqli_set_charset($connect,"utf8");
    return $connect;
}

$con = connect();

?>