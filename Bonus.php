<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมเพื่อคำนวณหาเงินโบนัส </title>
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
    echo "<center><b><h2>โปรแกรมเพื่อคำนวณหาเงินโบนัส</h2></b></center><br>";
    $price = 5000;
    if($price<10000)
    $bonus=$price * 0.80;
    else if($price<50000)
    $bonus=$price * 0.50;
    else if($price>50000)
    $bonus=$price * 0.30;
    else $bonus=0;
    $income = $price+$bonus;
    $tax = $income*0.07;
    $revenue = $income-$tax;
    echo "เงินเดือน  : $price   บาท<br>";
    echo "------------------------------------<br>";
    printf("ได้โบนัส : %.2f บาท<br>\n", $bonus );
    printf("รายรับสุทธิ : %.2f บาท<br>\n", $income );
    echo "คิดภาษี 7% จากรายรับสุทธิ  : $tax   บาท<br>";
    echo "รายรับหลังหักภาษี  : $revenue   บาท<br>";
    echo "------------------------------------<br>";
    ?>

</body>
</html>