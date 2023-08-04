<?php
	function getSession(){
		$login = $_SESSION["login"];
		$conn= new mysqli("","root","" , "school");
		$qry = "SELECT * FROM user WHERE login='{$login}'";
		$result = $conn->query($qry);
		if ($result->num_rows > 0)
		{	
			$row = $result->fetch_object();
			return $row->id_session;
		}
		else
		{
			echo "<font color=red>خطأ ما في الدخول إلى النظام</font>";
			exit;
		}
	}
	
	function checkSession($id){
		$idSession = getSession();
		
		if ($idSession == $id)
		{	
		}
		else
		{
			echo "<font color=red>خطأ ما في الدخول إلى النظام</font>";
			exit;
		}
	}
	