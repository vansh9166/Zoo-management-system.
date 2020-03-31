<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style link="" href="info.css"></style>
	<title>Animal view</title>
</head>
<body>
<div>
<?php
$conn=mysqli_connect("localhost","root","","zoo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT animal5.Aid,animal5.Gender,animal5.Cage_Number,animal5.Feed_Time,animal_detail.Height,animal_detail.Weight,animal_detail.Age,animal_kind.AName,animal_kind.Physical_Characteristics,animal_kind.Zoo_Region,animal_kind.Diet,animal_kind.Population_Status from animal5 as animal5,animal_detail as animal_detail,animal_kind as animal_kind where animal5.Aid=animal_detail.Aid and animal_kind.AKid=animal5.AKid";
$result=mysqli_query($conn,$sql)
?>
<?php

echo"<table border='1'";
  // Fetch row
  echo "<tr><th> Aid </th><th> Gender </th><th> Cage_Number </th><th> Feed_Time </th><th> Height </th><th> Weight </th><th> Age </th><th> AName </th><th> Physical_Characteristics </th><th> Zoo_Region </th><th> Diet </th><th> Population_Status </th>";
  while($row1=mysqli_fetch_assoc($result)){
    echo "<tr><th> {$row1['Aid']}</th><th>{$row1['Gender']}</th><th>{$row1['Cage_Number']}</th><th> {$row1['Feed_Time']}</th><th>{$row1['Height']}</th><th> {$row1['Weight']}</th><th> {$row1['Age']}</th><th> {$row1['AName']}</th><th> {$row1['Physical_Characteristics']}</th><th> {$row1['Zoo_Region']}</th><th> {$row1['Diet']}</th><th> {$row1['Population_Status']}</th>";
  }
    echo"</table>";

mysqli_close($conn);
?>

</div>	
</body>
</html>