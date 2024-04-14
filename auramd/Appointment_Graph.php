<?php
$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "auramd");

// Count the number of Appointment and Doctor
$Appointment_id_count = mysqli_query($link, "SELECT COUNT(*) AS Appointment_id_count FROM appointment");
$Doctor_count = mysqli_query($link, "SELECT COUNT(*) AS Doctor_count FROM Doctor");

$Appointment_id_count = mysqli_fetch_assoc($Appointment_id_count)["Appointment_id_count"];
$Doctor_count = mysqli_fetch_assoc($Doctor_count)["Doctor_count"];

$total = $Appointment_id_count + $Doctor_count;

// Calculate percentages for Appointment and Doctor
$Appointment_id = round(($Appointment_id_count / $total) * 350, 2);
$Doctor = round(($Doctor_count / $total) * 200, 2);

$dataPoints = array(
  array("label" => "Appointment", "y" => $Appointment_id),
  array("label" => "Doctor", "y" => $Doctor),
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
    text: "Appointment vs Doctors"
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
