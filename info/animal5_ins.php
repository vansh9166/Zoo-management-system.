
<html>
<head>
<title>Insert animal5</title>
</head>
<body>
<form name="txtProjectInfo"method="post">
    <h1 style="font-size: 60px"></h1>
<p style="font-size:40px">Enter Animal Id </p>
<input type="number" style="font-size: 25px"name="Aid" placeholder="Animal Id"> 
<p style="font-size:40px">Enter Gender of Animal </p>
<input type="text" style="font-size: 25px"name="Gender" placeholder="Animal Gender">
<p style="font-size:40px">Enter Cage Number </p>
<input type="number" style="font-size: 25px"name="Cage_Number" placeholder="Cage Number">
<p style="font-size:40px">Enter Feed Time </p>
<input type="text" style="font-size: 25px"name="Feed_Time" placeholder="Feed Time">
<p style="font-size:40px">Enter Animak Kind id </p>
   <input type="number" style="font-size: 25px"name="AKid" placeholder="AKid"> <input type="submit" name="submit" style="font-size: 25px"formaction="animal5_ins.php"></button><br/>

</form>

<?php
        if(isset($_POST["submit"])) {
            $Aid=$_POST['Aid'];
            $Gender=$_POST['Gender'];
            $Cage_Number=$_POST['Cage_Number'];
            $Feed_Time=$_POST['Feed_Time'];
            $AKid=$_POST['AKid'];
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2="Insert into animal5 values('$Aid','$Gender','$Cage_Number','$Feed_Time','$AKid')";
            
            $record=mysqli_query($conn,$q2);
            
            }
	       
?>

        
        
    </body>



</html>

