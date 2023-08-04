<?php
session_start();
$session_id = session_id(); 
$login = $_POST["login"];
$pass = $_POST["pass"];

$conn= new mysqli("","root","", "school");
$qry = "SELECT * FROM user WHERE login='{$login}'";
$result = $conn->query($qry);
if ($result->num_rows > 0)
{
	$hashpass = md5($pass);
	$row = $result->fetch_object();
	if($hashpass == $row->pass)
	{
		$now = date("Y-m-d H:i:s");
		$_SESSION ["login"] = $login;
		$_SESSION ["pass"] = $pass;
		$qry = "UPDATE user SET id_session='{$session_id}', login_date='{$now}' WHERE login='{$login}'";
		$result = $conn->query($qry);
		header("Location: " . "index.php");
	}
	else
	{
			echo "<font color=red>كلمة المرور أو اسم المستخدم غير صحيحة  </font>";
	}
}
else
{
	echo "<font color=red>لست في النظام</font>";
}







?>