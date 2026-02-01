<?php 
    class A{
        protected $a, $b, $ans;

        public function __construct($x, $y){
            echo "construtor invoked!.<br>";
            $this->a = $x;
            $this->b = $y;
        }

        public function Add(){
            $this->ans = $this->a + $this->b;

            return $this->ans;
        }

        public function Div(){
            return ($this->a / $this->b);
        }
    }

    class B extends A{
        public function multi(){
            echo "Form Child Class<br>";
            return ($this->a * $this->b);
        }
    }

    $obj = new B(18, 7);
    echo $obj->multi();

?>
