<?php
	include("env.php");
$conn= new mysqli("","root","", "school");
$qry = "SELECT * FROM role";
$qry1 = "SELECT * FROM user";
$result = $conn->query($qry);
$result1 = $conn->query($qry1);
?>

<html dir="RTL">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-6">
<META HTTP-EQUIV="Content-language" CONTENT="ar">
<title>إسناد مستخدَم لدور </title>
</head>

<body>
<form method=post action=add_u_r_back.php>
<CENTER>

		
<table border=1 width=50%>
        <tr>
        <td>المستخدم</td>
        </tr>
        <tr>
            <td>
                <select name=login>
                    <?php
                        while($row = $result1->fetch_object())
                           {
                                echo"<option value=$row->login >$row->login </option>";
                           }
                    ?>
                </select>
            </td>
        </tr>
</table>

<br>

    <table border=1 width=50%>
        <tr>
            <td>الدور</td>
        </tr>
        <tr>
            <td>
                <select name=role>
                    <?php
                    while($row1 = $result->fetch_object())
                    {
                        echo"<option value=$row1->name >$row1->name </option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
    </table>

<input type=submit value="إدخال">

</CENTER>
</form>


</body>



</html>