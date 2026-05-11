<?php
$conn = mysqli_connect("localhost","root","","travel_db");

$result = mysqli_query($conn,"SELECT * FROM bookings ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2 class="section">All Bookings (Admin Panel)</h2>

<table>

<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Destination</th>
    <th>Date</th>
    <th>Persons</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['destination']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['persons']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>