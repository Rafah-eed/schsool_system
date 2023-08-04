<?php
	include("env.php");
?>


<html dir="RTL">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-6">
<META HTTP-EQUIV="Content-language" CONTENT="ar">
<title>إضافة طالب </title>
</head>

<body>

<form method=post action=add_student_back.php>
	<CENTER>
	<table>
		<tr>
			<td>اسم الطالب</td>
			<td><input type=text name="fn"></td>
		</tr>
		
		<tr>
			<td>شهرة الطالب</td>
			<td><input type=text name=ln></td>
		</tr>
		
		<tr>
			<td>اسم الأب</td>
			<td><input type=text name=fthn></td>
		</tr>

        <tr>
			<td>اسم الأم</td>
			<td><input type=text name=mthn></td>
		</tr>
		
		
		<tr>
			<td>تاريخ الولادة</td>
			<td><input type=date name=birthdate></td>
		</tr>
		
		<tr>
			<td>الجنس</td>
			<td>
				<select name=sex>
					<option value=M>ذكر</option>
					<option value=F>أنثى</option>
				</select>
			</td>
		</tr>

        <tr>
			<td>الشعبة</td>
			<td>
				<select name=class>
					<option value=1>الأولى</option>
					<option value=2>الثانية</option>
                    <option value=3>الثالثة</option>
                    <option value=4>الرابعة</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>الصف</td>
			<td>
				<select name=year>
					<option value=7>الصف السابع</option>
					<option value=8>الصف الثامن</option>
                    <option value=9>الصف التاسع</option>
				</select>
			</td>
		</tr>

        <tr>
			<td>السنة الدراسية</td>
			<td><input type=date name=date></td>
		</tr>
	</table>
	<input type=submit value="أدخل بيانات الطالب">
	</CENTER>
</form>

</body>



</html>