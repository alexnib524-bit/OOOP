<?php

class MinStat {
    private $numbers;
    
    public function __construct() {
        $this->numbers = [];
    }
    
    public function add_number($number) {
        $this->numbers[] = $number;
    }
    
    public function result() {
        if (empty($this->numbers)) {
            return null;
        }
        return min($this->numbers);
    }
}

class MaxStat {
    private $numbers;
    
    public function __construct() {
        $this->numbers = [];
    }
    
    public function add_number($number) {
        $this->numbers[] = $number;
    }
    
    public function result() {
        if (empty($this->numbers)) {
            return null;
        }
        return max($this->numbers);
    }
}

class AverageStat {
    private $numbers;
    
    public function __construct() {
        $this->numbers = [];
    }
    
    public function add_number($number) {
        $this->numbers[] = $number;
    }
    
    public function result() {
        if (empty($this->numbers)) {
            return null;
        }
        return array_sum($this->numbers) / count($this->numbers);
    }
}

echo  "Пример 1" . "\n";
$values = [1, 2, 4, 5];

$mins = new MinStat();
$maxs = new MaxStat();
$average = new AverageStat();
foreach ($values as $v) {
    $mins->add_number($v);
    $maxs->add_number($v);
    $average->add_number($v);
}

echo $mins->result() . " " . $maxs->result() . " " . sprintf('%05.3f', $average->result()) . "\n";

echo  "Пример 2" . "\n";
$mins = new MinStat();
$maxs = new MaxStat();
$average = new AverageStat();

echo ($mins->result() === null ? 'None' : $mins->result()) . " " . 
     ($maxs->result() === null ? 'None' : $maxs->result()) . " " . 
     ($average->result() === null ? 'None' : $average->result()) . "\n";

echo  "Пример 3" . "\n";
$values = [1, 0, 0];

$mins = new MinStat();
$maxs = new MaxStat();
$average = new AverageStat();
foreach ($values as $v) {
    $mins->add_number($v);
    $maxs->add_number($v);
    $average->add_number($v);
}
echo $mins->result() . " " . $maxs->result() . " " . sprintf('%05.3f', $average->result()) . "\n";
?>
