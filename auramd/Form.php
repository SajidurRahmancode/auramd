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
    $receptionistid = $_POST['receptionistid'];   
    $admitted_patient_data =  $_POST['admitted_patient_data']; 
    $released_patient_data =  $_POST['released_patient_data']; 
    $appointment_schedule =  $_POST['appointment_schedule	']; 
   	

    // Insert data into the database
    $sql = "INSERT INTO receptionist(receptionistid,admitted_patient_data,released_patient_data,appointment_schedule)
            VALUES (' $receptionistid','$admitted_patient_data','$released_patient_data','$appointment_schedule')";
                  

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
<head>
    <style>
        /* CSS styles for the form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333333;
        }
        input[type="text"],
        input[type="datetime-local"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>


<form action="Form.php" method = "post" id = "form">

  <label for="receptionistid">Reciptionist ID:</label>
  <input type="text" id="receptionistid" name="receptionistid"><br><br>
  <label for="admitted_patient_data">Admitted_patient_data:</label>
  <input type="text" id="admitted_patient_data" name="admitted_patient_data"><br><br>
  <label for="released_patient_data">Released_patient_data:</label>
  <input type="text" id="released_patient_data" name="released_patient_data"><br><br>
  <label for="appointment_schedule">Appointment_schedule:</label>
  <input type="datetime-local" id="appointment_schedule" name="appointment_schedule"><br><br>

  <input type="submit" value="Submit">
</form>

<p>Click the "Submit" button and the form-data will be sent to a page on the 
server called "action_page.php".</p>

</body>
</html>
