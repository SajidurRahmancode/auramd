<?php 

include "db.php";

    if (isset($_POST['update'])) {


        $user_id = $_POST['user_id'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "UPDATE `user_t` SET `email`='$email',`password`='$password' WHERE `user_id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";
            header( "refresh:2; url=./users-layout.php" ); 

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['user_id'])) {

    $user_id = $_GET['user_id']; 

    $sql = "SELECT * FROM `user_t` WHERE `user_id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {
            $user_id = $row['user_id'];
            $password  = $row['password'];
            $email  = $row['email'];
            $user_type  = $row['user_type'];


        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>
            
            email:<br>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <br>
            Password:<br>
            <input type="password" name="password" value="<?php echo $password; ?>">
            
            <br><br>
            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: SENIOR_DOCTOR.php');

    } 

}

?> 