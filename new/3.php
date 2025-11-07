<?php

class Balance {
    private $leftWeight;
    private $rightWeight;
    
    public function __construct() {
        $this->leftWeight = 0;
        $this->rightWeight = 0;
    }
    
    public function add_right($weight) {
        $this->rightWeight += $weight;
    }
    
    public function add_left($weight) {
        $this->leftWeight += $weight;
    }
    
    public function result() {
        if ($this->leftWeight > $this->rightWeight) {
            return 'L';
        } elseif ($this->rightWeight > $this->leftWeight) {
            return 'R';
        } else {
            return '=';
        }
    }
}

$balance = new Balance();
$balance->add_right(10);
$balance->add_left(6);
$balance->add_left(2);
echo $balance->result() . "\n";

$balance = new Balance();
$balance->add_right(10);
$balance->add_left(5);
$balance->add_left(5);
echo $balance->result() . "\n";
?>
