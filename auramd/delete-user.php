<?php

session_start();


?>

<?php 

include "db.php"; 

if (isset($_GET['user_id'])) {

    $user_id = $_GET['user_id'];

    $sql = "DELETE FROM `user_t` WHERE `user_id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully!";
        header( "refresh:2; url=./side-menu-light-users-layout-1.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>