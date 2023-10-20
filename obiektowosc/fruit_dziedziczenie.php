<?php
    class fruit{
        public $name;
        public $color;
        public function __construct($name, $clolr){
            $this->name=$name;
            $this->color=$color;
        }
        protected function intro(){
            echo "the hruit is {$this->name}and the color is{$this->color}.";
        }

    }
    
?>