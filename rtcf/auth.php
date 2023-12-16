<?php

session_start();

if (!isset($_POST['submit'])) {
  header('location: ./index.php');
  exit;
}

$conn = mysqli_connect('localhost:4306', 'root', '', 'rtcf');

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Use prepared statements for secure query with user type
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username='$username' AND password='$password' AND user_type = ?");
mysqli_stmt_bind_param($stmt, "s", $_POST['user']);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

// Check if query was successful and returned a single result
if (mysqli_num_rows($result) === 1) {
  $row = mysqli_fetch_assoc($result);
  $userType = $row['user_type'];

  // Redirect based on user type
  switch ($userType) {
    case 'admin':
      header("Location: admin.php");
      exit;
    case 'journalist':
      header("Location: journalist.html");
      exit;
    case 'unambassador':
      header("Location: UNAMB.html");
      exit;
    case 'educationalinstitute':
      header("Location: Educational_Institute.php");
      exit;
    case 'visitor':
      header("Location:VISITORS.html");
      exit;
    case 'environmentalscientist':
      header("Location:Environmental_scientist.php");
      exit;
    default:
      // Handle unexpected user type
      error_log("Unexpected user type: " . $userType);
      $_SESSION['login_failed'] = "Invalid user type.";
      header('location: ./index.php');
      exit;
  }
} else {
  // Handle unsuccessful login
  $_SESSION['login_failed'] = true; // Set login error message
  header('location: ./index.php');
  exit;
}

mysqli_close($conn);

?>
