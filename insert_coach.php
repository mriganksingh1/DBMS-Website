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
    $coach_id=$_POST['coach_id'];
    $coach_name=$_POST['coach_name'];
    $team_name=$_POST['team_name'];
    $age=$_POST['age'];
    $sql="INSERT INTO coach (coach_id,coach_name,Team,Age) VALUES ('$coach_id','$coach_name','$team_name','$age')";
    mysqli_query($con,$sql);
    header("refresh:2; url=coach.html");
?>