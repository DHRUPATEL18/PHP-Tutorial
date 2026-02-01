<?php 
    class A{
        private $a, $b, $ans;

        public function Add($x, $y){
            $this->a = $x;
            $this->b = $y;
            $this->ans = $this->a + $this->b;

            return $this->ans;
        }

        public function Div(){
            return ($this->a / $this->b);
        }
    }

    $obj = new A();
    echo $obj->Add(18, 7)."<br>";
    echo $obj->Div();
?>
