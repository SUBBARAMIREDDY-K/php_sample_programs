<?php
    function swapByValue($a,$b)
    {
        $temp=$a;
        $a=$b;
        $b=$temp;
    }
    function swapByReference(&$x,&$y)
    {
        $temp=$x;
        $x=$y;
        $y=$temp;
    }
    $a=10;
    $b=20;
    echo "CALL BY VALUE TECHINQUE  <br><br>";
    echo "Before Swapping values are : $a $b"."<br><br>";
    swapByvalue($a,$b);
    echo "After Swapping values are : $a $b"."<br><br>";
    echo "CALL BY REFERENCE TECHINQUE  <br><br>";
    echo "Before Swapping values are : $a $b"."<br><br>";
    swapByReference($a,$b);
    echo "After Swapping values are : $a $b"."<br><br>";
?>
