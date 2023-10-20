<?php
    class fruit{
        public $name;
        public $color;
        function __construct($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
        }
    }
    $apple=new fruit("Apple");
    $banana=new fruit("Banana");
    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
?>