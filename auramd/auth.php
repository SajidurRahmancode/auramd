<?php

session_start();

if (!isset($_POST['submit'])) {
  header('location: ./login.php');
  exit;
}

$conn = mysqli_connect('localhost', 'root', '', 'auramd');

$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Use prepared statements for secure query with user type
$stmt = mysqli_prepare($conn, "SELECT * FROM user WHERE user_id='$user_id' AND password='$password' AND user_type = ?");
mysqli_stmt_bind_param($stmt, "s", $_POST['user']);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

// Check if query was successful and returned a single result
if (mysqli_num_rows($result) === 1) {
  $row = mysqli_fetch_assoc($result);
  $user_type = $row['user_type'];

  // Redirect based on user type
  switch ($user_type) {
    case 'admin':
      header("Location: admin.php");
      exit;
      case 'SENIOR_DOCTOR':
        header("Location:SENIOR_DOCTOR.php");
        exit;
      case 'JUNIOR_DOCTOR':
        header("Location:JUNIOR_DOCTOR.php");
        exit;
      case 'PATIENT':
        header("Location:PATIENT.php");
        exit;
      case 'RECEPTIONIST':
        header("Location:RECEPTIONIST.php");
        exit;
      case 'PHARMACY':
        header("Location:PHARMACY.php");
        exit;
      case 'Nurse':
          header("Location:Nurse.php");
          exit;  
    default:
      // Handle unexpected user type
      error_log("Unexpected user type: " . $user_type);
      $_SESSION['login_failed'] = "Invaluser_id user type.";
      header('location: ./login.php');
      exit;
  }
} else {
  // Handle unsuccessful login
  $_SESSION['login_failed'] = true; // Set login error message
  header('location: ./login.php');
  exit;
}

mysqli_close($conn);

?>
