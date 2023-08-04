<?php

include("env.php");

?>


<html dir="RTL">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-6">
    <META HTTP-EQUIV="Content-language" CONTENT="ar">
    <title>إضافة دور لمستخدم</title>
</head>

<body>

<?php

if (!isset($_POST["login"]) or $_POST["role"]==""){
    echo "<font color=red>يجب اختيار الدور</font>";
    exit;
}

if (!isset($_POST["role"]) or $_POST["role"]==""){
    echo "<font color=red>يجب اختيار التصريح</font>";
    exit;
}

$role = $_POST["role"];
$login = $_POST["login"];



$conn= new mysqli("","root","", "school");
$qry1 = "SELECT * FROM role_user WHERE login='{$login}' AND role_name='{$role}'";
$result = $conn->query($qry1);


if ($result->num_rows > 0){
    echo"The operation was done before";
    echo "<br><a href='index.php'>Home >_< </a>";
    $conn->close();

}

else {
    $qry = "INSERT INTO role_user (login,role_name)" .
        "VALUES ('$login','$role')";
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