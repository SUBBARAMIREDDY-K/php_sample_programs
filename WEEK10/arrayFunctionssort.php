<?php
    $arr=array(10,7,17,2,-7,0,27);
    $assoc=array("Asus"=>5,"Microsoft"=>2,"pixel"=>3,"Iphone"=>1,"sony"=>4);
   echo "Before Sorting the Indexed Array is : ";
   for($i=0;$i<count($arr);$i++)
   {
       echo $arr[$i]." ";
   }
   sort($arr);//sort
   echo "<br><br>"."After Sorting the Indexed Array is : ";
   for($i=0;$i<count($arr);$i++)
   {
       echo $arr[$i]." ";
   }
   echo "<br><br>"."Before Sorting the Associative Array is : "."<br>";
   echo "Key => value : "."<br>";
   foreach($assoc as $key=>$value)
        echo "$key => $value"."<br>";
   asort($assoc);//asort()
   echo "<br>"."After Sorting the Associative Array is : "."<br>";
   echo "Key => value : "."<br>";
   foreach($assoc as $key=>$value)
        echo "$key => $value"."<br>";
?>