<?php
    interface cubic{
       function cube($num);
    }
    interface sqr{
       function square($num);
    }
    class Operations implements cubic,sqr{
        function cube($num){
            echo "Cube of number is : ".($num*$num*$num)."<br>";
        }
        public function square($num){
            echo "Square of number is : ".$num*$num."<br>";
        }
    }
    $op = new Operations();
    $op->square(7);
    $op->cube(7);
?>