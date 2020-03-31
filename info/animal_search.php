<html>
<head>
<title>Search Animal</title>
    
</head>
<?php
	$AName=filter_input(INPUT_POST,'subm');

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
   	if(!$conn ){
            die('Could not connect: ' . mysqli_error());
         }
	else{
	echo "ZOO";
	}
	 
	 $q2="SELECT animal5.Aid,animal5.Gender,animal5.Cage_Number,animal5.Feed_Time,animal_detail.Height,animal_detail.Weight,animal_detail.Age,animal_kind.AName,animal_kind.Physical_Characteristics,animal_kind.Zoo_Region,animal_kind.Diet,animal_kind.Population_Status from animal5,animal_detail,animal_kind where animal5.Aid=animal_detail.Aid and animal_kind.AKid=animal5.AKid and AName='$AName'";
	 $record=mysqli_query($conn,$q2);
	      
?>
<?php

    echo"<table border='1'";
        echo"<tr><th> Aid </th><th> Gender </th><th> Cage_Number </th><th> Feed_Time </th><th> Height </th><th> Weight </th><th> Age </th><th> AName </th><th> Physical_Characteristics </th><th> Zoo_Region </th><th> Diet </th><th> Population_Status </th>";

        while($row=mysqli_fetch_assoc($record)){
            
        echo"<tr><th> {$row['Aid']}</th><th>{$row['Gender']}</th><th>{$row['Cage_Number']}</th><th> {$row['Feed_Time']}</th><th>{$row['Height']}</th><th> {$row['Weight']}</th><th> {$row['Age']}</th><th> {$row['AName']}</th><th> {$row['Physical_Characteristics']}</th><th> {$row['Zoo_Region']}</th><th> {$row['Diet']}</th><th> {$row['Population_Status']}</th>";
            
        }
    echo"</table>";
?>        
           
        
        
    </body>



</html>