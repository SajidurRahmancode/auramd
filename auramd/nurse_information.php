<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auramd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select data from Nurse table
<<<<<<< Updated upstream
$sql = "SELECT NurseID, Nurse_name FROM Nurse";
=======
$sql = "SELECT 	Nurse_Id , Nurse_Name FROM nurse";
>>>>>>> Stashed changes
$result = $conn->query($sql);

// Close the connection after fetching the data
$conn->close();
?>
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <h2>Nurse Information</h2>
    
    <?php if ($result && $result->num_rows > 0): ?>
        <table>
            <tr>
                <th>Nurse ID</th>
                <th>Nurse Name</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
<<<<<<< Updated upstream
                    <td><?php echo htmlspecialchars($row['NurseID']); ?></td>
                    <td><?php echo htmlspecialchars($row['Nurse_name']); ?></td>
=======
                    <td><?php echo htmlspecialchars($row['Nurse_Id']); ?></td>
                    <td><?php echo htmlspecialchars($row['Nurse_Name']); ?></td>
>>>>>>> Stashed changes
                </tr>
            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>No nurse data found.</p>
    <?php endif; ?>
</body>
</html>

