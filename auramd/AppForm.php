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

// Get patient and doctor data
$sql_patients = "SELECT Patient_id, Pat_name FROM patient";
$sql_doctors = "SELECT Doc_ID, Doc_name FROM doctor";

$result_patients = $conn->query($sql_patients);
$result_doctors = $conn->query($sql_doctors);

$options_patients = "";
$options_doctors = "";

// Loop through results and create options for patients
if ($result_patients->num_rows > 0) {
  while ($row = $result_patients->fetch_assoc()) {
    $options_patients .= "<option value='" . $row["Patient_id"] . "'>" . $row["Pat_name"] . "</option>";
  }
}

// Loop through results and create options for doctors
if ($result_doctors->num_rows > 0) {
  while ($row = $result_doctors->fetch_assoc()) {
    $options_doctors .= "<option value='" . $row["Doc_ID"] . "'>" . $row["Doc_name"] . "</option>";
  }
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Appointment_id = $_POST['Appointment_id'];   
    $patient_id =  $_POST['patient_id'];
    $doctor_id =  $_POST['doctor_id']; 
    $Appointment_date= $_POST['Appointment_date']; 
  

    // Insert data into the database
    $sql = "INSERT INTO appointment(Appointment_id,patient_id,doctor_id,Appointment_date)
            VALUES (' $Appointment_id','$patient_id ','$doctor_id ','$Appointment_date')";
                  

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


<form action="Form.php" method="post" id="form">
<label for="Appointment_id">Appointment_id:</label>
  <input type="text" id="Appointment_id" name="Appointment_id"><br><br>
    <label for="Pat_name">Choose a patient:</label>
  <select id="Pat_name" name="patient_id" onchange="fillPatientId()">
    <option value=""></option>
    <?php echo $options_patients; ?>
  </select>
  <input type="text" id="patient_id" name="patient_id" readonly><br><br>

  <label for="Doc_name">Choose a doctor:</label>
  <select id="Doc_name" name="doctor_id" onchange="fillDoctorId()">
    <option value=""></option>
    <?php echo $options_doctors; ?>
  </select>
  <input type="text" id="doctor_id" name="doctor_id" readonly><br><br>
  <input type="date" id="Appointment_date" name="Appointment_date"><br><br>

  <input type="submit" value="Submit">
</form>
<script>
function fillPatientId() {
  const patientIdInput = document.getElementById("patient_id");
  patientIdInput.value = document.getElementById("Pat_name").value;
}

function fillDoctorId() {
  const doctorIdInput = document.getElementById("doctor_id");
  doctorIdInput.value = document.getElementById("Doc_name").value;
}
</script>


</body>
</html>
