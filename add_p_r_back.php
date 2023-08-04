<html dir="RTL">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-6">
    <META HTTP-EQUIV="Content-language" CONTENT="ar">
    <title>إضافة نصريح</title>
</head>

<body>

<?php

if (!isset($_POST["role"]) or $_POST["role"]==""){
    echo "<font color=red>يجب اختيار الدور</font>";
    exit;
}

if (!isset($_POST["permission"]) or $_POST["permission"]==""){
    echo "<font color=red>يجب اختيار التصريح</font>";
    exit;
}

$role = $_POST["role"];
$permission = $_POST["permission"];



$conn= new mysqli("","root","", "school");
$qry1 = "SELECT * FROM permission_role WHERE role_name='{$role}' AND permission_name='{$permission}'";
$result = $conn->query($qry1);


if ($result->num_rows > 0){
    echo"The operation was done before";
    echo "<br><a href='index.php'>Home >_< </a>";
    $conn->close();

}

else {
    $qry = "INSERT INTO permission_role (permission_name,role_name)" .
        "VALUES ('$permission','$role')";
    $conn->query($qry);
    if ($conn->connect_error) {
        die("INSERTION FAILED: " . $conn->connect_error);
    }
    $conn->close();
    echo "تمت إضافة الإذن";

    echo "<br><a href='index.php'>Home >_< </a>";


}
?>


</body>
</html>