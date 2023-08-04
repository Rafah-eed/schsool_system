<?php
session_start();
$session_id = session_id(); 
$login = $_POST["login"];
$pass = $_POST["pass"];
$v_pass = $_POST["v_pass"];

if ($v_pass == $pass){
   


if (!isset($_POST["login"]) or $_POST["login"]==""){
    echo "<font color=red> يجب إدخال الاسم </font>";
	exit;
}
if(!isset($_POST["pass"]) or $_POST["pass"]==""){
	echo "<font color=red> يجب إدخال كلمة المرور </font>";
	exit;
}



$conn= new mysqli("","root","", "school");
$qry = "SELECT * FROM user WHERE login='{$login}'";
$result = $conn->query($qry);
if ($result->num_rows == 0)
{
$now = date("Y-m-d H:i:s");
$hashpass = md5($pass);


$conn= new mysqli("","root","", "school");
$qry = "INSERT INTO user (login, pass, id_session, login_date)".
	   "VALUES ('$login', '$hashpass', '$session_id', '$now')";
$conn->query($qry);
if ($conn->connect_error) {
	die("INSERTION FAILED: " . $conn->connect_error);
}
$conn->close();
$login=$_SESSION ["login"];
$pass=$_SESSION ["pass"];

echo "You are Registered";

echo "<br><a href='index.php'>Home >_< </a>";

	
}
else {
   
    header("Location: " . "register.php");
    //كيف اعطي رسالة انو الاسم مستخدَم و لازم يغيره
}

}

else
{
    echo "The confirmed password is wrong";
}

?>