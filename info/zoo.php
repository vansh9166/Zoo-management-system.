<html>
<head>
<title>Project Information</title>
    
</head>
<?php
	$ZName=filter_input(INPUT_POST,'subm');

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
	 
	 $q2="select Zid,ZName,Location,Hours,Contact from zoo where ZName='$ZName'";
	 $record=mysqli_query($conn,$q2);
	      
?>
<?php

    echo"<table border='1'";
        echo"<tr><th> Zid  </th><th> ZName </th><th> Location  </th><th> Hours </th><th> Contact </th>";

        while($row=mysqli_fetch_assoc($record)){
            
        echo"<tr><th>{$row['Zid']}</th><th>{$row['ZName']}</th><th>{$row['Location']}</th><th>{$row['Hours']}</th><th>{$row['Contact']}</th>";
            
        }
    echo"</table>";
?>        
           
        
        
    </body>



</html>