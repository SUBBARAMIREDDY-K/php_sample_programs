<?php
    $n=$_GET["num"];
    $count=0;
    echo "<br>Prime Numbers Upto $n are : ";
    for($i=1;$i<=$n;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            if($i % $j==0)
                $count++;
        }
        if($count==2)
            echo "$i "; 
        $count=0;
    }
?>
