<?php
$server = "localhost";
$user_id = "root";
$password = "";
$database = "auramd";

$conn = mysqli_connect($server, $user_id, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>