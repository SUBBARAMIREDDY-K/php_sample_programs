<?php
     $arr=array(10,17,2,-7,0,7,27);
     $element=7;
     $index = array_search($element,$arr);
     echo "Element $element is at $index position"."<br><br>";
     $sum=array_sum($arr);
     $avg=array_sum($arr)/count($arr);
     echo "Sum is : $sum"."<br><br>";
     echo "Average is : $avg"."<br><br>";
     echo "Array Elements are : ";
     foreach($arr as $ele)
        echo "$ele ";
    $reverse=array_reverse($arr);
    echo "<br><br>Array Elements in Reverse order : ";
    foreach($reverse as $ele)
        echo "$ele ";
?>