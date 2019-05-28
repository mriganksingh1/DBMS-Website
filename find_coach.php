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
    $sql="SELECT * FROM coach WHERE coach_id = '$coach_id'";
    $query=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($query)){
        echo $row['coach_id'];
        echo "      ";
        echo $row['coach_name'];
        echo "      ";
        echo $row['Team'];
        echo "      ";
        echo $row['Age'];   
    }
    header("refresh:2; url=find_coach.html")
?>