<?php 

require 'database.php';

$heroes_id = ($_GET['heroes_id'] !== null && (int)$_GET['heroes_id'] > 0)? mysqli_real_escape_string($con, (int)$_GET['heroes_id']) : false; 

if(!$heroes_id){
    return http_response_code(400); 
}

$sql = "DELETE FROM 'heroes' WHERE 'heroes_id' ='{$heroes_id}' LIMIT 1"; 

if(mysqli_query($con, $sql)){

    http_response_code(204);
}else{
    return http_response_code(422); 
}
?>