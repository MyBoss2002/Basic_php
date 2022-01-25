<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm1</title>
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
<h3>ให้เขียนโปรแกรมภาษา PHP เพื่อคำนวณโบนัสของพนักงาน</h3>
<?php
$price = 250029;
$bonus = 0;
if($price>1000000)
$bonus=$price * 100;
elseif($price>50000)
$bonus=$price * 2.00;
elseif($price>10000)
$bonus=$price * 3.00;
else $bonus=0;
$Money=$price+$bonus;
echo "เงินเดือน : $price   บาท<br>";
echo "------------------------------------<br>";
echo "คุณได้โบนัส : $bonus<br>";
echo "เงินเดือนสุทธิ : $Money";
echo "<br>------------------------------------<br>";
?>
</body>
</html>