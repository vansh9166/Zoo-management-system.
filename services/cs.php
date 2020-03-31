<html>
<head>
<title>Customer Information</title>
    
</head>
<?php
	$CFame=filter_input(INPUT_POST,'subm');

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
	 
	 $q2="select Cid,CFname,CLname,Email from customer where CFname='$CFame'";
	 $record=mysqli_query($conn,$q2);
	      
?>
<?php

    echo"<table border='1'";
        echo"<tr><th> Cid  </th><th> CFname </th><th> CLname  </th><th> Email </th>";

        while($row=mysqli_fetch_assoc($record))
        {
            echo"<tr><th>{$row['Cid']}</th><th>{$row['CFname']}</th><th>{$row['CLname']}</th><th>{$row['Email']}</th>";   
        }
    echo"</table>";
?>        
           
        
        
    </body>



</html>