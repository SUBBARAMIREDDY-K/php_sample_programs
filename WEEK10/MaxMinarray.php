<?php
     $arr=array(10,7,17,2,-7,0,27);
     $max=max($arr);
     $min=min($arr);
     echo "Minimum element is : $min <br><br>";
     echo "Maximum element is : $max <br><br>";
     echo "Array elements before updation are : ";
     foreach($arr as $ele)
        echo "$ele ";
    for ($i=0; $i < count($arr); $i++) { 
        $arr[$i]+=$min;
    }
    echo "<br><br> Array elements after adding  Minumum element to each : ";
    foreach($arr as $ele)
        echo "$ele ";
    for ($i=0; $i < count($arr); $i++) { 
          $arr[$i]*=$max;
    }
    echo "<br><br> Array elements after Multiplying  Maximum element to each : ";
    foreach($arr as $ele)
        echo "$ele ";
    echo "<br><br> Array elements after Updation : ";
    foreach($arr as $ele)
        echo "$ele ";
?>