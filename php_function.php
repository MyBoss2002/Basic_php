<?php
        echo"===============is_numberic===============<br>";
        $num1 = 1545000;
        $num2 = "125000";
        $num3 = "Mr.Thammanun";
        echo"num1 = ".is_numeric($num1)."<br>";
        echo"num2 = ".is_numeric($num2)."<br>";
        echo"num3 = ".is_numeric($num3)."<br>";
        echo"===============is_numberic===============<br>";
        echo"round 4.7 = ".round(4.7)."<br>";
        echo"ceil 4.7 = ".ceil(4.7)."<br>";
        echo"floor 4.7 = ".floor(4.7)."<br>";
        echo"===============is_numberic===============<br>";
        echo"min (4,7,8,3,5,2) = ".min(4,7,8,3,5,2)."<br>";
        echo"max (4,7,8,3,5,2) = ".max(4,7,8,3,5,2)."<br>";
        echo"===============is_numberic===============<br>";
        echo"rand (1, 45) = ".rand(1, 45)."<br>";
        echo"===============is_null===============<br>";
        $a = null;
        echo"is_null (45) = ".is_null($a)."<br>";
        echo"===============Number_format===============<br>";
        $numf = 5000;
        echo"number_format 5000 = ".number_format($numf)."<br>";
        echo"==============trim===============<br>";
        echo"trim = ".trim(" Mr.Thammanun ")."<br>";
        echo"ltrim = ".trim(" Mr.Thammanun")."<br>";
        echo"rtrim = ".trim("Mr.Thammanun ")."<br>";
        echo"==============strtolower, strtoupper===============<br>";
        echo"strtolower (THAMMANUN) = ".strtolower("THAMMANUN")."<br>";
        echo"strtoupper (thammanun) = ".strtoupper("thammanun")."<br>";
        echo"==============substr===============<br>";
        $text = "Thammanun";
        echo"substr (Thammanun) = ".substr($text,4,4)."<br>";
        echo"==============substr_count===============<br>";
        $text = "Thammanun";
        echo"substr_count (Thammanun) = ".substr_count($text, "n")."<br>";
        echo"==============strlen===============<br>";
        echo"strlen (Thammanun) = ".strlen($text)."<br>";
        echo"==============MD5===============<br>";
        $passw=12345;
        echo"MD5 (12345) = ".md5($passw)."<br>";
        echo"==============Date===============<br>";
        echo"Date (d-m-y) = ".date('d-m-y')."<br>";
        echo"Date (d-m-y) = ".date('d/m/y')."<br>";
        echo"Date (d-m-y) = ".date('d-m-Y')."<br>";
        echo"Date (Thai Year) =".date("Y")+543;
    ?>