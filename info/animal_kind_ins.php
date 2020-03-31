
<html>
<head>
<title>Insert animal kind</title>
</head>
<body>
<form name="txtProjectInfo"method="post">
    <h1 style="font-size: 60px"></h1>
<p style="font-size:40px">Enter Animal kind Id </p>
<input type="number" style="font-size: 25px"name="AKid" placeholder="Animal kind Id"> 
<p style="font-size:40px">Enter Name of Animal </p>
<input type="text" style="font-size: 25px"name="AName" placeholder="Animal Name">
<p style="font-size:40px">Enter Physical Characteristics </p>
<input type="longtext" style="font-size: 25px"name="Physical_Characteristics" placeholder="Physical Characteristics">
<p style="font-size:40px">Enter Zoo Region </p>
<input type="text" style="font-size: 25px"name="Zoo_Region" placeholder="Zoo Region">
<p style="font-size:40px">Enter Diet </p>
<input type="text" style="font-size: 25px"name="Diet" placeholder="Diet">
<p style="font-size:40px">Enter Population Status </p>
<input type="text" style="font-size: 25px"name="Population_Status" placeholder="Population Status">
<input type="submit" name="submit" style="font-size: 25px"formaction="animal_kind_ins.php"></button><br/>


</form>

<?php
        if(isset($_POST["submit"])) {
            $AKid=$_POST['AKid'];
            $AName=$_POST['AName'];
            $Physical_Characteristics=$_POST['Physical_Characteristics'];
            $Zoo_Region=$_POST['Zoo_Region'];
            $Diet=$_POST['Diet'];
            $Population_Status=$_POST['Population_Status'];
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2="Insert into animal_kind values($AKid,'$AName','$Physical_Characteristics','$Zoo_Region','$Diet',$Population_Status)";
                
           if ($record=mysqli_query($conn,$q2)) {

            
            echo("done");
        }
             
            }
	       
?>

        
        
    </body>



</html>

