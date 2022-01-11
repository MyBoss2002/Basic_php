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
        echo "<h2>Article 1</h2>";
        echo "------------------------------------<br>";
        $text = "Thammanun";
        $textupper = strtoupper($text); 
        $textlower = strtolower($text); 
        echo substr($textlower, 0,1).substr($textupper,1);
        echo "<br>------------------------------------";
        
        echo "<h2>Article 2</h2>";
        $date = date('d/F/Y');
        echo "------------------------------------<br>";
        echo $date."<br>";
        $MonthTH=array(
            "0"=>"",
            "1"=>"มกราคม",
            "2"=>"กุมภาพันธ์",
            "3"=>"มีนาคม",
            "4"=>"เมษายน",
            "5"=>"พฤษภาคม",
            "6"=>"มิถุนายน", 
            "7"=>"กรกฎาคม",
            "8"=>"สิงหาคม",
            "9"=>"กันยายน",
            "10"=>"ตุลาคม",
            "11"=>"พฤศจิกายน",
            "12"=>"ธันวาคม"                 
        );
        $d = date('d');
        $y = date('Y');
       
        function mth(){
            global $MonthTH;
            $m= $MonthTH[date("n")];
            return $m;
        }
        $TH=time();
        echo "วันที่  ".$d." เดือน "; echo mth($TH); echo" ค.ศ.  ".$y;
        echo "<br>------------------------------------<br>";

        echo "<h2>Article 4</h2>";
        echo "------------------------------------<br>";
        function TH($time)
    {
        $dAY  = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
        $mTH = array(
            "0" => "",
            "1" => "มกราคม",
            "2" => "กุมภาพันธ์",
            "3" => "มีนาคม",
            "4" => "เมษายน",
            "5" => "พฤษภาคม",
            "6" => "มิถุนายน",
            "7" => "กรกฎาคม",
            "8" => "สิงหาคม",
            "9" => "กันยายน",
            "10" => "ตุลาคม",
            "11" => "พฤศจิกายน",
            "12" => "ธันวาคม"
        );
            $TH = "วัน" . $dAY[date("w",)];
            $TH .= " ที่ " . date("j", );
            $TH .= " เดือน " . $mTH[date("n",)];
            $TH .= " พ.ศ. " . (date("Y",) + 543);
            return $TH;
        }
        $th_date = time();
             echo TH($th_date);
             echo "<br>------------------------------------<br>";

        
        
        ?>
</body>
</html>