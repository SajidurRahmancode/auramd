<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "auramd");

// Count the number of doctors and patients
$doctor_count = mysqli_query($link, "SELECT COUNT(*) AS doctor_count FROM doctor");
$patient_count = mysqli_query($link, "SELECT COUNT(*) AS patient_count FROM patient");

$doctor_count = mysqli_fetch_assoc($doctor_count)["doctor_count"];
$patient_count = mysqli_fetch_assoc($patient_count)["patient_count"];

$total = $doctor_count + $patient_count;

// Calculate percentages for doctors and patients
$doctor_percentage = round(($doctor_count / $total) * 100, 2);
$patient_percentage = round(($patient_count / $total) * 100, 2);

$dataPoints = array(
  array("label" => "Doctors", "y" => $doctor_percentage),
  array("label" => "Patients", "y" => $patient_percentage),
);

?>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title: {
    text: "Doctor vs Patient Count"
  },
  data: [{
    type: "pie",
    indexLabel: "{label} ({y}%)",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>
