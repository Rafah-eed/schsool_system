<html>
<head>
<title>DB install...</title>
</head>

<body>

<?php

$qryy=array();
$qryy="Create Database if not exists school";
$qryy="use  school";

$qry[]="CREATE TABLE IF NOT EXISTS `student` (
        `id` int(7) auto_increment NOT NULL,
        `firstName` varchar(50) NOT NULL,
        `lastName` varchar(50) NOT NULL,
        `fatherName` varchar(50) NOT NULL,
        `motherName` varchar(50) NOT NULL,
        `sex` ENUM('M', 'F') NOT NULL,
        `birthDate` date NOT NULL,
        `class` varchar(50) NOT NULL ,
        `year` int(3) NOT NULL,
        `date` date NOT NULL,
        unique(firstName, lastName, fatherName, motherName, birthDate),
        PRIMARY KEY  (`id`)
        ) ";


$qry[]="CREATE TABLE IF NOT EXISTS `teacher` (
        `id` int(7) NOT NULL auto_increment,
        `firstName` varchar(50) NOT NULL,
        `lastName` varchar(50) NOT NULL,
        `fatherName` varchar(50) NOT NULL,
        `birthDate` date NOT NULL,
        `sex` ENUM('M', 'F') NOT NULL,
        `active` BOOLEAN NOT NULL DEFAULT TRUE,
        unique(firstName, lastName, fatherName, birthDate),
        PRIMARY KEY  (`id`)
        ) ";	
    
$qry[]="CREATE TABLE IF NOT EXISTS `subject` (
        `id` int(7) auto_increment NOT NULL,
        `subject_name` varchar(50) NOT NULL,
        `term`  ENUM('1', '2') NOT NULL,
        `year` int(3) NOT NULL,
        unique(subject_name, term, year),
        PRIMARY KEY  (`id`)
        ) ";


$qry[]="CREATE TABLE IF NOT EXISTS `marks` (
        `id` int(7) NOT NULL auto_increment,
        `id_student` int(7) NOT NULL,
        `id_subject` int(7) NOT NULL,
        `id_teacher` int(7) NOT NULL,
        `term`  ENUM('1', '2') NOT NULL,
        `mark` int(3) NOT NULL,
        PRIMARY KEY  (`id`)
        ) ";	


$qry[]="CREATE TABLE IF NOT EXISTS `subject_teacher` (
        `id` int(7) NOT NULL auto_increment,
        `id_subject` int(7) NOT NULL,
        `id_teacher` int(7) NOT NULL,
        `term`  ENUM('1', '2') NOT NULL,
        `year` int(3) NOT NULL,
        PRIMARY KEY  (`id`)
        ) ";


//insert data..........................

$conn= new mysqli("","root","", "school");
foreach ($qry as $v ){
    $result=$conn->query($v);
   if ($conn->connect_error){
    die("connect error".$conn->connect_error);
   }
}



$conn->close();



?>
<center>Database set </center>
</body>

</html>