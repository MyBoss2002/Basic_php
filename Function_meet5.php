<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work8.5</title>
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
    echo "<h2>Article 5</h2>";
    if(isset($_POST['btn-price'])){
        $price = $_POST['price'];
        $CH = Check_price($price);
    }
    function Check_price($price){
        if ($price < 0){
            return $CH ="กรอกตัวเลขจำนวนสินค้าไม่ถูกต้อง";
        }else{
            return $CH ="กรอกตัวเลขถูกต้อง";
        }
    }
?>
<form method="post"> 
    <p>เช็คการป้อนราคาสินค้า</p>
    <input type="text" name="price">
    <input type="submit" name="btn-price" value="submit">
</form>
    <?php if(isset($CH)){ ?>
        <p><?php echo $CH ?></p>
    <?php } ?>
</body>
</html>
