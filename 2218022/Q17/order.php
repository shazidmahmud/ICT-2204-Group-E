<?php

$conn = mysqli_connect("localhost","root","","retail_shop");

$name = $_POST['name'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$items = $_POST['items'];

$sql = "INSERT INTO orders(name,gender,address,phone,items)
VALUES('$name','$gender','$address','$phone','$items')";

if(mysqli_query($conn,$sql)){
    echo "<h2>Order Placed Successfully!</h2>";
}else{
    echo "Error";
}

?>