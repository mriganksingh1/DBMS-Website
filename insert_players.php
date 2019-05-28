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
   $player_id=$_POST['player_id']; 
   $player_name=$_POST['player_name'];
   $age=$_POST['age'];
   $matches=$_POST['matches_played'];
   $team_id=$_POST['team_id'];
   $badminton=$_POST['badminton'];
   $cricket=$_POST['cricket'];
   $national_ranking=$_POST['national_ranking'];
   $ddca_ranking=$_POST['ranking'];
   $batsman=$_POST['batsman'];
   $bowler=$_POST['bowler'];
   $runs_scored=$_POST['runs_scored'];
   $wickets_taken=$_POST['wickets_taken'];	 
   $sql="INSERT INTO players (player_id,player_name,age,matches_played) VALUES ('$player_id','$player_name','$age','$matches')";
   $sql1=NULL;
   $sql2=NULL;
   $sql3="INSERT INTO playsfor (player_id,team_id) VALUES ('$player_id','$team_id')";
   if($badminton=='Y' || $badminton=='y')
   {
	$sql1="INSERT INTO badmintonplayers (player_id,National_Ranking) VALUES ('$player_id','$national_ranking')";
   }
   else
   {
	$sql1="INSERT INTO cricketplayers (player_id,DDCA_Ranking) VALUES ('$player_id','$ddca_ranking')";
	if(($batsman=='Y' || $batsman=='y') && ($bowler=='Y' || $bowler=='y'))
	{
		$sql2="INSERT INTO allrounder (player_id,runs,wickets) VALUES ('$player_id','$runs_scored','$wickets_taken')";		
	}
	else if($batsman=='Y' || $batsman=='y')
	{
		$sql2="INSERT INTO batsman (player_id,runs_scored) VALUES ('$player_id','$runs_scored')";
	}
	else if($bowler=='Y' || $bowler=='y')
	{
		$sql2="INSERT INTO bowler (player_id,wickets_taken) VALUES ('$player_id','$wickets_taken')";
	}
   }
echo $sql2;
   mysqli_query($con,$sql3);
   if(mysqli_query($con,$sql))      
   {

	if(mysqli_query($con,$sql1))
	{ 
	   if($badminton!='Y' && $badminton!='y')
	   {    
           	if(mysqli_query($con,$sql2))
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
            echo 'Inserted';
        }
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