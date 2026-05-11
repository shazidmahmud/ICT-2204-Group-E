<?php

$conn = mysqli_connect("localhost", "root", "", "pharmacy_db");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

/* =======================
   PRESCRIPTION UPLOAD
======================= */

if(isset($_POST['submit'])) {

    $patient = $_POST['patient_name'];
    $doctor = $_POST['doctor_name'];
    $phone = $_POST['phone'];
    $notes = $_POST['notes'];

    $file = $_FILES['prescription']['name'];
    $tmp = $_FILES['prescription']['tmp_name'];

    // create uploads folder first
    move_uploaded_file($tmp, "uploads/" . $file);

    $sql = "INSERT INTO prescriptions
            (patient_name, doctor_name, phone, notes, file)
            VALUES
            ('$patient','$doctor','$phone','$notes','$file')";

    if(mysqli_query($conn, $sql)){
        echo "Uploaded Successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>