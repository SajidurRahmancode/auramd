<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $servername = "localhost:4306";
  $username = "root";
  $password = "";
  $dbname = "rtcf";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  $lists = $conn->query("SELECT * FROM environmental_scientist");
  ?>
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email Address</th>
      <th>Address</th>
      <th>City</th>
      <th>State</th>
      <th>Zip Code</th>
      <th>Description</th>
    </tr>
    <?php while ($row = $lists->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['last_name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['city'] ?></td>
        <td><?php echo $row['state'] ?></td>
        <td><?php echo $row['zip'] ?></td>
        <td><?php echo $row['description'] ?></td>
     </tr>
    <?php } ?>
  </table>

</body>

</html>
