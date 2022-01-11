<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work8</title>
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
<?php

echo "<center><h2>Article 3</h2></center>";
    if (isset($_POST['Toy'])) {
       $rand11 = rand(1, 6); $rand12 = rand(1, 6); $rand13 = rand(1, 6); $rand14 = rand(1, 6); $rand15 = rand(1, 6);
       $rand21 = rand(1, 6); $rand22 = rand(1, 6); $rand23 = rand(1, 6); $rand24 = rand(1, 6); $rand25 = rand(1, 6);
       $rand31 = rand(1, 6); $rand32 = rand(1, 6); $rand33 = rand(1, 6); $rand34 = rand(1, 6); $rand25 = rand(1, 6);

       $rand16 = rand(1, 6); $rand17 = rand(1, 6); $rand18 = rand(1, 6); $rand19 = rand(1, 6); $rand1x = rand(1, 6);
       $rand26 = rand(1, 6); $rand27 = rand(1, 6); $rand28 = rand(1, 6); $rand29 = rand(1, 6); $rand2x = rand(1, 6);
       $rand36 = rand(1, 6); $rand37 = rand(1, 6); $rand38 = rand(1, 6); $rand39 = rand(1, 6); $rand2x = rand(1, 6);
       
       $sum1 = $rand11+$rand21+$rand31;
       if($sum1 >11){
            $print1 = "Height" ;
        }elseif($sum1 <= 9){
            $print1 = "Low" ;
        }else{
            $print1 = "Medium";
        }
       
    }
        echo "<center>ผลการทอยลูกเต๋า 3 ลูก จำนวน 10 ครั้ง</center> <br>";  
        echo "<br>-----------------Round 1-------------------";
        echo "<br> ลูกเต๋าที่ 1 = ".$rand11 ;
        echo "<br> ลูกเต๋าที่ 2 = ".$rand21;
        echo "<br> ลูกเต๋าที่ 3 = ".$rand31; 
        echo "<br> ผลการทอยลูกเต๋า 3 ลูก : ".$sum1. " : ".$print1;
        echo "<br>----------------------------------------------<br>";

        echo "<br>-----------------Round 1-------------------";
        echo "<br> ลูกเต๋าที่ 1 = ".$rand11 ;
        echo "<br> ลูกเต๋าที่ 2 = ".$rand21;
        echo "<br> ลูกเต๋าที่ 3 = ".$rand31; 
        echo "<br> ผลการทอยลูกเต๋า 3 ลูก : ".$sum1. " : ".$print1;
        echo "<br>-----------------------------------------------<br>";


?>
</body>
</html>
<center>
<form  method="POST"> 
    <input type="Submit" name="Toy" value="Roll Dice">
</form>
</center>