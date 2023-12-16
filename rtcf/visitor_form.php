<?php
$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "rtcf";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $age = $_POST['Age'];
    $profileurl = $_POST['Url'];
    $comment = $_POST['Comment'];
    
    // Insert data into the database
    $sql = "INSERT INTO visitors(Name,Email,Password,Age,Profile_URL,Comment)
            VALUES ('$name', '$email', '$password', '$age', '$profileurl', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
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
        <title></title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
                                <!-- BEGIN: Form Validation -->
                                <div class="intro-y box">
                                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                        <form action="visitor_form.php" method="post">
                                        <h2 class="font-medium text-base mr-auto">
                                            Implementation Of Join at Carbon Footprint Event
                                        </h2>
                                        <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                                            <label class="form-check-label ml-0" for="show-example-1"></label>
                                            <input id="show-example-1" data-target="#form-validation" class="show-code form-check-input mr-0 ml-3" type="checkbox">
                                        </div>
                                    </div>
                                    <div id="form-validation" class="p-5">
                                        <div class="preview">
                                            <!-- BEGIN: Validation Form -->
                                            <form class="validate-form">
                                                <div class="input-form">
                                                    <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row"> Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 2 characters</span> </label>
                                                    <input id="validation-form-1" type="text" name="Name" class="form-control" placeholder="John Legend" minlength="2" required>
                                                </div>
                                                <div class="input-form mt-3">
                                                    <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row"> Email <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, email address format</span> </label>
                                                    <input id="validation-form-2" type="email" name="Email" class="form-control" placeholder="example@gmail.com" required>
                                                </div>
                                                <div class="input-form mt-3">
                                                    <label for="validation-form-3" class="form-label w-full flex flex-col sm:flex-row"> Password <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 6 characters</span> </label>
                                                    <input id="validation-form-3" type="password" name="Password" class="form-control" placeholder="secret" minlength="6" required>
                                                </div>
                                                <div class="input-form mt-3">
                                                    <label for="validation-form-4" class="form-label w-full flex flex-col sm:flex-row"> Age <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, integer only & maximum 3 characters</span> </label>
                                                    <input id="validation-form-4" type="number" name="Age" class="form-control" placeholder="21" required>
                                                </div>
                                                <div class="input-form mt-3">
                                                    <label for="validation-form-5" class="form-label w-full flex flex-col sm:flex-row"> Profile URL <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Optional, URL format</span> </label>
                                                    <input id="validation-form-5" type="url" name="Url" class="form-control" placeholder="https://google.com">
                                                </div>
                                                <div class="input-form mt-3">
                                                    <label for="validation-form-6" class="form-label w-full flex flex-col sm:flex-row"> Comment <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 10 characters</span> </label>
                                                    <textarea id="validation-form-6" class="form-control" name="Comment" placeholder="Type your comments" minlength="10" required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-5">Submit</button>
                                            </form>
                                            <!-- END: Validation Form -->
                                            <!-- BEGIN: Success Notification Content -->
                                            <div id="success-notification-content" class="toastify-content hidden flex" >
                                                <i class="text-success" data-lucide="check-circle"></i> 
                                                <div class="ml-4 mr-4">
                                                    <div class="font-medium">Submit success!</div>
                                                    <div class="text-slate-500 mt-1"> Please check your e-mail for further info! </div>
                                                </div>
                                            </div>
                                            <!-- END: Success Notification Content -->
                                            <!-- BEGIN: Failed Notification Content -->
                                            <div id="failed-notification-content" class="toastify-content hidden flex" >
                                                <i class="text-danger" data-lucide="x-circle"></i> 
                                                <div class="ml-4 mr-4">
                                                    <div class="font-medium">Submission failed!</div>
                                                    <div class="text-slate-500 mt-1"> Please check the fileld form. </div>
                                                </div>
                                            </div>
                                            <!-- END: Failed Notification Content -->
                                        </div>
                                        <div class="source-code hidden">
                                            <button data-target="#copy-form-validation" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                                            <div class="overflow-y-auto mt-3 rounded-md">
                                                <pre id="copy-form-validation" class="source-preview"> <code class="html"> HTMLOpenTag!-- BEGIN: Validation Form --HTMLCloseTag HTMLOpenTagform class=&quot;validate-form&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;input-form&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-1&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Name HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagRequired, at least 2 charactersHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;validation-form-1&quot; type=&quot;text&quot; name=&quot;name&quot; class=&quot;form-control&quot; placeholder=&quot;John Legend&quot; minlength=&quot;2&quot; requiredHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;input-form mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-2&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Email HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagRequired, email address formatHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;validation-form-2&quot; type=&quot;email&quot; name=&quot;email&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot; requiredHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;input-form mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-3&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Password HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagRequired, at least 6 charactersHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;validation-form-3&quot; type=&quot;password&quot; name=&quot;password&quot; class=&quot;form-control&quot; placeholder=&quot;secret&quot; minlength=&quot;6&quot; requiredHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;input-form mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-4&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Age HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagRequired, integer only &amp; maximum 3 charactersHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;validation-form-4&quot; type=&quot;number&quot; name=&quot;age&quot; class=&quot;form-control&quot; placeholder=&quot;21&quot; requiredHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;input-form mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-5&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Profile URL HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagOptional, URL formatHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;validation-form-5&quot; type=&quot;url&quot; name=&quot;url&quot; class=&quot;form-control&quot; placeholder=&quot;https://google.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;input-form mt-3&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;validation-form-6&quot; class=&quot;form-label w-full flex flex-col sm:flex-row&quot;HTMLCloseTag Comment HTMLOpenTagspan class=&quot;sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500&quot;HTMLCloseTagRequired, at least 10 charactersHTMLOpenTag/spanHTMLCloseTag HTMLOpenTag/labelHTMLCloseTag HTMLOpenTagtextarea id=&quot;validation-form-6&quot; class=&quot;form-control&quot; name=&quot;comment&quot; placeholder=&quot;Type your comments&quot; minlength=&quot;10&quot; requiredHTMLCloseTagHTMLOpenTag/textareaHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagbutton type=&quot;submit&quot; class=&quot;btn btn-primary mt-5&quot;HTMLCloseTagRegisterHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/formHTMLCloseTag HTMLOpenTag!-- END: Validation Form --HTMLCloseTag HTMLOpenTag!-- BEGIN: Success Notification Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;success-notification-content&quot; class=&quot;toastify-content hidden flex&quot; HTMLCloseTag HTMLOpenTagi class=&quot;text-success&quot; data-lucide=&quot;check-circle&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTagdiv class=&quot;ml-4 mr-4&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;font-medium&quot;HTMLCloseTagRegistration success!HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-slate-500 mt-1&quot;HTMLCloseTag Please check your e-mail for further info! HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Success Notification Content --HTMLCloseTag HTMLOpenTag!-- BEGIN: Failed Notification Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;failed-notification-content&quot; class=&quot;toastify-content hidden flex&quot; HTMLCloseTag HTMLOpenTagi class=&quot;text-danger&quot; data-lucide=&quot;x-circle&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTagdiv class=&quot;ml-4 mr-4&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;font-medium&quot;HTMLCloseTagRegistration failed!HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-slate-500 mt-1&quot;HTMLCloseTag Please check the fileld form. HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Failed Notification Content --HTMLCloseTag </code> </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Form Validation -->
      
