<?php
    class Father{
        public $pname;
        function setPName($name){
            $this->pname=$name;
        }
        function getPName(){
            echo "Parent Name : <h3>$this->pname</h3><br>";
        }
    }
    class Child extends Father{
        public $cname;
        function setCName($name){
            $this->cname=$name;
        }
        function getCName(){
            echo "Child Name : <h2>$this->cname</h2>";
        }
    }
    $son =  new Child();
    $son->setPName("SUBBA REDDY . K");
    $son->setCName("SUBBARAMI REDDY . K");
    $son->getPName();
    $son->getCName();
?>