<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reviews.php" class="btn btn-warning">Reviews</a>
        <a href="book.html" class="btn btn-warning">Book your Rehab</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
        <a href="patient.php" class="btn btn-warning">Check My Progress</a>
        <a href="feedback.html" class="btn btn-warning">Feedback</a>

    </p>
    <img src="https://oceanrecoverycentre.com/wp-content/uploads/2017/03/image13.png">
</body>
</html>


