<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "news_portal";

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

if(isset($_POST['category'])){
    $category = implode(", ", $_POST['category']);
}
else{
    $category = "None";
}

$sql = "INSERT INTO subscribers(name, email, category)
VALUES('$name', '$email', '$category')";

if($conn->query($sql) === TRUE){

    echo "
    <h2 style='text-align:center; margin-top:50px; color:green;'>
    Subscription Successful
    </h2>
    ";

}
else{
    echo "Error: " . $conn->error;
}

$conn->close();

?>