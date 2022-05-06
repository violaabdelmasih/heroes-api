<?php 

require 'database.php';

$heroes = [];
$sql ="SELECT heroes_id, heroes_name, heroes_rating FROM heroes";

if($result = mysqli_query($con, $sql)){
    $i = 0;
    while($row = mysqli_fetch_assoc($result)){
        $heroes[$i]['heroes_id'] = $row['heroes_id'];
        $heroes[$i]['heroes_name'] = $row['heroes_name'];
        $heroes[$i]['heroes_rating'] = $row['heroes_rating'];
        
        $i++; 
    }

    echo json_encode($heroes); 
}else{
    http_response_code(404); 
}

?>