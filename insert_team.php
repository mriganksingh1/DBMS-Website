<?php
    
    
  $con=mysqli_connect('127.0.0.1','root','','')
;  
  if(!$con)
    
  {

     echo 'Not Connected To Server';
    
  }
    
   if(!mysqli_select_db($con,'Sports'))
    
  {
        
	echo 'Database Not Selected';
    
  }
    
   $team_id=$_POST['team_id'];
    
   $team_name=$_POST['team_name'];
    
   $sport=$_POST['sport_name'];
    
   $gender=$_POST['gender'];
    
   $coach_id=$_POST['coach_id'];
    
   $sql="INSERT INTO team (team_id,team_name,Sport,Gender) VALUES ('$team_id','$team_name','$sport','$gender')";
   

   $sql1="INSERT INTO coaches (coach_id,team_id) VALUES ('$coach_id','$team_id')";    
   if(mysqli_query($con,$sql))      
   {

	if(
mysqli_query($con,$sql1))
	{        
           echo 'Inserted';

	}

    	else
	{
	    echo 'Not Inserted' ;
	}
   }
    
   else
    
   {
        
          echo 'Not Inserted';
    
   }
    
   header("refresh:2; url=players.html");

?>