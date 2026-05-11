<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Team</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <div class="logo">BCB</div>

    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="team.php" class="active">Team</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">News</a></li>
    </ul>
</nav>

<div class="team-container">

<?php

$query = "SELECT * FROM players";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result)){

?>

<div class="player-card">

    <img src="<?php echo $row['image']; ?>">

    <h3><?php echo $row['name']; ?></h3>

    <p><strong>Role:</strong> <?php echo $row['role']; ?></p>

    <p>Runs: <?php echo $row['runs']; ?></p>

    <p>Wickets: <?php echo $row['wickets']; ?></p>

    <p>Strike Rate: <?php echo $row['strike_rate']; ?></p>

</div>

<?php } ?>

</div>

</body>
</html>