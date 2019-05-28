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
    $team_id=$_POST['team_id'];
    $sql="SELECT * FROM team WHERE team_id = '$team_id'";
    $sql1="SELECT * FROM coaches WHERE team_id = '$team_id'";
    $query=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($query)){
        echo $row['team_id'];
        echo "      ";
        echo $row['team_name'];
        echo "      ";
        echo $row['Sport'];
        echo "      ";
        echo $row['Gender'];   
    }
    $query1=mysqli_query($con,$sql1);
    while($row1=mysqli_fetch_assoc($query1))
    {
        echo "      ";
        echo $row1['coach_id'];
        echo "      ";
    }
    header("refresh:100; url=find_coach.html")
?>