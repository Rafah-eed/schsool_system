<?php
	include("env.php");
?>

<html dir="RTL">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-6">
<META HTTP-EQUIV="Content-language" CONTENT="ar">
<title>إضافة مدرس</title>
</head>

<body>

<form method=post action=add_teacher_back.php>
	<CENTER>
	<table>
		<tr>
			<td>اسم المدرس</td>
			<td><input type=text name="fn"></td>
		</tr>
		
		<tr>
			<td>شهرة المدرس</td>
			<td><input type=text name=ln></td>
		</tr>
		
		<tr>
			<td>اسم الأب</td>
			<td><input type=text name=fthn></td>
		</tr>
		
		
		<tr>
			<td>تاريخ الولادة</td>
			<td><input type=date name=birthdate></td>
		</tr>
		
		<tr>
			<td>الجنس</td>
			<td>
				<select name=sex>
					<option value=M selected>ذكر</option>
					<option value=F>أنثى</option>
				</select>
			</td>
		</tr>
	</table>
	<input type=submit value="أدخل بيانات المدرس">
	</CENTER>
</form>

</body>



</html>