
<html>
<head>
<title>Zoo Information</title>
</head>
<body>
<form name="txtProjectInfo"method="post">
    <h1 style="font-size: 60px"></h1>
<p style="font-size:40px">Enter the Ticket ID </p>
<input type="text" style="font-size: 25px"name="Tid" placeholder="Ticket ID"> 
<p style="font-size:40px">Enter the Ticket of Zoo </p>
<input type="text" style="font-size: 25px"name="Price" placeholder="Ticket Price">
<p style="font-size:40px">Customer ID </p>
<input type="number" style="font-size: 25px"name="Cid" placeholder="ID">
<input type="submit" name="submit" style="font-size: 25px"formaction="tins.php"></button><br/>

</form>

<?php
        if(isset($_POST["submit"])) {
            $Tid=$_POST['Tid'];
            $Price=$_POST['Price'];
            $Cid=$_POST['Cid'];
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2="Insert into ticket values('$Tid','$Price','$Cid')";
            if($record=mysqli_query($conn,$q2))
            {
                echo 'Ticket Booked';
            }else
            {
                echo 'Something went worng';
            }
            
            }
	       
?>

        
        
    </body>



</html>

