<?php
     $con=mysqli_connect('127.0.0.1','root','','');
    if(!$con)
    {
        echo 'Not Connected To Server';
    }
    if(!mysqli_select_db($con,'Sports'))
    {    
	   echo 'Database Not Selected';
    }
    $sql1="SELECT * FROM allrounder";
    $sql2="SELECT * FROM badmintonplayers";
    $sql3="SELECT * FROM batsman";
    $sql4="SELECT * FROM bowler";    
    $sql5="SELECT * FROM coach";
    $sql6="SELECT * FROM coaches";
    $sql7="SELECT * FROM cricketplayers";
    $sql8="SELECT * FROM players";
    $sql9="SELECT * FROM playsfor";
    $sql10="SELECT * FROM team";
    $query1=mysqli_query($con,$sql1);
    $query2=mysqli_query($con,$sql2);
    $query3=mysqli_query($con,$sql3);
    $query4=mysqli_query($con,$sql4);
    $query5=mysqli_query($con,$sql5);
    $query6=mysqli_query($con,$sql6);
    $query7=mysqli_query($con,$sql7);
    $query8=mysqli_query($con,$sql8);
    $query9=mysqli_query($con,$sql9);
    $query10=mysqli_query($con,$sql10);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Display Info</title>
    </head>
    <body>
        <div id="container">
                <h1>Display Information of all tables</h1>
            <table border="1" width="600" cellpadding="1" cellspacing="1">
                <tr>
                    <th>Player_id</th>
                    <th>Runs</th>
                    <th>Wickets_taken</th>
                </tr>
                <?php
    while($row=mysqli_fetch_assoc($query1))
    {
        echo "<tr>";
        echo "<td>".$row['player_id']."</td>";
        echo "<td>".$row['runs']."</td>";
        echo "<td>".$row['wickets']."</td>";
        echo "</tr>";
    }
?>
            </table>
            <br>
            <br>
            <table border="1" width="600" cellpadding="1" cellspacing="1">
                <tr>
                    <th>Player_id</th>
                    <th>National_Ranking</th>
                </tr>
                <?php
     while($row=mysqli_fetch_assoc($query2))
    {
        echo "<tr>";
        echo "<td>".$row['player_id']."</td>";
        echo "<td>".$row['National_Ranking']."</td>";
        echo "</tr>";
    }
?>
            </table>
            <br>
            <br>
            <table border="1" width="600" cellpadding="1" cellspacing="1">
                <tr>
                    <th>Player_id</th>
                    <th>Runs</th>
                </tr>
                <?php
    while($row=mysqli_fetch_assoc($query3))
    {
        echo "<tr>";
        echo "<td>".$row['player_id']."</td>";
        echo "<td>".$row['runs_scored']."</td>";
        echo "</tr>";
    }
?>
            </table>
            <br>
            <br>
            <table border="1" width="600" cellpadding="1" cellspacing="1">
                <tr>
                    <th>Player_id</th>
                    <th>Wickets_taken</th>
                </tr>
                <?php
    while($row=mysqli_fetch_assoc($query4))
    {
        echo "<tr>";
        echo "<td>".$row['player_id']."</td>";
        echo "<td>".$row['wickets_taken']."</td>";
        echo "</tr>";
    }
?>
            </table>
            <br>
            <br>
            <table border="1" width="600" cellpadding="1" cellspacing="1">
                <tr>
                    <th>Coach_id</th>
                    <th>Coach_name</th>
                    <th>Team</th>
                    <th>Age</th>
                </tr>
                <?php
    while($row=mysqli_fetch_assoc($query5))
    {
        echo "<tr>";
        echo "<td>".$row['coach_id']."</td>";
        echo "<td>".$row['coach_name']."</td>";
        echo "<td>".$row['Team']."</td>";
        echo "<td>".$row['Age']."</td>";
        echo "</tr>";
    }
?>
            </table>
            <br>
            <br>
            <table border="1" width="600" cellpadding="1" cellspacing="1">
                <tr>
                    <th>Coach_id</th>
                    <th>Team_id</th>
                </tr>
                <?php
    while($row=mysqli_fetch_assoc($query6))
    {
        echo "<tr>";
        echo "<td>".$row['coach_id']."</td>";
        echo "<td>".$row['team_id']."</td>";
        echo "</tr>";
    }
?>
            </table>
            <br>
            <br>
            <table border="1" width="600" cellpadding="1" cellspacing="1">
                <tr>
                    <th>Player_id</th>
                    <th>DDCA_Ranking</th>
                </tr>
                <?php
    while($row=mysqli_fetch_assoc($query7))
    {
        echo "<tr>";
        echo "<td>".$row['player_id']."</td>";
        echo "<td>".$row['DDCA_Ranking']."</td>";
        echo "</tr>";
    }
?>
            </table>
            <br>
            <br>
            <table border="1" width="600" cellpadding="1" cellspacing="1">
                <tr>
                    <th>Player_id</th>
                    <th>Player_name</th>
                    <th>Age</th>
                    <th>Matches_played</th>
                </tr>
                <?php
    while($row=mysqli_fetch_assoc($query8))
    {
        echo "<tr>";
        echo "<td>".$row['player_id']."</td>";
        echo "<td>".$row['player_name']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['matches_played']."</td>";
        echo "</tr>";
    }
?>
            </table>
            <br>
            <br>

            <table border="1" width="600" cellpadding="1" cellspacing="1">
                <tr>
                    <th>Player_id</th>
                    <th>Team_id</th>
                </tr>
                <?php
    while($row=mysqli_fetch_assoc($query9))
    {
        echo "<tr>";
        echo "<td>".$row['player_id']."</td>";
        echo "<td>".$row['team_id']."</td>";
        echo "</tr>";
    }
?>
            </table>
            <br>
            <br>
            <table border="1" width="600" cellpadding="1" cellspacing="1">
                <tr>
                    <th>Team_id</th>
                    <th>Team_name</th>
                    <th>Sport</th>
                    <th>Gender</th>
                </tr>
                <?php
     while($row=mysqli_fetch_assoc($query10))
    {
        echo "<tr>";
        echo "<td>".$row["team_id"]."</td>";
        echo "<td>".$row["team_name"]."</td>";
        echo "<td>".$row["Sport"]."</td>";
        echo "<td>".$row["Gender"]."</td>";
        echo "</tr>";
    }
?>
            </table>
            <br>
            <br>
        </div>
    </body>
</html>