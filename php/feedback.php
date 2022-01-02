<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "drug",'3307');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$pname = mysqli_real_escape_string($link, $_REQUEST['pname']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$books= mysqli_real_escape_string($link, $_REQUEST['books']);
$recovery = mysqli_real_escape_string($link,$_REQUEST['recovery']);
$rehab_help = mysqli_real_escape_string($link,$_REQUEST['rehab_help']);
$environment = mysqli_real_escape_string($link,$_REQUEST['environment']);
$experience = mysqli_real_escape_string($link,$_REQUEST['experience']);
$rate = mysqli_real_escape_string($link,$_REQUEST['rate']);
$improve = mysqli_real_escape_string($link,$_REQUEST['improve']);
$comments = mysqli_real_escape_string($link,$_REQUEST['comments']);

// Attempt insert query execution
$sql = "INSERT INTO feedback (pname,age,books,recovery,rehab_help,environment,experience,rate,improve,comments) VALUES ('$pname', '$age', '$books','$recovery','$rehab_help','$environment','$experience','$rate','$improve','$comments')";
if(mysqli_query($link, $sql)){
    echo "Thank you for your valuable response!";
} else{
    // echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "Failed response";
}
 
// Close connection
mysqli_close($link);
?>

