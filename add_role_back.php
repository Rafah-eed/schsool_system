<html dir="RTL">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-6">
<META HTTP-EQUIV="Content-language" CONTENT="ar">
<title>إضافة دور</title>
</head>

<body>

<?php 

if (!isset($_POST["name"]) or $_POST["name"]==""){
    echo "<font color=red> يجب إدخال الدور </font>";
	exit;
}

$name = $_POST["name"];


$conn= new mysqli("","root","", "school");
$qry1 = "SELECT * FROM role WHERE name='{$name}'";
$result = $conn->query($qry1);


if ($result->num_rows > 0){
    echo"The role already exists";
    echo "<br><a href='index.php'>Home >_< </a>";
    $conn->close();
}

else
{
    $conn = new mysqli("", "root", "", "school");
    $qry = "INSERT INTO role (name)" .
        "VALUES ('$name')";
    $conn->query($qry);
    if ($conn->connect_error) {
        die("INSERTION FAILED: " . $conn->connect_error);
    }

    echo "تمت إضافة الدور";
    echo "<br><a href='index.php'>Home >_< </a>";

}
?>


</body>
</html>