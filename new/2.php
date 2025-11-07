<?php
class Button {
    private $clickCount;    
    public function __construct() {
        $this->clickCount = 0;
    }   
    public function click() {
        $this->clickCount++;
    }    
    public function click_count() {
        return $this->clickCount;
    }    
    public function reset() {
        $this->clickCount = 0;
    }
}

echo  "Пример 1" . "\n";
$button = new Button();
$button->click();
$button->click();
echo $button->click_count() . "\n";
$button->click();
echo $button->click_count() . "\n";

echo  "Пример 2" . "\n";
$button = new Button();
$button->click();
$button->click();
echo $button->click_count() . "\n";
$button->reset();
$button->click();
echo $button->click_count() . "\n";

echo  "Пример 3" . "\n";
$button = new Button();
$button->click();
echo $button->click_count() . "\n";
?>
