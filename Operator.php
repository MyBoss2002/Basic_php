<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        $x = 20; 
        $y = 3;
        echo "<b>1.ตัวดำเนินการ</b><br>" ;
        echo "ผลลัพธ์ของ $x + $y เท่ากับ " .($x + $y)."<br>";
        echo "ผลลัพธ์ของ $x - $y เท่ากับ " .($x - $y)."<br>";
        echo "ผลลัพธ์ของ $x * $y เท่ากับ " .($x * $y)."<br>";
        echo "ผลลัพธ์ของ $x / $y เท่ากับ " .($x / $y)."<br>";
        echo "ผลลัพธ์ของ $x % $y เท่ากับ " .($x % $y)."<br><br>";
        echo "<b>2.ตัวดำเนินการเพิ่มค่าและลดค่า</b><br>" ;
        $x =10; $a=10;
        $b=++$a;
        $z=$x++;
        echo "ค่าของ x และ a (ก่อนการประมวลผล) x =10; a=10 <br>  ";
        echo "ค่าของ z (จากสูตร  z=++ นำค่า x ไปเก็บใน z จะได้ค่าเดิมของ x) =$z,<br> ";
        echo "ค่าของ b (จากสูตร  b=++a นำค่า a ก่อนแล้วนำไปเก็บใน b) $b,<br> ";
        echo "ค่าของ x และ a (หลังการประมวลผล) x =$x, a=$a <br>  ";
        ?>
</body>
</html>