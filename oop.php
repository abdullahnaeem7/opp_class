<?php

class Calculation {
    public $a, $b, $c;

    function sum() {
        $this->a = $this->b + $this->c;
    }
}
$calculation = new Calculation();
$calculation->b = 50;
$calculation->c = 50;
$calculation->sum();
echo $calculation->a;

?>