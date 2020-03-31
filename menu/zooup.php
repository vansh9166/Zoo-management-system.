
<html>
<head>
<title>ZOO Information</title>
</head>
<body>
<form name="ZOO"method="post">
    <h1 style="font-size: 60px"></h1>
<p style="font-size:40px">Enter the New Zoo name </p>
<input type="text" style="font-size: 25px"name="sub1" placeholder="New Name"> 
<p style="font-size:40px">Enter the Zoo ID </p>
   <input type="number" style="font-size: 25px"name="sub" placeholder="Zoo ID"> <input type = 'submit' name='submit' value='submit' style="font-size: 25px"formaction="zooup.php"/><br/>

</form>

<?php
    if(isset($_POST['submit']))
    {
        $ZName=$_POST['sub1'];
        
        $Zid=$_POST['sub'];
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
        if(!$conn ){
                die('Could not connect: ' . mysqli_error());
            }
            
        
        $q2=" update zoo set ZName='$ZName' where Zid='$Zid'";

        $record=mysqli_query($conn,$q2);

        
    }

       
?>

        
        
    </body>



</html>

