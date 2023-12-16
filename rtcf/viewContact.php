<?php 

if(isset($_GET['id'])){
    $id = $_GET['id'];   
}

$servername = "localhost";
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
$sql = "SELECT * FROM environmental_scientist WHERE id = $id";
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
    <?php if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); ?>
<tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['city'] ?></td>
                <td><?php echo $row['state'] ?></td>
                <td><?php echo $row['zip'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><a href="viewContact.php?id=<?php echo $row['id'] ?>">View</a></td>
            </tr>;
            <?php } ?>
</body>
</html>