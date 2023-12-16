<?php

// Connect to database
$con = new mysqli('localhost', 'username', 'password', 'database_name');

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

// Check for form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get chart data from hidden fields
  $chart_data_json = $_POST['chart_data'];
  $chart_labels_json = $_POST['chart_labels'];

  // Decode JSON data
  $chart_data = json_decode($chart_data_json);
  $chart_labels = json_decode($chart_labels_json);

  // Process chart data and generate chart (your code here)

  // Prepare SQL statement and bind data (similar to Option 1)

  // Execute statement and close connection

  // Redirect to page with success or error message (adjust based on your code)

} else {
  // Display form for user input
  // ...
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <title>User Input Bar Chart</title>
</head>
<body>

<form action="" method="post">
  <label for="chart_data">Enter data points (comma separated numbers):</label>
  <input type="text" id="chart_data" name="chart_data" required>
  <label for="chart_labels">Enter labels (comma separated):</label>
  <input type="text" id="chart_labels" name="chart_labels" required>
  <button type="submit">Generate Chart</button>
</form>

<div style="width: 500px;">
  <canvas id="myChart"></canvas>
</div>

<script>
  Chart.defaults.global.defaultFontFamily = 'sans-serif';

  // Function to process user input and generate chart data
  function processInput(chartData, chartLabels) {
    // 1. Split data and labels into arrays
    const dataArray = chartData.split(',');
    const labelArray = chartLabels.split(',');

    // 2. Validate data (ensure all entries are numbers)
    if (!dataArray.every(value => !isNaN(parseFloat(value)))) {
      alert('Error: Data points must be valid numbers.');
      return;
    }

    // 3. Process data and labels
    const data = dataArray.map(value => parseFloat(value));
    const labels = labelArray;

    // 4. Update chart config with user input
    const config = {
      data: {
        labels,
        datasets: [{
          label: 'User Input Dataset',
          data,
          backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(255, 159, 64, 0.2)', ...],
          borderColor: ['rgb(255, 99, 132)', 'rgb(255, 159, 64)', ...],
          borderWidth: 1
        }]
      }
    };

    // 5. Update chart with new data
    const ctx = document.getElementById('myChart').getContext('2d');
    new Chart(ctx, config);
  }

  // Handle form submission
  const form = document.querySelector('form');
  form.addEventListener('submit', event => {
    event.preventDefault();
    const chartData = document.getElementById('chart_data').value;
    const chartLabels = document.getElementById('chart_labels').value;
    processInput(chartData, chartLabels);
  });

</script>

</body>
</html>
