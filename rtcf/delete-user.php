<?php

session_start();

if (!isset($_SESSION['name'])) {
  header('location: login-light-login.php');
  exit;
}

?>

<?php 

include "db.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully!";
        header( "refresh:2; url=./side-menu-light-users-layout-1.php" ); 

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>