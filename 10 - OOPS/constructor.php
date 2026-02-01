<?php 
    class A{
        private $a, $b, $ans;

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

    $obj = new A(18, 7);
    echo $obj->Add()."<br>";
    echo $obj->Div();
?>
