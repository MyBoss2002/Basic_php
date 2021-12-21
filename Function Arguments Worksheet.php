<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Arguments Worksheet </title>
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
    function Promotion($price) {
        if($price < 5000){
            $pay = $price * 0.3;
            return $pay;
        }
        else{
            $pay = $price * 0.5;
            return $pay;
        }
    }
    ?>
    <center>
        <p>จ่าย 2000 ได้รับส่วนลด : <?php echo Promotion(2000); ?></p>
        <p>รวมเป็นเงินทั้งหมด <?php echo 2000 - Promotion(2000); ?></p>
        <p>จ่าย 5000 ได้รับส่วนลด : <?php echo Promotion(5000); ?></p>
        <p>รวมเป็นเงินทั้งหมด <?php echo 5000 - Promotion(5000); ?></p>
        </center>

</body>
</html>