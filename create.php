<?php 

require 'database.php';

$postdata = file_get_contents("php://input"); 

if(isset($postdata) && !empty($postdata)){
    $request = json_decode($postdata); 

    $heroes_name = mysqli_real_escape_string($con, trim($request->heroes_name)); 
    $heroes_rating = mysqli_real_escape_string($con, (int)($request->heroes_rating); 

    $sql ="INSERT INTO 'heroes' ('heroes_name', 'heroes_rating',) VALUES ('{$heroes_name}', '{$heroes_rating}')";

    if(mysqli_query($con, $sql)){

        http_response_code(201);
        $policy = [
            'heroes_name' => $heroes_name,
            'heroes_rating' => $heroes_rating,
            'heroes_id' => mysqli_insert_id($con)
        ];
        echo json_encode($policy); 
    }else{
        http_response_code(422); 
    }
}

?>