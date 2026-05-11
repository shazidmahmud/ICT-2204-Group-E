<?php

$conn = mysqli_connect("localhost","root","","travels_db");

if(!$conn){
    die("DB Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$destination = $_POST['destination'];
$date = $_POST['date'];
$persons = $_POST['persons'];

$sql = "INSERT INTO bookings
(name,email,destination,date,persons)
VALUES
('$name','$email','$destination','$date','$persons')";

if(mysqli_query($conn,$sql)){
    header("Location: success.php");
}else{
    echo "Error in Booking";
}

?>