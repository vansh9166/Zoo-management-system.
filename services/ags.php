<html>
<head>
<title>Guide Information</title>
    
</head>
<?php
	$EFame=filter_input(INPUT_POST,'subm');

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
	 
	 $q2="select e.EFname,e.ELname,e.Phone_No,ag.AGid,ag.Zoo_Introduction,ag.Updated_Year from animal_guide as ag,employee as e,zoo as z where ag.AGid=z.AGid and z.Zid=E.Zid and EFname='$EFame'";
	 $record=mysqli_query($conn,$q2);
	      
?>
<?php

    echo"<table border='1'";
        echo"<tr><th> EFname  </th><th> ELname </th><th> Phone_No  </th><th> AGid </th><th> Zoo_Introduction </th><th> Updated_Year </th>";

        while($row=mysqli_fetch_assoc($record)){
            
        echo"<tr><th>{$row['EFname']}</th><th>{$row['ELname']}</th><th>{$row['Phone_No']}</th><th>{$row['AGid']}</th><th>{$row['Zoo_Introduction']}</th><th>{$row['Updated_Year']}</th>";
            
        }
    echo"</table>";
?>        
           
        
        
    </body>



</html>