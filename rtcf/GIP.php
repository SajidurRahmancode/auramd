<?php




include 'db.php';


if (isset($_POST['submit'])) {
    
    $title = $_POST['title'];
    $content = $_POST['event_name'];
    $caption = $_POST['creator'];
    $image = $_POST['time'];
    $written_by = $_POST['meetlink'];
    $date = $_POST['offline_location'];

    // Remove the extra space before $image
    $sql = "INSERT INTO `tblmeeting` (title, event_name, creator, time, meetlink, offline_location) VALUES ('$title', '$event_name', '$creator', '$time', '$meetlink', '$offline_location')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Insert Successful";
    } else {
        echo "No Data found";
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
        <meta name="author" content="MEOW">
        <title></title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js">
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
    <div class="grid grid-cols-12 gap-5 mt-5">
                    <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
        <div class="display-center col-lg-12">
            <form method="POST">
                <div class="form-group text-danger mt-3">
                    <label for="title">Meeting Title</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter Meeting Title" >
                </div>
                <div class="form-group mt-3">
                    <label for="event_name">Enter Event Name</label></label>
                    <input name="event_name" type="text" class="form-control" id="event_name" placeholder="event_name" >
                </div>
                <div class="form-group mt-3">
                    <label for="creator" >Mentor Name</label></label>
                    <input type="text" class="form-control" id="creator" placeholder="creator" name="creator">
                </div>
                <div class="form-group mt-3">
                    <label for="time">Meeignt Time</label></label>
                    <input type="date" class="form-control" id="time" placeholder="time" name="time">
                </div>
                <div class="form-group mt-3">
                    <label for="Meetlink">Meetlink</label></label>
                    <input type="text" class="form-control" id="Meetlink" placeholder="Meetlink" name="meetlink">
                </div>
                <div class="form-group mt-3">
                    <label for="offline_location">Location</label></label>
                    <input type="text" class="form-control" id="offline_location" placeholder="Location" name="offline_location">
                </div>
                <button type="submit" class="btn btn-danger" name="submit">Submit</button>
            </form>

        </div>
        </div>
    </body>
</html>
