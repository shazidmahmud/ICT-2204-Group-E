<?php

$conn = mysqli_connect("localhost","root","","retail_shop");

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts(name,phone,message)
VALUES('$name','$phone','$message')";

if(mysqli_query($conn,$sql)){
    echo "Message Sent Successfully";
}else{
    echo "Error";
}

?>