<?php

class Rectangle {
    private $x;
    private $y;
    private $w;
    private $h;
    
    public function __construct($x, $y, $w, $h) {
        $this->x = $x;
        $this->y = $y;
        $this->w = $w;
        $this->h = $h;
    }
    
    public function get_x() {
        return $this->x;
    }
    
    public function get_y() {
        return $this->y;
    }
    
    public function get_w() {
        return $this->w;
    }
    
    public function get_h() {
        return $this->h;
    }
    
    public function intersection($other) {
        
        $x1 = max($this->x, $other->get_x());
        $x2 = min($this->x + $this->w, $other->get_x() + $other->get_w());
        
        
        $y1 = max($this->y, $other->get_y());
        $y2 = min($this->y + $this->h, $other->get_y() + $other->get_h());
        
        
        $w_intersect = $x2 - $x1;
        $h_intersect = $y2 - $y1;
        
        
        if ($w_intersect > 0 && $h_intersect > 0) {
            return new Rectangle($x1, $y1, $w_intersect, $h_intersect);
        } else {
            return null;
        }
    }
}


echo "Пример 1:\n";
$rect1 = new Rectangle(0, 0, 10, 10);
$rect2 = new Rectangle(5, 5, 10, 10);
$rect3 = $rect1->intersection($rect2);

if ($rect3 === null) {
    echo 'No intersection' . "\n";
} else {
    echo $rect3->get_x() . " " . $rect3->get_y() . " " . $rect3->get_w() . " " . $rect3->get_h() . "\n";
}


echo "Пример 2:\n";
$rect1 = new Rectangle(0, 0, 10, 10);
$rect2 = new Rectangle(10, 0, 10, 10);
$rect3 = $rect1->intersection($rect2);

if ($rect3 === null) {
    echo 'No intersection' . "\n";
} else {
    echo $rect3->get_x() . " " . $rect3->get_y() . " " . $rect3->get_w() . " " . $rect3->get_h() . "\n";
}


echo "Пример 3:\n";
$rect1 = new Rectangle(3, 5, 2, 1);
$rect2 = new Rectangle(1, 2, 10, 10);
$rect3 = $rect1->intersection($rect2);

if ($rect3 === null) {
    echo 'No intersection' . "\n";
} else {
    echo $rect3->get_x() . " " . $rect3->get_y() . " " . $rect3->get_w() . " " . $rect3->get_h() . "\n";
}

?>
