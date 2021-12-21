<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Prompt', sans-serif;
    }
</style>
</head>
<body>
<h3>Array Name&Age</h3>
<?php

$name = array("Thammanun","Xenial","Yorn","Mina","Ryoma");
$age = array("19","20","17","23","20");

echo("ชื่อ : ".$name[0]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; อายุ :".$age[0]."<br>");
echo("ชื่อ : ".$name[1]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; อายุ :".$age[1]."<br>");
echo("ชื่อ : ".$name[2]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; อายุ :".$age[2]."<br>");
echo("ชื่อ : ".$name[3]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; อายุ :".$age[3]."<br>");
echo("ชื่อ : ".$name[4]." &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; อายุ :".$age[4]."<br>");


?>
</body>
</html>