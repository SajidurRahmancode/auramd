<?php 

include "db.php";

    if (isset($_POST['update'])) {


        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];


        $sql = "UPDATE `users` SET 'username`='$username',`password`='$password',`name`='$name', WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";
            header( "refresh:2; url=./view-user.php" ); 

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];


            $username = $row['username'];

            $password  = $row['password'];
            $name  = $row['name'];

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>
            User id:<br>
            <input type="text" name="id" value="<?php echo $id; ?>">
            <br>
            username:<br>
            <input type="text" name="username" value="<?php echo $username; ?>">
            <br>
            Password:<br>
            <input type="password" name="password" value="<?php echo $password; ?>">
            <br>
            Name:<br>
            <input type="name" name="name" value="<?php echo $name; ?>">
            <br><br>
            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: side-menu-light-users-layout-1.php');

    } 

}

?> 