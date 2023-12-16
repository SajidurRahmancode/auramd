<?php 
  

$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "rtcf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Select data from the database based on ID
$sql = "SELECT * FROM policy ";
$result = $conn->query($sql);

// Display the data

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php while ($row = $result->fetch_assoc()) { ?>
<table class="border-1">
<tr>


                <td><?php echo $row['policy_id'] ?></td>
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['content'] ?></td>
               
                <td><?php echo $row['written_by'] ?></td>
                <td><?php echo $row['post_date'] ?></td>
              
                
            </tr>
            </table>
            <?php } ?>

            <a href="UNAMB.php">
                        <button src="admin.php" sr class="btn btn-elevated-success w-24 mr-1 mb-2">Back</button></a>
</body>
</html>