
<?php 

include "db.php";

$sql = "SELECT id, username,password, name,user_type FROM users";

$result = $conn->query($sql);
?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>Users</h2>

<table class="table">

    <thead>

    <tr>
        <th>ID</th>
        <th>username</th>
        <th>Password</th>
        <th>Name</th>
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

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['username']; ?></td>

                    <td><?php echo $row['password']; ?></td>

                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['user_type']; ?></td>



                    <td>
                        <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                        <a class="btn btn-danger" href="delete-user.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>

                    </tr>                       

        <?php   }
            }
            $conn->close(); 
        ?>              

    </tbody>

</table>
<a style="color:black;" class="btn btn-warning" href="admin.php"><b>Create User</b></a>
    </div> 

</body>

</html>