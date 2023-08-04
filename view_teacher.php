<?php
	include("env.php");
?>



<!DOCTYPE html>
<html>
<head>
  <title>View teachers</title>
</head>
<body>
  <h1>Viewing teachers... </h1>

  <h2>Select... </h2>

  <?php
  
  $conn= new mysqli("","root","", "school");
  $qry = "SELECT * FROM teacher";
  
  
echo "<table border=1 width=80%>";
echo "<tr>";
	echo "<td>الاسم</td>";
	echo "<td>الشهرة</td>";
	echo "<td>اسم الأب</td>";
	echo "<td>تاريخ الولادة</td>";
	echo "<td>الجنس</td>";
echo "</tr>";

$result = $conn->query($qry);
if ($result->num_rows > 0) {
	while($row = $result->fetch_object())
	{ 
    echo "<tr>"; 
    $r=$row->id;
    echo "<td>$row->firstName</td>" ;
		echo "<td>$row->lastName</td>";
		echo "<td>$row->fatherName</td>";
		echo "<td>$row->birthDate</td>";
    
		if ($row->sex=='F')
		{
			echo "<td>أنثى</td>";
		}
		else
		{
			echo "<td>ذكر</td>";
		}
    echo "<td><input type=\"checkbox\" name=\"items[]\" value=\"$r\"></td>";
		echo "</tr>";
    
    
    
  
  }

}

echo "</table>";

echo "<br>";
if ($conn->connect_error) {
	die("VIEWING FAILED: " . $conn->connect_error);
  }

$conn->close();


echo "<br><a href='index.php'>Home</a>";

?>
  
 </body>
</html>