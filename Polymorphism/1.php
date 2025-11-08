<?php

class Selector {
    private $numbers;
    
    public function __construct($values) {
        $this->numbers = $values;
    }
    
    public function get_odds() {
        $odds = [];
        foreach ($this->numbers as $number) {
            if ($number % 2 != 0) {
                $odds[] = $number;
            }
        }
        return $odds;
    }
    
    public function get_evens() {
        $evens = [];
        foreach ($this->numbers as $number) {
            if ($number % 2 == 0) {
                $evens[] = $number;
            }
        }
        return $evens;
    }
}

echo  "Пример 1" . "\n";
$values = [11, 12, 13, 14, 15, 16, 22, 44, 66];
$selector = new Selector($values);
$odds = $selector->get_odds();
$evens = $selector->get_evens();
echo implode(' ', $odds) . "\n";
echo implode(' ', $evens) . "\n";

echo  "Пример 2" . "\n";
$values = [6, 6, 0, 4, 8, 7, 6, 4, 7, 5];
$selector = new Selector($values);
$odds = $selector->get_odds();
$evens = $selector->get_evens();
echo implode(' ', $odds) . "\n";
echo implode(' ', $evens) . "\n";

echo  "Пример 3" . "\n";
$values = [];
$selector = new Selector($values);
$odds = $selector->get_odds();
$evens = $selector->get_evens();


if (empty($odds)) {
    echo "# empty line\n";
} else {
    echo implode(' ', $odds) . "\n";
}

if (empty($evens)) {
    echo "# empty line\n";
} else {
    echo implode(' ', $evens) . "\n";
}

?>
