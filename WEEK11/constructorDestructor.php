<?php
    class College
    {
        public $cname="RGM";
        function __construct()
        {
            echo "College Name : ".$this->cname."<br>";
        }
        function __destruct()
        {
            echo "$this->cname is Autonomous college<br>";
        }
    }
    class Student extends College
    {
        public $sname;
        function __construct($name)
        {
            $this->sname=$name;
            parent::__construct();
            echo "Student Name : <h2>$this->sname</h2><br>";
        }
        function __destruct()
        {
            parent::__destruct();
            echo "$this->sname from Kadapa";
        }
    }
    $student1 = new Student('PrinceRam');
?>