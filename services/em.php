
<html>
<head>
<title>ZOO Information</title>
</head>
<body>
<form name="ZOO"method="post">
    <h1 style="font-size: 60px"></h1>
<p style="font-size:40px">Enter the Email of Customer </p>
<input type="text" style="font-size: 25px"name="Email" placeholder="Email"> 
<p style="font-size:40px">Enter the Customer ID </p>
   <input type="number" style="font-size: 25px"name="Cid" placeholder="Customer ID"> <input type = 'submit' name='submit' value='submit' style="font-size: 25px"formaction="em.php"/><br/>

</form>

<?php
if(isset($_POST['submit']))
{
            $Email=$_POST['Email'];
          
            $Cid=$_POST['Cid'];
          
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2=" update customer set Email='$Email' where Cid='$Cid'";
            $record=mysqli_query($conn,$q2);
            if($record){
                echo"<br>";
                echo "Your Customer Email is Updated";
        }else{
            echo"<br>";
            echo "Some Information is wrong";
        }
    }
?>

        
        
    </body>



</html>

