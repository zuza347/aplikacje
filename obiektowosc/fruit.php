<?php
   class fruit{
    public $name;
    public $color;
    public function __construct($name, $color){
        $this->name=$name;
        $this->color=$color;
    }
        protected function intro(){
            echo "the hruit is {$this->name}and the color is{$this->color}.";
        }

    }
    class strawberry extends fruit{
        public function message(){
            echo"Am I a fruit or berry?";
        }
    }
    $strawberry=new strawberry("strawberry","red");
    $strawberry ->message();
    $strawberry ->intro();

?>