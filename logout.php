<?php

    include("env.php");
    
    if (!isset($_SESSION["login"]) ){
        echo "<font color=red>   أ لقد خرجت مسبقاً من النظام </font>";
        exit;
    }

    else 
    {
        $login = $_SESSION["login"];
        $conn= new mysqli("","root","" , "school");
		$qry = "UPDATE user SET id_session=null WHERE login='{$login}'";
        $conn->query($qry);
        UNset($_SESSION["login"]);
        //session_destroy();
        echo"You are loged out";
    }

  /*  <?php
    session_start();
    session_destroy();
    // Redirect to the login page:
    header('Location: index.php');
    ?>*/
?>
