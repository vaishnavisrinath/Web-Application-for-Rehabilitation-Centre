<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "drug",'3307');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$contact_number = mysqli_real_escape_string($link, $_REQUEST['contact_number']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$age = mysqli_real_escape_string($link,$_REQUEST['age']);
$address = mysqli_real_escape_string($link,$_REQUEST['address']);
$books = mysqli_real_escape_string($link,$_REQUEST['books']);
$requires = mysqli_real_escape_string($link,$_REQUEST['requires']);
$pwd = mysqli_real_escape_string($link,$_REQUEST['pwd']);

// Attempt insert query execution
$sql = "INSERT INTO patient (name,contact_number,gender,age,address,books,requires,password) VALUES ('$name', '$contact_number', '$gender','$age','$address','$books','$requires','$pwd')";
if(mysqli_query($link, $sql)){
    echo "Your Booking is confirmed.";
} else{
    // echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    echo "Please enter details correctly";
}
 
// Close connection
mysqli_close(link);
)
?>

