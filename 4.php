<?php

class OddEvenSeparator {
    private $numbers;
    private $evens;
    private $odds;
    
    public function __construct() {
        $this->numbers = [];
        $this->evens = [];
        $this->odds = [];
    }
    
    public function add_number($number) {
        $this->numbers[] = $number;
        
        if ($number % 2 == 0) {
            $this->evens[] = $number;
        } else {
            $this->odds[] = $number;
        }
    }
    
    public function even() {
        return $this->evens;
    }
    
    public function odd() {
        return $this->odds;
    }
}

// Пример 1:
$separator = new OddEvenSeparator();
$separator->add_number(1);
$separator->add_number(5);
$separator->add_number(6);
$separator->add_number(8);
$separator->add_number(3);
echo implode(' ', $separator->even()) . "\n";
echo implode(' ', $separator->odd()) . "\n";

?>
Вывод:

text
6 8
1 5 3