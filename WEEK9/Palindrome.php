<?php
    $num=$_GET["num"];
    $rev=0;
    $n=$num;
    while($n>1)
    {
        $rem=$n%10;
        $rev=($rev*10)+$rem;
        $n=(int)$n/10;
    }
    if($rev==$num)
        echo "$num is a Palindrome";
    else
        echo "$num is Not a palindrome";
?>