
<html>
<head>
<title>Zoo Information</title>
</head>
<body>
<form name="txtProjectInfo"method="post">
    <h1 style="font-size: 60px"></h1>
<p style="font-size:40px">Enter the Zoo Name </p>
<input type="text" style="font-size: 25px"name="ZName" placeholder="Zoo name"> 
<p style="font-size:40px">Enter the Location of Zoo </p>
<input type="text" style="font-size: 25px"name="Location" placeholder="Zoo Location">
<p style="font-size:40px">Enter the Timing of the Zoo </p>
<input type="text" style="font-size: 25px"name="Hours" placeholder="Hours">
<p style="font-size:40px">Enter the Agid </p>
<input type="number" style="font-size: 25px"name="AGid" placeholder="ID">
<p style="font-size:40px">Enter the  Contact Number </p>
   <input type="number" style="font-size: 25px"name="Contact" placeholder="Contact"> <input type="submit" name="submit" style="font-size: 25px"formaction="zooins.php"></button><br/>

</form>

<?php
        if(isset($_POST["submit"])) {
            $ZName=$_POST['ZName'];
            $Location=$_POST['Location'];
            $Hours=$_POST['Hours'];
            $Contact=$_POST['Contact'];
            $AGid=$_POST['AGid'];
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2="Insert into zoo values(NULL,'$ZName','$Location','$Hours','$Contact','$AGid')";
            
            $record=mysqli_query($conn,$q2);
            
            }
	       
?>

        
        
    </body>



</html>

