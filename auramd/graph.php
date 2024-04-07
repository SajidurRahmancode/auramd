<?php
$link = mysqli_connect("localhost", 'root', '');

mysqli_select_db($link, 'auramd');

// Ensure all rows are fetched, including those with empty Diseases
$res = mysqli_query($link, "SELECT *, COALESCE(Diseases, '') AS Diseases FROM analytical_data");

$dataPoints = array();
while ($row = mysqli_fetch_assoc($res)) {
  if (!empty($row["Diseases"])) {
    $dataPoints[] = array("y" => $row["SurgerySuccessRate"], "indexLabel" => $row["Diseases"]);
  }
}

?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title:{
    text: "Surgery Success Rate Across Diseases"
  },
  data: [{
    type: "pie",  // Use pie chart type
    indexLabel: "{indexLabel}",
    startAngle: 240,
    toolTipContent: "<b>{indexLabel}:</b> {y}%",
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
