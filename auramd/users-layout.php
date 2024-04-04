<?php

session_start();

?>
<?php 

include "db.php";

$sql = "SELECT user_id, password, email,user_type FROM user";

$result = $conn->query($sql);







?>

<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/dist/images/logoo.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 -->
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="meow">
        <title>Users Layout - </title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />

        <style>
        tr:hover {background-color: #D6EEEE;}
        </style>

        <!-- END: CSS Assets-->

    </head>
    <!-- END: Head -->
    <body class="py-5">
    <?php include 'side_bar.php'; ?>


    <div class="container">

    

    <table class="table" style="background-color:#42AB0E;color:black;">>

    <thead>

    <tr>
        <th>user_id</th>
        <th>Password</th>
        <th>email</th>
        <th>user_type</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody> 

        <?php

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>

                    <tr>

                    <td><?php echo $row['user_id']; ?></td>

                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['user_type']; ?></td>                    

                    <td>
                        <a class="btn-elevated-primary" href="update.php?user_id=<?php echo $row['user_id']; ?>">Edit</a>&nbsp;
                        <a class="btn btn-danger" href="delete-user.php?user_id=<?php echo $row['user_id']; ?>">Delete</a>
                    </td>

                    </tr>                       

        <?php   }
            }
            $conn->close(); 
        ?>              

    </tbody>

</style=>
    </div> 
    <div>    <a style="color:black;" class="btn btn-warning" href="signup.php"><b>Create User</b></a>
</div>

    

                
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>