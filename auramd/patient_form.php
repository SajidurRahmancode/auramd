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
    $Patient_id  = $_POST['Patient_id'];   
    $pat_name   =  $_POST['pat_name']; 
    $pat_address =  $_POST['pat_address']; 
    $Medical_History =  $_POST['Medical_History']; 
    $Patient_type =  $_POST['Patient_type'];
   	

    // Insert data into the database
    $sql = "INSERT INTO patient(Patient_id,Pat_name,Pat_address,Medical_History,Patient_type)
            VALUES (' $Patient_id','$pat_name','$pat_address','$Medical_History',' $Patient_type')";
                  

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>





<!DOCTYPE html>
<html>
<body>

<h2>Patient Forms</h2>

<form action="patient_form.php" method = "post" id = "form">

  <label for="Patient_id">Patient_id:</label>
  <input type="text" id="Patient_id" name="Patient_id"><br><br>
  <label for="pat_name  ">pat_name  :</label>
  <input type="text" id="pat_name" name="pat_name"><br><br>
  <label for="pat_address">pat_address:</label>
  <input type="text" id="pat_address" name="pat_address"><br><br>
  <label for="Medical_History">Medical_History:</label>
  <input type="text" id="Medical_History" name="Medical_History"><br><br>
  <label for="Patient_type">Patient_type:</label>
  <input type="text" id="Patient_type" name="Patient_type"><br><br>

  <input type="submit" value="Submit">
</form>



</body>
</html>
