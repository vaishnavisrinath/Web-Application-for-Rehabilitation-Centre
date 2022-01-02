<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 

<!Doctype html>
<html>
<head>
<title> 
    Progress Bar
</title>


<script language=JavaScript>
    function incr() {
    var v1=document.getElementById('p1').value;
    document.getElementById("p1").value= v1 + 20;
    }
    </script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<!-- <link rel="stylesheet" href="pro.css"> -->
</head>
<body >
 <h1 style="font-family:'Times New Roman'; text-align:center; background-color:royalblue; color:lightgray;height:70px" ><u>Your Progress Report</u></h1>
 <section style=" background-color:rgb(126, 155, 248, 0.40)">
<h3 style="font-family:'Times New Roman';">Patient's Name:<b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h3><br>
<!--<h3 style="font-family:'Times New Roman';">Patient's Age:</h3>
<h3 style="font-family:'Times New Roman';">Rehabilitation Center Name:</h3>
<h3 style="font-family:'Times New Roman';">Treatment choice:</h3>-->
<h3 style="font-family:'Times New Roman';">Treatment Progress:</h3>
<progress style="width:300px; height:40px; color:green " value="40" data-label="40" max="100" id=p1></progress>
</section>

<section style="background-color:rgb(154, 154, 156, 0.40);"> 
<h2 style="font-family:'Times New Roman';">Current State:</h2><br> 
<h4 style="font-family:'Times New Roman';" > Mood: <input type="checkbox"> Angry &nbsp;&nbsp; <input type="checkbox"> Sad  &nbsp;&nbsp;  <input type="checkbox"> Energetic &nbsp;&nbsp; <input type="checkbox"> Depressed  &nbsp;&nbsp; <input type="checkbox"> None  &nbsp;&nbsp; </h4><br>
<h4 style="font-family:'Times New Roman';" > Anxiety: <input type="checkbox"> Worried &nbsp;&nbsp; <input type="checkbox"> Compulsive  &nbsp;&nbsp;  <input type="checkbox"> Scared &nbsp;&nbsp; <input type="checkbox"> Panic Attack  &nbsp;&nbsp; <input type="checkbox"> None  &nbsp;&nbsp; </h4><br>
<h4 style="font-family:'Times New Roman';" > Thoughts: <input type="checkbox"> Delusional &nbsp;&nbsp; <input type="checkbox"> Hallucinations  &nbsp;&nbsp;  <input type="checkbox"> Obsession &nbsp;&nbsp; <input type="checkbox"> Disorganized Speech  &nbsp;&nbsp; <input type="checkbox"> None  &nbsp;&nbsp; </h4><br>
<h4 style="font-family:'Times New Roman';" > Behavior: <input type="checkbox"> Aggressive &nbsp;&nbsp; <input type="checkbox"> Traunt  &nbsp;&nbsp;  <input type="checkbox"> Runaway &nbsp;&nbsp; <input type="checkbox"> Hyperactive  &nbsp;&nbsp; <input type="checkbox"> None  &nbsp;&nbsp; </h4><br>

</section><br><br><br>
<h2 style="font-family:'Times New Roman'; text-align:center; color:royalblue;height:70px" >Thank You!</h2>

</body>
</html>