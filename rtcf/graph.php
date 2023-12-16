<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chart.js with Input Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058YGzSBQ+iwUjIV3hE8XtIehBT+WrwTR0jIevbN26f8k/sh" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
  <style>
  #myChart {
  /* Minimal background with subtle gradient */
  background-image: linear-gradient(to bottom right, #f7f7f7, #fafafa);

  /* No border for a cleaner look */
  border: none;
  border-radius: 5px;

  /* Grid lines minimized for a lighter visual */
  grid-line-color: #f5f5f5;
  grid-line-style: solid;
  grid-line-width: 0.5px;

  /* Clean and bold axis labels with a slight grey tint */
  color: #666;
  font-family: sans-serif;
  font-size: 12px;

  /* Title with a bolder weight and slight accent color */
  .chart-title {
    color: #333;
    font-size: 16px;
    font-weight: bold;
  }

  /* Legend with minimal opacity and slightly smaller font */
  .legend {
    color: rgba(0, 0, 0, 0.75);
    font-size: 10px;
  }

  /* Line chart with vibrant primary color and subtle fill */
  .chart-line {
    stroke: #4CAF50;
    stroke-width: 2px;
    fill: rgba(0, 174, 82, 0.1);
  }

  /* Bar chart with distinct accent color and slight shadow */
  .chart-bar {
    background-color: #F44336;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  }

  /* Pie chart with subtle border and vibrant accent colors */
  .chart-pie {
    stroke: #ddd;
    stroke-width: 1px;
    .chart-pie-slice {
      fill: #F44336;
      stroke: #ddd;
      stroke-width: 0.5px;
    }
  }
}
</style>
</head>
<body>


  <div class="container">
    
    <h1>Data Input</h1>

    <form>
      <div class="form-group">
        <label for="chartType">Chart Type:</label>
        <select class="form-control" id="chartType">
          <option value="line">Line Chart</option>
          <option value="bar">Bar Chart</option>
          <option value="pie">Pie Chart</option>
        </select>
      </div>

      <div class="form-group">
        <label for="data">Data (Comma Separated):</label>
        <input type="text" class="form-control" id="data" placeholder="Data points...">
      </div>

      <div class="form-group">
        <label for="labels">Labels (Comma Separated):</label>
        <input type="text" class="form-control" id="labels" placeholder="Label names...">
      </div>

      <button type="button" class="btn btn-primary" id="generateGraph">Generate Graph</button>
    </form>

    <br>

    <canvas id="myChart"></canvas>
  </div>

  <script>
    document.getElementById('generateGraph').addEventListener('click', function () {
      const chartType = document.getElementById('chartType').value;
      const dataStr = document.getElementById('data').value;
      const dataArr = dataStr.split(',').map(Number);
      const labelsStr = document.getElementById('labels').value;
      const labelsArr = labelsStr.split(',');

      const ctx = document.getElementById('myChart').getContext('2d');

      new Chart(ctx, {
        type: chartType,
        data: {
          labels: labelsArr,
          datasets: [{
            label: 'My Dataset',
            data: dataArr,
          }]
        }
      });
    });
  </script>
</body>
</html>
