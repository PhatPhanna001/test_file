<?php
    class fruit{
        public $apple;
        public $mango;
        // construct run before destruct and then run destruct
        function __construct($name){
            $this->name=$name;
        }
        function __get_name(){
            return $this->name;
            echo $apple;
        }
        function _destruct(){
            echo $this->name." After"."<br/>";
        }
    }
    $apple=new fruit('Apple');
    echo $apple->__get_name();
    // echo $mango->__get_name();
?>