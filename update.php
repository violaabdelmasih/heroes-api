<?php 

require 'database.php';

$postdata = file_get_contents("php://input"); 

if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata); 

    $heroes_id = mysqli_real_escape_string($con, (int)($request->heroes_id); 
    $heroes_name = mysqli_real_escape_string($con, trim($request->heroes_name)); 
    $heroes_rating = mysqli_real_escape_string($con, (int)($request->heroes_rating); 

    $sql = "UPDATE 'heroes' SET 'heroes_name'='$heroes_name', 'heroes_rating'='$heroes_rating' WHERE 'heroes_id' = '{$heroes_id}' LIMIT 1"; 

    if(mysqli_query($con, $sql)){

        http_response_code(204);
    }else{
        return http_response_code(422); 
    }
}



?>