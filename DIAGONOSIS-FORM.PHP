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
  $Diag_id = $_POST['Diag_id'];
  $Diag_Date = $_POST['Diag_Date'];
  $Patient_id = $_POST['Patient_id'];

  // Insert data into the database
  $sql = "INSERT INTO diagnosis_report(Diag_Id, diag_date, Patient_id)
          VALUES ('$Diag_id', '$Diag_Date', '$Patient_id')";

  if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Get patient names for the dropdown
$sql = "SELECT Patient_id, Pat_name FROM patient";
$result = $conn->query($sql);

$patients = "";
if ($result->num_rows > 0) {
  // Loop through results and create options
  while ($row = $result->fetch_assoc()) {
    $patients .= "<option value='" . $row["Patient_id"] . "'>" . $row["Pat_name"] . "</option>";
  }
}

$conn->close();
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

  <div class="container my-4">

    <h3 class="text-center">DIAGNOSIS FORM</h3>
    <form action="DIAGONOSIS-FORM.PHP" method="post">

      <div class="form-group">
        <label for="Diag_id">id</label>
        <input type="text" class="form-control" id="Diag_id" name="Diag_id" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label for="Diag_Date">Diag_Date</label>

        <input type="date" id="Diag_Date" name="Diag_Date">
        <div class="form-group">
        <label for="Patient_id">Patient Name</label>
        <select class="form-control" id="Patient_id" name="Patient_id">
          <?php echo $patients; ?>  </select>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXBvTCFPjFW3LSK+hVmPisTwkbn9QzT5yCegGAenTarozQvlu/vspCdBvLMjkIgz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-IiCgqS.XpFKDaEENOABmIkzT8m4LBOziIZT2mXt4IFoAeAyH77kjIKavZwgEc7+y" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgQ8iY4WJtrB4zI2BU7VWVURqbpVZlvMGU5q6tLapv7aGcHxrjz5wYrEAN5jWBlLm" crossorigin="anonymous"></script>

</body>

</html>
