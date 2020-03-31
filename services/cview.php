<html>
<head>
<title>Customer Information</title>
    
</head>
<?php
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
	 
	 $q2="select c.Cid,c.CFname,c.CLname,c.Email,t.Price,t.Tid from customer as c,ticket as t where c.Cid=t.Cid";
	 $record=mysqli_query($conn,$q2);
	      
?>
<?php

    echo"<table border='1'";
        echo"<tr><th> Cid  </th><th> CFname </th><th> CLname  </th><th> Email </th><th> Price </th><th> Tid </th>";

        while($row=mysqli_fetch_assoc($record))
        {
            echo"<tr><th>{$row['Cid']}</th><th>{$row['CFname']}</th><th>{$row['CLname']}</th><th>{$row['Email']}</th><th>{$row['Price']}</th><th>{$row['Tid']}</th>";   
        }
    echo"</table>";
?>        
           
        
        
    </body>



</html>