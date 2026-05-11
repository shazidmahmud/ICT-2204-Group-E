<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Player</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div style="padding:50px;">

<?php

if(isset($_GET['player'])){

    $player = $_GET['player'];

    $query = "SELECT * FROM players WHERE name LIKE '%$player%'";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){

            echo "
            <div class='player-card' style='max-width:400px;margin:auto;'>

                <img src='".$row['image']."'>

                <h2>".$row['name']."</h2>

                <p><strong>Role:</strong> ".$row['role']."</p>

                <p><strong>Runs:</strong> ".$row['runs']."</p>

                <p><strong>Wickets:</strong> ".$row['wickets']."</p>

                <p><strong>Strike Rate:</strong> ".$row['strike_rate']."</p>

                <p><strong>Career Stats:</strong> ".$row['career_stats']."</p>

                <p><strong>Match History:</strong> ".$row['match_history']."</p>

            </div>
            ";

        }

    }else{
        echo "<h2>No Player Found</h2>";
    }

}

?>

</div>

</body>
</html>