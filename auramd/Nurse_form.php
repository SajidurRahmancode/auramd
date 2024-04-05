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

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NurseID = trim($_POST['NurseID']);
    $Nurse_name = trim($_POST['Nurse_name']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO Nurse (NurseID, Nurse_name) VALUES (?, ?)");
    $stmt->bind_param("ss", $NurseID, $Nurse_name);

    // Execute and check
    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <style>
      /* Your CSS styles remain unchanged */
    </style>
</head>
<body>
    <h2>Nurse Information</h2>
    <form action="Nurse_form.php" method="post">
      <label for="NurseID">Nurse ID:</label><br />
      <input type="text" id="NurseID" name="NurseID" placeholder="Enter Nurse ID"/><br />
      <label for="Nurse_name">Nurse Name:</label><br />
      <input type="text" id="Nurse_name" name="Nurse_name" placeholder="Enter Nurse Name"/><br /><br />
      <input type="submit" value="Submit" />
    </form>
    <p>If you click the "Submit" button, the form-data will be sent to a page called "/Nurse_form.php".</p>
</body>
</html>
