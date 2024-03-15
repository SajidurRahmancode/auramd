<?php

$showAlert = false;
$showError = false;
$exists = false;

// Include database connection file
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get form data
  $user_id = trim($_POST['user_id']);
  $email = trim($_POST['email']);
  $password = trim($_POST['password']);
  $cpassword = trim($_POST['cpassword']);
  $user_type = trim($_POST['user_type']);

  // Validate user input
  // ...

  // Check if username exists
  $stmt = $conn->prepare("SELECT * FROM user WHERE user_id = ?");
  $stmt->bind_param("s", $user_id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $exists = true;
    $showError = "User ID already exists.";
  } else if ($password !== $cpassword) {
    $showError = "Passwords do not match.";
  } else {
    // Hash password
   // $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user data
    $stmt = $conn->prepare("INSERT INTO user_t(user_id,password,email, user_type) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $user_id, $password, $email,$user_type);
    if (!$stmt->execute()) {
      $showError = "Error inserting data: " . $conn->error;
    } else {
      $showAlert = true;
    }

    // Close prepared statements
    $stmt->close();
  }

  // Close result set
  $result->close();
}
?>

	
<!doctype html> 
	
<html lang="en"> 

<head> 
	
	<!-- Required meta tags --> 
	<meta charset="utf-8"> 
	<meta name="viewport" content= 
		"width=device-width, initial-scale=1, 
		shrink-to-fit=no"> 
	
	<!-- Bootstrap CSS --> 
	<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity= 
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
		crossorigin="anonymous"> 
</head> 
	
<body>

	
<?php 
	
	if($showAlert) { 
	
		echo ' <div class="alert alert-success 
			alert-dismissible fade show" role="alert"> 
	
			<strong>Success!</strong> Your account is 
			now created and you can login.
			<form action="index.php">
				<input type="submit" value="Go to login" />
			</form>
		
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close"> 
				<span aria-hidden="true">×</span> 
			</button> 
		</div> '; 
	} 
	
	if($showError) { 
	
		echo ' <div class="alert alert-danger 
			alert-dismissible fade show" role="alert"> 
		<strong>Error!</strong> '. $showError.'
	
	<button type="button" class="close"
			data-dismiss="alert aria-label="Close"> 
			<span aria-hidden="true">×</span> 
	</button> 
	</div> '; 
} 
		
	if($exists) { 
		echo ' <div class="alert alert-danger 
			alert-dismissible fade show" role="alert"> 
	
		<strong>Error!</strong> '. $exists.'
		<button type="button" class="close"
			data-dismiss="alert" aria-label="Close"> 
			<span aria-hidden="true">×</span> 
		</button> 
	</div> '; 
	} 

?> 
	
<div class="container my-4 "> 
	
	<h3 class="text-center">SIGNUP</h3> 
	<form action="signup.php" method="post">
  		<div class="form-group"> 
			<label for="user_id">id</label> 
		<input type="text" class="form-control" id="user_id"
			name="user_id" aria-describedby="emailHelp">	 
		</div>  
		<div class="form-group"> 
			<label for="email">email</label> 
		<input type="text" class="form-control" id="email"
			name="email" aria-describedby="emailHelp">	 
		</div>  
	
		
		<div class="form-group"> 
        <label for="user_type">Select  a user:</label>
        <select name="user_type" id="user_type">
          <option value="admin">admin</option>
		  <option value="SENIOR_DOCTOR">SENIOR_DOCTOR</option>
          <option value="JUNIOR_DOCTOR">JUNIOR_DOCTOR</option>
          <option value="PATIENT">PATIENT</option>
          <option value="RECEPTIONIST">RECEPTIONIST</option>
          <option value="PHARMACY">PHARMACY</option>
          <option value="Nurse">Nurse</option>

        </select>
        </div>
		<div class="form-group"> 
			<label for="password">Password</label> 
			<input type="password" class="form-control"
			id="password" name="password"> 
		</div> 
	
		<div class="form-group"> 
			<label for="cpassword">Confirm Password</label> 
			<input type="password" class="form-control"
				id="cpassword" name="cpassword"> 
	
			<small id="emailHelp" class="form-text text-muted"> 
			Make sure to type the same password 
			</small> 
		</div>	 
	
		<button type="submit" class="btn btn-primary"> 
		SignUp 
		</button> 
	</form>

</div> 
	
<div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="2" d="M0,128L10.9,154.7C21.8,181,44,235,65,256C87.3,277,109,267,131,234.7C152.7,203,175,149,196,122.7C218.2,96,240,96,262,122.7C283.6,149,305,203,327,186.7C349.1,171,371,85,393,48C414.5,11,436,21,458,42.7C480,64,502,96,524,133.3C545.5,171,567,213,589,213.3C610.9,213,633,171,655,149.3C676.4,128,698,128,720,138.7C741.8,149,764,171,785,170.7C807.3,171,829,149,851,117.3C872.7,85,895,43,916,26.7C938.2,11,960,21,982,37.3C1003.6,53,1025,75,1047,74.7C1069.1,75,1091,53,1113,90.7C1134.5,128,1156,224,1178,234.7C1200,245,1222,171,1244,122.7C1265.5,75,1287,53,1309,48C1330.9,43,1353,53,1375,90.7C1396.4,128,1418,192,1429,224L1440,256L1440,320L1429.1,320C1418.2,320,1396,320,1375,320C1352.7,320,1331,320,1309,320C1287.3,320,1265,320,1244,320C1221.8,320,1200,320,1178,320C1156.4,320,1135,320,1113,320C1090.9,320,1069,320,1047,320C1025.5,320,1004,320,982,320C960,320,938,320,916,320C894.5,320,873,320,851,320C829.1,320,807,320,785,320C763.6,320,742,320,720,320C698.2,320,676,320,655,320C632.7,320,611,320,589,320C567.3,320,545,320,524,320C501.8,320,480,320,458,320C436.4,320,415,320,393,320C370.9,320,349,320,327,320C305.5,320,284,320,262,320C240,320,218,320,196,320C174.5,320,153,320,131,320C109.1,320,87,320,65,320C43.6,320,22,320,11,320L0,320Z"></path></svg></div>
<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
	
<script src=" 
https://code.jquery.com/jquery-3.5.1.slim.min.js" 
	integrity=" 
sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
	crossorigin="anonymous"> 
</script> 
	
<script src=" 
https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
	integrity= 
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous"> 
</script> 
	
<script src=" 
https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" 
	integrity= 
"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
	crossorigin="anonymous"> 
</script> 
</body> 
</html> 
