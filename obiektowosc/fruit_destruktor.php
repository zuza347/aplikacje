<?php
    class fruit{
        public $name;
        public $color;
        
        function __construct($name){
            $this->name=$name;
            
        }
        function __destruct(){
            echo "The fruit is {$this->name}.";
        }
       
    }
   $apple =new fruit("Apple");
?>