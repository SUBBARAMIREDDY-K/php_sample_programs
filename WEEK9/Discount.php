<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body bgcolor="gold">
    <form action="#" method="get">
        <table align="center" border='10'>
            <tr>
            <td>Enter the Number : </td>
            <td><input type="text" name='num'></td>
            </tr>
            <tr>
                <td colspan="2"><center><button>Submit</button></center></td>
            </tr>
        </table>
    </form>
    
</body>
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
</html>