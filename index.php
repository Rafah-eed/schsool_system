<?php

include("env.php");

if(! isset($_SESSION['counter'])){
	$_SESSION['counter']=1;
}
else
{ 
	$_SESSION['counter'] ++;
}

?>



<html dir="RTL">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-6">
<META HTTP-EQUIV="Content-language" CONTENT="ar">
<title>مدرسة المتميزين النموذجية</title>

</head>

<body>
<center><h2>🌸 أهلاً بكم في مدرسة المتميزين الخاصة 🌸 </h2></center>
<ul>
    <li>الدخول للنظام
        <ul>
            <li><a href=login.php>Login</a></li>
			<li><a href=register.php>Register</a></li>
			<li><a href=logout.php>Logout</a></li>
			<li><a href=add_role.php>Add role</a></li>
			<li><a href=add_permission.php>Add permission</a></li>
			<li><a href=add_p_r.php>Add permission to role</a></li>
			<li><a href=add_u_r.php>Add role to user</a></li>
        </ul>
    </li>

	<li>المدرسين
		<ul>
			<li><a href=add_teacher.php>إضافة مدرس</a></li>
            <li><a href=delete_teacher.php>حذف مدرس</a></li>
			<li><a href=view_teacher.php>عرض المدرسين</a></li>
		</ul>
	</li>
	
	<li>الطلاب
		<ul>
			<li><a href=add_student.php>إضافة طالب</a></li>
		</ul>
	</li>
	
	
	<li>التسجيل
		<ul>
			<li>الأوراق المطلوبة</li>
		</ul>
	</li>
	<li><a href=reports.php>التقارير </a></li>
</ul>
</body>
</html>