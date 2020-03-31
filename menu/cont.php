
<html>
<head>
<title>ZOO Information</title>
</head>
<body>
<form name="ZOO"method="post">
    <h1 style="font-size: 60px"></h1>
<p style="font-size:40px">Enter the New Timings of name </p>
<input type="text" style="font-size: 25px"name="Contact" placeholder="Contact"> 
<p style="font-size:40px">Enter the Zoo ID </p>
   <input type="number" style="font-size: 25px"name="Zid" placeholder="Zoo ID"> <input type = 'submit' name='submit' value='submit'  style="font-size: 25px" formaction="cont.php"/><br/>

</form>
<?php
if(isset($_POST['submit']))
{
        
            $Contact=$_POST['Contact'];
            echo $Contact;
            $Zid=$_POST['Zid'];
            echo $Zid;
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2=" update zoo set Contact='$Contact' where Zid='$Zid'";
            echo $q2;
            $record=mysqli_query($conn,$q2);
            if($record){
                echo"<br>";
                echo "Your Contact is  Updated";
        }else{
            echo"<br>";
            echo "Some Information is wrong";
        }
    } 
?>

        
        
    </body>



</html>

