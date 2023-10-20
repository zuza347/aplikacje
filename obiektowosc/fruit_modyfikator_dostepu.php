<?php
    class fruit{
        public $name;
        protected $color;
        private $weight;
    }
   $mango =new fruit();
   $mango->name='mango';//ok
   $mango->color='yellow';//error
   $mango->weight="300";//error
?>