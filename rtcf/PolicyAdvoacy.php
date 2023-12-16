<?php
include 'db.php';

if (isset($_POST['submit'])) {
  $policy_id = $_POST['policy_id'];
  $title = $_POST['title'];
  $content = $_POST['content'];

  $written_by = $_POST['written_by'];
  $post_date = $_POST['post_date'];

  // Remove the extra space before $image
  $sql = "INSERT INTO policy(policy_id,title, content, written_by, post_date) 
         VALUES ('$policy_id','$title', '$content', '$written_by', '$post_date')";

  // Use the $con variable from db.php for the connection
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "Data successfully inserted!";
  } else {
    die("Error inserting data: " . mysqli_error($conn));
  }
}

?>




<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="meow">
        <title>Add New Post - </title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="dist/css/app.css" />
        <link rel="stylesheet" href="dist/css/form.css" />
        
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
    <div class="container">
        <div class="row centered-form text-center ">
        <div class="col-xs-8 col-sm-2 col-md-8 col-sm-offset-2 col-md-offset-2">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please Enter Your Data</h3>
			 			</div>
			 			<div class="panel-body">
			    		    <form role="form" method="POST">
			    			<div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12"  >
			    					<div class="form-group" >
			                            <input type="text" name="policy_id" id="policy_id" class="form-control input-sm" placeholder="Policy Id" >
			    					</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12"  >
			    					<div class="form-group" >
			                            <input type="text" name="title" id="title" class="form-control input-sm" placeholder="title" >
			    					</div>
			    				</div>
			    				<div class="col-xs-12 col-sm-12 col-md-12 cont" >
			    					<div class="form-group">
			    						<input type="text" name="content" id="content" class="form-control input-sm" placeholder="content" style="height: 100px;">
			    					</div>
			    				</div>
			    			</div>
                            
                            
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="written_by" id="written_by" class="form-control input-sm" placeholder="written_by">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="date" name="post_date" id="date" class="form-control input-sm" placeholder="Enter date">
			    					</div>
			    				</div>
			    			</div>
			    			<input type="submit" name="submit" value="Register" class="btn btn-info btn-block">

			    		</form>
                        <a href="UNAMB.php">
                        <button src="admin.php" sr class="btn btn-elevated-success w-24 mr-1 mb-2">Back</button></a>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>  

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </body>
</html>