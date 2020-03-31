
<html>
<head>
<title>Insert animal details</title>
</head>
<body>
<form name="txtProjectInfo"method="post">
    <h1 style="font-size: 60px"></h1>
<p style="font-size:40px">Enter Animal  Detail Id </p>
<input type="number" style="font-size: 25px"name="ADid" placeholder="Animal Detail Id"> 
<p style="font-size:40px">Enter Height of Animal </p>
<input type="text" style="font-size: 25px"name="Height" placeholder="Animal Height">
<p style="font-size:40px">Enter Weight of Animal </p>
<input type="text" style="font-size: 25px"name="Weight" placeholder="Animal Weight">
<p style="font-size:40px">Enter Age of Animal </p>
<input type="number" style="font-size: 25px"name="Age" placeholder="Age of Animal">
<p style="font-size:40px">Enter Animal Id </p>
<input type="number" style="font-size: 25px"name="Aid" placeholder="Animal Id">
<input type="submit" name="submit" style="font-size: 25px"formaction="animal_detail_ins.php"></button><br/>


</form>

<?php
        if(isset($_POST["submit"])) {
            $ADid=$_POST['ADid'];
            $Height=$_POST['Height'];
            $Weight=$_POST['Weight'];
            $Age=$_POST['Age'];
            $Aid=$_POST['Aid'];
            
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2="Insert into animal_detail values($ADid,'$Height','$Weight',$Age,Aid)";
                
           if ($record=mysqli_query($conn,$q2)) {

            
            echo("done");
        }
             
            }
	       
?>

        
        
    </body>



</html>

