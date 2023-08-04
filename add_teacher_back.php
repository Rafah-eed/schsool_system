<html dir="RTL">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-6">
<META HTTP-EQUIV="Content-language" CONTENT="ar">
<title>إضافة طالب</title>
</head>

<body>

<?php 

if (!isset($_POST["fn"]) or $_POST["fn"]==""){
    echo "<font color=red>يجب إدخال اسم المدرس</font>";
	exit;
}
if(!isset($_POST["ln"]) or $_POST["ln"]==""){
	echo "<font color=red>يجب إدخال شهرة المدرس</font>";
	exit;
}
if(!isset($_POST["fthn"]) or $_POST["fthn"]==""){
	echo "<font color=red>يجب إدخال اسم الأب</font>";
	exit;
}

if(!isset($_POST["birthdate"]) or $_POST["birthdate"]==""){
	echo "<font color=red>يجب إدخال تاريخ الولادة</font>";
	exit;
}

$fn = $_POST["fn"];
$ln = $_POST["ln"];
$fthn = $_POST["fthn"];
$birthdate = $_POST["birthdate"];
$sex = $_POST["sex"];

$conn= new mysqli("","root","", "school");
$qry = "INSERT INTO teacher (firstName, lastName, fatherName, birthDate, sex)".
	   "VALUES ('$fn', '$ln', '$fthn', '$birthdate', '$sex')";
$conn->query($qry);
if ($conn->connect_error) {
	die("INSERTION FAILED: " . $conn->connect_error);
}
$conn->close();
echo "تمت إضافة المدرس";

echo "<br><a href='index.php'>Home >_< </a>";

	

?>


</body>
</html>