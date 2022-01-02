<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reviews</title>
  <!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head> 
<body>
  
<?php
$con=new mysqli("localhost","root","root","drug",'3307');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "select f.pname,f.age,r.name,f.recovery,f.rehab_help,f.environment,f.experience,f.rate from feedback as f,rehabs as r where f.books=r.rno";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Age</th><th>Rehab Name</th><th>Recovery</th><th>Has Rehab Helped</th><th>Social Environment of Rehab</th><th>Overall Experience</th><th>Rating</th></tr>";
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" .$row["pname"]. " " . "</td><td>" . $row["age"]. " " . "</td><td>" . $row["name"]. " " . "</td><td>" . $row["recovery"]. " " . "</td><td>" . $row["rehab_help"]." ". "</td><td>" . $row["environment"]. "</td><td>" . $row["experience"]. " " . "</td><td>" .$row["rate"]. "</td></tr>" ;
    }
    echo "</table>";
} else {
    echo "0 results";
           
    }
    $con->close();
          
?>


</body>
</html>