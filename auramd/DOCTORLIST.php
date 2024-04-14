<?php

session_start();

?>
<?php 

include "db.php";

$sql = "SELECT Doc_ID, Doc_name, Doc_Exp,Doc_contact FROM doctor";

$result = $conn->query($sql);







?>

<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/dist/images/logoo.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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


    <div class="container">

    

    <table class="table" style="background-color:#42AB0E;color:black;">>

    <thead>
    <tr>
        <th>Doc_ID</th>
        <th>Doc_name</th>
        <th>Doc_Exp</th>
        <th>Doc_contact</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody> 

        <?php

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>

                    <tr>

                    <td><?php echo $row['Doc_ID']; ?></td>

                    <td><?php echo $row['Doc_name']; ?></td>
                    <td><?php echo $row['Doc_Exp']; ?></td>
                    <td><?php echo $row['Doc_contact']; ?></td>
                    

                    <td>
                        <a class="btn-elevated-primary" href="update.php?Doc_ID=<?php echo $row['Doc_ID']; ?>">Edit</a>&nbsp;
                        <a class="btn btn-danger" href="delete-user.php?Doc_ID=<?php echo $row['Doc_ID']; ?>">Delete</a>
                    </td>

                    </tr>                       

        <?php   }
            }
            $conn->close(); 
        ?>              

    </tbody>

</style=>
    </div> 
    <div>    <a style="color:black;" class="btn btn-warning" href="UpdateProfile.php"><b>Create User</b></a>
</div>

    

        
    </body>
</html>