<?php
    $arr=array(3,6,8,2,17,7,1,4,9);
    function evenOddCount($arr)
    {
        $evenCount=0;
        $oddCount=0;
        foreach($arr as $ele){
            if($ele%2==0)
                $evenCount++;
            else
                $oddCount++;
        }
        return array($evenCount,$oddCount);

    }
    function OperationOnArray(&$arr)
    {
        list($evenCount,$oddCount)=evenOddCount($arr);
        echo "Even count is : $evenCount"."<br><br>";
        echo "Odd count is : $oddCount"."<br><br>";
        for ($i=0; $i < count($arr); $i++) { 
           if($arr[$i]%2==0)
                $arr[$i]+=$oddCount;
            else
                $arr[$i]*=$evenCount;
        }
    }
    function display($arr)
    {
        foreach($arr as $ele)
            echo "$ele ";
        echo "<br><br>";
    }
    echo "Array elements are : ";
    display($arr);
    OperationOnArray($arr);
    echo "Array elements after evenOddCount Operations : ";
    display($arr);
?>